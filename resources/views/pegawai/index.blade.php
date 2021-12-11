@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'DATA PEGAWAI')

@section('konten')
    <a href="/pegawai/tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Pegawai Baru</a>
    <form action="/pegawai/cari" method="GET" class="form-inline" style="float: right;">
        <label for="cari">Cari Pegawai:</label>
        <input class="form-control" type="text" name="cari" placeholder="..." value="{{ old('cari') }}">
        <button class="btn btn-success" type="submit"><i class="fas fa-search"></i></button>
    </form>
    <table class="table table-bordered table-striped table-hover table-responsive-sm">
        <tr>
            <th class="col-sm-1">No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th class="col-sm-3">Opsi</th>
        </tr>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td id="cell-opsi">
                    <a href="/pegawai/detail/{{ $p->pegawai_id }}" class="btn-sm btn-primary"><i class="fas fa-info-circle"></i>
                        Detail</a>
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn-sm btn-warning"><i class="fas fa-edit"></i>
                        Edit</a>
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn-sm btn-danger"><i class="fas fa-trash"></i>
                        Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $pegawai->links() }}
@endsection
