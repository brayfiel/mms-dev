<?php

/**
 * Model for the Members table
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
 * Attributes and methods for the Model for the Members table
 *
 * @category Model
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class Member extends Model
{
    protected $fillable = [
        'membership_type_id',
        'membership_status_id',
        'perferred_mailing',
        'created_by_id',
        'last_editted_by_id',
    ];

    /**
     * Lookup and return Membership Type record based on the membership_type_id
     *
     * @return membershiptype record
     */
    public function membershipType()
    {
        return $this->belongsTo('App\MembershipType');
    }

    /**
     * Lookup and return Membership Status record based on the membership_status_id
     *
     * @return membershipstatus record
     */
    public function membershipStatus()
    {
        return $this->belongsTo('App\MembershipStatus');
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

