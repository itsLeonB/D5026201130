@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'EDIT DATA PEGAWAI')

@section('konten')
    @foreach ($pegawai as $p)
        <a href="/pegawai/detail/{{ $p->pegawai_id }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
        <form action="/pegawai/update" method="post" style="margin-top: 1%;">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <div class='col-sm-6 input-group'>
                    <span class="input-group-addon">
                        <i class="fas fa-user"></i>
                    </span>
                    <input type="text" name="nama" class="form-control" pattern="[A-Za-z\s]+" required
                        value="{{ $p->pegawai_nama }}">
                </div>
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan:</label>
                <div class='col-sm-6 input-group'>
                    <span class="input-group-addon">
                        <i class="fas fa-user"></i>
                    </span>
                    <input type="text" name="jabatan" class="form-control" pattern="[a-zA-Z0-9\s]+" required
                        value="{{ $p->pegawai_jabatan }}">
                </div>
            </div>
            <div class="form-group">
                <label for="umur">Umur:</label>
                <div class='col-sm-6 input-group'>
                    <span class="input-group-addon">
                        <i class="fas fa-user"></i>
                    </span>
                    <input type="number" name="umur" class="form-control" required value="{{ $p->pegawai_umur }}">
                </div>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <div class='col-sm-6 input-group'>
                    <span class="input-group-addon">
                        <i class="fas fa-map-marker-alt"></i>
                    </span>
                    <textarea name="alamat" class="form-control" required>{{ $p->pegawai_alamat }}</textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan Data</button>
        </form>
    @endforeach
@endsection
