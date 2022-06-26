@extends('layouts.app')

@section('title', 'Friends')

@section('content')
<form action = "/friends" method="POST">
  @csrf

  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp" value="{{ old('nama') ? old ('nama') : $friend['nama'] }}" >
    @error('nama')
    <div class="alert alert-danger"> {{$message}}</div>
    @enderror
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Nomor Telepon</label>
    <input type="text" class="form-control" name="no_tlp" id="exampleInputPassword1" value="{{ old('no_tlp') ? old ('no_tlp') : $friend['no_tlp'] }}" >
    @error('no_telp')
    <div class="alert alert-danger"> {{$message}}</div>
    @enderror
  </div>
  <div class="form-group>
    <label for="exampleInputPassword1">Alamat</label>
    <input type="text" class="form-control" name="alamat" id="exampleInputPassword1" value="{{ old('alamat') ? old ('alamat') : $friend['alamat'] }}" >
    @error('alamat')
    <div class="alert alert-danger"> {{$message}}</div>
    @enderror
  </div>
  <button type="submit" class="btn btn-sm btn-info">Submit</button>
</form>
    
@endsection