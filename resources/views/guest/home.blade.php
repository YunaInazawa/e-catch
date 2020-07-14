@extends('layouts.header_guest')
<!DOCTYPE html>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<html>
@section('content')
    <body>
        <img><p>それっぽいいらすと
        </p>
        <button>←</button>ここにぼやっとイベント表示<button>右</button><br>
        <button>ログイン</button><br>
        <p>新規の方は<a>こちら</a>から</p>
    </body>
@endsection
</html>

<<<<<<< HEAD
  
  <button type="button" class="btn btn-primary">Primary</button><br />

  @foreach($data as $d)
  {{ $d->name }}<br />
  @endforeach
=======
>>>>>>> 4db4cf002c3dced635bfc3201957d577d2010aab
