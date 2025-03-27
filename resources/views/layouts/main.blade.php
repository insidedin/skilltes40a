<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- styling sidebar -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .sidebar{
            background-color: #5E90D4;
            min-height: 100vh;
            min-width: 35vh;
            color: white;
        }
        .sidebar .nav-link{
            color: white;
            transition: background-color 0.3s ease;
        }
        .sidebar .nav-link.active, .sidebar .nav-link:hover {
            background-color: white;
            color: black;
        }
        .profile-info img{
            width: 32px;
            height: 32px;
            border-radius: 50%;
            object-fit: cover;
        }
        hr{
            background-color: white;
            height: 4px;
        }
    </style>
</head>
<body>
    <!-- tampilan sidebar -->
    <main class="d-flex">
        <div class="sidebar d-flex flex-column flex-shrink-0 p-3">
            <span class="fs-4">YG Ent Stock</span>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li>
                    <a href="/dashboard" class="px-1 side nav-item nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                        <i class="bi bi-house-fill mx-2"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="/admin" class="px-1 side nav-item nav-link {{ Request::is('admin') ? 'active' : '' }}">
                        <i class="bi bi-person-fill mx-2"></i>Data Admin
                    </a>
                </li>
                <div class="px-3 text-decoration-none"><strong>Data Barang</strong></div>
                <li>
                    <a href="/barang" class="px-4 side nav-item nav-link {{ Request::is('barang') ? 'active' : '' }}">
                        <i class="bi bi-file-bar-graph mx-2"></i>Barang
                    </a>
                </li>
                <li>
                    <a href="/stokmasuk" class="px-4 side nav-item nav-link {{ Request::is('stokmasuk') ? 'active' : '' }}">
                        <i class="bi bi-arrow-right mx-2"></i>Stok Masuk
                    </a>
                </li>
                <li>
                    <a href="/stokkeluar" class="px-4 side nav-item nav-link {{ Request::is('stokkeluar') ? 'active' : '' }}">
                        <i class="bi bi-arrow-left mx-2"></i> Stok Keluar
                    </a>
                </li>
                <li>
                    <a href="/pelanggan" class="px-1 side nav-item nav-link {{ Request::is('pelanggan') ? 'active' : '' }}">
                        <i class="bi bi-house-fill mx-2"></i> Pelanggan
                    </a>
                </li>
                <li>
                    <a href="/suplier" class="px-1 side nav-item nav-link {{ Request::is('suplier') ? 'active' : '' }}">
                        <i class="bi bi-cart4 mx-2"></i> Suplier
                    </a>
                </li>
            </ul>
        </div>

        <!-- ini tampilan konten -->
        <main class="p-4 container">
        @yield('konten')
        </main>
        
    </main>
</body>
</html>