<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckInController extends Controller
{
    public function checkin()
    {
    	return view('checkin');
    }
}
