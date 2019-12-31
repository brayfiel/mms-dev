<?php

/**
 * Seeding for the MMS Globals table
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
 * Apply seeding for the MMS Globals table
 *
 * @category Database_Seeding
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class MMSGlobalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mms_globals')->insert(
            [
                'app_name' => 'Member Management Services',
                'app_name_abbrev' => 'MMS',
                'org_name' => 'To Be Entered',
                'org_name_abbrev' => 'To Be Entered',
                // 'address_1' => '254-14 Union Turnpike',
                // 'address_2' => '',
                // 'city' => 'FLORAL PARK',
                // 'state_id' => 1,
                // 'zip_code' => '11004',
                // 'zip_code_ext' => '1111',
                // 'telephone' => '7183439001',
                // 'email' => 'bellerosejc@aol.com',
                // 'yahrzeit_last_printed_start' => '2015-06-03',
                // 'yahrzeit_last_printed_end' => '2015-06-09',
                // 'yahrzeit_service_contact' => 'Diane Hanson',
                // 'yahrzeit_service_contact_telephone' => '7183439002',
                // 'yahrzeit_service_contact_email' => 'bellerosejc@aol.com',
                // 'yahrzeit_lead_time' => 60,
                // 'permanent_pew_year' => 2015,
                'created_by_id' => 1,
                'last_editted_by_id' => 1,
                'created_at' => '2019-09-01 00:00:00',
                'updated_at' => '2019-09-01 00:00:00',
            ]
        );
        // DB::table('mms_globals')->insert(
        //     [
        //         'app_name' => "Men's Club Member Management Services",
        //         'app_name_abbrev' => 'MCMMS',
        //         'org_name' => "Men's Club Bellerose Jewish Center",
        //         'org_name_abbrev' => 'MC-BJC',
        //         'address_1' => '254-14 Union Turnpike',
        //         'address_2' => '',
        //         'city' => 'FLORAL PARK',
        //         'state_id' => 1,
        //         'zip_code' => '11050',
        //         'zip_code_ext' => '1111',
        //         'telephone' => '7183439001',
        //         'email' => 'bellerosejc@aol.com',
        //         'yahrzeit_last_printed_start' => '2015-06-03',
        //         'yahrzeit_last_printed_end' => '2015-06-09',
        //         'yahrzeit_service_contact' => 'Diane Hanson',
        //         'yahrzeit_service_contact_telephone' => '7183439002',
        //         'yahrzeit_service_contact_email' => 'bellerosejc@aol.com',
        //         'yahrzeit_lead_time' => 60,
        //         'permanent_pew_year' => 2015,
        //         'created_by_id' => 2,
        //         'last_editted_by_id' => 2,
        //         'created_at' => '2019-09-02 00:00:00',
        //         'updated_at' => '2019-09-02 00:00:00',
        //     ]
        // );
        // DB::table('mms_globals')->insert(
        //     [
        //         'app_name' => 'Sisterhood Member Management Services',
        //         'app_name_abbrev' => 'SMMS',
        //         'org_name' => 'Sisterhood Bellerose Jewish Center',
        //         'org_name_abbrev' => 'SH-BJC',
        //         'address_1' => '254-14 Union Turnpike',
        //         'address_2' => '',
        //         'city' => 'FLORAL PARK',
        //         'state_id' => 1,
        //         'zip_code' => '11575',
        //         'zip_code_ext' => '1111',
        //         'telephone' => '7183439001',
        //         'email' => 'bellerosejc@aol.com',
        //         'yahrzeit_last_printed_start' => '2015-06-03',
        //         'yahrzeit_last_printed_end' => '2015-06-09',
        //         'yahrzeit_service_contact' => 'Diane Hanson',
        //         'yahrzeit_service_contact_telephone' => '7183439002',
        //         'yahrzeit_service_contact_email' => 'bellerosejc@aol.com',
        //         'yahrzeit_lead_time' => 60,
        //         'permanent_pew_year' => 2015,
        //         'created_by_id' => 3,
        //         'last_editted_by_id' => 3,
        //         'created_at' => '2019-09-03 00:00:00',
        //         'updated_at' => '2019-09-03 00:00:00',
        //     ]
        // );
    }
}
