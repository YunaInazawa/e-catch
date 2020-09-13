<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\User;
use App\Store;

class GuestController extends Controller
{
    // TOP
    public function home()
    {
        $eventData = Event::all();
        return view('guest/home', ['eventData' => $eventData]);
    }

    // イベント一覧
    public function event_list( $page = 1 )
    {
        $end = $page * 5;
        $start = $end - 4;
        $event_data = Event::whereBetween('id', [$start, $end])->get();
        return view('event_list', ['event_data' => $event_data,'page' => $page]);
    }

    // イベント詳細
    public function event_details( $id = 1 )
    {
        $event_data = Event::where('id', $id)->first();
        return view('event_details', ['event_data' => $event_data]);
    }

    // ユーザ詳細
    public function user_details( $id = 1 )
    {
        $user_data = User::where('id', $id)->first();
        return view('user_details', ['user_data' => $user_data]);
    }

    // 店舗詳細
    public function store_details( $id = 1 )
    {
        $store_data = Store::where('id', $id)->first();
        return view('store_details', ['store_data' => $store_data]);
    }
}
