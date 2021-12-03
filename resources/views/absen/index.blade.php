@extends('layout.happy')
@section('title', 'Data Absen')
@section('judulhalaman', 'DATA ABSEN')

@section('konten')
    <a href="/absen/tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Absen Baru</a>
    <table class="table table-bordered table-striped table-hover table-responsive-sm">
        <tr>
            <th>ID Pegawai</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th class="col-sm-2">Opsi</th>
        </tr>
        @foreach ($absen as $a)
            <tr>
                <td>{{ $a->IDPegawai }}</td>
                <td>{{ $a->Tanggal }}</td>
                <td>{{ $a->Status }}</td>
                <td id="cell-opsi">
                    <a href="/absen/edit/{{ $a->ID }}" class="btn-sm btn-warning"><i class="fas fa-edit"></i>
                        Edit</a>
                    <a href="/absen/hapus/{{ $a->ID }}" class="btn-sm btn-danger"><i class="fas fa-trash"></i>
                        Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
