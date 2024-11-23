@extends('layouts.mainLayout')

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1>Riwayat Transaksi</h1>
    </div>

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Kuantitas</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <th scope="row">1</th>
                    <td>Makanan Bekas Kemarin</td>
                    <td>Makanan</td>
                    <td>1</td>
                    <td>Rp. 180.000</td>
                    <td>Rp. 180.000</td>
                    <td>27-11-2024</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
