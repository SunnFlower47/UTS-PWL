<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

        body.dark-mode input,
        body.dark-mode select,
        body.dark-mode textarea,
        body.dark-mode .form-control {
            background-color: #333;
            color: #fff;
            border: 1px solid #444;
        }

        body.dark-mode .form-control:focus {
            background-color: #444;
            color: #fff;
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
        }

        body.dark-mode label {
            color: #ccc;
        }

        body.dark-mode {
            background-color: #121212;
            color: #e0e0e0;
        }
        .navbar.dark-mode, .dropdown-menu.dark-mode {
            background-color: #1f1f1f !important;
        }
        .table-dark-mode {
            background-color: #1e1e1e;
            color: #fff;
        }
        .table-dark-mode th,
        .table-dark-mode td {
            background-color: #2c2c2c !important;
            color: #fff !important;
            border-color: #444 !important;
        }
        .navbar-dark-mode {
            background-color: #1f1f1f !important;
        }
        body.dark-mode .card {
        background-color: #1f1f1f;
        color: #f1f1f1;
        border: 1px solid #444;
    }

        body.dark-mode .card-body p {
            color: #ddd;
        }

        /* Optional: tombol juga biar cocok di dark mode */
        body.dark-mode .btn-secondary {
            background-color: #444;
            border-color: #666;
            color: #eee;
        }

        body.dark-mode .btn-secondary:hover {
            background-color: #555;
        }

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('jadwal_kuliah.index') }}">Jadwal Kuliah</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigasi">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('jadwal_kuliah.index') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Jadwal Ujian</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Lainnya
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Setings</a></li>
                        <li><a class="dropdown-item" href="#">logout</a></li>
                    </ul>
                </li>
                <li class="nav-item mt-1">
                    <button class="btn btn-sm btn-outline-light ms-2" onclick="toggleDarkMode()">🌓 Dark Mode</button>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="py-4 container" id="main-content">
    @yield('content')
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function toggleDarkMode() {
    document.body.classList.toggle('dark-mode');
    document.querySelector('.navbar').classList.toggle('navbar-dark-mode');
    document.getElementById('main-content').classList.toggle('table-dark-mode');

    document.querySelectorAll('.jadwal-table').forEach(table => {
        table.classList.toggle('table-dark-mode');
    });

    if (document.body.classList.contains('dark-mode')) {
        localStorage.setItem('theme', 'dark');
    } else {
        localStorage.setItem('theme', 'light');
    }
}

if (localStorage.getItem('theme') === 'dark') {
    toggleDarkMode();
}


</script>
</body>
</html>
