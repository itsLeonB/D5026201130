@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'DETAIL PEGAWAI')

@section('konten')
    <a href="/pegawai" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
    @foreach ($pegawai as $p)
        <div style="margin-top: 1%;">
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <div class='col-sm-6 input-group'>
                    <span class="input-group-addon">
                        <i class="fas fa-user"></i>
                    </span>
                    <span type="text" name="nama" class="form-control has-error has-success" pattern="[A-Za-z\s]+"
                        required>{{ $p->pegawai_nama }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan:</label>
                <div class='col-sm-6 input-group'>
                    <span class="input-group-addon">
                        <i class="fas fa-user"></i>
                    </span>
                    <span type="text" name="jabatan" class="form-control has-error has-success" pattern="[a-zA-Z0-9\s]+"
                        required>{{ $p->pegawai_jabatan }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="umur">Umur:</label>
                <div class='col-sm-6 input-group'>
                    <span class="input-group-addon">
                        <i class="fas fa-user"></i>
                    </span>
                    <span type="number" name="umur" class="form-control has-error has-success"
                        required>{{ $p->pegawai_umur }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <div class='col-sm-6 input-group'>
                    <span class="input-group-addon">
                        <i class="fas fa-map-marker-alt"></i>
                    </span>
                    <span name="alamat" class="form-control has-error has-success"
                        required>{{ $p->pegawai_alamat }}</span>
                </div>
            </div>
            <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning"><i class="fas fa-edit"></i>
                Edit</a>
        </div>
    @endforeach
@endsection
