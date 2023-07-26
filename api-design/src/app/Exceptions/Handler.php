<?php

namespace App\Exceptions;

use Throwable;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Database\QueryException;
use Illuminate\Support\ItemNotFoundException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Validation\ValidationException;
use Buckhill\StateMachine\StateMachineException;
use App\DTO\JsonExceptionData\JsonExceptionData;
use Buckhill\LibEAV\Exceptions\DatabaseErrorException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    public int $timestamp;

    /**
     * A list of the exception types that are not reported.
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register(): void
    {
        $this->timestamp = Carbon::now()->unix(); // no. use timestamp() for this

        $this->reportable(function (Throwable $e) {
            if (app()->bound('sentry')) {
                app('sentry')->captureException($e);
            }
        });

        $this->renderable(function(HttpJsonClientException $e, $request) {
            return response()->json([
                'message' => $e->getMessage(),
                'timestamp' => $this->timestamp,
                'data' => $e->data
            ], $e->getCode());
        });

        $this->renderable(function(QueryException $e, $request) {
            return response()->json([
                'message' => 'Unprocessable entity',
                'timestamp' => $this->timestamp
            ], 422);
        });

        $this->renderable(function(StateMachineException $e, $request) {
            return response()->json([
                'message' => 'Unprocessable entity - '. $e->getMessage(),
                'timestamp' => $this->timestamp
            ], 422);
        });

        $this->renderable(function(ModelNotFoundException $e, $request) {
            return response()->json([
                'message' => 'Record not found',
                'timestamp' => $this->timestamp
            ], 404);
        });

        $this->renderable(function(NotFoundHttpException $e, $request) {
            return response()->json([
                'message' => 'Not found',
                'timestamp' => $this->timestamp
            ], 404);
        });

        $this->renderable(function(ValidationException $e, $request) {
            return response()->json([
                'message' => 'Failed validation - unprocessable entity',
                'timestamp' => $this->timestamp,
                'data' => $e->validator->getMessageBag()->toArray()
            ], 422);
        });

        $this->renderable(function(DatabaseErrorException $e, $request) {
            return response()->json([
                'message' => $e->getMessage(),
                'timestamp' => $this->timestamp,
                'data' => $e->getErrors()
            ], $e->getCode());
        });
    }

    /**
     * @param  Request  $request
     * @param  Throwable  $e
     * @return Response
     * @throws Throwable
     */
    protected function context(): array
    {
        $userId = null; //TODO extract actual userId from request() here

        return array_merge(parent::context(), [
            'userId' => $userId,
            'timestamp' => $this->timestamp,
        ]);
    }
}
