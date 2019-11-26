<?php

/**
 * Model for the Member Addresses table
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
 * Attributes and methods for the Model for the Member Addresses table
 *
 * @category Model
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class MemberAddress extends Model
{
    protected $fillable = [
        'member_id',
        'primary',
        'street1',
        'street2',
        'city',
        'state_id',
        'zip_code_id',
        'mailing_class_id',
        'LCLASS',
        'LSACK',
        'LHDR',
        'LIC',
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
     * Lookup and return State record based on the state_id
     *
     * @return state record
     */
    public function state()
    {
        return $this->belongsTo('App\State');
    }

    /**
     * Lookup and return Zip Code record based on the zip_code_id
     *
     * @return zipcode record
     */
    public function zipCode()
    {
        return $this->belongsTo('App\ZipCode');
    }

    /**
     * Lookup and return Mailing Class record based on the mailing_class_id
     *
     * @return mailingclass record
     */
    public function mailingClass()
    {
        return $this->belongsTo('App\MailingClass');
    }

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

