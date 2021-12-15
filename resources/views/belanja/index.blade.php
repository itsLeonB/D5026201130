@extends('layout.happy')
@section('title', 'Keranjang Belanja')
@section('judulhalaman', 'KERANJANG BELANJA')

@section('konten')
    <table class="table table-bordered table-striped table-hover table-responsive-sm">
        <tr>
            <th class="col-sm-2">Kode Pembelian</th>
            <th class="col-sm-2">Kode Barang</th>
            <th class="col-sm-2">Jumlah Pembelian</th>
            <th class="col-sm-2">Harga per item</th>
            <th>Total</th>
            <th class="col-sm-2">Action</th>
        </tr>
        @foreach ($belanja as $kb)
            <tr>
                <td>{{ $kb->ID }}</td>
                <td>{{ $kb->KodeBarang }}</td>
                <td>{{ $kb->Jumlah }}</td>
                <td>{{ number_format($kb->Harga) }}</td>
                <td>{{ number_format(($kb->Jumlah)*($kb->Harga)) }}</td>
                <td id="cell-opsi">
                    <a href="/belanja/tambah/" class="btn-sm btn-success"><i class="fas fa-shopping-cart"></i>
                        Beli</a>
                    <a href="/belanja/hapus/{{ $kb->ID }}" class="btn-sm btn-danger"><i class="fas fa-ban"></i>
                        Batal</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $belanja->links() }}
@endsection
