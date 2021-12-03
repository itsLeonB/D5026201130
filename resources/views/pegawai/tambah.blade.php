@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('judulhalaman', 'TAMBAH DATA PEGAWAI')

@section('konten')
    <a href="/pegawai" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
    <form action="/pegawai/store" method="post" style="margin-top: 1%;">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control has-error has-success" pattern="[A-Za-z\s]+"
                placeholder="John Doe" required>
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan:</label>
            <input type="text" name="jabatan" class="form-control has-error has-success" pattern="[a-zA-Z0-9\s]+"
                placeholder="Staff" required>
        </div>
        <div class="form-group">
            <label for="umur">Umur:</label>
            <input type="number" name="umur" class="form-control has-error has-success" placeholder="17" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea name="alamat" class="form-control has-error has-success" placeholder="Jalan Jeruk" required></textarea>
        </div>
        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan Data</button>
    </form>
@endsection
