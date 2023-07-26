<?php

namespace App\DTO\Claims;

use App\DTO\LengthAwarePaginator\Paginator;

/**
 * @generator-depends-on App\DTO\LengthAwarePaginator\Link
 * @generator-depends-on App\DTO\Claims\ClaimAndRevisionsData
 */
class ClaimListingPaginated extends Paginator
{
    /**
     * @var array<ClaimAndRevisionsData>
     */
    public array $data;

    public function registerData(array $data): void
    {
        $this->data = array_map(fn(array $entry) => new ClaimAndRevisionsData(...$entry), $data);
    }
}
