<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        DB::unprepared(
            '
CREATE TRIGGER `claims_api_calculate_external_ref_hash_before_insert` 
BEFORE INSERT ON claims_api_claims
    FOR EACH ROW 
        SET new.external_ref_hash = UNHEX(SHA2(new.external_ref, 224));'
        );
    }

    public function down(): void
    {
        Schema::dropIfExists('claims_api_calculate_external_ref_hash_before_insert');
    }
};