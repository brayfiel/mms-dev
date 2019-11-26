<?php

/**
 * Create the constraints for the Member Phones table
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
 * Apply and remove the constraints on the Member Phones table
 *
 * @category Database_Migration
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class AddConstraintsToMemberPhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'member_phones', function (Blueprint $table) {
                // constraints
                $table->foreign('member_id')
                    ->references('id')
                    ->on('members');
                $table->foreign('phone_types_id')
                    ->references('id')
                    ->on('phone_types');
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
            'member_phones', function (Blueprint $table) {
                $table->dropForeign('member_phones_member_id_foreign');
                $table->dropForeign('member_phones_phone_types_id_foreign');
                $table->dropForeign('member_phones_created_by_id_foreign');
                $table->dropForeign('member_phones_last_editted_by_id_foreign');
            }
        );
    }
}
