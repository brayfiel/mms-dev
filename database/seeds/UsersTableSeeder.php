<?php

/**
 * Seeding for the Users table
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
 * Apply seeding for the Users table
 *
 * @category Database_Seeding
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(['surname_id' => 1,  'first_name' => 'Barry',   'last_name' => 'Rayfield', 'suffix_id' => 21, 'is_active' => 1, 'membership' => 1, 'yizcor' => 1, 'permanent_pew' => 1, 'high_holidays' => 1, 'calendar' => 1, 'maintenance' => 1, 'mms_global_id' => 1, 'email' => 'barry.rayfield@gmail.com',    'password' => bcrypt('mischeif02'), 'created_by_id' => 2,  'last_editted_by_id' => 1,  'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('users')->insert(['surname_id' => 2,  'first_name' => 'Able',    'last_name' => 'Doe',      'suffix_id' => 22, 'is_active' => 1, 'membership' => 1, 'yizcor' => 1, 'permanent_pew' => 1, 'high_holidays' => 1, 'calendar' => 1, 'maintenance' => 0, 'mms_global_id' => 1, 'email' => 'able.doe@bsrresearch.com',    'password' => bcrypt('mischeif02'), 'created_by_id' => 1,  'last_editted_by_id' => 2,  'created_at' => '2019-09-02 00:00:00', 'updated_at' => '2019-09-05 00:00:00',]);
        DB::table('users')->insert(['surname_id' => 3,  'first_name' => 'Baker',   'last_name' => 'Doe',      'suffix_id' => 23, 'is_active' => 1, 'membership' => 1, 'yizcor' => 1, 'permanent_pew' => 1, 'high_holidays' => 1, 'calendar' => 0, 'maintenance' => 0, 'mms_global_id' => 1, 'email' => 'baker.doe@bsrresearch.com',   'password' => bcrypt('mischeif02'), 'created_by_id' => 4,  'last_editted_by_id' => 3,  'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-07 00:00:00',]);
        DB::table('users')->insert(['surname_id' => 4,  'first_name' => 'charlie', 'last_name' => 'Doe',      'suffix_id' => 24, 'is_active' => 1, 'membership' => 1, 'yizcor' => 1, 'permanent_pew' => 1, 'high_holidays' => 0, 'calendar' => 0, 'maintenance' => 0, 'mms_global_id' => 1, 'email' => 'charlie.doe@bsrresearch.com', 'password' => bcrypt('mischeif02'), 'created_by_id' => 3,  'last_editted_by_id' => 4,  'created_at' => '2019-09-04 00:00:00', 'updated_at' => '2019-09-09 00:00:00',]);
        DB::table('users')->insert(['surname_id' => 5,  'first_name' => 'Delta',   'last_name' => 'Doe',      'suffix_id' => 25, 'is_active' => 1, 'membership' => 1, 'yizcor' => 1, 'permanent_pew' => 0, 'high_holidays' => 0, 'calendar' => 0, 'maintenance' => 0, 'mms_global_id' => 1, 'email' => 'delta.doe@bsrresearch.com',   'password' => bcrypt('mischeif02'), 'created_by_id' => 6,  'last_editted_by_id' => 5,  'created_at' => '2019-09-05 00:00:00', 'updated_at' => '2019-09-11 00:00:00',]);
        DB::table('users')->insert(['surname_id' => 6,  'first_name' => 'Edward',  'last_name' => 'Doe',      'suffix_id' => 26, 'is_active' => 1, 'membership' => 1, 'yizcor' => 0, 'permanent_pew' => 0, 'high_holidays' => 0, 'calendar' => 0, 'maintenance' => 0, 'mms_global_id' => 1, 'email' => 'edward.doe@bsrresearch.com',  'password' => bcrypt('mischeif02'), 'created_by_id' => 5,  'last_editted_by_id' => 6,  'created_at' => '2019-09-06 00:00:00', 'updated_at' => '2019-09-13 00:00:00',]);
        DB::table('users')->insert(['surname_id' => 6,  'first_name' => 'Esso',    'last_name' => 'Doe',      'suffix_id' => 26, 'is_active' => 1, 'membership' => 0, 'yizcor' => 0, 'permanent_pew' => 0, 'high_holidays' => 0, 'calendar' => 0, 'maintenance' => 0, 'mms_global_id' => 1, 'email' => 'esso.doe@bsrresearch.com',    'password' => bcrypt('mischeif02'), 'created_by_id' => 5,  'last_editted_by_id' => 6,  'created_at' => '2019-09-06 00:00:00', 'updated_at' => '2019-09-13 00:00:00',]);
        DB::table('users')->insert(['surname_id' => 7,  'first_name' => 'Frank',   'last_name' => 'Doe',      'suffix_id' => 27, 'is_active' => 0, 'membership' => 1, 'yizcor' => 1, 'permanent_pew' => 1, 'high_holidays' => 1, 'calendar' => 1, 'maintenance' => 1, 'mms_global_id' => 1, 'email' => 'frank.doe@bsrresearch.com',   'password' => bcrypt('mischeif02'), 'created_by_id' => 8,  'last_editted_by_id' => 7,  'created_at' => '2019-09-07 00:00:00', 'updated_at' => '2019-09-15 00:00:00',]);
        DB::table('users')->insert(['surname_id' => 8,  'first_name' => 'George',  'last_name' => 'Doe',      'suffix_id' => 28, 'is_active' => 0, 'membership' => 1, 'yizcor' => 1, 'permanent_pew' => 1, 'high_holidays' => 1, 'calendar' => 1, 'maintenance' => 0, 'mms_global_id' => 1, 'email' => 'george.doe@bsrresearch.com',  'password' => bcrypt('mischeif02'), 'created_by_id' => 7,  'last_editted_by_id' => 8,  'created_at' => '2019-09-08 00:00:00', 'updated_at' => '2019-09-17 00:00:00',]);
        DB::table('users')->insert(['surname_id' => 9,  'first_name' => 'Henry',   'last_name' => 'Doe',      'suffix_id' => 29, 'is_active' => 0, 'membership' => 1, 'yizcor' => 1, 'permanent_pew' => 1, 'high_holidays' => 1, 'calendar' => 0, 'maintenance' => 0, 'mms_global_id' => 1, 'email' => 'henry.doe@bsrresearch.com',   'password' => bcrypt('mischeif02'), 'created_by_id' => 10, 'last_editted_by_id' => 9,  'created_at' => '2019-09-09 00:00:00', 'updated_at' => '2019-09-19 00:00:00',]);
        DB::table('users')->insert(['surname_id' => 10, 'first_name' => 'Ira',     'last_name' => 'Doe',      'suffix_id' => 30, 'is_active' => 0, 'membership' => 1, 'yizcor' => 1, 'permanent_pew' => 1, 'high_holidays' => 0, 'calendar' => 0, 'maintenance' => 0, 'mms_global_id' => 1, 'email' => 'ira.doe@bsrresearch.com',     'password' => bcrypt('mischeif02'), 'created_by_id' => 9,  'last_editted_by_id' => 10, 'created_at' => '2019-09-10 00:00:00', 'updated_at' => '2019-09-21 00:00:00',]);
        DB::table('users')->insert(['surname_id' => 11, 'first_name' => 'Jacob',   'last_name' => 'Doe',      'suffix_id' => 31, 'is_active' => 0, 'membership' => 1, 'yizcor' => 1, 'permanent_pew' => 0, 'high_holidays' => 0, 'calendar' => 0, 'maintenance' => 0, 'mms_global_id' => 1, 'email' => 'jacob.doe@bsrresearch.com',   'password' => bcrypt('mischeif02'), 'created_by_id' => 12, 'last_editted_by_id' => 11, 'created_at' => '2019-09-11 00:00:00', 'updated_at' => '2019-09-23 00:00:00',]);
        DB::table('users')->insert(['surname_id' => 12, 'first_name' => 'Kieth',   'last_name' => 'Doe',      'suffix_id' => 32, 'is_active' => 0, 'membership' => 1, 'yizcor' => 0, 'permanent_pew' => 0, 'high_holidays' => 0, 'calendar' => 0, 'maintenance' => 0, 'mms_global_id' => 1, 'email' => 'kieth.doe@bsrresearch.com',   'password' => bcrypt('mischeif02'), 'created_by_id' => 11, 'last_editted_by_id' => 12, 'created_at' => '2019-09-12 00:00:00', 'updated_at' => '2019-09-25 00:00:00',]);
        DB::table('users')->insert(['surname_id' => 12, 'first_name' => 'Kenny',   'last_name' => 'Doe',      'suffix_id' => 32, 'is_active' => 0, 'membership' => 0, 'yizcor' => 0, 'permanent_pew' => 0, 'high_holidays' => 0, 'calendar' => 0, 'maintenance' => 0, 'mms_global_id' => 1, 'email' => 'kenny.doe@bsrresearch.com',   'password' => bcrypt('mischeif02'), 'created_by_id' => 11, 'last_editted_by_id' => 12, 'created_at' => '2019-09-12 00:00:00', 'updated_at' => '2019-09-25 00:00:00',]);
    }
}
