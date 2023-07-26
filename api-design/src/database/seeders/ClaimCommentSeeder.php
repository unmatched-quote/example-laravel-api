<?php

namespace Database\Seeders;

use App\Models\ClaimComment;
use App\Models\ClaimRevision;
use Illuminate\Database\Seeder;
use Database\Factories\ClaimCommentFactory;

class ClaimCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $revisions = ClaimRevision::get();

        $commentFactory = new ClaimCommentFactory();

        foreach ($revisions as $order => $revision) {
            if ($order % 2 === 0) {
                $definition = $commentFactory->mockedDefinition($revision->id);

                ClaimComment::create($definition);
            }
        }
    }
}
