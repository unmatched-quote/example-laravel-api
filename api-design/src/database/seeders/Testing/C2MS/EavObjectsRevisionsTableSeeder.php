<?php

namespace Database\Seeders\Testing\C2MS;

use Illuminate\Database\Seeder;

class EavObjectsRevisionsTableSeeder extends Seeder
{
    public function run(): void
    {
        \DB::table('eav_objects_revisions')->truncate();

        \DB::table('eav_objects_revisions')->insert(
            $this->provideData()
        );
    }

    protected function provideData(): array
    {
        return [
            [
                'category_id' => NULL,
                'date_created' => '2020-06-04 17:31:19',
                'id' => 1,
                'identifier' => '6ff9eac2-a678-11ea-b4d4-4a28775f739c',
                'is_hb' => 1,
                'location_id' => 1,
                'object_claim_mobile_form' => NULL,
                'object_css' => '#parent-c2ms5e2ef9dfce0e25_01205702 div.form-control
{
width: 59%;
float: right;
}
#parent-c2ms5e2f01d78dc200_54912352 div.form-control
{
width: 59%;
float: right;
}
#parent-c2ms5e2f01a1396128_63676024 div.form-control
{
width: 59%;
float: right;
}
#parent-c2ms5ed77d1e694139_66235721 div.form-control
{
width: 59%;
float: right;
}
#parent-c2ms5ed77d1e694139_66235721 div.form-control
{
width: 59%;
float: right;
}
#parent-c2ms5ed77d1ef3d856_20841847 div.form-control
{
width: 59%;
float: right;
}

.form-multi-box {
border: 2px solid #222;
padding: 10px;
margin-top: 10px;
padding-top:0px;
}
.form-heading {
font-size: 1.2em;
background: #f2f2f2;
padding: 10px;
margin-top:10px;
}

.form-control { margin-bottom: 7px; }

.select2-container {
min-width: 300px !important;
}',
                'object_description' => '',
                'object_form_hb' => '<div id="tab-placeholder-5d8388f4e5f9e" data-c2ms_role="tab">

<div class="relative" style="display:inline-block; width:70px;">
<button style="width:70px;" class="mtabutton" name="btn" name="RemoveButton" type="button" data-role="select-remove">Remove</button>
</div>

<div class="relative" style="display:inline-block; width:70px;">
<button style="width:70px;" class="mtabutton" name="btn" name="AddButton" type="button" data-role="select-add">Add</button>
</div>

<div class="relative" style="display:inline-block; width:70px;">
<button style="width:70px;" class="mtabutton" name="btn" name="EditButton" type="button" data-role="select-edit">Edit</button>
</div>

{{dataset "6ff564d0-a678-11ea-b4d4-4a28775f739c"}}

{{dataset "6ff679ec-a678-11ea-b4d4-4a28775f739c"}}

{{dataset "6ff2119e-a678-11ea-b4d4-4a28775f739c"}}

{{dataset "d00c3630-d17f-11ea-9667-4a28775f739c"}}

{{dataset "1cd41a7b-d180-11ea-9667-4a28775f739c"}}

{{datasetmulti "6ff0c694-a678-11ea-b4d4-4a28775f739c" control="c2ms5df0e8182d8481_83117557"}}

{{datasetmulti "6ff5b170-a678-11ea-b4d4-4a28775f739c" control="c2ms5df0e818e27ff8_62099026"}}

{{dataset "6ff1836e-a678-11ea-b4d4-4a28775f739c"}}

{{dataset "6ff498a3-a678-11ea-b4d4-4a28775f739c"}}

{{dataset "6ff6b47c-a678-11ea-b4d4-4a28775f739c"}}

{{dataset "6ff7a910-a678-11ea-b4d4-4a28775f739c"}}

{{dataset "6ff8a18a-a678-11ea-b4d4-4a28775f739c"}}

{{datasetmulti "6ff3fba1-a678-11ea-b4d4-4a28775f739c" control="c2ms5ed7818ac4c597_54878132"}}

{{dataset "6ff63053-a678-11ea-b4d4-4a28775f739c"}}

{{dataset "6ff7339c-a678-11ea-b4d4-4a28775f739c"}}

{{dataset "6ff76e59-a678-11ea-b4d4-4a28775f739c"}}

{{dataset "6ff7e97e-a678-11ea-b4d4-4a28775f739c"}}

{{dataset "2da4bae2-24f8-11eb-ae0d-0ace2615376e"}}

<input type="hidden" name="eav_object_identifier" value="{{eavObjectIdentifier}}" />

</div>
{{>eav-hidden-fields}}',
                'object_form_template' => '<div id="tab-placeholder-5d8388f4e5f9e" data-c2ms_role="tab">
<ul>

<li><a href="#object-tab-id-0">Quote Form</a></li>

</ul>


<div id="object-tab-id-0">

{OBJ:#6ff564d0-a678-11ea-b4d4-4a28775f739c}

{OBJ:#6ff679ec-a678-11ea-b4d4-4a28775f739c}

{OBJ:#6ff2119e-a678-11ea-b4d4-4a28775f739c}

{OBJ:#d00c3630-d17f-11ea-9667-4a28775f739c}

{OBJ:#1cd41a7b-d180-11ea-9667-4a28775f739c}

{OBJ:#6ff0c694-a678-11ea-b4d4-4a28775f739c}

{OBJ:#6ff5b170-a678-11ea-b4d4-4a28775f739c}

{OBJ:#6ff1836e-a678-11ea-b4d4-4a28775f739c}

{OBJ:#6ff498a3-a678-11ea-b4d4-4a28775f739c}

{OBJ:#6ff6b47c-a678-11ea-b4d4-4a28775f739c}

{OBJ:#6ff7a910-a678-11ea-b4d4-4a28775f739c}

{OBJ:#6ff8a18a-a678-11ea-b4d4-4a28775f739c}

{OBJ:#6ff3fba1-a678-11ea-b4d4-4a28775f739c}

{OBJ:#6ff63053-a678-11ea-b4d4-4a28775f739c}

{OBJ:#6ff7339c-a678-11ea-b4d4-4a28775f739c}

{OBJ:#6ff76e59-a678-11ea-b4d4-4a28775f739c}

{OBJ:#6ff7e97e-a678-11ea-b4d4-4a28775f739c}

{OBJ:#2da4bae2-24f8-11eb-ae0d-0ace2615376e}

</div>

</div>',
                'object_id' => 1,
                'object_js' => '// $(\'#c2ms5df0e8182d8481_83117557\').attr(\'data-role\', \'mi-control\').attr(\'data-target-identifier\', \'6ff0c694-a678-11ea-b4d4-4a28775f739c\');
// $(\'#c2ms5df0e818e27ff8_62099026\').attr(\'data-role\', \'mi-control\').attr(\'data-target-identifier\', \'6ff5b170-a678-11ea-b4d4-4a28775f739c\');
// $(\'#c2ms5ed7818ac4c597_54878132\').attr(\'data-role\', \'mi-control\').attr(\'data-target-identifier\', \'6ff3fba1-a678-11ea-b4d4-4a28775f739c\');

// $(\'.datepicker\').datepicker();

// Policy Inception
$(\'#c2ms5df0e6f8ea56a7_86075627\').datepicker({
minDate: -1,
maxDate: "+90D",
changeMonth: true,
changeYear: true,
showButtonPanel: true
});

// Policy Expiry
$(\'#c2ms5df0e6f9c63265_50754492\').datepicker({
minDate: "+1D",
maxDate: "+456D",
changeMonth: true,
changeYear: true,
showButtonPanel: true
});

//Effective Date
$(\'#c2ms5ed78c366f9c50_66040343\').datepicker({
minDate: "0",
maxDate: "+456D",
changeMonth: true,
changeYear: true,
showButtonPanel: true
});

$(\'[data-role="select-remove"]\').click(function(){
window.C2MS.dialog.confirm(\'This will set all the existing locations MTA Info "Removed" radio button to "No"! Are you sure?\',\'Please Confirm\', function(){
$("input[id*=\'6ff3fba1-a678-11ea-b4d4-4a28775f739c_c2ms5efc6c077a9e29_36112647\']").attr("checked", true);
});
});

$(\'[data-role="select-add"]\').click(function(){
window.C2MS.dialog.confirm(\'This will set all the existing locations MTA Info "Added" radio button to "No"! Are you sure?\',\'Please Confirm\', function(){
$("input[id*=\'6ff3fba1-a678-11ea-b4d4-4a28775f739c_c2ms5f58e4ada94e39_25168287\']").attr("checked", true);
});
});

$(\'[data-role="select-edit"]\').click(function(){
window.C2MS.dialog.confirm(\'This will set all the existing locations MTA Info "Edited" radio button to "No"! Are you sure?\',\'Please Confirm\', function(){
$("input[id*=\'6ff3fba1-a678-11ea-b4d4-4a28775f739c_c2ms5f58e4b7510448_36082932\']").attr("checked", true);
});
});

$(\'#policy-form\').on(\'change\',\'input[name*="c2ms5efc6c077a9e29_36112647"]\',function(){
var $wrapper = $(this).closest(\'div[data-role="instance-wrapper"]\');
var idx = $wrapper.data(\'index\');
if ( $(this).val() == 1 )
{
var id = sprintf(\'#%s_%s_%s_%s\',\'6ff3fba1-a678-11ea-b4d4-4a28775f739c\',\'c2ms5f58e4bdf0a7d2_82644870\', 2, idx);
$wrapper.find(id).attr(\'checked\',true);
}
});',
                'object_php' => NULL,
                'object_title' => 'Terrorism Form v1',
                'revision_id' => 1,
                'step_count' => 1,
                'submit_label' => NULL,
                'submit_position' => 0,
            ],

            [
                'category_id' => NULL,
                'date_created' => '2020-06-04 17:32:07',
                'id' => 2,
                'identifier' => '8cfd52d7-a678-11ea-b4d4-4a28775f739c',
                'is_hb' => 1,
                'location_id' => 1,
                'object_claim_mobile_form' => NULL,
                'object_css' => '#parent-c2ms5ebe8b8462fdf1_62589490 div.form-control
{
width: 59%;
float: right;
}
#parent-c2ms5ebe8b850958a4_36972946 div.form-control
{
width: 59%;
float: right;
}

.form-multi-box {
border: 2px solid #222;
padding: 10px;
margin-top: 10px;
padding-top:0px;
}
.form-heading {
font-size: 1.2em;
background: #f2f2f2;
padding: 10px;
margin-top:10px;
}

.form-control { margin-bottom: 7px; }

.select2-container {
min-width: 300px !important;
}',
                'object_description' => '',
                'object_form_hb' => '<div id="tab-placeholder-5ebe8c8d9c6de" data-c2ms_role="tab">

<div class="relative" style="display:inline-block; width:70px;">
<button style="width:70px;" class="mtabutton" name="btn" name="RemoveButton" type="button" data-role="select-remove">Remove</button>
</div>

<div class="relative" style="display:inline-block; width:70px;">
<button style="width:70px;" class="mtabutton" name="btn" name="AddButton" type="button" data-role="select-add">Add</button>
</div>

<div class="relative" style="display:inline-block; width:70px;">
<button style="width:70px;" class="mtabutton" name="btn" name="EditButton" type="button" data-role="select-edit">Edit</button>
</div>

<ul>

<li><a href="#object-tab-id-0">Quote Form</a></li>

</ul>


<div id="object-tab-id-0">

<div id="dbb-underwriting-workbench"></div>

{{dataset "8cf9f262-a678-11ea-b4d4-4a28775f739c"}}

{{dataset "8cf78673-a678-11ea-b4d4-4a28775f739c"}}

{{dataset "8cf86a97-a678-11ea-b4d4-4a28775f739c"}}

{{dataset "8cf6ce9b-a678-11ea-b4d4-4a28775f739c"}}

{{dataset "fcfa3988-6246-11eb-ac2b-0a8fd383ea9a"}}

{{datasetmulti "8cfa9c68-a678-11ea-b4d4-4a28775f739c" control="c2ms5ebd5f1e1dfa82_77561548"}}

{{dataset "170a63fa-6247-11eb-ac2b-0a8fd383ea9a"}}

{{datasetmulti "8cf7c3f6-a678-11ea-b4d4-4a28775f739c" control="c2ms5ebd5f1eb20ef3_57216645"}}

{{dataset "8cf8a6a6-a678-11ea-b4d4-4a28775f739c"}}

{{dataset "8cfb40b3-a678-11ea-b4d4-4a28775f739c"}}

{{dataset "8cf9983d-a678-11ea-b4d4-4a28775f739c"}}

{{dataset "8cfa58ad-a678-11ea-b4d4-4a28775f739c"}}

{{dataset "8cfa239b-a678-11ea-b4d4-4a28775f739c"}}

{{datasetmulti "8cfc0dff-a678-11ea-b4d4-4a28775f739c" control="c2ms5ebe80e327c3e3_24950316"}}

{{dataset "8cfb0fd0-a678-11ea-b4d4-4a28775f739c"}}

{{dataset "8cf8328b-a678-11ea-b4d4-4a28775f739c"}}

{{dataset "715084ee-3a1f-11eb-9727-0a8fd383ea9a"}}

{{dataset "2c3f3878-e7ca-11ec-ac91-0223a3b30884"}}

<input type="hidden" name="eav_object_identifier" value="{{eavObjectIdentifier}}" />

</div>

</div>
{{>eav-hidden-fields}}',
                'object_form_template' => '<div id="tab-placeholder-5ebe8c8d9c6de" data-c2ms_role="tab">
<ul>

<li><a href="#object-tab-id-0">Quote Form</a></li>

</ul>


<div id="object-tab-id-0">

{OBJ:#8cf9f262-a678-11ea-b4d4-4a28775f739c}

{OBJ:#8cf78673-a678-11ea-b4d4-4a28775f739c}

{OBJ:#8cf86a97-a678-11ea-b4d4-4a28775f739c}

{OBJ:#8cf6ce9b-a678-11ea-b4d4-4a28775f739c}

{OBJ:#fcfa3988-6246-11eb-ac2b-0a8fd383ea9a}

{OBJ:#8cfa9c68-a678-11ea-b4d4-4a28775f739c}

{OBJ:#170a63fa-6247-11eb-ac2b-0a8fd383ea9a}

{OBJ:#8cf7c3f6-a678-11ea-b4d4-4a28775f739c}

{OBJ:#8cf8a6a6-a678-11ea-b4d4-4a28775f739c}

{OBJ:#8cfb40b3-a678-11ea-b4d4-4a28775f739c}

{OBJ:#8cf9983d-a678-11ea-b4d4-4a28775f739c}

{OBJ:#8cfa58ad-a678-11ea-b4d4-4a28775f739c}

{OBJ:#8cfa239b-a678-11ea-b4d4-4a28775f739c}

{OBJ:#8cfc0dff-a678-11ea-b4d4-4a28775f739c}

{OBJ:#8cfb0fd0-a678-11ea-b4d4-4a28775f739c}

{OBJ:#8cf8328b-a678-11ea-b4d4-4a28775f739c}

{OBJ:#715084ee-3a1f-11eb-9727-0a8fd383ea9a}

{OBJ:#2c3f3878-e7ca-11ec-ac91-0223a3b30884}


</div>

</div>',
                'object_id' => 2,
                'object_js' => '// $(\'.datepicker\').datepicker();

// Policy Inception
$(\'#c2ms5ebd5b6405cee1_70902709\').datepicker({
minDate: -1,
maxDate: "+90D",
changeMonth: true,
changeYear: true,
showButtonPanel: true
});

// Policy Expiry
$(\'#c2ms5ebd5b64b771a4_82256694\').datepicker({
minDate: "+1D",
maxDate: "+456D",
changeMonth: true,
changeYear: true,
showButtonPanel: true
});

$(\'#c2ms5ebd5f1e1dfa82_77561548\').attr(\'data-role\', \'mi-control\').attr(\'data-target-identifier\', \'8cfa9c68-a678-11ea-b4d4-4a28775f739c\');
$(\'#c2ms5ebd5f1eb20ef3_57216645\').attr(\'data-role\', \'mi-control\').attr(\'data-target-identifier\', \'8cf7c3f6-a678-11ea-b4d4-4a28775f739c\');
$(\'#c2ms5ebe80e327c3e3_24950316\').attr(\'data-role\', \'mi-control\').attr(\'data-target-identifier\', \'8cfc0dff-a678-11ea-b4d4-4a28775f739c\');


(function()
{

let policyUUID = policyInfo.metadata.policy_uuid;

let uwbench = new Vue({
el: \'#dbb-underwriting-workbench\',

template: `
<div>
<button
v-if="policyUUID"
type="button"
class="pull-right margin-right-10 ui-button ui-corner-all ui-widget"
style="margin: 5px;padding: 10px !important;"
data-dataset="8cfc0dff-a678-11ea-b4d4-4a28775f739c"
:data-policyUUID="policyUUID"
@click="openInWorkbench"
>Open in Underwriting Workbench</button>
</div>
`,

data: {
modal: false,
loadingAccessToken: null,
C2MSAccessToken: false,
datasetUUID: false,
policyUUID: policyUUID,
iframeURL: false,
},

methods: {

runWorkbench(e)
{
this.datasetUUID = e.target.getAttribute(\'data-dataset\');
this.policyUUID = e.target.getAttribute(\'data-policyUUID\');

this.getC2MSAccessToken();
},

openInWorkbench(e)
{
this.datasetUUID = e.target.getAttribute(\'data-dataset\');
this.policyUUID = e.target.getAttribute(\'data-policyUUID\');

let callback = () => {
let url = `https://us.workbench.opaluw.com/workbench/policy/product/dbb/${this.policyUUID}?dataset=${this.datasetUUID}&c2mstoken=${this.C2MSAccessToken}`;

window.open(url, \'_blank\').focus();
};

if(!this.C2MSAccessToken)
{
this.getC2MSAccessToken(callback);
}
else
{
callback();
}
},

getC2MSAccessToken(callable)
{
let url = \'/v2/admin/users/current-user/access-token\';

this.loadingAccessToken = true;

fetch(url, {method: \'POST\', cache: \'no-cache\'})
.then(response => response.json())
.then(data => {

this.C2MSAccessToken = data.token;

callable();

})
;
}
},
});

})();


$(\'[data-role="select-remove"]\').click(function(){
window.C2MS.dialog.confirm(\'This will set all the existing locations MTA Info "Removed" radio button to "No"! Are you sure?\',\'Please Confirm\', function(){
$("input[id*=\'8cfc0dff-a678-11ea-b4d4-4a28775f739c_c2ms5f7d966bafe777_62101896\']").attr("checked", true);
});
});

$(\'[data-role="select-add"]\').click(function(){
window.C2MS.dialog.confirm(\'This will set all the existing locations MTA Info "Added" radio button to "No"! Are you sure?\',\'Please Confirm\', function(){
$("input[id*=\'8cfc0dff-a678-11ea-b4d4-4a28775f739c_c2ms5f7d9670042e14_62770498\']").attr("checked", true);
});
});

$(\'[data-role="select-edit"]\').click(function(){
window.C2MS.dialog.confirm(\'This will set all the existing locations MTA Info "Edited" radio button to "No"! Are you sure?\',\'Please Confirm\', function(){
$("input[id*=\'8cfc0dff-a678-11ea-b4d4-4a28775f739c_c2ms5f7d967540d7b7_70933763\']").attr("checked", true);
});
});

$(\'#policy-form\').on(\'change\',\'input[name*="c2ms5f7d966bafe777_62101896"]\',function(){
var $wrapper = $(this).closest(\'div[data-role="instance-wrapper"]\');
var idx = $wrapper.data(\'index\');
if ( $(this).val() == 1 )
{
var id = sprintf(\'#%s_%s_%s_%s\',\'8cfc0dff-a678-11ea-b4d4-4a28775f739c\',\'c2ms5f7d967bcf2f00_41654048\', 2, idx);
$wrapper.find(id).attr(\'checked\',true);
}
});',
                'object_php' => NULL,
                'object_title' => 'Wind Deductible Buyback Form v2',
                'revision_id' => 1,
                'step_count' => 1,
                'submit_label' => NULL,
                'submit_position' => 0,
            ],

            [
                'category_id' => NULL,
                'date_created' => '2020-06-04 17:32:16',
                'id' => 3,
                'identifier' => 'caacebbf-c5af-11ec-ac91-0223a3b30884',
                'is_hb' => 0,
                'location_id' => 1,
                'object_claim_mobile_form' => NULL,
                'object_css' => '#parent-c2ms5ec69933b17c84_98263816 div.form-control
{
width: 59%;
float: right;
}
#parent-c2ms5ec67feb9a4ff4_84769684 div.form-control
{
width: 59%;
float: right;
}
#parent-c2ms5ec69a753fc4d3_08700834 div.form-control
{
width: 59%;
float: right;
}
#parent-c2ms5ec69a75cc9e12_49784637 div.form-control
{
width: 59%;
float: right;
}
#parent-c2ms5ec69a7653e0e3_82679912 div.form-control
{
width: 59%;
float: right;
}
#parent-c2ms5ec69a76ca7756_93309082 div.form-control
{
width: 59%;
float: right;
}

.form-multi-box {
border: 2px solid #222;
padding: 10px;
margin-top: 10px;
padding-top:0px;
}
.form-heading {
font-size: 1.2em;
background: #f2f2f2;
padding: 10px;
margin-top:10px;
}

.form-control { margin-bottom: 7px; }

.select2-container {
min-width: 300px !important;
}',
                'object_description' => '',
                'object_form_hb' => '',
                'object_form_template' => '<div id="tab-placeholder-5ec69c0abb778" data-c2ms_role="tab">
<ul>

<li><a href="#object-tab-id-0">Quote Form</a></li>

</ul>


<div id="object-tab-id-0">

{OBJ:#91dd9d1f-a678-11ea-b4d4-4a28775f739c}

{OBJ:#91ddd3ae-a678-11ea-b4d4-4a28775f739c}

{OBJ:#91dfed1f-a678-11ea-b4d4-4a28775f739c}

{OBJ:#91e23949-a678-11ea-b4d4-4a28775f739c}

{OBJ:#91db584d-a678-11ea-b4d4-4a28775f739c}

{OBJ:#91e077a7-a678-11ea-b4d4-4a28775f739c}

{OBJ:#91df6d53-a678-11ea-b4d4-4a28775f739c}

{OBJ:#91e16398-a678-11ea-b4d4-4a28775f739c}

{OBJ:#91dd56bf-a678-11ea-b4d4-4a28775f739c}

{OBJ:#91e1c4f5-a678-11ea-b4d4-4a28775f739c}

{OBJ:#91de214f-a678-11ea-b4d4-4a28775f739c}

{OBJ:#91df1a3a-a678-11ea-b4d4-4a28775f739c}

{OBJ:#91dbf067-a678-11ea-b4d4-4a28775f739c}

{OBJ:#91e02ab3-a678-11ea-b4d4-4a28775f739c}



</div>

</div>',
                'object_id' => 3,
                'object_js' => '// $(\'.datepicker\').datepicker();

// Policy Inception
$(\'#c2ms5ec5368f067469_44213761\').datepicker({
minDate: -1,
maxDate: " 90D",
changeMonth: true,
changeYear: true,
showButtonPanel: true
});

// Policy Expiry
$(\'#c2ms5ec5368f9d2c12_82527596\').datepicker({
minDate: " 1D",
maxDate: " 456D",
changeMonth: true,
changeYear: true,
showButtonPanel: true
});

$(\'#c2ms5ec53a8096e5c2_49849027\').attr(\'data-role\', \'mi-control\').attr(\'data-target-identifier\', \'91db584d-a678-11ea-b4d4-4a28775f739c\');
$(\'#c2ms5ec53a81473e18_70622648\').attr(\'data-role\', \'mi-control\').attr(\'data-target-identifier\', \'91e077a7-a678-11ea-b4d4-4a28775f739c\');
$(\'#c2ms5ec67ffdc220f1_56705300\').attr(\'data-role\', \'mi-control\').attr(\'data-target-identifier\', \'91dbf067-a678-11ea-b4d4-4a28775f739c\');',
                'object_php' => NULL,
                'object_title' => 'Stock Throughput Form v2',
                'revision_id' => 1,
                'step_count' => 1,
                'submit_label' => NULL,
                'submit_position' => 0,
            ],

            [
                'category_id' => NULL,
                'date_created' => '2021-09-20 12:10:36',
                'id' => 4,
                'identifier' => 'c2ea42b5-1a0b-11ec-8146-0223a3b30884',
                'is_hb' => 1,
                'location_id' => 1,
                'object_claim_mobile_form' => NULL,
                'object_css' => '.form-multi-box {
border: 2px solid #222;
padding: 10px;
margin-top: 10px;
padding-top:0px;
}
.form-heading {
font-size: 1.2em;
background: #f2f2f2;
padding: 10px;
margin-top:10px;
}

.form-control { margin-bottom: 7px; }

.select2-container {
min-width: 300px !important;
}',
                'object_description' => '',
                'object_form_hb' => '<script type="text/x-handlebars-template" data-role="stp-premium-popup">
\\{{#if roledata.stp_is_stock.value}}
<div class="required">
<label for="_stock_premium_input">Stock Premium</label>
<input autofocus  type="text" id="_stock_premium_input" value="\\{{roledata.stp_stock_premium_without_tria.value}}">
</div>
\\{{/if}}

\\{{#if roledata.stp_is_transit.value}}
<div class="required">
<label for="_transit_premium_input">Transit Premium</label>
<input autofocus  type="text" id="_transit_premium_input" value="\\{{roledata.stp_transit_premium_without_tria.value}}">
</div>
\\{{/if}}
</script>



<div id="tab-placeholder-614879c43f585" data-c2ms_role="tab">

<ul>

<li><a href="#object-tab-id-0">Quote Form</a></li>

</ul>

<div id="object-tab-id-0">

<div id="stp-underwriting-workbench"></div>

{{dataset "91dd9d1f-a678-11ea-b4d4-4a28775f739c"}}

{{dataset "91ddd3ae-a678-11ea-b4d4-4a28775f739c"}}

{{dataset "91dfed1f-a678-11ea-b4d4-4a28775f739c"}}

{{dataset "91e23949-a678-11ea-b4d4-4a28775f739c"}}

{{dataset "b27d9442-b257-11eb-8146-0223a3b30884"}}

{{datasetmulti "91db584d-a678-11ea-b4d4-4a28775f739c" control="c2ms609a7d7e194550_66411163"}}

{{dataset "5180f871-b257-11eb-8146-0223a3b30884"}}

{{datasetmulti "91e077a7-a678-11ea-b4d4-4a28775f739c" control="c2ms609a7cd3926052_00063641"}}

{{dataset "91df6d53-a678-11ea-b4d4-4a28775f739c"}}

{{dataset "75f8f026-160e-11ec-8146-0223a3b30884"}}

{{dataset "e2d1b496-1619-11ec-8146-0223a3b30884"}}

{{dataset "80e694a7-161b-11ec-8146-0223a3b30884"}}

{{dataset "bddcf689-161c-11ec-8146-0223a3b30884"}}

{{dataset "76097720-161d-11ec-8146-0223a3b30884"}}

{{datasetmulti "1067af89-1629-11ec-8146-0223a3b30884" control="c2ms61a8923ecbc8a0_94060818"}}

{{dataset "ff5f6205-19f8-11ec-8146-0223a3b30884"}}

{{dataset "dfbc6473-996a-11ec-ac91-0223a3b30884"}}

{{dataset "f83bd951-996f-11ec-ac91-0223a3b30884"}}

{{dataset "55dc65c2-19fb-11ec-8146-0223a3b30884"}}

{{dataset "46d02e14-1a08-11ec-8146-0223a3b30884"}}

{{dataset "ab68db67-1a0a-11ec-8146-0223a3b30884"}}



<input type="hidden" name="eav_object_identifier" value="{{eavObjectIdentifier}}" />

</div>

</div>
{{>eav-hidden-fields}}


',
                'object_form_template' => '<div id="tab-placeholder-621e38326a69f" data-c2ms_role="tab">
<ul>

<li><a href="#object-tab-id-0">Quote Form</a></li>

<li><a href="#object-tab-id-1">Broker Reference</a></li>

<li><a href="#object-tab-id-2">Overseas Broker</a></li>

</ul>


<div id="object-tab-id-0">

<div id="stp-underwriting-workbench"></div>

{OBJ:#91dd9d1f-a678-11ea-b4d4-4a28775f739c}

{OBJ:#91ddd3ae-a678-11ea-b4d4-4a28775f739c}

{OBJ:#91dfed1f-a678-11ea-b4d4-4a28775f739c}

{OBJ:#91e23949-a678-11ea-b4d4-4a28775f739c}

{OBJ:#b27d9442-b257-11eb-8146-0223a3b30884}

{OBJ:#91db584d-a678-11ea-b4d4-4a28775f739c}

{OBJ:#5180f871-b257-11eb-8146-0223a3b30884}

{OBJ:#91e077a7-a678-11ea-b4d4-4a28775f739c}

{OBJ:#91df6d53-a678-11ea-b4d4-4a28775f739c}

{OBJ:#75f8f026-160e-11ec-8146-0223a3b30884}

{OBJ:#e2d1b496-1619-11ec-8146-0223a3b30884}

{OBJ:#80e694a7-161b-11ec-8146-0223a3b30884}

{OBJ:#bddcf689-161c-11ec-8146-0223a3b30884}

{OBJ:#76097720-161d-11ec-8146-0223a3b30884}

{OBJ:#1067af89-1629-11ec-8146-0223a3b30884}

{OBJ:#ff5f6205-19f8-11ec-8146-0223a3b30884}

{OBJ:#dfbc6473-996a-11ec-ac91-0223a3b30884}

{OBJ:#f83bd951-996f-11ec-ac91-0223a3b30884}

{OBJ:#55dc65c2-19fb-11ec-8146-0223a3b30884}

{OBJ:#46d02e14-1a08-11ec-8146-0223a3b30884}

{OBJ:#ab68db67-1a0a-11ec-8146-0223a3b30884}


</div>',
                'object_id' => 4,
                'object_js' => 'var roledata = {};

$(\'form#policy-form\').on(\'c2ms.data.role_values\',function(ev,data){
roledata = data;
});


$(\'button[data-role="stp-set-ratios"]\').off(\'click\').on(\'click\',function() {


var factor = {
stock_factor: parseFloat($(\'#c2ms620a17bb16f8e7_12178682\').val()),
transit_factor: parseFloat($(\'#c2ms620a17ba21bef0_95505815\').val())
};

if (_.isNaN(factor.stock_factor) || (factor.stock_factor == 0)) {
factor.stock_factor = 1;
}
if (_.isNaN(factor.transit_factor) || (factor.transit_factor == 0)) {
factor.transit_factor = 1;
}

var displayData= {
stp_is_stock: roledata.stp_is_stock,
stp_is_transit: roledata.stp_is_transit
};

if ( roledata.hasOwnProperty(\'stp_stock_premium_without_tria\')){
displayData.stp_stock_premium_without_tria = {
effective : sprintf(\'%.2f\', roledata.stp_stock_premium_without_tria.effective  ),
value : sprintf(\'%.2f\', roledata.stp_stock_premium_without_tria.value )
};
}
if ( roledata.hasOwnProperty(\'stp_transit_premium_without_tria\')){
displayData.stp_transit_premium_without_tria = {
effective : sprintf(\'%.2f\', roledata.stp_transit_premium_without_tria.effective ),
value : sprintf(\'%.2f\', roledata.stp_transit_premium_without_tria.value )
};
}
console.log( displayData );
var tpl = Handlebars.compile($(\'script[data-role="stp-premium-popup"]\').html());
var html = tpl({roledata: displayData});

swal({
title: \'Enter Premium\',
html: html,
allowEscapeKey: false,
allowOutsideClick: false,
showCloseButton: false,
showCancelButton: true,
confirmButtonText: \'OK\',
cancelButtonText: \'Cancel\',
preConfirm: function () {
var res = factor;

if ( roledata.hasOwnProperty(\'stp_stock_base_premium\'))
{
res.stock_factor = $(\'#_stock_premium_input\').val() / roledata.stp_stock_base_premium.value;
}

if ( roledata.hasOwnProperty(\'stp_transit_base_premium\'))
{
res.transit_factor = $(\'#_transit_premium_input\').val() / roledata.stp_transit_base_premium.value;
}

return new Promise(
function( resolve, reject){
resolve(res);
}
);
}
}).then(
function(res){
$(\'#c2ms620a17bb16f8e7_12178682\').val( res.stock_factor );
$(\'#c2ms620a17ba21bef0_95505815\').val( res.transit_factor );
},
function(){}
)
.catch(function(){});
});



// $(\'.datepicker\').datepicker();

// Policy Inception
$(\'#c2ms5ec5368f067469_44213761\').datepicker({
minDate: -1,
maxDate: " 90D",
changeMonth: true,
changeYear: true,
showButtonPanel: true
});

// Policy Expiry
$(\'#c2ms5ec5368f9d2c12_82527596\').datepicker({
minDate: " 365D",
maxDate: " 456D",
changeMonth: true,
changeYear: true,
showButtonPanel: true
});

$(\'#c2ms609a7d7e194550_66411163\').attr(\'data-role\', \'mi-control\').attr(\'data-target-identifier\', \'91db584d-a678-11ea-b4d4-4a28775f739c\');
$(\'#c2ms609a7cd3926052_00063641\').attr(\'data-role\', \'mi-control\').attr(\'data-target-identifier\', \'91e077a7-a678-11ea-b4d4-4a28775f739c\');
$(\'#c2ms61a8923ecbc8a0_94060818\').attr(\'data-role\', \'mi-control\').attr(\'data-target-identifier\', \'1067af89-1629-11ec-8146-0223a3b30884\');


(function()
{
let policyUUID = policyInfo.metadata.policy_uuid;

if(!policyUUID) return;

let uwbench = new Vue({
el: \'#stp-underwriting-workbench\',

template: `
<div>
<button
v-if="policyUUID"
type="button"
class="pull-right margin-right-10 ui-button ui-corner-all ui-widget"
style="margin: 5px;padding: 10px !important;"
data-dataset="1067af89-1629-11ec-8146-0223a3b30884"
:data-policyUUID="policyUUID"
@click="openInWorkbench"
>Open in Underwriting Workbench</button>
</div>
`,

data: {
modal: false,
loadingAccessToken: null,
C2MSAccessToken: false,
datasetUUID: false,
policyUUID: policyUUID,
iframeURL: false,
},

methods: {

runWorkbench(e)
{
this.datasetUUID = e.target.getAttribute(\'data-dataset\');
this.policyUUID = e.target.getAttribute(\'data-policyUUID\');

this.getC2MSAccessToken();
},

openInWorkbench(e)
{
this.datasetUUID = e.target.getAttribute(\'data-dataset\');
this.policyUUID = e.target.getAttribute(\'data-policyUUID\');

let callback = () => {
let url = `https://us.stageworkbench.opaluw.com/workbench/policy/product/stp/${this.policyUUID}?dataset=${this.datasetUUID}&c2mstoken=${this.C2MSAccessToken}`;

window.open(url, \'_blank\').focus();
};

if(!this.C2MSAccessToken)
{
this.getC2MSAccessToken(callback);
}
else
{
callback();
}
},

getC2MSAccessToken(callable)
{
let url = \'/v2/admin/users/current-user/access-token\';

this.loadingAccessToken = true;

fetch(url, {method: \'POST\', cache: \'no-cache\'})
.then(response => response.json())
.then(data => {

this.C2MSAccessToken = data.token;

callable();

})
;
}
},
});

})();
',
                'object_php' => NULL,
                'object_title' => 'STP V2 Rework Product Form',
                'revision_id' => 1,
                'step_count' => 1,
                'submit_label' => NULL,
                'submit_position' => 0,
            ],

            [
                'category_id' => NULL,
                'date_created' => '2022-06-27 10:51:34',
                'id' => 6,
                'identifier' => '1c4fec60-f607-11ec-bfa1-de8f233d202e',
                'is_hb' => 0,
                'location_id' => 1,
                'object_claim_mobile_form' => NULL,
                'object_css' => '',
                'object_description' => '',
                'object_form_hb' => NULL,
                'object_form_template' => '<div id="tab-placeholder-62b98b1bac9c7" data-c2ms_role="tab">
<ul>

<li><a href="#object-tab-id-0">Claims FNOL</a></li>

</ul>


<div id="object-tab-id-0">

{OBJ:#322a7f12-f604-11ec-bfa1-de8f233d202e}

{OBJ:#b06a23b1-f604-11ec-bfa1-de8f233d202e}



</div>

</div>',
                'object_id' => 7,
                'object_js' => '',
                'object_php' => NULL,
                'object_title' => 'Claims FNOL Form v1',
                'revision_id' => 1,
                'step_count' => 2,
                'submit_label' => NULL,
                'submit_position' => 0,
            ],

            [
                'category_id' => NULL,
                'date_created' => '2022-06-28 14:48:40',
                'id' => 7,
                'identifier' => '66583c4c-f6f1-11ec-bfa1-de8f233d202e',
                'is_hb' => 0,
                'location_id' => 1,
                'object_claim_mobile_form' => NULL,
                'object_css' => '',
                'object_description' => '',
                'object_form_hb' => NULL,
                'object_form_template' => '
{OBJ:#a40d6d0d-f607-11ec-bfa1-de8f233d202e}

',
                'object_id' => 8,
                'object_js' => '',
                'object_php' => NULL,
                'object_title' => 'Claims Workflow 01 - Policyholder Contacted',
                'revision_id' => 1,
                'step_count' => 1,
                'submit_label' => NULL,
                'submit_position' => 0,
            ],

            [
                'category_id' => NULL,
                'date_created' => '2022-06-28 14:49:11',
                'id' => 8,
                'identifier' => '78f58779-f6f1-11ec-bfa1-de8f233d202e',
                'is_hb' => 0,
                'location_id' => 1,
                'object_claim_mobile_form' => NULL,
                'object_css' => '',
                'object_description' => '',
                'object_form_hb' => NULL,
                'object_form_template' => '{OBJ:#dc6001a2-f607-11ec-bfa1-de8f233d202e}

',
                'object_id' => 9,
                'object_js' => '',
                'object_php' => NULL,
                'object_title' => 'Claims Workflow 02 - Assessing Coverage',
                'revision_id' => 1,
                'step_count' => 1,
                'submit_label' => NULL,
                'submit_position' => 0,
            ],

            [
                'category_id' => NULL,
                'date_created' => '2022-06-28 14:50:21',
                'id' => 9,
                'identifier' => 'a28f86ef-f6f1-11ec-bfa1-de8f233d202e',
                'is_hb' => 0,
                'location_id' => 1,
                'object_claim_mobile_form' => NULL,
                'object_css' => '',
                'object_description' => '',
                'object_form_hb' => NULL,
                'object_form_template' => '{OBJ:#385678f0-f6f0-11ec-bfa1-de8f233d202e}

',
                'object_id' => 10,
                'object_js' => '',
                'object_php' => NULL,
                'object_title' => 'Claims Workflow 03 - Coverage Determined',
                'revision_id' => 1,
                'step_count' => 1,
                'submit_label' => NULL,
                'submit_position' => 0,
            ],

            [
                'category_id' => NULL,
                'date_created' => '2022-06-28 14:50:43',
                'id' => 10,
                'identifier' => 'af7de6dc-f6f1-11ec-bfa1-de8f233d202e',
                'is_hb' => 0,
                'location_id' => 1,
                'object_claim_mobile_form' => NULL,
                'object_css' => '',
                'object_description' => '',
                'object_form_hb' => NULL,
                'object_form_template' => '{OBJ:#1f643922-f6f1-11ec-bfa1-de8f233d202e}
',
                'object_id' => 11,
                'object_js' => '',
                'object_php' => NULL,
                'object_title' => 'Claims Workflow 04 - Adjusting',
                'revision_id' => 1,
                'step_count' => 1,
                'submit_label' => NULL,
                'submit_position' => 0,
            ],

            [
                'category_id' => NULL,
                'date_created' => '2022-06-28 14:51:41',
                'id' => 11,
                'identifier' => 'd25d701b-f6f1-11ec-bfa1-de8f233d202e',
                'is_hb' => 0,
                'location_id' => 1,
                'object_claim_mobile_form' => NULL,
                'object_css' => '',
                'object_description' => '',
                'object_form_hb' => NULL,
                'object_form_template' => '{OBJ:#456dd8e0-f6f1-11ec-bfa1-de8f233d202e}
',
                'object_id' => 12,
                'object_js' => '',
                'object_php' => NULL,
                'object_title' => 'Claims Workflow 05 - Indemnity Paid',
                'revision_id' => 1,
                'step_count' => 1,
                'submit_label' => NULL,
                'submit_position' => 0,
            ],
        ];
    }
}
