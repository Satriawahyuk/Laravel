@extends('layouts.app')

@section('title', 'Coba')

@section('content')

{{-- menampilkan detail friends berdasarkan id  --}}
<section id="show" class="about">
    <div class="container">
  
      <div class="section-title">
        <h3 class="mt-5">Detail <span class="text-success">Friends</span></h3>
        
      </div>
      <div class="row content">
        <div class="">
          <a class="btn btn-outline-primary mt-3 mx-3" style="width: 20rem; border-radius: 20px" href="/#about" role="button">kembali</a>
          <div class="card m-3 border-success border-2" style="width: 20rem; border-radius: 20px">
              <div class="card-body ">
                {{-- tampil nama friends  --}}
                <h3 class="card-title text-center m-2 text-uppercase">{{ $friends['nama'] }}</h3>
              </div>
          </div>
              <div class="card m-3 border-success border-2" style="width: 20rem; border-radius: 20px">
                <div class="card-body">
                    {{-- tampil no tlp friends  --}}
                    <h6 class="card-subtitle m-3">No Tlp : {{ $friends['no_tlp'] }}</h6>
                    {{-- tampil alamat friends  --}}
                    <p class="card-text m-3"><b>Alamat :</b> {{ $friends['alamat'] }}</p>
                    {{-- tampil group friends  --}}
                    <p class="card-text m-3"><b>Group :</b>  
                      @php
                          if($friends->groups_id == 0){
                            echo 'Tidak dalam group';
                          }else{
                            echo $friends->groups->name;
                          }
                      @endphp
                    </p>
                    <p class="mx-3">
                    
                    </p>
              </div>
            </div>
            <div class="card m-3 border-success border-2" style="width: 20rem; border-radius: 20px">
              <div class="card-body">
                {{-- tampil historygroups friends  --}}
                  <p class="card-text mx-3"><b>Pernah Masuk Group : <br></b> 
                    @foreach ($hfriends as $item)
                    @php
                        if($item->groups_id == 0){
                          echo '';
                        }else{
                          echo $item->history_groups->name.'->';
                        }
                    @endphp
                    @endforeach
                  </p>
                  
                  <p class="mx-3">
                    
                  </p>
            </div>
          </div>
        </div>
    </div>
</section> 

    
    
@endsection


