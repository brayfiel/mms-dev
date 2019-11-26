<?php
/**
 * Application controller to redirect to the individual module controllers
 * PHP version 7.3+
 *
 * @category Redirector
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  To be determined
 * @link     To be determined
 */
namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;

/**
 * Controller class to redirect to the individual module controllers
 * PHP version 7.3+
 *
 * @category Redirector
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  To be determined
 * @link     To be determined
 */
class MMS extends Controller
{
    /**
     * Redirect to the Membership controller.
     *
     * @return \Illuminate\Http\Response
     */
    public function membershipIndex()
    {
        return view('membership');
    }

    /**
     * Redirect to the Yizcor controller.
     *
     * @return \Illuminate\Http\Response
     */
    public function yizcorIndex()
    {
        return view('yizcor');
    }

    /**
     * Redirect to the Permanent Pew controller.
     *
     * @return \Illuminate\Http\Response
     */
    public function permanentPewIndex()
    {
        return view('permanent_pews');
    }

    /**
     * Redirect to the High Holiday Tickets controller.
     *
     * @return \Illuminate\Http\Response
     */
    public function highHolidayTicketsIndex()
    {
        return view('high_holiday_tickets');
    }

    /**
     * Redirect to the Calendar controller.
     *
     * @return \Illuminate\Http\Response
     */
    public function calendarIndex()
    {
        return view('calendar');
    }

    /**
     * Redirect to the Maintenance controller.
     *
     * @return \Illuminate\Http\Response
     */
    public function maintenanceIndex()
    {
        return redirect('/maintenance/mailingclass');
    }
}
