<?php

namespace Laraveldaily\Timezones;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TimezonesController extends Controller
{
    public function index($timezone = NULL)
    {
        $time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        $time = $time->format('Y-m-d H:i:s');
        return view('timezones::time', compact('time'));
    }

    public static function getTime()
    {
        return 'time';
    }
}
