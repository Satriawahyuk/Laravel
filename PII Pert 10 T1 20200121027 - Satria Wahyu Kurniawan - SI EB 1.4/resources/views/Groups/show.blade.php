@extends('layouts.app')
@section('title', 'cobaaaaaa')
@section('content')

<table class="table table-striped table-bordered" >
    <tbody>
        <th colspan="2">Detail Group</th>
    </tbody>
    <tbody>
        <tr>
            <td>Name : </td>
            <td>{{ $group['name'] }}</td>
        </tr>

        <tr>
            <td>Description : </td>
            <td>{{ $group['description'] }}</td>
        </tr>
        <tr>
            <td>Mahasiswa : </td>
            <td>@foreach ($group->friends as $friend)
              <li>{{$friend->nama}}</li>
              @endforeach</td>
        </tr>
    </tbody>
</table>
    
@endsection