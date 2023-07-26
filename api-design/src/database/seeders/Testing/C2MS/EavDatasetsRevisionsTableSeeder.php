<?php

namespace Database\Seeders\Testing\C2MS;

use Illuminate\Database\Seeder;

class EavDatasetsRevisionsTableSeeder extends Seeder
{
    public function run(): void
    {
        \DB::table('eav_datasets_revisions')->truncate();

        \DB::table('eav_datasets_revisions')->insert(
            $this->provideData()
        );
    }

    protected function provideData(): array
    {
        return [

            [
                'category_id' => 1,
                'dataset_id' => 5,
                'date_created' => '2020-06-04 17:31:19',
                'id' => 1,
                'revision_id' => 0,
                'identifier' => '6ff0c694-a678-11ea-b4d4-4a28775f739c',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 1120,
                'rev_ds_code' => 'ter_04_additional_insured_mi',
                'rev_ds_description' => '',
                'rev_ds_title' => 'TER_04_Additional_Insured_MI',
                'rev_hb' => '<div
class="{{#if instanceCount}}full{{else}}empty{{/if}}"
data-identifier="{{datasetRevisionIdentifier}}"
data-role="multi-placeholder"
data-ds-control="{{control}}"
>

<div class="form-heading custom-hidden mi-header" data-role="mi-header" data-identifier="{{datasetRevisionIdentifier}}">
<div class="left">
<h4>Insured Information
<span class="instance-counter">
(Total: <span data-role="instance-counter" data-identifier="{{datasetRevisionIdentifier}}">{{instanceCount}}</span>)
</span>
</h4>
</div>

<div class="right mi-control mi-add-instance">
<button type="button" data-role="add-instance" data-identifier="{{datasetRevisionIdentifier}}" data-title="Insured Information">Add</button>
</div>

<div class="clear"></div>
</div>


<!-- Form fields with eav dataset identifier and instance count	 -->
{{>multi-mandatory-fields
datasetRevisionIdentifier=datasetRevisionIdentifier
instanceCount=instanceCount
}}


{{#if instanceCount}}
{{#each instances as |instance|}}

<div data-role="instance-wrapper" data-index="{{instance.index}}">
{{>multi-instance-header
title="Insured"
datasetRevisionIdentifier=../datasetRevisionIdentifier
index=instance.index
}}

<!-- Form field that contains persisted instance\'s identifier (form field "ident") -->
<input
type="hidden"
name="c2msmf[{{../datasetRevisionIdentifier}}][{{instance.index}}][ident]"
id="{{../datasetRevisionIdentifier}}_ident_{{instance.index}}"
data-template-name="c2msmf[{{../datasetRevisionIdentifier}}][\\{{index}}][ident]"
data-template-id="{{../datasetRevisionIdentifier}}_ident_\\{{index}}"
value="{{instance.ident}}"
/>

{{>terror-additional-insured-mi-fields dataset=../dataset fieldCollection=../fieldCollection instance=instance index=instance.index}}

<!-- Footer -->
{{>multi-instance-footer
datasetRevisionIdentifier=../datasetRevisionIdentifier
index=instance.index
title="Insured Information"
}}
</div>
{{/each}}

{{ else }}
<p class="mi-empty">There\'s no Insured Information specified</p>
{{/if}}


<!-- Template for adding additional instance on the frontend -->
<script type="text/x-handlebars" data-identifier="{{datasetRevisionIdentifier}}" data-role="multi-template">
<div data-role="instance-wrapper" data-index="\\{{index}}">

<div class="form-heading custom-hidden mi-instance-header">
<div class="left mi-instance-label">
<h4 data-template-html="Insured Information: \\{{index}}">Insured Information: \\{{index}}</h4>
</div>
<div class="right mi-control mi-remove-instance">
<button
class="right"
type="button"
data-role="remove-instance"
data-identifier="{{datasetRevisionIdentifier}}"
data-index="\\{{index}}"
data-title="Insured Information"
data-template-html="Remove Insured Information (Num: \\{{index}})"
>Remove Insured Information (Num: \\{{index}})</button>
</div>
<div class="clear"></div>
</div>

{{>terror-additional-insured-mi-fields dataset=dataset fieldCollection=fieldCollection}}

<input
type="hidden"
name="c2msmf[{{datasetRevisionIdentifier}}][\\{{index}}][ident]"
id="{{datasetRevisionIdentifier}}_ident_\\{{index}}"
data-template-name="c2msmf[{{datasetRevisionIdentifier}}][\\{{index}}][ident]"
data-template-id="{{datasetRevisionIdentifier}}_ident_\\{{index}}"
value=""
/>

<div class="form-heading custom-hidden mi-instance-footer">
<div class="right mi-control mi-remove-instance">
<button
class="right"
type="button"
data-role="remove-instance"
data-identifier="{{datasetRevisionIdentifier}}"
data-index="\\{{index}}"
data-title="Insured Information"
data-template-html="Remove Insured Information (Num: \\{{index}})"
>Remove Insured Information (Num: \\{{index}})</button>
</div>
<div class="clear"></div>
</div>
</div>
</script>
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-multi-box">

<div class="form-heading custom-hidden">
<h4>Additional Insured Information: {COUNT}</h4>
</div>

<div class="required" id="parent-c2ms5df0e957618a71_12786934">
<label class="col-sm-6" for="c2ms5df0e957618a71_12786934">Additional Insured Name</label>
{FGEN:text|name=c2ms5df0e957618a71_12786934|id=c2ms5df0e957618a71_12786934|data-type=5|data-position=1|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0e958d9b456_71042847">
<label class="col-sm-6" for="c2ms5df0e958d9b456_71042847">Address Line 1</label>
{FGEN:text|name=c2ms5df0e958d9b456_71042847|id=c2ms5df0e958d9b456_71042847|data-type=5|data-position=4|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5f9c173a036b69_27653666">
<label class="col-sm-6" for="c2ms5f9c173a036b69_27653666">Address Line 2</label>
{FGEN:text|name=c2ms5f9c173a036b69_27653666|id=c2ms5f9c173a036b69_27653666|data-type=5|data-position=5|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5f9c18f07abbb9_14961727">
<label class="col-sm-6" for="c2ms5f9c18f07abbb9_14961727">Address Line 3</label>
{FGEN:c2ms5f9c18f07abbb9_14961727|name=c2ms5f9c18f07abbb9_14961727|id=c2ms5f9c18f07abbb9_14961727|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0e95a419f06_12696221">
<label class="col-sm-6" for="c2ms5df0e95a419f06_12696221">Zip</label>
{FGEN:text|name=c2ms5df0e95a419f06_12696221|id=c2ms5df0e95a419f06_12696221|data-type=5|data-position=8|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0e95af40996_07066964">
<label class="col-sm-6" for="c2ms5df0e95af40996_07066964">Town/City</label>
{FGEN:text|name=c2ms5df0e95af40996_07066964|id=c2ms5df0e95af40996_07066964|data-type=5|data-position=6|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0e9934f1917_65901359">
<label class="col-sm-6" for="c2ms5df0e9934f1917_65901359">Country</label>
{FGEN:country|name=c2ms5df0e9934f1917_65901359|id=c2ms5df0e9934f1917_65901359|data-type=1|data-position=9|data-location=left|field_id=75|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ed78c366f9c50_66040343">
<label class="col-sm-6" for="c2ms5ed78c366f9c50_66040343">Effective Date</label>
{FGEN:datepicker|name=c2ms5ed78c366f9c50_66040343|id=c2ms5ed78c366f9c50_66040343|data-type=3|data-position=2|data-location=left|field_id=76|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ed78c41af2a27_24562158">
<label class="col-sm-6" for="c2ms5ed78c41af2a27_24562158">Full Address Geocode Data</label>
{FGEN:textarea|name=c2ms5ed78c41af2a27_24562158|id=c2ms5ed78c41af2a27_24562158|data-type=4|data-position=3|data-location=left|field_id=77|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ed78c5a354185_34777571">
<label class="col-sm-6" for="c2ms5ed78c5a354185_34777571">State</label>
{FGEN:usa_states_main|name=c2ms5ed78c5a354185_34777571|id=c2ms5ed78c5a354185_34777571|data-type=5|data-position=7|data-location=left|field_id=78|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ed78c692b8891_93513824">
<label class="col-sm-6" for="c2ms5ed78c692b8891_93513824">Latitude</label>
{FGEN:text|name=c2ms5ed78c692b8891_93513824|id=c2ms5ed78c692b8891_93513824|data-type=5|data-position=10|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ed78c69a15058_63493463">
<label class="col-sm-6" for="c2ms5ed78c69a15058_63493463">Longitude</label>
{FGEN:text|name=c2ms5ed78c69a15058_63493463|id=c2ms5ed78c69a15058_63493463|data-type=5|data-position=11|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ed78c77c21f71_25640783">
<label class="col-sm-6" for="c2ms5ed78c77c21f71_25640783">Include waiver of subrogation</label>
{FGEN:yes_no|name=c2ms5ed78c77c21f71_25640783|id=c2ms5ed78c77c21f71_25640783|data-type=1|data-position=12|data-location=left|field_id=79|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ed78c785b7c24_51292594">
<label class="col-sm-6" for="c2ms5ed78c785b7c24_51292594">Confirm the Additional Insured’s work accounts for no more than 15% of the original insured’s work</label>
{FGEN:yes_no|name=c2ms5ed78c785b7c24_51292594|id=c2ms5ed78c785b7c24_51292594|data-type=1|data-position=13|data-location=left|field_id=79|revision_id=1}
</div>

<div class="required" id="parent-c2ms5efc6b9eaa9053_11116763">
<label class="col-sm-6" for="c2ms5efc6b9eaa9053_11116763">Removed</label>
{FGEN:c2ms5efc6b9eaa9053_11116763|name=c2ms5efc6b9eaa9053_11116763|id=c2ms5efc6b9eaa9053_11116763|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms5efc6ba62eb4e2_99985164">
<label class="col-sm-6" for="c2ms5efc6ba62eb4e2_99985164">Date of Removal</label>
{FGEN:c2ms5efc6ba62eb4e2_99985164|name=c2ms5efc6ba62eb4e2_99985164|id=c2ms5efc6ba62eb4e2_99985164|data-type=3|data-position=bottom|data-location=left|field_id=113|revision_id=1}
</div>

</div>

</div>

',
                'type_id' => 3,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 6,
                'date_created' => '2020-06-04 17:31:19',
                'id' => 2,
                'identifier' => '6ff1836e-a678-11ea-b4d4-4a28775f739c',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 21857,
                'rev_ds_code' => 'ter_06_surplus_lines',
                'rev_ds_description' => '',
                'rev_ds_title' => 'TER_06_Surplus_Lines',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Surplus Lines"}}
{{eavfield "c2ms5ed76e3e458ed8_85113758" label="What is the state of filing?"}}
{{eavfield "c2ms5ed76e4c9e75b1_14027356" label="Do you wish to complete the Surplus Lines details now?"}}
{{eavfield "c2ms5df0eed322ce77_00083686" label="Name"}}
{{eavfield "c2ms5df0eed3edd799_71714810" label="License Number"}}
{{eavfield "c2ms5ed76e5fb69ed3_67239244" label="Full Address Geocode Data"}}
{{eavfield "c2ms5df0eed4a68414_09847038" label="Address Line 1"}}
{{eavfield "c2ms5df0eed5514ff2_30787787" label="Address Line 2"}}
{{eavfield "c2ms5f9c1710451ea5_55958676" label="Address Line 3"}}
{{eavfield "c2ms5df0eed698b649_87446734" label="Town/City"}}
{{eavfield "c2ms5ed76ee8569fd8_03510646" label="State"}}
{{eavfield "c2ms5df0eed5edf931_96364986" label="Zip"}}
{{eavfield "c2ms5df0ef32c6a6d2_19781860" label="Country"}}
{{eavfield "c2ms5ed76ea87a8983_40737435" label="Latitude"}}
{{eavfield "c2ms5ed76ea90f6492_08209106" label="Longitude"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="required" id="parent-c2ms5df0eed322ce77_00083686">
<label class="col-sm-6" for="c2ms5df0eed322ce77_00083686">Name</label>
{FGEN:text|name=c2ms5df0eed322ce77_00083686|id=c2ms5df0eed322ce77_00083686|data-type=5|data-position=1|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0eed3edd799_71714810">
<label class="col-sm-6" for="c2ms5df0eed3edd799_71714810">License Number</label>
{FGEN:text|name=c2ms5df0eed3edd799_71714810|id=c2ms5df0eed3edd799_71714810|data-type=5|data-position=2|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0eed4a68414_09847038">
<label class="col-sm-6" for="c2ms5df0eed4a68414_09847038">Address Line 1</label>
{FGEN:text|name=c2ms5df0eed4a68414_09847038|id=c2ms5df0eed4a68414_09847038|data-type=5|data-position=3|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0eed5514ff2_30787787">
<label class="col-sm-6" for="c2ms5df0eed5514ff2_30787787">Address Line 2</label>
{FGEN:text|name=c2ms5df0eed5514ff2_30787787|id=c2ms5df0eed5514ff2_30787787|data-type=5|data-position=4|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0eed5edf931_96364986">
<label class="col-sm-6" for="c2ms5df0eed5edf931_96364986">Zip</label>
{FGEN:text|name=c2ms5df0eed5edf931_96364986|id=c2ms5df0eed5edf931_96364986|data-type=5|data-position=5|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0eed698b649_87446734">
<label class="col-sm-6" for="c2ms5df0eed698b649_87446734">Town/City</label>
{FGEN:text|name=c2ms5df0eed698b649_87446734|id=c2ms5df0eed698b649_87446734|data-type=5|data-position=6|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0ef32c6a6d2_19781860">
<label class="col-sm-6" for="c2ms5df0ef32c6a6d2_19781860">Country</label>
{FGEN:country|name=c2ms5df0ef32c6a6d2_19781860|id=c2ms5df0ef32c6a6d2_19781860|data-type=1|data-position=7|data-location=left|field_id=75|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ed76e3e458ed8_85113758">
<label class="col-sm-6" for="c2ms5ed76e3e458ed8_85113758">What is the state of filing?</label>
{FGEN:usa_states_main|name=c2ms5ed76e3e458ed8_85113758|id=c2ms5ed76e3e458ed8_85113758|data-type=5|data-position=8|data-location=left|field_id=78|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ed76e4c9e75b1_14027356">
<label class="col-sm-6" for="c2ms5ed76e4c9e75b1_14027356">Do you wish to complete the Surplus Lines details now?</label>
{FGEN:yes_no|name=c2ms5ed76e4c9e75b1_14027356|id=c2ms5ed76e4c9e75b1_14027356|data-type=1|data-position=9|data-location=left|field_id=79|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ed76e5fb69ed3_67239244">
<label class="col-sm-6" for="c2ms5ed76e5fb69ed3_67239244">Full Address Geocode Data</label>
{FGEN:textarea|name=c2ms5ed76e5fb69ed3_67239244|id=c2ms5ed76e5fb69ed3_67239244|data-type=4|data-position=10|data-location=left|field_id=77|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ed76ee8569fd8_03510646">
<label class="col-sm-6" for="c2ms5ed76ee8569fd8_03510646">State</label>
{FGEN:usa_states_main|name=c2ms5ed76ee8569fd8_03510646|id=c2ms5ed76ee8569fd8_03510646|data-type=5|data-position=11|data-location=left|field_id=78|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ed76ea87a8983_40737435">
<label class="col-sm-6" for="c2ms5ed76ea87a8983_40737435">Latitude</label>
{FGEN:text|name=c2ms5ed76ea87a8983_40737435|id=c2ms5ed76ea87a8983_40737435|data-type=5|data-position=12|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ed76ea90f6492_08209106">
<label class="col-sm-6" for="c2ms5ed76ea90f6492_08209106">Longitude</label>
{FGEN:text|name=c2ms5ed76ea90f6492_08209106|id=c2ms5ed76ea90f6492_08209106|data-type=5|data-position=13|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5f9c1710451ea5_55958676">
<label class="col-sm-6" for="c2ms5f9c1710451ea5_55958676">Address Line 3</label>
{FGEN:text|name=c2ms5f9c1710451ea5_55958676|id=c2ms5f9c1710451ea5_55958676|data-type=5|data-position=14|data-location=left|field_id=112|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 7,
                'date_created' => '2020-06-04 17:31:19',
                'id' => 3,
                'identifier' => '6ff2119e-a678-11ea-b4d4-4a28775f739c',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 21857,
                'rev_ds_code' => 'ter_03_policy_holder_details',
                'rev_ds_description' => '',
                'rev_ds_title' => 'TER_03_Policy_Holder_Details',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Policy Holder Details"}}
{{eavfield "c2ms5df0e7db70b6b3_40589925" label="Named Insured"}}
{{eavfield "c2ms5e2f0825d735d8_06255990" label="Full Address Geocode Data"}}
{{eavfield "c2ms5df0e7dd9bfee9_86702712" label="Address Line 1"}}
{{eavfield "c2ms5df0e7de707849_85563216" label="Address Line 2"}}
{{eavfield "c2ms5f9c16e4378ab4_89688456" label="Address Line 3"}}
{{eavfield "c2ms5df0e7e056f582_44762023" label="Town/City"}}
{{eavfield "c2ms5ed77be9b0b389_56619612" label="State"}}
{{eavfield "c2ms5df0e7df82fa82_24571980" label="Zip"}}
{{eavfield "c2ms5df0e7fe3dc578_42297893" label="Country"}}
{{eavfield "c2ms5df0f6346f2725_80954191" label="Email"}}
{{eavfield "c2ms5e2f083953be07_53443642" label="Latitude"}}
{{eavfield "c2ms5e2f0839e005d6_97394577" label="Longitude"}}
{{eavfield "c2ms60dc54b82d0e17_68058971" label="Policyholder Address Identifier"}}
{{eavfield "c2ms60dc54b9a22338_82119559" label="Policyholder Duplication Check"}}
{{>ds-subtitle subtitle="Bespoke Endorsement"}}
{{eavfield "c2ms5ed770368a61d2_62546885" label="Bespoke Endorsement"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Policy Holder Details</h4>
</div>

<div class="required" id="parent-c2ms5df0e7db70b6b3_40589925">
<label class="col-sm-6" for="c2ms5df0e7db70b6b3_40589925">Named Insured</label>
{FGEN:text|name=c2ms5df0e7db70b6b3_40589925|id=c2ms5df0e7db70b6b3_40589925|data-type=5|data-position=1|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5e2f0825d735d8_06255990">
<label class="col-sm-6" for="c2ms5e2f0825d735d8_06255990">Full Address Geocode Data</label>
{FGEN:textarea|name=c2ms5e2f0825d735d8_06255990|id=c2ms5e2f0825d735d8_06255990|data-type=4|data-position=2|data-location=left|field_id=77|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0e7dd9bfee9_86702712">
<label class="col-sm-6" for="c2ms5df0e7dd9bfee9_86702712">Address Line 1</label>
{FGEN:text|name=c2ms5df0e7dd9bfee9_86702712|id=c2ms5df0e7dd9bfee9_86702712|data-type=5|data-position=3|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0e7de707849_85563216">
<label class="col-sm-6" for="c2ms5df0e7de707849_85563216">Address Line 2</label>
{FGEN:text|name=c2ms5df0e7de707849_85563216|id=c2ms5df0e7de707849_85563216|data-type=5|data-position=4|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5f9c16e4378ab4_89688456">
<label class="col-sm-6" for="c2ms5f9c16e4378ab4_89688456">Address Line 3</label>
{FGEN:c2ms5f9c16e4378ab4_89688456|name=c2ms5f9c16e4378ab4_89688456|id=c2ms5f9c16e4378ab4_89688456|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0e7e056f582_44762023">
<label class="col-sm-6" for="c2ms5df0e7e056f582_44762023">Town/City</label>
{FGEN:text|name=c2ms5df0e7e056f582_44762023|id=c2ms5df0e7e056f582_44762023|data-type=5|data-position=6|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ed77be9b0b389_56619612">
<label class="col-sm-6" for="c2ms5ed77be9b0b389_56619612">State</label>
{FGEN:c2ms5ed77be9b0b389_56619612|name=c2ms5ed77be9b0b389_56619612|id=c2ms5ed77be9b0b389_56619612|data-type=5|data-position=bottom|data-location=left|field_id=78|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0e7df82fa82_24571980">
<label class="col-sm-6" for="c2ms5df0e7df82fa82_24571980">Zip</label>
{FGEN:text|name=c2ms5df0e7df82fa82_24571980|id=c2ms5df0e7df82fa82_24571980|data-type=5|data-position=5|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0e7fe3dc578_42297893">
<label class="col-sm-6" for="c2ms5df0e7fe3dc578_42297893">Country</label>
{FGEN:country|name=c2ms5df0e7fe3dc578_42297893|id=c2ms5df0e7fe3dc578_42297893|data-type=1|data-position=8|data-location=left|field_id=75|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0f6346f2725_80954191">
<label class="col-sm-6" for="c2ms5df0f6346f2725_80954191">Email</label>
{FGEN:text|name=c2ms5df0f6346f2725_80954191|id=c2ms5df0f6346f2725_80954191|data-type=5|data-position=9|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5e2f083953be07_53443642">
<label class="col-sm-6" for="c2ms5e2f083953be07_53443642">Latitude</label>
{FGEN:text|name=c2ms5e2f083953be07_53443642|id=c2ms5e2f083953be07_53443642|data-type=5|data-position=10|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5e2f0839e005d6_97394577">
<label class="col-sm-6" for="c2ms5e2f0839e005d6_97394577">Longitude</label>
{FGEN:text|name=c2ms5e2f0839e005d6_97394577|id=c2ms5e2f0839e005d6_97394577|data-type=5|data-position=11|data-location=left|field_id=74|revision_id=1}
</div>

<div class="form-heading custom-hidden">
<h4>Bespoke Endorsement</h4>
</div>

<div class="required" id="parent-c2ms5ed770368a61d2_62546885">
<label class="col-sm-6" for="c2ms5ed770368a61d2_62546885">Bespoke Endorsement</label>
{FGEN:textarea|name=c2ms5ed770368a61d2_62546885|id=c2ms5ed770368a61d2_62546885|data-type=4|data-position=14|data-location=left|field_id=77|revision_id=1}
</div>

<div class="required" id="parent-c2ms60dc54b82d0e17_68058971">
<label class="col-sm-6" for="c2ms60dc54b82d0e17_68058971">Policyholder Address Identifier</label>
{FGEN:text|name=c2ms60dc54b82d0e17_68058971|id=c2ms60dc54b82d0e17_68058971|data-type=5|data-position=14|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms60dc54b9a22338_82119559">
<label class="col-sm-6" for="c2ms60dc54b9a22338_82119559">Policyholder Duplication Check</label>
{FGEN:Integer|name=c2ms60dc54b9a22338_82119559|id=c2ms60dc54b9a22338_82119559|data-type=1|data-position=15|data-location=left|field_id=84|revision_id=1}
</div>

</div>',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 8,
                'date_created' => '2020-06-04 17:31:19',
                'id' => 4,
                'identifier' => '6ff3fba1-a678-11ea-b4d4-4a28775f739c',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 107131,
                'rev_ds_code' => 'ter_11_location_information_mi',
                'rev_ds_description' => '',
                'rev_ds_title' => 'TER_11_Location_Information_MI',
                'rev_hb' => '<div
class="{{#if instanceCount}}full{{else}}empty{{/if}}"
data-identifier="{{datasetRevisionIdentifier}}"
data-role="multi-placeholder"
data-ds-control="{{control}}"
>


<div class="form-heading custom-hidden mi-header" data-role="mi-header" data-identifier="{{datasetRevisionIdentifier}}">
<div class="left">
<h4>Location Information
<span class="instance-counter">
(Total: <span data-role="instance-counter" data-identifier="{{datasetRevisionIdentifier}}">{{instanceCount}}</span>)
</span>
</h4>
</div>

<div class="right mi-control mi-add-instance">
<button type="button" data-role="add-instance" data-identifier="{{datasetRevisionIdentifier}}" data-title="Location Information">Add</button>
</div>

<div class="clear"></div>
</div>

<!-- Form fields with eav dataset identifier and instance count	 -->
{{>multi-mandatory-fields
datasetRevisionIdentifier=datasetRevisionIdentifier
instanceCount=instanceCount
}}


{{#if instanceCount}}
{{#each instances as |instance|}}

<div data-role="instance-wrapper" data-index="{{instance.index}}">
{{>multi-instance-header
title="Location"
datasetRevisionIdentifier=../datasetRevisionIdentifier
index=instance.index
}}

<!-- Form field that contains persisted instance\'s identifier (form field "ident") -->
<input
type="hidden"
name="c2msmf[{{../datasetRevisionIdentifier}}][{{instance.index}}][ident]"
id="{{../datasetRevisionIdentifier}}_ident_{{instance.index}}"
data-template-name="c2msmf[{{../datasetRevisionIdentifier}}][\\{{index}}][ident]"
data-template-id="{{../datasetRevisionIdentifier}}_ident_\\{{index}}"
value="{{instance.ident}}"
/>

{{>terror-location-information-mi-fields dataset=../dataset fieldCollection=../fieldCollection instance=instance index=instance.index}}

<!-- Footer -->
{{>multi-instance-footer
datasetRevisionIdentifier=../datasetRevisionIdentifier
index=instance.index
title="Location Information"
}}
</div>
{{/each}}

{{ else }}
<p class="mi-empty">There\'s no Location Information specified</p>
{{/if}}

<!-- Template for adding additional instance on the frontend -->
<script type="text/x-handlebars" data-identifier="{{datasetRevisionIdentifier}}" data-role="multi-template">
<div data-role="instance-wrapper" data-index="\\{{index}}">

<div class="form-heading custom-hidden mi-instance-header">
<div class="left mi-instance-label">
<h4 data-template-html="Insured Information: \\{{index}}">Location Information: \\{{index}}</h4>
</div>
<div class="right mi-control mi-remove-instance">
<button
class="right"
type="button"
data-role="remove-instance"
data-identifier="{{datasetRevisionIdentifier}}"
data-index="\\{{index}}"
data-title="Insured Information"
data-template-html="Remove Location Information (Num: \\{{index}})"
>Remove Location Information (Num: \\{{index}})</button>
</div>
<div class="clear"></div>
</div>

{{>terror-location-information-mi-fields dataset=dataset fieldCollection=fieldCollection}}

<input
type="hidden"
name="c2msmf[{{datasetRevisionIdentifier}}][\\{{index}}][ident]"
id="{{datasetRevisionIdentifier}}_ident_\\{{index}}"
data-template-name="c2msmf[{{datasetRevisionIdentifier}}][\\{{index}}][ident]"
data-template-id="{{datasetRevisionIdentifier}}_ident_\\{{index}}"
value=""
/>

<div class="form-heading custom-hidden mi-instance-footer">
<div class="right mi-control mi-remove-instance">
<button
class="right"
type="button"
data-role="remove-instance"
data-identifier="{{datasetRevisionIdentifier}}"
data-index="\\{{index}}"
data-title="Location Information"
data-template-html="Remove Location Information (Num: \\{{index}})"
>Remove Location Information (Num: \\{{index}})</button>
</div>
<div class="clear"></div>
</div>
</div>
</script>
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-multi-box">

<div class="form-heading custom-hidden">
<h4>Location Information: {COUNT}</h4>
</div>

<div class="required" id="parent-c2ms5df0ecaa88abb9_62172298">
<label class="col-sm-6" for="c2ms5df0ecaa88abb9_62172298">Address Line 1</label>
{FGEN:text|name=c2ms5df0ecaa88abb9_62172298|id=c2ms5df0ecaa88abb9_62172298|data-type=5|data-position=1|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0ecab172f40_01857484">
<label class="col-sm-6" for="c2ms5df0ecab172f40_01857484">Address Line 2</label>
{FGEN:text|name=c2ms5df0ecab172f40_01857484|id=c2ms5df0ecab172f40_01857484|data-type=5|data-position=2|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5f9c16b512b256_11347436">
<label class="col-sm-6" for="c2ms5f9c16b512b256_11347436">Address Line 3</label>
{FGEN:c2ms5f9c16b512b256_11347436|name=c2ms5f9c16b512b256_11347436|id=c2ms5f9c1b1a5bdfa1_64565235|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0ecb5b28525_74883701">
<label class="col-sm-6" for="c2ms5df0ecb5b28525_74883701">Zip</label>
{FGEN:text|name=c2ms5df0ecb5b28525_74883701|id=c2ms5df0ecb5b28525_74883701|data-type=5|data-position=3|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0ecb6822970_31687930">
<label class="col-sm-6" for="c2ms5df0ecb6822970_31687930">Town/City</label>
{FGEN:text|name=c2ms5df0ecb6822970_31687930|id=c2ms5df0ecb6822970_31687930|data-type=5|data-position=4|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0ecc6a34806_44274081">
<label class="col-sm-6" for="c2ms5df0ecc6a34806_44274081">Country</label>
{FGEN:country|name=c2ms5df0ecc6a34806_44274081|id=c2ms5df0ecc6a34806_44274081|data-type=1|data-position=5|data-location=left|field_id=75|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0ecd1bf6b70_78175240">
<label class="col-sm-6" for="c2ms5df0ecd1bf6b70_78175240">What property damage value is required?</label>
{FGEN:float_entry|name=c2ms5df0ecd1bf6b70_78175240|id=c2ms5df0ecd1bf6b70_78175240|data-type=2|data-position=6|data-location=left|field_id=81|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0ecd29f9ad1_45276721">
<label class="col-sm-6" for="c2ms5df0ecd29f9ad1_45276721">What business interruption limit is required?</label>
{FGEN:float_entry|name=c2ms5df0ecd29f9ad1_45276721|id=c2ms5df0ecd29f9ad1_45276721|data-type=2|data-position=7|data-location=left|field_id=81|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0ecd3d8f133_75955641">
<label class="col-sm-6" for="c2ms5df0ecd3d8f133_75955641">What content value limit is required?</label>
{FGEN:float_entry|name=c2ms5df0ecd3d8f133_75955641|id=c2ms5df0ecd3d8f133_75955641|data-type=2|data-position=8|data-location=left|field_id=81|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0ecf3a25f56_88431983">
<label class="col-sm-6" for="c2ms5df0ecf3a25f56_88431983">Is there any armed guards / security?</label>
{FGEN:yes_no|name=c2ms5df0ecf3a25f56_88431983|id=c2ms5df0ecf3a25f56_88431983|data-type=1|data-position=9|data-location=left|field_id=79|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0ecf4697350_58285672">
<label class="col-sm-6" for="c2ms5df0ecf4697350_58285672">Is there any crash barrier / perimeter fence?</label>
{FGEN:yes_no|name=c2ms5df0ecf4697350_58285672|id=c2ms5df0ecf4697350_58285672|data-type=1|data-position=10|data-location=left|field_id=79|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df2513e5650e0_40457547">
<label class="col-sm-6" for="c2ms5df2513e5650e0_40457547">Full Address Geocode Data</label>
{FGEN:textarea|name=c2ms5df2513e5650e0_40457547|id=c2ms5df2513e5650e0_40457547|data-type=4|data-position=11|data-location=left|field_id=77|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df25151b6b1a4_89810069">
<label class="col-sm-6" for="c2ms5df25151b6b1a4_89810069">Latitude</label>
{FGEN:text|name=c2ms5df25151b6b1a4_89810069|id=c2ms5df25151b6b1a4_89810069|data-type=5|data-position=12|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df25152a242d7_34773472">
<label class="col-sm-6" for="c2ms5df25152a242d7_34773472">Longitude</label>
{FGEN:text|name=c2ms5df25152a242d7_34773472|id=c2ms5df25152a242d7_34773472|data-type=5|data-position=13|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5e2ef84ec53e83_08396318">
<label class="col-sm-6" for="c2ms5e2ef84ec53e83_08396318">Would you like to add a nickname/common name for this location?</label>
{FGEN:text|name=c2ms5e2ef84ec53e83_08396318|id=c2ms5e2ef84ec53e83_08396318|data-type=5|data-position=14|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5e46636d5dff60_47307777">
<label class="col-sm-6" for="c2ms5e46636d5dff60_47307777">Terror Risk Grade</label>
{FGEN:text|name=c2ms5e46636d5dff60_47307777|id=c2ms5e46636d5dff60_47307777|data-type=5|data-position=15|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5e8da7231a1353_45150862">
<label class="col-sm-6" for="c2ms5e8da7231a1353_45150862">ExternalRef</label>
{FGEN:text|name=c2ms5e8da7231a1353_45150862|id=c2ms5e8da7231a1353_45150862|data-type=5|data-position=16|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ed77ed7e9ceb6_53641439">
<label class="col-sm-6" for="c2ms5ed77ed7e9ceb6_53641439">State</label>
{FGEN:usa_states_main|name=c2ms5ed77ed7e9ceb6_53641439|id=c2ms5ed77ed7e9ceb6_53641439|data-type=5|data-position=17|data-location=left|field_id=78|revision_id=1}
</div>


<div class="form-heading custom-hidden">
<h4>Underwriting Data: {COUNT}</h4>
</div>

<div class="required" id="parent-c2ms5ee8d5115a5bf8_89951994">
<label class="col-sm-6" for="c2ms5ee8d5115a5bf8_89951994">First Load Limit Ratio</label>
{FGEN:float_entry|name=c2ms5ee8d5115a5bf8_89951994|id=c2ms5ee8d5115a5bf8_89951994|data-type=10|data-position=18|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ee8d513035f98_31787548">
<label class="col-sm-6" for="c2ms5ee8d513035f98_31787548">Property/Contents Deductible Ratio</label>
{FGEN:float_entry|name=c2ms5ee8d513035f98_31787548|id=c2ms5ee8d513035f98_31787548|data-type=10|data-position=19|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ee8d5140d1891_97234334">
<label class="col-sm-6" for="c2ms5ee8d5140d1891_97234334">GL Rate Ratio</label>
{FGEN:float_entry|name=c2ms5ee8d5140d1891_97234334|id=c2ms5ee8d5140d1891_97234334|data-type=10|data-position=20|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5f731cec253c74_72364132">
<label class="col-sm-6" for="c2ms5f731cec253c74_72364132">Property and Contents Sum</label>
{FGEN:c2ms5f731cec253c74_72364132|name=c2ms5f731cec253c74_72364132|id=c2ms5f731cec253c74_72364132|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5eecb78c5a8f24_57585627">
<label class="col-sm-6" for="c2ms5eecb78c5a8f24_57585627">TIV</label>
{FGEN:float_entry|name=c2ms5eecb78c5a8f24_57585627|id=c2ms5eecb78c5a8f24_57585627|data-type=2|data-position=21|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5f96c211cd0578_16329201">
<label class="col-sm-6" for="c2ms5f96c211cd0578_16329201">Blast Zone Value</label>
{FGEN:c2ms5f96c211cd0578_16329201|name=c2ms5f96c211cd0578_16329201|id=c2ms5f96c211cd0578_16329201|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="form-heading custom-hidden">
<h4>MTA Info</h4>
</div>

<div class="required" id="parent-c2ms5efc6c077a9e29_36112647">
<label class="col-sm-6" for="c2ms5efc6c077a9e29_36112647">Removed</label>
{FGEN:yes_no|name=c2ms5efc6c077a9e29_36112647|id=c2ms5efc6c077a9e29_36112647|data-type=1|data-position=22|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms5efc6c0a533a21_51362844">
<label class="col-sm-6" for="c2ms5efc6c0a533a21_51362844">Date of Removal</label>
{FGEN:datepicker|name=c2ms5efc6c0a533a21_51362844|id=c2ms5efc6c0a533a21_51362844|data-type=3|data-position=23|data-location=left|field_id=113|revision_id=1}
</div>

<div class="required" id="parent-c2ms5f58e4ada94e39_25168287">
<label class="col-sm-6" for="c2ms5f58e4ada94e39_25168287">Added</label>
{FGEN:yes_no|name=c2ms5f58e4ada94e39_25168287|id=c2ms5f58e4ada94e39_25168287|data-type=1|data-position=24|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms5f58e4b26c7117_01236602">
<label class="col-sm-6" for="c2ms5f58e4b26c7117_01236602">Date of Addition</label>
{FGEN:datepicker|name=c2ms5f58e4b26c7117_01236602|id=c2ms5f58e4b26c7117_01236602|data-type=3|data-position=25|data-location=left|field_id=113|revision_id=1}
</div>

<div class="required" id="parent-c2ms5f58e4b7510448_36082932">
<label class="col-sm-6" for="c2ms5f58e4b7510448_36082932">Edited</label>
{FGEN:yes_no|name=c2ms5f58e4b7510448_36082932|id=c2ms5f58e4b7510448_36082932|data-type=1|data-position=26|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms5f58e4bb2b28a3_67984554">
<label class="col-sm-6" for="c2ms5f58e4bb2b28a3_67984554">Date of Edit</label>
{FGEN:datepicker|name=c2ms5f58e4bb2b28a3_67984554|id=c2ms5f58e4bb2b28a3_67984554|data-type=3|data-position=27|data-location=left|field_id=113|revision_id=1}
</div>

<div class="required" id="parent-c2ms5f58e4bdf0a7d2_82644870">
<label class="col-sm-6" for="c2ms5f58e4bdf0a7d2_82644870">Is Rated</label>
{FGEN:yes_no|name=c2ms5f58e4bdf0a7d2_82644870|id=c2ms5f58e4bdf0a7d2_82644870|data-type=1|data-position=28|data-location=left|field_id=117|revision_id=1}
</div>

</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 9,
                'date_created' => '2020-06-04 17:31:19',
                'id' => 5,
                'revision_id' => 0,
                'identifier' => '6ff498a3-a678-11ea-b4d4-4a28775f739c',
                'image_url' => NULL,
                'location_id' => 1,
                'num_entries' => 21857,
                'rev_ds_code' => 'ter_07_business_information',
                'rev_ds_description' => '',
                'rev_ds_title' => 'TER_07_Business_Information',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Business Information"}}
{{eavfield "c2ms5df0eb49a59938_57511015" label="What is the occupancy type needed?"}}
{{eavfield "c2ms5df0eb5377b7e2_67238360" label="Coverage Type"}}
{{eavfield "c2ms5df0eb99c86db7_76420188" label="Has the client had a previous threat or hoax?"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Business Information</h4>
</div>

<div class="required" id="parent-c2ms5df0eb49a59938_57511015">
<label class="col-sm-6" for="c2ms5df0eb49a59938_57511015">What is the occupancy type needed?</label>
{FGEN:terror_occupancy_type|name=c2ms5df0eb49a59938_57511015|id=c2ms5df0eb49a59938_57511015|data-type=1|data-position=1|data-location=left|field_id=82|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0eb5377b7e2_67238360">
<label class="col-sm-6" for="c2ms5df0eb5377b7e2_67238360">Coverage Type</label>
{FGEN:terror_coverage_type|name=c2ms5df0eb5377b7e2_67238360|id=c2ms5df0eb5377b7e2_67238360|data-type=1|data-position=2|data-location=left|field_id=83|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0eb99c86db7_76420188">
<label class="col-sm-6" for="c2ms5df0eb99c86db7_76420188">Has the client had a previous threat or hoax?</label>
{FGEN:yes_no|name=c2ms5df0eb99c86db7_76420188|id=c2ms5df0eb99c86db7_76420188|data-type=1|data-position=5|data-location=left|field_id=79|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 10,
                'date_created' => '2020-06-04 17:31:19',
                'id' => 6,
                'revision_id' => 0,
                'identifier' => '6ff564d0-a678-11ea-b4d4-4a28775f739c',
                'image_url' => NULL,
                'location_id' => 1,
                'num_entries' => 21857,
                'rev_ds_code' => 'ter_01_inception_date',
                'rev_ds_description' => '',
                'rev_ds_title' => 'TER_01_Inception_Date',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Inception Date"}}
{{eavfield "c2ms5df0e6f8ea56a7_86075627" label="Inception Date"}}
{{eavfield "c2ms5df0e6f9c63265_50754492" label="Expiry Date"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Inception Date</h4>
</div>

<div class="required" id="parent-c2ms5df0e6f8ea56a7_86075627">
<label class="col-sm-6" for="c2ms5df0e6f8ea56a7_86075627">Inception Date</label>
{FGEN:datepicker|name=c2ms5df0e6f8ea56a7_86075627|id=c2ms5df0e6f8ea56a7_86075627|data-type=3|data-position=1|data-location=left|field_id=76|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0e6f9c63265_50754492">
<label class="col-sm-6" for="c2ms5df0e6f9c63265_50754492">Expiry Date</label>
{FGEN:datepicker|name=c2ms5df0e6f9c63265_50754492|id=c2ms5df0e6f9c63265_50754492|data-type=3|data-position=2|data-location=left|field_id=76|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 11,
                'date_created' => '2020-06-04 17:31:19',
                'id' => 7,
                'revision_id' => 0,
                'identifier' => '6ff5b170-a678-11ea-b4d4-4a28775f739c',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 545,
                'rev_ds_code' => 'ter_05_loss_payee_mi',
                'rev_ds_description' => '',
                'rev_ds_title' => 'TER_05_Loss_Payee_MI',
                'rev_hb' => '<div
class="{{#if instanceCount}}full{{else}}empty{{/if}}"
data-identifier="{{datasetRevisionIdentifier}}"
data-role="multi-placeholder"
data-ds-control="{{control}}"
>

<div class="form-heading custom-hidden mi-header" data-role="mi-header" data-identifier="{{datasetRevisionIdentifier}}">
<div class="left">
<h4>Loss Payee Information
<span class="instance-counter">
(Total: <span data-role="instance-counter" data-identifier="{{datasetRevisionIdentifier}}">{{instanceCount}}</span>)
</span>
</h4>
</div>

<div class="right mi-control mi-add-instance">
<button type="button" data-role="add-instance" data-identifier="{{datasetRevisionIdentifier}}" data-title="Loss Payee Information">Add</button>
</div>

<div class="clear"></div>
</div>

<!-- Form fields with eav dataset identifier and instance count	 -->
{{>multi-mandatory-fields
datasetRevisionIdentifier=datasetRevisionIdentifier
instanceCount=instanceCount
}}


{{#if instanceCount}}
{{#each instances as |instance|}}

<div data-role="instance-wrapper" data-index="{{instance.index}}">
{{>multi-instance-header
title="Loss Payee"
datasetRevisionIdentifier=../datasetRevisionIdentifier
index=instance.index
}}

<!-- Form field that contains persisted instance\'s identifier (form field "ident") -->
<input
type="hidden"
name="c2msmf[{{../datasetRevisionIdentifier}}][{{instance.index}}][ident]"
id="{{../datasetRevisionIdentifier}}_ident_{{instance.index}}"
data-template-name="c2msmf[{{../datasetRevisionIdentifier}}][\\{{index}}][ident]"
data-template-id="{{../datasetRevisionIdentifier}}_ident_\\{{index}}"
value="{{instance.ident}}"
/>

{{>terror-loss-payee-mi-fields dataset=../dataset fieldCollection=../fieldCollection instance=instance index=instance.index}}

<!-- Footer -->
{{>multi-instance-footer
datasetRevisionIdentifier=../datasetRevisionIdentifier
index=instance.index
title="Loss Payee Information"
}}
</div>
{{/each}}

{{ else }}
<p class="mi-empty">There\'s no Loss Payee Information specified</p>
{{/if}}


<!-- Template for adding additional instance on the frontend -->
<script type="text/x-handlebars" data-identifier="{{datasetRevisionIdentifier}}" data-role="multi-template">
<div data-role="instance-wrapper" data-index="\\{{index}}">

<div class="form-heading custom-hidden mi-instance-header">
<div class="left mi-instance-label">
<h4 data-template-html="Insured Information: \\{{index}}">Loss Payee Information: \\{{index}}</h4>
</div>
<div class="right mi-control mi-remove-instance">
<button
class="right"
type="button"
data-role="remove-instance"
data-identifier="{{datasetRevisionIdentifier}}"
data-index="\\{{index}}"
data-title="Insured Information"
data-template-html="Remove Loss Payee Information (Num: \\{{index}})"
>Remove Loss Payee Information (Num: \\{{index}})</button>
</div>
<div class="clear"></div>
</div>

{{>terror-loss-payee-mi-fields dataset=dataset fieldCollection=fieldCollection}}

<input
type="hidden"
name="c2msmf[{{datasetRevisionIdentifier}}][\\{{index}}][ident]"
id="{{datasetRevisionIdentifier}}_ident_\\{{index}}"
data-template-name="c2msmf[{{datasetRevisionIdentifier}}][\\{{index}}][ident]"
data-template-id="{{datasetRevisionIdentifier}}_ident_\\{{index}}"
value=""
/>


<div class="form-heading custom-hidden mi-instance-footer">
<div class="right mi-control mi-remove-instance">
<button
class="right"
type="button"
data-role="remove-instance"
data-identifier="{{datasetRevisionIdentifier}}"
data-index="\\{{index}}"
data-title="Loss Payee Information"
data-template-html="Remove Loss Payee Information (Num: \\{{index}})"
>Remove Loss Payee Information (Num: \\{{index}})</button>
</div>
<div class="clear"></div>
</div>
</div>
</script>
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-multi-box">

<div class="form-heading custom-hidden">
<h4>Loss Payee Information: {COUNT}</h4>
</div>

<div class="required" id="parent-c2ms5df0ea6cf27b12_79776833">
<label class="col-sm-6" for="c2ms5df0ea6cf27b12_79776833">Loss Payee Name</label>
{FGEN:text|name=c2ms5df0ea6cf27b12_79776833|id=c2ms5df0ea6cf27b12_79776833|data-type=5|data-position=1|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0ea6e2ce225_78532082">
<label class="col-sm-6" for="c2ms5df0ea6e2ce225_78532082">Address Line 1</label>
{FGEN:text|name=c2ms5df0ea6e2ce225_78532082|id=c2ms5df0ea6e2ce225_78532082|data-type=5|data-position=4|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5f9c168345e296_01691820">
<label class="col-sm-6" for="c2ms5f9c168345e296_01691820">Address Line 3</label>
{FGEN:c2ms5f9c168345e296_01691820|name=c2ms5f9c168345e296_01691820|id=c2ms5f9c168345e296_01691820|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0ea6f23b754_91000599">
<label class="col-sm-6" for="c2ms5df0ea6f23b754_91000599">Address Line 2</label>
{FGEN:text|name=c2ms5df0ea6f23b754_91000599|id=c2ms5df0ea6f23b754_91000599|data-type=5|data-position=5|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0ea6f7722b9_10952679">
<label class="col-sm-6" for="c2ms5df0ea6f7722b9_10952679">Zip</label>
{FGEN:text|name=c2ms5df0ea6f7722b9_10952679|id=c2ms5df0ea6f7722b9_10952679|data-type=5|data-position=8|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0ea70899a68_86816911">
<label class="col-sm-6" for="c2ms5df0ea70899a68_86816911">Town/City</label>
{FGEN:text|name=c2ms5df0ea70899a68_86816911|id=c2ms5df0ea70899a68_86816911|data-type=5|data-position=6|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0ea8647ac56_24998190">
<label class="col-sm-6" for="c2ms5df0ea8647ac56_24998190">Country</label>
{FGEN:country|name=c2ms5df0ea8647ac56_24998190|id=c2ms5df0ea8647ac56_24998190|data-type=1|data-position=9|data-location=left|field_id=75|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ed78d09d2b070_61800311">
<label class="col-sm-6" for="c2ms5ed78d09d2b070_61800311">Effective Date</label>
{FGEN:datepicker|name=c2ms5ed78d09d2b070_61800311|id=c2ms5ed78d09d2b070_61800311|data-type=3|data-position=2|data-location=left|field_id=76|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ed78d12e23a35_51193257">
<label class="col-sm-6" for="c2ms5ed78d12e23a35_51193257">Full Address Geocode Data</label>
{FGEN:textarea|name=c2ms5ed78d12e23a35_51193257|id=c2ms5ed78d12e23a35_51193257|data-type=4|data-position=3|data-location=left|field_id=77|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ed78d309f5879_99257306">
<label class="col-sm-6" for="c2ms5ed78d309f5879_99257306">State</label>
{FGEN:usa_states_main|name=c2ms5ed78d309f5879_99257306|id=c2ms5ed78d309f5879_99257306|data-type=5|data-position=7|data-location=left|field_id=78|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ed78d415048d4_54921435">
<label class="col-sm-6" for="c2ms5ed78d415048d4_54921435">Latitude</label>
{FGEN:text|name=c2ms5ed78d415048d4_54921435|id=c2ms5ed78d415048d4_54921435|data-type=5|data-position=10|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ed78d41cba8d1_71567618">
<label class="col-sm-6" for="c2ms5ed78d41cba8d1_71567618">Longitude</label>
{FGEN:text|name=c2ms5ed78d41cba8d1_71567618|id=c2ms5ed78d41cba8d1_71567618|data-type=5|data-position=11|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5efc6c7b3ae056_71600594">
<label class="col-sm-6" for="c2ms5efc6c7b3ae056_71600594">Removed</label>
{FGEN:c2ms5efc6c7b3ae056_71600594|name=c2ms5efc6c7b3ae056_71600594|id=c2ms5efc6c7b3ae056_71600594|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms5efc6c7e73beb3_39344096">
<label class="col-sm-6" for="c2ms5efc6c7e73beb3_39344096">Date of Removal</label>
{FGEN:c2ms5efc6c7e73beb3_39344096|name=c2ms5efc6c7e73beb3_39344096|id=c2ms5efc6c7e73beb3_39344096|data-type=3|data-position=bottom|data-location=left|field_id=113|revision_id=1}
</div>

</div>

</div>
',
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 12,
                'date_created' => '2020-06-04 17:31:19',
                'id' => 8,
                'identifier' => '6ff63053-a678-11ea-b4d4-4a28775f739c',
                'image_url' => NULL,
                'location_id' => 1,
                'num_entries' => 21857,
                'rev_ds_code' => 'ter_12_add_cover_general_liability',
                'rev_ds_description' => '',
                'rev_ds_title' => 'TER_12_Add_Cover_General_Liability',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Additional Cover - General Liability"}}
{{eavfield "c2ms5e2ef9dfce0e25_01205702" label="General Liability"}}
{{eavfield "c2ms5e2f01116778a7_28810728" label="What kind of GL cover do you need?"}}
{{eavfield "c2ms5df0ee40de7118_84576543" label="What are the revenues?"}}
{{eavfield "c2ms5df0ee45860b40_58608354" label="What is the total number of employees?"}}
{{eavfield "c2ms5df0ee47d60e55_98523779" label="What is the GL limit required?"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Additional Cover - General Liability</h4>
</div>

<div class="required" id="parent-c2ms5e2ef9dfce0e25_01205702">
<label class="col-sm-6" for="c2ms5e2ef9dfce0e25_01205702">General Liability</label>
{FGEN:checkbox_agree|name=c2ms5e2ef9dfce0e25_01205702|id=c2ms5e2ef9dfce0e25_01205702|data-type=1|data-position=4|data-location=left|field_id=85|revision_id=1}
</div>

<div class="required" id="parent-c2ms5e2f01116778a7_28810728">
<label class="col-sm-6" for="c2ms5e2f01116778a7_28810728">What kind of GL cover do you need?</label>
{FGEN:GL_radio|name=c2ms5e2f01116778a7_28810728|id=c2ms5e2f01116778a7_28810728|data-type=1|data-position=5|data-location=left|field_id=86|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0ee40de7118_84576543">
<label class="col-sm-6" for="c2ms5df0ee40de7118_84576543">What are the revenues?</label>
{FGEN:float_entry|name=c2ms5df0ee40de7118_84576543|id=c2ms5df0ee40de7118_84576543|data-type=2|data-position=1|data-location=left|field_id=81|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0ee45860b40_58608354">
<label class="col-sm-6" for="c2ms5df0ee45860b40_58608354">What is the total number of employees?</label>
{FGEN:Integer|name=c2ms5df0ee45860b40_58608354|id=c2ms5df0ee45860b40_58608354|data-type=1|data-position=2|data-location=left|field_id=84|revision_id=1}
</div>

<div class="required" id="parent-c2ms5df0ee47d60e55_98523779">
<label class="col-sm-6" for="c2ms5df0ee47d60e55_98523779">What is the GL limit required?</label>
{FGEN:float_entry|name=c2ms5df0ee47d60e55_98523779|id=c2ms5df0ee47d60e55_98523779|data-type=2|data-position=3|data-location=left|field_id=81|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 13,
                'date_created' => '2020-06-04 17:31:19',
                'id' => 9,
                'identifier' => '6ff679ec-a678-11ea-b4d4-4a28775f739c',
                'image_url' => NULL,
                'location_id' => 1,
                'num_entries' => 21857,
                'rev_ds_code' => 'ter_02_target_price',
                'rev_ds_description' => '',
                'rev_ds_title' => 'TER_02_Target_Price',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Target Price"}}
{{eavfield "c2ms5e2af58fac4cb3_49202098" label="Do you wish to set a target price?"}}
{{eavfield "c2ms5e2829e99d5137_98574536" label="What is the required target price?"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Target Price</h4>
</div>

<div class="required" id="parent-c2ms5e2af58fac4cb3_49202098">
<label class="col-sm-6" for="c2ms5e2af58fac4cb3_49202098">Do you wish to set a target price?</label>
{FGEN:c2ms5e2af58fac4cb3_49202098|name=c2ms5e2af58fac4cb3_49202098|id=c2ms5e2af58fac4cb3_49202098|data-type=1|data-position=bottom|data-location=left|field_id=79|revision_id=1}
</div>

<div class="required" id="parent-c2ms5e2829e99d5137_98574536">
<label class="col-sm-6" for="c2ms5e2829e99d5137_98574536">What is the required target price?</label>
{FGEN:float_entry|name=c2ms5e2829e99d5137_98574536|id=c2ms5e2829e99d5137_98574536|data-type=2|data-position=1|data-location=left|field_id=81|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 14,
                'date_created' => '2020-06-04 17:31:19',
                'id' => 10,
                'identifier' => '6ff6b47c-a678-11ea-b4d4-4a28775f739c',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 21857,
                'rev_ds_code' => 'ter_08_financial_information',
                'rev_ds_description' => '',
                'rev_ds_title' => 'TER_08_Financial_Information',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Financial Information"}}
{{eavfield "c2ms5e2af4748c7528_83407843" label="Any previous losses?"}}
{{eavfield "c2ms5e2af4b749db17_18876168" label="What is the total sum of the loss?"}}
{{eavfield "c2ms5e2ef4976f7658_43529027" label="What is the limit required?"}}
{{eavfield "c2ms5e2ef4982f9aa1_21936330" label="What is the deductible required?"}}
{{eavfield "c2ms5f689f42d07da3_84818031" label="Do you require a first loss limit?"}}
{{eavfield "c2ms5e2ef498d2f712_85796763" label="What is the first loss limit?"}}
{{>ds-subtitle subtitle="TIV Constituents Sums - Underwriting"}}
{{eavfield "c2ms60ed5d7b239185_38825880" label="Contents Sum"}}
{{eavfield "c2ms60ed5d7c1a2472_44378408" label="Property Sum"}}
{{eavfield "c2ms60ed5d7d127885_92738532" label="Business Interruption Sum"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Financial Information</h4>
</div>

<div class="required" id="parent-c2ms5e2af4748c7528_83407843">
<label class="col-sm-6" for="c2ms5e2af4748c7528_83407843">Any previous losses?</label>
{FGEN:TER_no_losses|name=c2ms5e2af4748c7528_83407843|id=c2ms5e2af4748c7528_83407843|data-type=1|data-position=1|data-location=left|field_id=131|revision_id=1}
</div>

<div class="required" id="parent-c2ms5e2af4b749db17_18876168">
<label class="col-sm-6" for="c2ms5e2af4b749db17_18876168">What is the total sum of the loss?</label>
{FGEN:float_entry|name=c2ms5e2af4b749db17_18876168|id=c2ms5e2af4b749db17_18876168|data-type=2|data-position=2|data-location=left|field_id=81|revision_id=1}
</div>

<div class="required" id="parent-c2ms5e2ef4976f7658_43529027">
<label class="col-sm-6" for="c2ms5e2ef4976f7658_43529027">What is the limit required?</label>
{FGEN:float_entry|name=c2ms5e2ef4976f7658_43529027|id=c2ms5e2ef4976f7658_43529027|data-type=2|data-position=3|data-location=left|field_id=81|revision_id=1}
</div>

<div class="required" id="parent-c2ms5e2ef4982f9aa1_21936330">
<label class="col-sm-6" for="c2ms5e2ef4982f9aa1_21936330">What is the deductible required?</label>
{FGEN:float_entry|name=c2ms5e2ef4982f9aa1_21936330|id=c2ms5e2ef4982f9aa1_21936330|data-type=2|data-position=4|data-location=left|field_id=81|revision_id=1}
</div>

<div class="required" id="parent-c2ms5f689f42d07da3_84818031">
<label class="col-sm-6" for="c2ms5f689f42d07da3_84818031">Do you require a first loss limit?</label>
{FGEN:c2ms5f689f42d07da3_84818031|name=c2ms5f689f42d07da3_84818031|id=c2ms5f689f42d07da3_84818031|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms5e2ef498d2f712_85796763">
<label class="col-sm-6" for="c2ms5e2ef498d2f712_85796763">What is the first loss limit?</label>
{FGEN:float_entry|name=c2ms5e2ef498d2f712_85796763|id=c2ms5e2ef498d2f712_85796763|data-type=2|data-position=5|data-location=left|field_id=81|revision_id=1}
</div>

<div class="form-heading custom-hidden">
<h4>TIV Constituents Sums - Underwriting</h4>
</div>

<div class="required" id="parent-c2ms60ed5d7b239185_38825880">
<label class="col-sm-6" for="c2ms60ed5d7b239185_38825880">Contents Sum</label>
{FGEN:c2ms60ed5d7b239185_38825880|name=c2ms60ed5d7b239185_38825880|id=c2ms60ed5d7b239185_38825880|data-type=10|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms60ed5d7c1a2472_44378408">
<label class="col-sm-6" for="c2ms60ed5d7c1a2472_44378408">Property Sum</label>
{FGEN:c2ms60ed5d7c1a2472_44378408|name=c2ms60ed5d7c1a2472_44378408|id=c2ms60ed5d7c1a2472_44378408|data-type=10|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms60ed5d7d127885_92738532">
<label class="col-sm-6" for="c2ms60ed5d7d127885_92738532">Business Interruption SUM</label>
{FGEN:c2ms60ed5d7d127885_92738532|name=c2ms60ed5d7d127885_92738532|id=c2ms60ed5d7d127885_92738532|data-type=10|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

</div>',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 15,
                'date_created' => '2020-06-04 17:31:19',
                'id' => 11,
                'identifier' => '6ff6ff92-a678-11ea-b4d4-4a28775f739c',
                'image_url' => NULL,
                'location_id' => 1,
                'num_entries' => 21857,
                'rev_ds_code' => '11_terror_first_loss_limit',
                'rev_ds_description' => '',
                'rev_ds_title' => '11_terror_first_loss_limit',
                'rev_hb' => '',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>First Loss Limit</h4>
</div>

<div class="required" id="parent-c2ms5e2af74d3a06a1_01821749">
<label class="col-sm-6" for="c2ms5e2af74d3a06a1_01821749">First Loss Limit</label>
{FGEN:c2ms5e2af74d3a06a1_01821749|name=c2ms5e2af74d3a06a1_01821749|id=c2ms5e2af74d3a06a1_01821749|data-type=2|data-position=bottom|data-location=left|field_id=81|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 16,
                'date_created' => '2020-06-04 17:31:19',
                'id' => 12,
                'identifier' => '6ff7339c-a678-11ea-b4d4-4a28775f739c',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 21857,
                'rev_ds_code' => 'ter_13_add_cover_active_assailant',
                'rev_ds_description' => '',
                'rev_ds_title' => 'TER_13_Add_Cover_Active_Assailant',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Additional Cover - Active Assailant"}}
{{eavfield "c2ms5e2f01d78dc200_54912352" label="Active Assailant"}}
{{eavfield "c2ms5e2b162f6e4490_46740176" label="Is active assailant cover required?"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Additional Cover - Active Assailant</h4>
</div>

<div class="required" id="parent-c2ms5e2f01d78dc200_54912352">
<label class="col-sm-6" for="c2ms5e2f01d78dc200_54912352">Active Assailant</label>
{FGEN:checkbox_agree|name=c2ms5e2f01d78dc200_54912352|id=c2ms5e2f01d78dc200_54912352|data-type=1|data-position=2|data-location=left|field_id=85|revision_id=1}
</div>

<div class="required" id="parent-c2ms5e2b162f6e4490_46740176">
<label class="col-sm-6" for="c2ms5e2b162f6e4490_46740176">Is active assailant cover required?</label>
{FGEN:checkbox_agree|name=c2ms5e2b162f6e4490_46740176|id=c2ms5e2b162f6e4490_46740176|data-type=1|data-position=1|data-location=left|field_id=85|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 17,
                'date_created' => '2020-06-04 17:31:19',
                'id' => 13,
                'identifier' => '6ff76e59-a678-11ea-b4d4-4a28775f739c',
                'image_url' => NULL,
                'location_id' => 1,
                'num_entries' => 21857,
                'rev_ds_code' => 'ter_14_add_cover_denial_of_access',
                'rev_ds_description' => '',
                'rev_ds_title' => 'TER_14_Add_Cover_Denial_of_Access',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Additional Cover - Denial of Access"}}
{{eavfield "c2ms5e2f01a1396128_63676024" label="Denial of Access"}}
{{eavfield "c2ms5e2b18533102c5_78649702" label="Select the denial of access radius (miles)"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Additional Cover - Denial of Access</h4>
</div>

<div class="required" id="parent-c2ms5e2f01a1396128_63676024">
<label class="col-sm-6" for="c2ms5e2f01a1396128_63676024">Denial of Access</label>
{FGEN:c2ms5e2f01a1396128_63676024|name=c2ms5e2f01a1396128_63676024|id=c2ms5e2f01a1396128_63676024|data-type=1|data-position=bottom|data-location=left|field_id=85|revision_id=1}
</div>

<div class="required" id="parent-c2ms5e2b18533102c5_78649702">
<label class="col-sm-6" for="c2ms5e2b18533102c5_78649702">Select the denial of access radius (miles)</label>
{FGEN:terror_denial_of_access|name=c2ms5e2b18533102c5_78649702|id=c2ms5e2b18533102c5_78649702|data-type=1|data-position=1|data-location=left|field_id=88|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 18,
                'date_created' => '2020-06-04 17:31:19',
                'id' => 14,
                'identifier' => '6ff7a910-a678-11ea-b4d4-4a28775f739c',
                'image_url' => NULL,
                'location_id' => 1,
                'num_entries' => 21857,
                'rev_ds_code' => 'ter_09_overlying_policy_details',
                'rev_ds_description' => '',
                'rev_ds_title' => 'TER_09_Overlying_Policy_Details',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Overlying Policy Details"}}
{{eavfield "c2ms5ed77c747837c5_94070913" label="Do you wish to add overlying policy details now?"}}
{{eavfield "c2ms5ed77c4ca65417_70146892" label="Overlying insurer"}}
{{eavfield "c2ms5ed77c4d4aff99_10151573" label="Overlying policy reference"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Overlying Policy Details</h4>
</div>

<div class="required" id="parent-c2ms5ed77c747837c5_94070913">
<label class="col-sm-6" for="c2ms5ed77c747837c5_94070913">Do you wish to add overlying policy details now?</label>
{FGEN:c2ms5ed77c747837c5_94070913|name=c2ms5ed77c747837c5_94070913|id=c2ms5ed77c747837c5_94070913|data-type=1|data-position=bottom|data-location=left|field_id=79|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ed77c4ca65417_70146892">
<label class="col-sm-6" for="c2ms5ed77c4ca65417_70146892">Overlying insurer</label>
{FGEN:c2ms5ed77c4ca65417_70146892|name=c2ms5ed77c4ca65417_70146892|id=c2ms5ed77c4ca65417_70146892|data-type=5|data-position=bottom|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ed77c4d4aff99_10151573">
<label class="col-sm-6" for="c2ms5ed77c4d4aff99_10151573">Overlying policy reference</label>
{FGEN:c2ms5ed77c4d4aff99_10151573|name=c2ms5ed77c4d4aff99_10151573|id=c2ms5ed77c4d4aff99_10151573|data-type=5|data-position=bottom|data-location=left|field_id=74|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 19,
                'date_created' => '2020-06-04 17:31:19',
                'id' => 15,
                'identifier' => '6ff7e97e-a678-11ea-b4d4-4a28775f739c',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 21857,
                'rev_ds_code' => 'ter_15_confirmation',
                'rev_ds_description' => '',
                'rev_ds_title' => 'TER_15_Confirmation',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Confirmation"}}
{{eavfield "c2ms5ed77d1e694139_66235721" label="I confirm that all information entered is correct to the best of my knowledge."}}
{{eavfield "c2ms5ed77d1ef3d856_20841847" label="Trigger automatic referral for policy"}}
{{eavfield "c2ms600aa00faabca7_15463501" label="Warranted no known or reported losses as at today\'s date."}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Confirmation</h4>
</div>

<div class="required" id="parent-c2ms5ed77d1e694139_66235721">
<label class="col-sm-6" for="c2ms5ed77d1e694139_66235721">I confirm that all information entered is correct to the best of my knowledge.</label>
{FGEN:c2ms5ed77d1e694139_66235721|name=c2ms5ed77d1e694139_66235721|id=c2ms5ed77d1e694139_66235721|data-type=1|data-position=bottom|data-location=left|field_id=85|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ed77d1ef3d856_20841847">
<label class="col-sm-6" for="c2ms5ed77d1ef3d856_20841847">Trigger automatic referral for policy</label>
{FGEN:c2ms5ed77d1ef3d856_20841847|name=c2ms5ed77d1ef3d856_20841847|id=c2ms5ed77d1ef3d856_20841847|data-type=1|data-position=bottom|data-location=left|field_id=85|revision_id=1}
</div>

<div class="required" id="parent-c2ms600aa00faabca7_15463501">
<label class="col-sm-6" for="c2ms600aa00faabca7_15463501">Warranted no known or reported losses as at today\'s date.</label>
{FGEN:c2ms600aa00faabca7_15463501|name=c2ms600aa00faabca7_15463501|id=c2ms600aa00faabca7_15463501|data-type=1|data-position=bottom|data-location=left|field_id=123|revision_id=1}
</div>

</div>


',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 20,
                'date_created' => '2020-06-04 17:31:19',
                'id' => 16,
                'identifier' => '6ff8a18a-a678-11ea-b4d4-4a28775f739c',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 21857,
                'rev_ds_code' => 'ter_10_location_details',
                'rev_ds_description' => '',
                'rev_ds_title' => 'TER_10_Location_Details',
                'rev_hb' => '<div id="ds-column-left">
{{!>ds-subtitle subtitle="Location Details"}}
{{eavfield "c2ms5ed7818ac4c597_54878132" label="No. of Locations" template="hidden-default"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Location Details</h4>
</div>

<div class="required" id="parent-c2ms5ed7818ac4c597_54878132">
<label class="col-sm-6" for="c2ms5ed7818ac4c597_54878132">No. of Locations</label>
{FGEN:c2ms5ed7818ac4c597_54878132|name=c2ms5ed7818ac4c597_54878132|id=c2ms5ed7818ac4c597_54878132|data-type=1|data-position=bottom|data-location=left|field_id=84|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 21,
                'date_created' => '2020-06-04 17:32:07',
                'id' => 17,
                'identifier' => '8cf6ce9b-a678-11ea-b4d4-4a28775f739c',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 3254,
                'rev_ds_code' => 'dbbv2_04_policy_holder_details',
                'rev_ds_description' => '',
                'rev_ds_title' => 'DBBv2_04_Policy_Holder_Details',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Policy Holder Details"}}
{{eavfield "c2ms5ebd5dfc4d1a16_24647616" label="Named Insured"}}
{{eavfield "c2ms5ebd5e0603f5e3_78809544" label="Full Address Geocode Data"}}
{{eavfield "c2ms5ebd5e428a4ba6_81216542" label="Address Line 1"}}
{{eavfield "c2ms5ebd5e4326d4b2_95353457" label="Address Line 2"}}
{{eavfield "c2ms5fd0c0603474d8_08234628" label="Address Line 3"}}
{{eavfield "c2ms5ebd5e4ccca1c9_08815200" label="Town/City"}}
{{eavfield "c2ms5ebd5e5901bc88_30685462" label="State"}}
{{eavfield "c2ms5ebd5e629c9cf6_30914618" label="Zip"}}
{{eavfield "c2ms5ebd5e6c525407_42773329" label="Country"}}
{{eavfield "c2ms5ebd5e74444637_63346805" label="Latitude"}}
{{eavfield "c2ms5ebd5e74e15944_00531895" label="Longitude"}}
{{eavfield "c2ms60dc570fede101_11836517" label="Policyholder Address Identifier"}}
{{eavfield "c2ms60dc571093d8d5_63652991" label="Policyholder Duplication Check"}}
{{>ds-subtitle subtitle="Bespoke Endorsement"}}
{{eavfield "c2ms5ebd5e9fbc92b8_49707233" label="Bespoke Endorsement"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Policy Holder Details</h4>
</div>

<div class="required" id="parent-c2ms5ebd5dfc4d1a16_24647616">
<label class="col-sm-6" for="c2ms5ebd5dfc4d1a16_24647616">Named Insured</label>
{FGEN:c2ms5ebd5dfc4d1a16_24647616|name=c2ms5ebd5dfc4d1a16_24647616|id=c2ms5ebd5dfc4d1a16_24647616|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebd5e0603f5e3_78809544">
<label class="col-sm-6" for="c2ms5ebd5e0603f5e3_78809544">Full Address Geocode Data</label>
{FGEN:c2ms5ebd5e0603f5e3_78809544|name=c2ms5ebd5e0603f5e3_78809544|id=c2ms5ebd5e0603f5e3_78809544|data-type=4|data-position=bottom|data-location=left|field_id=91|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebd5e428a4ba6_81216542">
<label class="col-sm-6" for="c2ms5ebd5e428a4ba6_81216542">Address Line 1</label>
{FGEN:c2ms5ebd5e428a4ba6_81216542|name=c2ms5ebd5e428a4ba6_81216542|id=c2ms5ebd5e428a4ba6_81216542|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebd5e4326d4b2_95353457">
<label class="col-sm-6" for="c2ms5ebd5e4326d4b2_95353457">Address Line 2</label>
{FGEN:c2ms5ebd5e4326d4b2_95353457|name=c2ms5ebd5e4326d4b2_95353457|id=c2ms5ebd5e4326d4b2_95353457|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5fd0c0603474d8_08234628">
<label class="col-sm-6" for="c2ms5fd0c0603474d8_08234628">Address Line 3</label>
{FGEN:c2ms5fd0c0603474d8_08234628|name=c2ms5fd0c0603474d8_08234628|id=c2ms5fd0c0603474d8_08234628|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebd5e4ccca1c9_08815200">
<label class="col-sm-6" for="c2ms5ebd5e4ccca1c9_08815200">Town/City</label>
{FGEN:c2ms5ebd5e4ccca1c9_08815200|name=c2ms5ebd5e4ccca1c9_08815200|id=c2ms5ebd5e4ccca1c9_08815200|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebd5e5901bc88_30685462">
<label class="col-sm-6" for="c2ms5ebd5e5901bc88_30685462">State</label>
{FGEN:c2ms5ebd5e5901bc88_30685462|name=c2ms5ebd5e5901bc88_30685462|id=c2ms5ebd5e5901bc88_30685462|data-type=5|data-position=bottom|data-location=left|field_id=92|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebd5e629c9cf6_30914618">
<label class="col-sm-6" for="c2ms5ebd5e629c9cf6_30914618">Zip</label>
{FGEN:c2ms5ebd5e629c9cf6_30914618|name=c2ms5ebd5e629c9cf6_30914618|id=c2ms5ebd5e629c9cf6_30914618|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebd5e6c525407_42773329">
<label class="col-sm-6" for="c2ms5ebd5e6c525407_42773329">Country</label>
{FGEN:c2ms5ebd5e6c525407_42773329|name=c2ms5ebd5e6c525407_42773329|id=c2ms5ebd5e6c525407_42773329|data-type=1|data-position=bottom|data-location=left|field_id=94|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebd5e74444637_63346805">
<label class="col-sm-6" for="c2ms5ebd5e74444637_63346805">Latitude</label>
{FGEN:c2ms5ebd5e74444637_63346805|name=c2ms5ebd5e74444637_63346805|id=c2ms5ebd5e74444637_63346805|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebd5e74e15944_00531895">
<label class="col-sm-6" for="c2ms5ebd5e74e15944_00531895">Longitude</label>
{FGEN:c2ms5ebd5e74e15944_00531895|name=c2ms5ebd5e74e15944_00531895|id=c2ms5ebd5e74e15944_00531895|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

<div class="form-heading custom-hidden">
<h4>Bespoke Endorsement</h4>
</div>

<div class="required" id="parent-c2ms5ebd5e9fbc92b8_49707233">
<label class="col-sm-6" for="c2ms5ebd5e9fbc92b8_49707233">Bespoke Endorsement</label>
{FGEN:c2ms5ebd5e9fbc92b8_49707233|name=c2ms5ebd5e9fbc92b8_49707233|id=c2ms5ebd5e9fbc92b8_49707233|data-type=4|data-position=bottom|data-location=left|field_id=91|revision_id=1}
</div>

</div>',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 22,
                'date_created' => '2020-06-04 17:32:07',
                'id' => 18,
                'identifier' => '8cf78673-a678-11ea-b4d4-4a28775f739c',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 3254,
                'rev_ds_code' => 'dbbv2_02_inception_date',
                'rev_ds_description' => '',
                'rev_ds_title' => 'DBBv2_02_Inception_Date',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Inception Date"}}
{{eavfield "c2ms5ebd5b6405cee1_70902709" label="Inception Date"}}
{{eavfield "c2ms5ebd5b64b771a4_82256694" label="Expiry Date"}}
{{eavfield "c2ms5fae925c9505b4_46897859" label="Cover Period"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Inception Date</h4>
</div>

<div class="required" id="parent-c2ms5ebd5b6405cee1_70902709">
<label class="col-sm-6" for="c2ms5ebd5b6405cee1_70902709">Inception Date</label>
{FGEN:datepicker|name=c2ms5ebd5b6405cee1_70902709|id=c2ms5ebd5b6405cee1_70902709|data-type=3|data-position=1|data-location=left|field_id=96|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebd5b64b771a4_82256694">
<label class="col-sm-6" for="c2ms5ebd5b64b771a4_82256694">Expiry Date</label>
{FGEN:datepicker|name=c2ms5ebd5b64b771a4_82256694|id=c2ms5ebd5b64b771a4_82256694|data-type=3|data-position=2|data-location=left|field_id=96|revision_id=1}
</div>

<div class="required" id="parent-c2ms5fae925c9505b4_46897859">
<label class="col-sm-6" for="c2ms5fae925c9505b4_46897859">Cover Period</label>
{FGEN:c2ms5fae925c9505b4_46897859|name=c2ms5fae925c9505b4_46897859|id=c2ms5fae925c9505b4_46897859|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 23,
                'date_created' => '2020-06-04 17:32:07',
                'id' => 19,
                'identifier' => '8cf7c3f6-a678-11ea-b4d4-4a28775f739c',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 233,
                'rev_ds_code' => 'dbbv2_06_loss_payees_mi',
                'rev_ds_description' => '',
                'rev_ds_title' => 'DBBv2_06_Loss_Payees_MI',
                'rev_hb' => '<div
class="{{#if instanceCount}}full{{else}}empty{{/if}}"
data-identifier="{{datasetRevisionIdentifier}}"
data-role="multi-placeholder"
data-ds-control="{{control}}"
>

<div class="form-heading custom-hidden mi-header" data-role="mi-header" data-identifier="{{datasetRevisionIdentifier}}">
<div class="left">
<h4>Loss Payee Information
<span class="instance-counter">
(Total: <span data-role="instance-counter" data-identifier="{{datasetRevisionIdentifier}}">{{instanceCount}}</span>)
</span>
</h4>
</div>

<div class="right mi-control mi-add-instance">
<button type="button" data-role="add-instance" data-identifier="{{datasetRevisionIdentifier}}" data-title="Loss Payee Information">Add</button>
</div>

<div class="clear"></div>
</div>



<!-- Form fields with eav dataset identifier and instance count	 -->
{{>multi-mandatory-fields
datasetRevisionIdentifier=datasetRevisionIdentifier
instanceCount=instanceCount
}}

{{#if instanceCount}}
{{#each instances as |instance|}}

<div data-role="instance-wrapper" data-index="{{instance.index}}">
{{>multi-instance-header
title="Loss Payees"
datasetRevisionIdentifier=../datasetRevisionIdentifier
index=instance.index
}}

<!-- Form field that contains persisted instance\'s identifier (form field "ident") -->
<input
type="hidden"
name="c2msmf[{{../datasetRevisionIdentifier}}][{{instance.index}}][ident]"
id="{{../datasetRevisionIdentifier}}_ident_{{instance.index}}"
data-template-name="c2msmf[{{../datasetRevisionIdentifier}}][\\{{index}}][ident]"
data-template-id="{{../datasetRevisionIdentifier}}_ident_\\{{index}}"
value="{{instance.ident}}"
/>

{{>multi-instance-fields-dbb-loss-payees dataset=../dataset fieldCollection=../fieldCollection instance=instance index=instance.index}}

<!-- Footer -->
{{>multi-instance-footer
datasetRevisionIdentifier=../datasetRevisionIdentifier
index=instance.index
title="Loss Payees Information"
}}
</div>
{{/each}}

{{ else }}
<p class="mi-empty">There\'s no Loss Payee Information specified</p>
{{/if}}


<!-- Template for adding additional instance on the frontend -->
<script type="text/x-handlebars" data-identifier="{{datasetRevisionIdentifier}}" data-role="multi-template">
<div data-role="instance-wrapper" data-index="\\{{index}}">

<div class="form-heading custom-hidden mi-instance-header">
<div class="left mi-instance-label">
<h4 data-template-html="Loss Payees Information: \\{{index}}">Loss Payees Information: \\{{index}}</h4>
</div>
<div class="right mi-control mi-remove-instance">
<button
class="right"
type="button"
data-role="remove-instance"
data-identifier="{{datasetRevisionIdentifier}}"
data-index="\\{{index}}"
data-title="Loss Payees Information"
data-template-html="Remove Loss Payees Information (Num: \\{{index}})"
>Remove Loss Payees Information (Num: \\{{index}})</button>
</div>
<div class="clear"></div>
</div>

{{>multi-instance-fields-dbb-loss-payees dataset=dataset fieldCollection=fieldCollection}}


<input
type="hidden"
name="c2msmf[{{datasetRevisionIdentifier}}][\\{{index}}][ident]"
id="{{datasetRevisionIdentifier}}_ident_\\{{index}}"
data-template-name="c2msmf[{{datasetRevisionIdentifier}}][\\{{index}}][ident]"
data-template-id="{{datasetRevisionIdentifier}}_ident_\\{{index}}"
value=""
/>


<div class="form-heading custom-hidden mi-instance-footer">
<div class="right mi-control mi-remove-instance">
<button
class="right"
type="button"
data-role="remove-instance"
data-identifier="{{datasetRevisionIdentifier}}"
data-index="\\{{index}}"
data-title="Loss Payees Information"
data-template-html="Remove Loss Payees Information (Num: \\{{index}})"
>Remove Loss Payees Information (Num: \\{{index}})</button>
</div>
<div class="clear"></div>
</div>
</div>
</script>
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-multi-box">

<div class="form-heading custom-hidden">
<h4>Loss Payee Information: {COUNT}</h4>
</div>

<div class="required" id="parent-c2ms5ebe74d7b43120_44558787">
<label class="col-sm-6" for="c2ms5ebe74d7b43120_44558787">Loss Payee Name</label>
{FGEN:c2ms5ebe74d7b43120_44558787|name=c2ms5ebe74d7b43120_44558787|id=c2ms5ebe74d7b43120_44558787|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe74e52b4200_94627566">
<label class="col-sm-6" for="c2ms5ebe74e52b4200_94627566">Effective Date</label>
{FGEN:c2ms5ebe74e52b4200_94627566|name=c2ms5ebe74e52b4200_94627566|id=c2ms5ebe74e52b4200_94627566|data-type=3|data-position=bottom|data-location=left|field_id=96|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe74ebea80c4_46682939">
<label class="col-sm-6" for="c2ms5ebe74ebea80c4_46682939">Full Address Geocode Data</label>
{FGEN:c2ms5ebe74ebea80c4_46682939|name=c2ms5ebe74ebea80c4_46682939|id=c2ms5ebe74ebea80c4_46682939|data-type=4|data-position=bottom|data-location=left|field_id=91|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe74f20a9ad2_46300972">
<label class="col-sm-6" for="c2ms5ebe74f20a9ad2_46300972">Address Line 1</label>
{FGEN:c2ms5ebe74f20a9ad2_46300972|name=c2ms5ebe74f20a9ad2_46300972|id=c2ms5ebe74f20a9ad2_46300972|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe74f2827721_40357718">
<label class="col-sm-6" for="c2ms5ebe74f2827721_40357718">Address Line 2</label>
{FGEN:c2ms5ebe74f2827721_40357718|name=c2ms5ebe74f2827721_40357718|id=c2ms5ebe74f2827721_40357718|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5fd0c0ca81c6b3_41431349">
<label class="col-sm-6" for="c2ms5fd0c0ca81c6b3_41431349">Address Line 3</label>
{FGEN:c2ms5fd0c0ca81c6b3_41431349|name=c2ms5fd0c0ca81c6b3_41431349|id=c2ms5fd0c0ca81c6b3_41431349|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe7544add7e6_85985010">
<label class="col-sm-6" for="c2ms5ebe7544add7e6_85985010">Town/City</label>
{FGEN:c2ms5ebe7544add7e6_85985010|name=c2ms5ebe7544add7e6_85985010|id=c2ms5ebe7544add7e6_85985010|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe7570d19a37_15673813">
<label class="col-sm-6" for="c2ms5ebe7570d19a37_15673813">State</label>
{FGEN:c2ms5ebe7570d19a37_15673813|name=c2ms5ebe7570d19a37_15673813|id=c2ms5ebe7570d19a37_15673813|data-type=5|data-position=bottom|data-location=left|field_id=93|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe7588344776_83727213">
<label class="col-sm-6" for="c2ms5ebe7588344776_83727213">Zip</label>
{FGEN:c2ms5ebe7588344776_83727213|name=c2ms5ebe7588344776_83727213|id=c2ms5ebe7588344776_83727213|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe7594e03d07_74446349">
<label class="col-sm-6" for="c2ms5ebe7594e03d07_74446349">Country</label>
{FGEN:c2ms5ebe7594e03d07_74446349|name=c2ms5ebe7594e03d07_74446349|id=c2ms5ebe7594e03d07_74446349|data-type=1|data-position=bottom|data-location=left|field_id=94|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe75a49d6374_85934614">
<label class="col-sm-6" for="c2ms5ebe75a49d6374_85934614">Latitude</label>
{FGEN:c2ms5ebe75a49d6374_85934614|name=c2ms5ebe75a49d6374_85934614|id=c2ms5ebe75a49d6374_85934614|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe75a52ef509_74530109">
<label class="col-sm-6" for="c2ms5ebe75a52ef509_74530109">Longitude</label>
{FGEN:c2ms5ebe75a52ef509_74530109|name=c2ms5ebe75a52ef509_74530109|id=c2ms5ebe75a52ef509_74530109|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5f7d962dc0bd27_89028719">
<label class="col-sm-6" for="c2ms5f7d962dc0bd27_89028719">Removed</label>
{FGEN:yes_no|name=c2ms5f7d962dc0bd27_89028719|id=c2ms5f7d962dc0bd27_89028719|data-type=1|data-position=12|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms5f7d9637069282_87288859">
<label class="col-sm-6" for="c2ms5f7d9637069282_87288859">Removed Date</label>
{FGEN:datepicker|name=c2ms5f7d9637069282_87288859|id=c2ms5f7d9637069282_87288859|data-type=3|data-position=13|data-location=left|field_id=113|revision_id=1}
</div>

</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 24,
                'date_created' => '2020-06-04 17:32:07',
                'id' => 20,
                'identifier' => '8cf8328b-a678-11ea-b4d4-4a28775f739c',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 3254,
                'rev_ds_code' => 'dbbv2_14_confirmation',
                'rev_ds_description' => '',
                'rev_ds_title' => 'DBBv2_14_Confirmation',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Confirmation"}}
{{eavfield "c2ms5ebe8b8462fdf1_62589490" label="I confirm that all information entered is correct to the best of my knowledge."}}
{{eavfield "c2ms5ebe8b850958a4_36972946" label="Trigger automatic referral for policy"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Confirmation</h4>
</div>

<div class="required" id="parent-c2ms5ebe8b8462fdf1_62589490">
<label class="col-sm-6" for="c2ms5ebe8b8462fdf1_62589490">I confirm that all information entered is correct to the best of my knowledge.</label>
{FGEN:checkbox_agree|name=c2ms5ebe8b8462fdf1_62589490|id=c2ms5ebe8b8462fdf1_62589490|data-type=1|data-position=1|data-location=left|field_id=97|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe8b850958a4_36972946">
<label class="col-sm-6" for="c2ms5ebe8b850958a4_36972946">Trigger automatic referral for policy</label>
{FGEN:checkbox_agree|name=c2ms5ebe8b850958a4_36972946|id=c2ms5ebe8b850958a4_36972946|data-type=1|data-position=2|data-location=left|field_id=97|revision_id=1}
</div>

<div class="required" id="parent-c2ms60a379781a57a1_15944513">
<label class="col-sm-6" for="c2ms60a379781a57a1_15944513">Warranted no known or reported losses as at today\'s date.</label>
{FGEN:checkbox_agree|name=c2ms60a379781a57a1_15944513|id=c2ms60a379781a57a1_15944513|data-type=1|data-position=3|data-location=left|field_id=85|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 25,
                'date_created' => '2020-06-04 17:32:07',
                'id' => 21,
                'identifier' => '8cf86a97-a678-11ea-b4d4-4a28775f739c',
                'image_url' => NULL,
                'location_id' => 1,
                'num_entries' => 3254,
                'rev_ds_code' => 'dbbv2_03_target_price',
                'rev_ds_description' => '',
                'rev_ds_title' => 'DBBv2_03_Target_Price',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Target Price Information"}}
{{eavfield "c2ms5ebd5c280bf0b9_00743807" label="Do you wish to set a target price?"}}
{{eavfield "c2ms5ebd5c31b1c4c1_24113952" label="What target price would you like to set?"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Target Price Information</h4>
</div>

<div class="required" id="parent-c2ms5ebd5c280bf0b9_00743807">
<label class="col-sm-6" for="c2ms5ebd5c280bf0b9_00743807">Do you wish to set a target price?</label>
{FGEN:c2ms5ebd5c280bf0b9_00743807|name=c2ms5ebd5c280bf0b9_00743807|id=c2ms5ebd5c280bf0b9_00743807|data-type=1|data-position=bottom|data-location=left|field_id=98|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebd5c31b1c4c1_24113952">
<label class="col-sm-6" for="c2ms5ebd5c31b1c4c1_24113952">What target price would you like to set?</label>
{FGEN:c2ms5ebd5c31b1c4c1_24113952|name=c2ms5ebd5c31b1c4c1_24113952|id=c2ms5ebd5c31b1c4c1_24113952|data-type=2|data-position=bottom|data-location=left|field_id=99|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 26,
                'date_created' => '2020-06-04 17:32:07',
                'id' => 22,
                'identifier' => '8cf8a6a6-a678-11ea-b4d4-4a28775f739c',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 3254,
                'rev_ds_code' => 'dbbv2_07_surplus_lines',
                'rev_ds_description' => '',
                'rev_ds_title' => 'DBBv2_07_Surplus_Lines',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Surplus Lines"}}
{{eavfield "c2ms5ebe7665000f24_41933887" label="What is the state of filing?"}}
{{eavfield "c2ms5ebe7a78832ae6_12158796" label="Do you wish to complete the Surplus Lines details now?"}}
{{eavfield "c2ms5ebe7a896e4d26_58191631" label="Name"}}
{{eavfield "c2ms5ebe7a9b492791_03236044" label="License Number"}}
{{eavfield "c2ms5ebe7a8fa4cd03_60653279" label="Full Address Geocode Data"}}
{{eavfield "c2ms5ebe7ad5c96746_78370984" label="Address Line 1"}}
{{eavfield "c2ms5ebe7ad66d1f70_26163505" label="Address Line 2"}}
{{eavfield "c2ms5fd0c0f7c41777_72304612" label="Address Line 3"}}
{{eavfield "c2ms5ebe7aecaae8e7_01065417" label="Town/City"}}
{{eavfield "c2ms5ebe7af6b80662_94833542" label="State"}}
{{eavfield "c2ms5ebe7b1f14ad86_87991432" label="Zip"}}
{{eavfield "c2ms5ebe7b3247f8b6_37642700" label="Country"}}
{{eavfield "c2ms5ebe7b46dff682_78235924" label="Latitude"}}
{{eavfield "c2ms5ebe7b4780b828_28105638" label="Longitude"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="required" id="parent-c2ms5ebe7665000f24_41933887">
<label class="col-sm-6" for="c2ms5ebe7665000f24_41933887">What is the state of filing?</label>
{FGEN:usa_states_main|name=c2ms5ebe7665000f24_41933887|id=c2ms5ebe7665000f24_41933887|data-type=5|data-position=1|data-location=left|field_id=93|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe7a78832ae6_12158796">
<label class="col-sm-6" for="c2ms5ebe7a78832ae6_12158796">Do you wish to complete the Surplus Lines details now?</label>
{FGEN:yes_no|name=c2ms5ebe7a78832ae6_12158796|id=c2ms5ebe7a78832ae6_12158796|data-type=1|data-position=2|data-location=left|field_id=98|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe7a896e4d26_58191631">
<label class="col-sm-6" for="c2ms5ebe7a896e4d26_58191631">Name</label>
{FGEN:text|name=c2ms5ebe7a896e4d26_58191631|id=c2ms5ebe7a896e4d26_58191631|data-type=5|data-position=3|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe7a9b492791_03236044">
<label class="col-sm-6" for="c2ms5ebe7a9b492791_03236044">License Number</label>
{FGEN:text|name=c2ms5ebe7a9b492791_03236044|id=c2ms5ebe7a9b492791_03236044|data-type=5|data-position=4|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe7a8fa4cd03_60653279">
<label class="col-sm-6" for="c2ms5ebe7a8fa4cd03_60653279">Full Address Geocode Data</label>
{FGEN:textarea|name=c2ms5ebe7a8fa4cd03_60653279|id=c2ms5ebe7a8fa4cd03_60653279|data-type=4|data-position=5|data-location=left|field_id=91|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe7ad5c96746_78370984">
<label class="col-sm-6" for="c2ms5ebe7ad5c96746_78370984">Address Line 1</label>
{FGEN:text|name=c2ms5ebe7ad5c96746_78370984|id=c2ms5ebe7ad5c96746_78370984|data-type=5|data-position=6|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe7ad66d1f70_26163505">
<label class="col-sm-6" for="c2ms5ebe7ad66d1f70_26163505">Address Line 2</label>
{FGEN:text|name=c2ms5ebe7ad66d1f70_26163505|id=c2ms5ebe7ad66d1f70_26163505|data-type=5|data-position=7|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe7aecaae8e7_01065417">
<label class="col-sm-6" for="c2ms5ebe7aecaae8e7_01065417">Town/City</label>
{FGEN:text|name=c2ms5ebe7aecaae8e7_01065417|id=c2ms5ebe7aecaae8e7_01065417|data-type=5|data-position=8|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe7af6b80662_94833542">
<label class="col-sm-6" for="c2ms5ebe7af6b80662_94833542">State</label>
{FGEN:usa_states_main|name=c2ms5ebe7af6b80662_94833542|id=c2ms5ebe7af6b80662_94833542|data-type=5|data-position=9|data-location=left|field_id=93|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe7b1f14ad86_87991432">
<label class="col-sm-6" for="c2ms5ebe7b1f14ad86_87991432">Zip</label>
{FGEN:text|name=c2ms5ebe7b1f14ad86_87991432|id=c2ms5ebe7b1f14ad86_87991432|data-type=5|data-position=10|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe7b3247f8b6_37642700">
<label class="col-sm-6" for="c2ms5ebe7b3247f8b6_37642700">Country</label>
{FGEN:country|name=c2ms5ebe7b3247f8b6_37642700|id=c2ms5ebe7b3247f8b6_37642700|data-type=1|data-position=11|data-location=left|field_id=94|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe7b46dff682_78235924">
<label class="col-sm-6" for="c2ms5ebe7b46dff682_78235924">Latitude</label>
{FGEN:text|name=c2ms5ebe7b46dff682_78235924|id=c2ms5ebe7b46dff682_78235924|data-type=5|data-position=12|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe7b4780b828_28105638">
<label class="col-sm-6" for="c2ms5ebe7b4780b828_28105638">Longitude</label>
{FGEN:text|name=c2ms5ebe7b4780b828_28105638|id=c2ms5ebe7b4780b828_28105638|data-type=5|data-position=13|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5fd0c0f7c41777_72304612">
<label class="col-sm-6" for="c2ms5fd0c0f7c41777_72304612">Address Line 3</label>
{FGEN:text|name=c2ms5fd0c0f7c41777_72304612|id=c2ms5fd0c0f7c41777_72304612|data-type=5|data-position=14|data-location=left|field_id=112|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 27,
                'date_created' => '2020-06-04 17:32:07',
                'id' => 23,
                'identifier' => '8cf9983d-a678-11ea-b4d4-4a28775f739c',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 3254,
                'rev_ds_code' => 'dbbv2_09_cover_information',
                'rev_ds_description' => '',
                'rev_ds_title' => 'DBBv2_09_Cover_Information',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Cover Information"}}
{{eavfield "c2ms5ebe7ca367efe8_89460043" label="What is the overlying wind deductible?"}}
{{eavfield "c2ms5ebe7cc89da269_80900171" label="What is the limit applicable?"}}
{{eavfield "c2ms5ebe7cee04cbd8_11377229" label="What is the application of overlying deductible?"}}
<br>
<h4>What are you buying down to?</h4>
{{eavfield "c2ms5ebe7d2a5e8bb0_64402171" label="Overlying wind/hail deductible %"}}
{{eavfield "c2ms5ebe7d2af11213_27889881" label="Overlying wind/hail deductible $"}}
{{eavfield "c2ms5ebe7d2bca4663_68739350" label="We are buying back to %"}}
{{eavfield "c2ms5ebe7d2c64aee8_63264696" label="We are buying back to $"}}
{{>ds-subtitle subtitle="Underwriting Data"}}
{{eavfield "c2ms5f070560f1baa3_66676650" label="Maximum recoverable"}}
{{eavfield "c2ms60a39cf60519b8_83857953" label="Maximum recoverable - Underwriter override"}}
{{eavfield "c2ms5f070561d563d4_53479594" label="Minimum attachment point"}}
{{eavfield "c2ms6299f0d59e89c3_49788784" label="Minimum attachment point - Override"}}
{{eavfield "c2ms6299f0d5c8c707_07644173" label="Minimum attachment point used"}}
{{eavfield "c2ms601aaf3e232bc5_38596010" label="Overall TIV"}}
{{>ds-subtitle subtitle="Additional Text - Usable only for Referrals"}}
{{eavfield "c2ms6075878d269351_45137058" label="Overlying Deductible - Referral Text"}}
{{eavfield "c2ms6075878e1dc377_70036500" label="Maximum Amount Recoverable - Referral Text"}}
{{eavfield "c2ms6075878f258755_32624484" label="Insured\'s Retention - Referral Text"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Cover Information</h4>
</div>

<div class="required" id="parent-c2ms5ebe7ca367efe8_89460043">
<label class="col-sm-6" for="c2ms5ebe7ca367efe8_89460043">What is the overlying wind deductible?</label>
{FGEN:dbbv2_overlying_wind_deductible|name=c2ms5ebe7ca367efe8_89460043|id=c2ms5ebe7ca367efe8_89460043|data-type=1|data-position=1|data-location=left|field_id=100|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe7cc89da269_80900171">
<label class="col-sm-6" for="c2ms5ebe7cc89da269_80900171">What is the limit applicable?</label>
{FGEN:dbbv2_limit_applicable|name=c2ms5ebe7cc89da269_80900171|id=c2ms5ebe7cc89da269_80900171|data-type=1|data-position=2|data-location=left|field_id=101|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe7cee04cbd8_11377229">
<label class="col-sm-6" for="c2ms5ebe7cee04cbd8_11377229">What is the application of overlying deductible?</label>
{FGEN:dbbv2_application_overlying_deductible|name=c2ms5ebe7cee04cbd8_11377229|id=c2ms5ebe7cee04cbd8_11377229|data-type=1|data-position=3|data-location=left|field_id=102|revision_id=1}
</div>

<br>
<h4>What are you buying down to?</h4>

<div class="required" id="parent-c2ms5ebe7d2a5e8bb0_64402171">
<label class="col-sm-6" for="c2ms5ebe7d2a5e8bb0_64402171">Overlying wind/hail deductible %</label>
{FGEN:float_entry|name=c2ms5ebe7d2a5e8bb0_64402171|id=c2ms5ebe7d2a5e8bb0_64402171|data-type=2|data-position=4|data-location=left|field_id=99|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe7d2af11213_27889881">
<label class="col-sm-6" for="c2ms5ebe7d2af11213_27889881">Overlying wind/hail deductible $</label>
{FGEN:float_entry|name=c2ms5ebe7d2af11213_27889881|id=c2ms5ebe7d2af11213_27889881|data-type=2|data-position=5|data-location=left|field_id=99|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe7d2bca4663_68739350">
<label class="col-sm-6" for="c2ms5ebe7d2bca4663_68739350">We are buying back to %</label>
{FGEN:float_entry|name=c2ms5ebe7d2bca4663_68739350|id=c2ms5ebe7d2bca4663_68739350|data-type=2|data-position=6|data-location=left|field_id=99|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe7d2c64aee8_63264696">
<label class="col-sm-6" for="c2ms5ebe7d2c64aee8_63264696">We are buying back to $</label>
{FGEN:float_entry|name=c2ms5ebe7d2c64aee8_63264696|id=c2ms5ebe7d2c64aee8_63264696|data-type=2|data-position=7|data-location=left|field_id=99|revision_id=1}
</div>

<div class="form-heading custom-hidden">
<h4>Underwriting Data</h4>
</div>

<div class="required" id="parent-c2ms5f070560f1baa3_66676650">
<label class="col-sm-6" for="c2ms5f070560f1baa3_66676650">Maximum recoverable</label>
{FGEN:float_entry|name=c2ms5f070560f1baa3_66676650|id=c2ms5f070560f1baa3_66676650|data-type=2|data-position=8|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms60a39cf60519b8_83857953">
<label class="col-sm-6" for="c2ms60a39cf60519b8_83857953">Maximum recoverable - Underwriter Override</label>
{FGEN:float_entry|name=c2ms60a39cf60519b8_83857953|id=c2ms60a39cf60519b8_83857953|data-type=2|data-position=14|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5f070561d563d4_53479594">
<label class="col-sm-6" for="c2ms5f070561d563d4_53479594">Minimum attachment point</label>
{FGEN:float_entry|name=c2ms5f070561d563d4_53479594|id=c2ms5f070561d563d4_53479594|data-type=2|data-position=9|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6299f0d59e89c3_49788784">
<label class="col-sm-6" for="c2ms6299f0d59e89c3_49788784">Minimum attachment point - Override</label>
{FGEN:c2ms6299f0d59e89c3_49788784|name=c2ms6299f0d59e89c3_49788784|id=c2ms6299f0d59e89c3_49788784|data-type=2|data-position=bottom|data-location=left|field_id=99|revision_id=1}
</div>

<div class="required" id="parent-c2ms6299f0d5c8c707_07644173">
<label class="col-sm-6" for="c2ms6299f0d5c8c707_07644173">Minimum attachment point used</label>
{FGEN:c2ms6299f0d5c8c707_07644173|name=c2ms6299f0d5c8c707_07644173|id=c2ms6299f0d5c8c707_07644173|data-type=2|data-position=bottom|data-location=left|field_id=99|revision_id=1}
</div>

<div class="required" id="parent-c2ms601aaf3e232bc5_38596010">
<label class="col-sm-6" for="c2ms601aaf3e232bc5_38596010">Overall TIV</label>
{FGEN:float_entry|name=c2ms601aaf3e232bc5_38596010|id=c2ms601aaf3e232bc5_38596010|data-type=2|data-position=10|data-location=left|field_id=118|revision_id=1}
</div>

<div class="form-heading custom-hidden">
<h4>Additional Text - Usable only for Referrals</h4>
</div>

<div class="required" id="parent-c2ms6075878d269351_45137058">
<label class="col-sm-6" for="c2ms6075878d269351_45137058">Overlying Deductible - Referral Text</label>
{FGEN:textarea|name=c2ms6075878d269351_45137058|id=c2ms6075878d269351_45137058|data-type=4|data-position=11|data-location=left|field_id=114|revision_id=1}
</div>

<div class="required" id="parent-c2ms6075878e1dc377_70036500">
<label class="col-sm-6" for="c2ms6075878e1dc377_70036500">Maximum Amount Recoverable - Referral Text</label>
{FGEN:textarea|name=c2ms6075878e1dc377_70036500|id=c2ms6075878e1dc377_70036500|data-type=4|data-position=12|data-location=left|field_id=114|revision_id=1}
</div>

<div class="required" id="parent-c2ms6075878f258755_32624484">
<label class="col-sm-6" for="c2ms6075878f258755_32624484">Insured\'s Retention - Referral Text</label>
{FGEN:textarea|name=c2ms6075878f258755_32624484|id=c2ms6075878f258755_32624484|data-type=4|data-position=13|data-location=left|field_id=114|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 28,
                'date_created' => '2020-06-04 17:32:07',
                'id' => 24,
                'identifier' => '8cf9f262-a678-11ea-b4d4-4a28775f739c',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 3254,
                'rev_ds_code' => 'dbbv2_01_type_of_cover',
                'rev_ds_description' => '',
                'rev_ds_title' => 'DBBv2_01_Type_of_Cover',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Deductible Buyback cover"}}
{{eavfield "c2ms5ebd5aae12f687_10088649" label="Select a Type of Cover"}}
{{eavfield "c2ms5f9006c569e826_59538877" label="EOC Used"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Deductible Buyback cover</h4>
</div>

<div class="required" id="parent-c2ms5ebd5aae12f687_10088649">
<label class="col-sm-6" for="c2ms5ebd5aae12f687_10088649">Select a Type of Cover</label>
{FGEN:dbbv2_type_of_cover|name=c2ms5ebd5aae12f687_10088649|id=c2ms5ebd5aae12f687_10088649|data-type=1|data-position=1|data-location=left|field_id=103|revision_id=1}
</div>

<div class="required" id="parent-c2ms5f9006c569e826_59538877">
<label class="col-sm-6" for="c2ms5f9006c569e826_59538877">EOC Used</label>
{FGEN:c2ms5f9006c569e826_59538877|name=c2ms5f9006c569e826_59538877|id=c2ms5f9006c569e826_59538877|data-type=1|data-position=bottom|data-location=left|field_id=132|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 29,
                'date_created' => '2020-06-04 17:32:07',
                'id' => 25,
                'identifier' => '8cfa239b-a678-11ea-b4d4-4a28775f739c',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 3254,
                'rev_ds_code' => 'dbbv2_11_location_details',
                'rev_ds_description' => '',
                'rev_ds_title' => 'DBBv2_11_Location_Details',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Location Details"}}
{{eavfield "c2ms5ebe80e327c3e3_24950316" label="No. of Locations"}}
{{eavfield "c2ms60782cb2ed8ba6_14000728" label="Referral No. of Locations"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Location Details</h4>
</div>

<div class="required" id="parent-c2ms5ebe80e327c3e3_24950316">
<label class="col-sm-6" for="c2ms5ebe80e327c3e3_24950316">No. of Locations</label>
{FGEN:c2ms5ebe80e327c3e3_24950316|name=c2ms5ebe80e327c3e3_24950316|id=c2ms5ebe80e327c3e3_24950316|data-type=1|data-position=bottom|data-location=left|field_id=84|revision_id=1}
</div>

<div class="required" id="parent-c2ms60782cb2ed8ba6_14000728">
<label class="col-sm-6" for="c2ms60782cb2ed8ba6_14000728">Referral No. of Locations</label>
{FGEN:c2ms60782cb2ed8ba6_14000728|name=c2ms60782cb2ed8ba6_14000728|id=c2ms60782cb2ed8ba6_14000728|data-type=1|data-position=bottom|data-location=left|field_id=84|revision_id=1}
</div>

</div>',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 30,
                'date_created' => '2020-06-04 17:32:07',
                'id' => 26,
                'identifier' => '8cfa58ad-a678-11ea-b4d4-4a28775f739c',
                'image_url' => NULL,
                'location_id' => 1,
                'num_entries' => 3254,
                'rev_ds_code' => 'dbbv2_10_overlying_policy_details',
                'rev_ds_description' => '',
                'rev_ds_title' => 'DBBv2_10_Overlying_Policy_Details',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Overlying Policy Details"}}
{{eavfield "c2ms5ebe7f4b750225_37286318" label="Do you wish to add overlying policy details now?"}}
{{eavfield "c2ms5ebe7f5110aee7_77773772" label="Overlying insurer"}}
{{eavfield "c2ms5ebe7f519b8b64_70224445" label="Overlying policy reference"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Overlying Policy Details</h4>
</div>

<div class="required" id="parent-c2ms5ebe7f4b750225_37286318">
<label class="col-sm-6" for="c2ms5ebe7f4b750225_37286318">Do you wish to add overlying policy details now?</label>
{FGEN:c2ms5ebe7f4b750225_37286318|name=c2ms5ebe7f4b750225_37286318|id=c2ms5ebe7f4b750225_37286318|data-type=1|data-position=bottom|data-location=left|field_id=98|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe7f5110aee7_77773772">
<label class="col-sm-6" for="c2ms5ebe7f5110aee7_77773772">Overlying insurer</label>
{FGEN:c2ms5ebe7f5110aee7_77773772|name=c2ms5ebe7f5110aee7_77773772|id=c2ms5ebe7f5110aee7_77773772|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe7f519b8b64_70224445">
<label class="col-sm-6" for="c2ms5ebe7f519b8b64_70224445">Overlying policy reference</label>
{FGEN:c2ms5ebe7f519b8b64_70224445|name=c2ms5ebe7f519b8b64_70224445|id=c2ms5ebe7f519b8b64_70224445|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 31,
                'date_created' => '2020-06-04 17:32:07',
                'id' => 27,
                'identifier' => '8cfa9c68-a678-11ea-b4d4-4a28775f739c',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 221,
                'rev_ds_code' => 'dbbv2_05_additional_insured_mi',
                'rev_ds_description' => '',
                'rev_ds_title' => 'DBBv2_05_Additional_Insured_MI',
                'rev_hb' => '<div
class="{{#if instanceCount}}full{{else}}empty{{/if}}"
data-identifier="{{datasetRevisionIdentifier}}"
data-role="multi-placeholder"
data-ds-control="{{control}}"
>

<div class="form-heading custom-hidden mi-header" data-role="mi-header" data-identifier="{{datasetRevisionIdentifier}}">

<div class="left">

<h4>Number of additional insured
<span class="instance-counter">
(Total: <span data-role="instance-counter" data-identifier="{{datasetRevisionIdentifier}}">{{instanceCount}}</span>)
</span>
</h4>
</div>

<div class="right mi-control mi-add-instance">
<button type="button" data-role="add-instance" data-identifier="{{datasetRevisionIdentifier}}" data-title="Additional insured">Add</button>
</div>

<div class="clear"></div>
</div>


<!-- Form fields with eav dataset identifier and instance count	 -->
{{>multi-mandatory-fields  datasetRevisionIdentifier=datasetRevisionIdentifier instanceCount=instanceCount}}

<!-- Slot with rendered instances (if they exist) -->
{{#if instanceCount}}
{{#each instances as |instance|}}

<div data-role="instance-wrapper" data-index="{{instance.index}}">
{{>multi-instance-header
title="Additional Insured"
datasetRevisionIdentifier=../datasetRevisionIdentifier
index=instance.index
}}

<!-- Form field that contains persisted instance\'s identifier (form field "ident") -->
<input
type="hidden"
name="c2msmf[{{../datasetRevisionIdentifier}}][{{instance.index}}][ident]"
id="{{../datasetRevisionIdentifier}}_ident_{{instance.index}}"
data-template-name="c2msmf[{{../datasetRevisionIdentifier}}][\\{{index}}][ident]"
data-template-id="{{../datasetRevisionIdentifier}}_ident_\\{{index}}"
value="{{instance.ident}}"
/>

{{>multi-instance-fields-dbb-additional-insured dataset=../dataset fieldCollection=../fieldCollection instance=instance index=instance.index}}

<!-- Footer -->
{{>multi-instance-footer
datasetRevisionIdentifier=../datasetRevisionIdentifier
index=instance.index
title="Additional Insured Information"
}}
</div>
{{/each}}

{{ else }}
<p class="mi-empty">There\'s no Additional Insured Information specified</p>
{{/if}}

<!-- Template for adding additional instance on the frontend -->
<script type="text/x-handlebars" data-identifier="{{datasetRevisionIdentifier}}" data-role="multi-template">
<div data-role="instance-wrapper" data-index="\\{{index}}">

<div class="form-heading custom-hidden mi-instance-header">
<div class="left mi-instance-label">
<h4 data-template-html="Additional Insured Information: \\{{index}}">Additional Insured Information: \\{{index}}</h4>
</div>
<div class="right mi-control mi-remove-instance">
<button
class="right"
type="button"
data-role="remove-instance"
data-identifier="{{datasetRevisionIdentifier}}"
data-index="\\{{index}}"
data-title="Additional Insured"
data-template-html="Remove Additional Insured (Num: \\{{index}})"
>Remove Additional Insured (Num: \\{{index}})</button>
</div>
<div class="clear"></div>
</div>

{{>multi-instance-fields-dbb-additional-insured dataset=dataset fieldCollection=fieldCollection}}


<input
type="hidden"
name="c2msmf[{{datasetRevisionIdentifier}}][\\{{index}}][ident]"
id="{{datasetRevisionIdentifier}}_ident_\\{{index}}"
data-template-name="c2msmf[{{datasetRevisionIdentifier}}][\\{{index}}][ident]"
data-template-id="{{datasetRevisionIdentifier}}_ident_\\{{index}}"
value=""
/>


<div class="form-heading custom-hidden mi-instance-footer">
<div class="right mi-control mi-remove-instance">
<button
class="right"
type="button"
data-role="remove-instance"
data-identifier="{{datasetRevisionIdentifier}}"
data-index="\\{{index}}"
data-title="Additional Insured"
data-template-html="Remove Additional Insured (Num: \\{{index}})"
>Remove Additional Insured (Num: \\{{index}})</button>
</div>
<div class="clear"></div>
</div>
</div>
</script>
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-multi-box">

<div class="form-heading custom-hidden">
<h4>Additional Insured Information: {COUNT}</h4>
</div>

<div class="required" id="parent-c2ms5ebe6d9a659bb6_45168424">
<label class="col-sm-6" for="c2ms5ebe6d9a659bb6_45168424">Additional Insured Name</label>
{FGEN:c2ms5ebe6d9a659bb6_45168424|name=c2ms5ebe6d9a659bb6_45168424|id=c2ms5ebe6d9a659bb6_45168424|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe6f87676e50_38597250">
<label class="col-sm-6" for="c2ms5ebe6f87676e50_38597250">Effective Date</label>
{FGEN:c2ms5ebe6f87676e50_38597250|name=c2ms5ebe6f87676e50_38597250|id=c2ms5ebe6f87676e50_38597250|data-type=3|data-position=bottom|data-location=left|field_id=96|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe6d9d26f593_73861654">
<label class="col-sm-6" for="c2ms5ebe6d9d26f593_73861654">Full Address Geocode Data</label>
{FGEN:c2ms5ebe6d9d26f593_73861654|name=c2ms5ebe6d9d26f593_73861654|id=c2ms5ebe6d9d26f593_73861654|data-type=4|data-position=bottom|data-location=left|field_id=91|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe6e05d2ccf9_83983864">
<label class="col-sm-6" for="c2ms5ebe6e05d2ccf9_83983864">Address Line 1</label>
{FGEN:c2ms5ebe6e05d2ccf9_83983864|name=c2ms5ebe6e05d2ccf9_83983864|id=c2ms5ebe6e05d2ccf9_83983864|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe6e065ab3f5_23041121">
<label class="col-sm-6" for="c2ms5ebe6e065ab3f5_23041121">Address Line 2</label>
{FGEN:c2ms5ebe6e065ab3f5_23041121|name=c2ms5ebe6e065ab3f5_23041121|id=c2ms5ebe6e065ab3f5_23041121|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5fd0c0938fe0b4_22965920">
<label class="col-sm-6" for="c2ms5fd0c0938fe0b4_22965920">Address Line 3</label>
{FGEN:c2ms5fd0c0938fe0b4_22965920|name=c2ms5fd0c0938fe0b4_22965920|id=c2ms5fd0c0938fe0b4_22965920|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe6e10aab3c1_56167502">
<label class="col-sm-6" for="c2ms5ebe6e10aab3c1_56167502">Town/City</label>
{FGEN:c2ms5ebe6e10aab3c1_56167502|name=c2ms5ebe6e10aab3c1_56167502|id=c2ms5ebe6e10aab3c1_56167502|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe6e57accba5_09895023">
<label class="col-sm-6" for="c2ms5ebe6e57accba5_09895023">State</label>
{FGEN:c2ms5ebe6e57accba5_09895023|name=c2ms5ebe6e57accba5_09895023|id=c2ms5ebe6e57accba5_09895023|data-type=5|data-position=bottom|data-location=left|field_id=93|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe6ea473ac77_13241203">
<label class="col-sm-6" for="c2ms5ebe6ea473ac77_13241203">Zip</label>
{FGEN:c2ms5ebe6ea473ac77_13241203|name=c2ms5ebe6ea473ac77_13241203|id=c2ms5ebe6ea473ac77_13241203|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe6ec77c0409_26335340">
<label class="col-sm-6" for="c2ms5ebe6ec77c0409_26335340">Country</label>
{FGEN:c2ms5ebe6ec77c0409_26335340|name=c2ms5ebe6ec77c0409_26335340|id=c2ms5ebe6ec77c0409_26335340|data-type=1|data-position=bottom|data-location=left|field_id=94|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe6ed3ee4165_73815536">
<label class="col-sm-6" for="c2ms5ebe6ed3ee4165_73815536">Latitude</label>
{FGEN:c2ms5ebe6ed3ee4165_73815536|name=c2ms5ebe6ed3ee4165_73815536|id=c2ms5ebe6ed3ee4165_73815536|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe6ed4913391_64403191">
<label class="col-sm-6" for="c2ms5ebe6ed4913391_64403191">Longitude</label>
{FGEN:c2ms5ebe6ed4913391_64403191|name=c2ms5ebe6ed4913391_64403191|id=c2ms5ebe6ed4913391_64403191|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe6eeda2b013_26387677">
<label class="col-sm-6" for="c2ms5ebe6eeda2b013_26387677">Include waiver of subrogation</label>
{FGEN:c2ms5ebe6eeda2b013_26387677|name=c2ms5ebe6eeda2b013_26387677|id=c2ms5ebe6eeda2b013_26387677|data-type=1|data-position=bottom|data-location=left|field_id=98|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe6eee4c8f98_95419476">
<label class="col-sm-6" for="c2ms5ebe6eee4c8f98_95419476">Confirm the Additional Insured’s work accounts for no more than 15% of the original insured’s work</label>
{FGEN:c2ms5ebe6eee4c8f98_95419476|name=c2ms5ebe6eee4c8f98_95419476|id=c2ms5ebe6eee4c8f98_95419476|data-type=1|data-position=bottom|data-location=left|field_id=98|revision_id=1}
</div>

<div class="required" id="parent-c2ms5f7d95f0c69738_20527766">
<label class="col-sm-6" for="c2ms5f7d95f0c69738_20527766">Removed</label>
{FGEN:yes_no|name=c2ms5f7d95f0c69738_20527766|id=c2ms5f7d95f0c69738_20527766|data-type=1|data-position=14|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms5f7d95f848e7f6_85686562">
<label class="col-sm-6" for="c2ms5f7d95f848e7f6_85686562">Removed Date</label>
{FGEN:datepicker|name=c2ms5f7d95f848e7f6_85686562|id=c2ms5f7d95f848e7f6_85686562|data-type=3|data-position=15|data-location=left|field_id=113|revision_id=1}
</div>

</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 32,
                'date_created' => '2020-06-04 17:32:07',
                'id' => 28,
                'identifier' => '8cfb0fd0-a678-11ea-b4d4-4a28775f739c',
                'image_url' => NULL,
                'location_id' => 1,
                'num_entries' => 3254,
                'rev_ds_code' => 'dbbv2_13_rate_options',
                'rev_ds_description' => '',
                'rev_ds_title' => 'DBBv2_13_Rate_Options',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Rate Options"}}
{{eavfield "c2ms5ebe8ad5e2c1a8_50107777" label="Please select one of the following options:"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Rate Options</h4>
</div>

<div class="required" id="parent-c2ms5ebe8ad5e2c1a8_50107777">
<label class="col-sm-6" for="c2ms5ebe8ad5e2c1a8_50107777">Please select one of the following options:</label>
{FGEN:c2ms5ebe8ad5e2c1a8_50107777|name=c2ms5ebe8ad5e2c1a8_50107777|id=c2ms5ebe8ad5e2c1a8_50107777|data-type=1|data-position=bottom|data-location=left|field_id=105|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 33,
                'date_created' => '2020-06-04 17:32:07',
                'id' => 29,
                'identifier' => '8cfb40b3-a678-11ea-b4d4-4a28775f739c',
                'image_url' => NULL,
                'location_id' => 1,
                'num_entries' => 3254,
                'rev_ds_code' => 'dbbv2_08_business_information',
                'rev_ds_description' => '',
                'rev_ds_title' => 'DBBv2_08_Business_Information',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Business Information"}}
{{eavfield "c2ms5ebe7c1ee9cd18_58202184" label="Select occupancy type"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Business Information</h4>
</div>

<div class="required" id="parent-c2ms5ebe7c1ee9cd18_58202184">
<label class="col-sm-6" for="c2ms5ebe7c1ee9cd18_58202184">Select occupancy type</label>
{FGEN:c2ms5ebe7c1ee9cd18_58202184|name=c2ms5ebe7c1ee9cd18_58202184|id=c2ms5ebe7c1ee9cd18_58202184|data-type=1|data-position=bottom|data-location=left|field_id=106|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 34,
                'date_created' => '2020-06-04 17:32:07',
                'id' => 30,
                'identifier' => '8cfc0dff-a678-11ea-b4d4-4a28775f739c',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 9175,
                'rev_ds_code' => 'dbbv2_12_location_information_mi',
                'rev_ds_description' => '',
                'rev_ds_title' => 'DBBv2_12_Location_Information_MI',
                'rev_hb' => '<div
class="{{#if instanceCount}}full{{else}}empty{{/if}}"
data-identifier="{{datasetRevisionIdentifier}}"
data-role="multi-placeholder"
data-ds-control="{{control}}"
>

<div class="form-heading custom-hidden mi-header" data-role="mi-header" data-identifier="{{datasetRevisionIdentifier}}">
<div class="left">
<h4>Location Information
<span class="instance-counter">
(Total: <span data-role="instance-counter" data-identifier="{{datasetRevisionIdentifier}}">{{instanceCount}}</span>)
</span>
</h4>
</div>

<div class="right mi-control mi-add-instance">
<button type="button" data-role="add-instance" data-identifier="{{datasetRevisionIdentifier}}" data-title="Location Information">Add</button>
</div>

<div class="clear"></div>
</div>

<!-- Form fields with eav dataset identifier and instance count  -->
{{>multi-mandatory-fields  datasetRevisionIdentifier=datasetRevisionIdentifier instanceCount=instanceCount}}

{{#if instanceCount}}
{{#each instances as |instance|}}

<div data-role="instance-wrapper" data-index="{{instance.index}}">
{{>multi-instance-header
title="Location"
datasetRevisionIdentifier=../datasetRevisionIdentifier
index=instance.index
}}

<!-- Form field that contains persisted instance\'s identifier (form field "ident") -->
<input
type="hidden"
name="c2msmf[{{../datasetRevisionIdentifier}}][{{instance.index}}][ident]"
id="{{../datasetRevisionIdentifier}}_ident_{{instance.index}}"
data-template-name="c2msmf[{{../datasetRevisionIdentifier}}][\\{{index}}][ident]"
data-template-id="{{../datasetRevisionIdentifier}}_ident_\\{{index}}"
value="{{instance.ident}}"
/>

{{>multi-instance-fields-dbb-location-information dataset=../dataset fieldCollection=../fieldCollection instance=instance index=instance.index}}

<!-- Footer -->
{{>multi-instance-footer
datasetRevisionIdentifier=../datasetRevisionIdentifier
index=instance.index
title="Location Information"
}}
</div>
{{/each}}
{{ else }}
<p class="mi-empty">There\'s no Location Information available</p>
{{/if}}

<!-- Template for adding additional instance on the frontend -->
<script type="text/x-handlebars" data-identifier="{{datasetRevisionIdentifier}}" data-role="multi-template">
<div data-role="instance-wrapper" data-index="\\{{index}}">

<div class="form-heading custom-hidden mi-instance-header">
<div class="left mi-instance-label">
<h4 data-template-html="Additional Insured Information: \\{{index}}">Location Information: \\{{index}}</h4>
</div>
<div class="right mi-control mi-remove-instance">
<button
class="right"
type="button"
data-role="remove-instance"
data-identifier="{{datasetRevisionIdentifier}}"
data-index="\\{{index}}"
data-title="Location Information"
data-template-html="Remove Location Information (Num: \\{{index}})"
>Remove Location Information (Num: \\{{index}})</button>
</div>
<div class="clear"></div>
</div>

{{>multi-instance-fields-dbb-location-information dataset=dataset fieldCollection=fieldCollection}}


<input
type="hidden"
name="c2msmf[{{datasetRevisionIdentifier}}][\\{{index}}][ident]"
id="{{datasetRevisionIdentifier}}_ident_\\{{index}}"
data-template-name="c2msmf[{{datasetRevisionIdentifier}}][\\{{index}}][ident]"
data-template-id="{{datasetRevisionIdentifier}}_ident_\\{{index}}"
value=""
/>


<div class="form-heading custom-hidden mi-instance-footer">
<div class="right mi-control mi-remove-instance">
<button
class="right"
type="button"
data-role="remove-instance"
data-identifier="{{datasetRevisionIdentifier}}"
data-index="\\{{index}}"
data-title="Location Information"
data-template-html="Remove Location Information (Num: \\{{index}})"
>Remove Location Information (Num: \\{{index}})</button>
</div>
<div class="clear"></div>
</div>
</div>
</script>
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-multi-box">

<div class="form-heading custom-hidden">
<h4>Location Information: {COUNT}</h4>
</div>

<div class="required" id="parent-c2ms5ebe81870cae07_40354243">
<label class="col-sm-6" for="c2ms5ebe81870cae07_40354243">Full Address Geocode Data</label>
{FGEN:textarea|name=c2ms5ebe81870cae07_40354243|id=c2ms5ebe81870cae07_40354243|data-type=4|data-position=1|data-location=left|field_id=91|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe819ea6cb53_84849513">
<label class="col-sm-6" for="c2ms5ebe819ea6cb53_84849513">Address Line 1</label>
{FGEN:text|name=c2ms5ebe819ea6cb53_84849513|id=c2ms5ebe819ea6cb53_84849513|data-type=5|data-position=2|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe819f504680_87341141">
<label class="col-sm-6" for="c2ms5ebe819f504680_87341141">Address Line 2</label>
{FGEN:text|name=c2ms5ebe819f504680_87341141|id=c2ms5ebe819f504680_87341141|data-type=5|data-position=3|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5fd0c1b2d99449_72487383">
<label class="col-sm-6" for="c2ms5fd0c1b2d99449_72487383">Address Line 3</label>
{FGEN:c2ms5fd0c1b2d99449_72487383|name=c2ms5fd0c1b2d99449_72487383|id=c2ms5fd0c1b2d99449_72487383|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe81a8b6c2e6_40360918">
<label class="col-sm-6" for="c2ms5ebe81a8b6c2e6_40360918">Town/City</label>
{FGEN:text|name=c2ms5ebe81a8b6c2e6_40360918|id=c2ms5ebe81a8b6c2e6_40360918|data-type=5|data-position=4|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe81b3687890_41851070">
<label class="col-sm-6" for="c2ms5ebe81b3687890_41851070">State select</label>
{FGEN:usa_states_main|name=c2ms5ebe81b3687890_41851070|id=c2ms5ebe81b3687890_41851070|data-type=5|data-position=5|data-location=left|field_id=93|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe81dfbb2cd2_15250619">
<label class="col-sm-6" for="c2ms5ebe81dfbb2cd2_15250619">Zip</label>
{FGEN:text|name=c2ms5ebe81dfbb2cd2_15250619|id=c2ms5ebe81dfbb2cd2_15250619|data-type=5|data-position=6|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec3e71a0f0e97_96984840">
<label class="col-sm-6" for="c2ms5ec3e71a0f0e97_96984840">County select</label>
{FGEN:text|name=c2ms5ec3e71a0f0e97_96984840|id=c2ms5ec3e71a0f0e97_96984840|data-type=5|data-position=18|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe81f090e1f3_34232095">
<label class="col-sm-6" for="c2ms5ebe81f090e1f3_34232095">Country</label>
{FGEN:country|name=c2ms5ebe81f090e1f3_34232095|id=c2ms5ebe81f090e1f3_34232095|data-type=1|data-position=7|data-location=left|field_id=94|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe8224e040b4_20015869">
<label class="col-sm-6" for="c2ms5ebe8224e040b4_20015869">Latitude</label>
{FGEN:text|name=c2ms5ebe8224e040b4_20015869|id=c2ms5ebe8224e040b4_20015869|data-type=5|data-position=8|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe8225811172_62780880">
<label class="col-sm-6" for="c2ms5ebe8225811172_62780880">Longitude</label>
{FGEN:text|name=c2ms5ebe8225811172_62780880|id=c2ms5ebe8225811172_62780880|data-type=5|data-position=9|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe8234166a58_32289595">
<label class="col-sm-6" for="c2ms5ebe8234166a58_32289595">Would you like to add a nickname/common name for this location?</label>
{FGEN:text|name=c2ms5ebe8234166a58_32289595|id=c2ms5ebe8234166a58_32289595|data-type=5|data-position=10|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe824a1e2264_23574933">
<label class="col-sm-6" for="c2ms5ebe824a1e2264_23574933">How many losses has it incurred?</label>
{FGEN:dbbv2_number_losses|name=c2ms5ebe824a1e2264_23574933|id=c2ms5ebe824a1e2264_23574933|data-type=1|data-position=11|data-location=left|field_id=107|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe8256828f17_88449575">
<label class="col-sm-6" for="c2ms5ebe8256828f17_88449575">When was the building built?</label>
{FGEN:dbbv2_building_age|name=c2ms5ebe8256828f17_88449575|id=c2ms5ebe8256828f17_88449575|data-type=1|data-position=12|data-location=left|field_id=108|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe8261835ae4_72731516">
<label class="col-sm-6" for="c2ms5ebe8261835ae4_72731516">Building construction type</label>
{FGEN:dbbv2_construction_type|name=c2ms5ebe8261835ae4_72731516|id=c2ms5ebe8261835ae4_72731516|data-type=1|data-position=13|data-location=left|field_id=109|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe82883c4c02_26205534">
<label class="col-sm-6" for="c2ms5ebe82883c4c02_26205534">How old is the roof?</label>
{FGEN:dbbv2_age_roof|name=c2ms5ebe82883c4c02_26205534|id=c2ms5ebe82883c4c02_26205534|data-type=1|data-position=14|data-location=left|field_id=110|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe8292014ba3_15624834">
<label class="col-sm-6" for="c2ms5ebe8292014ba3_15624834">What is the roof made from?</label>
{FGEN:dbbv2_roof_type|name=c2ms5ebe8292014ba3_15624834|id=c2ms5ebe8292014ba3_15624834|data-type=1|data-position=15|data-location=left|field_id=111|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe82aaad7127_57149425">
<label class="col-sm-6" for="c2ms5ebe82aaad7127_57149425">What is the total insured value of the property?</label>
{FGEN:float_entry|name=c2ms5ebe82aaad7127_57149425|id=c2ms5ebe82aaad7127_57149425|data-type=2|data-position=16|data-location=left|field_id=99|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ebe82b4a092c6_43811695">
<label class="col-sm-6" for="c2ms5ebe82b4a092c6_43811695">ExternalRef</label>
{FGEN:text|name=c2ms5ebe82b4a092c6_43811695|id=c2ms5ebe82b4a092c6_43811695|data-type=5|data-position=17|data-location=left|field_id=90|revision_id=1}
</div>

<div class="form-heading custom-hidden">
<h4>Underwriting Information</h4>
</div>

<div class="required" id="parent-c2ms5f0700ead5c485_36435315">
<label class="col-sm-6" for="c2ms5f0700ead5c485_36435315">Calculated Limit</label>
{FGEN:float_entry|name=c2ms5f0700ead5c485_36435315|id=c2ms5f0700ead5c485_36435315|data-type=2|data-position=23|data-location=left|field_id=81|revision_id=1|readonly=true}
</div>

<div class="required" id="parent-c2ms6022776b2ad751_19371410">
<label class="col-sm-6" for="c2ms6022776b2ad751_19371410">Overlying Deductible Used</label>
{FGEN:c2ms6022776b2ad751_19371410|name=c2ms6022776b2ad751_19371410|id=c2ms6022776b2ad751_19371410|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1|readonly=true}
</div>

<div class="required" id="parent-c2ms601aaf6fe84a88_11395294">
<label class="col-sm-6" for="c2ms601aaf6fe84a88_11395294">Underlying Deductible Used</label>
{FGEN:c2ms601aaf6fe84a88_11395294|name=c2ms601aaf6fe84a88_11395294|id=c2ms601aaf6fe84a88_11395294|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1|readonly=true}
</div>

<div class="required" id="parent-c2ms5f0700e83625e5_41388976">
<label class="col-sm-6" for="c2ms5f0700e83625e5_41388976">Deductible Ratio</label>
{FGEN:float_entry|name=c2ms5f0700e83625e5_41388976|id=c2ms5f0700e83625e5_41388976|data-type=10|data-position=20|data-location=left|field_id=81|revision_id=1|readonly=true}
</div>

<div class="required" id="parent-c2ms5f0700ebc11416_86077698">
<label class="col-sm-6" for="c2ms5f0700ebc11416_86077698">Distance Load</label>
{FGEN:float_entry|name=c2ms5f0700ebc11416_86077698|id=c2ms5f0700ebc11416_86077698|data-type=10|data-position=24|data-location=left|field_id=81|revision_id=1|readonly=true}
</div>

<div class="required" id="parent-c2ms604b4fa2623586_30150508">
<label class="col-sm-6" for="c2ms604b4fa2623586_30150508">Distance from Coast Legacy Value</label>
{FGEN:float_entry|name=c2ms604b4fa2623586_30150508|id=c2ms604b4fa2623586_30150508|data-type=5|data-position=46|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms60cc3d63bac926_97739397">
<label class="col-sm-6" for="c2ms60cc3d63bac926_97739397">Location Identifier</label>
{FGEN:text|name=c2ms60cc3d63bac926_97739397|id=c2ms60cc3d63bac926_97739397|data-type=5|data-position=26|data-location=left|field_id=112|revision_id=1}
</div>

<div class="form-heading custom-hidden">
<h4>Underwriting Calculation</h4>
</div>

<div class="required" id="parent-c2ms5ffc41e2d2e5d2_80041972">
<label class="col-sm-6" for="c2ms5ffc41e2d2e5d2_80041972">Base Rate Factor</label>
{FGEN:c2ms5ffc41e2d2e5d2_80041972|name=c2ms5ffc41e2d2e5d2_80041972|id=c2ms5ffc41e2d2e5d2_80041972|data-type=10|data-position=bottom|data-location=left|field_id=118|revision_id=1|readonly=true}
</div>

<div class="required" id="parent-c2ms619b743d7eb6d0_36088824">
<label class="col-sm-6" for="c2ms619b743d7eb6d0_36088824">Distance Load Factor</label>
{FGEN:text|name=c2ms619b743d7eb6d0_36088824|id=c2ms619b743d7eb6d0_36088824|data-type=5|data-position=28|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms619b743d7a6081_92260171">
<label class="col-sm-6" for="c2ms619b743d7a6081_92260171">Roof Rate Factor</label>
{FGEN:text|name=c2ms619b743d7a6081_92260171|id=c2ms619b743d7a6081_92260171|data-type=5|data-position=29|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms619b743e07d0d8_83758263">
<label class="col-sm-6" for="c2ms619b743e07d0d8_83758263">Losses Rate Factor</label>
{FGEN:text|name=c2ms619b743e07d0d8_83758263|id=c2ms619b743e07d0d8_83758263|data-type=5|data-position=30|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms619cb8077ab492_39198672">
<label class="col-sm-6" for="c2ms619cb8077ab492_39198672">Building Age Factor</label>
{FGEN:c2ms619cb8077ab492_39198672|name=c2ms619cb8077ab492_39198672|id=c2ms619cb8077ab492_39198672|data-type=5|data-position=bottom|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms619cb80793a2b9_02034797">
<label class="col-sm-6" for="c2ms619cb80793a2b9_02034797">Roof Type Factor</label>
{FGEN:c2ms619cb80793a2b9_02034797|name=c2ms619cb80793a2b9_02034797|id=c2ms619cb80793a2b9_02034797|data-type=5|data-position=bottom|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ffc41f2536d68_61175868">
<label class="col-sm-6" for="c2ms5ffc41f2536d68_61175868">Credit Factor</label>
{FGEN:c2ms5ffc41f2536d68_61175868|name=c2ms5ffc41f2536d68_61175868|id=c2ms5ffc41f2536d68_61175868|data-type=10|data-position=bottom|data-location=left|field_id=118|revision_id=1|readonly=true}
</div>

<div class="required" id="parent-c2ms5ffc41f3a775a7_16038839">
<label class="col-sm-6" for="c2ms5ffc41f3a775a7_16038839">Deductible Load Factor</label>
{FGEN:c2ms5ffc41f3a775a7_16038839|name=c2ms5ffc41f3a775a7_16038839|id=c2ms5ffc41f3a775a7_16038839|data-type=10|data-position=bottom|data-location=left|field_id=118|revision_id=1|readonly=true}
</div>

<div class="required" id="parent-c2ms5ffc41f51a2c11_79991904">
<label class="col-sm-6" for="c2ms5ffc41f51a2c11_79991904">ROL</label>
{FGEN:c2ms5ffc41f51a2c11_79991904|name=c2ms5ffc41f51a2c11_79991904|id=c2ms5ffc41f51a2c11_79991904|data-type=10|data-position=bottom|data-location=left|field_id=118|revision_id=1|readonly=true}
</div>

<div class="required" id="parent-c2ms5ffc41f6736ea7_29507561">
<label class="col-sm-6" for="c2ms5ffc41f6736ea7_29507561">Maximum ROL</label>
{FGEN:c2ms5ffc41f6736ea7_29507561|name=c2ms5ffc41f6736ea7_29507561|id=c2ms5ffc41f6736ea7_29507561|data-type=10|data-position=bottom|data-location=left|field_id=118|revision_id=1|readonly=true}
</div>

<div class="form-heading custom-hidden">
<h4>Grouped Underwriting Information</h4>
</div>

<div class="required" id="parent-c2ms5fd0d0a14665e2_70058467">
<label class="col-sm-6" for="c2ms5fd0d0a14665e2_70058467">Max Limit</label>
{FGEN:c2ms5fd0d0a14665e2_70058467|name=c2ms5fd0d0a14665e2_70058467|id=c2ms5fd0d0a14665e2_70058467|data-type=10|data-position=bottom|data-location=left|field_id=118|revision_id=1|readonly=true}
</div>

<div class="required" id="parent-c2ms5fd0d0a29b8f05_46533208">
<label class="col-sm-6" for="c2ms5fd0d0a29b8f05_46533208">Weighted Avg ROL</label>
{FGEN:c2ms5fd0d0a29b8f05_46533208|name=c2ms5fd0d0a29b8f05_46533208|id=c2ms5fd0d0a29b8f05_46533208|data-type=10|data-position=bottom|data-location=left|field_id=118|revision_id=1|readonly=true}
</div>

<div class="required" id="parent-c2ms5fd0d0a3c311c0_89547181">
<label class="col-sm-6" for="c2ms5fd0d0a3c311c0_89547181">Max Grouped ROL</label>
{FGEN:c2ms5fd0d0a3c311c0_89547181|name=c2ms5fd0d0a3c311c0_89547181|id=c2ms5fd0d0a3c311c0_89547181|data-type=10|data-position=bottom|data-location=left|field_id=118|revision_id=1|readonly=true}
</div>

<div class="required" id="parent-c2ms5fd0d0a50bcc76_36938064">
<label class="col-sm-6" for="c2ms5fd0d0a50bcc76_36938064">Grouped TIV</label>
{FGEN:c2ms5fd0d0a50bcc76_36938064|name=c2ms5fd0d0a50bcc76_36938064|id=c2ms5fd0d0a50bcc76_36938064|data-type=10|data-position=bottom|data-location=left|field_id=118|revision_id=1|readonly=true}
</div>

<div class="required" id="parent-c2ms5fd0d0a645d219_92656045">
<label class="col-sm-6" for="c2ms5fd0d0a645d219_92656045">Grouped Overlying Deductible</label>
{FGEN:c2ms5fd0d0a645d219_92656045|name=c2ms5fd0d0a645d219_92656045|id=c2ms5fd0d0a645d219_92656045|data-type=10|data-position=bottom|data-location=left|field_id=118|revision_id=1|readonly=true}
</div>

<div class="required" id="parent-c2ms5fd0d0a775fc22_48704390">
<label class="col-sm-6" for="c2ms5fd0d0a775fc22_48704390">Grouped Limit</label>
{FGEN:c2ms5fd0d0a775fc22_48704390|name=c2ms5fd0d0a775fc22_48704390|id=c2ms5fd0d0a775fc22_48704390|data-type=10|data-position=bottom|data-location=left|field_id=118|revision_id=1|readonly=true}
</div>

<div class="required" id="parent-c2ms5fd0d0a8a10c10_49835334">
<label class="col-sm-6" for="c2ms5fd0d0a8a10c10_49835334">Grouped Underlying Deductible</label>
{FGEN:c2ms5fd0d0a8a10c10_49835334|name=c2ms5fd0d0a8a10c10_49835334|id=c2ms5fd0d0a8a10c10_49835334|data-type=10|data-position=bottom|data-location=left|field_id=118|revision_id=1|readonly=true}
</div>

<div class="required" id="parent-c2ms5fd0d0a9c8abd5_15945776">
<label class="col-sm-6" for="c2ms5fd0d0a9c8abd5_15945776">Grouped Deductible Load</label>
{FGEN:c2ms5fd0d0a9c8abd5_15945776|name=c2ms5fd0d0a9c8abd5_15945776|id=c2ms5fd0d0a9c8abd5_15945776|data-type=10|data-position=bottom|data-location=left|field_id=118|revision_id=1|readonly=true}
</div>

<div class="required" id="parent-c2ms5fd0d0ab00d475_33762204">
<label class="col-sm-6" for="c2ms5fd0d0ab00d475_33762204">Grouped ROL</label>
{FGEN:c2ms5fd0d0ab00d475_33762204|name=c2ms5fd0d0ab00d475_33762204|id=c2ms5fd0d0ab00d475_33762204|data-type=10|data-position=bottom|data-location=left|field_id=118|revision_id=1|readonly=true}
</div>


<div class="form-heading custom-hidden">
<h4>MTA Info</h4>
</div>

<div class="required" id="parent-c2ms5f7d966bafe777_62101896">
<label class="col-sm-6" for="c2ms5f7d966bafe777_62101896">Removed</label>
{FGEN:yes_no|name=c2ms5f7d966bafe777_62101896|id=c2ms5f7d966bafe777_62101896|data-type=1|data-position=25|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms5f7d966dc73dd7_07375897">
<label class="col-sm-6" for="c2ms5f7d966dc73dd7_07375897">Removed Date</label>
{FGEN:datepicker|name=c2ms5f7d966dc73dd7_07375897|id=c2ms5f7d966dc73dd7_07375897|data-type=3|data-position=26|data-location=left|field_id=113|revision_id=1}
</div>

<div class="required" id="parent-c2ms5f7d9670042e14_62770498">
<label class="col-sm-6" for="c2ms5f7d9670042e14_62770498">Added</label>
{FGEN:yes_no|name=c2ms5f7d9670042e14_62770498|id=c2ms5f7d9670042e14_62770498|data-type=1|data-position=27|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms5f7d96730a71a7_39400430">
<label class="col-sm-6" for="c2ms5f7d96730a71a7_39400430">Added Date</label>
{FGEN:datepicker|name=c2ms5f7d96730a71a7_39400430|id=c2ms5f7d96730a71a7_39400430|data-type=3|data-position=28|data-location=left|field_id=113|revision_id=1}
</div>

<div class="required" id="parent-c2ms5f7d967540d7b7_70933763">
<label class="col-sm-6" for="c2ms5f7d967540d7b7_70933763">Edited</label>
{FGEN:yes_no|name=c2ms5f7d967540d7b7_70933763|id=c2ms5f7d967540d7b7_70933763|data-type=1|data-position=29|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms5f7d96793b33f2_78330955">
<label class="col-sm-6" for="c2ms5f7d96793b33f2_78330955">Edited Date</label>
{FGEN:datepicker|name=c2ms5f7d96793b33f2_78330955|id=c2ms5f7d96793b33f2_78330955|data-type=3|data-position=30|data-location=left|field_id=113|revision_id=1}
</div>

<div class="required" id="parent-c2ms5f7d967bcf2f00_41654048">
<label class="col-sm-6" for="c2ms5f7d967bcf2f00_41654048">Rated</label>
{FGEN:yes_no|name=c2ms5f7d967bcf2f00_41654048|id=c2ms5f7d967bcf2f00_41654048|data-type=1|data-position=31|data-location=left|field_id=117|revision_id=1}
</div>


</div>

</div>',
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 35,
                'date_created' => '2020-06-04 17:32:16',
                'id' => 31,
                'identifier' => 'ca82be88-c5af-11ec-ac91-0223a3b30884',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 0,
                'rev_ds_code' => 'stpv2_05_additional_insured_mi',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2_05_Additional_Insured_MI',
                'rev_hb' => '',
                'rev_source' => '<div id="ds-column-left">

<div class="form-multi-box">

<div class="form-heading custom-hidden">
<h4>Additional Insured Information: {COUNT}</h4>
</div>

<div class="required" id="parent-c2ms5ec53b72129818_18476350">
<label class="col-sm-6" for="c2ms5ec53b72129818_18476350">Additional Insured Name</label>
{FGEN:c2ms5ec53b72129818_18476350|name=c2ms5ec53b72129818_18476350|id=c2ms5ec53b72129818_18476350|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53c6c11abe6_19846832">
<label class="col-sm-6" for="c2ms5ec53c6c11abe6_19846832">Effective Date</label>
{FGEN:c2ms5ec53c6c11abe6_19846832|name=c2ms5ec53c6c11abe6_19846832|id=c2ms5ec53c6c11abe6_19846832|data-type=3|data-position=bottom|data-location=left|field_id=113|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53c7777ed12_04876805">
<label class="col-sm-6" for="c2ms5ec53c7777ed12_04876805">Full Address Geocode Data</label>
{FGEN:c2ms5ec53c7777ed12_04876805|name=c2ms5ec53c7777ed12_04876805|id=c2ms5ec53c7777ed12_04876805|data-type=4|data-position=bottom|data-location=left|field_id=114|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53c80baeab3_02465092">
<label class="col-sm-6" for="c2ms5ec53c80baeab3_02465092">Address Line 1</label>
{FGEN:c2ms5ec53c80baeab3_02465092|name=c2ms5ec53c80baeab3_02465092|id=c2ms5ec53c80baeab3_02465092|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53c811ae0a5_31779471">
<label class="col-sm-6" for="c2ms5ec53c811ae0a5_31779471">Address Line 2</label>
{FGEN:c2ms5ec53c811ae0a5_31779471|name=c2ms5ec53c811ae0a5_31779471|id=c2ms5ec53c811ae0a5_31779471|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53c89a7bcd4_10455761">
<label class="col-sm-6" for="c2ms5ec53c89a7bcd4_10455761">Town/City</label>
{FGEN:c2ms5ec53c89a7bcd4_10455761|name=c2ms5ec53c89a7bcd4_10455761|id=c2ms5ec53c89a7bcd4_10455761|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53c94a23b59_91624278">
<label class="col-sm-6" for="c2ms5ec53c94a23b59_91624278">State</label>
{FGEN:c2ms5ec53c94a23b59_91624278|name=c2ms5ec53c94a23b59_91624278|id=c2ms5ec53c94a23b59_91624278|data-type=5|data-position=bottom|data-location=left|field_id=115|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53ca03ce907_90144927">
<label class="col-sm-6" for="c2ms5ec53ca03ce907_90144927">Zip</label>
{FGEN:c2ms5ec53ca03ce907_90144927|name=c2ms5ec53ca03ce907_90144927|id=c2ms5ec53ca03ce907_90144927|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53cabe507b8_34125749">
<label class="col-sm-6" for="c2ms5ec53cabe507b8_34125749">Country</label>
{FGEN:c2ms5ec53cabe507b8_34125749|name=c2ms5ec53cabe507b8_34125749|id=c2ms5ec53cabe507b8_34125749|data-type=1|data-position=bottom|data-location=left|field_id=116|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53cb3bd7db7_67745785">
<label class="col-sm-6" for="c2ms5ec53cb3bd7db7_67745785">Latitude</label>
{FGEN:c2ms5ec53cb3bd7db7_67745785|name=c2ms5ec53cb3bd7db7_67745785|id=c2ms5ec53cb3bd7db7_67745785|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53cb463dff3_86640846">
<label class="col-sm-6" for="c2ms5ec53cb463dff3_86640846">Longitude</label>
{FGEN:c2ms5ec53cb463dff3_86640846|name=c2ms5ec53cb463dff3_86640846|id=c2ms5ec53cb463dff3_86640846|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53cc2d4fa78_38699147">
<label class="col-sm-6" for="c2ms5ec53cc2d4fa78_38699147">Include waiver of subrogation</label>
{FGEN:c2ms5ec53cc2d4fa78_38699147|name=c2ms5ec53cc2d4fa78_38699147|id=c2ms5ec53cc2d4fa78_38699147|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53cc37a1fc2_15593931">
<label class="col-sm-6" for="c2ms5ec53cc37a1fc2_15593931">Confirm the Additional Insured’s work accounts for no more than 15% of the original insured’s work</label>
{FGEN:c2ms5ec53cc37a1fc2_15593931|name=c2ms5ec53cc37a1fc2_15593931|id=c2ms5ec53cc37a1fc2_15593931|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 36,
                'date_created' => '2020-06-04 17:32:16',
                'id' => 32,
                'identifier' => 'ca82c1d4-c5af-11ec-ac91-0223a3b30884',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 0,
                'rev_ds_code' => 'stpv2_13_stock_location_mi',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2_13_Stock_Location_MI',
                'rev_hb' => '',
                'rev_source' => '<div id="ds-column-left">

<div class="form-multi-box">

<div class="form-heading custom-hidden">
<h4>Stock Location Information: {COUNT}</h4>
</div>

<div class="required" id="parent-c2ms5ec697d8710fd9_28838239">
<label class="col-sm-6" for="c2ms5ec697d8710fd9_28838239">Full Address Geocode Data</label>
{FGEN:c2ms5ec697d8710fd9_28838239|name=c2ms5ec697d8710fd9_28838239|id=c2ms5ec697d8710fd9_28838239|data-type=4|data-position=bottom|data-location=left|field_id=114|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec697df2ca062_87168737">
<label class="col-sm-6" for="c2ms5ec697df2ca062_87168737">Address Line 1</label>
{FGEN:c2ms5ec697df2ca062_87168737|name=c2ms5ec697df2ca062_87168737|id=c2ms5ec697df2ca062_87168737|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec697dfa6e8b1_03906848">
<label class="col-sm-6" for="c2ms5ec697dfa6e8b1_03906848">Address Line 2</label>
{FGEN:c2ms5ec697dfa6e8b1_03906848|name=c2ms5ec697dfa6e8b1_03906848|id=c2ms5ec697dfa6e8b1_03906848|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec697f7ba2976_56998116">
<label class="col-sm-6" for="c2ms5ec697f7ba2976_56998116">Town/City</label>
{FGEN:c2ms5ec697f7ba2976_56998116|name=c2ms5ec697f7ba2976_56998116|id=c2ms5ec697f7ba2976_56998116|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec698006f8de6_33144338">
<label class="col-sm-6" for="c2ms5ec698006f8de6_33144338">State</label>
{FGEN:c2ms5ec698006f8de6_33144338|name=c2ms5ec698006f8de6_33144338|id=c2ms5ec698006f8de6_33144338|data-type=5|data-position=bottom|data-location=left|field_id=115|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec69819972360_91728517">
<label class="col-sm-6" for="c2ms5ec69819972360_91728517">Zip</label>
{FGEN:c2ms5ec69819972360_91728517|name=c2ms5ec69819972360_91728517|id=c2ms5ec69819972360_91728517|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec69845010a44_46286210">
<label class="col-sm-6" for="c2ms5ec69845010a44_46286210">County</label>
{FGEN:c2ms5ec69845010a44_46286210|name=c2ms5ec69845010a44_46286210|id=c2ms5ec69845010a44_46286210|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec6984d763094_24336160">
<label class="col-sm-6" for="c2ms5ec6984d763094_24336160">Country</label>
{FGEN:c2ms5ec6984d763094_24336160|name=c2ms5ec6984d763094_24336160|id=c2ms5ec6984d763094_24336160|data-type=1|data-position=bottom|data-location=left|field_id=116|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec69862b48375_80481180">
<label class="col-sm-6" for="c2ms5ec69862b48375_80481180">Latitude</label>
{FGEN:c2ms5ec69862b48375_80481180|name=c2ms5ec69862b48375_80481180|id=c2ms5ec69862b48375_80481180|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec698634432a6_41931984">
<label class="col-sm-6" for="c2ms5ec698634432a6_41931984">Longitude</label>
{FGEN:c2ms5ec698634432a6_41931984|name=c2ms5ec698634432a6_41931984|id=c2ms5ec698634432a6_41931984|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec6986c96aa70_30379017">
<label class="col-sm-6" for="c2ms5ec6986c96aa70_30379017">Would you like to add a name for this location?</label>
{FGEN:c2ms5ec6986c96aa70_30379017|name=c2ms5ec6986c96aa70_30379017|id=c2ms5ec6986c96aa70_30379017|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec6987973bae6_79948108">
<label class="col-sm-6" for="c2ms5ec6987973bae6_79948108">Average Inventory TIV</label>
{FGEN:c2ms5ec6987973bae6_79948108|name=c2ms5ec6987973bae6_79948108|id=c2ms5ec6987973bae6_79948108|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec6987a0cfef9_80984264">
<label class="col-sm-6" for="c2ms5ec6987a0cfef9_80984264">Maximum Inventory TIV</label>
{FGEN:c2ms5ec6987a0cfef9_80984264|name=c2ms5ec6987a0cfef9_80984264|id=c2ms5ec6987a0cfef9_80984264|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="form-multi-box">
</br>
<h4>Natural catastrophe deductibles applicable for this location</h4>

<div class="required" id="parent-c2ms5ec698a8af83e2_18692805">
<label class="col-sm-6" for="c2ms5ec698a8af83e2_18692805">Wind deductible</label>
{FGEN:c2ms5ec698a8af83e2_18692805|name=c2ms5ec698a8af83e2_18692805|id=c2ms5ec698a8af83e2_18692805|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec698a941d429_10252472">
<label class="col-sm-6" for="c2ms5ec698a941d429_10252472">Flood deductible</label>
{FGEN:c2ms5ec698a941d429_10252472|name=c2ms5ec698a941d429_10252472|id=c2ms5ec698a941d429_10252472|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec698b79ef3d9_60450778">
<label class="col-sm-6" for="c2ms5ec698b79ef3d9_60450778">Earthquake deductible</label>
{FGEN:c2ms5ec698b79ef3d9_60450778|name=c2ms5ec698b79ef3d9_60450778|id=c2ms5ec698b79ef3d9_60450778|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

</div>

<div class="required" id="parent-c2ms5ec698cdcce9a7_99802441">
<label class="col-sm-6" for="c2ms5ec698cdcce9a7_99802441">What is the number of stock losses in the past five years at this location?</label>
{FGEN:c2ms5ec698cdcce9a7_99802441|name=c2ms5ec698cdcce9a7_99802441|id=c2ms5ec698cdcce9a7_99802441|data-type=1|data-position=bottom|data-location=left|field_id=119|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec698e0be6723_09408505">
<label class="col-sm-6" for="c2ms5ec698e0be6723_09408505">What is the total value of the losses?</label>
{FGEN:c2ms5ec698e0be6723_09408505|name=c2ms5ec698e0be6723_09408505|id=c2ms5ec698e0be6723_09408505|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec698f4dbee57_82362544">
<label class="col-sm-6" for="c2ms5ec698f4dbee57_82362544">What fire protection factors are there?</label>
{FGEN:c2ms5ec698f4dbee57_82362544|name=c2ms5ec698f4dbee57_82362544[]|id=c2ms5ec698f4dbee57_82362544|data-type=1|data-position=bottom|data-location=left|field_id=120|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec698f6aff5e8_78275633">
<label class="col-sm-6" for="c2ms5ec698f6aff5e8_78275633">Are there any additional security details?</label>
{FGEN:c2ms5ec698f6aff5e8_78275633|name=c2ms5ec698f6aff5e8_78275633[]|id=c2ms5ec698f6aff5e8_78275633|data-type=1|data-position=bottom|data-location=left|field_id=121|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec69924974ee3_60737171">
<label class="col-sm-6" for="c2ms5ec69924974ee3_60737171">What is the ISO Code?</label>
{FGEN:c2ms5ec69924974ee3_60737171|name=c2ms5ec69924974ee3_60737171|id=c2ms5ec69924974ee3_60737171|data-type=1|data-position=bottom|data-location=left|field_id=122|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec69933b17c84_98263816">
<label class="col-sm-6" for="c2ms5ec69933b17c84_98263816">ISO code is unknown</label>
{FGEN:c2ms5ec69933b17c84_98263816|name=c2ms5ec69933b17c84_98263816|id=c2ms5ec69933b17c84_98263816|data-type=1|data-position=bottom|data-location=left|field_id=123|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec69945905e07_44505951">
<label class="col-sm-6" for="c2ms5ec69945905e07_44505951">ExternalRef</label>
{FGEN:c2ms5ec69945905e07_44505951|name=c2ms5ec69945905e07_44505951|id=c2ms5ec69945905e07_44505951|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 37,
                'date_created' => '2020-06-04 17:32:16',
                'id' => 33,
                'identifier' => 'ca82c31f-c5af-11ec-ac91-0223a3b30884',
                'image_url' => NULL,
                'location_id' => 1,
                'num_entries' => 0,
                'rev_ds_code' => 'stpv2_09_transit_details',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2_09_Transit_Details',
                'rev_hb' => '',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Transit Details</h4>
</div>

<div class="required" id="parent-c2ms5ec668bfee83a4_24874863">
<label class="col-sm-6" for="c2ms5ec668bfee83a4_24874863">What is the number of transit losses in the past five years?</label>
{FGEN:c2ms5ec668bfee83a4_24874863|name=c2ms5ec668bfee83a4_24874863|id=c2ms5ec668bfee83a4_24874863|data-type=1|data-position=bottom|data-location=left|field_id=124|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec668d32dc5f4_32677040">
<label class="col-sm-6" for="c2ms5ec668d32dc5f4_32677040">What is the total value of the losses?</label>
{FGEN:c2ms5ec668d32dc5f4_32677040|name=c2ms5ec668d32dc5f4_32677040|id=c2ms5ec668d32dc5f4_32677040|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec668d3b0c8e8_18081570">
<label class="col-sm-6" for="c2ms5ec668d3b0c8e8_18081570">What is the transit deductible required?</label>
{FGEN:c2ms5ec668d3b0c8e8_18081570|name=c2ms5ec668d3b0c8e8_18081570|id=c2ms5ec668d3b0c8e8_18081570|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 38,
                'date_created' => '2020-06-04 17:32:16',
                'id' => 34,
                'identifier' => 'ca82c417-c5af-11ec-ac91-0223a3b30884',
                'image_url' => NULL,
                'location_id' => 1,
                'num_entries' => 0,
                'rev_ds_code' => 'stpv2_01_type_of_cover',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2_01_Type_of_Cover',
                'rev_hb' => '',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Stock Throughput cover</h4>
</div>

<div class="required" id="parent-c2ms5ec535dd28e048_90502334">
<label class="col-sm-6" for="c2ms5ec535dd28e048_90502334">Select a Type of Cover</label>
{FGEN:c2ms5ec535dd28e048_90502334|name=c2ms5ec535dd28e048_90502334|id=c2ms5ec535dd28e048_90502334|data-type=1|data-position=bottom|data-location=left|field_id=125|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 39,
                'date_created' => '2020-06-04 17:32:16',
                'id' => 35,
                'identifier' => 'ca82c4c7-c5af-11ec-ac91-0223a3b30884',
                'image_url' => NULL,
                'location_id' => 1,
                'num_entries' => 0,
                'rev_ds_code' => 'stpv2_02_inception_date',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2_02_Inception_Date',
                'rev_hb' => '',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Inception Date</h4>
</div>

<div class="required" id="parent-c2ms5ec5368f067469_44213761">
<label class="col-sm-6" for="c2ms5ec5368f067469_44213761">Inception Date</label>
{FGEN:c2ms5ec5368f067469_44213761|name=c2ms5ec5368f067469_44213761|id=c2ms5ec5368f067469_44213761|data-type=3|data-position=bottom|data-location=left|field_id=113|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec5368f9d2c12_82527596">
<label class="col-sm-6" for="c2ms5ec5368f9d2c12_82527596">Expiry Date</label>
{FGEN:c2ms5ec5368f9d2c12_82527596|name=c2ms5ec5368f9d2c12_82527596|id=c2ms5ec5368f9d2c12_82527596|data-type=3|data-position=bottom|data-location=left|field_id=113|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 40,
                'date_created' => '2020-06-04 17:32:16',
                'id' => 36,
                'identifier' => 'ca82c577-c5af-11ec-ac91-0223a3b30884',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 0,
                'rev_ds_code' => 'stpv2_11_outgoing_transit_details',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2_11_Outgoing_Transit_Details',
                'rev_hb' => '',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Outgoing Transit Details</h4>
</div>

<div class="required" id="parent-c2ms5ec67d270f5a29_25376064">
<label class="col-sm-6" for="c2ms5ec67d270f5a29_25376064">What is the basis of the outgoing valuation?</label>
{FGEN:c2ms5ec67d270f5a29_25376064|name=c2ms5ec67d270f5a29_25376064|id=c2ms5ec67d270f5a29_25376064|data-type=1|data-position=bottom|data-location=left|field_id=126|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec67d4e37c756_17893872">
<label class="col-sm-6" for="c2ms5ec67d4e37c756_17893872">What is the total outgoing value shipped?</label>
{FGEN:c2ms5ec67d4e37c756_17893872|name=c2ms5ec67d4e37c756_17893872|id=c2ms5ec67d4e37c756_17893872|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec67d5a7aedb9_51738121">
<label class="col-sm-6" for="c2ms5ec67d5a7aedb9_51738121">Average value per shipment</label>
{FGEN:c2ms5ec67d5a7aedb9_51738121|name=c2ms5ec67d5a7aedb9_51738121|id=c2ms5ec67d5a7aedb9_51738121|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec67d5b0116f2_78308254">
<label class="col-sm-6" for="c2ms5ec67d5b0116f2_78308254">Maximum value per shipment</label>
{FGEN:c2ms5ec67d5b0116f2_78308254|name=c2ms5ec67d5b0116f2_78308254|id=c2ms5ec67d5b0116f2_78308254|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec67d6d8f6157_27931878">
<label class="col-sm-6" for="c2ms5ec67d6d8f6157_27931878">Transit limit calculated</label>
{FGEN:c2ms5ec67d6d8f6157_27931878|name=c2ms5ec67d6d8f6157_27931878|id=c2ms5ec67d6d8f6157_27931878|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<br>
<h4>Where are the goods being shipped to?</h4>

<div class="required" id="parent-c2ms5ec67d7b3a7176_36342081">
<label class="col-sm-6" for="c2ms5ec67d7b3a7176_36342081">North America %</label>
{FGEN:c2ms5ec67d7b3a7176_36342081|name=c2ms5ec67d7b3a7176_36342081|id=c2ms5ec67d7b3a7176_36342081|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec67d7bb649b5_14336502">
<label class="col-sm-6" for="c2ms5ec67d7bb649b5_14336502">South America %</label>
{FGEN:c2ms5ec67d7bb649b5_14336502|name=c2ms5ec67d7bb649b5_14336502|id=c2ms5ec67d7bb649b5_14336502|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec67d7c653383_87667752">
<label class="col-sm-6" for="c2ms5ec67d7c653383_87667752">Europe %</label>
{FGEN:c2ms5ec67d7c653383_87667752|name=c2ms5ec67d7c653383_87667752|id=c2ms5ec67d7c653383_87667752|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec67d7d1215d1_99106447">
<label class="col-sm-6" for="c2ms5ec67d7d1215d1_99106447">Asia / Pacific %</label>
{FGEN:c2ms5ec67d7d1215d1_99106447|name=c2ms5ec67d7d1215d1_99106447|id=c2ms5ec67d7d1215d1_99106447|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec67d7da319c3_25968608">
<label class="col-sm-6" for="c2ms5ec67d7da319c3_25968608">Other %</label>
{FGEN:c2ms5ec67d7da319c3_25968608|name=c2ms5ec67d7da319c3_25968608|id=c2ms5ec67d7da319c3_25968608|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec67d9a606f74_23572853">
<label class="col-sm-6" for="c2ms5ec67d9a606f74_23572853">Please determine the insured responsibility level for the transit %</label>
{FGEN:c2ms5ec67d9a606f74_23572853|name=c2ms5ec67d9a606f74_23572853|id=c2ms5ec67d9a606f74_23572853|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6041f232297aa1_82183024">
<label class="col-sm-6" for="c2ms6041f232297aa1_82183024">Third party %</label>
{FGEN:c2ms6041f232297aa1_82183024|name=c2ms6041f232297aa1_82183024|id=c2ms6041f232297aa1_82183024|data-type=2|data-position=bottom|data-location=left|field_id=81|revision_id=1}
</div>

</div>
',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 41,
                'date_created' => '2020-06-04 17:32:16',
                'id' => 37,
                'identifier' => 'ca82c689-c5af-11ec-ac91-0223a3b30884',
                'image_url' => NULL,
                'location_id' => 1,
                'num_entries' => 0,
                'rev_ds_code' => 'stpv2_12_stock_details',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2_12_Stock_Details',
                'rev_hb' => '',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Storage Details</h4>
</div>

<div class="required" id="parent-c2ms5ec67fdd8f2d09_19627340">
<label class="col-sm-6" for="c2ms5ec67fdd8f2d09_19627340">Storage deductible</label>
{FGEN:c2ms5ec67fdd8f2d09_19627340|name=c2ms5ec67fdd8f2d09_19627340|id=c2ms5ec67fdd8f2d09_19627340|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec67fde34cc28_41559131">
<label class="col-sm-6" for="c2ms5ec67fde34cc28_41559131">Storage limit</label>
{FGEN:c2ms5ec67fde34cc28_41559131|name=c2ms5ec67fde34cc28_41559131|id=c2ms5ec67fde34cc28_41559131|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec67feb9a4ff4_84769684">
<label class="col-sm-6" for="c2ms5ec67feb9a4ff4_84769684">I would like to request a different storage limit</label>
{FGEN:c2ms5ec67feb9a4ff4_84769684|name=c2ms5ec67feb9a4ff4_84769684|id=c2ms5ec67feb9a4ff4_84769684|data-type=1|data-position=bottom|data-location=left|field_id=123|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec67ffdc220f1_56705300">
<label class="col-sm-6" for="c2ms5ec67ffdc220f1_56705300">No. of Locations</label>
{FGEN:c2ms5ec67ffdc220f1_56705300|name=c2ms5ec67ffdc220f1_56705300|id=c2ms5ec67ffdc220f1_56705300|data-type=1|data-position=bottom|data-location=left|field_id=127|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 42,
                'date_created' => '2020-06-04 17:32:16',
                'id' => 38,
                'identifier' => 'ca82c9b0-c5af-11ec-ac91-0223a3b30884',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 0,
                'rev_ds_code' => 'stpv2_07_surplus_lines',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2_07_Surplus_Lines',
                'rev_hb' => '',
                'rev_source' => '<div id="ds-column-left">

<div class="required" id="parent-c2ms5ec54625d59d81_46936231">
<label class="col-sm-6" for="c2ms5ec54625d59d81_46936231">What is the state of filing?</label>
{FGEN:usa_states_main|name=c2ms5ec54625d59d81_46936231|id=c2ms5ec54625d59d81_46936231|data-type=5|data-position=1|data-location=left|field_id=115|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec54634bc7677_64016437">
<label class="col-sm-6" for="c2ms5ec54634bc7677_64016437">Do you wish to complete the Surplus Lines details now?</label>
{FGEN:yes_no|name=c2ms5ec54634bc7677_64016437|id=c2ms5ec54634bc7677_64016437|data-type=1|data-position=2|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec54869d3ffb6_55894902">
<label class="col-sm-6" for="c2ms5ec54869d3ffb6_55894902">Name</label>
{FGEN:text|name=c2ms5ec54869d3ffb6_55894902|id=c2ms5ec54869d3ffb6_55894902|data-type=5|data-position=3|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec5486e9afa89_99982436">
<label class="col-sm-6" for="c2ms5ec5486e9afa89_99982436">License Number</label>
{FGEN:text|name=c2ms5ec5486e9afa89_99982436|id=c2ms5ec5486e9afa89_99982436|data-type=5|data-position=4|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec548774ab826_99963520">
<label class="col-sm-6" for="c2ms5ec548774ab826_99963520">Full Address Geocode Data</label>
{FGEN:textarea|name=c2ms5ec548774ab826_99963520|id=c2ms5ec548774ab826_99963520|data-type=4|data-position=5|data-location=left|field_id=114|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec5488042b4e4_46665960">
<label class="col-sm-6" for="c2ms5ec5488042b4e4_46665960">Address Line 1</label>
{FGEN:text|name=c2ms5ec5488042b4e4_46665960|id=c2ms5ec5488042b4e4_46665960|data-type=5|data-position=6|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec54880ba8257_59939377">
<label class="col-sm-6" for="c2ms5ec54880ba8257_59939377">Address Line 2</label>
{FGEN:text|name=c2ms5ec54880ba8257_59939377|id=c2ms5ec54880ba8257_59939377|data-type=5|data-position=7|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec549dfa04554_50707244">
<label class="col-sm-6" for="c2ms5ec549dfa04554_50707244">Town/City</label>
{FGEN:text|name=c2ms5ec549dfa04554_50707244|id=c2ms5ec549dfa04554_50707244|data-type=5|data-position=8|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec54c83099d56_20927837">
<label class="col-sm-6" for="c2ms5ec54c83099d56_20927837">State</label>
{FGEN:usa_states_main|name=c2ms5ec54c83099d56_20927837|id=c2ms5ec54c83099d56_20927837|data-type=5|data-position=9|data-location=left|field_id=115|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec54c8a8b3ce1_97984064">
<label class="col-sm-6" for="c2ms5ec54c8a8b3ce1_97984064">Zip</label>
{FGEN:text|name=c2ms5ec54c8a8b3ce1_97984064|id=c2ms5ec54c8a8b3ce1_97984064|data-type=5|data-position=10|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec54c92b28000_66509774">
<label class="col-sm-6" for="c2ms5ec54c92b28000_66509774">Country</label>
{FGEN:country|name=c2ms5ec54c92b28000_66509774|id=c2ms5ec54c92b28000_66509774|data-type=1|data-position=11|data-location=left|field_id=116|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec54c9aa2be82_77272325">
<label class="col-sm-6" for="c2ms5ec54c9aa2be82_77272325">Latitude</label>
{FGEN:text|name=c2ms5ec54c9aa2be82_77272325|id=c2ms5ec54c9aa2be82_77272325|data-type=5|data-position=12|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec54c9b295d64_49186549">
<label class="col-sm-6" for="c2ms5ec54c9b295d64_49186549">Longitude</label>
{FGEN:text|name=c2ms5ec54c9b295d64_49186549|id=c2ms5ec54c9b295d64_49186549|data-type=5|data-position=13|data-location=left|field_id=112|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 43,
                'date_created' => '2020-06-04 17:32:16',
                'id' => 39,
                'identifier' => 'ca82ca91-c5af-11ec-ac91-0223a3b30884',
                'image_url' => NULL,
                'location_id' => 1,
                'num_entries' => 0,
                'rev_ds_code' => 'stpv2_03_target_price',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2_03_Target_Price',
                'rev_hb' => '',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Target Price Information</h4>
</div>

<div class="required" id="parent-c2ms5ec536e4d84b02_15805186">
<label class="col-sm-6" for="c2ms5ec536e4d84b02_15805186">Do you wish to set a target price?</label>
{FGEN:c2ms5ec536e4d84b02_15805186|name=c2ms5ec536e4d84b02_15805186|id=c2ms5ec536e4d84b02_15805186|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec536e8be82d1_24705591">
<label class="col-sm-6" for="c2ms5ec536e8be82d1_24705591">What target price would you like to set?</label>
{FGEN:c2ms5ec536e8be82d1_24705591|name=c2ms5ec536e8be82d1_24705591|id=c2ms5ec536e8be82d1_24705591|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 44,
                'date_created' => '2020-06-04 17:32:16',
                'id' => 40,
                'identifier' => 'ca82cb37-c5af-11ec-ac91-0223a3b30884',
                'image_url' => NULL,
                'location_id' => 1,
                'num_entries' => 0,
                'rev_ds_code' => 'stpv2_14_confirmation',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2_14_Confirmation',
                'rev_hb' => '',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Confirmation</h4>
</div>

<div class="required" id="parent-c2ms5ec69a753fc4d3_08700834">
<label class="col-sm-6" for="c2ms5ec69a753fc4d3_08700834">The risk submitted is on a ground up full value basis</label>
{FGEN:c2ms5ec69a753fc4d3_08700834|name=c2ms5ec69a753fc4d3_08700834|id=c2ms5ec69a753fc4d3_08700834|data-type=1|data-position=bottom|data-location=left|field_id=123|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec69a75cc9e12_49784637">
<label class="col-sm-6" for="c2ms5ec69a75cc9e12_49784637">None of the locations entered are Retail Locations</label>
{FGEN:c2ms5ec69a75cc9e12_49784637|name=c2ms5ec69a75cc9e12_49784637|id=c2ms5ec69a75cc9e12_49784637|data-type=1|data-position=bottom|data-location=left|field_id=123|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec69a7653e0e3_82679912">
<label class="col-sm-6" for="c2ms5ec69a7653e0e3_82679912">I confirm that all information entered is correct to the best of my knowledge.</label>
{FGEN:c2ms5ec69a7653e0e3_82679912|name=c2ms5ec69a7653e0e3_82679912|id=c2ms5ec69a7653e0e3_82679912|data-type=1|data-position=bottom|data-location=left|field_id=123|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec69a76ca7756_93309082">
<label class="col-sm-6" for="c2ms5ec69a76ca7756_93309082">Trigger automatic referral for policy</label>
{FGEN:c2ms5ec69a76ca7756_93309082|name=c2ms5ec69a76ca7756_93309082|id=c2ms5ec69a76ca7756_93309082|data-type=1|data-position=bottom|data-location=left|field_id=123|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 45,
                'date_created' => '2020-06-04 17:32:16',
                'id' => 41,
                'identifier' => 'ca82cbe0-c5af-11ec-ac91-0223a3b30884',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 0,
                'rev_ds_code' => 'stpv2_06_loss_payees_mi',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2_06_Loss_Payees_MI',
                'rev_hb' => '',
                'rev_source' => '<div id="ds-column-left">

<div class="form-multi-box">

<div class="form-heading custom-hidden">
<h4>Loss Payee Information: {COUNT}</h4>
</div>

<div class="required" id="parent-c2ms5ec541cf309275_94186277">
<label class="col-sm-6" for="c2ms5ec541cf309275_94186277">Loss Payee Name</label>
{FGEN:c2ms5ec541cf309275_94186277|name=c2ms5ec541cf309275_94186277|id=c2ms5ec541cf309275_94186277|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec541d39ac655_36533847">
<label class="col-sm-6" for="c2ms5ec541d39ac655_36533847">Effective Date</label>
{FGEN:c2ms5ec541d39ac655_36533847|name=c2ms5ec541d39ac655_36533847|id=c2ms5ec541d39ac655_36533847|data-type=3|data-position=bottom|data-location=left|field_id=113|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec541d71268d0_45462328">
<label class="col-sm-6" for="c2ms5ec541d71268d0_45462328">Full Address Geocode Data</label>
{FGEN:c2ms5ec541d71268d0_45462328|name=c2ms5ec541d71268d0_45462328|id=c2ms5ec541d71268d0_45462328|data-type=4|data-position=bottom|data-location=left|field_id=114|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec541e3c5fcc2_40444650">
<label class="col-sm-6" for="c2ms5ec541e3c5fcc2_40444650">Address Line 1</label>
{FGEN:c2ms5ec541e3c5fcc2_40444650|name=c2ms5ec541e3c5fcc2_40444650|id=c2ms5ec541e3c5fcc2_40444650|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec541e4604276_19270587">
<label class="col-sm-6" for="c2ms5ec541e4604276_19270587">Address Line 2</label>
{FGEN:c2ms5ec541e4604276_19270587|name=c2ms5ec541e4604276_19270587|id=c2ms5ec541e4604276_19270587|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec541ffb0b327_83359888">
<label class="col-sm-6" for="c2ms5ec541ffb0b327_83359888">Town/City</label>
{FGEN:c2ms5ec541ffb0b327_83359888|name=c2ms5ec541ffb0b327_83359888|id=c2ms5ec541ffb0b327_83359888|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec54206806e18_04453293">
<label class="col-sm-6" for="c2ms5ec54206806e18_04453293">State</label>
{FGEN:c2ms5ec54206806e18_04453293|name=c2ms5ec54206806e18_04453293|id=c2ms5ec54206806e18_04453293|data-type=5|data-position=bottom|data-location=left|field_id=115|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec5420d5831a1_45741162">
<label class="col-sm-6" for="c2ms5ec5420d5831a1_45741162">Zip</label>
{FGEN:c2ms5ec5420d5831a1_45741162|name=c2ms5ec5420d5831a1_45741162|id=c2ms5ec5420d5831a1_45741162|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec542132413d9_98168900">
<label class="col-sm-6" for="c2ms5ec542132413d9_98168900">Country</label>
{FGEN:c2ms5ec542132413d9_98168900|name=c2ms5ec542132413d9_98168900|id=c2ms5ec542132413d9_98168900|data-type=1|data-position=bottom|data-location=left|field_id=116|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec5427e1e0f26_21747482">
<label class="col-sm-6" for="c2ms5ec5427e1e0f26_21747482">Latitude</label>
{FGEN:c2ms5ec5427e1e0f26_21747482|name=c2ms5ec5427e1e0f26_21747482|id=c2ms5ec5427e1e0f26_21747482|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec5427ea8cda2_35956153">
<label class="col-sm-6" for="c2ms5ec5427ea8cda2_35956153">Longitude</label>
{FGEN:c2ms5ec5427ea8cda2_35956153|name=c2ms5ec5427ea8cda2_35956153|id=c2ms5ec5427ea8cda2_35956153|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 46,
                'date_created' => '2020-06-04 17:32:16',
                'id' => 42,
                'identifier' => 'ca82ccb7-c5af-11ec-ac91-0223a3b30884',
                'image_url' => NULL,
                'location_id' => 1,
                'num_entries' => 0,
                'rev_ds_code' => 'stpv2_08_business_information',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2_08_Business_Information',
                'rev_hb' => '',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Business Information</h4>
</div>

<div class="required" id="parent-c2ms5ec667ca7b7248_77247497">
<label class="col-sm-6" for="c2ms5ec667ca7b7248_77247497">What do the operations relate to?</label>
{FGEN:c2ms5ec667ca7b7248_77247497|name=c2ms5ec667ca7b7248_77247497|id=c2ms5ec667ca7b7248_77247497|data-type=1|data-position=bottom|data-location=left|field_id=128|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec667da6a6211_02312082">
<label class="col-sm-6" for="c2ms5ec667da6a6211_02312082">What is the expected annual sales for the term?</label>
{FGEN:c2ms5ec667da6a6211_02312082|name=c2ms5ec667da6a6211_02312082|id=c2ms5ec667da6a6211_02312082|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec667e9d38380_73001074">
<label class="col-sm-6" for="c2ms5ec667e9d38380_73001074">Are there any arms or armaments exposures?</label>
{FGEN:c2ms5ec667e9d38380_73001074|name=c2ms5ec667e9d38380_73001074|id=c2ms5ec667e9d38380_73001074|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec667f8075603_16717331">
<label class="col-sm-6" for="c2ms5ec667f8075603_16717331">Please confirm if transit goods are shipped to / from sanctioned countries?</label>
{FGEN:c2ms5ec667f8075603_16717331|name=c2ms5ec667f8075603_16717331|id=c2ms5ec667f8075603_16717331|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec6681406fa46_28552156">
<label class="col-sm-6" for="c2ms5ec6681406fa46_28552156">Is there spoilage or perishable stock exposure?</label>
{FGEN:c2ms5ec6681406fa46_28552156|name=c2ms5ec6681406fa46_28552156|id=c2ms5ec6681406fa46_28552156|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec668314c59d7_50663523">
<label class="col-sm-6" for="c2ms5ec668314c59d7_50663523">Please select details of perishable stock:</label>
{FGEN:c2ms5ec668314c59d7_50663523|name=c2ms5ec668314c59d7_50663523[]|id=c2ms5ec668314c59d7_50663523|data-type=1|data-position=bottom|data-location=left|field_id=129|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec66845f32ab3_72872459">
<label class="col-sm-6" for="c2ms5ec66845f32ab3_72872459">Additional Information</label>
{FGEN:c2ms5ec66845f32ab3_72872459|name=c2ms5ec66845f32ab3_72872459|id=c2ms5ec66845f32ab3_72872459|data-type=4|data-position=bottom|data-location=left|field_id=114|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 47,
                'date_created' => '2020-06-04 17:32:16',
                'id' => 43,
                'identifier' => 'ca82cd79-c5af-11ec-ac91-0223a3b30884',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 0,
                'rev_ds_code' => 'stpv2_10_incoming_transit_details',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2_10_Incoming_Transit_Details',
                'rev_hb' => '',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Incoming Transit Details</h4>
</div>

<div class="required" id="parent-c2ms5ec6698e9491d8_61342628">
<label class="col-sm-6" for="c2ms5ec6698e9491d8_61342628">What is the basis of the incoming valuation?</label>
{FGEN:c2ms5ec6698e9491d8_61342628|name=c2ms5ec6698e9491d8_61342628|id=c2ms5ec6698e9491d8_61342628|data-type=1|data-position=bottom|data-location=left|field_id=126|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec6699d2ae241_20527255">
<label class="col-sm-6" for="c2ms5ec6699d2ae241_20527255">What is the total incoming value shipped?</label>
{FGEN:c2ms5ec6699d2ae241_20527255|name=c2ms5ec6699d2ae241_20527255|id=c2ms5ec6699d2ae241_20527255|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec669a977c913_48995182">
<label class="col-sm-6" for="c2ms5ec669a977c913_48995182">Average value per shipment</label>
{FGEN:c2ms5ec669a977c913_48995182|name=c2ms5ec669a977c913_48995182|id=c2ms5ec669a977c913_48995182|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec669b3a29d64_96447166">
<label class="col-sm-6" for="c2ms5ec669b3a29d64_96447166">Maximum value per shipment</label>
{FGEN:c2ms5ec669b3a29d64_96447166|name=c2ms5ec669b3a29d64_96447166|id=c2ms5ec669b3a29d64_96447166|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<br>
<h4>Where are the goods being shipped from?</h4>

<div class="required" id="parent-c2ms5ec669c52db346_81728234">
<label class="col-sm-6" for="c2ms5ec669c52db346_81728234">North America %</label>
{FGEN:c2ms5ec669c52db346_81728234|name=c2ms5ec669c52db346_81728234|id=c2ms5ec669c52db346_81728234|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec669c5b96ce6_77085938">
<label class="col-sm-6" for="c2ms5ec669c5b96ce6_77085938">South America %</label>
{FGEN:c2ms5ec669c5b96ce6_77085938|name=c2ms5ec669c5b96ce6_77085938|id=c2ms5ec669c5b96ce6_77085938|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec669c654fe76_60297940">
<label class="col-sm-6" for="c2ms5ec669c654fe76_60297940">Europe %</label>
{FGEN:c2ms5ec669c654fe76_60297940|name=c2ms5ec669c654fe76_60297940|id=c2ms5ec669c654fe76_60297940|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec669c71234f7_68878677">
<label class="col-sm-6" for="c2ms5ec669c71234f7_68878677">Asia / Pacific %</label>
{FGEN:c2ms5ec669c71234f7_68878677|name=c2ms5ec669c71234f7_68878677|id=c2ms5ec669c71234f7_68878677|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec669c7bc6625_19417276">
<label class="col-sm-6" for="c2ms5ec669c7bc6625_19417276">Other %</label>
{FGEN:c2ms5ec669c7bc6625_19417276|name=c2ms5ec669c7bc6625_19417276|id=c2ms5ec669c7bc6625_19417276|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec669eb8643b3_41095269">
<label class="col-sm-6" for="c2ms5ec669eb8643b3_41095269">Please determine the insured responsibility level for the transit %</label>
{FGEN:c2ms5ec669eb8643b3_41095269|name=c2ms5ec669eb8643b3_41095269|id=c2ms5ec669eb8643b3_41095269|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6041f201528f00_13970747">
<label class="col-sm-6" for="c2ms6041f201528f00_13970747">Third party %</label>
{FGEN:c2ms6041f201528f00_13970747|name=c2ms6041f201528f00_13970747|id=c2ms6041f201528f00_13970747|data-type=2|data-position=bottom|data-location=left|field_id=81|revision_id=1}
</div>

</div>





',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 48,
                'date_created' => '2020-06-04 17:32:16',
                'id' => 44,
                'identifier' => 'ca82cf1c-c5af-11ec-ac91-0223a3b30884',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 0,
                'rev_ds_code' => 'stpv2_04_policy_holder_details',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2_04_Policy_Holder_Details',
                'rev_hb' => '',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Policy Holder Details</h4>
</div>

<div class="required" id="parent-c2ms5ec5376b8cf645_86947188">
<label class="col-sm-6" for="c2ms5ec5376b8cf645_86947188">Named Insured</label>
{FGEN:c2ms5ec5376b8cf645_86947188|name=c2ms5ec5376b8cf645_86947188|id=c2ms5ec5376b8cf645_86947188|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec5376d84fce4_81313970">
<label class="col-sm-6" for="c2ms5ec5376d84fce4_81313970">Full Address Geocode Data</label>
{FGEN:c2ms5ec5376d84fce4_81313970|name=c2ms5ec5376d84fce4_81313970|id=c2ms5ec5376d84fce4_81313970|data-type=4|data-position=bottom|data-location=left|field_id=114|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec537741af7e3_51226670">
<label class="col-sm-6" for="c2ms5ec537741af7e3_51226670">Address Line 1</label>
{FGEN:c2ms5ec537741af7e3_51226670|name=c2ms5ec537741af7e3_51226670|id=c2ms5ec537741af7e3_51226670|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec537749aabc3_18347003">
<label class="col-sm-6" for="c2ms5ec537749aabc3_18347003">Address Line 2</label>
{FGEN:c2ms5ec537749aabc3_18347003|name=c2ms5ec537749aabc3_18347003|id=c2ms5ec537749aabc3_18347003|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec537868f2398_60005280">
<label class="col-sm-6" for="c2ms5ec537868f2398_60005280">Town/City</label>
{FGEN:c2ms5ec537868f2398_60005280|name=c2ms5ec537868f2398_60005280|id=c2ms5ec537868f2398_60005280|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec5379605f971_64081742">
<label class="col-sm-6" for="c2ms5ec5379605f971_64081742">State</label>
{FGEN:c2ms5ec5379605f971_64081742|name=c2ms5ec5379605f971_64081742|id=c2ms5ec5379605f971_64081742|data-type=5|data-position=bottom|data-location=left|field_id=115|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53a47329052_94408749">
<label class="col-sm-6" for="c2ms5ec53a47329052_94408749">Zip</label>
{FGEN:c2ms5ec53a47329052_94408749|name=c2ms5ec53a47329052_94408749|id=c2ms5ec53a47329052_94408749|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53a54d401a9_93973439">
<label class="col-sm-6" for="c2ms5ec53a54d401a9_93973439">Country</label>
{FGEN:c2ms5ec53a54d401a9_93973439|name=c2ms5ec53a54d401a9_93973439|id=c2ms5ec53a54d401a9_93973439|data-type=1|data-position=bottom|data-location=left|field_id=116|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53a69670429_10056750">
<label class="col-sm-6" for="c2ms5ec53a69670429_10056750">Latitude</label>
{FGEN:c2ms5ec53a69670429_10056750|name=c2ms5ec53a69670429_10056750|id=c2ms5ec53a69670429_10056750|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53a6a040436_15137347">
<label class="col-sm-6" for="c2ms5ec53a6a040436_15137347">Longitude</label>
{FGEN:c2ms5ec53a6a040436_15137347|name=c2ms5ec53a6a040436_15137347|id=c2ms5ec53a6a040436_15137347|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53a8096e5c2_49849027">
<label class="col-sm-6" for="c2ms5ec53a8096e5c2_49849027">No. of Additional Insured</label>
{FGEN:c2ms5ec53a8096e5c2_49849027|name=c2ms5ec53a8096e5c2_49849027|id=c2ms5ec53a8096e5c2_49849027|data-type=1|data-position=bottom|data-location=left|field_id=130|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53a81473e18_70622648">
<label class="col-sm-6" for="c2ms5ec53a81473e18_70622648">No. of Loss Payees</label>
{FGEN:c2ms5ec53a81473e18_70622648|name=c2ms5ec53a81473e18_70622648|id=c2ms5ec53a81473e18_70622648|data-type=1|data-position=bottom|data-location=left|field_id=130|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53a92c0fc95_40571961">
<label class="col-sm-6" for="c2ms5ec53a92c0fc95_40571961">Bespoke Endorsement</label>
{FGEN:c2ms5ec53a92c0fc95_40571961|name=c2ms5ec53a92c0fc95_40571961|id=c2ms5ec53a92c0fc95_40571961|data-type=4|data-position=bottom|data-location=left|field_id=114|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 49,
                'date_created' => '2020-07-29 14:58:37',
                'id' => 45,
                'identifier' => 'd00c3630-d17f-11ea-9667-4a28775f739c',
                'image_url' => '',
                'location_id' => 1,
                'num_entries' => 21823,
                'rev_ds_code' => 'ter_03_01_additional_insured_no',
                'rev_ds_description' => '',
                'rev_ds_title' => 'TER_03_01_Additional_Insured_no',
                'rev_hb' => '<div id="ds-column-left">
{{!>ds-subtitle subtitle="No. of Additional Insured"}}
{{eavfield "c2ms5df0e8182d8481_83117557" label="No. of Additional Insured" template="hidden-default"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>No. of Additional Insured</h4>
</div>

<div class="required" id="parent-c2ms5df0e8182d8481_83117557">
<label class="col-sm-6" for="c2ms5df0e8182d8481_83117557">No. of Additional Insured</label>
{FGEN:num_additional_named_insured|name=c2ms5df0e8182d8481_83117557|id=c2ms5df0e8182d8481_83117557|data-type=1|data-position=1|data-location=left|field_id=130|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 50,
                'date_created' => '2020-07-29 14:59:15',
                'id' => 46,
                'identifier' => '1cd41a7b-d180-11ea-9667-4a28775f739c',
                'image_url' => '',
                'location_id' => 1,
                'num_entries' => 21823,
                'rev_ds_code' => 'ter_03_02_loss_payees_no',
                'rev_ds_description' => '',
                'rev_ds_title' => 'TER_03_02_Loss_Payees_No',
                'rev_hb' => '<div id="ds-column-left">
{{!>ds-subtitle subtitle="No. of Loss Payees"}}
{{eavfield "c2ms5df0e818e27ff8_62099026" label="No. of Loss Payees" template="hidden-default"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>No. of Loss Payees</h4>
</div>

<div class="required" id="parent-c2ms5df0e818e27ff8_62099026">
<label class="col-sm-6" for="c2ms5df0e818e27ff8_62099026">No. of Loss Payees</label>
{FGEN:num_additional_named_insured|name=c2ms5df0e818e27ff8_62099026|id=c2ms5df0e818e27ff8_62099026|data-type=1|data-position=1|data-location=left|field_id=130|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 51,
                'date_created' => '2020-11-12 15:03:10',
                'id' => 47,
                'identifier' => '2da4bae2-24f8-11eb-ae0d-0ace2615376e',
                'image_url' => '',
                'location_id' => 1,
                'num_entries' => 9658,
                'rev_ds_code' => 'ter_16_underwriting_dataset',
                'rev_ds_description' => '',
                'rev_ds_title' => 'TER_16_Underwriting_Dataset',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Underwriting Dataset"}}
{{eavfield "c2ms5fad4e68ce5a17_86853314" label="Rating Factor"}}
{{eavfield "c2ms5fad4e6fd49b50_86446157" label="Original Premium"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Underwriting Dataset</h4>
</div>

<div class="required" id="parent-c2ms5fad4e68ce5a17_86853314">
<label class="col-sm-6" for="c2ms5fad4e68ce5a17_86853314">Rating Factor</label>
{FGEN:c2ms5fad4e68ce5a17_86853314|name=c2ms5fad4e68ce5a17_86853314|id=c2ms5fad4e68ce5a17_86853314|data-type=10|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5fad4e6fd49b50_86446157">
<label class="col-sm-6" for="c2ms5fad4e6fd49b50_86446157">Original Premium</label>
{FGEN:c2ms5fad4e6fd49b50_86446157|name=c2ms5fad4e6fd49b50_86446157|id=c2ms5fad4e6fd49b50_86446157|data-type=10|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 52,
                'date_created' => '2020-12-09 13:07:08',
                'id' => 48,
                'identifier' => '715084ee-3a1f-11eb-9727-0a8fd383ea9a',
                'image_url' => '',
                'location_id' => 1,
                'num_entries' => 2910,
                'rev_ds_code' => 'dbb_15_underwriting_dataset',
                'rev_ds_description' => '',
                'rev_ds_title' => 'DBB_15_Underwriting_Dataset',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Underwriting Dataset"}}
{{eavfield "c2ms5fd0cb81f174d4_25412990" label="Rating Factor"}}
{{eavfield "c2ms5fd0cb862397a7_80432198" label="Original Premium"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Underwriting Dataset</h4>
</div>

<div class="required" id="parent-c2ms5fd0cb81f174d4_25412990">
<label class="col-sm-6" for="c2ms5fd0cb81f174d4_25412990">Rating Factor</label>
{FGEN:c2ms5fd0cb81f174d4_25412990|name=c2ms5fd0cb81f174d4_25412990|id=c2ms5fd0cb81f174d4_25412990|data-type=10|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms5fd0cb862397a7_80432198">
<label class="col-sm-6" for="c2ms5fd0cb862397a7_80432198">Original Premium</label>
{FGEN:c2ms5fd0cb862397a7_80432198|name=c2ms5fd0cb862397a7_80432198|id=c2ms5fd0cb862397a7_80432198|data-type=10|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 53,
                'date_created' => '2021-01-29 15:30:59',
                'id' => 49,
                'identifier' => 'fcfa3988-6246-11eb-ac2b-0a8fd383ea9a',
                'image_url' => '',
                'location_id' => 1,
                'num_entries' => 1698,
                'rev_ds_code' => 'dbbv2_04_01_additional_insured_no',
                'rev_ds_description' => '',
                'rev_ds_title' => 'DBBv2_04_01_Additional_Insured_no',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Number of additional insured"}}
{{eavfield "c2ms5ebd5f1e1dfa82_77561548" label="No. of Additional Insured"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Number of additional insured</h4>
</div>

<div class="required" id="parent-c2ms5ebd5f1e1dfa82_77561548">
<label class="col-sm-6" for="c2ms5ebd5f1e1dfa82_77561548">No. of Additional Insured</label>
{FGEN:num_additional_named_insured|name=c2ms5ebd5f1e1dfa82_77561548|id=c2ms5ebd5f1e1dfa82_77561548|data-type=1|data-position=11|data-location=left|field_id=95|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 54,
                'date_created' => '2021-01-29 15:31:43',
                'id' => 50,
                'identifier' => '170a63fa-6247-11eb-ac2b-0a8fd383ea9a',
                'image_url' => '',
                'location_id' => 1,
                'num_entries' => 1698,
                'rev_ds_code' => 'dbbv2_04_02_loss_payee_no',
                'rev_ds_description' => '',
                'rev_ds_title' => 'DBBv2_04_02_Loss_payee_no',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Number of Loss Payees"}}
{{eavfield "c2ms5ebd5f1eb20ef3_57216645" label="No. of Loss Payees"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Number of Loss Payees</h4>
</div>

<div class="required" id="parent-c2ms5ebd5f1eb20ef3_57216645">
<label class="col-sm-6" for="c2ms5ebd5f1eb20ef3_57216645">No. of Loss Payees</label>
{FGEN:num_additional_named_insured|name=c2ms5ebd5f1eb20ef3_57216645|id=c2ms5ebd5f1eb20ef3_57216645|data-type=1|data-position=12|data-location=left|field_id=95|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 101,
                'date_created' => '2020-06-04 17:32:16',
                'id' => 61,
                'identifier' => '91db584d-a678-11ea-b4d4-4a28775f739c',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 1857,
                'rev_ds_code' => 'stpv2_05_additional_insured_mi',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2_05_Additional_Insured_MI',
                'rev_hb' => '<div
class="{{#if instanceCount}}full{{else}}empty{{/if}}"
data-identifier="{{datasetRevisionIdentifier}}"
data-role="multi-placeholder"
data-ds-control="{{control}}"
>

<div class="form-heading custom-hidden mi-header" data-role="mi-header" data-identifier="{{datasetRevisionIdentifier}}">

<div class="left">

<h4>Number of additional insured
<span class="instance-counter">
(Total: <span data-role="instance-counter" data-identifier="{{datasetRevisionIdentifier}}">{{instanceCount}}</span>)
</span>
</h4>
</div>

<div class="right mi-control mi-add-instance">
<button type="button" data-role="add-instance" data-identifier="{{datasetRevisionIdentifier}}" data-title="Additional insured">Add</button>
</div>

<div class="clear"></div>
</div>


<!-- Form fields with eav dataset identifier and instance count	 -->
{{>multi-mandatory-fields  datasetRevisionIdentifier=datasetRevisionIdentifier instanceCount=instanceCount}}

<!-- Slot with rendered instances (if they exist) -->
{{#if instanceCount}}
{{#each instances as |instance|}}

<div data-role="instance-wrapper" data-index="{{instance.index}}">
{{>multi-instance-header
title="Additional Insured"
datasetRevisionIdentifier=../datasetRevisionIdentifier
index=instance.index
}}

<!-- Form field that contains persisted instance\'s identifier (form field "ident") -->
<input
type="hidden"
name="c2msmf[{{../datasetRevisionIdentifier}}][{{instance.index}}][ident]"
id="{{../datasetRevisionIdentifier}}_ident_{{instance.index}}"
data-template-name="c2msmf[{{../datasetRevisionIdentifier}}][\\{{index}}][ident]"
data-template-id="{{../datasetRevisionIdentifier}}_ident_\\{{index}}"
value="{{instance.ident}}"
/>

{{>stp-additional-insured-mi-fields dataset=../dataset fieldCollection=../fieldCollection instance=instance index=instance.index}}

<!-- Footer -->
{{>multi-instance-footer
datasetRevisionIdentifier=../datasetRevisionIdentifier
index=instance.index
title="Additional Insured Information"
}}
</div>
{{/each}}

{{ else }}
<p class="mi-empty">There\'s no Additional Insured Information specified</p>
{{/if}}

<!-- Template for adding additional instance on the frontend -->
<script type="text/x-handlebars" data-identifier="{{datasetRevisionIdentifier}}" data-role="multi-template">
<div data-role="instance-wrapper" data-index="\\{{index}}">

<div class="form-heading custom-hidden mi-instance-header">
<div class="left mi-instance-label">
<h4 data-template-html="Additional Insured Information: \\{{index}}">Additional Insured Information: \\{{index}}</h4>
</div>
<div class="right mi-control mi-remove-instance">
<button
class="right"
type="button"
data-role="remove-instance"
data-identifier="{{datasetRevisionIdentifier}}"
data-index="\\{{index}}"
data-title="Additional Insured"
data-template-html="Remove Additional Insured (Num: \\{{index}})"
>Remove Additional Insured (Num: \\{{index}})</button>
</div>
<div class="clear"></div>
</div>

{{>stp-additional-insured-mi-fields dataset=dataset fieldCollection=fieldCollection}}


<input
type="hidden"
name="c2msmf[{{datasetRevisionIdentifier}}][\\{{index}}][ident]"
id="{{datasetRevisionIdentifier}}_ident_\\{{index}}"
data-template-name="c2msmf[{{datasetRevisionIdentifier}}][\\{{index}}][ident]"
data-template-id="{{datasetRevisionIdentifier}}_ident_\\{{index}}"
value=""
/>


<div class="form-heading custom-hidden mi-instance-footer">
<div class="right mi-control mi-remove-instance">
<button
class="right"
type="button"
data-role="remove-instance"
data-identifier="{{datasetRevisionIdentifier}}"
data-index="\\{{index}}"
data-title="Additional Insured"
data-template-html="Remove Additional Insured (Num: \\{{index}})"
>Remove Additional Insured (Num: \\{{index}})</button>
</div>
<div class="clear"></div>
</div>
</div>
</script>
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-multi-box">

<div class="form-heading custom-hidden">
<h4>Additional Insured Information: {COUNT}</h4>
</div>

<div class="required" id="parent-c2ms5ec53b72129818_18476350">
<label class="col-sm-6" for="c2ms5ec53b72129818_18476350">Additional Insured Name</label>
{FGEN:c2ms5ec53b72129818_18476350|name=c2ms5ec53b72129818_18476350|id=c2ms5ec53b72129818_18476350|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53c6c11abe6_19846832">
<label class="col-sm-6" for="c2ms5ec53c6c11abe6_19846832">Effective Date</label>
{FGEN:c2ms5ec53c6c11abe6_19846832|name=c2ms5ec53c6c11abe6_19846832|id=c2ms5ec53c6c11abe6_19846832|data-type=3|data-position=bottom|data-location=left|field_id=113|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53c7777ed12_04876805">
<label class="col-sm-6" for="c2ms5ec53c7777ed12_04876805">Full Address Geocode Data</label>
{FGEN:c2ms5ec53c7777ed12_04876805|name=c2ms5ec53c7777ed12_04876805|id=c2ms5ec53c7777ed12_04876805|data-type=4|data-position=bottom|data-location=left|field_id=114|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53c80baeab3_02465092">
<label class="col-sm-6" for="c2ms5ec53c80baeab3_02465092">Address Line 1</label>
{FGEN:c2ms5ec53c80baeab3_02465092|name=c2ms5ec53c80baeab3_02465092|id=c2ms5ec53c80baeab3_02465092|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53c811ae0a5_31779471">
<label class="col-sm-6" for="c2ms5ec53c811ae0a5_31779471">Address Line 2</label>
{FGEN:c2ms5ec53c811ae0a5_31779471|name=c2ms5ec53c811ae0a5_31779471|id=c2ms5ec53c811ae0a5_31779471|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53c89a7bcd4_10455761">
<label class="col-sm-6" for="c2ms5ec53c89a7bcd4_10455761">Town/City</label>
{FGEN:c2ms5ec53c89a7bcd4_10455761|name=c2ms5ec53c89a7bcd4_10455761|id=c2ms5ec53c89a7bcd4_10455761|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53c94a23b59_91624278">
<label class="col-sm-6" for="c2ms5ec53c94a23b59_91624278">State</label>
{FGEN:c2ms5ec53c94a23b59_91624278|name=c2ms5ec53c94a23b59_91624278|id=c2ms5ec53c94a23b59_91624278|data-type=5|data-position=bottom|data-location=left|field_id=115|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53ca03ce907_90144927">
<label class="col-sm-6" for="c2ms5ec53ca03ce907_90144927">Zip</label>
{FGEN:c2ms5ec53ca03ce907_90144927|name=c2ms5ec53ca03ce907_90144927|id=c2ms5ec53ca03ce907_90144927|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53cabe507b8_34125749">
<label class="col-sm-6" for="c2ms5ec53cabe507b8_34125749">Country</label>
{FGEN:c2ms5ec53cabe507b8_34125749|name=c2ms5ec53cabe507b8_34125749|id=c2ms5ec53cabe507b8_34125749|data-type=1|data-position=bottom|data-location=left|field_id=116|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53cb3bd7db7_67745785">
<label class="col-sm-6" for="c2ms5ec53cb3bd7db7_67745785">Latitude</label>
{FGEN:c2ms5ec53cb3bd7db7_67745785|name=c2ms5ec53cb3bd7db7_67745785|id=c2ms5ec53cb3bd7db7_67745785|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53cb463dff3_86640846">
<label class="col-sm-6" for="c2ms5ec53cb463dff3_86640846">Longitude</label>
{FGEN:c2ms5ec53cb463dff3_86640846|name=c2ms5ec53cb463dff3_86640846|id=c2ms5ec53cb463dff3_86640846|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53cc2d4fa78_38699147">
<label class="col-sm-6" for="c2ms5ec53cc2d4fa78_38699147">Include waiver of subrogation</label>
{FGEN:c2ms5ec53cc2d4fa78_38699147|name=c2ms5ec53cc2d4fa78_38699147|id=c2ms5ec53cc2d4fa78_38699147|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53cc37a1fc2_15593931">
<label class="col-sm-6" for="c2ms5ec53cc37a1fc2_15593931">Confirm the Additional Insured’s work accounts for no more than 15% of the original insured’s work</label>
{FGEN:c2ms5ec53cc37a1fc2_15593931|name=c2ms5ec53cc37a1fc2_15593931|id=c2ms5ec53cc37a1fc2_15593931|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>


<div class="required" id="parent-c2ms609bc954d32c38_87316850">
<label class="col-sm-6" for="c2ms609bc954d32c38_87316850">Removed Date</label>
{FGEN:c2ms609bc954d32c38_87316850|name=c2ms609bc954d32c38_87316850|id=c2ms609bc954d32c38_87316850|data-type=3|data-position=bottom|data-location=left|field_id=113|revision_id=1}
</div>

<div class="required" id="parent-c2ms609bc95a178045_58951897">
<label class="col-sm-6" for="c2ms609bc95a178045_58951897">Removed</label>
{FGEN:c2ms609bc95a178045_58951897|name=c2ms609bc95a178045_58951897|id=c2ms609bc95a178045_58951897|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 104,
                'date_created' => '2020-06-04 17:32:16',
                'id' => 64,
                'identifier' => '91dd9d1f-a678-11ea-b4d4-4a28775f739c',
                'image_url' => NULL,
                'location_id' => 1,
                'num_entries' => 5511,
                'rev_ds_code' => 'stpv2_01_type_of_cover',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2_01_Type_of_Cover',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="STP cover"}}
{{eavfield "c2ms5ec535dd28e048_90502334" label="Select a Type of Cover"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Stock Throughput cover</h4>
</div>

<div class="required" id="parent-c2ms5ec535dd28e048_90502334">
<label class="col-sm-6" for="c2ms5ec535dd28e048_90502334">Select a Type of Cover</label>
{FGEN:c2ms5ec535dd28e048_90502334|name=c2ms5ec535dd28e048_90502334|id=c2ms5ec535dd28e048_90502334|data-type=1|data-position=bottom|data-location=left|field_id=125|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 105,
                'date_created' => '2020-06-04 17:32:16',
                'id' => 65,
                'identifier' => '91ddd3ae-a678-11ea-b4d4-4a28775f739c',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 5511,
                'rev_ds_code' => 'stpv2_02_inception_date',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2_02_Inception_Date',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Inception Date"}}
{{eavfield "c2ms5ec5368f067469_44213761" label="Inception Date"}}
{{eavfield "c2ms5ec5368f9d2c12_82527596" label="Expiry Date"}}
{{eavfield "c2ms62541269580bd2_45321393" label="Cover Period"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Inception Date</h4>
</div>

<div class="required" id="parent-c2ms5ec5368f067469_44213761">
<label class="col-sm-6" for="c2ms5ec5368f067469_44213761">Inception Date</label>
{FGEN:datepicker|name=c2ms5ec5368f067469_44213761|id=c2ms5ec5368f067469_44213761|data-type=3|data-position=1|data-location=left|field_id=113|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec5368f9d2c12_82527596">
<label class="col-sm-6" for="c2ms5ec5368f9d2c12_82527596">Expiry Date</label>
{FGEN:datepicker|name=c2ms5ec5368f9d2c12_82527596|id=c2ms5ec5368f9d2c12_82527596|data-type=3|data-position=2|data-location=left|field_id=113|revision_id=1}
</div>

<div class="required" id="parent-c2ms62541269580bd2_45321393">
<label class="col-sm-6" for="c2ms62541269580bd2_45321393">Cover Period</label>
{FGEN:c2ms62541269580bd2_45321393|name=c2ms62541269580bd2_45321393|id=c2ms62541269580bd2_45321393|data-type=2|data-position=bottom|data-location=left|field_id=99|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 108,
                'date_created' => '2020-06-04 17:32:16',
                'id' => 68,
                'identifier' => '91df6d53-a678-11ea-b4d4-4a28775f739c',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 5511,
                'rev_ds_code' => 'stpv2_07_surplus_lines',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2_07_Surplus_Lines',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Surplus Lines"}}
{{eavfield "c2ms5ec54625d59d81_46936231" label="What is the state of filing?"}}
{{eavfield "c2ms5ec54634bc7677_64016437" label="Do you wish to complete the Surplus Lines details now?"}}
{{eavfield "c2ms5ec54869d3ffb6_55894902" label="Name"}}
{{eavfield "c2ms5ec548774ab826_99963520" label="Full Address Geocode Data"}}
{{eavfield "c2ms5ec5488042b4e4_46665960" label="Address Line 1"}}
{{eavfield "c2ms5ec54880ba8257_59939377" label="Address Line 2"}}
{{eavfield "c2ms5ec549dfa04554_50707244" label="Town/City"}}
{{eavfield "c2ms5ec54c83099d56_20927837" label="State"}}
{{eavfield "c2ms5ec54c8a8b3ce1_97984064" label="Zip"}}
{{eavfield "c2ms5ec54c92b28000_66509774" label="Country"}}
{{eavfield "c2ms5ec5486e9afa89_99982436" label="License Number"}}
{{eavfield "c2ms5ec54c9aa2be82_77272325" label="Latitude"}}
{{eavfield "c2ms5ec54c9b295d64_49186549" label="Longitude"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="required" id="parent-c2ms5ec54625d59d81_46936231">
<label class="col-sm-6" for="c2ms5ec54625d59d81_46936231">What is the state of filing?</label>
{FGEN:usa_states_main|name=c2ms5ec54625d59d81_46936231|id=c2ms5ec54625d59d81_46936231|data-type=5|data-position=1|data-location=left|field_id=115|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec54634bc7677_64016437">
<label class="col-sm-6" for="c2ms5ec54634bc7677_64016437">Do you wish to complete the Surplus Lines details now?</label>
{FGEN:yes_no|name=c2ms5ec54634bc7677_64016437|id=c2ms5ec54634bc7677_64016437|data-type=1|data-position=2|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec54869d3ffb6_55894902">
<label class="col-sm-6" for="c2ms5ec54869d3ffb6_55894902">Name</label>
{FGEN:text|name=c2ms5ec54869d3ffb6_55894902|id=c2ms5ec54869d3ffb6_55894902|data-type=5|data-position=3|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec5486e9afa89_99982436">
<label class="col-sm-6" for="c2ms5ec5486e9afa89_99982436">License Number</label>
{FGEN:text|name=c2ms5ec5486e9afa89_99982436|id=c2ms5ec5486e9afa89_99982436|data-type=5|data-position=4|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec548774ab826_99963520">
<label class="col-sm-6" for="c2ms5ec548774ab826_99963520">Full Address Geocode Data</label>
{FGEN:textarea|name=c2ms5ec548774ab826_99963520|id=c2ms5ec548774ab826_99963520|data-type=4|data-position=5|data-location=left|field_id=114|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec5488042b4e4_46665960">
<label class="col-sm-6" for="c2ms5ec5488042b4e4_46665960">Address Line 1</label>
{FGEN:text|name=c2ms5ec5488042b4e4_46665960|id=c2ms5ec5488042b4e4_46665960|data-type=5|data-position=6|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec54880ba8257_59939377">
<label class="col-sm-6" for="c2ms5ec54880ba8257_59939377">Address Line 2</label>
{FGEN:text|name=c2ms5ec54880ba8257_59939377|id=c2ms5ec54880ba8257_59939377|data-type=5|data-position=7|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec549dfa04554_50707244">
<label class="col-sm-6" for="c2ms5ec549dfa04554_50707244">Town/City</label>
{FGEN:text|name=c2ms5ec549dfa04554_50707244|id=c2ms5ec549dfa04554_50707244|data-type=5|data-position=8|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec54c83099d56_20927837">
<label class="col-sm-6" for="c2ms5ec54c83099d56_20927837">State</label>
{FGEN:usa_states_main|name=c2ms5ec54c83099d56_20927837|id=c2ms5ec54c83099d56_20927837|data-type=5|data-position=9|data-location=left|field_id=115|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec54c8a8b3ce1_97984064">
<label class="col-sm-6" for="c2ms5ec54c8a8b3ce1_97984064">Zip</label>
{FGEN:text|name=c2ms5ec54c8a8b3ce1_97984064|id=c2ms5ec54c8a8b3ce1_97984064|data-type=5|data-position=10|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec54c92b28000_66509774">
<label class="col-sm-6" for="c2ms5ec54c92b28000_66509774">Country</label>
{FGEN:country|name=c2ms5ec54c92b28000_66509774|id=c2ms5ec54c92b28000_66509774|data-type=1|data-position=11|data-location=left|field_id=116|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec54c9aa2be82_77272325">
<label class="col-sm-6" for="c2ms5ec54c9aa2be82_77272325">Latitude</label>
{FGEN:text|name=c2ms5ec54c9aa2be82_77272325|id=c2ms5ec54c9aa2be82_77272325|data-type=5|data-position=12|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec54c9b295d64_49186549">
<label class="col-sm-6" for="c2ms5ec54c9b295d64_49186549">Longitude</label>
{FGEN:text|name=c2ms5ec54c9b295d64_49186549|id=c2ms5ec54c9b295d64_49186549|data-type=5|data-position=13|data-location=left|field_id=112|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 109,
                'date_created' => '2020-06-04 17:32:16',
                'id' => 69,
                'identifier' => '91dfed1f-a678-11ea-b4d4-4a28775f739c',
                'image_url' => NULL,
                'location_id' => 1,
                'num_entries' => 5511,
                'rev_ds_code' => 'stpv2_03_target_price',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2_03_Target_Price',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Target Price Information"}}
{{eavfield "c2ms5ec536e4d84b02_15805186" label="Do you wish to set a target price?"}}
{{eavfield "c2ms5ec536e8be82d1_24705591" label="What target price would you like to set?"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Target Price Information</h4>
</div>

<div class="required" id="parent-c2ms5ec536e4d84b02_15805186">
<label class="col-sm-6" for="c2ms5ec536e4d84b02_15805186">Do you wish to set a target price?</label>
{FGEN:c2ms5ec536e4d84b02_15805186|name=c2ms5ec536e4d84b02_15805186|id=c2ms5ec536e4d84b02_15805186|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec536e8be82d1_24705591">
<label class="col-sm-6" for="c2ms5ec536e8be82d1_24705591">What target price would you like to set?</label>
{FGEN:c2ms5ec536e8be82d1_24705591|name=c2ms5ec536e8be82d1_24705591|id=c2ms5ec536e8be82d1_24705591|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 111,
                'date_created' => '2020-06-04 17:32:16',
                'id' => 71,
                'identifier' => '91e077a7-a678-11ea-b4d4-4a28775f739c',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 1332,
                'rev_ds_code' => 'stpv2_06_loss_payees_mi',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2_06_Loss_Payees_MI',
                'rev_hb' => '<div
class="{{#if instanceCount}}full{{else}}empty{{/if}}"
data-identifier="{{datasetRevisionIdentifier}}"
data-role="multi-placeholder"
data-ds-control="{{control}}"
>

<div class="form-heading custom-hidden mi-header" data-role="mi-header" data-identifier="{{datasetRevisionIdentifier}}">
<div class="left">
<h4>Loss Payee Information
<span class="instance-counter">
(Total: <span data-role="instance-counter" data-identifier="{{datasetRevisionIdentifier}}">{{instanceCount}}</span>)
</span>
</h4>
</div>

<div class="right mi-control mi-add-instance">
<button type="button" data-role="add-instance" data-identifier="{{datasetRevisionIdentifier}}" data-title="Loss Payee Information">Add</button>
</div>

<div class="clear"></div>
</div>



<!-- Form fields with eav dataset identifier and instance count	 -->
{{>multi-mandatory-fields
datasetRevisionIdentifier=datasetRevisionIdentifier
instanceCount=instanceCount
}}

{{#if instanceCount}}
{{#each instances as |instance|}}

<div data-role="instance-wrapper" data-index="{{instance.index}}">
{{>multi-instance-header
title="Loss Payees"
datasetRevisionIdentifier=../datasetRevisionIdentifier
index=instance.index
}}

<!-- Form field that contains persisted instance\'s identifier (form field "ident") -->
<input
type="hidden"
name="c2msmf[{{../datasetRevisionIdentifier}}][{{instance.index}}][ident]"
id="{{../datasetRevisionIdentifier}}_ident_{{instance.index}}"
data-template-name="c2msmf[{{../datasetRevisionIdentifier}}][\\{{index}}][ident]"
data-template-id="{{../datasetRevisionIdentifier}}_ident_\\{{index}}"
value="{{instance.ident}}"
/>

{{>stp-loss-payee-mi-fields dataset=../dataset fieldCollection=../fieldCollection instance=instance index=instance.index}}

<!-- Footer -->
{{>multi-instance-footer
datasetRevisionIdentifier=../datasetRevisionIdentifier
index=instance.index
title="Loss Payees Information"
}}
</div>
{{/each}}

{{ else }}
<p class="mi-empty">There\'s no Loss Payee Information specified</p>
{{/if}}


<!-- Template for adding additional instance on the frontend -->
<script type="text/x-handlebars" data-identifier="{{datasetRevisionIdentifier}}" data-role="multi-template">
<div data-role="instance-wrapper" data-index="\\{{index}}">

<div class="form-heading custom-hidden mi-instance-header">
<div class="left mi-instance-label">
<h4 data-template-html="Loss Payees Information: \\{{index}}">Loss Payees Information: \\{{index}}</h4>
</div>
<div class="right mi-control mi-remove-instance">
<button
class="right"
type="button"
data-role="remove-instance"
data-identifier="{{datasetRevisionIdentifier}}"
data-index="\\{{index}}"
data-title="Loss Payees Information"
data-template-html="Remove Loss Payees Information (Num: \\{{index}})"
>Remove Loss Payees Information (Num: \\{{index}})</button>
</div>
<div class="clear"></div>
</div>

{{>stp-loss-payee-mi-fields dataset=dataset fieldCollection=fieldCollection}}


<input
type="hidden"
name="c2msmf[{{datasetRevisionIdentifier}}][\\{{index}}][ident]"
id="{{datasetRevisionIdentifier}}_ident_\\{{index}}"
data-template-name="c2msmf[{{datasetRevisionIdentifier}}][\\{{index}}][ident]"
data-template-id="{{datasetRevisionIdentifier}}_ident_\\{{index}}"
value=""
/>


<div class="form-heading custom-hidden mi-instance-footer">
<div class="right mi-control mi-remove-instance">
<button
class="right"
type="button"
data-role="remove-instance"
data-identifier="{{datasetRevisionIdentifier}}"
data-index="\\{{index}}"
data-title="Loss Payees Information"
data-template-html="Remove Loss Payees Information (Num: \\{{index}})"
>Remove Loss Payees Information (Num: \\{{index}})</button>
</div>
<div class="clear"></div>
</div>
</div>
</script>
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-multi-box">

<div class="form-heading custom-hidden">
<h4>Loss Payee Information: {COUNT}</h4>
</div>

<div class="required" id="parent-c2ms5ec541cf309275_94186277">
<label class="col-sm-6" for="c2ms5ec541cf309275_94186277">Loss Payee Name</label>
{FGEN:c2ms5ec541cf309275_94186277|name=c2ms5ec541cf309275_94186277|id=c2ms5ec541cf309275_94186277|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec541d39ac655_36533847">
<label class="col-sm-6" for="c2ms5ec541d39ac655_36533847">Effective Date</label>
{FGEN:c2ms5ec541d39ac655_36533847|name=c2ms5ec541d39ac655_36533847|id=c2ms5ec541d39ac655_36533847|data-type=3|data-position=bottom|data-location=left|field_id=113|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec541d71268d0_45462328">
<label class="col-sm-6" for="c2ms5ec541d71268d0_45462328">Full Address Geocode Data</label>
{FGEN:c2ms5ec541d71268d0_45462328|name=c2ms5ec541d71268d0_45462328|id=c2ms5ec541d71268d0_45462328|data-type=4|data-position=bottom|data-location=left|field_id=114|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec541e3c5fcc2_40444650">
<label class="col-sm-6" for="c2ms5ec541e3c5fcc2_40444650">Address Line 1</label>
{FGEN:c2ms5ec541e3c5fcc2_40444650|name=c2ms5ec541e3c5fcc2_40444650|id=c2ms5ec541e3c5fcc2_40444650|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec541e4604276_19270587">
<label class="col-sm-6" for="c2ms5ec541e4604276_19270587">Address Line 2</label>
{FGEN:c2ms5ec541e4604276_19270587|name=c2ms5ec541e4604276_19270587|id=c2ms5ec541e4604276_19270587|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec541ffb0b327_83359888">
<label class="col-sm-6" for="c2ms5ec541ffb0b327_83359888">Town/City</label>
{FGEN:c2ms5ec541ffb0b327_83359888|name=c2ms5ec541ffb0b327_83359888|id=c2ms5ec541ffb0b327_83359888|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec54206806e18_04453293">
<label class="col-sm-6" for="c2ms5ec54206806e18_04453293">State</label>
{FGEN:c2ms5ec54206806e18_04453293|name=c2ms5ec54206806e18_04453293|id=c2ms5ec54206806e18_04453293|data-type=5|data-position=bottom|data-location=left|field_id=115|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec5420d5831a1_45741162">
<label class="col-sm-6" for="c2ms5ec5420d5831a1_45741162">Zip</label>
{FGEN:c2ms5ec5420d5831a1_45741162|name=c2ms5ec5420d5831a1_45741162|id=c2ms5ec5420d5831a1_45741162|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec542132413d9_98168900">
<label class="col-sm-6" for="c2ms5ec542132413d9_98168900">Country</label>
{FGEN:c2ms5ec542132413d9_98168900|name=c2ms5ec542132413d9_98168900|id=c2ms5ec542132413d9_98168900|data-type=1|data-position=bottom|data-location=left|field_id=116|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec5427e1e0f26_21747482">
<label class="col-sm-6" for="c2ms5ec5427e1e0f26_21747482">Latitude</label>
{FGEN:c2ms5ec5427e1e0f26_21747482|name=c2ms5ec5427e1e0f26_21747482|id=c2ms5ec5427e1e0f26_21747482|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec5427ea8cda2_35956153">
<label class="col-sm-6" for="c2ms5ec5427ea8cda2_35956153">Longitude</label>
{FGEN:c2ms5ec5427ea8cda2_35956153|name=c2ms5ec5427ea8cda2_35956153|id=c2ms5ec5427ea8cda2_35956153|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms609bc9918eb770_65356721">
<label class="col-sm-6" for="c2ms609bc9918eb770_65356721">Removed Date</label>
{FGEN:c2ms609bc9918eb770_65356721|name=c2ms609bc9918eb770_65356721|id=c2ms609bc9918eb770_65356721|data-type=3|data-position=bottom|data-location=left|field_id=113|revision_id=1}
</div>

<div class="required" id="parent-c2ms609bc9945acf42_50112281">
<label class="col-sm-6" for="c2ms609bc9945acf42_50112281">Removed</label>
{FGEN:c2ms609bc9945acf42_50112281|name=c2ms609bc9945acf42_50112281|id=c2ms609bc9945acf42_50112281|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

</div>

</div>
',
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 114,
                'date_created' => '2020-06-04 17:32:16',
                'id' => 74,
                'identifier' => '91e23949-a678-11ea-b4d4-4a28775f739c',
                'image_url' => 'null',
                'location_id' => 1,
                'num_entries' => 5510,
                'rev_ds_code' => 'stpv2_04_policy_holder_details',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2_04_Policy_Holder_Details',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Policy Holder Details"}}
{{eavfield "c2ms5ec5376b8cf645_86947188" label="Named Insured"}}
{{eavfield "c2ms5ec5376d84fce4_81313970" label="Full Address Geocode Data"}}
{{eavfield "c2ms5ec537741af7e3_51226670" label="Address Line 1"}}
{{eavfield "c2ms5ec537749aabc3_18347003" label="Address Line 2"}}

{{eavfield "c2ms5ec537868f2398_60005280" label="Town/City"}}
{{eavfield "c2ms5ec5379605f971_64081742" label="State"}}
{{eavfield "c2ms5ec53a47329052_94408749" label="Zip"}}
{{eavfield "c2ms5ec53a54d401a9_93973439" label="Country"}}
{{eavfield "c2ms5ec53a69670429_10056750" label="Latitude"}}
{{eavfield "c2ms5ec53a6a040436_15137347" label="Longitude"}}
{{>ds-subtitle subtitle="Bespoke Endorsement"}}
{{eavfield "c2ms5ec53a92c0fc95_40571961" label="Bespoke Endorsement"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Insured Information</h4>
</div>

<div class="required" id="parent-c2ms5ec5376b8cf645_86947188">
<label class="col-sm-6" for="c2ms5ec5376b8cf645_86947188">Named Insured</label>
{FGEN:text|name=c2ms5ec5376b8cf645_86947188|id=c2ms5ec5376b8cf645_86947188|data-type=5|data-position=1|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec5376d84fce4_81313970">
<label class="col-sm-6" for="c2ms5ec5376d84fce4_81313970">Full Address Geocode Data</label>
{FGEN:textarea|name=c2ms5ec5376d84fce4_81313970|id=c2ms5ec5376d84fce4_81313970|data-type=4|data-position=2|data-location=left|field_id=114|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec537741af7e3_51226670">
<label class="col-sm-6" for="c2ms5ec537741af7e3_51226670">Address Line 1</label>
{FGEN:text|name=c2ms5ec537741af7e3_51226670|id=c2ms5ec537741af7e3_51226670|data-type=5|data-position=3|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec537749aabc3_18347003">
<label class="col-sm-6" for="c2ms5ec537749aabc3_18347003">Address Line 2</label>
{FGEN:text|name=c2ms5ec537749aabc3_18347003|id=c2ms5ec537749aabc3_18347003|data-type=5|data-position=4|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec537868f2398_60005280">
<label class="col-sm-6" for="c2ms5ec537868f2398_60005280">Town/City</label>
{FGEN:text|name=c2ms5ec537868f2398_60005280|id=c2ms5ec537868f2398_60005280|data-type=5|data-position=5|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec5379605f971_64081742">
<label class="col-sm-6" for="c2ms5ec5379605f971_64081742">State</label>
{FGEN:usa_states_main|name=c2ms5ec5379605f971_64081742|id=c2ms5ec5379605f971_64081742|data-type=5|data-position=6|data-location=left|field_id=115|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53a47329052_94408749">
<label class="col-sm-6" for="c2ms5ec53a47329052_94408749">Zip</label>
{FGEN:text|name=c2ms5ec53a47329052_94408749|id=c2ms5ec53a47329052_94408749|data-type=5|data-position=7|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53a54d401a9_93973439">
<label class="col-sm-6" for="c2ms5ec53a54d401a9_93973439">Country</label>
{FGEN:country|name=c2ms5ec53a54d401a9_93973439|id=c2ms5ec53a54d401a9_93973439|data-type=1|data-position=8|data-location=left|field_id=116|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53a69670429_10056750">
<label class="col-sm-6" for="c2ms5ec53a69670429_10056750">Latitude</label>
{FGEN:text|name=c2ms5ec53a69670429_10056750|id=c2ms5ec53a69670429_10056750|data-type=5|data-position=9|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53a6a040436_15137347">
<label class="col-sm-6" for="c2ms5ec53a6a040436_15137347">Longitude</label>
{FGEN:text|name=c2ms5ec53a6a040436_15137347|id=c2ms5ec53a6a040436_15137347|data-type=5|data-position=10|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms5ec53a92c0fc95_40571961">
<label class="col-sm-6" for="c2ms5ec53a92c0fc95_40571961">Bespoke Endorsement</label>
{FGEN:textarea|name=c2ms5ec53a92c0fc95_40571961|id=c2ms5ec53a92c0fc95_40571961|data-type=4|data-position=13|data-location=left|field_id=114|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 121,
                'date_created' => '2021-05-11 12:49:26',
                'id' => 81,
                'identifier' => '5180f871-b257-11eb-8146-0223a3b30884',
                'image_url' => '',
                'location_id' => 1,
                'num_entries' => 5465,
                'rev_ds_code' => 'stpv2_04_02_loss_payee_no',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2_04_02_Loss_payee_no',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Number of Loss Payees"}}
{{eavfield "c2ms609a7cd3926052_00063641" label="No. of Loss Payees"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Number of Loss Payees</h4>
</div>

<div class="required" id="parent-c2ms609a7cd3926052_00063641">
<label class="col-sm-6" for="c2ms609a7cd3926052_00063641">No. of Loss Payees</label>
{FGEN:Integer|name=c2ms609a7cd3926052_00063641|id=c2ms609a7cd3926052_00063641|data-type=1|data-position=1|data-location=left|field_id=84|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 122,
                'date_created' => '2021-05-11 12:52:09',
                'id' => 82,
                'identifier' => 'b27d9442-b257-11eb-8146-0223a3b30884',
                'image_url' => '',
                'location_id' => 1,
                'num_entries' => 5465,
                'rev_ds_code' => 'stpv2_04_01_additional_insured_no',
                'rev_ds_description' => '',
                'rev_ds_title' => 'stpv2_04_01_additional_insured_no',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Number of additional insured"}}
{{eavfield "c2ms609a7d7e194550_66411163" label="No. of Additional Insured"}}
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Number of Additional Insured</h4>
</div>

<div class="required" id="parent-c2ms609a7d7e194550_66411163">
<label class="col-sm-6" for="c2ms609a7d7e194550_66411163">No. of Additional Insured</label>
{FGEN:Integer|name=c2ms609a7d7e194550_66411163|id=c2ms609a7d7e194550_66411163|data-type=1|data-position=1|data-location=left|field_id=84|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 123,
                'date_created' => '2021-09-15 10:19:50',
                'id' => 83,
                'identifier' => '75f8f026-160e-11ec-8146-0223a3b30884',
                'image_url' => '',
                'location_id' => 1,
                'num_entries' => 5303,
                'rev_ds_code' => 'stpv2_08_rework_business_information',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2 08 Rework Business Information',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Business Information"}}
{{eavfield "c2ms6141c434c7fc04_12118234" label="Please confirm if transit goods are shipped to/from sanctioned countries"}}
{{eavfield "c2ms6141c4453ea2f8_13893148" label="Does inventory include Arms or armament of any kind?"}}
{{eavfield "c2ms6141c45474fe79_29149630" label="What is the interest?"}}
{{>ds-subtitle subtitle="Questions list"}}
{{eavfield "c2ms6141c47bafde74_85017585" label="Are any of the goods secondhand used or rental equipment?"}}
{{eavfield "c2ms6141c47c735a06_66411954" label="Are there any bulk soft commodities?"}}
{{eavfield "c2ms6141c47d3639d4_16014274" label="Are there any temperature sensitive goods?"}}
{{eavfield "c2ms6141c47de41bb4_17932093" label="Are the goods drummed, bagged or similar?"}}
{{eavfield "c2ms6141c47ed0b458_02259647" label="Are the goods stored and/or shipped according to IMDG regulations?"}}
{{eavfield "c2ms6141c47fc0f059_13544368" label="Are all of the goods containerised or transported in a rigid sided vehicle?"}}
{{eavfield "c2ms6141c48091e1f9_60325801" label="Are there any out of gauge items?"}}
{{eavfield "c2ms6141c4816f2351_61463056" label="Is there any scrap or recycling?"}}
{{eavfield "c2ms6141c482328d49_15646973" label="Are there any precious metals?"}}
{{>ds-subtitle subtitle="Please confirm the method of transport:"}}
{{eavfield "c2ms6141c4ad790d46_21067404" label="Barge %"}}
{{eavfield "c2ms6141c4ae410017_53911360" label="Truck %"}}
{{eavfield "c2ms6141c4af022b32_19366874" label="Vessel %"}}
{{eavfield "c2ms6141c4bd064bf8_85661857" label="Transportation rail  %"}}
{{eavfield "c2ms6141c4bdbbf442_99987502" label="Transportation pipeline %"}}
{{eavfield "c2ms6141c589c6a2b6_38798332" label="Are the goods stored and / or shipped according to local state environmental legislation?"}}
{{eavfield "c2ms6141c58a7dc266_83379153" label="Is there refinery exposure?"}}
{{eavfield "c2ms6141c58b283bf8_01182054" label="Is there outside or stockpile exposure?"}}
{{eavfield "c2ms6141c58bc3bfe0_93485426" label="Are there any international shipments?"}}
{{eavfield "c2ms6141c58c772649_10979135" label="Are there any household goods / personal effects?"}}
{{eavfield "c2ms6141c58d1eb0f1_08988535" label="Is there any manufacturing?"}}
{{eavfield "c2ms6141c58dba41f1_47856138" label="Are any of the locations wineries, distilleries or wooden frame buildings?"}}
{{eavfield "c2ms6141c58e7383a1_13091931" label="Are the goods undergoing any form of process, including any ageing process?"}}
{{eavfield "c2ms6141c58f146b55_35589641" label="Are all the goods finished products?"}}
{{eavfield "c2ms6141c58fa91773_37899999" label="Are any of the goods logs or lumber?"}}
{{eavfield "c2ms6141c59069b185_45610780" label="Is there any yard or outside exposure?"}}
{{eavfield "c2ms6141c59103bac7_93228377" label="Is there any exposure at saw mills or other manufacturing locations?"}}
{{eavfield "c2ms6141c5c0d710b2_41246244" label="Confirm the material of the goods?"}}
{{eavfield "c2ms6141c5d21d0ef0_52418882" label="What is the maximum value of any one item?"}}
{{eavfield "c2ms6141c5dba85801_20887789" label="Please provide full details of the goods"}}
{{eavfield "c2ms6141c5e47d1e76_47032409" label="Are any of the goods cellphones, tablets, computers, laptop computers, televisions or games consoles?"}}
{{eavfield "c2ms6141c5e5692b39_65106987" label="Are the goods temperature sensitive?"}}
{{eavfield "c2ms6141c6c07d3cf0_46263933" label="Is temperature variation coverage required?"}}
{{eavfield "c2ms6141c6037d8e55_88833941" label="What % of the goods are temperature sensitive?"}}
{{eavfield "c2ms6141c604411be2_36570478" label="What is the temperature range?"}}
{{eavfield "c2ms6141c6cbd89a70_96487176" label="Confirm the material of the goods?"}}
{{eavfield "c2ms6141c6cf9e8572_42052612" label="Please provide description of commodity"}}

</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Business Information</h4>
</div>

<div class="required" id="parent-c2ms6141c434c7fc04_12118234">
<label class="col-sm-6" for="c2ms6141c434c7fc04_12118234">Please confirm if transit goods are shipped to/from sanctioned countries</label>
{FGEN:c2ms6141c434c7fc04_12118234|name=c2ms6141c434c7fc04_12118234|id=c2ms6141c434c7fc04_12118234|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c4453ea2f8_13893148">
<label class="col-sm-6" for="c2ms6141c4453ea2f8_13893148">Does inventory include Arms or armament of any kind?</label>
{FGEN:c2ms6141c4453ea2f8_13893148|name=c2ms6141c4453ea2f8_13893148|id=c2ms6141c4453ea2f8_13893148|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c45474fe79_29149630">
<label class="col-sm-6" for="c2ms6141c45474fe79_29149630">What is the interest?</label>
{FGEN:c2ms6141c45474fe79_29149630|name=c2ms6141c45474fe79_29149630|id=c2ms6141c45474fe79_29149630|data-type=1|data-position=bottom|data-location=left|field_id=128|revision_id=1}
</div>

<div class="form-heading custom-hidden">
<h4>Questions list</h4>
</div>

<div class="required" id="parent-c2ms6141c47bafde74_85017585">
<label class="col-sm-6" for="c2ms6141c47bafde74_85017585">Are any of the goods secondhand used or rental equipment?</label>
{FGEN:c2ms6141c47bafde74_85017585|name=c2ms6141c47bafde74_85017585|id=c2ms6141c47bafde74_85017585|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c47c735a06_66411954">
<label class="col-sm-6" for="c2ms6141c47c735a06_66411954">Are there any bulk soft commodities?</label>
{FGEN:c2ms6141c47c735a06_66411954|name=c2ms6141c47c735a06_66411954|id=c2ms6141c47c735a06_66411954|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c47d3639d4_16014274">
<label class="col-sm-6" for="c2ms6141c47d3639d4_16014274">Are there any temperature sensitive goods?</label>
{FGEN:c2ms6141c47d3639d4_16014274|name=c2ms6141c47d3639d4_16014274|id=c2ms6141c47d3639d4_16014274|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c47de41bb4_17932093">
<label class="col-sm-6" for="c2ms6141c47de41bb4_17932093">Are the goods drummed, bagged or similar?</label>
{FGEN:c2ms6141c47de41bb4_17932093|name=c2ms6141c47de41bb4_17932093|id=c2ms6141c47de41bb4_17932093|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c47ed0b458_02259647">
<label class="col-sm-6" for="c2ms6141c47ed0b458_02259647">Are the goods stored and/or shipped according to IMDG regulations?</label>
{FGEN:c2ms6141c47ed0b458_02259647|name=c2ms6141c47ed0b458_02259647|id=c2ms6141c47ed0b458_02259647|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c47fc0f059_13544368">
<label class="col-sm-6" for="c2ms6141c47fc0f059_13544368">Are all of the goods containerised or transported in a rigid sided vehicle?</label>
{FGEN:c2ms6141c47fc0f059_13544368|name=c2ms6141c47fc0f059_13544368|id=c2ms6141c47fc0f059_13544368|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c48091e1f9_60325801">
<label class="col-sm-6" for="c2ms6141c48091e1f9_60325801">Are there any out of gauge items?</label>
{FGEN:c2ms6141c48091e1f9_60325801|name=c2ms6141c48091e1f9_60325801|id=c2ms6141c48091e1f9_60325801|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c4816f2351_61463056">
<label class="col-sm-6" for="c2ms6141c4816f2351_61463056">Is there any scrap or recycling?</label>
{FGEN:c2ms6141c4816f2351_61463056|name=c2ms6141c4816f2351_61463056|id=c2ms6141c4816f2351_61463056|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c482328d49_15646973">
<label class="col-sm-6" for="c2ms6141c482328d49_15646973">Are there any precious metals?</label>
{FGEN:c2ms6141c482328d49_15646973|name=c2ms6141c482328d49_15646973|id=c2ms6141c482328d49_15646973|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c4ad790d46_21067404">
<label class="col-sm-6" for="c2ms6141c4ad790d46_21067404"> Barge %</label>
{FGEN:c2ms6141c4ad790d46_21067404|name=c2ms6141c4ad790d46_21067404|id=c2ms6141c4ad790d46_21067404|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c4ae410017_53911360">
<label class="col-sm-6" for="c2ms6141c4ae410017_53911360"> Truck %</label>
{FGEN:c2ms6141c4ae410017_53911360|name=c2ms6141c4ae410017_53911360|id=c2ms6141c4ae410017_53911360|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c4af022b32_19366874">
<label class="col-sm-6" for="c2ms6141c4af022b32_19366874">  Vessel %</label>
{FGEN:c2ms6141c4af022b32_19366874|name=c2ms6141c4af022b32_19366874|id=c2ms6141c4af022b32_19366874|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c4bd064bf8_85661857">
<label class="col-sm-6" for="c2ms6141c4bd064bf8_85661857"> Transportation rail  %</label>
{FGEN:c2ms6141c4bd064bf8_85661857|name=c2ms6141c4bd064bf8_85661857|id=c2ms6141c4bd064bf8_85661857|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c4bdbbf442_99987502">
<label class="col-sm-6" for="c2ms6141c4bdbbf442_99987502"> Transportation pipeline %</label>
{FGEN:c2ms6141c4bdbbf442_99987502|name=c2ms6141c4bdbbf442_99987502|id=c2ms6141c4bdbbf442_99987502|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c589c6a2b6_38798332">
<label class="col-sm-6" for="c2ms6141c589c6a2b6_38798332">Are the goods stored and / or shipped according to local state environmental legislation?</label>
{FGEN:c2ms6141c589c6a2b6_38798332|name=c2ms6141c589c6a2b6_38798332|id=c2ms6141c589c6a2b6_38798332|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c58a7dc266_83379153">
<label class="col-sm-6" for="c2ms6141c58a7dc266_83379153">Is there refinery exposure?</label>
{FGEN:c2ms6141c58a7dc266_83379153|name=c2ms6141c58a7dc266_83379153|id=c2ms6141c58a7dc266_83379153|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c58b283bf8_01182054">
<label class="col-sm-6" for="c2ms6141c58b283bf8_01182054">Is there outside or stockpile exposure?</label>
{FGEN:c2ms6141c58b283bf8_01182054|name=c2ms6141c58b283bf8_01182054|id=c2ms6141c58b283bf8_01182054|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c58bc3bfe0_93485426">
<label class="col-sm-6" for="c2ms6141c58bc3bfe0_93485426">Are there any international shipments?</label>
{FGEN:c2ms6141c58bc3bfe0_93485426|name=c2ms6141c58bc3bfe0_93485426|id=c2ms6141c58bc3bfe0_93485426|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c58c772649_10979135">
<label class="col-sm-6" for="c2ms6141c58c772649_10979135">Are there any household goods / personal effects?</label>
{FGEN:c2ms6141c58c772649_10979135|name=c2ms6141c58c772649_10979135|id=c2ms6141c58c772649_10979135|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c58d1eb0f1_08988535">
<label class="col-sm-6" for="c2ms6141c58d1eb0f1_08988535">Is there any manufacturing?</label>
{FGEN:c2ms6141c58d1eb0f1_08988535|name=c2ms6141c58d1eb0f1_08988535|id=c2ms6141c58d1eb0f1_08988535|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c58dba41f1_47856138">
<label class="col-sm-6" for="c2ms6141c58dba41f1_47856138">Are any of the locations wineries, distilleries, wooden frame buildings?</label>
{FGEN:c2ms6141c58dba41f1_47856138|name=c2ms6141c58dba41f1_47856138|id=c2ms6141c58dba41f1_47856138|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c58e7383a1_13091931">
<label class="col-sm-6" for="c2ms6141c58e7383a1_13091931">Are the goods undergoing any form of process, including any ageing process?</label>
{FGEN:c2ms6141c58e7383a1_13091931|name=c2ms6141c58e7383a1_13091931|id=c2ms6141c58e7383a1_13091931|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c58f146b55_35589641">
<label class="col-sm-6" for="c2ms6141c58f146b55_35589641">Are all the goods finished products?</label>
{FGEN:c2ms6141c58f146b55_35589641|name=c2ms6141c58f146b55_35589641|id=c2ms6141c58f146b55_35589641|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c58fa91773_37899999">
<label class="col-sm-6" for="c2ms6141c58fa91773_37899999">Are any of the goods logs or lumber?</label>
{FGEN:c2ms6141c58fa91773_37899999|name=c2ms6141c58fa91773_37899999|id=c2ms6141c58fa91773_37899999|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c59069b185_45610780">
<label class="col-sm-6" for="c2ms6141c59069b185_45610780">Is there any yard or outside exposure?</label>
{FGEN:c2ms6141c59069b185_45610780|name=c2ms6141c59069b185_45610780|id=c2ms6141c59069b185_45610780|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c59103bac7_93228377">
<label class="col-sm-6" for="c2ms6141c59103bac7_93228377">Is there any exposure at saw mills or other manufacturing locations?</label>
{FGEN:c2ms6141c59103bac7_93228377|name=c2ms6141c59103bac7_93228377|id=c2ms6141c59103bac7_93228377|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c5c0d710b2_41246244">
<label class="col-sm-6" for="c2ms6141c5c0d710b2_41246244">Confirm the material of the goods?</label>
{FGEN:c2ms6141c5c0d710b2_41246244|name=c2ms6141c5c0d710b2_41246244|id=c2ms6141c5c0d710b2_41246244|data-type=4|data-position=bottom|data-location=left|field_id=114|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c5d21d0ef0_52418882">
<label class="col-sm-6" for="c2ms6141c5d21d0ef0_52418882">What is the maximum value of any one item?</label>
{FGEN:c2ms6141c5d21d0ef0_52418882|name=c2ms6141c5d21d0ef0_52418882|id=c2ms6141c5d21d0ef0_52418882|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c5dba85801_20887789">
<label class="col-sm-6" for="c2ms6141c5dba85801_20887789">Please provide full details of the goods</label>
{FGEN:c2ms6141c5dba85801_20887789|name=c2ms6141c5dba85801_20887789|id=c2ms6141c5dba85801_20887789|data-type=4|data-position=bottom|data-location=left|field_id=114|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c5e47d1e76_47032409">
<label class="col-sm-6" for="c2ms6141c5e47d1e76_47032409">Are any of the goods cellphones, tablets, computers, laptop computers, televisions or games consoles?</label>
{FGEN:c2ms6141c5e47d1e76_47032409|name=c2ms6141c5e47d1e76_47032409|id=c2ms6141c5e47d1e76_47032409|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c5e5692b39_65106987">
<label class="col-sm-6" for="c2ms6141c5e5692b39_65106987">Are the goods temperature sensitive?</label>
{FGEN:c2ms6141c5e5692b39_65106987|name=c2ms6141c5e5692b39_65106987|id=c2ms6141c5e5692b39_65106987|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c6c07d3cf0_46263933">
<label class="col-sm-6" for="c2ms6141c6c07d3cf0_46263933">Is temperature variation coverage required?</label>
{FGEN:c2ms6141c6c07d3cf0_46263933|name=c2ms6141c6c07d3cf0_46263933|id=c2ms6141c6c07d3cf0_46263933|data-type=1|data-position=bottom|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c6037d8e55_88833941">
<label class="col-sm-6" for="c2ms6141c6037d8e55_88833941">What % of the goods are temperature sensitive?</label>
{FGEN:c2ms6141c6037d8e55_88833941|name=c2ms6141c6037d8e55_88833941|id=c2ms6141c6037d8e55_88833941|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c604411be2_36570478">
<label class="col-sm-6" for="c2ms6141c604411be2_36570478">What is the temperature range?</label>
{FGEN:c2ms6141c604411be2_36570478|name=c2ms6141c604411be2_36570478|id=c2ms6141c604411be2_36570478|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c6cbd89a70_96487176">
<label class="col-sm-6" for="c2ms6141c6cbd89a70_96487176">confirm the material of the goods?</label>
{FGEN:c2ms6141c6cbd89a70_96487176|name=c2ms6141c6cbd89a70_96487176|id=c2ms6141c6cbd89a70_96487176|data-type=5|data-position=bottom|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141c6cf9e8572_42052612">
<label class="col-sm-6" for="c2ms6141c6cf9e8572_42052612">Please provide description of commodity</label>
{FGEN:c2ms6141c6cf9e8572_42052612|name=c2ms6141c6cf9e8572_42052612|id=c2ms6141c6cf9e8572_42052612|data-type=4|data-position=bottom|data-location=left|field_id=114|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 124,
                'date_created' => '2021-09-15 11:41:37',
                'id' => 84,
                'identifier' => 'e2d1b496-1619-11ec-8146-0223a3b30884',
                'image_url' => '',
                'location_id' => 1,
                'num_entries' => 5303,
                'rev_ds_code' => 'stpv2_09_rework_incoming_transit_details',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2 09 Rework Incoming Transit Details',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Incoming Transit Details"}}
{{eavfield "c2ms6141da6c650034_04471453" label="What is the expected annual sales for the term?"}}
{{eavfield "c2ms6141da6ecc8dd7_91821804" label="What is the total incoming value shipped?"}}
{{eavfield "c2ms6141da7fb526c3_82781902" label="What is the basis of the valuation (incoming)?"}}
{{eavfield "c2ms6141da840024d0_61760532" label="What is the average value per shipment?"}}
{{eavfield "c2ms6141da84edc660_77708509" label="What is the maximum value per shipment?"}}
{{>ds-subtitle subtitle="Where are the goods being shipped from?"}}
{{eavfield "c2ms6141da8a024685_88594568" label="North America"}}
{{eavfield "c2ms6141da8b87b3a7_83712319" label="South America"}}
{{eavfield "c2ms6141da8c724551_10091315" label="Central America"}}
{{eavfield "c2ms6141da8d60ac28_26181296" label="Europe"}}
{{eavfield "c2ms6141da8e4009b9_13854809" label="Asia"}}
{{eavfield "c2ms6141da8f700343_31549553" label="Africa"}}
{{eavfield "c2ms6141da90706c38_41547254" label="Other"}}
{{eavfield "c2ms6141da921c2420_50890665" label="Please determine the insured responsibility level for transit"}}

</div>
',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Business Information</h4>
</div>

<div class="required" id="parent-c2ms6141da6c650034_04471453">
<label class="col-sm-6" for="c2ms6141da6c650034_04471453">What is the expected annual sales for the term?</label>
{FGEN:c2ms6141da6c650034_04471453|name=c2ms6141da6c650034_04471453|id=c2ms6141da6c650034_04471453|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141da6ecc8dd7_91821804">
<label class="col-sm-6" for="c2ms6141da6ecc8dd7_91821804">What is the total incoming value shipped?</label>
{FGEN:c2ms6141da6ecc8dd7_91821804|name=c2ms6141da6ecc8dd7_91821804|id=c2ms6141da6ecc8dd7_91821804|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141da7fb526c3_82781902">
<label class="col-sm-6" for="c2ms6141da7fb526c3_82781902">What is the basis of the valuation (incoming)?</label>
{FGEN:c2ms6141da7fb526c3_82781902|name=c2ms6141da7fb526c3_82781902|id=c2ms6141da7fb526c3_82781902|data-type=1|data-position=bottom|data-location=left|field_id=126|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141da840024d0_61760532">
<label class="col-sm-6" for="c2ms6141da840024d0_61760532">What is the average value per shipment?</label>
{FGEN:c2ms6141da840024d0_61760532|name=c2ms6141da840024d0_61760532|id=c2ms6141da840024d0_61760532|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141da84edc660_77708509">
<label class="col-sm-6" for="c2ms6141da84edc660_77708509">What is the maximum value per shipment?</label>
{FGEN:c2ms6141da84edc660_77708509|name=c2ms6141da84edc660_77708509|id=c2ms6141da84edc660_77708509|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="form-heading custom-hidden">
<p><b>Where are the goods being shipped from?</b></p>
</div>

<div class="required" id="parent-c2ms6141da8a024685_88594568">
<label class="col-sm-6" for="c2ms6141da8a024685_88594568">North America</label>
{FGEN:c2ms6141da8a024685_88594568|name=c2ms6141da8a024685_88594568|id=c2ms6141da8a024685_88594568|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141da8b87b3a7_83712319">
<label class="col-sm-6" for="c2ms6141da8b87b3a7_83712319">South America</label>
{FGEN:c2ms6141da8b87b3a7_83712319|name=c2ms6141da8b87b3a7_83712319|id=c2ms6141da8b87b3a7_83712319|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141da8c724551_10091315">
<label class="col-sm-6" for="c2ms6141da8c724551_10091315">Central America</label>
{FGEN:c2ms6141da8c724551_10091315|name=c2ms6141da8c724551_10091315|id=c2ms6141da8c724551_10091315|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141da8d60ac28_26181296">
<label class="col-sm-6" for="c2ms6141da8d60ac28_26181296">Europe</label>
{FGEN:c2ms6141da8d60ac28_26181296|name=c2ms6141da8d60ac28_26181296|id=c2ms6141da8d60ac28_26181296|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141da8e4009b9_13854809">
<label class="col-sm-6" for="c2ms6141da8e4009b9_13854809">Asia</label>
{FGEN:c2ms6141da8e4009b9_13854809|name=c2ms6141da8e4009b9_13854809|id=c2ms6141da8e4009b9_13854809|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141da8f700343_31549553">
<label class="col-sm-6" for="c2ms6141da8f700343_31549553">Africa</label>
{FGEN:c2ms6141da8f700343_31549553|name=c2ms6141da8f700343_31549553|id=c2ms6141da8f700343_31549553|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141da90706c38_41547254">
<label class="col-sm-6" for="c2ms6141da90706c38_41547254">Other</label>
{FGEN:c2ms6141da90706c38_41547254|name=c2ms6141da90706c38_41547254|id=c2ms6141da90706c38_41547254|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141da921c2420_50890665">
<label class="col-sm-6" for="c2ms6141da921c2420_50890665">Please determine the insured responsibility level for transit</label>
{FGEN:c2ms6141da921c2420_50890665|name=c2ms6141da921c2420_50890665|id=c2ms6141da921c2420_50890665|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 125,
                'date_created' => '2021-09-15 11:53:12',
                'id' => 85,
                'identifier' => '80e694a7-161b-11ec-8146-0223a3b30884',
                'image_url' => '',
                'location_id' => 1,
                'num_entries' => 5303,
                'rev_ds_code' => 'stpv2_10_rework_outgoing_transit_details',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2 10 Rework Outgoing Transit Details',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Outgoing Transit Details"}}
{{eavfield "c2ms6141dd6c328927_88315060" label="What is the total outgoing value shipped?"}}
{{eavfield "c2ms6141dd71295d85_06202477" label="What is the basis of the outgoing valuation?"}}
{{eavfield "c2ms6141dd7ec537f7_65399520" label="What is the average value per shipment?"}}
{{eavfield "c2ms6141dd7f7dc4a1_70238637" label="What is the maximum value per shipment?"}}
{{>ds-subtitle subtitle="Where are the goods being shipped to?"}}
{{eavfield "c2ms6141dd804fc9f9_72164686" label="North America"}}
{{eavfield "c2ms6141dd81205b45_19378411" label="South America"}}
{{eavfield "c2ms6141dd82026874_50251294" label="Central America"}}
{{eavfield "c2ms6141dd82dcbc60_40697954" label="Europe"}}
{{eavfield "c2ms6141dd83ab7f12_82357228" label="Asia"}}
{{eavfield "c2ms6141dd849ed692_13083233" label="Africa"}}
{{eavfield "c2ms6141dd85771ca8_96453042" label="Other"}}
{{eavfield "c2ms6141dddd4f5d43_78767985" label="Please determine the insured responsibility level for transit"}}

</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Business Information</h4>
</div>

<div class="required" id="parent-c2ms6141dd6c328927_88315060">
<label class="col-sm-6" for="c2ms6141dd6c328927_88315060">What is the total outgoing value shipped?</label>
{FGEN:c2ms6141dd6c328927_88315060|name=c2ms6141dd6c328927_88315060|id=c2ms6141dd6c328927_88315060|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141dd71295d85_06202477">
<label class="col-sm-6" for="c2ms6141dd71295d85_06202477">What is the basis of the outgoing valuation?</label>
{FGEN:c2ms6141dd71295d85_06202477|name=c2ms6141dd71295d85_06202477|id=c2ms6141dd71295d85_06202477|data-type=1|data-position=bottom|data-location=left|field_id=126|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141dd7ec537f7_65399520">
<label class="col-sm-6" for="c2ms6141dd7ec537f7_65399520">What is the average value per shipment?</label>
{FGEN:c2ms6141dd7ec537f7_65399520|name=c2ms6141dd7ec537f7_65399520|id=c2ms6141dd7ec537f7_65399520|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141dd7f7dc4a1_70238637">
<label class="col-sm-6" for="c2ms6141dd7f7dc4a1_70238637">What is the maximum value per shipment?</label>
{FGEN:c2ms6141dd7f7dc4a1_70238637|name=c2ms6141dd7f7dc4a1_70238637|id=c2ms6141dd7f7dc4a1_70238637|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="form-heading custom-hidden">
<p><b>Where are the goods being shipped to?</b></p>
</div>

<div class="required" id="parent-c2ms6141dd804fc9f9_72164686">
<label class="col-sm-6" for="c2ms6141dd804fc9f9_72164686">North America</label>
{FGEN:c2ms6141dd804fc9f9_72164686|name=c2ms6141dd804fc9f9_72164686|id=c2ms6141dd804fc9f9_72164686|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141dd81205b45_19378411">
<label class="col-sm-6" for="c2ms6141dd81205b45_19378411">South America</label>
{FGEN:c2ms6141dd81205b45_19378411|name=c2ms6141dd81205b45_19378411|id=c2ms6141dd81205b45_19378411|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141dd82026874_50251294">
<label class="col-sm-6" for="c2ms6141dd82026874_50251294">Central America</label>
{FGEN:c2ms6141dd82026874_50251294|name=c2ms6141dd82026874_50251294|id=c2ms6141dd82026874_50251294|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141dd82dcbc60_40697954">
<label class="col-sm-6" for="c2ms6141dd82dcbc60_40697954">Europe</label>
{FGEN:c2ms6141dd82dcbc60_40697954|name=c2ms6141dd82dcbc60_40697954|id=c2ms6141dd82dcbc60_40697954|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141dd83ab7f12_82357228">
<label class="col-sm-6" for="c2ms6141dd83ab7f12_82357228">Asia</label>
{FGEN:c2ms6141dd83ab7f12_82357228|name=c2ms6141dd83ab7f12_82357228|id=c2ms6141dd83ab7f12_82357228|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141dd849ed692_13083233">
<label class="col-sm-6" for="c2ms6141dd849ed692_13083233">Africa</label>
{FGEN:c2ms6141dd849ed692_13083233|name=c2ms6141dd849ed692_13083233|id=c2ms6141dd849ed692_13083233|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141dd85771ca8_96453042">
<label class="col-sm-6" for="c2ms6141dd85771ca8_96453042">Other</label>
{FGEN:c2ms6141dd85771ca8_96453042|name=c2ms6141dd85771ca8_96453042|id=c2ms6141dd85771ca8_96453042|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141dddd4f5d43_78767985">
<label class="col-sm-6" for="c2ms6141dddd4f5d43_78767985">Please determine the insured responsibility level for transit</label>
{FGEN:c2ms6141dddd4f5d43_78767985|name=c2ms6141dddd4f5d43_78767985|id=c2ms6141dddd4f5d43_78767985|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 126,
                'date_created' => '2021-09-15 12:02:04',
                'id' => 86,
                'identifier' => 'bddcf689-161c-11ec-8146-0223a3b30884',
                'image_url' => '',
                'location_id' => 1,
                'num_entries' => 5303,
                'rev_ds_code' => 'stpv2_11_rework_general_transit_details',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2 11 Rework General Transit Details',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="General Transit Details"}}
{{eavfield "c2ms6141dfa776f7b9_72078916" label="Maximum value per vehicle"}}
{{eavfield "c2ms6141dfa9520300_96350198" label="What is the transit deductible required?"}}
{{eavfield "c2ms6141dfaa6693f1_68801234" label="Transit Limit"}}
{{eavfield "c2ms6164304ec5ae35_30627992" label="Deductible Ratio - Transit"}}
{{eavfield "c2ms620cb7b866b120_52499934" label="Sales and Outgoing Value Ratio - Transit"}}
{{eavfield "c2ms620fa1e4370ec4_51634761" label="Extra Expenses"}}
{{eavfield "c2ms620fa1e4d1eb63_08277933" label="Extra Expenses - Adjusted"}}

</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Business Information</h4>
</div>

<div class="required" id="parent-c2ms6141dfa776f7b9_72078916">
<label class="col-sm-6" for="c2ms6141dfa776f7b9_72078916">Maximum value per vehicle</label>
{FGEN:float_entry|name=c2ms6141dfa776f7b9_72078916|id=c2ms6141dfa776f7b9_72078916|data-type=2|data-position=1|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141dfa9520300_96350198">
<label class="col-sm-6" for="c2ms6141dfa9520300_96350198">What is the transit deductible required?</label>
{FGEN:float_entry|name=c2ms6141dfa9520300_96350198|id=c2ms6141dfa9520300_96350198|data-type=2|data-position=2|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141dfaa6693f1_68801234">
<label class="col-sm-6" for="c2ms6141dfaa6693f1_68801234">Transit Limit</label>
{FGEN:float_entry|name=c2ms6141dfaa6693f1_68801234|id=c2ms6141dfaa6693f1_68801234|data-type=2|data-position=3|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6164304ec5ae35_30627992">
<label class="col-sm-6" for="c2ms6164304ec5ae35_30627992">Deductible Ratio - Transit</label>
{FGEN:float_entry|name=c2ms6164304ec5ae35_30627992|id=c2ms6164304ec5ae35_30627992|data-type=10|data-position=4|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms620cb7b866b120_52499934">
<label class="col-sm-6" for="c2ms620cb7b866b120_52499934">Sales and Outgoing Value Ratio - Transit</label>
{FGEN:text|name=c2ms620cb7b866b120_52499934|id=c2ms620cb7b866b120_52499934|data-type=10|data-position=5|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms620fa1e4370ec4_51634761">
<label class="col-sm-6" for="c2ms620fa1e4370ec4_51634761">Extra Expenses</label>
{FGEN:c2ms620fa1e4370ec4_51634761|name=c2ms620fa1e4370ec4_51634761|id=c2ms620fa1e4370ec4_51634761|data-type=2|data-position=bottom|data-location=left|field_id=81|revision_id=1}
</div>

<div class="required" id="parent-c2ms620fa1e4d1eb63_08277933">
<label class="col-sm-6" for="c2ms620fa1e4d1eb63_08277933">Extra Expenses - Adjusted</label>
{FGEN:c2ms620fa1e4d1eb63_08277933|name=c2ms620fa1e4d1eb63_08277933|id=c2ms620fa1e4d1eb63_08277933|data-type=2|data-position=bottom|data-location=left|field_id=81|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 127,
                'date_created' => '2021-09-15 12:07:13',
                'id' => 87,
                'identifier' => '76097720-161d-11ec-8146-0223a3b30884',
                'image_url' => '',
                'location_id' => 1,
                'num_entries' => 5303,
                'rev_ds_code' => 'stpv2_12_rework_stock_details',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2 12 Rework Stock Details',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Stock Details"}}
{{eavfield "c2ms6141e1a6b77066_41064833" label="What is the storage deductible?"}}
{{eavfield "c2ms6141e1a77f8715_02269704" label="Storage Limit"}}
{{eavfield "c2ms615eeb64009b75_80180275" label="Deductible Ratio - Stock"}}
{{eavfield "c2ms620255daab6944_08830870" label="What is the basis of valuation?"}}
{{eavfield "c2ms6202762883e8f3_45678962" label="Earthquake deductible"}}
{{eavfield "c2ms628ca1947b7604_15630569" label="Earthquake deductible - Override"}}
{{eavfield "c2ms6202763378a550_30008710" label="Windstorm deductible"}}
{{eavfield "c2ms628ca194d78b09_28775991" label="Windstorm deductible - Override"}}
{{eavfield "c2ms620276362e87c9_22891501" label="Flood deductible"}}
{{eavfield "c2ms628ca199295f03_28278587" label="Flood deductible - Override"}}
{{eavfield "c2ms62027636dd3aa6_79485384" label="Unnamed locations"}}
{{eavfield "c2ms620276378dfed1_44949035" label="Unnamed locations - Adjusted"}}
{{eavfield "c2ms61a8923ecbc8a0_94060818" label="Number of Locations"}}

</div>
',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Stock Details</h4>
</div>

<div class="required" id="parent-c2ms6141e1a6b77066_41064833">
<label class="col-sm-6" for="c2ms6141e1a6b77066_41064833">What is the storage deductible?</label>
{FGEN:float_entry|name=c2ms6141e1a6b77066_41064833|id=c2ms6141e1a6b77066_41064833|data-type=2|data-position=1|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141e1a77f8715_02269704">
<label class="col-sm-6" for="c2ms6141e1a77f8715_02269704">Storage Limit</label>
{FGEN:float_entry|name=c2ms6141e1a77f8715_02269704|id=c2ms6141e1a77f8715_02269704|data-type=2|data-position=2|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms615eeb64009b75_80180275">
<label class="col-sm-6" for="c2ms615eeb64009b75_80180275">Deductible Ratio</label>
{FGEN:float_entry|name=c2ms615eeb64009b75_80180275|id=c2ms615eeb64009b75_80180275|data-type=10|data-position=3|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms620255daab6944_08830870">
<label class="col-sm-6" for="c2ms620255daab6944_08830870">What is the basis of valuation?</label>
{FGEN:stpv2_basis_of_valuation|name=c2ms620255daab6944_08830870|id=c2ms620255daab6944_08830870|data-type=1|data-position=4|data-location=left|field_id=126|revision_id=1}
</div>

<div class="required" id="parent-c2ms6202762883e8f3_45678962">
<label class="col-sm-6" for="c2ms6202762883e8f3_45678962">Earthquake deductible</label>
{FGEN:float_entry|name=c2ms6202762883e8f3_45678962|id=c2ms6202762883e8f3_45678962|data-type=2|data-position=5|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms628ca1947b7604_15630569">
<label class="col-sm-6" for="c2ms628ca1947b7604_15630569">Earthquake deductible - Override</label>
{FGEN:c2ms628ca1947b7604_15630569|name=c2ms628ca1947b7604_15630569|id=c2ms628ca1947b7604_15630569|data-type=2|data-position=bottom|data-location=left|field_id=81|revision_id=1}
</div>

<div class="required" id="parent-c2ms6202763378a550_30008710">
<label class="col-sm-6" for="c2ms6202763378a550_30008710">Windstorm deductible</label>
{FGEN:float_entry|name=c2ms6202763378a550_30008710|id=c2ms6202763378a550_30008710|data-type=2|data-position=6|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms628ca194d78b09_28775991">
<label class="col-sm-6" for="c2ms628ca194d78b09_28775991">Windstorm deductible - Override</label>
{FGEN:c2ms628ca194d78b09_28775991|name=c2ms628ca194d78b09_28775991|id=c2ms628ca194d78b09_28775991|data-type=2|data-position=bottom|data-location=left|field_id=81|revision_id=1}
</div>

<div class="required" id="parent-c2ms620276362e87c9_22891501">
<label class="col-sm-6" for="c2ms620276362e87c9_22891501">Flood deductible</label>
{FGEN:float_entry|name=c2ms620276362e87c9_22891501|id=c2ms620276362e87c9_22891501|data-type=2|data-position=7|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms628ca199295f03_28278587">
<label class="col-sm-6" for="c2ms628ca199295f03_28278587">Flood deductible - Override</label>
{FGEN:c2ms628ca199295f03_28278587|name=c2ms628ca199295f03_28278587|id=c2ms628ca199295f03_28278587|data-type=2|data-position=bottom|data-location=left|field_id=81|revision_id=1}
</div>

<div class="required" id="parent-c2ms62027636dd3aa6_79485384">
<label class="col-sm-6" for="c2ms62027636dd3aa6_79485384">Unnamed locations</label>
{FGEN:float_entry|name=c2ms62027636dd3aa6_79485384|id=c2ms62027636dd3aa6_79485384|data-type=2|data-position=8|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms620276378dfed1_44949035">
<label class="col-sm-6" for="c2ms620276378dfed1_44949035">Unnamed locations - Adjusted</label>
{FGEN:float_entry|name=c2ms620276378dfed1_44949035|id=c2ms620276378dfed1_44949035|data-type=2|data-position=9|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms61a8923ecbc8a0_94060818">
<label class="col-sm-6" for="c2ms61a8923ecbc8a0_94060818">Number of Locations</label>
{FGEN:Integer|name=c2ms61a8923ecbc8a0_94060818|id=c2ms61a8923ecbc8a0_94060818|data-type=1|data-position=10|data-location=left|field_id=84|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 128,
                'date_created' => '2021-09-15 13:30:16',
                'id' => 88,
                'identifier' => '1067af89-1629-11ec-8146-0223a3b30884',
                'image_url' => '',
                'location_id' => 1,
                'num_entries' => 6232,
                'rev_ds_code' => 'stpv2_12_2_rework_building_mi_info',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2 12_2 Rework Building MI Info',
                'rev_hb' => '<div
class="{{#if instanceCount}}full{{else}}empty{{/if}}"
data-identifier="{{datasetRevisionIdentifier}}"
data-role="multi-placeholder"
data-ds-control="{{control}}"
>

<div class="form-heading custom-hidden mi-header" data-role="mi-header" data-identifier="{{datasetRevisionIdentifier}}">
<div class="left">
<h4>Location Information
<span class="instance-counter">
(Total: <span data-role="instance-counter" data-identifier="{{datasetRevisionIdentifier}}">{{instanceCount}}</span>)
</span>
</h4>
</div>

<div class="right mi-control mi-add-instance">
<button type="button" data-role="add-instance" data-identifier="{{datasetRevisionIdentifier}}" data-title="Location Information">Add</button>
</div>

<div class="clear"></div>
</div>

<!-- Form fields with eav dataset identifier and instance count  -->
{{>multi-mandatory-fields  datasetRevisionIdentifier=datasetRevisionIdentifier instanceCount=instanceCount}}

{{#if instanceCount}}
{{#each instances as |instance|}}

<div data-role="instance-wrapper" data-index="{{instance.index}}">
{{>multi-instance-header
title="Location"
datasetRevisionIdentifier=../datasetRevisionIdentifier
index=instance.index
}}

<!-- Form field that contains persisted instance\'s identifier (form field "ident") -->
<input
type="hidden"
name="c2msmf[{{../datasetRevisionIdentifier}}][{{instance.index}}][ident]"
id="{{../datasetRevisionIdentifier}}_ident_{{instance.index}}"
data-template-name="c2msmf[{{../datasetRevisionIdentifier}}][\\{{index}}][ident]"
data-template-id="{{../datasetRevisionIdentifier}}_ident_\\{{index}}"
value="{{instance.ident}}"
/>

{{>stp-location-information-mi-fields dataset=../dataset fieldCollection=../fieldCollection instance=instance index=instance.index}}

<!-- Footer -->
{{>multi-instance-footer
datasetRevisionIdentifier=../datasetRevisionIdentifier
index=instance.index
title="Location Information"
}}
</div>
{{/each}}
{{ else }}
<p class="mi-empty">There\'s no Location Information available</p>
{{/if}}

<!-- Template for adding additional instance on the frontend -->
<script type="text/x-handlebars" data-identifier="{{datasetRevisionIdentifier}}" data-role="multi-template">
<div data-role="instance-wrapper" data-index="\\{{index}}">

<div class="form-heading custom-hidden mi-instance-header">
<div class="left mi-instance-label">
<h4 data-template-html="Additional Insured Information: \\{{index}}">Location Information: \\{{index}}</h4>
</div>
<div class="right mi-control mi-remove-instance">
<button
class="right"
type="button"
data-role="remove-instance"
data-identifier="{{datasetRevisionIdentifier}}"
data-index="\\{{index}}"
data-title="Location Information"
data-template-html="Remove Location Information (Num: \\{{index}})"
>Remove Location Information (Num: \\{{index}})</button>
</div>
<div class="clear"></div>
</div>

{{>stp-location-information-mi-fields dataset=dataset fieldCollection=fieldCollection}}


<input
type="hidden"
name="c2msmf[{{datasetRevisionIdentifier}}][\\{{index}}][ident]"
id="{{datasetRevisionIdentifier}}_ident_\\{{index}}"
data-template-name="c2msmf[{{datasetRevisionIdentifier}}][\\{{index}}][ident]"
data-template-id="{{datasetRevisionIdentifier}}_ident_\\{{index}}"
value=""
/>


<div class="form-heading custom-hidden mi-instance-footer">
<div class="right mi-control mi-remove-instance">
<button
class="right"
type="button"
data-role="remove-instance"
data-identifier="{{datasetRevisionIdentifier}}"
data-index="\\{{index}}"
data-title="Location Information"
data-template-html="Remove Location Information (Num: \\{{index}})"
>Remove Location Information (Num: \\{{index}})</button>
</div>
<div class="clear"></div>
</div>
</div>
</script>
</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-multi-box">

<div class="form-heading custom-hidden">
<h4>Location Information: {COUNT}</h4>
</div>

<div class="required" id="parent-c2ms6141f3b78e4f95_72171102">
<label class="col-sm-6" for="c2ms6141f3b78e4f95_72171102">Full Mailing Address Lookup</label>
{FGEN:textarea|name=c2ms6141f3b78e4f95_72171102|id=c2ms6141f3b78e4f95_72171102|data-type=4|data-position=1|data-location=left|field_id=114|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141f3bbc88555_86465983">
<label class="col-sm-6" for="c2ms6141f3bbc88555_86465983">Address line 1</label>
{FGEN:text|name=c2ms6141f3bbc88555_86465983|id=c2ms6141f3bbc88555_86465983|data-type=5|data-position=2|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141f3c31fa360_48616956">
<label class="col-sm-6" for="c2ms6141f3c31fa360_48616956">Address line 2</label>
{FGEN:text|name=c2ms6141f3c31fa360_48616956|id=c2ms6141f3c31fa360_48616956|data-type=5|data-position=3|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141f3c5126b09_68615291">
<label class="col-sm-6" for="c2ms6141f3c5126b09_68615291">Town/City</label>
{FGEN:text|name=c2ms6141f3c5126b09_68615291|id=c2ms6141f3c5126b09_68615291|data-type=5|data-position=4|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141f3cd055f78_92525981">
<label class="col-sm-6" for="c2ms6141f3cd055f78_92525981">Province</label>
{FGEN:usa_states_main|name=c2ms6141f3cd055f78_92525981|id=c2ms6141f3cd055f78_92525981|data-type=5|data-position=5|data-location=left|field_id=115|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141f3d66c5639_14121464">
<label class="col-sm-6" for="c2ms6141f3d66c5639_14121464">Zip</label>
{FGEN:text|name=c2ms6141f3d66c5639_14121464|id=c2ms6141f3d66c5639_14121464|data-type=5|data-position=6|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141f3e35a4ea2_52343008">
<label class="col-sm-6" for="c2ms6141f3e35a4ea2_52343008">Country</label>
{FGEN:country|name=c2ms6141f3e35a4ea2_52343008|id=c2ms6141f3e35a4ea2_52343008|data-type=1|data-position=7|data-location=left|field_id=116|revision_id=1}
</div>

<div class="required" id="parent-c2ms61680bc08aa2f6_16844169">
<label class="col-sm-6" for="c2ms61680bc08aa2f6_16844169">Latitude</label>
{FGEN:text|name=c2ms61680bc08aa2f6_16844169|id=c2ms61680bc08aa2f6_16844169|data-type=5|data-position=8|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms61680bc18f0592_76748509">
<label class="col-sm-6" for="c2ms61680bc18f0592_76748509">Longitude</label>
{FGEN:text|name=c2ms61680bc18f0592_76748509|id=c2ms61680bc18f0592_76748509|data-type=5|data-position=9|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141f3e8e766d5_52728524">
<label class="col-sm-6" for="c2ms6141f3e8e766d5_52728524">Would you like to add a name for this location?</label>
{FGEN:text|name=c2ms6141f3e8e766d5_52728524|id=c2ms6141f3e8e766d5_52728524|data-type=5|data-position=10|data-location=left|field_id=112|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141f3fc28eec3_31425592">
<label class="col-sm-6" for="c2ms6141f3fc28eec3_31425592">What is the average inventory TIV?</label>
{FGEN:float_entry|name=c2ms6141f3fc28eec3_31425592|id=c2ms6141f3fc28eec3_31425592|data-type=2|data-position=11|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141f3fd523218_41211369">
<label class="col-sm-6" for="c2ms6141f3fd523218_41211369">What is the maximum inventory TIV?</label>
{FGEN:float_entry|name=c2ms6141f3fd523218_41211369|id=c2ms6141f3fd523218_41211369|data-type=2|data-position=12|data-location=left|field_id=118|revision_id=1}
</div>

<div class="form-heading custom-hidden">
<h4>Fire Protection</h4>
</div>

<div class="required" id="parent-c2ms6141f405c8a920_08751293">
<label class="col-sm-6" for="c2ms6141f405c8a920_08751293">Fully sprinklered</label>
{FGEN:fully_sprinklered_checkbok|name=c2ms6141f405c8a920_08751293|id=c2ms6141f405c8a920_08751293|data-type=1|data-position=13|data-location=left|field_id=134|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141f408ba6129_93406249">
<label class="col-sm-6" for="c2ms6141f408ba6129_93406249">Fully functioning fire alarm central station</label>
{FGEN:fire_alarm_central_station|name=c2ms6141f408ba6129_93406249|id=c2ms6141f408ba6129_93406249|data-type=1|data-position=14|data-location=left|field_id=135|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141f40b117e11_95329404">
<label class="col-sm-6" for="c2ms6141f40b117e11_95329404">None</label>
{FGEN:none|name=c2ms6141f40b117e11_95329404|id=c2ms6141f40b117e11_95329404|data-type=1|data-position=15|data-location=left|field_id=140|revision_id=1}
</div>

<div class="form-heading custom-hidden">
<h4>Security</h4>
</div>

<div class="required" id="parent-c2ms6141f4125e2ba2_99043712">
<label class="col-sm-6" for="c2ms6141f4125e2ba2_99043712">Security Guards</label>
{FGEN:security_guards|name=c2ms6141f4125e2ba2_99043712|id=c2ms6141f4125e2ba2_99043712|data-type=1|data-position=16|data-location=left|field_id=137|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141f414cd1549_59127983">
<label class="col-sm-6" for="c2ms6141f414cd1549_59127983">Key Card Access</label>
{FGEN:key_card_access|name=c2ms6141f414cd1549_59127983|id=c2ms6141f414cd1549_59127983|data-type=1|data-position=17|data-location=left|field_id=138|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141f4195a9283_82042967">
<label class="col-sm-6" for="c2ms6141f4195a9283_82042967">Fully Functioning CCTV</label>
{FGEN:cctv_|name=c2ms6141f4195a9283_82042967|id=c2ms6141f4195a9283_82042967|data-type=1|data-position=18|data-location=left|field_id=139|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141f41b92eb19_09353598">
<label class="col-sm-6" for="c2ms6141f41b92eb19_09353598">Fully Functioning Central Station Burglar Alarm</label>
{FGEN:central_station_burglar_alarm|name=c2ms6141f41b92eb19_09353598|id=c2ms6141f41b92eb19_09353598|data-type=1|data-position=19|data-location=left|field_id=136|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141f41d9a7791_91257222">
<label class="col-sm-6" for="c2ms6141f41d9a7791_91257222">None</label>
{FGEN:none|name=c2ms6141f41d9a7791_91257222|id=c2ms6141f41d9a7791_91257222|data-type=1|data-position=20|data-location=left|field_id=140|revision_id=1}
</div>

<div class="form-heading custom-hidden">
<h4>Building Info</h4>
</div>

<div class="required" id="parent-c2ms6141f423d4aab0_91761467">
<label class="col-sm-6" for="c2ms6141f423d4aab0_91761467">What is the construction type?</label>
{FGEN:construction_type_stp|name=c2ms6141f423d4aab0_91761467|id=c2ms6141f423d4aab0_91761467|data-type=1|data-position=21|data-location=left|field_id=141|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141f4299aca12_13154605">
<label class="col-sm-6" for="c2ms6141f4299aca12_13154605">When was the building built?</label>
{FGEN:building_age_stp|name=c2ms6141f4299aca12_13154605|id=c2ms6141f4299aca12_13154605|data-type=1|data-position=22|data-location=left|field_id=142|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141f433b5cf89_71057956">
<label class="col-sm-6" for="c2ms6141f433b5cf89_71057956">When was the roof constructed or last updated?</label>
{FGEN:roof_age_stp|name=c2ms6141f433b5cf89_71057956|id=c2ms6141f433b5cf89_71057956|data-type=1|data-position=23|data-location=left|field_id=143|revision_id=1}
</div>

<div class="required" id="parent-c2ms61c1c6a5626f91_13659531">
<label class="col-sm-6" for="c2ms61c1c6a5626f91_13659531">Has the location been retrofitted for Earthquake?</label>
{FGEN:yes_no_unknown|name=c2ms61c1c6a5626f91_13659531|id=c2ms61c1c6a5626f91_13659531|data-type=1|data-position=24|data-location=left|field_id=146|revision_id=1}
</div>

<div class="required" id="parent-c2ms619df613373903_59881372">
<label class="col-sm-6" for="c2ms619df613373903_59881372">When was the location retrofitted</label>
{FGEN:retrofit_location_stp|name=c2ms619df613373903_59881372|id=c2ms619df613373903_59881372|data-type=1|data-position=25|data-location=left|field_id=144|revision_id=3}
</div>

<div class="required" id="parent-c2ms6141f43e54e713_41821865">
<label class="col-sm-6" for="c2ms6141f43e54e713_41821865">Is any light manufacturing or processing undertaken at this location?</label>
{FGEN:yes_no|name=c2ms6141f43e54e713_41821865|id=c2ms6141f43e54e713_41821865|data-type=1|data-position=26|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms6141f43f901728_45935554">
<label class="col-sm-6" for="c2ms6141f43f901728_45935554">Are backup generators in place?</label>
{FGEN:yes_no|name=c2ms6141f43f901728_45935554|id=c2ms6141f43f901728_45935554|data-type=1|data-position=27|data-location=left|field_id=117|revision_id=1}
</div>

<div class="form-heading custom-hidden">
<h4>MTA Info</h4>
</div>

<div class="required" id="parent-c2ms6149d6e3ae6d00_29930418">
<label class="col-sm-6" for="c2ms6149d6e3ae6d00_29930418">Removed</label>
{FGEN:yes_no|name=c2ms6149d6e3ae6d00_29930418|id=c2ms6149d6e3ae6d00_29930418|data-type=1|data-position=28|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms6149d6e8597e75_45100651">
<label class="col-sm-6" for="c2ms6149d6e8597e75_45100651">Date of Removal</label>
{FGEN:datepicker|name=c2ms6149d6e8597e75_45100651|id=c2ms6149d6e8597e75_45100651|data-type=3|data-position=29|data-location=left|field_id=113|revision_id=1}
</div>

<div class="required" id="parent-c2ms6149d6e4492aa8_17757585">
<label class="col-sm-6" for="c2ms6149d6e4492aa8_17757585">Added</label>
{FGEN:yes_no|name=c2ms6149d6e4492aa8_17757585|id=c2ms6149d6e4492aa8_17757585|data-type=1|data-position=30|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms6149d6e929f403_13145211">
<label class="col-sm-6" for="c2ms6149d6e929f403_13145211">Date of Addition</label>
{FGEN:datepicker|name=c2ms6149d6e929f403_13145211|id=c2ms6149d6e929f403_13145211|data-type=3|data-position=31|data-location=left|field_id=113|revision_id=1}
</div>

<div class="required" id="parent-c2ms6149d6e5194127_75373027">
<label class="col-sm-6" for="c2ms6149d6e5194127_75373027">Edited</label>
{FGEN:yes_no|name=c2ms6149d6e5194127_75373027|id=c2ms6149d6e5194127_75373027|data-type=1|data-position=32|data-location=left|field_id=117|revision_id=1}
</div>

<div class="required" id="parent-c2ms6149d6e9e3a000_58497691">
<label class="col-sm-6" for="c2ms6149d6e9e3a000_58497691">Date of Edit</label>
{FGEN:datepicker|name=c2ms6149d6e9e3a000_58497691|id=c2ms6149d6e9e3a000_58497691|data-type=3|data-position=33|data-location=left|field_id=113|revision_id=1}
</div>

<div class="required" id="parent-c2ms6149d6e6107648_49765093">
<label class="col-sm-6" for="c2ms6149d6e6107648_49765093">Is Rated</label>
{FGEN:yes_no|name=c2ms6149d6e6107648_49765093|id=c2ms6149d6e6107648_49765093|data-type=1|data-position=34|data-location=left|field_id=117|revision_id=1}
</div>

<div class="form-heading custom-hidden">
<h4>Underwriting Info</h4>
</div>

<div class="required" id="parent-c2ms615eeda82b6506_27368205">
<label class="col-sm-6" for="c2ms615eeda82b6506_27368205">Distance to Coast</label>
{FGEN:float_entry|name=c2ms615eeda82b6506_27368205|id=c2ms615eeda82b6506_27368205|data-type=10|data-position=35|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms615eeda8d63cf9_21612109">
<label class="col-sm-6" for="c2ms615eeda8d63cf9_21612109">Critical EQ Load</label>
{FGEN:float_entry|name=c2ms615eeda8d63cf9_21612109|id=c2ms615eeda8d63cf9_21612109|data-type=2|data-position=36|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms615eedaa0b7985_82224138">
<label class="col-sm-6" for="c2ms615eedaa0b7985_82224138">All Other Cat Load</label>
{FGEN:float_entry|name=c2ms615eedaa0b7985_82224138|id=c2ms615eedaa0b7985_82224138|data-type=2|data-position=37|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms620a15505863b9_43040681">
<label class="col-sm-6" for="c2ms620a15505863b9_43040681">MI UUID</label>
{FGEN:stp_uuid_mi|name=c2ms620a15505863b9_43040681|id=c2ms620a15505863b9_43040681|data-type=9|data-position=38|data-location=left|field_id=148|revision_id=1}
</div>

<div class="required" id="parent-c2ms6262727b5e2814_78976587">
<label class="col-sm-6" for="c2ms6262727b5e2814_78976587">Maximum Inventory TIV Percentage</label>
{FGEN:c2ms6262727b5e2814_78976587|name=c2ms6262727b5e2814_78976587|id=c2ms6262727b5e2814_78976587|data-type=2|data-position=bottom|data-location=left|field_id=81|revision_id=1}
</div>

</div>

</div>',
                'revision_id' => 1,
                'type_id' => 3,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 129,
                'date_created' => '2021-09-20 09:56:17',
                'id' => 89,
                'identifier' => 'ff5f6205-19f8-11ec-8146-0223a3b30884',
                'image_url' => '',
                'location_id' => 1,
                'num_entries' => 5303,
                'rev_ds_code' => 'stpv2_13_rework_claim_details',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2 13 Rework Claim Details',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Claims Information"}}
{{eavfield "c2ms614859f56242b2_56532854" label="Have there been any claims or incidents of loss in the last 5 years?"}}
{{eavfield "c2ms61c1cb7a6211f8_72443045" label="Are any Claims outstanding?"}}
{{>ds-subtitle subtitle="Years 2017-2021"}}
{{eavfield "c2ms614859d095a524_09047677" label="Transit Incurred amount 2021"}}
{{eavfield "c2ms614859d15b5990_69665561" label="Stock Incurred amount 2021"}}
{{eavfield "c2ms622f01259b2251_40156663" label="Total Incurred amount 2021"}}
{{eavfield "c2ms61c1cb63f37ad1_70225499" label="Cause of Loss 2021"}}
{{eavfield "c2ms614859d25094d3_31894089" label="Transit Incurred amount 2020"}}
{{eavfield "c2ms614859d2eb6864_08627031" label="Stock Incurred amount 2020"}}
{{eavfield "c2ms622f0125d0a990_30657965" label="Total Incurred amount 2020"}}
{{eavfield "c2ms61c2fa625d46c1_89045176" label="Cause of Loss 2020"}}
{{eavfield "c2ms614859d3c0e6e7_33255676" label="Transit Incurred amount 2019"}}
{{eavfield "c2ms614859d4741428_89374266" label="Stock Incurred amount 2019"}}
{{eavfield "c2ms622f0126b48d93_34028305" label="Total Incurred amount 2019"}}
{{eavfield "c2ms61c2fa62d71538_43518984" label="Cause of Loss 2019"}}
{{eavfield "c2ms614859d55c5488_30742328" label="Transit Incurred amount 2018"}}
{{eavfield "c2ms614859d612a070_32012165" label="Stock Incurred amount 2018"}}
{{eavfield "c2ms622f01274c9de2_41919093" label="Total Incurred amount 2018"}}
{{eavfield "c2ms61c2fa638cf5a6_67167765" label="Cause of Loss 2018"}}
{{eavfield "c2ms614859d705b474_33390724" label="Transit Incurred amount 2017"}}
{{eavfield "c2ms614859d7acf243_25989231" label="Stock Incurred amount 2017"}}
{{eavfield "c2ms622f0127bfc4f8_13405278" label="Total Incurred amount 2017"}}
{{eavfield "c2ms61c2fa6435f632_55572737" label="Cause of Loss 2017"}}
{{>ds-subtitle subtitle="Total Claims"}}
{{eavfield "c2ms614859d8ac9714_08904158" label="Transit Incurred amount - Total"}}
{{eavfield "c2ms614859d95ffad3_14655680" label="Stock Incurred amount - Total"}}
{{eavfield "c2ms622f01286ca451_77582332" label="Total Transit and Stock Incurred amount"}}

</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Claims Information</h4>
</div>

<div class="required" id="parent-c2ms614859f56242b2_56532854">
<label class="col-sm-6" for="c2ms614859f56242b2_56532854">Have there been any claims or incidents of loss in the last 5 years?</label>
{FGEN:yes_no|name=c2ms614859f56242b2_56532854|id=c2ms614859f56242b2_56532854|data-type=1|data-position=1|data-location=left|field_id=117|revision_id=1}
</div>

<div class="c2ms614859f56242b2_56532854">

<div class="required" id="parent-c2ms61c1cb7a6211f8_72443045">
<label class="col-sm-6" for="c2ms61c1cb7a6211f8_72443045">Are any Claims outstanding?</label>
{FGEN:checkbox_agree|name=c2ms61c1cb7a6211f8_72443045|id=c2ms61c1cb7a6211f8_72443045|data-type=1|data-position=2|data-location=left|field_id=85|revision_id=1}
</div>

<div class="form-heading custom-hidden">
<p>Yearly claims info</p>
</div>

<div class="required" id="parent-c2ms614859d095a524_09047677">
<label class="col-sm-6" for="c2ms614859d095a524_09047677">Transit Incurred amount 2021</label>
{FGEN:float_entry|name=c2ms614859d095a524_09047677|id=c2ms614859d095a524_09047677|data-type=2|data-position=3|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms614859d15b5990_69665561">
<label class="col-sm-6" for="c2ms614859d15b5990_69665561">Stock Incurred amount 2021</label>
{FGEN:float_entry|name=c2ms614859d15b5990_69665561|id=c2ms614859d15b5990_69665561|data-type=2|data-position=4|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms622f01259b2251_40156663">
<label class="col-sm-6" for="c2ms622f01259b2251_40156663">Total Incurred amount 2021</label>
{FGEN:c2ms622f01259b2251_40156663|name=c2ms622f01259b2251_40156663|id=c2ms622f01259b2251_40156663|data-type=2|data-position=bottom|data-location=left|field_id=81|revision_id=1}
</div>

<div class="required" id="parent-c2ms61c1cb63f37ad1_70225499">
<label class="col-sm-6" for="c2ms61c1cb63f37ad1_70225499">Cause of Loss 2021</label>
{FGEN:stp_cause_of_loss|name=c2ms61c1cb63f37ad1_70225499|id=c2ms61c1cb63f37ad1_70225499|data-type=1|data-position=5|data-location=left|field_id=147|revision_id=1}
</div>

<div class="required" id="parent-c2ms614859d25094d3_31894089">
<label class="col-sm-6" for="c2ms614859d25094d3_31894089">Transit Incurred amount 2020</label>
{FGEN:float_entry|name=c2ms614859d25094d3_31894089|id=c2ms614859d25094d3_31894089|data-type=2|data-position=6|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms614859d2eb6864_08627031">
<label class="col-sm-6" for="c2ms614859d2eb6864_08627031">Stock Incurred amount 2020</label>
{FGEN:float_entry|name=c2ms614859d2eb6864_08627031|id=c2ms614859d2eb6864_08627031|data-type=2|data-position=7|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms622f0125d0a990_30657965">
<label class="col-sm-6" for="c2ms622f0125d0a990_30657965">Total Incurred amount 2020</label>
{FGEN:c2ms622f0125d0a990_30657965|name=c2ms622f0125d0a990_30657965|id=c2ms622f0125d0a990_30657965|data-type=2|data-position=bottom|data-location=left|field_id=81|revision_id=1}
</div>

<div class="required" id="parent-c2ms61c2fa625d46c1_89045176">
<label class="col-sm-6" for="c2ms61c2fa625d46c1_89045176">Cause of Loss 2020</label>
{FGEN:stp_cause_of_loss|name=c2ms61c2fa625d46c1_89045176|id=c2ms61c2fa625d46c1_89045176|data-type=1|data-position=8|data-location=left|field_id=147|revision_id=1}
</div>

<div class="required" id="parent-c2ms614859d3c0e6e7_33255676">
<label class="col-sm-6" for="c2ms614859d3c0e6e7_33255676">Transit Incurred amount 2019</label>
{FGEN:float_entry|name=c2ms614859d3c0e6e7_33255676|id=c2ms614859d3c0e6e7_33255676|data-type=2|data-position=9|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms614859d4741428_89374266">
<label class="col-sm-6" for="c2ms614859d4741428_89374266">Stock Incurred amount 2019</label>
{FGEN:float_entry|name=c2ms614859d4741428_89374266|id=c2ms614859d4741428_89374266|data-type=2|data-position=10|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms622f0126b48d93_34028305">
<label class="col-sm-6" for="c2ms622f0126b48d93_34028305">Total Incurred amount 2019</label>
{FGEN:c2ms622f0126b48d93_34028305|name=c2ms622f0126b48d93_34028305|id=c2ms622f0126b48d93_34028305|data-type=2|data-position=bottom|data-location=left|field_id=81|revision_id=1}
</div>

<div class="required" id="parent-c2ms61c2fa62d71538_43518984">
<label class="col-sm-6" for="c2ms61c2fa62d71538_43518984">Cause of Loss 2019</label>
{FGEN:stp_cause_of_loss|name=c2ms61c2fa62d71538_43518984|id=c2ms61c2fa62d71538_43518984|data-type=1|data-position=11|data-location=left|field_id=147|revision_id=1}
</div>

<div class="required" id="parent-c2ms614859d55c5488_30742328">
<label class="col-sm-6" for="c2ms614859d55c5488_30742328">Transit Incurred amount 2018</label>
{FGEN:float_entry|name=c2ms614859d55c5488_30742328|id=c2ms614859d55c5488_30742328|data-type=2|data-position=12|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms614859d612a070_32012165">
<label class="col-sm-6" for="c2ms614859d612a070_32012165">Stock Incurred amount 2018</label>
{FGEN:float_entry|name=c2ms614859d612a070_32012165|id=c2ms614859d612a070_32012165|data-type=2|data-position=13|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms622f01274c9de2_41919093">
<label class="col-sm-6" for="c2ms622f01274c9de2_41919093">Total Incurred amount 2018</label>
{FGEN:c2ms622f01274c9de2_41919093|name=c2ms622f01274c9de2_41919093|id=c2ms622f01274c9de2_41919093|data-type=2|data-position=bottom|data-location=left|field_id=81|revision_id=1}
</div>

<div class="required" id="parent-c2ms61c2fa638cf5a6_67167765">
<label class="col-sm-6" for="c2ms61c2fa638cf5a6_67167765">Cause of Loss 2018</label>
{FGEN:stp_cause_of_loss|name=c2ms61c2fa638cf5a6_67167765|id=c2ms61c2fa638cf5a6_67167765|data-type=1|data-position=14|data-location=left|field_id=147|revision_id=1}
</div>

<div class="required" id="parent-c2ms614859d705b474_33390724">
<label class="col-sm-6" for="c2ms614859d705b474_33390724">Transit Incurred amount 2017</label>
{FGEN:float_entry|name=c2ms614859d705b474_33390724|id=c2ms614859d705b474_33390724|data-type=2|data-position=15|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms614859d7acf243_25989231">
<label class="col-sm-6" for="c2ms614859d7acf243_25989231">Stock Incurred amount 2017</label>
{FGEN:float_entry|name=c2ms614859d7acf243_25989231|id=c2ms614859d7acf243_25989231|data-type=2|data-position=16|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms622f0127bfc4f8_13405278">
<label class="col-sm-6" for="c2ms622f0127bfc4f8_13405278">Total Incurred amount 2017</label>
{FGEN:c2ms622f0127bfc4f8_13405278|name=c2ms622f0127bfc4f8_13405278|id=c2ms622f0127bfc4f8_13405278|data-type=2|data-position=bottom|data-location=left|field_id=81|revision_id=1}
</div>

<div class="required" id="parent-c2ms61c2fa6435f632_55572737">
<label class="col-sm-6" for="c2ms61c2fa6435f632_55572737">Cause of Loss 2017</label>
{FGEN:stp_cause_of_loss|name=c2ms61c2fa6435f632_55572737|id=c2ms61c2fa6435f632_55572737|data-type=1|data-position=17|data-location=left|field_id=147|revision_id=1}
</div>

</div>

<div class="form-heading custom-hidden">
<p>Total claims info</p>
</div>

<div class="required" id="parent-c2ms614859d8ac9714_08904158">
<label class="col-sm-6" for="c2ms614859d8ac9714_08904158">Transit Incurred amount - Total</label>
{FGEN:float_entry|name=c2ms614859d8ac9714_08904158|id=c2ms614859d8ac9714_08904158|data-type=2|data-position=18|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms614859d95ffad3_14655680">
<label class="col-sm-6" for="c2ms614859d95ffad3_14655680">Stock Incurred amount - Total</label>
{FGEN:float_entry|name=c2ms614859d95ffad3_14655680|id=c2ms614859d95ffad3_14655680|data-type=2|data-position=19|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms622f01286ca451_77582332">
<label class="col-sm-6" for="c2ms622f01286ca451_77582332">Total Transit and Stock Incurred amount</label>
{FGEN:c2ms622f01286ca451_77582332|name=c2ms622f01286ca451_77582332|id=c2ms622f01286ca451_77582332|data-type=2|data-position=bottom|data-location=left|field_id=81|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 130,
                'date_created' => '2021-09-20 10:13:01',
                'id' => 90,
                'identifier' => '55dc65c2-19fb-11ec-8146-0223a3b30884',
                'image_url' => '',
                'location_id' => 1,
                'num_entries' => 5303,
                'rev_ds_code' => 'stpv2_14_rework_declaration',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2 14 Rework Declaration',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Declaration"}}
{{eavfield "c2ms61485e5edddb71_91656008" label="The risk submitted is on a ground up full value basis"}}
{{eavfield "c2ms61485e5ff37384_72734639" label="None of the locations entered are Retail Locations"}}
{{eavfield "c2ms61485e681a9ad0_65285916" label="I Confirm that all information entered is correct to the  best of my knowledge "}}
{{eavfield "c2ms6194d633560982_89208770" label="Confirm no known or reported losses"}}
{{eavfield "c2ms6194d63411ef12_01773487" label="Confirm no additional exposures/material changes to the risk"}}
{{eavfield "c2ms616eac8349c932_13327720" label="Trigger Automatic Referral"}}
</div>
',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Declaration</h4>
</div>

<div class="required" id="parent-c2ms61485e5edddb71_91656008">
<label class="col-sm-6" for="c2ms61485e5edddb71_91656008">The risk submitted is on a ground up full value basis</label>
{FGEN:checkbox_agree|name=c2ms61485e5edddb71_91656008|id=c2ms61485e5edddb71_91656008|data-type=1|data-position=1|data-location=left|field_id=123|revision_id=1}
</div>

<div class="required" id="parent-c2ms61485e5ff37384_72734639">
<label class="col-sm-6" for="c2ms61485e5ff37384_72734639">None of the locations entered are Retail Locations</label>
{FGEN:checkbox_agree|name=c2ms61485e5ff37384_72734639|id=c2ms61485e5ff37384_72734639|data-type=1|data-position=2|data-location=left|field_id=123|revision_id=1}
</div>

<div class="required" id="parent-c2ms61485e681a9ad0_65285916">
<label class="col-sm-6" for="c2ms61485e681a9ad0_65285916">I Confirm that all information entered is correct to the  best of my knowledge </label>
{FGEN:checkbox_agree|name=c2ms61485e681a9ad0_65285916|id=c2ms61485e681a9ad0_65285916|data-type=1|data-position=3|data-location=left|field_id=123|revision_id=1}
</div>

<div class="required" id="parent-c2ms6194d633560982_89208770">
<label class="col-sm-6" for="c2ms6194d633560982_89208770">Confirm no known or reported losses</label>
{FGEN:checkbox_agree|name=c2ms6194d633560982_89208770|id=c2ms6194d633560982_89208770|data-type=1|data-position=5|data-location=left|field_id=123|revision_id=1}
</div>

<div class="required" id="parent-c2ms6194d63411ef12_01773487">
<label class="col-sm-6" for="c2ms6194d63411ef12_01773487">Confirm no additional exposures/material changes to the risk</label>
{FGEN:checkbox_agree|name=c2ms6194d63411ef12_01773487|id=c2ms6194d63411ef12_01773487|data-type=1|data-position=6|data-location=left|field_id=123|revision_id=1}
</div>

<div class="required" id="parent-c2ms616eac8349c932_13327720">
<label class="col-sm-6" for="c2ms616eac8349c932_13327720">Trigger Automatic Referral</label>
{FGEN:checkbox_agree|name=c2ms616eac8349c932_13327720|id=c2ms616eac8349c932_13327720|data-type=1|data-position=4|data-location=left|field_id=123|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 131,
                'date_created' => '2021-09-20 11:45:39',
                'id' => 91,
                'identifier' => '46d02e14-1a08-11ec-8146-0223a3b30884',
                'image_url' => '',
                'location_id' => 1,
                'num_entries' => 5303,
                'rev_ds_code' => 'stpv2_15_rework_tria',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2 15 Rework TRIA',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="TRIA"}}
{{eavfield "c2ms614870e230a418_43529640" label="Please select one of the following options"}}

</div>
',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Declaration</h4>
</div>

<div class="required" id="parent-c2ms614870e230a418_43529640">
<label class="col-sm-6" for="c2ms614870e230a418_43529640">Please select one of the following options</label>
{FGEN:c2ms614870e230a418_43529640|name=c2ms614870e230a418_43529640|id=c2ms614870e230a418_43529640|data-type=1|data-position=bottom|data-location=left|field_id=145|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 132,
                'date_created' => '2021-09-20 12:02:47',
                'id' => 92,
                'identifier' => 'ab68db67-1a0a-11ec-8146-0223a3b30884',
                'image_url' => '',
                'location_id' => 1,
                'num_entries' => 5303,
                'rev_ds_code' => 'stpv2_16_rework_underwtiting_information',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2 16 Rework Underwtiting Information',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Underwriting Information"}}
{{eavfield "c2ms6148783ce13e00_28721829" label="Underwriting factor 1"}}
{{eavfield "c2ms620a17ba21bef0_95505815" label="Transit Factor"}}
{{eavfield "c2ms620a17bb16f8e7_12178682" label="Stock Factor"}}
{{eavfield "c2ms6262659c34a8f5_77862741" label="Maximum Inventory TIV Total"}}



<div class="required">
<label>Manual Premium Adjustment</label>
<button type="button" data-role="stp-set-ratios">Adjust Premium</button>
</div>

</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Underwriting Information</h4>
</div>

<div class="required" id="parent-c2ms6148783ce13e00_28721829">
<label class="col-sm-6" for="c2ms6148783ce13e00_28721829">Underwriting factor 1</label>
{FGEN:float_entry|name=c2ms6148783ce13e00_28721829|id=c2ms6148783ce13e00_28721829|data-type=2|data-position=1|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms620a17ba21bef0_95505815">
<label class="col-sm-6" for="c2ms620a17ba21bef0_95505815">Transit Factor</label>
{FGEN:float_entry|name=c2ms620a17ba21bef0_95505815|id=c2ms620a17ba21bef0_95505815|data-type=2|data-position=2|data-location=left|field_id=81|revision_id=1}
</div>

<div class="required" id="parent-c2ms620a17bb16f8e7_12178682">
<label class="col-sm-6" for="c2ms620a17bb16f8e7_12178682">Stock Factor</label>
{FGEN:float_entry|name=c2ms620a17bb16f8e7_12178682|id=c2ms620a17bb16f8e7_12178682|data-type=2|data-position=3|data-location=left|field_id=81|revision_id=1}
</div>

<div class="required" id="parent-c2ms6262659c34a8f5_77862741">
<label class="col-sm-6" for="c2ms6262659c34a8f5_77862741">Maximum Inventory TIV Total</label>
{FGEN:c2ms6262659c34a8f5_77862741|name=c2ms6262659c34a8f5_77862741|id=c2ms6262659c34a8f5_77862741|data-type=2|data-position=bottom|data-location=left|field_id=99|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 133,
                'date_created' => '2022-03-01 14:21:24',
                'id' => 93,
                'identifier' => 'dfbc6473-996a-11ec-ac91-0223a3b30884',
                'image_url' => '',
                'location_id' => 1,
                'num_entries' => 3302,
                'rev_ds_code' => 'stpv2_17_broker_reference',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2 17 Broker Reference',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Broker Reference"}}
{{eavfield "c2ms621e2b8b226cd6_65027873" label="Effective date"}}
{{eavfield "c2ms621e2b969e2d27_26126731" label="Broker Reference"}}

</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Broker Reference</h4>
</div>

<div class="required" id="parent-c2ms621e2b8b226cd6_65027873">
<label class="col-sm-6" for="c2ms621e2b8b226cd6_65027873">Effective date</label>
{FGEN:c2ms621e2b8b226cd6_65027873|name=c2ms621e2b8b226cd6_65027873|id=c2ms621e2b8b226cd6_65027873|data-type=3|data-position=top|data-location=left|field_id=76|revision_id=1}
</div>

<div class="required" id="parent-c2ms621e2b969e2d27_26126731">
<label class="col-sm-6" for="c2ms621e2b969e2d27_26126731">Broker Reference</label>
{FGEN:c2ms621e2b969e2d27_26126731|name=c2ms621e2b969e2d27_26126731|id=c2ms621e2b969e2d27_26126731|data-type=4|data-position=bottom|data-location=left|field_id=77|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 134,
                'date_created' => '2022-03-01 14:57:52',
                'id' => 94,
                'identifier' => 'f83bd951-996f-11ec-ac91-0223a3b30884',
                'image_url' => '',
                'location_id' => 1,
                'num_entries' => 3302,
                'rev_ds_code' => 'stpv2_18_overseas_broker',
                'rev_ds_description' => '',
                'rev_ds_title' => 'STPv2 18 Overseas Broker',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="Overseas Broker"}}
{{eavfield "c2ms621e2beb870474_74650013" label="Effective date"}}
{{eavfield "c2ms621e2beebdcfb6_35744725" label="Overseas Broker"}}
{{eavfield "c2ms621e2d30165473_40085003" label="Address Line 1"}}
{{eavfield "c2ms621e2d31070e91_03382983" label="Address Line 2"}}
{{eavfield "c2ms621e2d31a5c3d2_72663929" label="Town/City"}}
{{eavfield "c2ms621e2d327a9f18_12617085" label="Zip"}}
{{eavfield "c2ms621e2d3a483603_63832242" label="Country"}}

</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>Overseas Broker</h4>
</div>

<div class="required" id="parent-c2ms621e2beb870474_74650013">
<label class="col-sm-6" for="c2ms621e2beb870474_74650013">Effective date</label>
{FGEN:c2ms621e2beb870474_74650013|name=c2ms621e2beb870474_74650013|id=c2ms621e2beb870474_74650013|data-type=3|data-position=top|data-location=left|field_id=76|revision_id=1}
</div>

<div class="required" id="parent-c2ms621e2beebdcfb6_35744725">
<label class="col-sm-6" for="c2ms621e2beebdcfb6_35744725">Overseas Broker</label>
{FGEN:c2ms621e2beebdcfb6_35744725|name=c2ms621e2beebdcfb6_35744725|id=c2ms621e2beebdcfb6_35744725|data-type=4|data-position=bottom|data-location=left|field_id=77|revision_id=1}
</div>

<div class="required" id="parent-c2ms621e2d30165473_40085003">
<label class="col-sm-6" for="c2ms621e2d30165473_40085003">Address Line 1</label>
{FGEN:c2ms621e2d30165473_40085003|name=c2ms621e2d30165473_40085003|id=c2ms621e2d30165473_40085003|data-type=5|data-position=bottom|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms621e2d31070e91_03382983">
<label class="col-sm-6" for="c2ms621e2d31070e91_03382983">Address Line 2</label>
{FGEN:c2ms621e2d31070e91_03382983|name=c2ms621e2d31070e91_03382983|id=c2ms621e2d31070e91_03382983|data-type=5|data-position=bottom|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms621e2d31a5c3d2_72663929">
<label class="col-sm-6" for="c2ms621e2d31a5c3d2_72663929">Town/City</label>
{FGEN:c2ms621e2d31a5c3d2_72663929|name=c2ms621e2d31a5c3d2_72663929|id=c2ms621e2d31a5c3d2_72663929|data-type=5|data-position=bottom|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms621e2d327a9f18_12617085">
<label class="col-sm-6" for="c2ms621e2d327a9f18_12617085">Zip</label>
{FGEN:c2ms621e2d327a9f18_12617085|name=c2ms621e2d327a9f18_12617085|id=c2ms621e2d327a9f18_12617085|data-type=5|data-position=bottom|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms621e2d3a483603_63832242">
<label class="col-sm-6" for="c2ms621e2d3a483603_63832242">Country</label>
{FGEN:c2ms621e2d3a483603_63832242|name=c2ms621e2d3a483603_63832242|id=c2ms621e2d3a483603_63832242|data-type=1|data-position=bottom|data-location=left|field_id=75|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 151,
                'date_created' => '2022-06-09 09:04:03',
                'id' => 110,
                'identifier' => '2c3f3878-e7ca-11ec-ac91-0223a3b30884',
                'image_url' => '',
                'location_id' => 1,
                'num_entries' => 0,
                'rev_ds_code' => 'dbb_16_wind_season_referrals',
                'rev_ds_description' => '',
                'rev_ds_title' => 'DBB_16_Wind_Season_Referrals',
                'rev_hb' => '<div id="ds-column-left">
{{>ds-subtitle subtitle="DBB Wind Season Referrals"}}
{{eavfield "c2ms62a1a7e83129b1_75310686" label="Add Location Referral"}}
{{eavfield "c2ms62a1a7e8d94277_95288398" label="Revalue Location Referral"}}
{{eavfield "c2ms62a1a7e9475344_18342661" label="Remove Location Referral"}}

</div>',
                'rev_source' => '<div id="ds-column-left">

<div class="form-heading custom-hidden">
<h4>DBB Wind Season Referrals</h4>
</div>

<div class="required" id="parent-c2ms62a1a7e83129b1_75310686">
<label class="col-sm-6" for="c2ms62a1a7e83129b1_75310686">Add Location Referral</label>
{FGEN:yes_no|name=c2ms62a1a7e83129b1_75310686|id=c2ms62a1a7e83129b1_75310686|data-type=1|data-position=1|data-location=left|field_id=79|revision_id=1}
</div>

<div class="required" id="parent-c2ms62a1a7e8d94277_95288398">
<label class="col-sm-6" for="c2ms62a1a7e8d94277_95288398">Revalue Location Referral</label>
{FGEN:yes_no|name=c2ms62a1a7e8d94277_95288398|id=c2ms62a1a7e8d94277_95288398|data-type=1|data-position=2|data-location=left|field_id=98|revision_id=1}
</div>

<div class="required" id="parent-c2ms62a1a7e9475344_18342661">
<label class="col-sm-6" for="c2ms62a1a7e9475344_18342661">Remove Location Referral</label>
{FGEN:yes_no|name=c2ms62a1a7e9475344_18342661|id=c2ms62a1a7e9475344_18342661|data-type=1|data-position=3|data-location=left|field_id=117|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 154,
                'date_created' => '2022-06-27 10:30:42',
                'id' => 112,
                'identifier' => '322a7f12-f604-11ec-bfa1-de8f233d202e',
                'image_url' => '',
                'location_id' => 1,
                'num_entries' => 0,
                'rev_ds_code' => 'claims_01_loss_details',
                'rev_ds_description' => '',
                'rev_ds_title' => 'claims_01_loss_details',
                'rev_hb' => NULL,
                'rev_source' => '<div id="ds-column-left">

<div class="required" id="parent-c2ms62b984802c3407_72506884">
<label class="col-sm-6" for="c2ms62b984802c3407_72506884">Date Reported</label>
{FGEN:datepicker|name=c2ms62b984802c3407_72506884|id=c2ms62b984802c3407_72506884|data-type=3|data-position=1|data-location=left|field_id=96|revision_id=1}
</div>

<div class="required" id="parent-c2ms62b98483c60e63_97304609">
<label class="col-sm-6" for="c2ms62b98483c60e63_97304609">Received By</label>
{FGEN:text|name=c2ms62b98483c60e63_97304609|id=c2ms62b98483c60e63_97304609|data-type=5|data-position=2|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms62b98484ea19d6_10701219">
<label class="col-sm-6" for="c2ms62b98484ea19d6_10701219">Reported By</label>
{FGEN:text|name=c2ms62b98484ea19d6_10701219|id=c2ms62b98484ea19d6_10701219|data-type=5|data-position=3|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms62b9848595a3d9_34114255">
<label class="col-sm-6" for="c2ms62b9848595a3d9_34114255">Broker Contact</label>
{FGEN:text|name=c2ms62b9848595a3d9_34114255|id=c2ms62b9848595a3d9_34114255|data-type=5|data-position=4|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms62b9850c900f96_17734263">
<label class="col-sm-6" for="c2ms62b9850c900f96_17734263">Named Insured</label>
{FGEN:text|name=c2ms62b9850c900f96_17734263|id=c2ms62b9850c900f96_17734263|data-type=5|data-position=5|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms62b985111fa883_37053860">
<label class="col-sm-6" for="c2ms62b985111fa883_37053860">Policy Period</label>
{FGEN:text|name=c2ms62b985111fa883_37053860|id=c2ms62b985111fa883_37053860|data-type=1|data-position=6|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms62b985144208e2_82058262">
<label class="col-sm-6" for="c2ms62b985144208e2_82058262">Policy Limit</label>
{FGEN:text|name=c2ms62b985144208e2_82058262|id=c2ms62b985144208e2_82058262|data-type=2|data-position=7|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms62b9851502e969_64012406">
<label class="col-sm-6" for="c2ms62b9851502e969_64012406">Coverage Deductible</label>
{FGEN:text|name=c2ms62b9851502e969_64012406|id=c2ms62b9851502e969_64012406|data-type=2|data-position=8|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms62b987c97a6152_66849766">
<label class="col-sm-6" for="c2ms62b987c97a6152_66849766">Cause of Loss</label>
{FGEN:c2ms62b987c97a6152_66849766|name=c2ms62b987c97a6152_66849766|id=c2ms62b987c97a6152_66849766|data-type=1|data-position=bottom|data-location=left|field_id=150|revision_id=1}
</div>

<div class="required" id="parent-c2ms62b987cf3d98e5_80064944">
<label class="col-sm-6" for="c2ms62b987cf3d98e5_80064944">Please specify Cause of Loss details</label>
{FGEN:c2ms62b987cf3d98e5_80064944|name=c2ms62b987cf3d98e5_80064944|id=c2ms62b987cf3d98e5_80064944|data-type=5|data-position=bottom|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms62b987d6c45d12_65558142">
<label class="col-sm-6" for="c2ms62b987d6c45d12_65558142">Loss Location</label>
{FGEN:c2ms62b987d6c45d12_65558142|name=c2ms62b987d6c45d12_65558142|id=c2ms62b987d6c45d12_65558142|data-type=1|data-position=bottom|data-location=left|field_id=151|revision_id=1}
</div>

<div class="required" id="parent-c2ms62b987da7dd773_75152888">
<label class="col-sm-6" for="c2ms62b987da7dd773_75152888">Please specify Loss Location details</label>
{FGEN:c2ms62b987da7dd773_75152888|name=c2ms62b987da7dd773_75152888|id=c2ms62b987da7dd773_75152888|data-type=5|data-position=bottom|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms62b987e24b3a12_00959579">
<label class="col-sm-6" for="c2ms62b987e24b3a12_00959579">Date of loss</label>
{FGEN:c2ms62b987e24b3a12_00959579|name=c2ms62b987e24b3a12_00959579|id=c2ms62b987e24b3a12_00959579|data-type=3|data-position=bottom|data-location=left|field_id=113|revision_id=1}
</div>

<div class="required" id="parent-c2ms62b98879819091_01761051">
<label class="col-sm-6" for="c2ms62b98879819091_01761051">Date of Loss is unknown</label>
{FGEN:c2ms62b98879819091_01761051|name=c2ms62b98879819091_01761051|id=c2ms62b98879819091_01761051|data-type=1|data-position=bottom|data-location=left|field_id=152|revision_id=1}
</div>

<div class="required" id="parent-c2ms62b987e62ad4c2_57282729">
<label class="col-sm-6" for="c2ms62b987e62ad4c2_57282729">Time of Loss</label>
{FGEN:c2ms62b987e62ad4c2_57282729|name=c2ms62b987e62ad4c2_57282729|id=c2ms62b987e62ad4c2_57282729|data-type=5|data-position=bottom|data-location=left|field_id=74|revision_id=1}
</div>

<div class="required" id="parent-c2ms62b9887a149399_54196285">
<label class="col-sm-6" for="c2ms62b9887a149399_54196285">Time of Loss is unknown</label>
{FGEN:c2ms62b9887a149399_54196285|name=c2ms62b9887a149399_54196285|id=c2ms62b9887a149399_54196285|data-type=1|data-position=bottom|data-location=left|field_id=152|revision_id=1}
</div>

<div class="required" id="parent-c2ms62b987ea84a1f3_98983863">
<label class="col-sm-6" for="c2ms62b987ea84a1f3_98983863">Loss Detail</label>
{FGEN:c2ms62b987ea84a1f3_98983863|name=c2ms62b987ea84a1f3_98983863|id=c2ms62b987ea84a1f3_98983863|data-type=4|data-position=bottom|data-location=left|field_id=77|revision_id=1}
</div>

<div class="required" id="parent-c2ms62b987ef92e0e9_80401645">
<label class="col-sm-6" for="c2ms62b987ef92e0e9_80401645">Potential Quantum</label>
{FGEN:c2ms62b987ef92e0e9_80401645|name=c2ms62b987ef92e0e9_80401645|id=c2ms62b987ef92e0e9_80401645|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

<div class="required" id="parent-c2ms62b987f373dd74_96026474">
<label class="col-sm-6" for="c2ms62b987f373dd74_96026474">Quantum summary</label>
{FGEN:c2ms62b987f373dd74_96026474|name=c2ms62b987f373dd74_96026474|id=c2ms62b987f373dd74_96026474|data-type=4|data-position=bottom|data-location=left|field_id=91|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 155,
                'date_created' => '2022-06-27 10:34:14',
                'id' => 113,
                'identifier' => 'b06a23b1-f604-11ec-bfa1-de8f233d202e',
                'image_url' => '',
                'location_id' => 1,
                'num_entries' => 0,
                'rev_ds_code' => 'claims_02_contact_details',
                'rev_ds_description' => '',
                'rev_ds_title' => 'claims_02_contact_details',
                'rev_hb' => NULL,
                'rev_source' => '<div id="ds-column-left">

<div class="required" id="parent-c2ms62b9871887bcd7_69870079">
<label class="col-sm-6" for="c2ms62b9871887bcd7_69870079">Insured Email</label>
{FGEN:c2ms62b9871887bcd7_69870079|name=c2ms62b9871887bcd7_69870079|id=c2ms62b9871887bcd7_69870079|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms62b9871a66a687_09059069">
<label class="col-sm-6" for="c2ms62b9871a66a687_09059069">Insured Phone</label>
{FGEN:c2ms62b9871a66a687_09059069|name=c2ms62b9871a66a687_09059069|id=c2ms62b9871a66a687_09059069|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms62b9871b7a6b55_72862585">
<label class="col-sm-6" for="c2ms62b9871b7a6b55_72862585">Claimant Email</label>
{FGEN:c2ms62b9871b7a6b55_72862585|name=c2ms62b9871b7a6b55_72862585|id=c2ms62b9871b7a6b55_72862585|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms62b9871c47fa81_05613143">
<label class="col-sm-6" for="c2ms62b9871c47fa81_05613143">Claimant Phone</label>
{FGEN:c2ms62b9871c47fa81_05613143|name=c2ms62b9871c47fa81_05613143|id=c2ms62b9871c47fa81_05613143|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms62b9871f1d1615_71739542">
<label class="col-sm-6" for="c2ms62b9871f1d1615_71739542">Overlying Carrier Company</label>
{FGEN:c2ms62b9871f1d1615_71739542|name=c2ms62b9871f1d1615_71739542|id=c2ms62b9871f1d1615_71739542|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms62b9872274fea6_22865229">
<label class="col-sm-6" for="c2ms62b9872274fea6_22865229">Overlying Carrier Adjuster</label>
{FGEN:c2ms62b9872274fea6_22865229|name=c2ms62b9872274fea6_22865229|id=c2ms62b9872274fea6_22865229|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms62b98724d4a3a2_26213801">
<label class="col-sm-6" for="c2ms62b98724d4a3a2_26213801">Overlying Carrier Email</label>
{FGEN:c2ms62b98724d4a3a2_26213801|name=c2ms62b98724d4a3a2_26213801|id=c2ms62b98724d4a3a2_26213801|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

<div class="required" id="parent-c2ms62b98725896ab2_42001426">
<label class="col-sm-6" for="c2ms62b98725896ab2_42001426">Overlying Carrier Phone</label>
{FGEN:c2ms62b98725896ab2_42001426|name=c2ms62b98725896ab2_42001426|id=c2ms62b98725896ab2_42001426|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 156,
                'date_created' => '2022-06-27 10:55:21',
                'id' => 114,
                'identifier' => 'a40d6d0d-f607-11ec-bfa1-de8f233d202e',
                'image_url' => '',
                'location_id' => 1,
                'num_entries' => 0,
                'rev_ds_code' => 'claims_state_01_policyholder_contacted',
                'rev_ds_description' => '',
                'rev_ds_title' => 'claims_state_01_policyholder_contacted',
                'rev_hb' => NULL,
                'rev_source' => '<div id="ds-column-left">

<div class="required" id="parent-c2ms62b98c08a84592_11012895">
<label class="col-sm-6" for="c2ms62b98c08a84592_11012895">Date</label>
{FGEN:c2ms62b98c08a84592_11012895|name=c2ms62b98c08a84592_11012895|id=c2ms62b98c08a84592_11012895|data-type=3|data-position=bottom|data-location=left|field_id=96|revision_id=1}
</div>

<div class="required" id="parent-c2ms62b98c352088b7_65258472">
<label class="col-sm-6" for="c2ms62b98c352088b7_65258472">Method of contact</label>
{FGEN:c2ms62b98c352088b7_65258472|name=c2ms62b98c352088b7_65258472|id=c2ms62b98c352088b7_65258472|data-type=1|data-position=bottom|data-location=left|field_id=153|revision_id=1}
</div>

<div class="required" id="parent-c2ms62b98c3e5146f2_24671330">
<label class="col-sm-6" for="c2ms62b98c3e5146f2_24671330">External Claim Reference</label>
{FGEN:c2ms62b98c3e5146f2_24671330|name=c2ms62b98c3e5146f2_24671330|id=c2ms62b98c3e5146f2_24671330|data-type=5|data-position=bottom|data-location=left|field_id=90|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 157,
                'date_created' => '2022-06-27 10:56:56',
                'id' => 115,
                'identifier' => 'dc6001a2-f607-11ec-bfa1-de8f233d202e',
                'image_url' => '',
                'location_id' => 1,
                'num_entries' => 0,
                'rev_ds_code' => 'claims_state_02_assessing_coverage',
                'rev_ds_description' => '',
                'rev_ds_title' => 'claims_state_02_assessing_coverage',
                'rev_hb' => NULL,
                'rev_source' => '<div id="ds-column-left">

<div class="required" id="parent-c2ms62b98cbea21e00_21827395">
<label class="col-sm-6" for="c2ms62b98cbea21e00_21827395">Date</label>
{FGEN:c2ms62b98cbea21e00_21827395|name=c2ms62b98cbea21e00_21827395|id=c2ms62b98cbea21e00_21827395|data-type=3|data-position=bottom|data-location=left|field_id=76|revision_id=1}
</div>

<div class="required" id="parent-c2ms62b98cc1c89882_60357690">
<label class="col-sm-6" for="c2ms62b98cc1c89882_60357690">Current position</label>
{FGEN:c2ms62b98cc1c89882_60357690|name=c2ms62b98cc1c89882_60357690|id=c2ms62b98cc1c89882_60357690|data-type=1|data-position=bottom|data-location=left|field_id=154|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 158,
                'date_created' => '2022-06-28 14:40:13',
                'id' => 116,
                'identifier' => '385678f0-f6f0-11ec-bfa1-de8f233d202e',
                'image_url' => '',
                'location_id' => 1,
                'num_entries' => 0,
                'rev_ds_code' => 'claims_state_03_coverage_outcome',
                'rev_ds_description' => '',
                'rev_ds_title' => 'claims_state_03_coverage_outcome',
                'rev_hb' => NULL,
                'rev_source' => '<div id="ds-column-left">

<div class="required" id="parent-c2ms62bafc3f2038a1_15687983">
<label class="col-sm-6" for="c2ms62bafc3f2038a1_15687983">Date</label>
{FGEN:c2ms62bafc3f2038a1_15687983|name=c2ms62bafc3f2038a1_15687983|id=c2ms62bafc3f2038a1_15687983|data-type=3|data-position=top|data-location=left|field_id=76|revision_id=1}
</div>

<div class="required" id="parent-c2ms62bafc37669284_66323747">
<label class="col-sm-6" for="c2ms62bafc37669284_66323747">Select Coverage Outcome</label>
{FGEN:c2ms62bafc37669284_66323747|name=c2ms62bafc37669284_66323747|id=c2ms62bafc37669284_66323747|data-type=1|data-position=bottom|data-location=left|field_id=155|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 159,
                'date_created' => '2022-06-28 14:46:41',
                'id' => 117,
                'identifier' => '1f643922-f6f1-11ec-bfa1-de8f233d202e',
                'image_url' => '',
                'location_id' => 1,
                'num_entries' => 0,
                'rev_ds_code' => 'claims_state_04_adjusting_status',
                'rev_ds_description' => '',
                'rev_ds_title' => 'claims_state_04_adjusting_status',
                'rev_hb' => NULL,
                'rev_source' => '<div id="ds-column-left">

<div class="required" id="parent-c2ms62bb13ffa6bb91_09615994">
<label class="col-sm-6" for="c2ms62bb13ffa6bb91_09615994">Date</label>
{FGEN:c2ms62bb13ffa6bb91_09615994|name=c2ms62bb13ffa6bb91_09615994|id=c2ms62bb13ffa6bb91_09615994|data-type=3|data-position=bottom|data-location=left|field_id=76|revision_id=1}
</div>

<div class="required" id="parent-c2ms62bb142a0160e9_14776191">
<label class="col-sm-6" for="c2ms62bb142a0160e9_14776191">Select Adjusting Status</label>
{FGEN:c2ms62bb142a0160e9_14776191|name=c2ms62bb142a0160e9_14776191|id=c2ms62bb142a0160e9_14776191|data-type=1|data-position=bottom|data-location=left|field_id=156|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],

            [
                'category_id' => 1,
                'dataset_id' => 160,
                'date_created' => '2022-06-28 14:47:45',
                'id' => 118,
                'identifier' => '456dd8e0-f6f1-11ec-bfa1-de8f233d202e',
                'image_url' => '',
                'location_id' => 1,
                'num_entries' => 0,
                'rev_ds_code' => 'claims_state_05_indemnity_paid',
                'rev_ds_description' => '',
                'rev_ds_title' => 'claims_state_05_indemnity_paid',
                'rev_hb' => NULL,
                'rev_source' => '<div id="ds-column-left">

<div class="required" id="parent-c2ms62bb145edd01e0_04887739">
<label class="col-sm-6" for="c2ms62bb145edd01e0_04887739">Date</label>
{FGEN:c2ms62bb145edd01e0_04887739|name=c2ms62bb145edd01e0_04887739|id=c2ms62bb145edd01e0_04887739|data-type=3|data-position=bottom|data-location=left|field_id=76|revision_id=1}
</div>

<div class="required" id="parent-c2ms62bb14606587b3_86440811">
<label class="col-sm-6" for="c2ms62bb14606587b3_86440811">Date Indemnity Paid</label>
{FGEN:c2ms62bb14606587b3_86440811|name=c2ms62bb14606587b3_86440811|id=c2ms62bb14606587b3_86440811|data-type=3|data-position=bottom|data-location=left|field_id=76|revision_id=1}
</div>

<div class="required" id="parent-c2ms62bb1462c8e0e2_32560165">
<label class="col-sm-6" for="c2ms62bb1462c8e0e2_32560165">Value Indemnity Paid</label>
{FGEN:c2ms62bb1462c8e0e2_32560165|name=c2ms62bb1462c8e0e2_32560165|id=c2ms62bb1462c8e0e2_32560165|data-type=2|data-position=bottom|data-location=left|field_id=118|revision_id=1}
</div>

</div>

',
                'revision_id' => 1,
                'type_id' => 2,
            ],
        ];
    }
}
