<?php

namespace Database\Seeders\Testing\C2MS;

use Illuminate\Database\Seeder;

class FieldsTypesTemplatesTableSeeder extends Seeder
{
    public function run(): void
    {
        \DB::table('fields_types_templates')->truncate();

        \DB::table('fields_types_templates')->insert(
            $this->provideData()
        );
    }

    protected function provideData(): array
    {
        return [
            [
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 1,
                'identifier' => 'text-default',
                'is_array' => 0,
                'is_default' => 1,
                'is_multi' => 0,
                'template' => '<div id="parent-{{field.field_name}}" class="required {{class.block}}" data-group="{{group}}">
<label for="{{field.field_name}}" class="{{class.label}}">{{field.field_label}}</label>
<input type="text" class="{{field.field_class}}" style="{{field.field_inline_css}}" name="{{field.field_name}}" id="{{field.field_name}}" value="{{field.current_field_value}}">
</div>',
                'title' => 'Text Field (default)',
                'type_identifier' => 'text',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 2,
                'identifier' => 'text-default-multi',
                'is_array' => 0,
                'is_default' => 1,
                'is_multi' => 1,
                'template' => '<div
id="parent-{{dataset.identifier}}-{{field.field_name}}-\\{{indexPlaceholder}}"
class="required {{class.block}}"
data-template-id="parent-{{dataset.identifier}}-{{field.field_name}}-{{indexValueForFrontend}}"
data-group="{{field.field_group}}"
>

<label
for="{{dataset.identifier}}_{{field.field_name}}_\\{{indexPlaceholder}}"
class="{{class.label}}"
data-template-for="{{dataset.identifier}}_{{field.field_name}}_{{indexValueForFrontend}}"
>
{{field.field_label}}
</label>

<input
type="text"
class="{{field.field_css}}"
style="{{field.field_inline_css}}"
name="c2msmf[{{dataset.identifier}}][\\{{indexPlaceholder}}][{{field.field_name}}]"
id="{{dataset.identifier}}_{{field.field_name}}_\\{{indexPlaceholder}}"
data-template-name="c2msmf[{{dataset.identifier}}][{{indexValueForFrontend}}][{{field.field_name}}]"
data-template-id="{{dataset.identifier}}_{{field.field_name}}_{{indexValueForFrontend}}"
value="{{eavfieldvalue field.field_name}}"
/>
</div>',
                'title' => 'Text Field (default,multi)',
                'type_identifier' => 'text',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 3,
                'identifier' => 'textarea-default',
                'is_array' => 0,
                'is_default' => 1,
                'is_multi' => 0,
                'template' => '<div id="parent-{{field.field_name}}" class="required {{class.block}}" data-group="{{field.field_group}}">
<label for="{{field.field_name}}" class="textarea-label {{class.label}}">{{field.field_label}}</label>
<div class="textarea-block {{class.item-block}}">
<textarea name="{{field.field_name}}" id="{{field.field_name}}" class="{{field.field_css}}" style="{{field.field_inline_css}}">{{field.current_field_value}}</textarea>
</div>
</div>',
                'title' => 'Textarea (default)',
                'type_identifier' => 'textarea',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 4,
                'identifier' => 'textarea-default-multi',
                'is_array' => 0,
                'is_default' => 1,
                'is_multi' => 1,
                'template' => '<div id="parent-{{dataset.identifier}}-{{field.field_name}}-\\{{indexPlaceholder}}" class="required {{class.block}}" data-template-id="parent-{{dataset.identifier}}-{{field.field_name}}-\\{{indexPlaceholder}}" data-group="{{field.field_group}}">
<label for="{{dataset.identifier}}_{{field.field_name}}_\\{{indexPlaceholder}}" class="textarea-label {{class.label}}" data-template-for="{{dataset.identifier}}_{{field.field_name}}_{{indexValueForFrontend}}">{{field.field_label}}</label>
<div class="textarea-block {{class.item-block}}">
<textarea
class="{{field.field_css}}"
style="{{field.field_inline_css}}"
name="c2msmf[{{dataset.identifier}}][\\{{indexPlaceholder}}][{{field.field_name}}]"
id="{{dataset.identifier}}_{{field.field_name}}_\\{{indexPlaceholder}}"
data-template-name="c2msmf[{{dataset.identifier}}][{{indexValueForFrontend}}][{{field.field_name}}]"
data-template-id="{{dataset.identifier}}_{{field.field_name}}_{{indexValueForFrontend}}"
>{{field.current_field_value}}</textarea>
</div>
</div>',
                'title' => 'Textarea (default,multi)',
                'type_identifier' => 'textarea',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 5,
                'identifier' => 'select-default',
                'is_array' => 0,
                'is_default' => 1,
                'is_multi' => 0,
                'template' => '<div id="parent-{{field.field_name}}" class="required {{class.block}}" data-group="{{field.field_group}}">

<label for="{{field.field_name}}_{{field.unique_id}}" class="{{class.label}}">{{field.field_label}}</label>

<select
name="{{field.field_name}}"
id="{{field.field_name}}_{{field.unique_id}}"
class="{{field.field_css}}"
style="{{field.field_inline_css}}"
{{#if control}}
data-role="mi-control"
data-target-identifier="{{controlForDataset}}"
{{/if}}
>
{{#if field.has_default_entry}}
{{#if field.render_default_entry}}
<option>{{field.default_entry_label}}</option>
{{/if}}
{{/if}}

{{#each field.value}}
<option value="{{attribute_id}}"{{#if selected}} selected{{/if}}>{{value}}</option>
{{/each}}
</select>
</div>',
                'title' => 'Select (default)',
                'type_identifier' => 'select',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 6,
                'identifier' => 'select-default-multi',
                'is_array' => 0,
                'is_default' => 1,
                'is_multi' => 1,
                'template' => '<div id="parent-{{dataset.identifier}}-{{field.field_name}}-\\{{indexPlaceholder}}" class="required {{class.block}}" data-template-id="parent-{{dataset.identifier}}-{{field.field_name}}-\\{{indexPlaceholder}}" data-group="{{field.field_group}}">
<label for="{{dataset.identifier}}_{{field.field_name}}_\\{{indexPlaceholder}}" class="{{class.label}}" data-template-for="{{dataset.identifier}}_{{field.field_name}}_{{indexValueForFrontend}}">{{field.field_label}}</label>
<select
class="{{field.field_css}}"
style="{{field.field_inline_css}}"
name="c2msmf[{{dataset.identifier}}][\\{{indexPlaceholder}}][{{field.field_name}}]"
id="{{dataset.identifier}}_{{field.field_name}}_\\{{indexPlaceholder}}"
data-template-name="c2msmf[{{dataset.identifier}}][{{indexValueForFrontend}}][{{field.field_name}}]"
data-template-id="{{dataset.identifier}}_{{field.field_name}}_{{indexValueForFrontend}}"
>
{{#if field.has_default_entry}}
{{#if field.render_default_entry}}
<option>{{field.default_entry_label}}</option>
{{/if}}
{{/if}}

{{#each field.value}}
<option value="{{attribute_id}}"{{#if selected}} selected{{/if}}>{{value}}</option>
{{/each}}
</select>
</div>',
                'title' => 'Select (default,multi)',
                'type_identifier' => 'select',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 7,
                'identifier' => 'select-default-arr',
                'is_array' => 1,
                'is_default' => 1,
                'is_multi' => 0,
                'template' => '<div id="parent-{{field.field_name}}" class="required {{class.block}}" data-group="{{field.field_group}}">
<label for="{{field.field_name}}" class="{{class.label}}">{{field.field_label}}</label>
<select name="{{field.field_name}}[]" id="{{field.field_name}}" class="{{field.field_css}}" style="{{field.field_inline_css}}" multiple="multiple">
{{#if field.has_default_entry}}
{{#if field.render_default_entry}}
<option>{{field.default_entry_label}}</option>
{{/if}}
{{/if}}

{{#each field.value}}
<option value="{{attribute_id}}"{{#if selected}} selected{{/if}}>{{value}}</option>
{{/each}}
</select>
</div>',
                'title' => 'Select (default,arr)',
                'type_identifier' => 'select',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 8,
                'identifier' => 'select-default-multi-arr',
                'is_array' => 1,
                'is_default' => 1,
                'is_multi' => 1,
                'template' => '<div id="parent-{{dataset.identifier}}-{{field.field_name}}-\\{{indexPlaceholder}}" class="required {{class.block}}" data-template-id="parent-{{dataset.identifier}}-{{field.field_name}}-\\{{indexPlaceholder}}" data-group="{{field.field_group}}">
<label for="{{dataset.identifier}}_{{field.field_name}}_\\{{indexPlaceholder}}" class="{{class.label}}" data-template-for="{{dataset.identifier}}_{{field.field_name}}_{{indexValueForFrontend}}">{{field.field_label}}</label>
<select
name="c2msmf[{{dataset.identifier}}][\\{{indexPlaceholder}}][{{field.field_name}}][]"
id="{{dataset.identifier}}_{{field.field_name}}_\\{{indexPlaceholder}}"
data-template-name="c2msmf[{{dataset.identifier}}][{{indexValueForFrontend}}][{{field.field_name}}][]"
data-template-id="{{dataset.identifier}}_{{field.field_name}}_{{indexValueForFrontend}}"
multiple="multiple"
>
{{#if field.has_default_entry}}
{{#if field.render_default_entry}}
<option>{{field.default_entry_label}}</option>
{{/if}}
{{/if}}

{{#each field.value}}
<option value="{{attribute_id}}"{{#if selected}} selected{{/if}}>{{value}}</option>
{{/each}}
</select>
</div>',
                'title' => 'Select (default,multi,arr)',
                'type_identifier' => 'select',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 9,
                'identifier' => 'radio-default',
                'is_array' => 0,
                'is_default' => 1,
                'is_multi' => 0,
                'template' => '<div id="parent-{{field.field_name}}" class="required radio-wrapper {{class.block}}" data-group="{{field.field_group}}">
<label for="{{field.field_name}}" class="radio-label {{class.label}}">{{field.field_label}}</label>
<div class="radio-block {{class.item-block}}">
{{#each field.value}}
<div class="radio-item {{../class.item}}">
<input type="radio" class="{{../field.field_css}}" style="{{../field.field_inline_css}}" name="{{../field.field_name}}" id="{{../field.field_name}}_{{attribute_id}}" value="{{attribute_id}}"{{#if selected}} checked{{/if}}/>
<label class="noblock {{../class.item-label}}" for="{{../field.field_name}}_{{attribute_id}}">{{value}}</label>
</div>
{{/each}}
</div>
</div>',
                'title' => 'Radio (default)',
                'type_identifier' => 'radio',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 10,
                'identifier' => 'radio-default-multi',
                'is_array' => 0,
                'is_default' => 1,
                'is_multi' => 1,
                'template' => '<div id="parent-{{dataset.identifier}}-{{field.field_name}}-\\{{indexPlaceholder}}" class="required radio-wrapper {{class.block}}" data-template-id="parent-{{dataset.identifier}}-{{field.field_name}}-\\{{indexPlaceholder}}" data-group="{{field.field_group}}">
<label for="{{dataset.identifier}}_{{field.field_name}}_\\{{indexPlaceholder}}" class="radio-label {{class.label}}" data-template-for="{{dataset.identifier}}_{{field.field_name}}_{{indexValueForFrontend}}">{{field.field_label}}</label>
<div class="radio-block {{class.item-block}}">
{{#each field.value}}
<div class="radio-item {{class.item}}">
<input type="radio"
class="{{../field.field_css}}"
style="{{../field.field_inline_css}}"
name="c2msmf[{{../dataset.identifier}}][\\{{instanceIndex}}][{{../field.field_name}}]"
id="{{../dataset.identifier}}_{{../field.field_name}}_{{attribute_id}}_\\{{instanceIndex}}"
data-template-name="c2msmf[{{../dataset.identifier}}][{{../indexValueForFrontend}}][{{../field.field_name}}]"
data-template-id="{{../dataset.identifier}}_{{../field.field_name}}_{{attribute_id}}_{{../indexValueForFrontend}}"
value="{{attribute_id}}"
{{#if selected}} checked{{/if}}
/>
<label
class="noblock {{../class.item-label}}"
for="{{../dataset.identifier}}_{{../field.field_name}}_{{../attribute_id}}_\\{{instanceIndex}}"
data-template-for="{{../dataset.identifier}}_{{../field.field_name}}_{{attribute_id}}_{{../indexValueForFrontend}}"
>{{value}}</label>
</div>
{{/each}}
</div>
</div>',
                'title' => 'Radio (default,multi)',
                'type_identifier' => 'radio',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 11,
                'identifier' => 'checkbox-default',
                'is_array' => 0,
                'is_default' => 1,
                'is_multi' => 0,
                'template' => '<div id="parent-{{field.field_name}}" class="required {{class.block}}" data-group="{{field.field_group}}">
<label for="{{field.field_name}}" class="checkbox-label {{class.label}}">{{field.field_label}}</label>
<div class="checkbox-block {{class.item-block}}">
{{#each field.value}}
<div class="checkbox-item {{../class.item}}">
<input type="checkbox" class="noblock {{../field.field_css}}" style="{{../field.field_inline_css}}" name="{{../field.field_name}}" id="{{../field.field_name}}_{{attribute_id}}" value="{{attribute_id}}"{{#if selected}} checked{{/if}} />
<label for="{{../field.field_name}}_{{attribute_id}}" class="noblock {{../class.item-label}}">{{value}}</label>
</div>
{{/each}}
</div>
</div>',
                'title' => 'Checkbox (default)',
                'type_identifier' => 'checkbox',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 12,
                'identifier' => 'checkbox-default-multi',
                'is_array' => 0,
                'is_default' => 1,
                'is_multi' => 1,
                'template' => '<div
id="parent-{{dataset.identifier}}-{{field.field_name}}-\\{{indexPlaceholder}}"
class="required {{class.block}}"
data-template-id="parent-{{dataset.identifier}}-{{field.field_name}}-{{indexValueForFrontend}}"
data-group="{{field.field_group}}"
>

<label
for="{{dataset.identifier}}_{{field.field_name}}_\\{{indexPlaceholder}}"
class="checkbox-label {{class.label}}"
data-template-for="{{dataset.identifier}}_{{field.field_name}}_{{indexValueForFrontend}}"
>{{field.field_label}}</label>

<div class="checkbox-block {{class.item-block}}">

{{#each field.value}}
<div class="checkbox-item {{../class.item}}">
<input type="checkbox"
class="noblock {{../field.field_css}}"
style="{{../field.field_inline_css}}"
name="c2msmf[{{../dataset.identifier}}][\\{{instanceIndex}}][{{../field.field_name}}]"
id="{{../dataset.identifier}}_{{../field.field_name}}_{{attribute_id}}_\\{{instanceIndex}}"
data-template-name="c2msmf[{{../dataset.identifier}}][{{../indexValueForFrontend}}][{{../field.field_name}}]"
data-template-id="{{../dataset.identifier}}_{{../field.field_name}}_{{attribute_id}}_{{../indexValueForFrontend}}"
value="{{attribute_id}}"
{{#if selected}} checked{{/if}}
/>

<label
class="noblock {{../class.item-label}}"
for="{{../dataset.identifier}}_{{../field.field_name}}_{{attribute_id}}_\\{{instanceIndex}}"
data-template-for="{{../dataset.identifier}}_{{../field.field_name}}_{{attribute_id}}_{{../indexValueForFrontend}}"
>{{value}}</label>
</div>
{{/each}}
</div>
</div>',
                'title' => 'Checkbox (default,multi)',
                'type_identifier' => 'checkbox',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 13,
                'identifier' => 'checkbox-default-arr',
                'is_array' => 1,
                'is_default' => 1,
                'is_multi' => 0,
                'template' => '<div id="parent-{{field.field_name}}" class="required {{class.block}}" data-group="{{field.field_group}}">
<label for="{{field.field_name}}" class="checkbox-label {{class.label}}">{{field.field_label}}</label>
<div class="checkbox-block {{class.item-block}}">

{{#each field.value}}
<div class="checkbox-item {{../class.item}}">
<input type="checkbox" class="noblock {{../field.field_css}}" style="{{../field.field_inline_css}}" name="{{../field.field_name}}[]" id="{{../field.field_name}}_{{attribute_id}}" value="{{attribute_id}}"{{#if selected}} checked{{/if}} />
<label for="{{../field.field_name}}_{{attribute_id}}" class="noblock {{../class.item-label}}">{{value}}</label>
</div>
{{/each}}

</div>
</div>',
                'title' => 'Checkbox (default,arr)',
                'type_identifier' => 'checkbox',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 14,
                'identifier' => 'checkbox-default-multi-arr',
                'is_array' => 1,
                'is_default' => 1,
                'is_multi' => 1,
                'template' => '<div
id="parent-{{dataset.identifier}}-{{field.field_name}}-\\{{indexPlaceholder}}"
class="required {{class.block}}"
data-template-id="parent-{{dataset.identifier}}-{{field.field_name}}-{{indexValueForFrontend}}"
data-group="{{field.field_group}}"
>

<label
for="{{dataset.identifier}}_{{field.field_name}}_\\{{indexPlaceholder}}"
class="checkbox-label {{class.label}}"
data-template-for="{{dataset.identifier}}_{{field.field_name}}_{{indexValueForFrontend}}"
>{{field.field_label}}</label>

<div class="checkbox-block {{class.item-block}}">

{{#each field.value}}
<div class="checkbox-item {{../class.item}}">
<input type="checkbox"
class="noblock {{../field.field_css}}"
style="{{../field.field_inline_css}}"
name="c2msmf[{{../dataset.identifier}}][\\{{instanceIndex}}][{{../field.field_name}}][]"
id="{{../dataset.identifier}}_{{../field.field_name}}_{{attribute_id}}_\\{{instanceIndex}}"
data-template-name="c2msmf[{{../dataset.identifier}}][{{../indexValueForFrontend}}][{{../field.field_name}}][]"
data-template-id="{{../dataset.identifier}}_{{../field.field_name}}_{{attribute_id}}_{{../indexValueForFrontend}}"
value="{{attribute_id}}"
{{#if selected}} checked{{/if}}
/>

<label
class="noblock {{../class.item-label}}"
for="{{../dataset.identifier}}_{{../field.field_name}}_{{attribute_id}}_\\{{instanceIndex}}"
data-template-for="{{../dataset.identifier}}_{{../field.field_name}}_{{attribute_id}}_{{../indexValueForFrontend}}"
>{{value}}</label>
</div>
{{/each}}
</div>
</div>',
                'title' => 'Checkbox (default,multi,arr)',
                'type_identifier' => 'checkbox',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 15,
                'identifier' => 'file-default',
                'is_array' => 0,
                'is_default' => 1,
                'is_multi' => 0,
                'template' => '             file-default',
                'title' => 'File Upload (default)',
                'type_identifier' => 'file',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 16,
                'identifier' => 'file-default-multi',
                'is_array' => 0,
                'is_default' => 1,
                'is_multi' => 1,
                'template' => '             file-default-multi',
                'title' => 'File Upload (default,multi)',
                'type_identifier' => 'file',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 17,
                'identifier' => 'hidden-default',
                'is_array' => 0,
                'is_default' => 1,
                'is_multi' => 0,
                'template' => '<input type="hidden" name="{{field.field_name}}" id="{{field.field_name}}" />',
                'title' => 'Hidden (default)',
                'type_identifier' => 'hidden',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 18,
                'identifier' => 'hidden-default-multi',
                'is_array' => 0,
                'is_default' => 1,
                'is_multi' => 1,
                'template' => '<input
type="hidden"
name="c2msmf[{{dataset.identifier}}][\\{{indexPlaceholder}}][{{field.field_name}}]"
id="{{dataset.identifier}}_{{field.field_name}}_\\{{indexPlaceholder}}"
data-template-name="c2msmf[{{dataset.identifier}}][{{indexValueForFrontend}}][{{field.field_name}}]"
data-template-id="{{dataset.identifier}}_{{field.field_name}}_{{indexValueForFrontend}}"
value="field.current_field_value"
/>',
                'title' => 'Hidden (default,multi)',
                'type_identifier' => 'hidden',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 19,
                'identifier' => 'uuid_gen-default',
                'is_array' => 0,
                'is_default' => 1,
                'is_multi' => 0,
                'template' => '<div id="parent-{{field.field_name}}" class="required hidden {{class.block}}" data-group="{{field.field_group}}">
<input type="hidden" name="{{field.field_name}}" id="{{field.field_name}}" />
</div>',
                'title' => 'UUID Autogen (default)',
                'type_identifier' => 'uuid_gen',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 20,
                'identifier' => 'uuid_gen-default-multi',
                'is_array' => 0,
                'is_default' => 1,
                'is_multi' => 1,
                'template' => '<input
type="hidden"
name="c2msmf[{{dataset.identifier}}][\\{{indexPlaceholder}}][{{field.field_name}}]"
id="{{dataset.identifier}}_{{field.field_name}}_\\{{indexPlaceholder}}"
data-template-name="c2msmf[{{dataset.identifier}}][{{indexValueForFrontend}}][{{field.field_name}}]"
data-template-id="{{dataset.identifier}}_{{field.field_name}}_{{indexValueForFrontend}}"
value="{{field.current_field_value}}"
/>',
                'title' => 'UUID Autogen (default,multi)',
                'type_identifier' => 'uuid_gen',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 21,
                'identifier' => 'select-autocomplete',
                'is_array' => 0,
                'is_default' => 0,
                'is_multi' => 0,
                'template' => '<div id="parent-{{field.field_name}}" class="required {{class.block}}" data-group="{{field.field_group}}">
<label for="{{field.field_name}}" class="{{class.label}}">{{field.field_label}}</label>
<select
name="{{field.field_name}}"
id="{{field.field_name}}"
class="{{field.field_css}}"
style="{{field.field_inline_css}}"
data-dataset="{{dataset.identifier}}"
data-field="{{field.field_name}}"
data-role="dynamic"
>
{{#if field.has_default_entry}}
<option>{{field.default_entry_label}}</option>
{{/if}}

{{eavfieldpreselected field=field}}
</select>
</div>',
                'title' => 'Select (autocomplete)',
                'type_identifier' => 'select',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 22,
                'identifier' => 'mi-ident-default',
                'is_array' => 0,
                'is_default' => 1,
                'is_multi' => 1,
                'template' => '<input
type="hidden"
name="c2msmf[{{dataset.identifier}}][\\{{indexPlaceholder}}][ident]"
id="{{dataset.identifier}}_ident_\\{{indexPlaceholder}}"
data-template-name="c2msmf[{{dataset.identifier}}][{{indexValueForFrontend}}][ident]"
data-template-id="{{dataset.identifier}}_ident_{{indexValueForFrontend}}"
value="{{ident}}"
/>',
                'title' => 'Special MI Ident Field',
                'type_identifier' => '_mi_ident',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 23,
                'identifier' => 'select-autocomplete-multi',
                'is_array' => 0,
                'is_default' => 0,
                'is_multi' => 1,
                'template' => '<div id="parent-{{dataset.identifier}}-{{field.field_name}}-\\{{indexPlaceholder}}" class="required {{class.block}}" data-template-id="parent-{{dataset.identifier}}-{{field.field_name}}-\\{{indexPlaceholder}}" data-group="{{field.field_group}}">
<label for="{{dataset.identifier}}_{{field.field_name}}_\\{{indexPlaceholder}}" class="{{class.label}}" data-template-for="{{dataset.identifier}}_{{field.field_name}}_{{indexValueForFrontend}}">{{field.field_label}}</label>
<select
class="{{field.field_css}}"
style="{{field.field_inline_css}}"
name="c2msmf[{{dataset.identifier}}][\\{{indexPlaceholder}}][{{field.field_name}}]"
id="{{dataset.identifier}}_{{field.field_name}}_\\{{indexPlaceholder}}"
data-dataset="{{dataset.identifier}}"
data-field="{{field.field_name}}"
data-role="dynamic"
data-template-name="c2msmf[{{dataset.identifier}}][{{indexValueForFrontend}}][{{field.field_name}}]"
data-template-id="{{dataset.identifier}}_{{field.field_name}}_{{indexValueForFrontend}}"
>
{{#if field.has_default_entry}}
<option>{{field.default_entry_label}}</option>
{{/if}}

{{eavfieldpreselected field=field}}
</select>
</div>',
                'title' => 'Select (autocomplete,multi)',
                'type_identifier' => 'select',
                'updated_at' => '2020-10-28 14:23:43',
            ],
        ];
    }
}
