<?php

/**
 * Model for the MMS Globals table
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
 * Attributes and methods for the Model for the MMS Globals table
 *
 * @category Model
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class MmsGlobal extends Model
{
    protected $fillable = [
        'app_name',
        'app_name_abbrev',
        'org_name',
        'org_name_abbrev',
        'address_1',
        'address_2',
        'city',
        'state_id',
        'zip_code',
        'zip_code_ext',
        'telephone',
        'email',
        'yahrzeit_last_printed_start',
        'yahrzeit_last_printed_end',
        'yahrzeit_service_contact',
        'yahrzeit_service_contact_telephone',
        'yahrzeit_service_contact_email',
        'yahrzeit_lead_time',
        'permanent_pew_year',
        'created_by_id',
        'last_editted_by_id',
    ];

    /**
     * Lookup and return State record based on the state_id
     *
     * @return state record
     */
    public function state()
    {
        return $this->belongsTo('App\State');
    }

    // /**
    //  * Lookup and return Zip Code record based on the zip_code_id
    //  *
    //  * @return zipcode record
    //  */
    // public function zipCode()
    // {
    //     return $this->belongsTo('App\ZipCode');
    // }

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

    /**
     * Lookup and return User record based on the id
     *
     * @return user record
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }

}
