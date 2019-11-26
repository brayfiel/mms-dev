<?php

/**
 * Create the constraints for the Suffixes table
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
 * Apply and remove the constraints on the Suffixes table
 *
 * @category Database_Migration
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class AddConstraintsToSuffixesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'suffixes', function (Blueprint $table) {
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
            'suffixes', function (Blueprint $table) {
                $table->dropForeign('suffixes_created_by_id_foreign');
                $table->dropForeign('suffixes_last_editted_by_id_foreign');
            }
        );
    }
}
