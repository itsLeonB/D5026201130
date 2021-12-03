@extends('layout.happy')
@section('title', 'Data Tugas')
@section('judulhalaman', 'DATA TUGAS')

@section('konten')
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <a href="/tugas/tambah"> + Tambah tugas baru</a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm">
                <table class="table table-bordered table-striped table-hover table-responsive-sm">
                    <tr>
                        <th>ID Pegawai</th>
                        <th>Tanggal</th>
                        <th>Nama Tugas</th>
                        <th>Status</th>
                        <th>Opsi</th>
                    </tr>
                    @foreach ($tugas as $t)
                        <tr>
                            <td>{{ $t->id_pegawai }}</td>
                            <td>{{ $t->tanggal }}</td>
                            <td>{{ $t->nama_tugas }}</td>
                            <td>{{ $t->status }}</td>
                            <td>
                                <a href="/tugas/edit/{{ $t->id }}">Edit</a>
                                |
                                <a href="/tugas/hapus/{{ $t->id }}">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
