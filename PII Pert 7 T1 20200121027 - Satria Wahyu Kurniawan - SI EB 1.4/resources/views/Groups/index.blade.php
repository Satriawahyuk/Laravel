@extends('layouts.app')

@section('title', 'Groups')

@section('content')
<center><h2>Daftar Groups</h2></center>
<div class="text-right">
<a href="/groups/create" class="btn btn-primary mb-2 btn-sm"><i class="fas fa-plus"></i> Tambah Group</a>
</div>
<div class="row">
    
  
@foreach ($groups as $group)
<div class="col-lg-4">
  
<div class="card" style="width: 17rem;">
  <div class="card-body">
  <center>  <div class="col-md-4">
      <img src="{{asset('grup.jpg')}}" class="img-fluid rounded-start" alt="">
    </div>
  </center>
    <center><h3><a href="/groups/{{ $group['id']}}"class="card-title">{{ $group['name'] }}</a></h3></center>
    <center> <p class="card-text">{{ $group['description'] }}</p></center>
  <hr>
  <center><a href="{{url('groups/createmember/'. $group['id'])}}" class="btn btn-primary">Tambah Anggota</a> </center>
<br><br>
    <center><a href="/groups/{{$group['id']}}/edit" class="btn btn-warning">Edit Group</a> </center>
    <form action="/groups/{{$group['id']}}" method="POST">
      @csrf
      @method('DELETE')
      <br>
    <center><button class="btn btn-danger">Delete Group</a> </center>
    </form>
  </div>
</div>
</div>
@endforeach
</div>

<div class="mt-3">
  {{ $groups->links('paginationcustom') }}

</div>
@endsection



