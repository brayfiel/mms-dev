<?php

/**
 * Create the Member Names table
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
 * Create and drop the Member Names table
 *
 * @category Database_Migration
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT License
 * @link     tag in class comment
 */
class CreateMemberNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'member_names', function (Blueprint $table) {
                // column definitions
                $table->bigIncrements('id');
                $table->bigInteger('member_id')
                    ->unsigned()
                    ->comment('Pointer to the member table.');
                $table->boolean('membership_owner')
                    ->comment('Primary contact for this membership.');
                $table->bigInteger('surname_id')
                    ->unsigned()
                    ->comment('Pointer to the surname table.');
                $table->string('first_name')
                    ->comment('The first name of this member.');
                $table->string('last_name')
                    ->comment('The last name of this member.');
                $table->bigInteger('suffix_id')
                    ->unsigned()
                    ->comment('Pointer to the suffix table.');
                $table->char('sex', 1)
                    ->comment('Sex of member.');
                $table->boolean('mens_club')
                    ->comment('Is person a member of the men club?');
                $table->boolean('sisterhood')
                    ->comment('Is person a member of the sisterhood?');
                $table->boolean('hebrew_school')
                    ->comment('Is person in Hebrew school?');
                $table->boolean('sunday_school')
                    ->comment('Is person in Sunday school?');
                $table->bigInteger('vip_code_id')
                    ->unsigned()
                    ->comment('Pointer to VIP table.  Is person a VIP?');
                $table->string('email')
                    ->comment('Email of member.');
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
        Schema::dropIfExists('member_names');
    }
}
