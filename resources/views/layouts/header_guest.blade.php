<link href="{{ asset('css/layouts/header.css') }}" rel="stylesheet">
<header class="navbar navbar-fixed-top navbar-inverse">
  <h1>ロゴ</h1>
  <nav class="navbar navbar-expand-lg  navbar-light">
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#header" aria-controls="header" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="header">
      <ul class="navbar-nav">
        <li class="nav-item"><a href="#">e-catchとは？</a></li>
        <li class="nav-item"><a href="#">会員と店舗とは？</a></li>
        <li class="nav-item"><a href="{{ url('/register') }}">会員登録</a></li>
        <li class="nav-item"><a href="{{ url('/store/register') }}">店舗登録</a></li>
        <li class="nav-item"><a href="{{ url('/login') }}">ログイン</a></li>
      </ul>
    </div>
  </nav>
</header>
@yield('content')

