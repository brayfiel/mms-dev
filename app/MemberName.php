<?php

/**
 * Model for the Member Names table
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
 * Attributes and methods for the Model for the Member Names table
 *
 * @category Model
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class MemberName extends Model
{
    protected $fillable = [
        'member_id',
        'membership_owner',
        'surname_id',
        'first_name',
        'last_name',
        'suffix_id',
        'sex',
        'mens_club',
        'sisterhood',
        'hebrew_school',
        'sunday_school',
        'vip_code_id',
        'Email',
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
     * Lookup and return Family Name Prefix (Surname) record based on the surname_id
     *
     * @return member record
     */
    public function surname()
    {
        return $this->belongsTo('App\Surname');
    }

    /**
     * Lookup and return Family Name Suffix record based on the suffix_id
     *
     * @return member record
     */
    public function suffix()
    {
        return $this->belongsTo('App\Suffix');
    }

    /**
     * Lookup and return VIP Classification record based on the vip_code_id
     *
     * @return member record
     */
    public function VIPCode()
    {
        return $this->belongsTo('App\VipCode');
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
