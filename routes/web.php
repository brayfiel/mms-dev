<?php

/**
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * PHP version 7.3.9
 *
 * @category Routes
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */

Route::get(
    '/', function () {
        return view('welcome');
    }
);

Auth::routes();

Route::group(
    ['middleware'=>'web'],
    function () {
        Route::get('/calendar', 'MMS@calendarIndex');
        Route::get('/highholidaytickets', 'MMS@highHolidayTicketsIndex');
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/maintenance', 'MMS@maintenanceIndex');
        // =======================================================
        // BEGIN: V V V Routes for /maintenance/mailingclass V V V
        Route::get(
            '/maintenance/mailingclass/printall/{order}',
            'MailingClassController@printAll'
        )->name('mailingclass.printall');
        Route::get(
            '/maintenance/mailingclass/sortorder/{order}',
            'MailingClassController@setSortOrder'
        )->name('mailingclass.sortorder');
        Route::get(
            '/maintenance/mailingclass/setsearch/',
            'MailingClassController@setSearch'
        )->name('mailingclass.setSearch');
        Route::resource('/maintenance/mailingclass', 'MailingClassController');
        // END:   ^ ^ ^ Routes for /maintenance/mailingclass ^ ^ ^
        // =======================================================
        // BEGIN: V V V Routes for /maintenance/membershiptype V V V
        Route::get(
            '/maintenance/membershiptype/printall/{order}',
            'MembershipTypeController@printAll'
        )->name('membershiptype.printall');
        Route::get(
            '/maintenance/membershiptype/sortorder/{order}',
            'MembershipTypeController@setSortOrder'
        )->name('membershiptype.sortorder');
        Route::get(
            '/maintenance/membershiptype/setsearch/',
            'MembershipTypeController@setSearch'
        )->name('membershiptype.setSearch');
        Route::resource('/maintenance/membershiptype', 'MembershipTypeController');
        // END:   ^ ^ ^ Routes for /maintenance/membershiptype ^ ^ ^
        // =======================================================
        // BEGIN: V V V Routes for /maintenance/phonetype V V V
        Route::get(
            '/maintenance/phonetype/printall/{order}',
            'PhoneTypeController@printAll'
        )->name('phonetype.printall');
        Route::get(
            '/maintenance/phonetype/sortorder/{order}',
            'PhoneTypeController@setSortOrder'
        )->name('phonetype.sortorder');
        Route::get(
            '/maintenance/phonetype/setsearch/',
            'PhoneTypeController@setSearch'
        )->name('phonetype.setSearch');
        Route::resource('/maintenance/phonetype', 'PhoneTypeController');
        // END:   ^ ^ ^ Routes for /maintenance/phonetype ^ ^ ^
        // =======================================================
        // BEGIN: V V V Routes for /maintenance/membershipstatus V V V
        Route::get(
            '/maintenance/membershipstatus/printall/{order}',
            'MembershipStatusController@printAll'
        )->name('membershipstatus.printall');
        Route::get(
            '/maintenance/membershipstatus/sortorder/{order}',
            'MembershipStatusController@setSortOrder'
        )->name('membershipstatus.sortorder');
        Route::get(
            '/maintenance/membershipstatus/setsearch/',
            'MembershipStatusController@setSearch'
        )->name('membershipstatus.setSearch');
        Route::resource('/maintenance/membershipstatus', 'MembershipStatusController');
        // END:   ^ ^ ^ Routes for /maintenance/membershipstatus ^ ^ ^
        // =======================================================
        // BEGIN: V V V Routes for /maintenance/surname V V V
        Route::get(
            '/maintenance/surname/printall/{order}',
            'SurnameController@printAll'
        )->name('surname.printall');
        Route::get(
            '/maintenance/surname/sortorder/{order}',
            'SurnameController@setSortOrder'
        )->name('surname.sortorder');
        Route::get(
            '/maintenance/surname/setsearch/',
            'SurnameController@setSearch'
        )->name('surname.setSearch');
        Route::resource('/maintenance/surname', 'SurnameController');
        // END:   ^ ^ ^ Routes for /maintenance/surname ^ ^ ^
        // =======================================================
        // BEGIN: V V V Routes for /maintenance/suffix V V V
        Route::get(
            '/maintenance/suffix/printall/{order}',
            'SuffixController@printAll'
        )->name('suffix.printall');
        Route::get(
            '/maintenance/suffix/sortorder/{order}',
            'SuffixController@setSortOrder'
        )->name('suffix.sortorder');
        Route::get(
            '/maintenance/suffix/setsearch/',
            'SuffixController@setSearch'
        )->name('suffix.setSearch');
        Route::resource('/maintenance/suffix', 'SuffixController');
        // END:   ^ ^ ^ Routes for /maintenance/suffix ^ ^ ^
        // =======================================================
        // BEGIN: V V V Routes for /maintenance/vipcode V V V
        Route::get(
            '/maintenance/vipcode/printall/{order}',
            'VIPCodeController@printAll'
        )->name('vipcode.printall');
        Route::get(
            '/maintenance/vipcode/sortorder/{order}',
            'VIPCodeController@setSortOrder'
        )->name('vipcode.sortorder');
        Route::get(
            '/maintenance/vipcode/setsearch/',
            'VIPCodeController@setSearch'
        )->name('vipcode.setSearch');
        Route::resource('/maintenance/vipcode', 'VIPCodeController');
        // END:   ^ ^ ^ Routes for /maintenance/vipcode ^ ^ ^
        // =======================================================
        // BEGIN: V V V Routes for /maintenance/state V V V
        Route::get(
            '/maintenance/state/printall/{order}',
            'StateController@printAll'
        )->name('state.printall');
        Route::get(
            '/maintenance/state/sortorder/{order}',
            'StateController@setSortOrder'
        )->name('state.sortorder');
        Route::get(
            '/maintenance/state/setsearch/',
            'StateController@setSearch'
        )->name('state.setSearch');
        Route::resource('/maintenance/state', 'StateController');
        // END:   ^ ^ ^ Routes for /maintenance/state ^ ^ ^
        // =======================================================
        // BEGIN: V V V Routes for /maintenance/zipcode V V V
        // Route::get(
        //     '/maintenance/zipcode/printall/{order}',
        //     'ZipCodeController@printAll'
        // )->name('zipcode.printall');
        // Route::get(
        //     '/maintenance/zipcode/sortorder/{order}',
        //     'ZipCodeController@setSortOrder'
        // )->name('zipcode.sortorder');
        // Route::get(
        //     '/maintenance/zipcode/setsearch/',
        //     'ZipCodeController@setSearch'
        // )->name('zipcode.setSearch');
        // Route::resource('/maintenance/zipcode', 'ZipCodeController');
        // END:   ^ ^ ^ Routes for /maintenance/zipcode ^ ^ ^
        // =======================================================
        // BEGIN: V V V Routes for /maintenance/organization V V V
        Route::get(
            '/maintenance/organization/printall',
            'OrganizationController@printAll'
        )->name('organization.printall');
        Route::resource('/maintenance/organization', 'OrganizationController');
        // END:   ^ ^ ^ Routes for /maintenance/organization ^ ^ ^
        // =======================================================
        // BEGIN: V V V Routes for /maintenance/yahrzeit V V V
        Route::get(
            '/maintenance/yahrzeit/printall',
            'YahrzeitController@printAll'
        )->name('yahrzeit.printall');
        Route::resource('/maintenance/yahrzeit', 'YahrzeitController');
        // END:   ^ ^ ^ Routes for /maintenance/yahrzeit ^ ^ ^
        // =======================================================
        // BEGIN: V V V Routes for /maintenance/misc V V V
        Route::get(
            '/maintenance/misc/printall',
            'MiscController@printAll'
        )->name('misc.printall');
        Route::resource('/maintenance/misc', 'MiscController');
        // END:   ^ ^ ^ Routes for /maintenance/yahrzeit ^ ^ ^
        // =======================================================
        Route::get('/membership', 'MMS@membershipIndex');
        Route::get('/permanentpews', 'MMS@permanentPewIndex');
        Route::get('/yizcor', 'MMS@yizcorIndex');
        Route::get(
            '/inactive', function () {
                return view('inactive');
            }
        );
        Route::get(
            '/noaccess', function () {
                return view('noaccess');
            }
        );
    }
);
