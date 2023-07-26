<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        DB::unprepared(
            '
CREATE TRIGGER `claims_api_revisions_before_insert` 
BEFORE INSERT ON `claims_api_revisions`
    FOR EACH ROW BEGIN
        SET @revision = (
            SELECT MAX(revision)
            FROM claims_api_revisions
            WHERE claim_id = new.claim_id
        );

        IF @revision IS NULL THEN
            SET @revision = 0;
        END IF;

        SET @revision = @revision + 1;
        SET new.revision = @revision;

        UPDATE claims_api_claims
        SET revision = @revision
        WHERE id = new.claim_id;
    END'
        );
    }

    public function down(): void
    {
        Schema::dropIfExists('claims_api_revisions_before_insert');
    }
};