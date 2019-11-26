<?php

/**
 * Seeding for the Mailing Classes table
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
 * Apply seeding for the Mailing Classes table
 *
 * @category Database_Seeding
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class MailingClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'P1', 'Description' => 'Primary 1st Class',   'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'P3', 'Description' => 'Primary 3rd Class',   'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'S1', 'Description' => 'Secondary 1st Class', 'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'S3', 'Description' => 'Secondary 3rd Class', 'created_by_id' => 1, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'T1', 'Description' => 'Primary 1st Class',   'created_by_id' => 2, 'last_editted_by_id' => 2, 'created_at' => '2019-09-02 00:00:00', 'updated_at' => '2019-09-02 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'T3', 'Description' => 'Primary 3rd Class',   'created_by_id' => 2, 'last_editted_by_id' => 2, 'created_at' => '2019-09-02 00:00:00', 'updated_at' => '2019-09-02 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'U1', 'Description' => 'Secondary 1st Class', 'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'U3', 'Description' => 'Secondary 3rd Class', 'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'A1', 'Description' => 'Alpha 1st Class',     'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'A2', 'Description' => 'Alpha 2nd Class',     'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'A3', 'Description' => 'Alpha 3rd Class',     'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'B1', 'Description' => 'Baker 1st Class',     'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'B2', 'Description' => 'Baker 2nd Class',     'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'B3', 'Description' => 'Baker 3rd Class',     'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'C1', 'Description' => 'Charlie 1st Class',   'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'C2', 'Description' => 'Charlie 2nd Class',   'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'C3', 'Description' => 'Charlie 3rd Class',   'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'D1', 'Description' => 'Delta 1st Class',     'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'D2', 'Description' => 'Delta 2nd Class',     'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'D3', 'Description' => 'Delta 3rd Class',     'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'E1', 'Description' => 'Echo 1st Class',      'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'E2', 'Description' => 'Echo 2nd Class',      'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'E3', 'Description' => 'Echo 3rd Class',      'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'F1', 'Description' => 'Frank 1st Class',     'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'F2', 'Description' => 'Frank 2nd Class',     'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'F3', 'Description' => 'Frank 3rd Class',     'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'G1', 'Description' => 'George 1st Class',    'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'G2', 'Description' => 'George 2nd Class',    'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'G3', 'Description' => 'George 3rd Class',    'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'H1', 'Description' => 'Halo 1st Class',      'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'H2', 'Description' => 'Halo 2nd Class',      'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'H3', 'Description' => 'Halo 3rd Class',      'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'I1', 'Description' => 'India 1st Class',     'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'I2', 'Description' => 'India 2nd Class',     'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'I3', 'Description' => 'India 3rd Class',     'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'J1', 'Description' => 'Joker 1st Class',     'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'J2', 'Description' => 'Joker 2nd Class',     'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'J3', 'Description' => 'Joker 3rd Class',     'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'K1', 'Description' => 'Kilo 1st Class',      'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'K2', 'Description' => 'Kilo 2nd Class',      'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'K3', 'Description' => 'Kilo 3rd Class',      'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'L1', 'Description' => 'Lima 1st Class',      'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'L2', 'Description' => 'Lima 2nd Class',      'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
        DB::table('mailing_classes')->insert(['Mailing_Class_Code' => 'L3', 'Description' => 'Lima 3rd Class',      'created_by_id' => 3, 'last_editted_by_id' => 3, 'created_at' => '2019-09-03 00:00:00', 'updated_at' => '2019-09-03 00:00:00',]);
    }
}
