@extends('layouts.app')

@section('title', 'Groups')

@section('content')

<div class="card mb-3" style="max-width: 800px;">
    <div class="row g-0">
      <div class="col-md-8">
            <h3>{{ $group['name'] }}</h3>
           <br>
       
        <h6>Anggota Grup :</h6 >
        <p><h6> @foreach ($group->member_groups as $friend) @if ($friend->status == 1) {{$friend->friends->nama}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{url('groups/deletemember/'. $friend->id)}}" class="btn btn-danger">X</a></p></h6>  


  @endif
@endforeach
</p></h6>

@php
    $jumlah = $group->member_groups->where('status', 1)->count();
    $jumlah_keluar = $group->member_groups->where('status', 2)->count();
@endphp <br>
<p><h6>Jumlah Anggota Grup : {{$jumlah}} anggota
  <br>
  Jumlah yang Keluar : {{$jumlah_keluar}} anggota</p></h6>




  <hr>
      
    </div>
  </div>
</div>

@endsection

