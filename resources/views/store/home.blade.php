@extends('layouts.app_store')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Employee Dashboard</div>

                <div class="card-body">
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

                    You are logged in!
                    
                    <!-- ログイン店舗 -->
                    <br /><br />
                    【My Store Data】<br />
                    -> {{ Auth::guard('store')->user()->id }} : {{ Auth::guard('store')->user()->name }} : {{ Auth::guard('store')->user()->rep_last_name }} : {{ Auth::guard('store')->user()->genre->content }}<br />
                    
                    <!-- 投稿イベント -->
                    <br />
                    【My Event】<br />
                    @foreach( $event_data as $data )
                    -> {{ $data->id }} : {{ $data->title }} : {{ $data->content }} : {{ $data->start }} ~ {{ $data->end }} : {{ $data->url }} : {{ $data->genre->content }}<br />
                    @if( !is_null($data->image) )
                    <img src="{{ asset('storage/event/' . $data->image) }}">
                    <br />
                    @endif
                    <br />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection