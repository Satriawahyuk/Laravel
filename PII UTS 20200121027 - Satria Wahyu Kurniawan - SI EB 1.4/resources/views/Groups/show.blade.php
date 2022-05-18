@extends('layouts.app')

@section('title', 'Coba')

@section('content')

{{-- tampilan detai groups --}}
<section id="show" class="about">
    <div class="container">
  
      <div class="section-title">
        <h2 class="mt-5">Groups</h2>
        <h3>Detail <span class="text-success">Groups</span></h3>
      </div>
      <div class="row content mt-5">
        <div class="d-flex flex-wrap justify-content-start">
          <div class="me-3">
              <a class="btn btn-outline-primary mb-2"style="width: 20rem; border-radius: 20px" href="/groups/#portfolio" role="button">kembali</a>
              {{-- nama group  --}}
              <div class="card border-success mb-2 border-2" style="width: 20rem; border-radius: 20px">
                  <div class="card-body">
                    {{-- menampilkan nama --}}
                    <h3 class="card-title"> Name : {{ $group['name'] }} </h3>
                    {{-- menampilkan description --}}
                    <h5 class="card-subtitle"> Description : {{ $group['description'] }} </h5>
                    
                  </div>
              </div>
              {{-- jumlah data-data  --}}
              <div class="card  border-success border-2" style="width: 20rem;border-radius: 20px">
                {{-- menghitung jumlah data-data member  --}}
                <div class="card-body my-2">
                @php
                    $id = $group['id'];
                    $count = DB::table('friends')->where('groups_id','=',$id)->count();
                    $all = DB::table('history_friends')->where('groups_id','=',$id)->count();
                    
                @endphp
                <h5 class="my-2"> Member : @php echo $count; @endphp</h5>
                <h5 class="my-2"> Member masuk :  @php echo $all; @endphp</h5>
                <h5 class="my-2"> Member keluar : @php echo $all - $count; @endphp </h5>
                </div>
              </div>
            </div>
            {{-- menamoilkan list member --}}
            <div class="card border-success border-2" style="width: 20rem;border-radius: 20px">
              <div class="card-body my-2">

                  {{-- list --}}
                      <h5><b>Member List</b></h5>
                      <div class="d-flex justify-content-center">
                        <a class="btn btn-outline-primary my-2" href="/groups/addmember/{{ $group['id'] }}/" role="button">Tambah Anggota</a>
                      </div>
                      <div  class="mt-2">
                        <ul class="list-group">
                          @foreach ($group->friends as $friend)
                          <li class="border-success list-group-item d-flex justify-content-between align-items-center">
                            {{-- menampilkan semua nama member --}}
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
                    
                  {{-- end list --}}
              </div>
            </div>

          </div>
        </div>
    </div>
</section> 

@endsection


