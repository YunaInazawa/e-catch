  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  
  <button type="button" class="btn btn-primary">Primary</button><br />

  @foreach($data as $d)
  {{ $d->name }}<br />
  @endforeach