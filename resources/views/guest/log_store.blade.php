@extends('layouts.header_guest')
<!DOCTYPE html>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<html>
    <head>
    </head>
    <body>
    @section('content')
        <div class="container">
            <p>Login</p>
            <div class="card card-container">
                <p></p>
                <form>
                    <div>店舗ID</div>
                    <input type="number" id="inputStoreID" class="form-control" placeholder="Store ID" autofocus>
                    <br>
                    <div>パスワード</div>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password">
                    <p>※ここにエラー文が入る←エラーが発生した時だけ表示させたい。</p>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">ログイン</button>
                </form>
                <p>店舗登録してない方は<a href="{{ url('/regi_store') }}">こちら</a></p>
            </div>
            <a href="{{ url('/log_user') }}">会員に切り替え</a>
        </div>
    @endsection
    </body>
</html>