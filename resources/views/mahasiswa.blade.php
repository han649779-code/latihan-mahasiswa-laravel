@extends('layouts.app')

@section('title', 'Daftar Mahasiswa')

@section('content')
    <h1>{{ $judul }}</h1>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $m)
                <tr>
                    <td>{{ $m['nama'] }}</td>
                    <td>{{ $m['alamat'] }}</td>
                    <td>{{ $m['gender'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection