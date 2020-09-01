@extends('layouts.header_guest')
<!DOCTYPE html>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<link href="{{ asset('css/layouts/login.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ログイン') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('store.login') }}">
                        @csrf

                        <div class="form-group row">

                            <label for="login_id" class="col-md-4 col-form-label text-md-right">{{ __('店舗ID') }}</label>

                            <div class="col-md-6">
                                <input id="login_id" type="login_id" class="inputs form-control @error('login_id') is-invalid @enderror" name="login_id" value="{{ old('login_id') }}"  placeholder="Store ID" required autocomplete="login_id" autofocus>

                                @error('login_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="inputs form-control @error('password') is-invalid @enderror" name="password"  placeholder="Password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('IDとパスワードを保存する') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ログイン') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('store.password.request') }}">
                                        {{ __('パスワードを忘れた') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    <p>店舗登録してない方は<a href="{{ url('/store/register') }}">こちら</a></p>
                </div>
            </div>
            <a href="{{ url('/login') }}">会員に切り替え</a>
        </div>
    </div>
</div>
@endsection
