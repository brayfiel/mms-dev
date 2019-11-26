<?php

/**
 * Create the constraints for the Member Addresses table
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
 * Apply and remove the constraints on the Member Addresses table
 *
 * @category Database_Migration
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class AddConstraintsToMemberAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'member_addresses', function (Blueprint $table) {
                // Constraints
                $table->foreign('member_id')
                    ->references('id')
                    ->on('members');
                $table->foreign('state_id')->references('id')->on('states');
                $table->foreign('zip_code_id')->references('id')->on('zip_codes');
                $table->foreign('mailing_class_id')
                    ->references('id')
                    ->on('mailing_classes');
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
            'member_addresses', function (Blueprint $table) {
                $table->dropForeign('member_addresses_member_id_foreign');
                $table->dropForeign('member_addresses_state_id_foreign');
                $table->dropForeign('member_addresses_zip_code_id_foreign');
                $table->dropForeign('member_addresses_mailing_class_id_foreign');
                $table->dropForeign('member_addresses_created_by_id_foreign');
                $table->dropForeign('member_addresses_last_editted_by_id_foreign');
            }
        );
    }
}
