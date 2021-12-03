@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'DATA PEGAWAI')

@section('konten')
    <a href="/pegawai/tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Pegawai Baru</a>
    <table class="table table-bordered table-striped table-hover table-responsive-sm">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th class="col-sm-2">Opsi</th>
        </tr>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td id="cell-opsi">
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn-sm btn-warning"><i class="fas fa-edit"></i>
                        Edit</a>
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn-sm btn-danger"><i class="fas fa-trash"></i>
                        Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
