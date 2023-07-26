<?php

namespace Database\Seeders\Development\C2MS;

use Illuminate\Database\Seeder;

class EavFormTemplatePartialsTableSeeder extends Seeder
{
    public function run(): void
    {
        \DB::table('eav_form_template_partials')->truncate();

        \DB::table('eav_form_template_partials')->insert(
            $this->provideData()
        );
    }

    protected function provideData(): array
    {
        return [
            [
                'contents' => '<div class="form-heading custom-hidden mi-instance-header">
<div class="left mi-instance-label">
<h4 data-template-html="{{title}} Information: {{#if index}}\\{{index}}{{else}}\\{{{{raw}}}}\\{{index}}\\{{{{/raw}}}}{{/if}}">{{title}} Information: {{>mi-index-escape}}</h4>
</div>
<div class="right mi-control mi-remove-instance">
<button
class="right"
type="button"
data-role="remove-instance"
data-identifier="{{dataset.identifier}}"
data-index="{{>mi-index-escape}}"
data-title="{{title}}"
data-template-html="Remove {{title}} (Num: {{#if index}}\\{{index}}{{else}}\\{{{{raw}}}}\\{{index}}\\{{{{/raw}}}}{{/if}})"
>Remove {{title}} (Num: {{>mi-index-escape}})</button>
</div>
<div class="clear"></div>
</div>',
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 1,
                'identifier' => 'mi-instance-header',
                'title' => 'mi-instance-header',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'contents' => '<div class="form-heading custom-hidden mi-header" data-role="mi-header" data-identifier="{{dataset.identifier}}">
<div class="left">
<h4>{{title}}
<span class="instance-counter">(Total: <span data-role="instance-counter" data-identifier="{{dataset.identifier}}">{{dataset.count}}</span>)</span>
</h4></div>
<div class="right mi-control mi-add-instance">
<button type="button" data-role="add-instance" data-identifier="{{dataset.identifier}}" data-title="{{title}}">Add</button>
</div>
<div class="clear"></div>
</div>',
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 2,
                'identifier' => 'mi-header',
                'title' => 'MI Header',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'contents' => '<div class="form-heading custom-hidden mi-instance-footer">
<div class="right mi-control mi-remove-instance">
<button
class="right"
type="button"
data-role="remove-instance"
data-identifier="{{dataset.identifier}}"
data-index="{{>mi-index-escape}}"
data-title="{{title}}"
data-template-html="Remove {{title}} (Num: {{#if index}}\\{{index}}{{else}}\\{{{{raw}}}}\\{{index}}\\{{{{/raw}}}}{{/if}})"
>Remove {{title}} (Num: {{>mi-index-escape}})</button>
</div>
<div class="clear"></div>
</div>',
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 3,
                'identifier' => 'mi-instance-footer',
                'title' => 'MI Instance Footer',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'contents' => '<div class="form-heading custom-hidden hidden" data-identifier="{{dataset.identifier}}" data-role="mi-footer">
<div class="left">
<h4>{{title}}
<span class="instance-counter">(Total: <span data-role="instance-counter" data-identifier="{{dataset.identifier}}">{{dataset.count}}</span>)</span>
</h4></div>
<div class="right mi-control mi-add-instance">
<button type="button" class="right" data-role="add-instance" data-identifier="{{dataset.identifier}}">Add</button>
</div>
<div class="clear"></div>
</div>',
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 4,
                'identifier' => 'mi-footer',
                'title' => 'MI Footer',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'contents' => '{{#if index}}{{index}}{{else}}\\{{index}}{{/if}}',
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 5,
                'identifier' => 'mi-index-escape',
                'title' => 'Index var partial',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'contents' => '<input type="hidden" name="eav_dataset_instance_count[{{dataset.identifier}}]" value="{{dataset.count}}" />
<input type="hidden" name="eav_dataset_identifier[]" value="{{dataset.identifier}}" />',
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 6,
                'identifier' => 'mi-mandatory-fields',
                'title' => 'Required MI set fields',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'contents' => '<div class="form-heading custom-hidden">
<h4>{{subtitle}}</h4>
</div>',
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 7,
                'identifier' => 'ds-subtitle',
                'title' => 'Dataset subtitle',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'contents' => '{{#each eavFields}}
<input type="hidden" name="{{name}}" value="{{value}}">
{{/each}}',
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 8,
                'identifier' => 'eav-hidden-fields',
                'title' => 'EAV Hidden Fields',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'contents' => '{{#if dataset.control}} data-ds-control="{{dataset.control}}" {{/if}}',
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 9,
                'identifier' => 'mi-control-data-attr',
                'title' => 'MI Dataset Control data attribute',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'contents' => '<p class="mi-empty">There are no {{title}}\'s specified.</p>',
                'created_at' => '2020-10-28 14:23:43',
                'deleted_at' => NULL,
                'id' => 10,
                'identifier' => 'mi-empty-message',
                'title' => 'MI Dataset Control data attribute',
                'updated_at' => '2020-10-28 14:23:43',
            ],

            [
                'contents' => '<div class="form-heading custom-hidden mi-instance-header">
<div class="left mi-instance-label">
<h4 data-template-html="{{title}} Information: {{index}}">{{title}} Information: {{index}}</h4>
</div>
<div class="right mi-control mi-remove-instance">
<button
class="right"
type="button"
data-role="remove-instance"
data-identifier="{{datasetRevisionIdentifier}}"
data-index="{{index}}"
data-title="{{title}}"
data-template-html="Remove {{title}} (Num: {{index}})"
>Remove {{title}} (Num: {{index}})</button>
</div>
<div class="clear"></div>
</div>',
                'created_at' => '2021-04-28 12:23:10',
                'deleted_at' => NULL,
                'id' => 11,
                'identifier' => 'multi-instance-header',
                'title' => 'Header for multi-instantiated datasets, version 2',
                'updated_at' => '2021-04-28 12:23:13',
            ],

            [
                'contents' => '<input type="hidden" name="eav_dataset_instance_count[{{datasetRevisionIdentifier}}]" value="{{instanceCount}}" />
<input type="hidden" name="eav_dataset_identifier[]" value="{{datasetRevisionIdentifier}}" />',
                'created_at' => '2021-04-28 12:23:16',
                'deleted_at' => NULL,
                'id' => 12,
                'identifier' => 'multi-mandatory-fields',
                'title' => 'Multi: mandatory hidden fields',
                'updated_at' => '2021-04-28 12:23:18',
            ],

            [
                'contents' => '<input
type="hidden"
name="c2msmf[{{datasetRevisionIdentifier}}][\\{{indexPlaceholder}}][ident]"
id="{{datasetRevisionIdentifier}}_ident_\\{{indexPlaceholder}}"
data-template-name="c2msmf[{{datasetRevisionIdentifier}}][\\{{indexPlaceholder}}][ident]"
data-template-id="{{datasetRevisionIdentifier}}_ident_\\{{indexPlaceholder}}"
value="{{ident}}"
/>',
                'created_at' => '2021-04-28 12:24:58',
                'deleted_at' => NULL,
                'id' => 13,
                'identifier' => 'multi-instance-identifier',
                'title' => 'Multi: hidden field that identifies the MI instance',
                'updated_at' => '2021-04-28 12:25:01',
            ],

            [
                'contents' => '<div class="form-heading custom-hidden mi-instance-footer">
<div class="right mi-control mi-remove-instance">
<button
class="right"
type="button"
data-role="remove-instance"
data-identifier="{{datasetRevisionIdentifier}}"
data-index="{{index}}"
data-title="{{title}}"
data-template-html="Remove {{title}} (Num: {{index}})"
>Remove {{title}} (Num: {{index}})</button>
</div>

<div class="clear"></div>
</div>',
                'created_at' => '2021-04-28 12:26:02',
                'deleted_at' => NULL,
                'id' => 14,
                'identifier' => 'multi-instance-footer',
                'title' => 'Multi: footer for MI instances',
                'updated_at' => '2021-04-28 12:26:05',
            ],

            [
                'contents' => '{{eavfield "c2ms5ebe74d7b43120_44558787" label="Loss Payee Name"}}
{{eavfield "c2ms5ebe74e52b4200_94627566" label="Effective Date" class="inputText form-control datepicker"}}
{{eavfield "c2ms5ebe74ebea80c4_46682939" label="Full Address Geocode Data"}}
{{eavfield "c2ms5ebe74f20a9ad2_46300972" label="Address Line 1"}}
{{eavfield "c2ms5ebe74f2827721_40357718" label="Address Line 2"}}
{{eavfield "c2ms5fd0c0ca81c6b3_41431349" label="Address Line 3"}}
{{eavfield "c2ms5ebe7544add7e6_85985010" label="Town/City"}}
{{eavfield "c2ms5ebe7570d19a37_15673813" label="State"}}
{{eavfield "c2ms5ebe7588344776_83727213" label="Zip"}}
{{eavfield "c2ms5ebe7594e03d07_74446349" label="Country"}}
{{eavfield "c2ms5ebe75a49d6374_85934614" label="Latitude"}}
{{eavfield "c2ms5ebe75a52ef509_74530109" label="Longitude"}}
{{eavfield "c2ms5f7d962dc0bd27_89028719" label="Removed"}}
{{eavfield "c2ms5f7d9637069282_87288859" label="Removed Date"}}',
                'created_at' => '2021-04-28 12:48:01',
                'deleted_at' => NULL,
                'id' => 15,
                'identifier' => 'multi-instance-fields-dbb-loss-payees',
                'title' => 'DBB: Multi, Loss Payees Info',
                'updated_at' => '2021-04-28 12:48:03',
            ],

            [
                'contents' => '{{eavfield "c2ms5ebe6d9a659bb6_45168424" label="Additional Insured Name"}}
{{eavfield "c2ms5ebe6f87676e50_38597250" label="Effective Date"}}
{{eavfield "c2ms5ebe6d9d26f593_73861654" label="Full Address Geocode Data"}}
{{eavfield "c2ms5ebe6e05d2ccf9_83983864" label="Address Line 1"}}
{{eavfield "c2ms5ebe6e065ab3f5_23041121" label="Address Line 2"}}
{{eavfield "c2ms5fd0c0938fe0b4_22965920" label="Address Line 3"}}
{{eavfield "c2ms5ebe6e10aab3c1_56167502" label="Town/City"}}
{{eavfield "c2ms5ebe6e57accba5_09895023" label="State"}}
{{eavfield "c2ms5ebe6ea473ac77_13241203" label="Zip"}}
{{eavfield "c2ms5ebe6ec77c0409_26335340" label="Country"}}
{{eavfield "c2ms5ebe6ed3ee4165_73815536" label="Latitude"}}
{{eavfield "c2ms5ebe6ed4913391_64403191" label="Longitude"}}
{{eavfield "c2ms5ebe6eeda2b013_26387677" label="Include waiver of subrogation"}}
{{eavfield "c2ms5ebe6eee4c8f98_95419476" label="Confirm the Additional Insured’s work accounts for no more than 15% of the original insured’s work"}}
{{eavfield "c2ms5f7d95f0c69738_20527766" label="Removed"}}
{{eavfield "c2ms5f7d95f848e7f6_85686562" label="Removed Date"}}',
                'created_at' => '2021-04-28 12:53:37',
                'deleted_at' => NULL,
                'id' => 16,
                'identifier' => 'multi-instance-fields-dbb-additional-insured',
                'title' => 'DBB: Multi, Additional Insured',
                'updated_at' => '2021-04-28 12:53:39',
            ],

            [
                'contents' => '{{eavfield "c2ms5ebe81870cae07_40354243" label="Full Address Geocode Data"}}
{{eavfield "c2ms5ebe819ea6cb53_84849513" label="Address Line 1"}}
{{eavfield "c2ms5ebe819f504680_87341141" label="Address Line 2"}}
{{eavfield "c2ms5fd0c1b2d99449_72487383" label="Address Line 3"}}
{{eavfield "c2ms5ebe81a8b6c2e6_40360918" label="Town/City"}}

{{eavfield "c2ms5ebe81b3687890_41851070" label="State select" template="select-autocomplete-multi"}}

{{eavfield "c2ms5ebe81dfbb2cd2_15250619" label="Zip"}}
{{eavfield "c2ms5ec3e71a0f0e97_96984840" label="County select"}}

{{eavfield "c2ms5ebe81f090e1f3_34232095" label="Country" template="select-autocomplete-multi"}}

{{eavfield "c2ms5ebe8224e040b4_20015869" label="Latitude"}}
{{eavfield "c2ms5ebe8225811172_62780880" label="Longitude"}}
{{eavfield "c2ms5ebe8234166a58_32289595" label="Would you like to add a nickname/common name for this location?"}}
{{eavfield "c2ms5ebe824a1e2264_23574933" label="How many losses has it incurred?"}}
{{eavfield "c2ms5ebe8256828f17_88449575" label="When was the building built?"}}
{{eavfield "c2ms5ebe8261835ae4_72731516" label="Building construction type"}}
{{eavfield "c2ms5ebe82883c4c02_26205534" label="How old is the roof?"}}
{{eavfield "c2ms5ebe8292014ba3_15624834" label="What is the roof made from?"}}
{{eavfield "c2ms5ebe82aaad7127_57149425" label="What is the total insured value of the property?"}}
{{eavfield "c2ms5ebe82b4a092c6_43811695" label="ExternalRef"}}
{{>ds-subtitle subtitle="Underwriting Information"}}
{{eavfield "c2ms5f0700ead5c485_36435315" label="Calculated Limit"}}
{{eavfield "c2ms6022776b2ad751_19371410" label="Overlying Deductible Used"}}
{{eavfield "c2ms601aaf6fe84a88_11395294" label="Underlying Deductible Used"}}
{{eavfield "c2ms5f0700e83625e5_41388976" label="Deductible Ratio"}}
{{eavfield "c2ms5f0700ebc11416_86077698" label="Distance Load"}}
{{eavfield "c2ms604b4fa2623586_30150508" label="Distance from Coast Actual Value"}}
{{eavfield "c2ms60cc3d63bac926_97739397" label="Location Identifier"}}
{{>ds-subtitle subtitle="Underwriting Calculation"}}
{{eavfield "c2ms5ffc41e2d2e5d2_80041972" label="Base Rate Factor"}}
{{eavfield "c2ms619b743d7eb6d0_36088824" label="Distance Load Factor"}}
{{eavfield "c2ms619b743d7a6081_92260171" label="Roof Rate Factor"}}
{{eavfield "c2ms619b743e07d0d8_83758263" label="Losses Rate Factor"}}
{{eavfield "c2ms619cb8077ab492_39198672" label="Building Age Factor"}}
{{eavfield "c2ms619cb80793a2b9_02034797" label="Roof Type Factor"}}
{{eavfield "c2ms5ffc41f2536d68_61175868" label="Credit Factor"}}
{{eavfield "c2ms5ffc41f3a775a7_16038839" label="Deductible Load Factor"}}
{{eavfield "c2ms5ffc41f51a2c11_79991904" label="ROL"}}
{{eavfield "c2ms5ffc41f6736ea7_29507561" label="Maximum ROL"}}
{{>ds-subtitle subtitle="Grouped Underwriting Information"}}
{{eavfield "c2ms5fd0d0a14665e2_70058467" label="Max Recoverable"}}
{{eavfield "c2ms5fd0d0a29b8f05_46533208" label="Weighted Avg ROL"}}
{{eavfield "c2ms5fd0d0a3c311c0_89547181" label="Max Grouped ROL"}}
{{eavfield "c2ms5fd0d0a50bcc76_36938064" label="Grouped TIV"}}
{{eavfield "c2ms5fd0d0a645d219_92656045" label="Grouped Overlying Deductible"}}
{{eavfield "c2ms5fd0d0a775fc22_48704390" label="Rateable Limit"}}
{{eavfield "c2ms5fd0d0a8a10c10_49835334" label="Grouped Underlying Deductible"}}
{{eavfield "c2ms5fd0d0a9c8abd5_15945776" label="Grouped Deductible Load"}}
{{eavfield "c2ms5fd0d0ab00d475_33762204" label="Grouped ROL"}}
{{>ds-subtitle subtitle="MTA Info"}}
{{eavfield "c2ms5f7d966bafe777_62101896" label="Removed"}}
{{eavfield "c2ms5f7d966dc73dd7_07375897" label="Removed Date"}}
{{eavfield "c2ms5f7d9670042e14_62770498" label="Added"}}
{{eavfield "c2ms5f7d96730a71a7_39400430" label="Added Date"}}
{{eavfield "c2ms5f7d967540d7b7_70933763" label="Edited"}}
{{eavfield "c2ms5f7d96793b33f2_78330955" label="Edited Date"}}
{{eavfield "c2ms5f7d967bcf2f00_41654048" label="Rated"}}',
                'created_at' => '2021-04-28 12:59:17',
                'deleted_at' => NULL,
                'id' => 17,
                'identifier' => 'multi-instance-fields-dbb-location-information',
                'title' => 'DBB: Multi, Location Information',
                'updated_at' => '2021-04-28 12:59:19',
            ],

            [
                'contents' => '{{eavfield "c2ms5df0e957618a71_12786934" label="Additional Insured Name"}}
{{eavfield "c2ms5df0e958d9b456_71042847" label="Address Line 1"}}
{{eavfield "c2ms5df0e9598346e0_77666287" label="Address Line 2"}}
{{eavfield "c2ms5f9c173a036b69_27653666" label="Address Line 3"}}
{{eavfield "c2ms5df0e95a419f06_12696221" label="Zip"}}
{{eavfield "c2ms5df0e95af40996_07066964" label="Town/City"}}
{{eavfield "c2ms5df0e9934f1917_65901359" label="Country"}}
{{eavfield "c2ms5ed78c366f9c50_66040343" label="Effective Date"}}
{{eavfield "c2ms5ed78c41af2a27_24562158" label="Full Address Geocode Data"}}
{{eavfield "c2ms5ed78c5a354185_34777571" label="State"}}
{{eavfield "c2ms5ed78c692b8891_93513824" label="Latitude"}}
{{eavfield "c2ms5ed78c69a15058_63493463" label="Longitude"}}
{{eavfield "c2ms5ed78c77c21f71_25640783" label="Include waiver of subrogation"}}
{{eavfield "c2ms5ed78c785b7c24_51292594" label="Confirm the Additional Insured’s work accounts for no more than 15% of the original insured’s work"}}
{{eavfield "c2ms5efc6b9eaa9053_11116763" label="Removed"}}
{{eavfield "c2ms5efc6ba62eb4e2_99985164" label="Date of Removal"}}',
                'created_at' => '2021-04-30 09:34:22',
                'deleted_at' => NULL,
                'id' => 18,
                'identifier' => 'terror-additional-insured-mi-fields',
                'title' => 'Terror: Multi, Additional Insured',
                'updated_at' => '2021-04-30 09:34:25',
            ],

            [
                'contents' => '{{eavfield "c2ms5df0ea6cf27b12_79776833" label="Loss Payee Name"}}
{{eavfield "c2ms5df0ea6e2ce225_78532082" label="Address Line 1"}}
{{eavfield "c2ms5df0ea6f23b754_91000599" label="Address Line 2"}}
{{eavfield "c2ms5f9c168345e296_01691820" label="Address Line 3"}}
{{eavfield "c2ms5df0ea6f7722b9_10952679" label="Zip"}}
{{eavfield "c2ms5df0ea70899a68_86816911" label="Town/City"}}
{{eavfield "c2ms5df0ea8647ac56_24998190" label="Country"}}
{{eavfield "c2ms5ed78d09d2b070_61800311" label="Effective Date"}}
{{eavfield "c2ms5ed78d12e23a35_51193257" label="Full Address Geocode Data"}}
{{eavfield "c2ms5ed78d309f5879_99257306" label="State"}}
{{eavfield "c2ms5ed78d415048d4_54921435" label="Latitude"}}
{{eavfield "c2ms5ed78d41cba8d1_71567618" label="Longitude"}}
{{eavfield "c2ms5efc6c7b3ae056_71600594" label="Removed"}}
{{eavfield "c2ms5efc6c7e73beb3_39344096" label="Date of Removal"}}',
                'created_at' => '2021-04-30 09:34:27',
                'deleted_at' => NULL,
                'id' => 19,
                'identifier' => 'terror-loss-payee-mi-fields',
                'title' => 'Terror: Multi, Loss Payees',
                'updated_at' => '2021-04-30 09:34:30',
            ],

            [
                'contents' => '{{eavfield "c2ms5df0ecaa88abb9_62172298" label="Address Line 1"}}
{{eavfield "c2ms5df0ecab172f40_01857484" label="Address Line 2"}}
{{eavfield "c2ms5f9c16b512b256_11347436"  label="Address Line 3"}}
{{eavfield "c2ms5df0ecb5b28525_74883701" label="Zip"}}
{{eavfield "c2ms5df0ecb6822970_31687930" label="Town/City"}}
{{eavfield "c2ms5df0ecc6a34806_44274081" label="Country"}}
{{eavfield "c2ms5df0ecd1bf6b70_78175240" label="What property damage value is required?"}}
{{eavfield "c2ms5df0ecd29f9ad1_45276721" label="What business interruption limit is required?"}}
{{eavfield "c2ms5df0ecd3d8f133_75955641" label="What content value limit is required?"}}
{{eavfield "c2ms5df0ecf3a25f56_88431983" label="Is there any armed guards / security?"}}
{{eavfield "c2ms5df0ecf4697350_58285672" label="Is there any crash barrier / perimeter fence?"}}
{{eavfield "c2ms5df2513e5650e0_40457547" label="Full Address Geocode Data"}}
{{eavfield "c2ms5df25151b6b1a4_89810069" label="Latitude"}}
{{eavfield "c2ms5df25152a242d7_34773472" label="Longitude"}}
{{eavfield "c2ms5e2ef84ec53e83_08396318" label="Would you like to add a nickname/common name for this location?"}}
{{eavfield "c2ms5e46636d5dff60_47307777" label="Terror Risk Grade"}}
{{eavfield "c2ms5e8da7231a1353_45150862" label="ExternalRef"}}
{{eavfield "c2ms5ed77ed7e9ceb6_53641439" label="State"}}
{{>ds-subtitle subtitle="Underwriting Data"}}
{{eavfield "c2ms5ee8d5115a5bf8_89951994" label="First Load Limit Ratio"}}
{{eavfield "c2ms5ee8d513035f98_31787548" label="Property/Contents Deductible Ratio"}}
{{eavfield "c2ms5ee8d5140d1891_97234334" label="GL Rate Ratio"}}
{{eavfield "c2ms5f731cec253c74_72364132" label="Property and Contents Sum"}}
{{eavfield "c2ms5eecb78c5a8f24_57585627" label="TIV"}}
{{eavfield "c2ms5f96c211cd0578_16329201" label="Blast Zone Value"}}
{{>ds-subtitle subtitle="MTA Info"}}
{{eavfield "c2ms5efc6c077a9e29_36112647" label="Removed"}}
{{eavfield "c2ms5efc6c0a533a21_51362844" label="Date of Removal"}}
{{eavfield "c2ms5f58e4ada94e39_25168287" label="Added"}}
{{eavfield "c2ms5f58e4b26c7117_01236602" label="Date of Addition"}}
{{eavfield "c2ms5f58e4b7510448_36082932" label="Edited"}}
{{eavfield "c2ms5f58e4bb2b28a3_67984554" label="Date of Edit"}}
{{eavfield "c2ms5f58e4bdf0a7d2_82644870" label="Is Rated"}}',
                'created_at' => '2021-05-03 08:45:20',
                'deleted_at' => NULL,
                'id' => 20,
                'identifier' => 'terror-location-information-mi-fields',
                'title' => 'Terror: Multi, Location Information',
                'updated_at' => '2021-05-03 08:45:22',
            ],

            [
                'contents' => '{{eavfield "c2ms5ec53b72129818_18476350" label="Additional Insured Name"}}
{{eavfield "c2ms5ec53c6c11abe6_19846832" label="Effective Date"}}
{{eavfield "c2ms5ec53c7777ed12_04876805" label="Full Address Geocode Data"}}
{{eavfield "c2ms5ec53c80baeab3_02465092" label="Address Line 1"}}
{{eavfield "c2ms5ec53c811ae0a5_31779471" label="Address Line 2"}}
{{eavfield "c2ms5ec53c89a7bcd4_10455761" label="Town/City"}}
{{eavfield "c2ms5ec53ca03ce907_90144927" label="Zip"}}
{{eavfield "c2ms5ec53c94a23b59_91624278" label="State"}}
{{eavfield "c2ms5ec53cabe507b8_34125749" label="Country"}}
{{eavfield "c2ms5ec53cb3bd7db7_67745785" label="Latitude"}}
{{eavfield "c2ms5ec53cb463dff3_86640846" label="Longitude"}}
{{eavfield "c2ms5ec53cc2d4fa78_38699147" label="Include waiver of subrogation"}}
{{eavfield "c2ms5ec53cc37a1fc2_15593931" label="Confirm the Additional Insured’s work accounts for no more than 15% of the original insured’s work"}}
{{eavfield "c2ms609bc95a178045_58951897" label="Removed"}}
{{eavfield "c2ms609bc954d32c38_87316850" label="Date of Removal"}}',
                'created_at' => '2022-11-11 13:37:00',
                'deleted_at' => NULL,
                'id' => 21,
                'identifier' => 'stp-additional-insured-mi-fields',
                'title' => 'STP: Multi, Additional Insured',
                'updated_at' => '2022-11-11 13:37:00',
            ],

            [
                'contents' => '{{eavfield "c2ms5ec541cf309275_94186277" label="Loss Payee Name"}}
{{eavfield "c2ms5ec541d39ac655_36533847" label="Effective Date"}}
{{eavfield "c2ms5ec541d71268d0_45462328" label="Full Address Geocode Data"}}
{{eavfield "c2ms5ec541e3c5fcc2_40444650" label="Address Line 1"}}
{{eavfield "c2ms5ec541e4604276_19270587" label="Address Line 2"}}
{{eavfield "c2ms5ec541ffb0b327_83359888" label="Town/City"}}
{{eavfield "c2ms5ec5420d5831a1_45741162" label="Zip"}}
{{eavfield "c2ms5ec54206806e18_04453293" label="State"}}
{{eavfield "c2ms5ec542132413d9_98168900" label="Country"}}
{{eavfield "c2ms5ec5427e1e0f26_21747482" label="Latitude"}}
{{eavfield "c2ms5ec5427ea8cda2_35956153" label="Longitude"}}
{{eavfield "c2ms609bc9945acf42_50112281" label="Removed"}}
{{eavfield "c2ms609bc9918eb770_65356721" label="Date of Removal"}}',
                'created_at' => '2022-11-11 13:37:00',
                'deleted_at' => NULL,
                'id' => 22,
                'identifier' => 'stp-loss-payee-mi-fields',
                'title' => 'STP: Multi, Loss Payees',
                'updated_at' => '2022-11-11 13:37:00',
            ],

            [
                'contents' => '{{eavfield "c2ms6141f3b78e4f95_72171102" label="Full Address Geocode Data"}}
{{eavfield "c2ms6141f3bbc88555_86465983" label="Address Line 1"}}
{{eavfield "c2ms6141f3c31fa360_48616956" label="Address Line 2"}}
{{eavfield "c2ms6141f3c5126b09_68615291" label="Town/City"}}
{{eavfield "c2ms6141f3cd055f78_92525981" label="Province"}}
{{eavfield "c2ms6141f3d66c5639_14121464" label="Zip"}}
{{eavfield "c2ms6141f3e35a4ea2_52343008" label="Country"}}
{{eavfield "c2ms61680bc08aa2f6_16844169" label="Latitude"}}
{{eavfield "c2ms61680bc18f0592_76748509" label="Longitude"}}
{{eavfield "c2ms6141f3e8e766d5_52728524" label="Would you like to add a nickname/common name for this location?"}}
{{>ds-subtitle subtitle="Building Details"}}
{{eavfield "c2ms6141f3fc28eec3_31425592" label="What is the average inventory TIV?"}}
{{eavfield "c2ms6141f3fd523218_41211369" label="What is the maximum inventory TIV?"}}
{{eavfield "c2ms6141f405c8a920_08751293" label="Fully sprinklered"}}
{{eavfield "c2ms6141f408ba6129_93406249" label="Fully functioning fire alarm central station"}}
{{eavfield "c2ms6141f40b117e11_95329404" label="None"}}
{{eavfield "c2ms6141f4125e2ba2_99043712" label="Security Guards"}}
{{eavfield "c2ms6141f414cd1549_59127983" label="Key Card Access"}}
{{eavfield "c2ms6141f4195a9283_82042967" label="Fully Functioning CCTV"}}
{{eavfield "c2ms6141f41b92eb19_09353598" label="Fully Functioning Central Station Burglar Alarm"}}
{{eavfield "c2ms6141f41d9a7791_91257222" label="None"}}
{{eavfield "c2ms6141f423d4aab0_91761467" label="What is the construction type?"}}
{{eavfield "c2ms6141f4299aca12_13154605" label="When was the building built?"}}
{{eavfield "c2ms6141f433b5cf89_71057956" label="When was the roof constructed or last updated?"}}
{{eavfield "c2ms61c1c6a5626f91_13659531" label="Has the location been retrofitted for Earthquake?"}}
{{eavfield "c2ms619df613373903_59881372" label="When was the location retrofitted?"}}
{{eavfield "c2ms6141f43e54e713_41821865" label="Is any light manufacturing or processing undertaken at this location?"}}
{{eavfield "c2ms6141f43f901728_45935554" label="Are backup generators in place?"}}
{{>ds-subtitle subtitle="MTA Info"}}
{{eavfield "c2ms6149d6e3ae6d00_29930418" label="Removed"}}
{{eavfield "c2ms6149d6e8597e75_45100651" label="Date of Removal"}}
{{eavfield "c2ms6149d6e4492aa8_17757585" label="Added"}}
{{eavfield "c2ms6149d6e929f403_13145211" label="Date of Addition"}}
{{eavfield "c2ms6149d6e5194127_75373027" label="Edited"}}
{{eavfield "c2ms6149d6e9e3a000_58497691" label="Date of Edit"}}
{{eavfield "c2ms6149d6e6107648_49765093" label="Is Rated"}}
{{>ds-subtitle subtitle="Underwriting Info"}}
{{eavfield "c2ms615eeda82b6506_27368205" label="Distance to Coast"}}
{{eavfield "c2ms615eeda8d63cf9_21612109" label="Critical EQ Load"}}
{{eavfield "c2ms615eedaa0b7985_82224138" label="All Other Cat Load"}}
{{eavfield "c2ms620a15505863b9_43040681" label="MI UUID"}}
{{eavfield "c2ms6262727b5e2814_78976587" label="Maximum Inventory TIV Percentage"}}',
                'created_at' => '2022-11-11 13:37:00',
                'deleted_at' => NULL,
                'id' => 23,
                'identifier' => 'stp-location-information-mi-fields',
                'title' => 'STP: Multi, Location Information',
                'updated_at' => '2022-11-11 13:37:00',
            ],
        ];
    }
}
