@extends('layouts.app_user')
<!DOCTYPE html>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

@section('content')
<div class="conteiner">
    <div class="card col-lg-10">
        <div class="card-header">{{ __('イベント一覧') }}</div>
        <div>
            <label class="text-md-right">{{ __('キーワード') }}</label>
            <input type="text" class="" placeholder="例）コラボ">
            
            <label class="text-md-right">{{ __('絞り込み') }}</label>
            <select name="genre_id" autocomplete="genre_id">
                    <option value="1">飲食店</option>
                    <option value="2">スポーツ</option>
                    <option value="3">その他</option>
            </select>

            <label class="text-md-right">{{ __('並び替え') }}</label>
            <select>
                    <option value="1">日付が近い順</option>
                    <option value="2">日付が遠い順</option>
                    <option value="3">人気順</option>
            </select>
            <button class="btn btn-primary">
                検索
            </button>
        </div>
        <!-- とりあえず全件表示してる -->
        @foreach( $event_data as $data )
        <div class="card-body">
            <div class="card">
                <div class="row">
                <div class="col-md-6">
                    <label>{{ $data->title }}</label><label>♡</label>
                    <p>{{ $data->store->name }}</p>
                    <p>日時：{{ $data->start }} ~ {{ $data->end }}</p>
                    <p>イベント詳細（一部）</p>
                </div>
                <div class="col-md-6">
                    @if( !is_null($data->image) )
                    <img src="{{ asset('storage/event/' . $data->image) }}" width="200px">
                    @endif
                </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="card-footer">
            最初　１　２　３　４　５　…　最終
        </div>
    </div>
</div>
@endsection
