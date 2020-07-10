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
            <div>会員登録</div>
            <form>
                <span>会員情報入力</span><span>入力確認</span><span>登録完了</span>
                <!-- ↑のは進行度（画面）によって表示形態を変える -->
                <div class="card">
                    <p>会員登録</p>
                    <span>名前<span>※他のユーザからも見れます。</span></span>
                    <span><input type="text" id="inputName" placeholder="名前・ニックネーム可" autofocus>※必須</span>
                    <p>※ここにエラー文が入る←エラーが発生した時だけ表示させたい。</p>
                    
                    <span>性別</span>
                    <span><input type="radio" name="sex" value="女">女
                    <input type="radio" name="sex" value="男">男
                    <input type="radio" name="sex" value="その他" checked>その他</span>
                    
                    <span>メールアドレス</span>
                    <span><input type="email" id="inputMail" placeholder="メールアドレス"><span>※必須</span></span>
                    <p>※ここにエラー文が入る←エラーが発生した時だけ表示させたい。</p>
                    
                    <span>誕生日</span>
                    <span><input type="date" id="inputDB"><span>※必須</span></span>
                    <p>※ここにエラー文が入る←エラーが発生した時だけ表示させたい。</p>

                    <span>郵便番号</span>
                    <span><input type="text" id="inputAddr" placeholder="0000000"><span>※必須</span></span>
                    <p>※ここにエラー文が入る←エラーが発生した時だけ表示させたい。</p>

                    <span>パスワード</span>
                    <span><input type="password" id="inputPass" placeholder="半角英数字"><span>※必須</span></span>
                    <p>※ここにエラー文が入る←エラーが発生した時だけ表示させたい。</p>
                    <span>パスワード確認</span>
                    <span><input type="password" id="inputPassCheck" placeholder="半角英数字"><span>※必須</span></span>
                    <p>※ここにエラー文が入る←エラーが発生した時だけ表示させたい。</p>

                    <span>アイコン</span>
                    <span><input type="file" id="inputIcon"></span>
                </div>
                <p>上記の内容で登録しますいいですか？←入力確認の時に表示させる</p>
                <button class="btn btn-lg btn-primary" type="submit">次へ</button>
            </form>
        </div>
    @endsection
    </body>
</html>