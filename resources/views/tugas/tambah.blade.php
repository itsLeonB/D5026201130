@extends('layout.happy')
@section('title', 'Data Tugas')
@section('judulhalaman', 'TAMBAH DATA TUGAS')

@section('konten')
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <a href="/tugas"> Kembali</a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm">
                <form action="/tugas/store" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        ID Pegawai <input class="form-control" type="number" name="id_pegawai" required="required">
                    </div>
                    <div class="form-group">
                        Tanggal <input class="form-control" type="date" name="tanggal" required="required">
                    </div>
                    <div class="form-group">
                        Nama Tugas <input class="form-control" type="text" name="nama_tugas" required="required"
                            maxlength="50">
                    </div>
                    <div class="form-group">
                        Status <input class="form-control" type="text" name="status" required="required"
                            maxlength="1">
                    </div>
                    <input class="btn btn-primary" type="submit" value="Simpan Data">
                </form>
            </div>
        </div>
    </div>
@endsection
