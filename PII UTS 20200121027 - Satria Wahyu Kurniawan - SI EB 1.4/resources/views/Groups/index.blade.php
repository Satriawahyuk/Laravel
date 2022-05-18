@extends('layouts.app')

@section('title', 'Groups')

@section('content')

<!-- ======= About Section ======= -->
<section id="portfolio" class="about">
  <div class="container">

    <div class="section-title d-flex flex-wrap">
      <div class="mt-5 " style="width: 20rem;">
        <h2 class=""><span class="text-success">Groups</span></h2>
      </div>
    </div>
    
    <div class="row content">
      <a class="btn btn-primary my-3 col-lg-2 text-center " href="#" role="button" data-bs-toggle="modal" data-bs-target="#createModal">New Group</a>  
      <div class=" text-end">
        @php
            $count = DB::table('groups')->count();
            $price = DB::table('history_groups')->max('id');
        @endphp
        {{-- menampilkan jumlah data-data groups  --}}
        <div style=""><p><i> Groups : </i>@php echo $count @endphp |<i> Pernah Dibuat : </i>@php echo $price @endphp |<i> Dihapus        : </i>@php echo $price - $count @endphp</p></div>
      </div>
        <div class="d-flex flex-wrap justify-content-center  ">

          {{-- menampilkan semua data groups  --}}
          @foreach ($groups as $group)
          <div>
            <a class="text-decoration-none" href="/groups/{{ $group['id'] }}/#show">
              <div class="card m-3 border-2 border-success" style="width: 18rem; border-radius: 20px;">
                <div class="card-body">
                  {{-- menampilkan nama --}}
                  <h3 class="card-title text-success">{{ $group['name'] }}</h3>
                  {{-- menampilkan deskripsi --}}
                  <h5 class="card-subtitle mb-2 text-muted">{{ $group['description'] }}</h5>
                </div>
              </div>
            </a>

            <form action="/groups/{{$group['id']}}" method="POST">
              @csrf
              @method('DELETE')
              <div class="d-flex flex-wrap justify-content-center">
                
                <div class="btn-group " style="width: 18rem; ">
                  {{-- Button  --}}
                  <a class="btn btn-outline-success border-2 border-end-0" style="border-radius: 10px 0 0 10px;" href="/groups/{{ $group['id'] }}/edit/#edit" role="button"><i class="bi bi-pencil-square"></i></a>
                  <button class="btn btn-outline-danger border-2 border-start-0" style="border-radius: 0 10px 10px 0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
                </div>
              </div>
            </form>

            <div class="card m-3 border-2 border-success" style="width: 18rem; border-radius: 20px;">
              <div class="card-body">
                {{-- list --}}
                  <h5>Member List :</h5>
                  <div class="d-flex justify-content-center">
                    <a class="btn btn-outline-primary my-2" href="/groups/addmember/{{ $group['id'] }}/" role="button">Tambah Anggota</a>
                  </div>

                  <div style="">
                    <ul class="list-group ">
                      {{-- menampilkan nama" member--}}
                      @foreach ($group->friends as $friend)
                        <li class="border-success list-group-item d-flex justify-content-between align-items-center">
                          <h5>{{$friend->nama}}</h5>
                          <span class="">
                            <form action="/groups/deletemember/{{$friend->id}}" method="POST">
                              @csrf
                              @method('PUT')
                              <button type="submit" class="btn btn-outline-danger m-2 d-flex " data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" onclick="return confirm('Are you sure?')">X</button>
                            </form>
                          </span>
                        </li>
                      @endforeach
                    </ul>
                    
                  </div>
                  {{-- buton add Member --}}
                  
                {{-- end list --}}   
              </div>
            </div>
          </div>

          @endforeach
          {{-- {{ $groups->links() }} --}}
        </div>
        {{-- create MODAL// tamppilan membuat groups --}}
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Group</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="/groups/#portfolio" method="POST">
                  @csrf
                  <div class="form-group">
                    {{-- input nama --}}
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" required value="{{ old('nama') }}">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    {{-- input Description --}}
                    <label for="exampleInputPassword1" class="form-label">Description</label>
                    <input type="text" class="form-control" name="description" id="exampleInputPassword1" required value="{{ old('description') }}">
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  
                  <div class="modal-footer mt-3">
                    {{-- button submit --}}
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-outline-danger" data-bs-dismiss="modal" aria-label="Close" role="button">Cancel</a>
                  </div>
                </form>

              </div>
              
            </div>
          </div>
        </div>
      {{-- endModal --}}
      </div>
    </div>
  </div>
</section><!-- End About Section -->

@endsection