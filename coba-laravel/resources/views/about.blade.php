@extends ('layouts.main')

@section ('container')
    <h1>Halaman About</h1>
    <h3>{{ $Nama }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{  $image }}" alt="{{ $Nama }}" width="200" class="img-thumbnail rounded-circle">
@endsection