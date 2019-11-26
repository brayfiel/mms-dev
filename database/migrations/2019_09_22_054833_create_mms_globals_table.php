<?php

/**
 * Create the User/Application Globals table
 * PHP version 7.3.9
 *
 * @category Database_Migration
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Create and drop the User/Application Globals table
 *
 * @category Database_Migration
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT License
 * @link     tag in class comment
 */
class CreateMmsGlobalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'mms_globals', function (Blueprint $table) {
                // Column Definitions
                $table->bigIncrements('id');
                $table->string('app_name')
                    ->unique()
                    ->comment('User customized name of the application.');
                $table->string('org_name')
                    ->comment('Organization name.');
                $table->string('org_name_abbrev')
                    ->comment('Abbreviation of the organization name.');
                $table->string('address_1')
                    ->comment('Address line 1 of the organization address.');
                $table->string('address_2')
                    ->comment('Address line 2 of the organization address.');
                $table->string('city')
                    ->comment('City of the organization address.');
                $table->bigInteger('state_id')
                    ->unsigned()
                    ->nullable()
                    ->comment(
                        'Pointer to the state code of the organization in the state '
                            . 'table.'
                    );
                $table->bigInteger('zip_code_id')
                    ->unsigned()
                    ->nullable()
                    ->comment(
                        'Pointer to the zip code of the organization in the zip '
                            . 'code table.'
                    );
                $table->string('zip_code_ext')
                    ->comment('Zip Code extension of the organization.');
                $table->string('telephone')
                    ->comment('Tel. number of the organization.');
                $table->string('email')
                    ->comment('Email address of the organization.');
                $table->date('yahrzeit_last_printed_start')
                    ->comment(
                        'Start of date range for the last print of Yahrzeit leters.'
                    );
                $table->date('yahrzeit_last_printed_end')
                    ->comment(
                        'End of date range for the last print of Yahrzeit leters.'
                    );
                $table->string('yahrzeit_service_contact')
                    ->comment('Who to contact to arrange a yahrzeit minyan.');
                $table->string('yahrzeit_service_contact_telephone')
                    ->comment(
                        'Tel. number of who to contact to arrange a yahrzeit minyan.'
                    );
                $table->string('yahrzeit_service_contact_email')
                    ->comment(
                        'Email of who to contact to arrange a yahrzeit minyan.'
                    );
                $table->integer('yahrzeit_lead_time')
                    ->default(0)
                    ->comment('Lead time for generating Yahrzeit letters.');
                $table->integer('permanent_pew_year')
                    ->default(0)
                    ->comment(
                        'Year for which you are processing permanent pew seating '
                            . 'and high holiday tickets.'
                    );
                $table->bigInteger('created_by_id')
                    ->unsigned()
                    ->comment('Should be an id on the users table.');
                $table->bigInteger('last_editted_by_id')
                    ->unsigned()
                    ->comment('Should be an id on the users table.');
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mms_globals');
    }
}
