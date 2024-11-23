@extends('layouts.mainLayout')

@section('content')
    <form class="container w-50">
        <h1>Edit Barang</h1>

        <div class="d-flex flex-column gap-4">
            <div>
                <label for="gambar" class="form-label">Gambar :</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
            </div>

            <div>
                <label for="nama" class="form-label">Nama Barang :</label>
                <input name="nama" value="Barang Terbaru" type="text" class="form-control" id="nama" placeholder="Masukkan Nama Barang">
            </div>

            <div>
                <label for="kategori" class="form-label">Kategori :</label>
                <select class="form-select" value="1" aria-label="Pilih Kategori" name="kategori" id="kategori">
                    <option selected>Kategori</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div>
                <label for="harga" class="form-label">Harga Barang :</label>
                <input type="number" class="form-control" id="harga" name="harga"
                    placeholder="Masukkan Harga Barang" value="150000">
            </div>

            <button class="btn btn-dark py-2">
                Edit
            </button>
        </div>
    </form>
@endsection
