@extends('layouts.header_guest')
<!DOCTYPE html>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/layouts/register.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('会員登録') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype='multipart/form-data'>
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><label class="required_item">※</label>{{ __('名前') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="inputs form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="名前・ニックネーム可" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('性別') }}</label>
                            <div class="col-md-6">
                                <span><input type="radio" name="sex" value="女" autocomplete="sex">女
                                <input type="radio" name="sex" value="男" autocomplete="sex">男
                                <input type="radio" name="sex" value="その他" autocomplete="sex" checked>その他</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><label class="required_item">※</label>{{ __('メールアドレス') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="inputs form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  placeholder="メールアドレス" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right"><label class="required_item">※</label>{{ __('誕生日') }}</label>
                            <div class="col-md-6">
                                <input type="date" class="inputs form-control" name="birth_day" value="1990-01-01" autocomplete="birth_day">
                                    <!-- <p>※ここにエラー文が入る←エラーが発生した時だけ表示させたい。</p>-->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right"><label class="required_item">※</label>{{ __('郵便番号') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="inputs form-control" name="postal_code" placeholder="999-9999" autocomplete="postal_code">
                                    <!-- <p>※ここにエラー文が入る←エラーが発生した時だけ表示させたい。</p>-->
                            </div>
                        </div>    

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><label class="required_item">※</label>{{ __('パスワード') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="inputs form-control @error('password') is-invalid @enderror" name="password" placeholder="半角英数字" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><label class="required_item">※</label>{{ __('パスワード確認') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="inputs form-control" name="password_confirmation" placeholder="半角英数字" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('アイコン') }}</label>
                            <div class="col-md-6">
                            <input type="file" id="inputIcon" name="inputIcon">
                            </div>
                        </div>
                        
                        <input type="hidden" name="street_addr" value="addr" autocomplete="street_addr">

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('登録') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
