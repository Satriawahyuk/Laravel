@extends('layouts.app')

@section('title', 'Groups')

@section('content')

<section id="add" class="about">
  <div class="container">

    <div class="section-title mx-3">
      <h2 class="mt-5">Groups</h2>
      <h3 >New <span class="text-success">Member</span></h3>
      
    </div>
    <div class="row content d-flex flex-wrap justify-content-start">
      <div class="">
          <div class="card m-3 border-success border-2 " style="width: 20rem;border-radius: 20px;">
            <div class="card-body">
              <form action="/groups/addmember/{{ $group->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group ">
                  <label for="name" class="form-label">Name</label>
                  <select class="form-select border-success mb-4" aria-label="Default select example" id="name" name="friend_id">
                    <option selected>- Pilihan -</option>
                    @foreach ($friends as $item)
                      <option value="{{ $item->id }}">
                        {{ $item->nama}}
                      </option> 
                    @endforeach
                  
                  </select>
                </div>
                
              </div>
              
            </div>
            <div class="btn-group mx-3" style="width: 20rem;">
              <button type="submit " style="border-radius: 10px 0 0 10px" class="btn btn-primary">Submit</button>
              <a class="btn btn-outline-danger border-2 border-start-0" style="border-radius: 0 10px 10px 0" href="/groups/#portfolio" role="button">Cancle</a>
            </div>
          </form>
        </div>
      </div>
  </div>
</section> 

  

@endsection