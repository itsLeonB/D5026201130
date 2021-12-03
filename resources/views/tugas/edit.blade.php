@extends('layout.happy')
@section('title', 'Data Tugas')
@section('judulhalaman', 'EDIT DATA TUGAS')

@section('konten')
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <a href="/tugas"> Kembali</a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm">
                @foreach ($tugas as $t)
                    <form action="/tugas/update" method="post">
                        {{ csrf_field() }}

                        <input type="hidden" name="id" value="{{ $t->id }}">
                        <div class="form-group">
                            ID Pegawai <input class="form-control" type="number" required="required" name="id_pegawai"
                                value="{{ $t->id_pegawai }}">
                        </div>
                        <div class="form-group">
                            Tanggal <input class="form-control" type="date" required="required" name="tanggal"
                                value="{{ $t->tanggal }}">
                        </div>
                        <div class="form-group">
                            Nama Tugas <input class="form-control" type="text" required="required" name="nama_tugas"
                                maxlength="50" value="{{ $t->nama_tugas }}">
                        </div>
                        <div class="form-group">
                            Status <input class="form-control" type="text" required="required" name="status"
                                maxlength="1" value="{{ $t->status }}">
                        </div>
                        <input class="btn btn-primary" type="submit" value="Simpan Data">
                    </form>
                @endforeach
            </div>
        </div>
    </div>
@endsection
