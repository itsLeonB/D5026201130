@extends('layout.happy')
@section('title', 'Data Beras')
@section('judulhalaman', 'DATA BERAS')

@section('konten')
    <a href="/beras/tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data Beras</a>
    <form action="/beras/cari" method="GET" class="form-inline" style="float: right;">
        <label for="cari">Cari Data Beras:</label>
        <input class="form-control" type="text" name="cari" placeholder="..." value="{{ old('cari') }}">
        <button class="btn btn-success" type="submit">CARI</button>
    </form>
    <table class="table table-bordered table-striped table-hover table-responsive-sm">
        <tr>
            <th class="col-sm-1">No</th>
            <th>Merk</th>
            <th class="col-sm-1">Ketersediaan</th>
            <th class="col-sm-3">Opsi</th>
        </tr>
        @foreach ($beras as $b)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $b->merkberas }}</td>
                <td>{{ $b->tersedia }}</td>
                <td id="cell-opsi">
                    <a href="/beras/detail/{{ $b->kodeberas }}" class="btn-sm btn-primary"><i class="fas fa-edit"></i>
                        Detail</a>
                    <a href="/beras/edit/{{ $b->kodeberas }}" class="btn-sm btn-warning"><i class="fas fa-edit"></i>
                        Edit</a>
                    <a href="/beras/hapus/{{ $b->kodeberas }}" class="btn-sm btn-danger"><i class="fas fa-trash"></i>
                        Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $beras->links() }}
@endsection
