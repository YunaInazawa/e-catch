<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\carbon;
use App\Event;
use App\User;
use App\Store;
use App\Favorite;
use Auth;

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
        $event_data = Event::where('store_id', $id)->get();
        return view('store_details', ['store_data' => $store_data, 'event_data' => $event_data]);
    }

    // お気に入り登録
    public function favorite( Request $request )
    {
        $request->session()->regenerateToken();
        $now = Carbon::now();

        // POST データの取得
        $type_id = $request->type_id;
        $usec_id = $request->usec_id;

        // user_id ヘルパ作ったら楽( マルチ認証用 )
        if( Auth::check() ){
            $user = Auth::user()->id;
        }elseif( Auth::guard('store')->check() ){
            $user = Auth::guard('store')->user()->id;
        }

        // favorite 存在チェック
        

        // favorites 追加
        // $add_favorite = new Favorite;
        // $add_favorite->type_id = $type_id;
        // $add_favorite->usec_id = $usec_id;
        // $add_favorite->user_id = $user;
        // $add_favorite->created_at = $now;
        // $add_favorite->updated_at = $now;
        // $add_favorite->save();

        return back();
    }
}
