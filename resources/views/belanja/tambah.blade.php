@extends('layout.happy')
@section('title', 'Keranjang Belanja')
@section('judulhalaman', 'TAMBAH BARANG')

@section('konten')
    <a href="/belanja" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
    <form action="/belanja/store" method="post" style="margin-top: 1%;">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="KodeBarang">Kode Barang:</label>
            <div class='col-sm-6 input-group'>
                <span class="input-group-addon">
                    <i class="fas fa-user"></i>
                </span>
                <input type="text" name="KodeBarang" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="Jumlah">Jumlah Pembelian:</label>
            <div class='col-sm-6 input-group'>
                <span class="input-group-addon">
                    <i class="fas fa-user"></i>
                </span>
                <input type="text" name="Jumlah" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="Harga">Harga per item:</label>
            <div class='col-sm-6 input-group'>
                <span class="input-group-addon">
                    <i class="fas fa-user"></i>
                </span>
                <input type="text" name="Harga" class="form-control" required>
            </div>
        </div>
        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan Data</button>
    </form>
@endsection
