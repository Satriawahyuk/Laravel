@extends('layouts.app')
@section('title', 'cobaaaaaa')
@section('content')

<table class="table table-striped table-bordered" >
    <tbody>
        <th colspan="2">Detail Teman</th>
    </tbody>
    <tbody>
        <tr>
            <td>Nama Teman : </td>
            <td>{{ $friend['nama'] }}</td>
        </tr>
        <tr>
            <td>No Telepon : </td>
            <td>{{ $friend['no_tlp'] }}</td>
        </tr>
        <tr>
            <td>Alamat : </td>
            <td>{{ $friend['alamat'] }}</td>
        </tr>
    </tbody>
</table>
    
@endsection