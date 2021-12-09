@extends('layout.happy')
@section('title', 'Data Tugas')
@section('judulhalaman', 'DATA TUGAS')

@section('konten')
    <a href="/tugas/tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Tugas Baru</a>
    <table class="table table-bordered table-striped table-hover table-responsive-sm">
        <tr>
            <th>ID Pegawai</th>
            <th>Tanggal</th>
            <th>Nama Tugas</th>
            <th>Status</th>
            <th class="col-sm-2">Opsi</th>
        </tr>
        @foreach ($tugas as $t)
            <tr>
                <td>{{ $t->id_pegawai }}</td>
                <td>{{ $t->tanggal }}</td>
                <td>{{ $t->nama_tugas }}</td>
                <td>{{ $t->status }}</td>
                <td id="cell-opsi">
                    <a href="/tugas/edit/{{ $t->id }}" class="btn-sm btn-warning"><i class="fas fa-edit"></i>
                        Edit</a>
                    <a href="/tugas/hapus/{{ $t->id }}" class="btn-sm btn-danger"><i class="fas fa-trash"></i>
                        Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $tugas->links() }}
@endsection
