<?php

namespace Database\Seeders\Development\C2MS;

use Illuminate\Database\Seeder;

class EavValidationRulesTableSeeder extends Seeder
{
    public function run(): void
    {
        \DB::table('eav_validation_rules')->truncate();

        \DB::table('eav_validation_rules')->insert(
            $this->provideData()
        );
    }

    protected function provideData(): array
    {
        return [
            [
                'deleted' => 0,
                'id' => 1,
                'identifier' => 'f69b26d4-5a4b-11e2-ade6-001a7010c86d',
                'location_id' => 1,
                'rule_description' => 'Checks whether the given $_POST index is empty or not. Uses PHP\'s native empty() function for the return code.
The function returns TRUE if the index is not set, null, 0 or empty string.',
                'rule_php_code' => 'if(empty($_POST["{FIELD_IDENTIFIER}"]))
{
$json["errors"]["{FIELD_IDENTIFIER}"] = "{FIELD_ERROR_MESSAGE}";
}',
                'rule_title' => 'Must not be empty',
                'validator_class_id' => 0,
            ],

            [
                'deleted' => 0,
                'id' => 2,
                'identifier' => 'f69b29b8-5a4b-11e2-ade6-001a7010c86d',
                'location_id' => 1,
                'rule_description' => 'Checks whether the field is EXACTLY 5 characters in length.',
                'rule_php_code' => '
if(strlen($_POST["{FIELD_IDENTIFIER"}]) != 5)
{
$json["errors"]["{FIELD_IDENTIFIER}" = "{FIELD_ERROR_MESSAGE}";
}',
                'rule_title' => 'Must be exactly 5 characters in length',
                'validator_class_id' => 0,
            ],

            [
                'deleted' => 0,
                'id' => 3,
                'identifier' => 'f69b2ac1-5a4b-11e2-ade6-001a7010c86d',
                'location_id' => 1,
                'rule_description' => 'Description of the rule',
                'rule_php_code' => 'if(strtotime($_POST["{FIELD_IDENTIFIER}"]) === false)
{
$json["errors"]["{FIELD_IDENTIFIER}"] = "{FIELD_ERROR_MESSAGE}";
}',
                'rule_title' => 'Must be a readable date format',
                'validator_class_id' => 0,
            ],

            [
                'deleted' => 0,
                'id' => 5,
                'identifier' => 'f69b2ba9-5a4b-11e2-ade6-001a7010c86d',
                'location_id' => 1,
                'rule_description' => 'Terms
',
                'rule_php_code' => 'if($_POST["{FIELD_IDENTIFIER}"] == 2)
{
$json["errors"]["{FIELD_IDENTIFIER}"] = "{FIELD_ERROR_MESSAGE}";
}',
                'rule_title' => 'Terms',
                'validator_class_id' => 0,
            ],

            [
                'deleted' => 0,
                'id' => 6,
                'identifier' => 'f69b2c91-5a4b-11e2-ade6-001a7010c86d',
                'location_id' => 1,
                'rule_description' => 'Yes No',
                'rule_php_code' => 'if(!isset($_POST["{FIELD_IDENTIFIER}"]))
{
$json["errors"]["{FIELD_IDENTIFIER}"] = "{FIELD_ERROR_MESSAGE}";
}',
                'rule_title' => 'Yes no',
                'validator_class_id' => 0,
            ],

            [
                'deleted' => 0,
                'id' => 34,
                'identifier' => 'f69b2d6d-5a4b-11e2-ade6-001a7010c86d',
                'location_id' => 1,
                'rule_description' => 'validator class test',
                'rule_php_code' => NULL,
                'rule_title' => 'Must not be empty',
                'validator_class_id' => 1,
            ],

            [
                'deleted' => 0,
                'id' => 35,
                'identifier' => 'f69b2e4b-5a4b-11e2-ade6-001a7010c86d',
                'location_id' => 1,
                'rule_description' => '',
                'rule_php_code' => NULL,
                'rule_title' => 'Must be only alphanumeric',
                'validator_class_id' => 2,
            ],

            [
                'deleted' => 0,
                'id' => 36,
                'identifier' => 'f69b2f1b-5a4b-11e2-ade6-001a7010c86d',
                'location_id' => 1,
                'rule_description' => NULL,
                'rule_php_code' => NULL,
                'rule_title' => 'Must be only numeric',
                'validator_class_id' => 3,
            ],

            [
                'deleted' => 0,
                'id' => 37,
                'identifier' => 'f69b2feb-5a4b-11e2-ade6-001a7010c86d',
                'location_id' => 1,
                'rule_description' => NULL,
                'rule_php_code' => NULL,
                'rule_title' => 'Must be only characters',
                'validator_class_id' => 4,
            ],

            [
                'deleted' => 0,
                'id' => 38,
                'identifier' => 'f69b30b2-5a4b-11e2-ade6-001a7010c86d',
                'location_id' => 1,
                'rule_description' => NULL,
                'rule_php_code' => NULL,
                'rule_title' => 'Must be numeric in range',
                'validator_class_id' => 5,
            ],

            [
                'deleted' => 0,
                'id' => 39,
                'identifier' => 'f69b3177-5a4b-11e2-ade6-001a7010c86d',
                'location_id' => 1,
                'rule_description' => NULL,
                'rule_php_code' => NULL,
                'rule_title' => 'Must have certain number of characters',
                'validator_class_id' => 6,
            ],

            [
                'deleted' => 0,
                'id' => 40,
                'identifier' => 'f69b323d-5a4b-11e2-ade6-001a7010c86d',
                'location_id' => 1,
                'rule_description' => NULL,
                'rule_php_code' => NULL,
                'rule_title' => 'Must be valid postcode',
                'validator_class_id' => 7,
            ],

            [
                'deleted' => 0,
                'id' => 41,
                'identifier' => 'f69b32ff-5a4b-11e2-ade6-001a7010c86d',
                'location_id' => 1,
                'rule_description' => NULL,
                'rule_php_code' => NULL,
                'rule_title' => 'Phone number (numbers and spaces)',
                'validator_class_id' => 8,
            ],

            [
                'deleted' => 0,
                'id' => 42,
                'identifier' => 'f69b33c8-5a4b-11e2-ade6-001a7010c86d',
                'location_id' => 1,
                'rule_description' => NULL,
                'rule_php_code' => NULL,
                'rule_title' => 'Must not be empty if (dependant)',
                'validator_class_id' => 9,
            ],

            [
                'deleted' => 0,
                'id' => 43,
                'identifier' => 'f69b3492-5a4b-11e2-ade6-001a7010c86d',
                'location_id' => 1,
                'rule_description' => NULL,
                'rule_php_code' => NULL,
                'rule_title' => 'Must be date(d.m.Y) before',
                'validator_class_id' => 10,
            ],

            [
                'deleted' => 0,
                'id' => 44,
                'identifier' => 'f69b355b-5a4b-11e2-ade6-001a7010c86d',
                'location_id' => 1,
                'rule_description' => NULL,
                'rule_php_code' => NULL,
                'rule_title' => 'Must be date(d.m.Y) after',
                'validator_class_id' => 11,
            ],

            [
                'deleted' => 0,
                'id' => 45,
                'identifier' => 'f69b362e-5a4b-11e2-ade6-001a7010c86d',
                'location_id' => 1,
                'rule_description' => 'If field set to value than it must have at least one instance of multi instantiated dataset attached to the form',
                'rule_php_code' => NULL,
                'rule_title' => 'Must have dataset if',
                'validator_class_id' => 12,
            ],

            [
                'deleted' => 0,
                'id' => 46,
                'identifier' => 'f69b3708-5a4b-11e2-ade6-001a7010c86d',
                'location_id' => 1,
                'rule_description' => 'If field set to value than it must NOT have any instances of multi instantiated dataset attached to the form',
                'rule_php_code' => NULL,
                'rule_title' => 'Must NOT have dataset if',
                'validator_class_id' => 13,
            ],

            [
                'deleted' => 0,
                'id' => 47,
                'identifier' => 'f69b37dd-5a4b-11e2-ade6-001a7010c86d',
                'location_id' => 1,
                'rule_description' => NULL,
                'rule_php_code' => NULL,
                'rule_title' => 'Valid e-mail address',
                'validator_class_id' => 14,
            ],

            [
                'deleted' => 0,
                'id' => 49,
                'identifier' => 'f69b38ad-5a4b-11e2-ade6-001a7010c86d',
                'location_id' => 1,
                'rule_description' => 'Must be +/- X days from the date in entered in the {field}',
                'rule_php_code' => NULL,
                'rule_title' => 'Must be X days before/after field',
                'validator_class_id' => 15,
            ],

            [
                'deleted' => 0,
                'id' => 51,
                'identifier' => 'f69b3981-5a4b-11e2-ade6-001a7010c86d',
                'location_id' => 1,
                'rule_description' => 'Must be no less than X days after date and no more than Y days after date.',
                'rule_php_code' => NULL,
                'rule_title' => 'Must be in range after date field',
                'validator_class_id' => 16,
            ],

            [
                'deleted' => 0,
                'id' => 56,
                'identifier' => 'f69b3c48-5a4b-11e2-ade6-001a7010c86d',
                'location_id' => 1,
                'rule_description' => 'Check if string has more than N lines of text.',
                'rule_php_code' => NULL,
                'rule_title' => 'Check number of lines in string',
                'validator_class_id' => 18,
            ],

            [
                'deleted' => 0,
                'id' => 57,
                'identifier' => 'f69b3d1b-5a4b-11e2-ade6-001a7010c86d',
                'location_id' => 1,
                'rule_description' => 'Check if any of the lines in the string is longer than N chars.',
                'rule_php_code' => NULL,
                'rule_title' => 'Check number of chars per line in string',
                'validator_class_id' => 19,
            ],

            [
                'deleted' => 0,
                'id' => 58,
                'identifier' => 'f69b3df7-5a4b-11e2-ade6-001a7010c86d',
                'location_id' => 1,
                'rule_description' => 'Check field value against regular expression',
                'rule_php_code' => NULL,
                'rule_title' => 'Regular Expression',
                'validator_class_id' => 20,
            ],

            [
                'deleted' => 0,
                'id' => 59,
                'identifier' => '9b37b275-8a42-11e2-b46f-001a7010c86d',
                'location_id' => 1,
                'rule_description' => NULL,
                'rule_php_code' => NULL,
                'rule_title' => 'Must not be empty if ( multi-dependant )',
                'validator_class_id' => 21,
            ],

            [
                'deleted' => 0,
                'id' => 62,
                'identifier' => 'f69b3a99-5a4b-11e2-ade6-001a7010c86d',
                'location_id' => 1,
                'rule_description' => 'Check if numer of items in the dataset match given contition and fail / refer it they do.',
                'rule_php_code' => NULL,
                'rule_title' => 'Check number of items in MI dataset',
                'validator_class_id' => 17,
            ],

            [
                'deleted' => 0,
                'id' => 63,
                'identifier' => 'f69b3b6e-5a4b-11e2-ade6-001a7010c86d',
                'location_id' => 1,
                'rule_description' => 'Check if numer of items in the dataset match given contition and fail / refer it they do.',
                'rule_php_code' => NULL,
                'rule_title' => 'Check number of items in MI dataset (#2)',
                'validator_class_id' => 17,
            ],

            [
                'deleted' => 0,
                'id' => 64,
                'identifier' => '6ffd2bea-84a6-11e5-a2db-001a7010c86d',
                'location_id' => 1,
                'rule_description' => 'Checks if the field satisfies the percentage and operator defined rule with regards to the dependant field name\'s value.',
                'rule_php_code' => NULL,
                'rule_title' => 'Check dependent field value percentage',
                'validator_class_id' => 26,
            ],

            [
                'deleted' => 0,
                'id' => 65,
                'identifier' => '13da4e68-86cf-11e5-a2db-001a7010c86d',
                'location_id' => 1,
                'rule_description' => 'Compares the sum of MI values and a dependent field with a given operator',
                'rule_php_code' => NULL,
                'rule_title' => 'Compare sum of MI values to dependent field',
                'validator_class_id' => 27,
            ],

            [
                'deleted' => 0,
                'id' => 66,
                'identifier' => '7690247f-86db-11e5-a2db-001a7010c86d',
                'location_id' => 1,
                'rule_description' => 'Compares the sum of MI values and a percentage of a dependent field with a given operator',
                'rule_php_code' => NULL,
                'rule_title' => 'Compare sum of MI values to a percentage of a dependent field',
                'validator_class_id' => 28,
            ],

            [
                'deleted' => 0,
                'id' => 67,
                'identifier' => '42048f84-86fe-11e5-a2db-001a7010c86d',
                'location_id' => 1,
                'rule_description' => 'Cheks if the given array-type field has more than or equal to number of values set',
                'rule_php_code' => NULL,
                'rule_title' => 'Check if array-type field has required number of array items set',
                'validator_class_id' => 29,
            ],

            [
                'deleted' => 0,
                'id' => 71,
                'identifier' => 'e7d820ba-bc48-11e5-8ea5-066f78a3037d',
                'location_id' => 1,
                'rule_description' => 'Checks if the given field value is equal to sum of the fields values defined in the extra input field (comma separated field name list)',
                'rule_php_code' => NULL,
                'rule_title' => 'Check if field value is equal to sum of other defined fields',
                'validator_class_id' => 30,
            ],

            [
                'deleted' => 0,
                'id' => 81,
                'identifier' => 'fdfffcbc-d4b9-11e5-913d-525400fe7488',
                'location_id' => 1,
                'rule_description' => 'Check if field value is empty if another field satisfies a condition defined by a given value and an operator',
                'rule_php_code' => NULL,
                'rule_title' => 'Check if field value is empty if another field satisfies a condition defined by a given value and an operator',
                'validator_class_id' => 31,
            ],

            [
                'deleted' => 0,
                'id' => 91,
                'identifier' => 'f98e5817-d55f-11e5-913d-525400fe7488',
                'location_id' => 1,
                'rule_description' => 'Check if this field value comparison with operator and defined value passes, and if so trigger a defined referral type and referral by guuid',
                'rule_php_code' => NULL,
                'rule_title' => 'Trigger a referral if field value comparison passes with defined value and operator',
                'validator_class_id' => 32,
            ],

            [
                'deleted' => 0,
                'id' => 101,
                'identifier' => '2f9bd147-d634-11e5-9ee0-525400fe7488',
                'location_id' => 1,
                'rule_description' => 'Check if sum of MI fields satisfies a condition given by operator and value (trigger referral)',
                'rule_php_code' => NULL,
                'rule_title' => 'Check if sum of MI fields satisfies a condition given by operator and value (trigger referral)',
                'validator_class_id' => 33,
            ],

            [
                'deleted' => 0,
                'id' => 111,
                'identifier' => 'ddecceb3-54da-11e6-97f2-066f78a3037d',
                'location_id' => 1,
                'rule_description' => 'Non-empty if dependant field satisfies a condition defined by operator and value',
                'rule_php_code' => NULL,
                'rule_title' => 'Non-empty if dependant field satisfies a condition defined by operator and value',
                'validator_class_id' => 34,
            ],

            [
                'deleted' => 0,
                'id' => 121,
                'identifier' => 'de03de8f-54da-11e6-97f2-066f78a3037d',
                'location_id' => 1,
                'rule_description' => 'Non-empty for defined website id',
                'rule_php_code' => NULL,
                'rule_title' => 'Non-empty for defined website id',
                'validator_class_id' => 35,
            ],

            [
                'deleted' => 0,
                'id' => 131,
                'identifier' => 'de99a258-54da-11e6-97f2-066f78a3037d',
                'location_id' => 1,
                'rule_description' => 'Must be value for defined website id',
                'rule_php_code' => NULL,
                'rule_title' => 'Must be value for defined website id',
                'validator_class_id' => 36,
            ],

            [
                'deleted' => 0,
                'id' => 141,
                'identifier' => 'de9acee0-54da-11e6-97f2-066f78a3037d',
                'location_id' => 1,
                'rule_description' => 'Must be value if dependant field satisfies condition given by value and operator',
                'rule_php_code' => NULL,
                'rule_title' => 'Must be value if dependant field satisfies condition given by value and operator',
                'validator_class_id' => 37,
            ],

            [
                'deleted' => 0,
                'id' => 142,
                'identifier' => '6b273dd9-9fa6-11e6-ac09-026f2fcd2007',
                'location_id' => 1,
                'rule_description' => 'Compares this field value with another dependant field using a condition (EQ, LT, GT, LTE, GTE, NEQ)',
                'rule_php_code' => NULL,
                'rule_title' => 'Must satisfy condition defined by operator and dependant field',
                'validator_class_id' => 38,
            ],

            [
                'deleted' => 0,
                'id' => 152,
                'identifier' => '6b27f7a3-9fa6-11e6-ac09-026f2fcd2007',
                'location_id' => 1,
                'rule_description' => 'Uses libphonenumber to validate a phone number for a given region(s)',
                'rule_php_code' => NULL,
                'rule_title' => 'Must be a valid phone number (using libphonenumber)',
                'validator_class_id' => 39,
            ],

            [
                'deleted' => 0,
                'id' => 162,
                'identifier' => '6b602a61-9fa6-11e6-ac09-026f2fcd2007',
                'location_id' => 1,
                'rule_description' => 'Must be a valid date according to a defined date format',
                'rule_php_code' => NULL,
                'rule_title' => 'Must be a valid date according to a defined date format',
                'validator_class_id' => 24,
            ],

            [
                'deleted' => 0,
                'id' => 172,
                'identifier' => '71c772a1-9fa6-11e6-ac09-026f2fcd2007',
                'location_id' => 1,
                'rule_description' => 'Custom syntax rule for comparing many other fields to trigger a validation error',
                'rule_php_code' => NULL,
                'rule_title' => 'Many Dependant Fields With Operator and Value',
                'validator_class_id' => 40,
            ],

            [
                'deleted' => 0,
                'id' => 182,
                'identifier' => 'bc6714db-b0cd-11e6-810e-026f2fcd2007',
                'location_id' => 1,
                'rule_description' => 'Rule which checks some logic for many other fields before firing the normal Date Before functionality',
                'rule_php_code' => NULL,
                'rule_title' => 'Date Before If Many',
                'validator_class_id' => 41,
            ],

            [
                'deleted' => 0,
                'id' => 192,
                'identifier' => 'bc67d48c-b0cd-11e6-810e-026f2fcd2007',
                'location_id' => 1,
                'rule_description' => 'Rule which checks some logic for many other fields before firing the normal Date After functionality',
                'rule_php_code' => NULL,
                'rule_title' => 'Date After If Many',
                'validator_class_id' => 42,
            ],

            [
                'deleted' => 0,
                'id' => 202,
                'identifier' => '9b2dda05-4e4f-11e6-94e0-026f2fcd2007',
                'location_id' => 1,
                'rule_description' => 'Non-empty if dependant field satisfies a condition defined by operator and value',
                'rule_php_code' => NULL,
                'rule_title' => 'Non-empty if dependant field satisfies a condition defined by operator and value',
                'validator_class_id' => 34,
            ],

            [
                'deleted' => 0,
                'id' => 212,
                'identifier' => '90d874d7-9f6a-11e6-ac09-026f2fcd2007',
                'location_id' => 1,
                'rule_description' => 'Custom syntax rule for comparing many other fields to trigger a validation error',
                'rule_php_code' => NULL,
                'rule_title' => 'Many Dependant Fields With Operator and Value',
                'validator_class_id' => 40,
            ],

            [
                'deleted' => 0,
                'id' => 222,
                'identifier' => 'c6804bbf-4e72-11e6-94e0-026f2fcd2007',
                'location_id' => 1,
                'rule_description' => 'Must be value for defined website id',
                'rule_php_code' => NULL,
                'rule_title' => 'Must be value for defined website id',
                'validator_class_id' => 36,
            ],

            [
                'deleted' => 0,
                'id' => 232,
                'identifier' => '377720b2-a391-11e7-92c5-026f2fcd2007',
                'location_id' => 1,
                'rule_description' => 'Date must be before with arbitrary condition-based and can be ran on a specific website',
                'rule_php_code' => NULL,
                'rule_title' => 'Date must be before with arbitrary condition-based dependency and can be ran on a specific website',
                'validator_class_id' => 43,
            ],

            [
                'deleted' => 0,
                'id' => 242,
                'identifier' => '37773c08-a391-11e7-92c5-026f2fcd2007',
                'location_id' => 1,
                'rule_description' => 'Date must be after with arbitrary condition-based dependency and can be ran on a specific website',
                'rule_php_code' => NULL,
                'rule_title' => 'Date must be after with arbitrary condition-based dependency and can be ran on a specific website',
                'validator_class_id' => 44,
            ],

            [
                'deleted' => 0,
                'id' => 252,
                'identifier' => '378cfd40-a391-11e7-92c5-026f2fcd2007',
                'location_id' => 1,
                'rule_description' => 'Date must be readable format, validation will pass if field is empty.',
                'rule_php_code' => NULL,
                'rule_title' => 'Readable date (ignore empty)',
                'validator_class_id' => 45,
            ],

            [
                'deleted' => 0,
                'id' => 253,
                'identifier' => '7c9c7fea-365e-11e8-a1c2-4a28775f739c',
                'location_id' => 1,
                'rule_description' => 'Checks the number with Luhn Algorithm',
                'rule_php_code' => NULL,
                'rule_title' => 'Luhn Algorithm',
                'validator_class_id' => 46,
            ],

            [
                'deleted' => 0,
                'id' => 254,
                'identifier' => '81f7e0f6-365e-11e8-a1c2-4a28775f739c',
                'location_id' => 1,
                'rule_description' => 'Checks that the given year is between lower and upper limit given',
                'rule_php_code' => NULL,
                'rule_title' => 'Must be year from now',
                'validator_class_id' => 47,
            ],

            [
                'deleted' => 0,
                'id' => 255,
                'identifier' => 'ec292ba1-86ca-45ea-9115-c6bb8b586970',
                'location_id' => 1,
                'rule_description' => 'Must be one of provided values if the product is one of provided guid(s)',
                'rule_php_code' => NULL,
                'rule_title' => 'Must be one of provided values if the product is one of provided guid(s)',
                'validator_class_id' => 48,
            ],

            [
                'deleted' => 0,
                'id' => 256,
                'identifier' => 'e1b10740-01f8-11e9-8c77-4a28775f739c',
                'location_id' => 1,
                'rule_description' => 'Checks if number of MI instances for given dataset matches value in the dropdown',
                'rule_php_code' => NULL,
                'rule_title' => 'MI Num Instances',
                'validator_class_id' => 49,
            ],

            [
                'deleted' => 0,
                'id' => 257,
                'identifier' => '32f1fb25-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'rule_description' => 'Checks that the field is not empty if an MI dataset contains an instance with a field with a given value',
                'rule_php_code' => NULL,
                'rule_title' => 'Not Empty Dependant On MI',
                'validator_class_id' => 50,
            ],

            [
                'deleted' => 0,
                'id' => 258,
                'identifier' => '32f22ace-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'rule_description' => 'Checks that the field is of a value (dependant on operator) if an MI dataset contains an instance with a field with a given value',
                'rule_php_code' => NULL,
                'rule_title' => 'Must Be Value Dependant On MI',
                'validator_class_id' => 51,
            ],

            [
                'deleted' => 0,
                'id' => 259,
                'identifier' => '32fb9d35-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'rule_description' => 'Refers when field is of a value (dependant on operator) if an MI dataset contains an instance with a field with a given value',
                'rule_php_code' => NULL,
                'rule_title' => 'Refer If Value Dependant On MI',
                'validator_class_id' => 52,
            ],

            [
                'deleted' => 0,
                'id' => 260,
                'identifier' => '32fbc4d8-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'rule_description' => 'Checks that a sum of an MI field satisfies a condition given by a value and an operator',
                'rule_php_code' => NULL,
                'rule_title' => 'MI field sum must be value with operator',
                'validator_class_id' => 53,
            ],

            [
                'deleted' => 0,
                'id' => 261,
                'identifier' => '32fbee51-a678-11ea-b4d4-4a28775f739c',
                'location_id' => 1,
                'rule_description' => 'Checks that a sum of given fields satisfies a condition given by a value and an operator',
                'rule_php_code' => NULL,
                'rule_title' => 'Field sum must be value with operator',
                'validator_class_id' => 54,
            ],

            [
                'deleted' => 0,
                'id' => 262,
                'identifier' => 'ba8e996c-07da-45b1-8491-19af2d19a279',
                'location_id' => 1,
                'rule_description' => 'Must not be value(s)',
                'rule_php_code' => NULL,
                'rule_title' => 'Must not be value(s)',
                'validator_class_id' => 55,
            ],

            [
                'deleted' => 0,
                'id' => 263,
                'identifier' => '8b0c4482-4bde-46b4-8061-905affa02a51',
                'location_id' => 1,
                'rule_description' => 'Must not be value(s) if dependant',
                'rule_php_code' => NULL,
                'rule_title' => 'Must not be value(s) if dependant',
                'validator_class_id' => 56,
            ],

            [
                'deleted' => 0,
                'id' => 264,
                'identifier' => '4c67e37e-8ca5-11eb-83c8-0a8fd383ea9a',
                'location_id' => 1,
                'rule_description' => 'Uses field (1) and value to discriminate if it needs to compare with field (2) or field (3) using a configured operator',
                'rule_php_code' => NULL,
                'rule_title' => 'Compare conditional',
                'validator_class_id' => 57,
            ],

            [
                'deleted' => 0,
                'id' => 265,
                'identifier' => '0a8f4d5d-9a0b-11ec-ac91-0223a3b30884',
                'location_id' => 1,
                'rule_description' => 'Must not be empty if one of the multi dependant fields not empty',
                'rule_php_code' => NULL,
                'rule_title' => 'Not empty if (multi) dependant not empty',
                'validator_class_id' => 58,
            ],

            [
                'deleted' => 0,
                'id' => 266,
                'identifier' => '0a93c94a-9a0b-11ec-ac91-0223a3b30884',
                'location_id' => 1,
                'rule_description' => 'If (multi) dependant fields satisfy condition value(s), value must be in range',
                'rule_php_code' => NULL,
                'rule_title' => 'Number range if (multi) dependant',
                'validator_class_id' => 59,
            ],

            [
                'deleted' => 0,
                'id' => 267,
                'identifier' => '0a97b139-9a0b-11ec-ac91-0223a3b30884',
                'location_id' => 1,
                'rule_description' => 'If the JL rule is not true, the validation will trigger',
                'rule_php_code' => NULL,
                'rule_title' => 'JSON LOGIC Simple Validation',
                'validator_class_id' => 60,
            ],

            [
                'deleted' => 0,
                'id' => 268,
                'identifier' => '820f8e7b-c46c-11ec-ac91-0223a3b30884',
                'location_id' => 1,
                'rule_description' => 'If the JL rule is not true, the validation will trigger',
                'rule_php_code' => NULL,
                'rule_title' => 'JSON LOGIC Simple Validation TWO',
                'validator_class_id' => 61,
            ],

            [
                'deleted' => 0,
                'id' => 269,
                'identifier' => '82138580-c46c-11ec-ac91-0223a3b30884',
                'location_id' => 1,
                'rule_description' => 'If the JL rule is not true, the validation will trigger',
                'rule_php_code' => NULL,
                'rule_title' => 'JSON LOGIC Simple Validation THREE',
                'validator_class_id' => 62,
            ],

            [
                'deleted' => 0,
                'id' => 270,
                'identifier' => '8217b851-c46c-11ec-ac91-0223a3b30884',
                'location_id' => 1,
                'rule_description' => 'If the JL rule is not true, the validation will trigger',
                'rule_php_code' => NULL,
                'rule_title' => 'JSON LOGIC Simple Validation FOUR',
                'validator_class_id' => 63,
            ],

            [
                'deleted' => 0,
                'id' => 271,
                'identifier' => '821baa38-c46c-11ec-ac91-0223a3b30884',
                'location_id' => 1,
                'rule_description' => 'If the JL rule is not true, the validation will trigger',
                'rule_php_code' => NULL,
                'rule_title' => 'JSON LOGIC Simple Validation FIVE',
                'validator_class_id' => 64,
            ],

            [
                'deleted' => 0,
                'id' => 272,
                'identifier' => '821fb3dd-c46c-11ec-ac91-0223a3b30884',
                'location_id' => 1,
                'rule_description' => 'If the JL rule is not true, the validation will trigger',
                'rule_php_code' => NULL,
                'rule_title' => 'JSON LOGIC Simple Validation SIX',
                'validator_class_id' => 65,
            ],
        ];
    }
}
