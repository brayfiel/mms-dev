<?php

/**
 * Seeding for the States table
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
 * Apply seeding for the States table
 *
 * @category Database_Seeding
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert(['state_abbrev' => 'AA', 'state_full' =>'AA',                             'state_full_alt' =>'Armed Forces America', 'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'AE', 'state_full' =>'AE',                             'state_full_alt' =>'Armed Forces Africa',  'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'AK', 'state_full' =>'Alaska',                         'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'AL', 'state_full' =>'Alabama',                        'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'AP', 'state_full' =>'AP',                             'state_full_alt' =>'Armed Forces Pacific', 'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'AR', 'state_full' =>'Arkansas',                       'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'AS', 'state_full' =>'American Samoa',                 'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'AZ', 'state_full' =>'Arizona',                        'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'CA', 'state_full' =>'California',                     'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'CO', 'state_full' =>'Colorado',                       'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'CT', 'state_full' =>'Connecticut',                    'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'DC', 'state_full' =>'D.C.',                           'state_full_alt' =>'District of Columbia', 'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'DE', 'state_full' =>'Delaware',                       'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'FL', 'state_full' =>'Florida',                        'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'FM', 'state_full' =>'Federated States of Micronesia', 'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'GA', 'state_full' =>'Georgia',                        'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'GU', 'state_full' =>'Guam',                           'state_full_alt' =>'Gu',                   'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'HI', 'state_full' =>'Hawaii',                         'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'IA', 'state_full' =>'Iowa',                           'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'ID', 'state_full' =>'Idaho',                          'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'IL', 'state_full' =>'Illinois',                       'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'IN', 'state_full' =>'Indiana',                        'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'KS', 'state_full' =>'Kansas',                         'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'KY', 'state_full' =>'Kentucky',                       'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'LA', 'state_full' =>'Louisiana',                      'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'MA', 'state_full' =>'Massachusetts',                  'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'MD', 'state_full' =>'Maryland',                       'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'ME', 'state_full' =>'Maine',                          'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'MH', 'state_full' =>'Marshall Islands',               'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'MI', 'state_full' =>'Michigan',                       'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'MN', 'state_full' =>'Minnesota',                      'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'MO', 'state_full' =>'Missouri',                       'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'MP', 'state_full' =>'Northern Mariana Islands',       'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'MS', 'state_full' =>'Mississippi',                    'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'MT', 'state_full' =>'Montana',                        'state_full_alt' =>'',                     'created_by_id' => 2, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'NC', 'state_full' =>'North Carolina',                 'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'ND', 'state_full' =>'North Dakota',                   'state_full_alt' =>'',                     'created_by_id' => 2, 'Last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'NE', 'state_full' =>'Nebraska',                       'state_full_alt' =>'',                     'created_by_id' => 2, 'Last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'NH', 'state_full' =>'New Hampshire',                  'state_full_alt' =>'',                     'created_by_id' => 2, 'Last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'NJ', 'state_full' =>'New Jersey',                     'state_full_alt' =>'',                     'created_by_id' => 2, 'Last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'NM', 'state_full' =>'New Mexico',                     'state_full_alt' =>'',                     'created_by_id' => 2, 'Last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'NV', 'state_full' =>'Nevada',                         'state_full_alt' =>'',                     'created_by_id' => 2, 'Last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'NY', 'state_full' =>'New York',                       'state_full_alt' =>'',                     'created_by_id' => 2, 'Last_editted_by_id' => 3, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'OH', 'state_full' =>'Ohio',                           'state_full_alt' =>'',                     'created_by_id' => 3, 'Last_editted_by_id' => 2, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'OK', 'state_full' =>'Oklahoma',                       'state_full_alt' =>'',                     'created_by_id' => 3, 'Last_editted_by_id' => 2, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'OR', 'state_full' =>'Oregon',                         'state_full_alt' =>'',                     'created_by_id' => 3, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'PA', 'state_full' =>'Pennslyvania',                   'state_full_alt' =>'',                     'created_by_id' => 3, 'Last_editted_by_id' => 2, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'PR', 'state_full' =>'Puerto Rico',                    'state_full_alt' =>'',                     'created_by_id' => 3, 'Last_editted_by_id' => 2, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'PW', 'state_full' =>'Palau',                          'state_full_alt' =>'',                     'created_by_id' => 3, 'Last_editted_by_id' => 2, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'RI', 'state_full' =>'Rhode Island',                   'state_full_alt' =>'',                     'created_by_id' => 3, 'Last_editted_by_id' => 2, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'SC', 'state_full' =>'South Carolina',                 'state_full_alt' =>'',                     'created_by_id' => 3, 'Last_editted_by_id' => 2, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'SD', 'state_full' =>'South Dakota',                   'state_full_alt' =>'',                     'created_by_id' => 3, 'Last_editted_by_id' => 2, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'TN', 'state_full' =>'Tennessee',                      'state_full_alt' =>'',                     'created_by_id' => 3, 'Last_editted_by_id' => 2, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'TX', 'state_full' =>'Texas',                          'state_full_alt' =>'',                     'created_by_id' => 3, 'Last_editted_by_id' => 2, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'UT', 'state_full' =>'Utah',                           'state_full_alt' =>'',                     'created_by_id' => 3, 'Last_editted_by_id' => 2, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'VA', 'state_full' =>'Virginia',                       'state_full_alt' =>'',                     'created_by_id' => 3, 'Last_editted_by_id' => 2, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'VI', 'state_full' =>'Virgin Islands',                 'state_full_alt' =>'',                     'created_by_id' => 3, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'VT', 'state_full' =>'Vermont',                        'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'WA', 'state_full' =>'Washington',                     'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'WI', 'state_full' =>'Wisconsin',                      'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'WV', 'state_full' =>'West Virginia',                  'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
        DB::table('states')->insert(['state_abbrev' => 'WY', 'state_full' =>'Wyoming',                        'state_full_alt' =>'',                     'created_by_id' => 1, 'Last_editted_by_id' => 1, 'created_at' => '2019-09-01 00:00:00', 'updated_at' => '2019-09-01 00:00:00',]);
    }
}
