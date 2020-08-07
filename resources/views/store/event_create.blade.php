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
        </div>
        <div class="card">
            <div class="card-header">{{ __('イベント新規作成') }}</div>
            <div class="card-body">

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
                            <option value="1">飲食店</option>
                            <option value="2">スポーツ</option>
                            <option value="3">その他</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('開始日時') }}</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="start" placeholder="例）○月×日△：△" autocomplete="start">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('終了日時') }}</label>
    
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="end" placeholder="例）○月×日△：△" autocomplete="end">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('詳細') }}</label>
        
                    <div class="col-md-6">
                        <textarea class="form-control" name="content" placeholder="詳細" autocomplete="content" rows=”” cols=”” wrap=””>
                        </textarea>
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
            </div>
        </div>
    </div>
</div>
@endsection
