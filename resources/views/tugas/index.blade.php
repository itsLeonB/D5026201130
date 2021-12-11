@extends('layout.happy')
@section('title', 'Data Tugas')
@section('judulhalaman', 'DATA TUGAS')

@section('konten')
    <a href="/tugas/tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Tugas Baru</a>
    <table class="table table-bordered table-striped table-hover table-responsive-sm">
        <tr>
            <th class="col-sm-1">No</th>
            <th>Nama Pegawai</th>
            <th class="col-sm-2">Tanggal</th>
            <th>Nama Tugas</th>
            <th class="col-sm-2">Status</th>
            <th class="col-sm-2">Opsi</th>
        </tr>
        @foreach ($tugas as $t)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $t->pegawai_nama }}</td>
                <td>{{ $t->tanggal }}</td>
                <td>{{ $t->nama_tugas }}</td>
                @if ($t->status === 'Y') <td style="color: green;">Selesai</td>
                @else <td style="color: red;">Belum Selesai</td>
                @endif
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
