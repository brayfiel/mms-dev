<?php

/**
 * Seeding for the Logs table
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
 * Apply seeding for the Logs table
 *
 * @category Database_Seeding
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class LogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('logs')->insert(['log_name' => 'Alpha', 'log_date' => '2019-08-10 20:20:46', 'log_line_no' => 1, 'log_statement' => 'Alpha 1', 'created_by_id' => 1, 'last_editted_by_id' => 1,]);
        DB::table('logs')->insert(['log_name' => 'Alpha', 'log_date' => '2019-08-10 20:20:46', 'log_line_no' => 2, 'log_statement' => 'Alpha 2', 'created_by_id' => 1, 'last_editted_by_id' => 1,]);
        DB::table('logs')->insert(['log_name' => 'Alpha', 'log_date' => '2019-08-10 20:20:46', 'log_line_no' => 3, 'log_statement' => 'Alpha 3', 'created_by_id' => 1, 'last_editted_by_id' => 1,]);
        DB::table('logs')->insert(['log_name' => 'Beta',  'log_date' => '2019-08-11 20:20:46', 'log_line_no' => 1, 'log_statement' => 'Beta 1',  'created_by_id' => 2, 'last_editted_by_id' => 2,]);
        DB::table('logs')->insert(['log_name' => 'Beta',  'log_date' => '2019-08-11 20:20:46', 'log_line_no' => 2, 'log_statement' => 'Beta 2',  'created_by_id' => 2, 'last_editted_by_id' => 2,]);
        DB::table('logs')->insert(['log_name' => 'Beta',  'log_date' => '2019-08-11 20:20:46', 'log_line_no' => 3, 'log_statement' => 'Beta 3',  'created_by_id' => 2, 'last_editted_by_id' => 2,]);
        DB::table('logs')->insert(['log_name' => 'Gamma', 'log_date' => '2019-08-12 20:20:46', 'log_line_no' => 1, 'log_statement' => 'Gamma 1', 'created_by_id' => 3, 'last_editted_by_id' => 3,]);
        DB::table('logs')->insert(['log_name' => 'Gamma', 'log_date' => '2019-08-12 20:20:46', 'log_line_no' => 2, 'log_statement' => 'Gamma 2', 'created_by_id' => 3, 'last_editted_by_id' => 3,]);
        DB::table('logs')->insert(['log_name' => 'Gamma', 'log_date' => '2019-08-12 20:20:46', 'log_line_no' => 3, 'log_statement' => 'Gamma 3', 'created_by_id' => 3, 'last_editted_by_id' => 3,]);
        DB::table('logs')->insert(['log_name' => 'Delta', 'log_date' => '2019-08-13 20:20:46', 'log_line_no' => 1, 'log_statement' => 'Delta 1', 'created_by_id' => 1, 'last_editted_by_id' => 1,]);
        DB::table('logs')->insert(['log_name' => 'Delta', 'log_date' => '2019-08-13 20:20:46', 'log_line_no' => 2, 'log_statement' => 'Delta 2', 'created_by_id' => 1, 'last_editted_by_id' => 1,]);
        DB::table('logs')->insert(['log_name' => 'Delta', 'log_date' => '2019-08-13 20:20:46', 'log_line_no' => 3, 'log_statement' => 'Delta 3', 'created_by_id' => 1, 'last_editted_by_id' => 1,]);
    }
}

