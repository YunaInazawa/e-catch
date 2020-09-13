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
        <div class="card-header center">{{ __('ユーザ情報') }}</div>

        <!-- body -->
        <div class="card-body">
            <div class="card">
                <div class="row">
                    <div class="col-md-4">
                        @if( !is_null($user_data->icon) )
                        <img src="{{ asset('storage/userIcon/' . $user_data->icon) }}" width="200px">
                        @else
                        <img src="{{ asset('storage/materials/noimage.jpg') }}" width="200px">
                        @endif
                    </div>
                    <div class="col-md-8">
                        <h1>{{ $user_data->name }}</h1>
                        <p>
                            <input type="hidden" name="url" value="/user_details/{{ $user_data->id }}">
                            <input type="hidden" name="type_id" value="1">
                            <input type="hidden" nane="usec_id" value="{{ $user_data->id }}">
                            <button type="submit" class="btn btn-outline-success"><i class="far fa-heart"> お気に入りに登録</i></button>
                        </p>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-12">
                        <p>
                            <h3>[ ユーザ情報１ ]</h3>
                            ユーザ情報１
                        </p>
                        <p>
                            <h3>[ ユーザ情報２ ]</h3>
                            ユーザ情報２
                        </p>
                        <p>
                            <h3>[ ユーザ情報３ ]</h3>
                            ユーザ情報３
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
    </form>
    </div>
</div>
@endsection
