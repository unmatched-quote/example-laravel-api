<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Testing\Claims\ClaimSeeder;
use Database\Seeders\Testing\Claims\ClaimLogSeeder;
use Database\Seeders\Testing\Claims\ClaimTypeSeeder;
use Database\Seeders\Testing\Claims\ClaimStatusSeeder;
use Database\Seeders\Testing\C2MS\EavObjectsTableSeeder;
use Database\Seeders\Testing\Claims\ClaimWorkflowSeeder;
use Database\Seeders\Testing\C2MS\EavDatasetsTableSeeder;
use Database\Seeders\Testing\C2MS\FieldsDsSqlTableSeeder;
use Database\Seeders\Testing\C2MS\FieldsTypesTableSeeder;
use Database\Seeders\Testing\C2MS\R2msStorageTableSeeder;
use Database\Seeders\Testing\C2MS\FieldsDsFlatTableSeeder;
use Database\Seeders\Testing\C2MS\FieldsFieldsTableSeeder;
use Database\Seeders\Testing\C2MS\EavCategoriesTableSeeder;
use Database\Seeders\Testing\Claims\ClaimNotificationSeeder;
use Database\Seeders\Testing\C2MS\FieldsRevisionsTableSeeder;
use Database\Seeders\Testing\C2MS\EavEntitiesTypesTableSeeder;
use Database\Seeders\Testing\C2MS\CrmFirmsCountriesTableSeeder;
use Database\Seeders\Testing\C2MS\EavDatasets2fieldsTableSeeder;
use Database\Seeders\Testing\C2MS\EavValidationRulesTableSeeder;
use Database\Seeders\Testing\C2MS\EavObjects2datasetsTableSeeder;
use Database\Seeders\Testing\C2MS\EavObjectsRevisionsTableSeeder;
use Database\Seeders\Testing\C2MS\EavDatasetsRevisionsTableSeeder;
use Database\Seeders\Testing\C2MS\FieldsTypesTemplatesTableSeeder;
use Database\Seeders\Testing\C2MS\EavEntitiesCategoriesTableSeeder;
use Database\Seeders\Testing\C2MS\EavObjectOverviewSetupTableSeeder;
use Database\Seeders\Testing\C2MS\ProductsStepperStorageTableSeeder;
use Database\Seeders\Testing\Claims\ClaimNotificationTemplateSeeder;
use Database\Seeders\Testing\C2MS\EavFormTemplatePartialsTableSeeder;
use Database\Seeders\Testing\C2MS\EavDatasetsFields2validationTableSeeder;

class DevelopmentSeeder extends Seeder
{
    public function run(): bool
    {
        if('local' !== app()->environment())
        {
            printf("\nApplication is not in 'local' environment. Environment detected: %s. Aborting.", app()->environment());

            return false;
        }

        // Seed C2MS data
        $this->seedC2MS();

        // seed Claims data
        $this->seedClaims();

        return true;
    }

    public function seedC2MS(): void
    {
        $this->call(
            [
                CrmFirmsCountriesTableSeeder::class,
                EavCategoriesTableSeeder::class,
                EavDatasetsTableSeeder::class,
                EavDatasets2fieldsTableSeeder::class,
                EavDatasetsFields2validationTableSeeder::class,
                EavDatasetsRevisionsTableSeeder::class,
                EavEntitiesCategoriesTableSeeder::class,
                EavEntitiesTypesTableSeeder::class,
                EavFormTemplatePartialsTableSeeder::class,
                EavObjectOverviewSetupTableSeeder::class,
                EavObjectsTableSeeder::class,
                EavObjects2datasetsTableSeeder::class,
                EavObjectsRevisionsTableSeeder::class,
                EavValidationRulesTableSeeder::class,
                FieldsDsFlatTableSeeder::class,
                FieldsDsSqlTableSeeder::class,
                FieldsFieldsTableSeeder::class,
                FieldsRevisionsTableSeeder::class,
                FieldsTypesTableSeeder::class,
                FieldsTypesTemplatesTableSeeder::class,
                ProductsStepperStorageTableSeeder::class,
                R2msStorageTableSeeder::class,
            ]
        );
    }

    public function seedClaims(): void
    {
        $this->call(
            [
                ClaimStatusSeeder::class,
                ClaimTypeSeeder::class,
                ClaimWorkflowSeeder::class,
                ClaimSeeder::class,
                ClaimLogSeeder::class,
                ClaimNotificationSeeder::class,
                ClaimNotificationTemplateSeeder::class
            ]
        );
    }
}

