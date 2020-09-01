<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Store;
use App\Event;
use App\Comment;
use App\Favorite;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $favoriteData = Favorite::where('user_id', Auth::user()->id)->get();
        $favorite_user = array();
        $favorite_store = array();
        $favorite_event = array();
        $favorite_comment = array();

        foreach( $favoriteData as $data ) {
            switch( $data->type_id ) {
                case 1:
                    $favorite_user[] = User::where('id', $data->usec_id)->first();
                    break;
                case 2:
                    $favorite_store[] = Store::where('id', $data->usec_id)->first();
                    break;
                case 3:
                    $favorite_event[] = Event::where('id', $data->usec_id)->first();
                    break;
                case 4:
                    $favorite_comment[] = Comment::where('id', $data->usec_id)->first();
                    break;
            }
        }
        return view('home', ['favorite_user' => $favorite_user, 'favorite_store' => $favorite_store, 'favorite_event' => $favorite_event, 'favorite_comment' => $favorite_comment]);
        //return view('home', ['data' => $favoriteData]);
    }
}
