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
class AddConstraintsToMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'members', function (Blueprint $table) {
                $table->foreign('membership_type_id')
                    ->references('id')
                    ->on('membership_types');
                $table->foreign('membership_status_id')
                    ->references('id')
                    ->on('membership_statuses');
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
            'members', function (Blueprint $table) {
                $table->dropForeign('members_membership_type_id_foreign');
                $table->dropForeign('members_membership_status_id_foreign');
                $table->dropForeign('members_created_by_id_foreign');
                $table->dropForeign('members_last_editted_by_id_foreign');
            }
        );
    }
}
