@extends('layouts.app')

@section('title', 'Groups')

@section('content')
<a href="/groups/create" class="btn btn-primary">Tambah Group</a>
@foreach ($groups as $group)
<div class="row">
  <div class="col-sm-6">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="/groups/{{ $group['id']}}"class="card-title">{{ $group['name'] }}</a>
    <p class="card-text">{{ $group['description'] }}</p>
  <hr>
  <a href="/groups/addmember/{{ $group['id']}}" class="btn btn-primary">Tambah Anggota</a>

  <ul class="list-group">
@foreach ($group->friends as $friend)
  <li class="list-group-item d-flex justify-content-between align-items-center">
    {{$friend->nama}}
    <form action="/groups/deleteaddmember/{{$friend->id}}" method="POST">
      @csrf
      @method('PUT')
    <button type="submit" class="bedge  btn btn-danger">X</a>
    </form>
  </li>
@endforeach
</ul>



  <hr>





    <a href="/groups/{{$group['id']}}/edit" class="btn btn-warning">Edit Group</a>
    <form action="/groups/{{$group['id']}}" method="POST">
      @csrf
      @method('DELETE')
      <br>
    <button class="btn btn-danger">Delete Group</a>
    </form>
  </div>
</div>
  </div>
</div>

@endforeach

<div>
{{$groups-> links() }}
</div>
@endsection

