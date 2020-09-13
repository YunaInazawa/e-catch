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
        <div class="card-header center">{{ __('イベント情報') }}</div>

        <!-- body -->
        <div class="card-body">
            <div class="card">
                <div class="row">
                    <div class="col-md-4">
                        @if( !is_null($event_data->image) )
                        <img src="{{ asset('storage/event/' . $event_data->image) }}" width="200px">
                        @else
                        <img src="{{ asset('storage/materials/noimage.jpg') }}" width="200px">
                        @endif
                    </div>
                    <div class="col-md-8">
                        <h1>{{ $event_data->title }}</h1>
                        <p><a href="{{ route('store_details', ['id' => $event_data->store->id]) }}">{{ $event_data->store->name }}</a></p>
                        <p>
                            <input type="hidden" name="url" value="/event_details/{{ $event_data->id }}">
                            <input type="hidden" name="type_id" value="3">
                            <input type="hidden" nane="usec_id" value="{{ $event_data->id }}">
                            <button type="button" class="btn btn-outline-success"><i class="far fa-heart"> 参加予定に登録</i></button>
                        </p>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-12">
                        <p>
                            <h3>[ content ]</h3>
                            {{ $event_data->content }}
                        </p>
                        <p>
                            <h3>[ postal_code ]</h3>
                            {{ $event_data->postal_code }}
                        </p>
                        <p>
                            <h3>[ street_addr ]</h3>
                            {{ $event_data->street_addr }}
                        </p>
                        <p>
                            <h3>[ date ]</h3>
                            {{ $event_data->start }} ~ {{ $event_data->end }}
                        </p>
                        <p>
                            <h3>[ url ]</h3>
                            {{ $event_data->url }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
    </form>
    </div>
</div>
@endsection
