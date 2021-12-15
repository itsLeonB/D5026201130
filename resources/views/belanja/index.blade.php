@extends('layout.happy')
@section('title', 'Keranjang Belanja')
@section('judulhalaman', 'KERANJANG BELANJA')

@section('konten')
    <table class="table table-bordered table-striped table-hover table-responsive-sm">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        @foreach ($belanja as $kb)
            <tr>
                <td>{{ $kb->ID }}</td>
                <td>{{ $kb->KodeBarang }}</td>
                <td>{{ $kb->Jumlah }}</td>
                <td>{{ number_format($kb->Harga) }}</td>
                <td>{{ number_format(($kb->Jumlah)*($kb->Harga)) }}</td>
                <td id="cell-opsi">
                    <a href="/belanja/tambah/" class="btn-sm btn-success"><i class="fas fa-edit"></i>
                        Beli</a>
                    <a href="/belanja/hapus/{{ $kb->ID }}" class="btn-sm btn-danger"><i class="fas fa-trash"></i>
                        Batal</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $belanja->links() }}
@endsection
