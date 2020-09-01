<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\carbon;
use App\Genre;
use App\Event;
use Auth;

class StoreController extends Controller
{
    public function event_create() {    // store 以外はアクセスできないようにする
        $genreData = Genre::all();

        return view('store.event_create', ['genreData' => $genreData]);
    }

    public function event_new( Request $request ) { // url image 後回し
        $request->session()->regenerateToken();
        $now = Carbon::now();

        // POST データの取得
        $title = $request->title;
        $genre_id = $request->genre_id;
        $start = $request->start;
        $end = $request->end;
        $content = $request->content;
        $url = $request->url;
        $file_name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('event', $file_name, 'public');
        $image = basename($path);

        // events 追加
        $add_event = new Event;
        $add_event->title = $title;
        $add_event->content = $content;
        $add_event->start = $start;
        $add_event->end = $end;
        $add_event->url = $url;
        if ( !is_null($image) ) { $add_event->image = $image; }
        $add_event->store_id = Auth::guard('store')->user()->id;
        $add_event->genre_id = $genre_id;
        $add_event->created_at = $now;
        $add_event->updated_at = $now;
        $add_event->save();

        /**
         * 登録まだ
         * datetime-local 確認後、登録てすと
         **/

        return redirect('/store/event_create')->with('flash_message', $image . ' の投稿が完了しました');
    }
}
