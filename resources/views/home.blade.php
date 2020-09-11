@extends('layouts.app_user')

<link href="{{ asset('css/layouts/storehome.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <!-- ログインユーザ -->
            <div class="card storeback">
                <div class="row">
                    <label class="col-lg-6 col-md-8">{{ Auth::user()->name }}</label><label class="col-lg-3 col-md-3">{{ Auth::user()->sex }}</label>
                </div>
                <div class="row">
                    <label class="col-lg-6">Mail：{{ Auth::user()->email }} </label>
                    <label>
                        @if( !is_null(Auth::user()->icon) )
                        <img src="{{ asset('storage/userIcon/' . Auth::user()->icon) }}" width="200px">
                        @endif
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="submenu">
        <a>イベント</a> | <a>お気に入り店舗</a> | <a>お気に入りユーザ</a>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                @foreach( $favorite_event as $d )
                <div class="card ev-cards row">
                        <div class="col-lg-8 col-sm-12">
                                -> {{ $d->title }}<br />
                        </div>
                        
                    
                    </div>
                 @endforeach   


                    <!-- お気に入りユーザ -->
                    <br />
                    【Favorite_User】<br />
                    @foreach( $favorite_user as $d )
                    -> {{ $d->name }}<br />
                    @endforeach

                    <!-- お気に入り店舗 -->
                    <br />
                    【Favorite_Store】<br />
                    @foreach( $favorite_store as $d )
                    -> {{ $d->name }}<br />
                    @endforeach

                    <!-- お気に入りイベント -->
                    <br />
                    【Favorite_event】<br />
                    @foreach( $favorite_event as $d )
                    -> {{ $d->title }}<br />
                    @endforeach

                    <!-- お気に入りコメント（掲示板実装後？） -->
                    <br />
                    【Favorite_comment】<br />
                    @foreach( $favorite_comment as $d )
                    -> {{ $d->title }}<br />
                    @endforeach
        </div>
    </div>
</div>
@endsection
