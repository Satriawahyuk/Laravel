@extends('layouts.app')

@section('title', 'Friends')

@section('content')
<form action ="/friends" method="POST">
  @csrf
  <div class="mb-3">
    <center> <h2>Tambah Friends</h2></center>
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp" value="{{ old('nama') }}">
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">No Telp </label>
    <input type="text" class="form-control" name="no_telp" id="exampleInputPassword1" value="{{ old('no_telp') }}">
    @error('no_telp')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Alamat </label>
    <input type="text" class="form-control" name="alamat" id="exampleInputPassword1" value="{{ old('alamat') }}">
    @error('alamat')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="text-right">
  <button type="submit" class="btn btn-primary"><b class="fas fa-plus">submit</b></button>
  </div>
</form>

@endsection