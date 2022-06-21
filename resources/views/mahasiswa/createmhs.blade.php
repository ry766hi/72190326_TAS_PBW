@extends('layouts.main')

@section('container')
    <h1>Tambah Mahasiswa</h1>
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-body">
                <form action="/simpan" method="get">
                    <div class="form-group mb-3">
                        <label for="nim" class="form-label">Nomor Induk Mahasiswa</label>
                        <input type="text" id="nim" name="nim" class="form-control" placeholder="">
                    </div>
                    <div class="form-group mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="">
                    </div>
                    <div class="form-group mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <input type="text" id="gender" name="gender" class="form-control" placeholder="">
                    </div>
                    <div class="form-group mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <input type="text" id="jurusan" name="jurusan" class="form-control" placeholder="">
                    </div>
                    <div class="form-group mb-3">
                        <label for="bidangminat" class="form-label">Bidang Minat</label>
                        <input type="text" id="bidangminat" name="bidangminat" class="form-control" placeholder="">
                    </div>
                    <div class="form group mb-3">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection