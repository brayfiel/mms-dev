<?php

/**
 * Create the Users table
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
 * Create and drop the Users table
 *
 * @category Database_Migration
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'users', function (Blueprint $table) {
                // Column definitions
                $table->bigIncrements('id');
                $table->bigInteger('surname_id')
                    ->unsigned()
                    ->nullable()
                    ->comment('Foreign key to surnames table');
                $table->string('first_name')
                    ->comment('First name of the user');
                $table->string('last_name')
                    ->comment('last name of the user');
                $table->bigInteger('suffix_id')
                    ->unsigned()
                    ->nullable()
                    ->comment('Foreign key to suffixes table');
                $table->integer('membership')
                    ->default(0)
                    ->comment('Controls access to Membership Module. 0 no access.');
                $table->integer('yizcor')
                    ->default(0)
                    ->comment('Controls access to Yizcor Module. 0 no access.');
                $table->integer('permanent_pew')
                    ->default(0)
                    ->comment(
                        'Controls access to Permanent Pew Module. '
                            . '0 means there is initially no access.'
                    );
                $table->integer('high_holidays')
                    ->default(0)
                    ->comment(
                        'Controls access to High Holiday Ticket Module. '
                            . '0 means there is initially no access.'
                    );
                $table->integer('calendar')
                    ->default(0)
                    ->comment('Controls access to Calendar Module. 0 no access.');
                $table->integer('maintenance')
                    ->default(0)
                    ->comment('Controls access to Maintenance Module. 0 no access.');
                $table->integer('is_active')
                    ->default(0)
                    ->comment('Determines if a user is active.  0 is inactive.');
                $table->bigInteger('mms_global_id')
                    ->unsigned()
                    ->nullable()
                    ->comment(
                        'Assignes a set of globals from mms_globals table to a '
                            . 'person.'
                    );
                $table->string('email')
                    ->unique()
                    ->comment('Email of the user');
                $table->timestamp('email_verified_at')
                    ->nullable();
                $table->string('password')
                    ->comment('Password of the user');
                $table->rememberToken();
                $table->bigInteger('created_by_id')
                    ->unsigned()
                    ->comment(
                        'Should be an id on the users table. '
                            . 'Not enforced by constraint.'
                    );
                $table->bigInteger('last_editted_by_id')
                    ->unsigned()
                    ->comment(
                        'Should be an id on the users table. Not enforced by '
                            . 'constraint.'
                    );
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
        Schema::dropIfExists('users');
    }
}
