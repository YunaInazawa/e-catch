@extends('layouts.header_guest')
<!DOCTYPE html>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<html>
@section('content')
    <body>
        <img><p>それっぽいいらすと
        </p>
        <button>←</button>ここにぼやっとイベント表示<button>右</button><br>

        <!-- 2020/08/07 Inazawa イベント情報取得 TEST -->
        @foreach( $eventData as $d )
        -> {{ $d->id }} : {{ $d->title }} : {{ $d->content }} : {{ $d->postal_code }} : {{ $d->street_addr }} : {{ $d->store->name }} : {{ $d->genre->content }}
        <br />
        @if( !is_null($d->image) )
        <img src="{{ asset('storage/event/' . $d->image) }}" width="200px">
        <br />
        @endif
        @endforeach

        <button>ログイン</button><br>
        <p>新規の方は<a>こちら</a>から</p>
    </body>
@endsection
</html>
