<?php

/**
 * Create the constraints for the Member Names table
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
 * Apply and remove the constraints on the Member Names table
 *
 * @category Database_Migration
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class AddConstraintsToMemberNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'member_names', function (Blueprint $table) {
                // constraints
                $table->foreign('member_id')
                    ->references('id')
                    ->on('members');
                $table->foreign('surname_id')->references('id')->on('surnames');
                $table->foreign('suffix_id')->references('id')->on('suffixes');
                $table->foreign('vip_code_id')->references('id')->on('vip_codes');
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
            'member_names', function (Blueprint $table) {
                $table->dropForeign('member_names_member_id_foreign');
                $table->dropForeign('member_names_surname_id_foreign');
                $table->dropForeign('member_names_suffix_id_foreign');
                $table->dropForeign('member_names_vip_code_id_foreign');
                $table->dropForeign('member_names_created_by_id_foreign');
                $table->dropForeign('member_names_last_editted_by_id_foreign');
            }
        );
    }
}
