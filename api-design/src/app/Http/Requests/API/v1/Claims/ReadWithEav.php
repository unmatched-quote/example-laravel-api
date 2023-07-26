<?php

namespace App\Http\Requests\API\v1\Claims;

use Illuminate\Foundation\Http\FormRequest;

class ReadWithEav extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            //
        ];
    }

    public static function description(): array
    {
        return [
            'request' => [
                'swagger' => [
                    'tags' => [
                        'Claims',
                    ],
                    'summary' => 'Fetch a claim with eav',
                    'operationId' => 'claims-read-with-eav',
                ],
                'graphql' => [
                    'datasource' => 'Claims',
                    'queryName' => 'claimReadWithEavByUuid',
                ],
            ],
            'parameters' => [
                'uuid' => [
                    'swagger' => [
                        'required' => true,
                        'description' => 'Uuid parameter for given entry',
                        'in' => 'path',
                        'schema' => [
                            'type' => 'string',
                        ],
                    ],
                    'graphql' => [
                        'in' => 'path',
                        'type' => 'String',
                    ],
                ],
            ],
        ];
    }
}
