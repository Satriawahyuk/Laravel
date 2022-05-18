@extends('layouts.app')

@section('title', 'Friends')

@section('content')

{{-- tampilan edit  --}}
<section id="edit" class="about">
  <div class="container">

    <div class="section-title">
      <h3 class="mt-5">Edit <span class="text-success">Friends</span></h3>
    </div>
    <div class="row content">
      <div class=" flex-wrap justify-content-start">
          <div class="card m-3 border-success border-2" style="width: 20rem; border-radius: 20px">
            <div class="card-body">
              {{-- menampilkan friends berdasarkan id  --}}
              <form action="/friends/{{ $friends['id'] }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group m-3">
                  {{-- menampilkan nama --}}
                  <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp" value="{{ old('nama') ? old('nama') : $friends['nama'] }}">
                  @error('nama')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group m-3">
                  <label for="exampleInputPassword1">No Telpon</label>
                  {{-- menampilkan no tlp --}}
                  <input type="number" class="form-control" name="no_tlp" id="exampleInputPassword1" value={{ old('no_tlp')? old('no_tlp') : $friends['no_tlp'] }}>
                  @error('no_tlp')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group m-3">
                  <label for="alamat">Alamat</label>
                  {{-- menampilkan alamat --}}
                  <input type="text" class="form-control" name="alamat" id="alamat" value={{ old('alamat')? old('alamat') : $friends['alamat'] }}>
                  @error('alamat')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                
                
              </div>
              
            </div>
            <div class="btn-group mx-3 mt-1" style="width: 20rem;">
              {{-- tombol --}}
              <button type="submit" class="btn btn-success " style="border-radius: 10px 0 0 10px">Update</button>
              <a class="btn btn-outline-danger border-start-0 border-2" style="border-radius: 0 10px 10px 0" href="/" role="button">Cancel</a>
            </div>
          </form>
        </div>
      </div>
  </div>
</section> 

    
@endsection