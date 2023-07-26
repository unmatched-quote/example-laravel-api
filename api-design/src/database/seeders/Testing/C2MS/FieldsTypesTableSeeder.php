<?php

namespace Database\Seeders\Testing\C2MS;

use Illuminate\Database\Seeder;

class FieldsTypesTableSeeder extends Seeder
{
    public function run(): void
    {
        \DB::table('fields_types')->truncate();

        \DB::table('fields_types')->insert(
            $this->provideData()
        );
    }

    protected function provideData(): array
    {
        return [
            [
                'deleted' => 0,
                'id' => 1,
                'is_extern' => 0,
                'location_id' => 1,
                'opt_template' => NULL,
                'type_attr' => NULL,
                'type_html_definition' => '<input type="text" name="{FIELD_NAME}" id="{FIELD_ID}" />',
                'type_js' => NULL,
                'type_render_code' => NULL,
                'type_title' => 'Text',
                'type_type' => 'text',
            ],

            [
                'deleted' => 0,
                'id' => 2,
                'is_extern' => 0,
                'location_id' => 1,
                'opt_template' => NULL,
                'type_attr' => NULL,
                'type_html_definition' => '<textarea name="{FIELD_NAME}" id="{FIELD_ID}"></textarea>',
                'type_js' => NULL,
                'type_render_code' => NULL,
                'type_title' => 'Textarea',
                'type_type' => 'textarea',
            ],

            [
                'deleted' => 0,
                'id' => 3,
                'is_extern' => 1,
                'location_id' => 1,
                'opt_template' => '<option value="{VALUE}">{LABEL}</option>',
                'type_attr' => NULL,
                'type_html_definition' => '<select name="{FIELD_NAME}" id="{FIELD_ID}">
{OPTIONS}
</select>',
                'type_js' => NULL,
                'type_render_code' => NULL,
                'type_title' => 'Select',
                'type_type' => 'select',
            ],

            [
                'deleted' => 0,
                'id' => 4,
                'is_extern' => 2,
                'location_id' => 1,
                'opt_template' => NULL,
                'type_attr' => NULL,
                'type_html_definition' => '<input type="radio" name="{FIELD_NAME}" value="{VALUE}" class="radio" /> <label for="" class="radio-label">{LABEL}</label>',
                'type_js' => NULL,
                'type_render_code' => NULL,
                'type_title' => 'Radio',
                'type_type' => 'radio',
            ],

            [
                'deleted' => 0,
                'id' => 5,
                'is_extern' => 2,
                'location_id' => 1,
                'opt_template' => NULL,
                'type_attr' => NULL,
                'type_html_definition' => '<div class="checkboxWrap"><input type="checkbox" name="{FIELD_NAME}" id="{FIELD_ID}" value="{VALUE}" /> <label for="" class="text-label">{LABEL}</label></div>',
                'type_js' => NULL,
                'type_render_code' => NULL,
                'type_title' => 'Checkbox',
                'type_type' => 'checkbox',
            ],

            [
                'deleted' => 0,
                'id' => 6,
                'is_extern' => 0,
                'location_id' => 1,
                'opt_template' => NULL,
                'type_attr' => NULL,
                'type_html_definition' => '<div id="errors-{FIELD_ID}"></div>
<div id="success-{FIELD_ID}"></div>
<div id="please-save-{FIELD_ID}"></div>
<div id="{FIELD_NAME}" data-identifier="{FIELD_ID}" data-dataset_identifier="test"></div>',
                'type_js' => '/*
if(typeof window.qq.FileUploader != "undefined")
{

try
{
var uploader = new qq.FileUploader(
{
"element": "{FIELD_ID}",
onComplete: function(id, filename, json)
{
var el = "{FIELD_ID}";
$.rpc._handleUpload(json, el, "{HIDDEN_FIELD}");
},
debug: true
});
}
catch(e)
{
console.log("Exception: " + e);
}

console.log("Creating Uploader on: {FIELD_ID}");

}
else
{
console.log("{FIELD_ID}");
}
*/',
                'type_render_code' => '<div style="margin:20px 0px 0px 0px;"></div>

<table width="100%" cellspacing="0" cellpadding="0" class="overview-table">
<thead>
<tr>
<th width="150">File Name</th>
<th width="50">Mime-Type</th>
<th width="50">Size</th>
<th width="100">Date Uploaded</th>
<th width="100">Download</th>
<th width="100">Remove</th>
</tr>
</thead>
<tbody data-loader_for="files" id="loaderof-{FIELD_CODE}">
</tbody>
</table>',
                'type_title' => 'File Upload',
                'type_type' => 'file',
            ],

            [
                'deleted' => 0,
                'id' => 7,
                'is_extern' => 0,
                'location_id' => 1,
                'opt_template' => NULL,
                'type_attr' => NULL,
                'type_html_definition' => '<input type="hidden" name="{FIELD_NAME}" id="{FIELD_ID}" />',
                'type_js' => NULL,
                'type_render_code' => NULL,
                'type_title' => 'Hidden',
                'type_type' => 'hidden',
            ],

            [
                'deleted' => 0,
                'id' => 9,
                'is_extern' => 0,
                'location_id' => 1,
                'opt_template' => NULL,
                'type_attr' => NULL,
                'type_html_definition' => '<input type="hidden" name="{FIELD_NAME}" id="{FIELD_ID}" />',
                'type_js' => NULL,
                'type_render_code' => NULL,
                'type_title' => 'UUID autogenerated',
                'type_type' => 'uuid_gen',
            ],
        ];
    }
}
