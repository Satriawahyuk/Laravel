@extends('layouts.app')

@section('title', 'Friends')

@section('content')
<a href="/friends/create" class="btn btn-sm btn-warning">Tambah Teman</a><br><br>
<div class="row">
  <div class="col d-inline-flex">
@foreach  ($friends as $friend)

    <div class="card mt-2 me-2 bg-light" style="width: 18rem;">
      <div class="card-body">
        <a href="/friends/{{ $friend['id']}}" class="card-title">{{ $friend['nama'] }}</a>
          <h6 class="card-subtitle mb-2 text-muted">{{ $friend['no_tlp'] }}</h6>
          <p class="card-text">{{ $friend['alamat'] }}.</p>

          <hr>

        <form action="/friends/{{ $friend['id']}}" method="POST">
        <a href="/friends/{{$friend['id']}}/edit" class="card-link btn btn-warning">Edit teman</a> │ 
            @csrf
            @method('DELETE')
            <button class="card-link btn btn-danger">Delete teman</button>
        </form>
      </div>
  
    </div>
    @endforeach
  </div>
</div>

<div>
    {{$friends-> links() }}
</div>
@endsection