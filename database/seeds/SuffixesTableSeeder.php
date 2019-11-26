<?php

/**
 * Seeding for the Person Name Suffixes table
 * PHP version 7.3.9
 *
 * @category Database_Seeding
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
use Illuminate\Database\Seeder;

/**
 * Apply seeding for the Person Name Suffixes table
 *
 * @category Database_Seeding
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class SuffixesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suffixes')->insert(['description' => 'Jr.',                'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'Esq.',               'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => '(Ret.)',             'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'Sr.',                'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'CPA',                'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'US Army',            'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => '2nd',                'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'DC',                 'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'USA (Ret.)',         'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => '3rd',                'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'DDS',                'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'USAF',               'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'US Air Force',       'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'II',                 'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'VM',                 'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'USAF (Ret.)',        'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'III',                'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'JD',                 'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'USMC',               'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'US Marine Corp.',    'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'IV',                 'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'MD',                 'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'USMCR',              'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'US Marine Reserves', 'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'V',                  'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'PhD',                'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'USN',                'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'US Navy',            'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'VI',                 'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'USN (Ret.)',         'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'Jr. (USAR Ret.)',    'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'CFX',                'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'IHM',                'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'RDC',                'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'CND',                'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'OCD',                'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'RSM',                'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'CSB',                'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'OFM',                'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'SJ',                 'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'CSC',                'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'OP',                 'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'SM',                 'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'CSFN',               'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'OSA',                'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'SND',                'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'CSJ',                'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'OSB',                'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'SP',                 'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'FS',                 'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'OSF',                'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'SSJ',                'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'FSC',                'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
        DB::table('suffixes')->insert(['description' => 'PM',                 'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00', ]);
    }
}
