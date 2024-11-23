@extends('layouts/mainLayout')

@section('content')
    <form class="d-flex flex-column gap-2 w-50 container justify-content-center" style="height: 80vh">
        <div class="title">
            <h1>Pengaturan Akun</h1>
            <p>Ubah Username dan Password</p>
        </div>

        <div class="mb-3">
            <label for="input-username" class="form-label">Username</label>
            <input type="text" class="form-control" id="input-username" name="input_username" aria-describedby="emailHelp"
                placeholder="Masukkan username kamu">
        </div>
        <div class="mb-3">
            <label for="input-password" class="form-label">Password</label>
            <input type="password" class="form-control" id="input-password" name="input_password"
                placeholder="Masukkan password kamu">
        </div>

        <button type="submit" class="btn btn-dark w-100 py-2 fw-bold mt-2">Kirim</button>
    </form>
@endsection
