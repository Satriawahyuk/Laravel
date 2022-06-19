@extends('layouts.app')

@section('title', 'Friends')

@section('content')
<div class="container">
  <center> <h2>Nama Teman</h2></center>

  <div class="text-right">
  <a href="/friends/create" class="btn btn-primary mb-2"> Tambah Teman</a>
  </div>
  <div class="row">

  @foreach ($friends as $friend)
  <div class="col-lg-3">
    <div class="card" style="width: 17rem;">
    <div class="card-body">
    <center><div class="col-md-4">
</div>
        <h3><a href="/friends/{{ $friend['id']}}"class="card-title">{{ $friend['nama'] }}</a></h3>
        <h6 class="card-subtitle mb-2 text-muted">{{ $friend['no_telp'] }}</h6>
        <p class="card-text">{{ $friend['alamat'] }}</p>
    <a href="/friends/{{$friend['id']}}/edit" class="mb-3 btn btn-warning">Edit Teman</a>
    <form action="/friends/{{$friend['id']}}" method="POST">
      @csrf
      @method('DELETE')
      <button class="btn btn-danger">Delete Teman</a>
      </form>
    </center>
  </div>
</div>

</div>
@endforeach
</div>
<div class="mt-3">
  {{ $friends->links('paginationcustom') }}

</div>
</div>
@endsection



