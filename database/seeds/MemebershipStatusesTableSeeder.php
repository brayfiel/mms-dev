<?php

/**
 * Seeding for the Membership Statuses table
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
 * Apply seeding for the Membership Statuses table
 *
 * @category Database_Seeding
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class MemebershipStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('membership_statuses')->insert(['Description' => 'Active',                         'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_statuses')->insert(['Description' => 'Seperated due to death',         'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_statuses')->insert(['Description' => 'Non-Member',                     'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_statuses')->insert(['Description' => 'Seperated due to other reasons', 'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('membership_statuses')->insert(['Description' => 'Inactive',                       'created_by_id' => 2, 'last_editted_by_id' => 2, 'created_at' => '2019-09-02 00:00:00', 'updated_at' => '2019-09-02 00:00:00',]);
        DB::table('membership_statuses')->insert(['Description' => 'Seperated due to Birth',         'created_by_id' => 2, 'last_editted_by_id' => 2, 'created_at' => '2019-09-02 00:00:00', 'updated_at' => '2019-09-02 00:00:00',]);
        DB::table('membership_statuses')->insert(['Description' => 'Member-in-Training',             'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('membership_statuses')->insert(['Description' => 'Seperated due to scandal',       'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-04 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
    }
}
