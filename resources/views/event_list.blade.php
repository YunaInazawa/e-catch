@extends('layouts.app_user')
<!DOCTYPE html>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/layouts/event_list.css') }}" rel="stylesheet">

@section('content')
<div class="conteiner">
    <div class="row justify-content-center">
        <div class="card col-lg-10">
            <div class="card-header">{{ __('イベント一覧') }}</div>
            <!--
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
            -->
            <!-- とりあえず全件表示してる -->
            @foreach( $event_data as $data )
            <div class="card-body">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <label class="col-lg-10"><a href="{{ route('event_details', ['id' => $data->id]) }}">{{ $data->title }}</a></label><label class="col-lg-2">♡</label>
                                <p class="col-lg-10">{{ $data->store->name }}</p>
                                <p class="col-lg-12">日時：{{ $data->start }} ~ {{ $data->end }}</p>
                                <p class="col-lg-10">イベント詳細（一部）</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            @if( !is_null($data->image) )
                            <img src="{{ asset('storage/event/' . $data->image) }}" class="image">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="card-footer justify-content-center">
            <a href="{{ url('/event_list/1') }}">最初　</a>
                @for($i = 1; $i <= 5; $i++)
                    <a href="{{ url('/event_list/'.$i) }}">{{$i}}　</a>
                @endfor
            </div>
        </div>
    </div>
</div>
@endsection
