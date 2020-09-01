<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class GuestController extends Controller
{
    public function home()
    {
        $eventData = Event::all();
        return view('guest/home', ['eventData' => $eventData]);
    }

    public function log_store()
    {
        return view('guest/log_store');
    }

    public function log_user()
    {
        return view('guest/log_user');
    }

    public function regi_store()
    {
        return view('guest/regi_store');
    }

    public function regi_user()
    {
        return view('guest/regi_user');
    }
}
