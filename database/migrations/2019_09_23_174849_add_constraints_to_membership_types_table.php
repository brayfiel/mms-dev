<?php

/**
 * Create the constraints for the Membership Types table
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
 * Apply and remove the constraints on the Membership Types table
 *
 * @category Database_Migration
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class AddConstraintsToMembershipTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'membership_types', function (Blueprint $table) {
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
            'membership_types', function (Blueprint $table) {
                $table->dropForeign('membership_types_created_by_id_foreign');
                $table->dropForeign('membership_types_last_editted_by_id_foreign');
            }
        );
    }
}
