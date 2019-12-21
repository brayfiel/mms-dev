<?php

/**
 * Create the Member Telephone Numbers table
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
 * Create and drop the Member Telephone Numbers table
 *
 * @category Database_Migration
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT License
 * @link     tag in class comment
 */
class CreateMemberPhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'member_phones', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('member_id')
                    ->unsigned()
                    ->comment('Pointer to the members table.');
                $table->bigInteger('phone_types_id')
                    ->nullable()
                    ->unsigned()
                    ->comment('Pointer to the phone_types table.');
                $table->string('phone_number')
                    ->nullable()
                    ->comment('Phone number of member.');
                $table->string('phone_ext')
                    ->nullable()
                    ->comment('Extension for the phone number.');
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
        Schema::dropIfExists('member_phones');
    }
}
