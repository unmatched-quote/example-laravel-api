<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        DB::unprepared(
            '
CREATE TABLE `claims_api_sections_types` (
    id bigint unsigned not null comment \'This field is purposely made non-autoincrement, leave it like that\',
    title varchar(255) not null,
    description text,
    enabled tinyint unsigned not null,
    config JSON,
    created_at datetime default null,
    updated_at datetime default null,
    PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci'
        );
    }

    public function down(): void
    {
        Schema::dropIfExists('claims_api_sections_types');
    }
};
