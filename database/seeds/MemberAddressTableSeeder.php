<?php

/**
 * Seeding for the Member Address table
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
class MemberAddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('member_addresses')->insert(['member_id' => 1400, 'primary' => 1, 'street1' => '214-95 748th Street', 'street2' => 'Suite 5a', 'city' => 'Oblonga', 'state_id' => 1, 'zip_code' => '51483', 'mailing_class_id' => 1, 'LCLASS' => '', 'LSACK' => '', 'LHDR' => '', 'LIC' => '', 'created_by_id' => 1, 'last_editted_by_id' => 2, 'created_at' => '2019-09-01 01:23:00', 'updated_at' => '2019-09-02 12:34:56',]);
        DB::table('member_addresses')->insert(['member_id' => 1400, 'primary' => 0, 'street1' => '52 Tulip Road', 'street2' => 'Suite 99z', 'city' => 'Flamingo', 'state_id' => 23, 'zip_code' => '51549', 'mailing_class_id' => 2, 'LCLASS' => '', 'LSACK' => '', 'LHDR' => '', 'LIC' => '', 'created_by_id' => 2, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 02:23:00', 'updated_at' => '2019-09-02 13:34:56',]);
        DB::table('member_addresses')->insert(['member_id' => 1401, 'primary' => 1, 'street1' => 'One Cross Walk Way', 'street2' => '', 'city' => 'Horse Hockey', 'state_id' => 50, 'zip_code' => '72483', 'mailing_class_id' => 1, 'LCLASS' => '', 'LSACK' => '', 'LHDR' => '', 'LIC' => '', 'created_by_id' => 3, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 03:23:00', 'updated_at' => '2019-09-02 14:34:56',]);
        DB::table('member_addresses')->insert(['member_id' => 1401, 'primary' => 0, 'street1' => 'fifty Gold Paved Street', 'street2' => '', 'city' => 'Silverton', 'state_id' => 45, 'zip_code' => '76983', 'mailing_class_id' => 2, 'LCLASS' => '', 'LSACK' => '', 'LHDR' => '', 'LIC' => '', 'created_by_id' => 1, 'last_editted_by_id' => 2, 'created_at' => '2019-09-01 04:23:00', 'updated_at' => '2019-09-02 15:34:56',]);
        DB::table('member_addresses')->insert(['member_id' => 1402, 'primary' => 1, 'street1' => '5 Ground Coffee Ave.', 'street2' => 'Bldg. 72', 'city' => 'Grinder', 'state_id' => 16, 'zip_code' => '16885', 'mailing_class_id' => 1, 'LCLASS' => '', 'LSACK' => '', 'LHDR' => '', 'LIC' => '', 'created_by_id' => 2, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 05:23:00', 'updated_at' => '2019-09-02 16:34:56',]);
    }
}


