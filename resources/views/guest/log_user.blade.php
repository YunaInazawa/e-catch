<!DOCTYPE html>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<html>
    <head>
    </head>
    <body>
        <div class="container">
            <p>Login</p>
            <div class="card card-container">
                <p></p>
                <form>
                    <div>メールアドレス</div>
                    <input type="email" id="inputMail" class="form-control" placeholder="Mail Address" autofocus>
                    <br>
                    <div>パスワード</div>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password">
                    <p>※ここにエラー文が入る←エラーが発生した時だけ表示させたい。</p>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">ログイン</button>
                </form>
                <p>会員登録してない方は<a href="{{ url('/regi_user') }}">こちら</a></p>
            </div>
            <a href="{{ url('/log_store') }}">店舗に切り替え</a>
        </div>
    </body>
</html>