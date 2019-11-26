<?php

/**
 * Seeding for the Memberships table
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
 * Apply seeding for the Members table
 *
 * @category Database_Seeding
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert(['id'=> 1400, 'membership_type_id' => '1', 'membership_status_id' => '1', 'perferred_mailing' => 'Email', 'created_by_id' => 1, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 01:00:00', 'updated_at' => '2019-09-02 12:23:00',]);
        DB::table('members')->insert(['id'=> 1401, 'membership_type_id' => '2', 'membership_status_id' => '2', 'perferred_mailing' => 'Email', 'created_by_id' => 1, 'last_editted_by_id' => 2, 'created_at' => '2019-09-01 02:00:00', 'updated_at' => '2019-09-02 13:23:00',]);
        DB::table('members')->insert(['id'=> 1402, 'membership_type_id' => '3', 'membership_status_id' => '3', 'perferred_mailing' => 'Email', 'created_by_id' => 2, 'last_editted_by_id' => 2, 'created_at' => '2019-09-01 03:00:00', 'updated_at' => '2019-09-02 14:23:00',]);
        DB::table('members')->insert(['id'=> 1403, 'membership_type_id' => '4', 'membership_status_id' => '4', 'perferred_mailing' => 'Email', 'created_by_id' => 2, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 04:00:00', 'updated_at' => '2019-09-02 15:23:00',]);
        DB::table('members')->insert(['id'=> 1404, 'membership_type_id' => '5', 'membership_status_id' => '5', 'perferred_mailing' => 'Email', 'created_by_id' => 3, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 05:00:00', 'updated_at' => '2019-09-02 16:23:00',]);
    }
}
