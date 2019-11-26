<?php

/**
 * Create the seed data for the MMS application
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
 * Apply the seed data for the MMS application
 *
 * @category Database_Seeding
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // Disable foreign key constraints
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        // Delete all records across all application tables
        DB::table('logs')->truncate();
        DB::table('mailing_classes')->truncate();
        DB::table('members')->truncate();
        DB::table('membership_statuses')->truncate();
        DB::table('membership_types')->truncate();
        DB::table('member_addresses')->truncate();
        DB::table('member_names')->truncate();
        DB::table('member_phones')->truncate();
        DB::table('mms_globals')->truncate();
        DB::table('password_resets')->truncate();
        DB::table('phone_types')->truncate();
        DB::table('states')->truncate();
        DB::table('suffixes')->truncate();
        DB::table('surnames')->truncate();
        DB::table('users')->truncate();
        DB::table('vip_codes')->truncate();
        DB::table('zip_codes')->truncate();
        DB::table('Members')->truncate();
        DB::table('Member_Addresses')->truncate();
        DB::table('Member_Names')->truncate();
        DB::table('Member_Phones')->truncate();

        // Load initial data
        $this->call(MailingClassesTableSeeder::class);
        $this->call(MemebershipStatusesTableSeeder::class);
        $this->call(MemebershipTypesTableSeeder::class);
        $this->call(MMSGlobalsTableSeeder::class);
        $this->call(PhoneTypesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(SuffixesTableSeeder::class);
        $this->call(SurnamesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(VIPCodesTableSeeder::class);
        $this->call(LogsTableSeeder::class);
        $this->call(ZipCodesTableSeeder::class);
        $this->call(MemberTableSeeder::class);
        $this->call(MemberAddressTableSeeder::class);
        $this->call(MemberNameTableSeeder::class);
        $this->call(MemberPhoneTableSeeder::class);

        // --------------------------------------------------------------------
        // --------------------------------------------------------------------
        // Alternatively, to seed the zip codes tabel run: mms_dev_restore.ps1
        // --------------------------------------------------------------------
        // --------------------------------------------------------------------

    }
}
