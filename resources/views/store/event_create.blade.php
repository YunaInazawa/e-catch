@extends('layouts.header_guest')
<!DOCTYPE html>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div>
            <p>イベント</p>

            <!-- フラッシュメッセージ -->
            @if (session('flash_message'))
                <div class="flash_message">
                    {{ session('flash_message') }}
                </div>
            @endif
        </div>
        <div class="card">
            <div class="card-header">{{ __('イベント新規作成') }}</div>
            <div class="card-body">
                <form method="POST" action="{{ route('event_new') }}" enctype='multipart/form-data'>
                @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('タイトル') }}</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="title" placeholder="タイトル" autocomplete="title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ジャンル') }}</label>
                        
                        <div class="col-md-6">
                            <select class="form-control" name="genre_id" autocomplete="genre_id">
                                @foreach( $genreData as $d )
                                <option value="{{ $d->id }}">{{ $d->content }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">開始日時</label>

                        <div class="col-md-6">
                            <input type="datetime-local" class="form-control" name="start" autocomplete="start">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">終了日時</label>
        
                        <div class="col-md-6">
                            <input type="datetime-local" class="form-control" name="end" autocomplete="end">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">詳細</label>
            
                        <div class="col-md-6">
                            <textarea class="form-control" name="content" placeholder="詳細" autocomplete="content" rows=”” cols=”” wrap=””></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('URL') }}</label>
            
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="url" placeholder="URL" autocomplete="url">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('イメージ') }}</label>
                        
                        <div class="col-md-6">
                            <input type="file" id="image" name="image" autocomplete="image">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('作成') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
