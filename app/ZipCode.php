<?php

/**
 * Model for the Zip Code table
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
 * Attributes and methods for the Model for the Zip Code table
 *
 * @category Model
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class ZipCode extends Model
{
    protected $fillable = [
        'zip_code',
        'latitude',
        'longitude',
        'city',
        'state',
        'county',
        'type',
        'preferred',
        'world_region',
        'country',
        'location_text',
        'location',
        'population',
        'housing_units',
        'income',
        'land_area',
        'water_area',
        'decommisioned',
        'military_restriction_codes',
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

    // /**
    //  * Lookup and return MMS Global record based on the id
    //  *
    //  * @return user record
    //  */
    // public function mmsGlobals()
    // {
    //     return $this->hasMany('App\MmsGlobal');
    // }
}

