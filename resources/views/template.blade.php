<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hafidz Putra Dermawan : 5026231211</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <style>
        body {
            background: #f4f7f8;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .jumbotron {
            background: linear-gradient(135deg, #1f3c88, #3c6ff7);
            color: white;
            padding: 2rem 1rem;
            text-align: center;
            margin-bottom: 0;
            border-radius: 0;
        }

        .jumbotron h1 {
            font-size: 2rem;
            font-weight: bold;
        }

        .navbar {
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        }

        .navbar-nav {
            margin: 0 auto;
        }

        .nav-link {
            color: #1f3c88 !important;
            font-weight: 500;
            padding: 10px 15px;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            background-color: #e0e7ff;
            border-radius: 5px;
            color: #1f3c88 !important;
        }

        .container {
            background-color: white;
            margin-top: 30px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
        }

        footer {
            margin-top: 50px;
            text-align: center;
            padding: 20px;
            color: #888;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>

    <div class="jumbotron">
        <h1>5026231211 : Hafidz Putra Dermawan</h1>
    </div>

    <nav class="navbar navbar-expand-sm">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="frontend"><i class="fas fa-code"></i> Front End</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pegawai"><i class="fas fa-user"></i> Pegawai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/kursi"><i class="fas fa-chair"></i> Tugas CRUD</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/eas"><i class="fas fa-pen"></i> EAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/karyawan"><i class="fas fa-users"></i> Latihan 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/counter"><i class="fas fa-chart-bar"></i> Latihan 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/karyawan"><i class="fas fa-database"></i> Latihan 3</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        &copy; {{ date('Y') }} Hafidz Putra Dermawan - All rights reserved.
    </footer>

</body>

</html>
