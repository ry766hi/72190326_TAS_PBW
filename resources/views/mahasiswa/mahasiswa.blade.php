@extends('layouts.main')

@section('container')
    <h1>Data Mahasiswa</h1>
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <div class="card-tools">
                    <a href="/create" class="btn btn-success">Tambah Mahasiswa<i class="fas fa-plus-square"></i></a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>Jurusan</th>
                        <th>Bidang Minat</th>
                    </tr>
                    @foreach ($dtmahasiswa as $item)
                    <tr>
                        <td>{{ $item->nim }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->gender }}</td>
                        <td>{{ $item->jurusan }}</td>
                        <td>{{ $item->bidangminat }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection