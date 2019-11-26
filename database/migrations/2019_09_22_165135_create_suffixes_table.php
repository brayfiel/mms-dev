<?php

/**
 * Create the Name suffixes table
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
 * Create and drop the Name Suffixes table
 *
 * @category Database_Migration
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT License
 * @link     tag in class comment
 */
class CreateSuffixesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'suffixes', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('description')
                    ->unique()
                    ->comment('Family name suffix (Esq., DDS, etc.)');
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
        Schema::dropIfExists('suffixes');
    }
}
