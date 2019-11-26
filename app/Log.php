<?php

/**
 * Model for the Users table
 * PHP version 7.3.9
 *
 * @category Model
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Attributes and methods for the Model for the Users table
 *
 * @category Model
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class Log extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'log_name',
        'log_date',
        'log_line_no',
        'log_statement',
        'created_by_id',
        'last_editted_by_id',
    ];

    /**
     * Lookup and return User record based on the created_by_id
     *
     * @return user record
     */
    public function createdBy()
    {
        return $this->belongsTo('App\User', 'created_by_id');
    }

    /**
     * Lookup and return User record based on the last_editted_by_id
     *
     * @return user record
     */
    public function lastEdittedBy()
    {
        return $this->belongsTo('App\User', 'last_editted_by_id');
    }
}

