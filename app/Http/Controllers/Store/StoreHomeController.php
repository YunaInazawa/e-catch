<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Event;

class StoreHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:store');
        // $this->middleware('guest:store')->except('logout');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $event_data = Event::where('store_id', Auth::guard('store')->user()->id)->get();
        return view('store.home', ['event_data' => $event_data]);
    }
}
