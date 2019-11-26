<?php

/**
 * Create the constraints for the States table
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
 * Apply and remove the constraints on the States table
 *
 * @category Database_Migration
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class AddConstraintsToStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'states', function (Blueprint $table) {
                // constraints
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
            'states', function (Blueprint $table) {
                $table->dropForeign('states_created_by_id_foreign');
                $table->dropForeign('states_last_editted_by_id_foreign');
            }
        );
    }
}
