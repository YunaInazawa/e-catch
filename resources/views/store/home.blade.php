@extends('layouts.app_store')

<link href="{{ asset('css/layouts/storehome.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <!-- フラッシュメッセージ -->
            @if (session('flash_message'))
                <div class="flash_message">
                    {{ session('flash_message') }}
                </div>
            @endif
            
            <!-- ログイン店舗 -->
            <div class="card storeback">
                <div class="row">
                    <label class="col-lg-6 col-md-8">{{ Auth::guard('store')->user()->name }}</label><label class="col-lg-3 col-md-3">[{{ Auth::guard('store')->user()->genre->content }}]</label>
                    <!-- -> {{ Auth::guard('store')->user()->id }} : {{ Auth::guard('store')->user()->name }} : {{ Auth::guard('store')->user()->rep_last_name }} : {{ Auth::guard('store')->user()->genre->content }}<br />-->
                </div>
                <div class="row">
                    <label class="col-lg-6">責任者：{{ Auth::guard('store')->user()->rep_last_name }}</label>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="submenu">
    イベント
</div>

<div class="container">
    <div class="row justify-content-center">
            <!-- 投稿イベント -->
            @foreach( $event_data as $data )
            
            <div class="card ev-cards row">
                <div class="col-lg-8 col-sm-12">
                    <div class="row">
                        <label class="col-lg-9"><a href="{{ route('event_details', ['id' => $data->id]) }}"> {{ $data->title }} </a></label><label class="col-lg-3"> {{ $data->genre->content }} </label>
                    </div>
                    <div class="row">
                        <label class="col-lg-12"> {{ $data->start }} ~ {{ $data->end }} </label>
                    </div>
                    <div class="row">
                        <label class="col-lg-12"> {{ $data->url }} </label>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 ev-img">
                    @if( !is_null($data->image) )
                    <img src="{{ asset('storage/event/' . $data->image) }}" width="200px">
                    @endif
                </div>
            
            </div>
            @endforeach
    </div>
</div>
@endsection