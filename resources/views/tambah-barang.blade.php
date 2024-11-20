<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyKasir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark text-light sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-light" href="/">MyKasir</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/inventaris">Inventaris</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/kasir">Kasir</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-light dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Setting
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <form class="container my-4 w-50">
        <h1>Tambah Barang</h1>

        <div class="d-flex flex-column gap-4">
            <div>
                <label for="gambar" class="form-label">Gambar :</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
            </div>

            <div>
                <label for="nama" class="form-label">Nama Barang :</label>
                <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukkan Nama Barang">
            </div>

            <div>
                <label for="kategori" class="form-label">Kategori :</label>
                <select class="form-select" aria-label="Pilih Kategori" name="kategori" id="kategori">
                    <option selected>Kategori</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div>
                <label for="harga" class="form-label">Harga Barang :</label>
                <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga Barang">
            </div>

            <button class="btn btn-dark py-2">
                Tambah
            </button>
        </div>

    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
