<?php

namespace App\Exceptions;

use Illuminate\Http\JsonResponse;

class ClaimValidationException extends \Exception
{
    protected array $errors = [];

    public function __construct(string $message, int $code = 422, array $errors = [])
    {
        parent::__construct($message, $code);

        $this->errors = $errors;
    }

    public function render(): JsonResponse
    {
        return response()->json(['message' => $this->message, 'errors' => $this->errors], $this->code);
    }
}
