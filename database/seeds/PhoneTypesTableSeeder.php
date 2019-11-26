<?php

/**
 * Seeding for the Phone Types table
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
 * Apply seeding for the Phone Types table
 *
 * @category Database_Seeding
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class PhoneTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phone_types')->insert(['Description' => 'Home',                'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Alternate Home',      'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Business',            'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Fax',                 'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Cellular Phone',      'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Pager',               'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Telegraph',           'created_by_id' => 2, 'last_editted_by_id' => 2, 'created_at' => '2019-09-02 00:00:00', 'updated_at' => '2019-09-02 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => '2 cans and a string', 'created_by_id' => 2, 'last_editted_by_id' => 2, 'created_at' => '2019-09-02 00:00:00', 'updated_at' => '2019-09-02 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Sattelite Phone',     'created_by_id' => 2, 'last_editted_by_id' => 2, 'created_at' => '2019-09-02 00:00:00', 'updated_at' => '2019-09-02 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Teletype',            'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Smoke Signals',       'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'VOIP',                'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Able 1',              'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Able 2',              'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Able 3',              'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Able 4',              'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Able 5',              'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Baker 1',             'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Baker 2',             'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Baker 3',             'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Baker 4',             'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Baker 5',             'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Charlie 1',           'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Charlie 2',           'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Charlie 3',           'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Charlie 4',           'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Charlie 5',           'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'David 1',             'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'David 2',             'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'David 3',             'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'David 4',             'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'David 5',             'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Echo 1',              'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Echo 2',              'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Echo 3',              'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Echo 4',              'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Echo 5',              'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Falcon 1',            'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Falcon 2',            'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Falcon 3',            'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Falcon 4',            'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('phone_types')->insert(['Description' => 'Falcon 5',            'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
    }
}
