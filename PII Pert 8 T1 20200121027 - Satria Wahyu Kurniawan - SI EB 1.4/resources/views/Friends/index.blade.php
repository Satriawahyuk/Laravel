
@extends('layouts.app')

@section('title', 'Friends')

@section('content')


  <a href="/friends/create" class="btn btn-primary">Tambah Teman</a>
@foreach ($friends as $friend)
  <div class="row">
  <div class="col-sm-8">
<div class="card"> 
  <div class="card-body">
    <h5><a href="/friends/{{ $friend['id']}}"class="card-title">{{ $friend['nama'] }}</a></h5>
    <h6 class="card-subtitle mb-2 text-muted">{{ $friend['no_telp'] }}</h6>
    <p class="card-text">{{ $friend['alamat'] }}</p>
    <a href="/friends/{{$friend['id']}}/edit" class="btn btn-warning">Edit Teman</a>
    <form action="/friends/{{$friend['id']}}" method="POST">
      @csrf
      @method('DELETE')
      <br>
    <button class="btn btn-danger">Delete Teman</a>
    </form>
  </div>
</div>
</div>
</div>


@endforeach

<div>
{{$friends-> links() }}
</div>
@endsection



