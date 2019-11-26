<?php

/**
 * Model for the User table
 * PHP version 7.3.9
 *
 * @category Model
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Surname;
use App\Suffix;

/**
 * Attributes and methods for the Model for the User table
 *
 * @category Model
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'surname_id',
        'first_name',
        'last_name',
        'suffix_id',
        'membership',
        'yizcor',
        'permanent_pew',
        'high_holidays',
        'calendar',
        'maintenance',
        'is_active',
        'mms_global_id',
        'email',
        'created_by_id',
        'last_editted_by_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Lookup and return whether a user is active or not
     *
     * @return boolean
     */
    public function isActive()
    {
        if ($this->is_active == 1) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Lookup and return the user's full name prefix, first, last, suffix
     *
     * @return string
     */
    public function fullName()
    {
        $prefix = "{$this->surname->name}";
        $first  = "{$this->first_name}";
        $last   = "{$this->last_name}";
        $suffix = "{$this->suffix->name}";
        $full  = $prefix . " " . $first . " " . $last . " " . $suffix;
        // dd($full);
        return $full;
    }

    /**
     * Lookup and return whether a user has acces to at least one module
     *
     * @return boolean
     */
    public function hasAccess()
    {
        if ($this->membership == 0
            && $this->yizcor == 0
            && $this->permanent_pew == 0
            && $this->high_holidays == 0
            && $this->calendar == 0
            && $this->maintenance == 0
        ) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Lookup and return name Surname record based on the surname_id
     *
     * @return user record
     */
    public function surname()
    {
        return $this->belongsTo('App\Surname');
    }

    /**
     * Lookup and return name Suffix record based on the suffix_id
     *
     * @return user record
     */
    public function suffix()
    {
        return $this->belongsTo('App\Suffix');
    }

    /**
     * Lookup and return MMS Globals record based on the mms_global_id
     *
     * @return user record
     */
    public function mmsGlobal()
    {
        return $this->belongsTo('App\MmsGlobal');
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

    /**
     * Lookup and return Log records based on the created_by_id
     *
     * @return user record
     */
    public function logCreatedBy()
    {
        return $this->hasMany('App\Log', 'created_by_id');
    }

    /**
     * Lookup and return Log record based on the last_editted_by_id
     *
     * @return user record
     */
    public function logLastEdittedBy()
    {
        return $this->hasMany('App\Log', 'last_editted_by_id');
    }

    /**
     * Lookup and return Mailing Class record based on the created_by_id
     *
     * @return user record
     */
    public function mailingClassCreatedBy()
    {
        return $this->hasMany('App\MailingClass', 'created_by_id');
    }

    /**
     * Lookup and return Mailing Class record based on the last_editted_by_id
     *
     * @return user record
     */
    public function mailingClassLastEdittedBy()
    {
        return $this->hasMany('App\MailingClass', 'last_editted_by_id');
    }

    /**
     * Lookup and return Membership Types record based on the created_by_id
     *
     * @return user record
     */
    public function membershipTypesCreatedBy()
    {
        return $this->hasMany('App\MembershipType', 'created_by_id');
    }

    /**
     * Lookup and return Membership Types record based on the created_by_id
     *
     * @return user record
     */
    public function membershipTypesLastEdittedBy()
    {
        return $this->hasMany('App\MembershipType', 'last_editted_by_id');
    }

    /**
     * Lookup and return Phone Types record based on the created_by_id
     *
     * @return user record
     */
    public function phoneTypesCreatedBy()
    {
        return $this->hasMany('App\PhoneType', 'created_by_id');
    }

    /**
     * Lookup and return Membership Types record based on the created_by_id
     *
     * @return user record
     */
    public function phoneTypesLastEdittedBy()
    {
        return $this->hasMany('App\PhoneType', 'last_editted_by_id');
    }

    /**
     * Lookup and return Membership Status record based on the created_by_id
     *
     * @return user record
     */
    public function membershipStatusCreatedBy()
    {
        return $this->hasMany('App\MembershipStatus', 'created_by_id');
    }

    /**
     * Lookup and return Membership Status record based on the created_by_id
     *
     * @return user record
     */
    public function membershipStatusLastEdittedBy()
    {
        return $this->hasMany('App\MembershipStatus', 'last_editted_by_id');
    }

    /**
     * Lookup and return Surnames record based on the created_by_id
     *
     * @return user record
     */
    public function surnameCreatedBy()
    {
        return $this->hasMany('App\Surname', 'created_by_id');
    }

    /**
     * Lookup and return Surname record based on the created_by_id
     *
     * @return user record
     */
    public function surnameLastEdittedBy()
    {
        return $this->hasMany('App\Surname', 'last_editted_by_id');
    }

    /**
     * Lookup and return VIP Codes record based on the created_by_id
     *
     * @return user record
     */
    public function vipCodesCreatedBy()
    {
        return $this->hasMany('App\VipCodes', 'created_by_id');
    }

    /**
     * Lookup and return VIP Codes record based on the created_by_id
     *
     * @return user record
     */
    public function vipCodesLastEdittedBy()
    {
        return $this->hasMany('App\VipCodes', 'last_editted_by_id');
    }

    /**
     * Lookup and return Zip Codes record based on the created_by_id
     *
     * @return user record
     */
    public function zipCodesCreatedBy()
    {
        return $this->hasMany('App\ZipCode', 'created_by_id');
    }

    /**
     * Lookup and return Zip Codes record based on the created_by_id
     *
     * @return user record
     */
    public function zipCodesLastEdittedBy()
    {
        return $this->hasMany('App\ZipCode', 'last_editted_by_id');
    }

    /**
     * Lookup and return Suffix record based on the created_by_id
     *
     * @return user record
     */
    public function suffixCreatedBy()
    {
        return $this->hasMany('App\Suffix', 'created_by_id');
    }

    /**
     * Lookup and return Suffix record based on the created_by_id
     *
     * @return user record
     */
    public function suffixLastEdittedBy()
    {
        return $this->hasMany('App\Suffix', 'last_editted_by_id');
    }

    /**
     * Lookup and return State record based on the created_by_id
     *
     * @return user record
     */
    public function stateCreatedBy()
    {
        return $this->hasMany('App\State', 'created_by_id');
    }

    /**
     * Lookup and return Suffix record based on the created_by_id
     *
     * @return user record
     */
    public function stateLastEdittedBy()
    {
        return $this->hasMany('App\State', 'last_editted_by_id');
    }

    /**
     * Lookup and return MMS Global record based on the created_by_id
     *
     * @return user record
     */
    public function mmsGlobalCreatedBy()
    {
        return $this->hasMany('App\MmsGlobal', 'created_by_id');
    }

    /**
     * Lookup and return MMS Global record based on the created_by_id
     *
     * @return user record
     */
    public function mmsGlobalLastEdittedBy()
    {
        return $this->hasMany('App\MmsGlobal', 'last_editted_by_id');
    }
}
