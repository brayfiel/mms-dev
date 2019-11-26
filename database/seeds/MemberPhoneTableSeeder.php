<?php

/**
 * Seeding for the Member Phones table
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
 * Apply seeding for the Member Phones table
 *
 * @category Database_Seeding
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class MemberPhoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('member_phones')->insert(['member_id' => 1400, 'phone_types_id' => 1, 'phone_number' => '7183431150', 'phone_ext' => '5214', 'created_by_id' => 1, 'last_editted_by_id' => 2, 'created_at' => '2019-09-01 01:00:00', 'updated_at' => '2019-09-02 12:34:00',]);
        DB::table('member_phones')->insert(['member_id' => 1400, 'phone_types_id' => 2, 'phone_number' => '7183431151', 'phone_ext' => '', 'created_by_id' => 2, 'last_editted_by_id' => 2, 'created_at' => '2019-09-01 02:00:00', 'updated_at' => '2019-09-02 13:34:00',]);
        DB::table('member_phones')->insert(['member_id' => 1401, 'phone_types_id' => 1, 'phone_number' => '7183431152', 'phone_ext' => '5215', 'created_by_id' => 3, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 03:00:00', 'updated_at' => '2019-09-02 13:34:00',]);
        DB::table('member_phones')->insert(['member_id' => 1401, 'phone_types_id' => 3, 'phone_number' => '7183431153', 'phone_ext' => '5216', 'created_by_id' => 1, 'last_editted_by_id' => 2, 'created_at' => '2019-09-01 04:00:00', 'updated_at' => '2019-09-02 14:34:00',]);
        DB::table('member_phones')->insert(['member_id' => 1402, 'phone_types_id' => 1, 'phone_number' => '7183431154', 'phone_ext' => '5217', 'created_by_id' => 2, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 05:00:00', 'updated_at' => '2019-09-02 15:34:00',]);
        DB::table('member_phones')->insert(['member_id' => 1402, 'phone_types_id' => 4, 'phone_number' => '7183431155', 'phone_ext' => '5218', 'created_by_id' => 3, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 06:00:00', 'updated_at' => '2019-09-02 16:34:00',]);
    }
}


