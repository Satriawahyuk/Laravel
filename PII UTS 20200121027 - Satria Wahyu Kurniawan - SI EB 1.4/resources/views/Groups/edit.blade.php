@extends('layouts.app')

@section('title', ' Edit Groups')

@section('content')

{{-- tampilan edit groups  --}}
<section id="edit" class="about">
  <div class="container">

    <div class="section-title ms-3">
      <h3 class="mt-5">Edit <span class="text-success">Groups</span></h3>
      
    </div>
    <div class="row content">
      <div class="d-flex flex-wrap justify-content-start  mt-5">
        <div>
          <div class="card m-3 border-2 border-success" style="width: 20rem; border-radius: 20px;">
            <div class="card-body">
              {{-- mengambil data groups berdasarkan id  --}}
              <form action="/groups/{{ $groups['id'] }}" method="POST">
                @csrf
                @method('PUT')
              <div class="form-group m-3">
                <label for="exampleInputEmail1">Name</label>
                {{-- form edit nama  --}}
                <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" value="{{ old('name') ? old('name') : $groups['name'] }}">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group m-3">
                <label for="description">Description</label>
                {{-- form edit Description  --}}
                <input type="text" class="form-control" name="description" id="description" value="{{ old('description')? old('description') : $groups['description'] }}">
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              
            </div>
            
          </div>
          <div class="btn-group d-flex flex-wrap justify-content-center">
            <div class="btn-group" style="width: 20rem">
              {{-- button update dan batal  --}}
              <button type="submit" class="btn btn-success" style="border-radius: 10px 0 0 10px">Update</button>
              <a class="btn btn-outline-danger border-2 border-start-0" style="border-radius: 0 10px 10px 0" href="/groups" role="button">Cancle</a>
            </div>
          </div>
        </form>
        </div>
        </div>
      </div>
  </div>
</section> 

    
@endsection