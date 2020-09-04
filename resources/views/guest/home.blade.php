@extends('layouts.header_guest')
<!DOCTYPE html>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/layouts/guesthome.css') }}" rel="stylesheet">
<html>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 mainimg">
            <img>
        </div>
        
        <div id="carouselExampleControls" class="col-lg-12 carousel slide images" data-ride="carousel">
            <div class="carousel-inner">
                <!-- 2020/08/07 Inazawa イベント情報取得 TEST -->
                @foreach( $eventData as $d )
                <!-- -> {{ $d->id }} : {{ $d->title }} : {{ $d->content }} : {{ $d->postal_code }} : {{ $d->street_addr }} : {{ $d->store->name }} : {{ $d->genre->content }}-->        
                @if( !is_null($d->image) )
                @if(($d->id) == 1)

                <div class="carousel-item active">
                    <img class="d-block blur" src="{{ asset('storage/event/' . $d->image) }}" width="100%" height="400px">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{$d->title}}</h5>
                        <p>{{$d->genre->content}}</p>
                    </div>
                </div>
                @else
                <div class="carousel-item">
                    <img class="d-block blur" src="{{ asset('storage/event/' . $d->image) }}" width="100%" height="400px">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{$d->title}}</h5>
                        <p>{{$d->genre->content}}</p>
                    </div>
                </div>
                @endif
                @endif
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div>
            <button class="btn btn-primary justify-content-center" onclick="location.href='{{ url('/login') }}'">ログイン</button><br>
            <p>新規の方は<a href="{{ url('/register') }}">こちら</a>から</p>
        </div>
    </div>
</div>
@endsection
</html>
