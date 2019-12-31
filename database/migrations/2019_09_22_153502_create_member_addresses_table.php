<?php

/**
 * Create the Member Addresses table
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
 * Create and drop the Member Addresses table
 *
 * @category Database_Migration
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT License
 * @link     tag in class comment
 */
class CreateMemberAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'member_addresses', function (Blueprint $table) {
                // Column Definitions
                $table->bigIncrements('id');
                $table->bigInteger('member_id')
                    ->unsigned()
                    ->comment('Pointer to the member table.');
                $table->boolean('primary')
                    ->nullable()
                    ->comment('Determines primary residence to send USPS mail to.');
                $table->string('street1')
                    ->nullable()
                    ->comment('Address line 1.');
                $table->string('street2')
                    ->nullable()
                    ->comment('Address line 2.');
                $table->string('city')
                    ->nullable()
                    ->comment('City portion of address');
                $table->bigInteger('state_id')
                    ->unsigned()
                    ->nullable()
                    ->comment('Pointer to state table.');
                $table->string('zip_code')
                    ->nullable()
                    ->comment('Member address zip code.');
                $table->string('zip_code_ext')
                    ->nullable()
                    ->comment('Member address zip code extension.');
                $table->bigInteger('mailing_class_id')
                    ->unsigned()
                    ->nullable()
                    ->comment('Pointer to mailing class table.');
                $table->string('LCLASS')
                    ->nullable()
                    ->comment('No longer used.  Expecting to decommission.');
                $table->string('LSACK')
                    ->nullable()
                    ->comment('No longer used.  Expecting to decommission.');
                $table->string('LHDR')
                    ->nullable()
                    ->comment('No longer used.  Expecting to decommission.');
                $table->string('LIC')
                    ->nullable()
                    ->comment('No longer used.  Expecting to decommission.');
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
        Schema::dropIfExists('member_addresses');
    }
}
