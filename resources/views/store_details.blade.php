@extends('layouts.app_user')
<!DOCTYPE html>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/details.css') }}" rel="stylesheet">

@section('content')
<div class="container">
    <div class="card col-lg-10">
    <form method="post" action="{{ route('favorite') }}">
    @csrf

        <!-- header -->
        <div class="card-header center">{{ __('店舗情報') }}</div>

        <!-- body -->
        <div class="card-body">
            <div class="card">
                <div class="row">
                    <div class="col-md-12">
                        <h1>{{ $store_data->name }}</h1>
                        <p>
                            <input type="hidden" name="url" value="/store_details/{{ $store_data->id }}">
                            <input type="hidden" name="type_id" value="2">
                            <input type="hidden" nane="usec_id" value="{{ $store_data->id }}">
                            <button type="button" class="btn btn-outline-success"><i class="far fa-heart"> お気に入りに登録</i></button>
                        </p>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-12">
                        <p>
                            <h3>[ 開催イベント ]</h3>
                            @foreach( $event_data as $data )
                            <p>・<a href="{{ route('event_details', ['id' => $data->id]) }}">{{ $data->title }}</a></p>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
    </form>
    </div>
</div>
@endsection
