@extends('layouts.app')

@section('title', 'Coba')

@section('content')

<div class="card mb-3" style="max-width:800px;">
    <div class="row g-0">
      <div class="col-md-8">
        <div class="card-body">
          <p>Nama : {{ $friend['nama'] }}</p>
          <p>No Telp : {{$friend['no_telp']}}</p>
          <p>Alamat  : {{$friend['alamat']}}</p>
          <p><h6>Berada di Group :  @foreach  ($friend->member_groups as $item) @if ($item->status == 1) {{$item->groups->name}}</h6>                    
          @endif
                @endforeach
        </p> </h6>
          <p><h6>Keluar dari Group : @foreach ($friend->member_groups as $item) @if ($item->status == 2) {{$item->groups->name}}</h6>                    
                @endif
            @endforeach
        </p>
        </div>
      </div>
    </div>
  </div>
  
@endsection



