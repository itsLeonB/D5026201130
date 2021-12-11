@extends('layout.happy')
@section('title', 'Data Absen')
@section('judulhalaman', 'DATA ABSEN')

@section('konten')
    <a href="/absen/tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Absen Baru</a>
    </form>
    <table class="table table-bordered table-striped table-hover table-responsive-sm">
        <tr>
            <th class="col-sm-1">No</th>
            <th>Nama Pegawai</th>
            <th>Tanggal</th>
            <th class="col-sm-2">Status</th>
            <th class="col-sm-2">Opsi</th>
        </tr>
        @foreach ($absen as $a)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $a->pegawai_nama }}</td>
                <td>{{ $a->Tanggal }}</td>
                @if ($a->Status === 'H') <td style="color: green;">Hadir</td>
                @else <td style="color: red;">Tidak Hadir</td>
                @endif
                <td id="cell-opsi">
                    <a href="/absen/edit/{{ $a->ID }}" class="btn-sm btn-warning"><i class="fas fa-edit"></i>
                        Edit</a>
                    <a href="/absen/hapus/{{ $a->ID }}" class="btn-sm btn-danger"><i class="fas fa-trash"></i>
                        Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $absen->links() }}
@endsection
