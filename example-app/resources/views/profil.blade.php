@extends('template')

@section('content')
{{-- {{ Auth::user()->email }}
<br>{{ Auth::user()->name }}
<br> {{ Auth::user()->jenis_kelamin }} --}}
<div class="box blue">
  <h2>Profil</h2>
  <p>{{ Auth::user()->name }}</p>
  <p>{{ Auth::user()->role }}</p>
  <p>{{ Auth::user()->jenis_kelamin}}</p>
  <p>{{ Auth::user()->email}}</p>


</div>

</body>

</html>



@endsection