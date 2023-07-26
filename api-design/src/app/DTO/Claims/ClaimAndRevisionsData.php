<?php

namespace App\DTO\Claims;

use App\DTO\Claims\Tracker\Tracker;

class ClaimAndRevisionsData
{
    public readonly Claim $claim_data;

    public readonly RevisionData $revision_data;

    public Tracker $tracker;

    /**
     * @var array<RevisionData>
     */
    public readonly array $revisions_data;

    public function __construct(
        array $claim_data,
        array $revision_data,
        array $revisions_data,
        array $tracker = [],
        ?array $logic = null,
    ) {
        $this->claim_data = new Claim(...$claim_data);

        $this->revision_data = new RevisionData(...$revision_data);

        $this->revisions_data = array_map(fn($entry) => new RevisionData(...$entry), $revisions_data);

        $this->setTrackerFromArray($tracker);
    }

    public function setTrackerFromArray(array $tracker): void
    {
        $this->tracker = new Tracker(...$tracker);
    }
}
