<?php

/**
 * Seeding for the Memebership Types table
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
 * Apply seeding for the Memebership Types table
 *
 * @category Database_Seeding
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class MemebershipTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('membership_types')->insert(['Description' => 'Associate',           'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Full',                'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Individual',          'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Non-Member',          'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Special',             'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => '>> To Be Defined <<', 'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'One Quarter',         'created_by_id' => 2, 'last_editted_by_id' => 2, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'One Half',            'created_by_id' => 2, 'last_editted_by_id' => 2, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Three Quarter',       'created_by_id' => 2, 'last_editted_by_id' => 2, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => '99%',                 'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Childish',            'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Able 1',              'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Able 2',              'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Able 3',              'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Able 4',              'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Able 5',              'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Baker 1',             'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Baker 2',             'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Baker 3',             'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Baker 4',             'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Baker 5',             'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Baker 6',             'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Charlie 1',           'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Charlie 2',           'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Charlie 3',           'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Charlie 4',           'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Charlie 5',           'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'David 1',             'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'David 2',             'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'David 3',             'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'David 4',             'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'David 5',             'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Edward 1',            'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Edward 2',            'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Edward 3',            'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Edward 4',            'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Edward 5',            'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Foxtrot 1',           'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Foxtrot 2',           'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Foxtrot 3',           'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Foxtrot 4',           'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Foxtrot 5',           'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Gogo 1',              'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Gogo 2',              'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Gogo 3',              'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Gogo 4',              'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_types')->insert(['Description' => 'Gogo 5',              'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
    }
}
