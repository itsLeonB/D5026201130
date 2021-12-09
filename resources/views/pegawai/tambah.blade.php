@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'TAMBAH DATA PEGAWAI')

@section('konten')
    <a href="/pegawai" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
    <form action="/pegawai/store" method="post" style="margin-top: 1%;">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nama">Nama:</label>
            <div class='col-sm-6 input-group'>
                <span class="input-group-addon">
                    <i class="fas fa-user"></i>
                </span>
                <input type="text" name="nama" class="form-control" pattern="[A-Za-z\s]+" placeholder="John Doe" required>
            </div>
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan:</label>
            <div class='col-sm-6 input-group'>
                <span class="input-group-addon">
                    <i class="fas fa-user"></i>
                </span>
                <input type="text" name="jabatan" class="form-control" pattern="[a-zA-Z0-9\s]+" placeholder="Staff"
                    required>
            </div>
        </div>
        <div class="form-group">
            <label for="umur">Umur:</label>
            <div class='col-sm-6 input-group'>
                <span class="input-group-addon">
                    <i class="fas fa-user"></i>
                </span>
                <input type="number" name="umur" class="form-control" placeholder="17" required>
            </div>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <div class='col-sm-6 input-group'>
                <span class="input-group-addon">
                    <i class="fas fa-map-marker-alt"></i>
                </span>
                <textarea name="alamat" class="form-control" placeholder="Jalan Jeruk" required></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan Data</button>
    </form>
@endsection
