@extends('layouts.app')

@section('title', 'Coba')

@section('content')
<center>
  <h2>Detail Group ({{ $group['name'] }})</h2>
<div class="card mb-3" style="max-width: 600px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{asset('grup.jpg')}}" class="img-fluid rounded-start" alt="">
      </div>
      <div class="col-md-8">
        <div class="card-body">
            <h3>{{ $group['name'] }}</h3>
            <hr>
            <h6>Deskripsi Group : {{$group['description']}}</h6>
        </div>

        <div class="text-center">
        <h6>Anggota Grup Saat Ini :</h6 >
@foreach ($group->member_groups as $friend)
@if ($friend->status == 1)
<div class="card" style="width: 18rem;">
<ul class="list-group list-group-flush">
  <li class="mt-2"> {{$friend->friends->nama}} | <a href="{{url('groups/deletemember/'. $friend->id)}}" class="btn btn-secondary">hapus</a></li>  
</ul>
</div>
  @endif
@endforeach
@php
    $jumlah = $group->member_groups->where('status', 1)->count();
    $jumlah_keluar = $group->member_groups->where('status', 2)->count();
@endphp <br>
<p>Anggota : {{$jumlah}} anggota
  <br>
  Anggota Keluar : {{$jumlah_keluar}} anggota</p>




  <hr>
      </div>
    </div>
  </div>
</div>
</center>
@endsection

