@extends('layouts.mainLayout')

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1>Inventaris Barang</h1>

        <a href="/inventaris/tambah-barang" class="btn btn-dark">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-plus"
                viewBox="0 0 16 16">
                <path
                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
            </svg>
            Tambah Barang
        </a>
    </div>

    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <th scope="row">1</th>
                    <td>
                        <img src="https://via.placeholder.com/100" alt="" class="w-25">
                    </td>
                    <td>Makanan Bekas Kemarin</td>
                    <td>Makanan</td>
                    <td>Rp. 180.000</td>
                    <td>
                        <a href="/inventaris/edit-barang" type="button" class="btn btn-primary">Edit</a>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    
@endsection
