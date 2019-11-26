<?php

/**
 * Seeding for the VIP Codes table
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
 * Apply seeding for the VIP Codes table
 *
 * @category Database_Seeding
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class VIPCodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vip_codes')->insert(
            [
                'description' => 'Clergy',
                'created_by_id' => 1,
                'last_editted_by_id' => 1,
                'created_at' => '2019-09-01 00:00:00',
                'updated_at' => '2019-09-01 00:00:00',
            ]
        );
        DB::table('vip_codes')->insert(
            [
                'description' => 'Not Applicable',
                'created_by_id' => 1,
                'last_editted_by_id' => 1,
                'created_at' => '2019-09-01 00:00:00',
                'updated_at' => '2019-09-01 00:00:00',
            ]
        );
        DB::table('vip_codes')->insert(
            [
                'description' => 'Other VIP Person',
                'created_by_id' => 1,
                'last_editted_by_id' => 1,
                'created_at' => '2019-09-01 00:00:00',
                'updated_at' => '2019-09-01 00:00:00',
            ]
        );
        DB::table('vip_codes')->insert(
            [
                'description' => 'Political',
                'created_by_id' => 1,
                'last_editted_by_id' => 1,
                'created_at' => '2019-09-01 00:00:00',
                'updated_at' => '2019-09-01 00:00:00',
            ]
        );
        DB::table('vip_codes')->insert(
            [
                'description' => 'Seperated Member',
                'created_by_id' => 1,
                'last_editted_by_id' => 1,
                'created_at' => '2019-09-01 00:00:00',
                'updated_at' => '2019-09-01 00:00:00',
            ]
        );
    }
}
