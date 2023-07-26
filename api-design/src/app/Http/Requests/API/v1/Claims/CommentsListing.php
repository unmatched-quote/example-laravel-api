<?php

namespace App\Http\Requests\API\v1\Claims;

use Illuminate\Foundation\Http\FormRequest;

class CommentsListing extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'page' => 'nullable|integer|numeric',
            'limit' => 'nullable|integer|numeric',
            'sortBy' => 'nullable|string',
            'desc' => 'nullable',
            'revision_uuid' => 'uuid',
            'status_uuid' => 'uuid',
            'revision' => 'numeric|gte:0',
        ];
    }

    public function page(): int
    {
        $page = $this->input('page');

        if (is_null($page)) {
            return 1;
        }

        return $page;
    }

    public function limit(): int
    {
        $limit = $this->input('limit');

        if (is_null($limit)) {
            return 10;
        }

        return min($limit, 50);
    }

    public function sortBy(): ?string
    {
        return $this->input('sortBy');
    }

    public function desc(): bool
    {
        return $this->boolean('desc', true);
    }

    public function showDeleted(): bool
    {
        return $this->boolean('showDeleted', false);
    }

    public function revisionUuid(): string|null
    {
        return $this->input('revision_uuid');
    }

    public function statusUuid(): string|null
    {
        return $this->input('status_uuid');
    }

    public function revision(): int|null
    {
        return $this->input('revision');
    }

    public static function description(): array
    {
        return [
            'request' => [
                'swagger' => [
                    'tags' => [
                        'Claims',
                    ],
                    'summary' => 'List all claims comments for given claim',
                    'operationId' => 'claims-comments',
                ],
                'graphql' => [
                    'datasource' => 'Claims',
                    'queryName' => 'claimCommentListing',
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
                'page' => [
                    'swagger' => [
                        'required' => false,
                        'description' => 'What page should be returned? Should be an integer',
                        'in' => 'query',
                        'schema' => [
                            'type' => 'integer',
                        ],
                    ],
                    'graphql' => [
                        'in' => 'query',
                        'type' => 'Int',
                        'required' => false,
                    ],
                ],
                'limit' => [
                    'swagger' => [
                        'required' => false,
                        'description' => 'How many entries are there per page? Should be an integer',
                        'in' => 'query',
                        'schema' => [
                            'type' => 'integer',
                        ],
                    ],
                    'graphql' => [
                        'in' => 'query',
                        'type' => 'Int',
                        'required' => false,
                    ],
                ],
                'sortBy' => [
                    'swagger' => [
                        'required' => false,
                        'description' => 'Using which parameter should entries be sorted? Should be a string matching some of entries property.',
                        'in' => 'query',
                        'schema' => [
                            'type' => 'string',
                        ],
                    ],
                    'graphql' => [
                        'in' => 'query',
                        'type' => 'String',
                        'required' => false,
                    ],
                ],
                'desc' => [
                    'swagger' => [
                        'required' => false,
                        'description' => 'Are the entries sorted descending? Should be a string which can be interpreted as a boolean',
                        'in' => 'query',
                        'schema' => [
                            'type' => 'boolean',
                        ],
                    ],
                    'graphql' => [
                        'in' => 'query',
                        'type' => 'Boolean',
                        'required' => false,
                    ],
                ],
                'showDeleted' => [
                    'swagger' => [
                        'required' => false,
                        'description' => 'Should entries which have been soft deleted be present in the response? Should be a string which can be interpreted as a boolean',
                        'in' => 'query',
                        'schema' => [
                            'type' => 'boolean',
                        ],
                    ],
                    'graphql' => [
                        'in' => 'query',
                        'type' => 'Boolean',
                        'required' => false,
                    ],
                ],
                'revision_uuid' => [
                    'swagger' => [
                        'required' => false,
                        'description' => 'Filter entries by a specific revision_uuid? Given revision_uuid should belong to claim which comments are accessed. \n                Should be a string which can be interpreted as a uuid',
                        'in' => 'query',
                        'schema' => [
                            'type' => 'string',
                        ],
                    ],
                    'graphql' => [
                        'in' => 'query',
                        'type' => 'String',
                        'required' => false,
                    ],
                ],
                'status_uuid' => [
                    'swagger' => [
                        'required' => false,
                        'description' => 'Filter entries by a specific status_uuid? Should be a string which can be interpreted as a uuid',
                        'in' => 'query',
                        'schema' => [
                            'type' => 'string',
                        ],
                    ],
                    'graphql' => [
                        'in' => 'query',
                        'type' => 'String',
                        'required' => false,
                    ],
                ],
                'revision' => [
                    'swagger' => [
                        'required' => false,
                        'description' => 'Filter entries by a specific revision? Should be a an integer. If 0 is sent, latest revision will be shown.',
                        'in' => 'query',
                        'schema' => [
                            'type' => 'integer',
                        ],
                    ],
                    'graphql' => [
                        'in' => 'query',
                        'type' => 'Int',
                        'required' => false,
                    ],
                ],
            ],
        ];
    }
}
