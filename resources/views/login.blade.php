@extends('layouts/guestLayout')

@section('content')
    <form class="d-flex flex-column gap-2" method="POST" action={{ route('post-login') }}>

        <div class="d-flex flex-column gap-1 position-absolute top-0 end-0 m-4">
            @error('input_username')
                <div class="alert alert-danger d-flex align-items-center justify-content-center"
                    style="height: max-content; width: max-content;" role="alert">
                    <div>
                        {{ $message }}
                    </div>
                </div>
            @enderror

            @error('input_password')
                <div class="alert alert-danger d-flex align-items-center justify-content-center"
                    style="height: max-content; width: max-content;" role="alert">
                    <div>
                        {{ $message }}
                    </div>
                </div>
            @enderror
        </div>

        @csrf
        <div class="title">
            <h1>Login ke KasirKamu</h1>
            <p>Masukkan Username dan Password untuk melanjutkan ke <span class="fw-bold">KasirKamu</span></p>
        </div>

        <div class="mb-3">
            <label for="input-username" class="form-label">Username</label>
            <input type="text" class="form-control" id="input-username" name="input_username"
                aria-describedby="emailHelp" placeholder="Masukkan username kamu">
        </div>
        <div class="mb-3">
            <label for="input-password" class="form-label">Password</label>
            <input type="password" class="form-control" id="input-password" name="input_password"
                placeholder="Masukkan password kamu">
        </div>

        <button type="submit" class="btn btn-dark w-100 py-2 fw-bold mt-2">Login</button>
    </form>
@endsection
