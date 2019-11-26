<?php

/**
 * Create the Zip Codes table
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
 * Create and drop the Vip Codes table
 *
 * @category Database_Migration
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT License
 * @link     tag in class comment
 */
class CreateZipCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'zip_codes', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('zip_code')
                    ->comment('Individual USPS zip code.');
                $table->string('latitude')
                    ->comment('Latitude of the area covered by the zip code.');
                $table->string('longitude')
                    ->comment('Longitude of the area covered by the zip code.');
                $table->string('city')
                    ->comment('City in which the zip code is located.');
                $table->string('state')
                    ->comment('State in which the zip code is located.');
                $table->string('county')
                    ->comment('County in which the zip code is located.');
                $table->string('type')
                    ->comment('Type of zip code (standard, military, etc.');
                $table->string('preferred')
                    ->comment(
                        'If there are multiple locations are covered by the '
                        . 'same zip code, this is the perferred location to use. '
                    );
                $table->string('world_region')
                    ->comment('North America, Europe, etc.');
                $table->string('country')
                    ->comment('Country covered by the zip code.');
                $table->string('location_text')
                    ->comment('Country covered by the zip code.');
                $table->string('location')
                    ->comment('If in the U.S. City, State of the Zip Code.');
                $table->string('population')
                    ->comment('Est. population in the Zip Code area.');
                $table->string('housing_units')
                    ->comment('Est. number of housing units in the Zip Code area.');
                $table->string('income')
                    ->comment('Est. average income in the Zip Code area.');
                $table->string('land_area')
                    ->comment('Est. square land area covered by the Zip Code area.');
                $table->string('water_area')
                    ->comment(
                        'Est. square water area covered by the Zip Code area.'
                    );
                $table->string('decommisioned')
                    ->comment(
                        'Whether or not the zip code haw been decommissioned.'
                    );
                $table->string('military_restriction_codes')
                    ->comment('Military restrictions applied to a Zip Code area.');
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
        Schema::dropIfExists('zip_codes');
    }
}
