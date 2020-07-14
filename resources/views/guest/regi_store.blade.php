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
            <div>店舗登録</div>
            <form>
                <span>店舗情報入力</span><span>入力確認</span><span>登録完了</span>
                <!-- ↑のは進行度（画面）によって表示形態を変える -->
                <div class="card">
                    <p>店舗登録</p>
                    <span>店舗名</span>
                    <span><input type="text" id="inputName" placeholder="○○店、××運営" autofocus>※必須</span>
                    <p>※ここにエラー文が入る←エラーが発生した時だけ表示させたい。</p>
                    
                    <span>ジャンル</span>
                    <select name="selgenre">
                        <option value="1">飲食店</option>
                        <option value="2">スポーツ</option>
                        <option value="3">その他</option>
                    </select>

                    <span>責任者名</span>
                    <span><input type="text" id="inputTopLastName" placeholder="苗字" autofocus>※必須</span>
                    <span><input type="text" id="inputTopFirstName" placeholder="名前" autofocus>※必須</span>
                    <p>※ここにエラー文が入る←エラーが発生した時だけ表示させたい。</p>
                    
                    <span>メールアドレス</span>
                    <span><input type="email" id="inputMail" placeholder="メールアドレス"><span>※必須</span></span>
                    <p>※ここにエラー文が入る←エラーが発生した時だけ表示させたい。</p>
                    
                    <span>電話番号</span>
                    <span><input type="text" id="inputTEL" placeholder="半角数字"><span>※必須</span></span>
                    <p>※ここにエラー文が入る←エラーが発生した時だけ表示させたい。</p>

                    <span>郵便番号</span>
                    <span><input type="text" id="inputAddr" placeholder="半角数字"><span>※必須</span></span>
                    <p>※ここにエラー文が入る←エラーが発生した時だけ表示させたい。</p>

                    
                    <span>ログインID</span>
                    <span><input type="text" id="inputLoginID" placeholder="半角英数字"><span>※必須</span></span>
                    <p>※ここにエラー文が入る←エラーが発生した時だけ表示させたい。</p>

                    <span>パスワード</span>
                    <span><input type="password" id="inputPass" placeholder="半角英数字"><span>※必須</span></span>
                    <p>※ここにエラー文が入る←エラーが発生した時だけ表示させたい。</p>
                    <span>パスワード確認</span>
                    <span><input type="password" id="inputPassCheck" placeholder="半角英数字"><span>※必須</span></span>
                    <p>※ここにエラー文が入る←エラーが発生した時だけ表示させたい。</p>

                </div>
                <p>上記の内容で登録しますいいですか？←入力確認の時に表示させる</p>
                <button class="btn btn-lg btn-primary" type="submit">次へ</button>
            </form>
        </div>
    @endsection
    </body>
</html>