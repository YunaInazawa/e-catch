@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <!-- ログインユーザ -->
                    <br /><br />
                    【My Data】<br />
                    -> {{ Auth::user()->id }} : {{ Auth::user()->name }} : {{ Auth::user()->email }} : {{ Auth::user()->sex }}<br />
                    @if( !is_null(Auth::user()->icon) )
                    <img src="{{ asset('storage/userIcon/' . Auth::user()->icon) }}">
                    <br />
                    @endif

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
    </div>
</div>
@endsection
