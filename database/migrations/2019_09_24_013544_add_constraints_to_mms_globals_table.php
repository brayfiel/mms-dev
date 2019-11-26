<?php

/**
 * Create the constraints for the Globals table
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
 * Apply and remove the constraints on the Globals table
 *
 * @category Database_Migration
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class AddConstraintsToMmsGlobalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'mms_globals', function (Blueprint $table) {
                $table->foreign('state_id')->references('id')->on('states');
                $table->foreign('zip_code_id')->references('id')->on('zip_codes');
                $table->foreign('created_by_id')->references('id')->on('users');
                $table->foreign('last_editted_by_id')->references('id')->on('users');
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
            'mms_globals', function (Blueprint $table) {
                $table->dropForeign('mms_globals_state_id_foreign');
                $table->dropForeign('mms_globals_zip_code_id_foreign');
                $table->dropForeign('mms_globals_created_by_id_foreign');
                $table->dropForeign('mms_globals_last_editted_by_id_foreign');
            }
        );
    }
}
