<?php

/**
 * Model for the Member Telephones table
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
 * Attributes and methods for the Model for the Member Telephones table
 *
 * @category Model
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class MemberPhone extends Model
{
    protected $fillable = [
        'member_id',
        'phone_types_id',
        'phone_number',
        'phone_ext',
        'created_by_id',
        'last_editted_by_id',
    ];

    /**
     * Lookup and return Member record based on the member_id
     *
     * @return member record
     */
    public function member()
    {
        return $this->belongsTo('App\Member');
    }

    /**
     * Lookup and return Phone Types record based on the phone_types_id
     *
     * @return member record
     */
    public function phoneType()
    {
        return $this->belongsTo('App\PhoneType');
    }

    /**
     * Lookup and return User record based on the created_by_id
     *
     * @return user record
     */
    public function createdBy()
    {
        // return $this->belongsTo('App\User', 'created_by_id');
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
