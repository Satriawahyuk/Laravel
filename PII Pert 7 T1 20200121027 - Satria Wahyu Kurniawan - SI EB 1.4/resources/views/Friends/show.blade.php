@extends('layouts.app')

@section('title', 'Coba')

@section('content')
<center>
  <h2>Detail Friends ({{ $friend['nama'] }})</h2>
<div class="card mb-3" style="max-width: 600px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{asset('profil.png')}}" class="img-fluid rounded-start" alt="">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ $friend['nama'] }}</h5>
          <p>No Telepon {{ $friend['nama'] }} : {{$friend['no_telp']}}</p>
          <p>Alamat {{ $friend['nama'] }} : {{$friend['alamat']}}</p>
          <p>{{$friend['nama']}} Masuk ke Group : 
        
            @foreach ($friend->member_groups as $item)
                @if ($item->status == 1)
                <li>{{$item->groups->name}}</li>                    
                @endif
            @endforeach
        </p>
          <p>{{$friend['nama']}} Pernah Masuk ke Group : 
        
            @foreach ($friend->member_groups as $item)
                @if ($item->status == 2)
                <li>{{$item->groups->name}}</li>                    
                @endif
            @endforeach
        </p>
        </div>
      </div>
    </div>
  </div>
</center>   
@endsection



