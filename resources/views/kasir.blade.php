@extends('layouts.mainLayout')

@section('content')
    <h1>Kasir</h1>
    <div class="row">
        <div class="col-8 border border-2 py-3">
            <h2 class="">Menu Makanan</h2>
            <hr>

            <div class="">
                <h3>Makanan :</h3>
                <div class="d-flex flex-wrap gap-2">
                    <img src="https://via.placeholder.com/100" class="img rounded-4" alt="">
                    <img src="https://via.placeholder.com/100" class="img rounded-4" alt="">
                    <img src="https://via.placeholder.com/100" class="img rounded-4" alt="">
                    <img src="https://via.placeholder.com/100" class="img rounded-4" alt="">
                    <img src="https://via.placeholder.com/100" class="img rounded-4" alt="">
                </div>
            </div>

            <hr>

            <div class="my-2">
                <h3>Minuman :</h3>
                <div class="d-flex flex-wrap gap-2">
                    <img src="https://via.placeholder.com/100" class="img rounded-4" alt="">
                    <img src="https://via.placeholder.com/100" class="img rounded-4" alt="">
                    <img src="https://via.placeholder.com/100" class="img rounded-4" alt="">
                    <img src="https://via.placeholder.com/100" class="img rounded-4" alt="">
                    <img src="https://via.placeholder.com/100" class="img rounded-4" alt="">
                </div>
            </div>
        </div>

        <div class="col border border-2 ms-3 py-3">
            <h2 class="">Detail Transaksi</h2>

            <hr>

            <table class="table">
                <thead>
                    <tr>
                        <th>Barang</th>
                        <th>Qty.</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <td>Rawon</td>
                        <td>2</td>
                        <td>40.000</td>
                    </tr>
                    <tr>
                        <td>Rawon</td>
                        <td>2</td>
                        <td>40.000</td>
                    </tr>
                    <tr>
                        <td>Rawon</td>
                        <td>2</td>
                        <td>40.000</td>
                    </tr>
                </tbody>
            </table>

            <hr>

            <div class="d-flex flex-column gap-4">
                <div>
                    <label for="jmluang" class="form-label">Jumlah uang :</label>
                    <input type="number" class="form-control" id="jmluang">
                </div>


                <div>
                    <label for="jmluang" class="form-label">Keterangan :</label>
                    <textarea type="text" class="form-control" id="jmluang"></textarea>
                </div>


                <div class="d-flex justify-content-between align-items-center">
                    <div class="">
                        <p class="m-0">Total Harga</p>
                        <h5 class="m-0">Rp. 127.000</h5>
                    </div>

                    <button class="btn btn-dark px-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                            <path
                                d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z" />
                        </svg>Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection
