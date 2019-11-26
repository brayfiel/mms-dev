<?php

/**
 * Create the constraints for the Users table
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
 * Apply and remove the constraints on the Users table
 *
 * @category Database_Migration
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class AddConstraintsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'users', function (Blueprint $table) {
                $table->foreign('surname_id')->references('id')->on('surnames');
                $table->foreign('suffix_id')->references('id')->on('suffixes');
                $table->foreign('mms_global_id')
                    ->references('id')
                    ->on('mms_globals');
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
        Schema::table(
            'users', function (Blueprint $table) {
                $table->dropForeign('users_surname_id_foreign');
                $table->dropForeign('users_suffix_id_foreign');
                $table->dropForeign('users_mms_global_id_foreign');
            }
        );
    }
}

