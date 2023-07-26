<?php

namespace Database\Seeders\Development\C2MS;

use Illuminate\Database\Seeder;

class FieldsDsFlatTableSeeder extends Seeder
{
    public function run(): void
    {
        \DB::table('fields_ds_flat')->truncate();

        \DB::table('fields_ds_flat')->insert(
            $this->provideData()
        );
    }

    protected function provideData(): array
    {
        return [
            [
                'data_source' => '1:Yes
2:No',
                'date_created' => '2020-06-04 17:31:19',
                'field_id' => 79,
                'id' => 47,
                'location_id' => 1,
            ],

            [
                'data_source' => '0:0
1:1
2:2
3:3
4:4
5:5',
                'date_created' => '2020-06-04 17:31:19',
                'field_id' => 80,
                'id' => 48,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Arenas / Stadia
2:Construction
3:Embassies / Consulates
4:Factory / Warehouse
5:High Rise Buildings
6:Hospital / Medical
7:Hotel
8:Infrastructure
9:International Airports
10:Municipal / Educational
11:National / Federal Government Property
12:Office / Administrative
13:Oil / Gas
14:Other
15:Police / Military
16:Power / Utility
17:Public Transport
18:Religious
19:Residential
20:Retail
21:Telecoms / Media',
                'date_created' => '2020-06-04 17:31:19',
                'field_id' => 82,
                'id' => 49,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Terror
2:Follow form',
                'date_created' => '2020-06-04 17:31:19',
                'field_id' => 83,
                'id' => 50,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Yes',
                'date_created' => '2020-06-04 17:31:19',
                'field_id' => 85,
                'id' => 51,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Third party only
2: Third party and Employees',
                'date_created' => '2020-06-04 17:31:19',
                'field_id' => 86,
                'id' => 52,
                'location_id' => 1,
            ],

            [
                'data_source' => '0:0
1:1
2:2
3:3+',
                'date_created' => '2020-06-04 17:31:19',
                'field_id' => 87,
                'id' => 53,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Not required
2:0.25 miles
3:0.5 miles
4:1 mile
5:2.5 miles
6:5 miles
',
                'date_created' => '2020-06-04 17:31:19',
                'field_id' => 88,
                'id' => 54,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:1
2:2
3:3
4:4
5:5
6:6
7:7
8:8
9:9
10:10',
                'date_created' => '2020-06-04 17:31:19',
                'field_id' => 89,
                'id' => 55,
                'location_id' => 1,
            ],

            [
                'data_source' => '0:0
1:1
2:2
3:3
4:4
5:5',
                'date_created' => '2020-06-04 17:32:07',
                'field_id' => 95,
                'id' => 56,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Yes',
                'date_created' => '2020-06-04 17:32:07',
                'field_id' => 97,
                'id' => 57,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Yes
2:No',
                'date_created' => '2020-06-04 17:32:07',
                'field_id' => 98,
                'id' => 58,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:All wind
2:Named wind only
3:Wind and hail only',
                'date_created' => '2020-06-04 17:32:07',
                'field_id' => 100,
                'id' => 59,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Per occurrence
2:Per location
3:Per building
4:Per location to per occurrence
5:Per building to per occurrence',
                'date_created' => '2020-06-04 17:32:07',
                'field_id' => 101,
                'id' => 60,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Difference between % and %
2:Difference between % and $
3:Difference between $ and $',
                'date_created' => '2020-06-04 17:32:07',
                'field_id' => 102,
                'id' => 61,
                'location_id' => 1,
            ],

            [
                'data_source' => '2:All other types
1:Course of Construction',
                'date_created' => '2020-06-04 17:32:07',
                'field_id' => 103,
                'id' => 62,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:1
2:2
3:3
4:4
5:5
6:6
7:7
8:8
9:9
10:10',
                'date_created' => '2020-06-04 17:32:07',
                'field_id' => 104,
                'id' => 63,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Option 1
2:Option 2
3:Option 3',
                'date_created' => '2020-06-04 17:32:07',
                'field_id' => 105,
                'id' => 64,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Homeowners
2:Condo Assoc. / Multifamily
3:Homeowners Assoc. / Multifamily / Condo
4:Church / Place of Worship
5:Office and Admin
6:Industrial
7:Hotel / Motel / Short-term Let
8:Education
9:Retail / Warehousing / Hospitality
10:General Commercial
11:Other
12:Solar Panels
13:Mobile Homes
14:Docks / Piers and Wharves
15:Greenhouses
17:Auto-Dealerships',
                'date_created' => '2020-06-04 17:32:07',
                'field_id' => 106,
                'id' => 65,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:0
2:1
3:2
4:3+',
                'date_created' => '2020-06-04 17:32:07',
                'field_id' => 107,
                'id' => 66,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Post 2005
2:2002-2005
3:1994-2001
4:Pre 1994',
                'date_created' => '2020-06-04 17:32:07',
                'field_id' => 108,
                'id' => 67,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Brick Veneer
2:Fire Resistive
3:Frame
4:Joisted Masonry
5:Masonry Non Combustible
6:Non Combustible',
                'date_created' => '2020-06-04 17:32:07',
                'field_id' => 109,
                'id' => 68,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:0-2 years
2:2-4 years
3:4-8 years
4:8-10 years
5:10-12 years
6:12-15 years
7:15-20 years
8:20+ years',
                'date_created' => '2020-06-04 17:32:07',
                'field_id' => 110,
                'id' => 69,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Unknown
2:Shingle
3:Tile
4:Metal
5:Slate',
                'date_created' => '2020-06-04 17:32:07',
                'field_id' => 111,
                'id' => 70,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Yes
2:No',
                'date_created' => '2020-06-04 17:32:16',
                'field_id' => 117,
                'id' => 71,
                'location_id' => 1,
            ],

            [
                'data_source' => '0:0
1:1
2:2
3:3+
4:Unknown',
                'date_created' => '2020-06-04 17:32:16',
                'field_id' => 119,
                'id' => 72,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Fully Sprinklered
2:Fire Alarm - Central Station
3:None',
                'date_created' => '2020-06-04 17:32:16',
                'field_id' => 120,
                'id' => 73,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Central Station - Burglar Alarm
2:Security Guards
3:Key Card Access
4:CCTV
5:None',
                'date_created' => '2020-06-04 17:32:16',
                'field_id' => 121,
                'id' => 74,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:1
2:2
3:3
4:4
5:5
6:6
7:7
8:8
9:9
10:10',
                'date_created' => '2020-06-04 17:32:16',
                'field_id' => 122,
                'id' => 75,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Yes',
                'date_created' => '2020-06-04 17:32:16',
                'field_id' => 123,
                'id' => 76,
                'location_id' => 1,
            ],

            [
                'data_source' => '0:0
1:1
2:2
3:3+
4:Unknown',
                'date_created' => '2020-06-04 17:32:16',
                'field_id' => 124,
                'id' => 77,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Stock Only
2:Stock & Transit
3:Transit Only',
                'date_created' => '2020-06-04 17:32:16',
                'field_id' => 125,
                'id' => 78,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Selling price
2:Cost price',
                'date_created' => '2020-06-04 17:32:16',
                'field_id' => 126,
                'id' => 79,
                'location_id' => 1,
            ],

            [
                'data_source' => '0:0
1:1
2:2
3:3
4:4
5:5
6:6
7:7
8:8
9:9
10:10
11:11
12:12
13:13
14:14
15:15
16:16
17:17
18:18
19:19
20:20
21:21
22:22
23:23
24:24
25:25
26:26
27:27
28:28
29:29
30:30
31:31
32:32
33:33
34:34
35:35
36:36
37:37
38:38
39:39
40:40
41:41
42:42
43:43
44:44
45:45
46:46
47:47
48:48
49:49
50:50
51:51
52:52
53:53
54:54
55:55
56:56
57:57
58:58
59:59
60:60
61:61
62:62
63:63
64:64
65:65
66:66
67:67
68:68
69:69
70:70
71:71
72:72
73:73
74:74
75:75
76:76
77:77
78:78
79:79
80:80
81:81
82:82
83:83
84:84
85:85
86:86
87:87
88:88
89:89
90:90
91:91
92:92
93:93
94:94
95:95
96:96
97:97
98:98
99:99
100:100',
                'date_created' => '2020-06-04 17:32:16',
                'field_id' => 127,
                'id' => 80,
                'location_id' => 1,
            ],

            [
                'data_source' => '350:Alcohol
100:Arms & Ammo
110:Bitumen / Tar
10:Canned Food and Non-Perishable Foodstuffs
120:Cellphones / Tablets
130:Cement
20:Chemicals
320:Clothing
140:Coal
150:Computers / TV\'s / Game Consoles
160:Cotton
370:Domestic Appliances
170:Fertiliser / Grain / Cereal
180:Fireworks
190:Fresh Meat / Fruit / Food
380:Furniture
30:General Cargo
40:General Equipment / Machinery
200:Hauliers / Freight Liability
50:High Tech/Electronic Goods
210:Household / Personal Effects
220:Leather / Hides / Skins
230:Livestock / Shellfish / Seafood / Fishmeal
240:Logs & Lumber
60:Metals
250:Nuclear Interests
70:Oil and/ or petroleum products
80:Ores / Minerals
90:Other
260:Paper / Pulp
270:Pharmaceutical / Biotech
280:Pipes / Cables
290:Plants / Flowers
300:Scrap
310:Specialist Equipment / Machinery
330:Tobacco / Tobacco Products
340:Vehicles / Motorcycles / Rubber Tyres
360:Wood Products',
                'date_created' => '2020-06-04 17:32:16',
                'field_id' => 128,
                'id' => 81,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Temperature sensitive alarms&#58; storage
2:Temperature sensitive alarms&#58; transit
3:Back-up generators&#58; storage
4:Goods shipped by a specialist shipping company with experience in temperature',
                'date_created' => '2020-06-04 17:32:16',
                'field_id' => 129,
                'id' => 82,
                'location_id' => 1,
            ],

            [
                'data_source' => '0:0
1:1
2:2
3:3
4:4
5:5',
                'date_created' => '2020-06-04 17:32:16',
                'field_id' => 130,
                'id' => 83,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:0
2:1
3:2+',
                'date_created' => '2020-09-11 11:09:24',
                'field_id' => 131,
                'id' => 84,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Individual Locations
2: Grouped Locations',
                'date_created' => '2020-10-21 10:11:06',
                'field_id' => 132,
                'id' => 85,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Yes',
                'date_created' => '2020-12-01 09:19:46',
                'field_id' => 133,
                'id' => 86,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Fully Sprinklered',
                'date_created' => '2021-04-09 08:11:48',
                'field_id' => 134,
                'id' => 87,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Fully functioning fire alarm central station',
                'date_created' => '2021-04-09 09:05:07',
                'field_id' => 135,
                'id' => 88,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Fully functioning central station burglar alarm',
                'date_created' => '2021-04-09 09:08:53',
                'field_id' => 136,
                'id' => 89,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Security Guards',
                'date_created' => '2021-04-09 09:09:51',
                'field_id' => 137,
                'id' => 90,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Key Card Access',
                'date_created' => '2021-04-09 09:10:33',
                'field_id' => 138,
                'id' => 91,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Fully Functional CCTV',
                'date_created' => '2021-04-09 09:11:23',
                'field_id' => 139,
                'id' => 92,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:None',
                'date_created' => '2021-04-09 09:11:57',
                'field_id' => 140,
                'id' => 93,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Brick Veneer
2:Fire Resistive
3:Frame
4:Joisted Masonry
5:Masonry Non Combustible
6:Non Combustible
7:Wooden frame
8: Unknown',
                'date_created' => '2021-09-15 12:56:14',
                'field_id' => 141,
                'id' => 94,
                'location_id' => 1,
            ],

            [
                'data_source' => '10:Post 2005
20:1991-2005
30:1975-1990
40:Pre 1975
50:Unknown',
                'date_created' => '2021-09-15 12:58:23',
                'field_id' => 142,
                'id' => 95,
                'location_id' => 1,
            ],

            [
                'data_source' => '10:Post 2005
20:1991-2005
30:1975-1990
40:Pre 1975
50:Unknown',
                'date_created' => '2021-09-15 12:58:54',
                'field_id' => 143,
                'id' => 96,
                'location_id' => 1,
            ],

            [
                'data_source' => '10:Post 2005
20:1991-2005
30:1975-1990
40:Pre 1978
50:Unknown',
                'date_created' => '2021-09-15 13:12:43',
                'field_id' => 144,
                'id' => 97,
                'location_id' => 1,
            ],

            [
                'data_source' => '1: With Stock TRIA Coverage
2: Without Stock TRIA Coverage',
                'date_created' => '2021-09-20 10:14:09',
                'field_id' => 145,
                'id' => 98,
                'location_id' => 1,
            ],

            [
                'data_source' => '10:Post 2005
20:1991-2005
30:1979-1990
40:Pre 1978
50:Unknown',
                'date_created' => '2021-11-24 07:51:48',
                'field_id' => 146,
                'id' => 99,
                'location_id' => 1,
            ],

            [
                'data_source' => '10:Post 2005
20:1991-2005
30:1979-1990
40:Pre 1978
50:Unknown',
                'date_created' => '2021-11-24 07:54:38',
                'field_id' => 147,
                'id' => 100,
                'location_id' => 1,
            ],

            [
                'data_source' => '1: Yes
2: No
3: Unknown',
                'date_created' => '2021-12-21 12:11:27',
                'field_id' => 148,
                'id' => 101,
                'location_id' => 1,
            ],

            [
                'data_source' => '1: Fire
2: Theft
3: Flood
4: Missing in Transit
5: Natural Catastrophe
6: Other
7: Multiple',
                'date_created' => '2021-12-21 12:37:58',
                'field_id' => 149,
                'id' => 102,
                'location_id' => 1,
            ],

            [
                'data_source' => '10:Insured\'s Notice of Loss
20:Letter
30:Estimate
40:Invoice
50:Police Report
60:Fire Report
70:Legal Correspondence
80:Other',
                'date_created' => '2022-06-27 10:13:33',
                'field_id' => 151,
                'id' => 103,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Cause of loss [update me]',
                'date_created' => '2022-06-27 10:14:29',
                'field_id' => 152,
                'id' => 104,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Update to SQL',
                'date_created' => '2022-06-27 10:16:48',
                'field_id' => 153,
                'id' => 105,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Unknown',
                'date_created' => '2022-06-27 10:18:31',
                'field_id' => 154,
                'id' => 106,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Email
2:Phone
3:Letter',
                'date_created' => '2022-06-27 10:53:39',
                'field_id' => 155,
                'id' => 107,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Current position A
2:Current position B',
                'date_created' => '2022-06-27 10:55:53',
                'field_id' => 156,
                'id' => 108,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Coverage Outcome A
2:Coverage Outcome B',
                'date_created' => '2022-06-28 13:03:46',
                'field_id' => 157,
                'id' => 109,
                'location_id' => 1,
            ],

            [
                'data_source' => '1:Adjusting status 1
2:Adjusting status 2',
                'date_created' => '2022-06-28 14:45:57',
                'field_id' => 158,
                'id' => 110,
                'location_id' => 1,
            ],
        ];
    }
}
