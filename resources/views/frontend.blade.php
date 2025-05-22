<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Tugas Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fdfdfd;
            font-family: 'Segoe UI', sans-serif;
        }
        .card-header {
            font-weight: bold;
            font-size: 1.1rem;
        }
        .list-group-item {
            border-left: 4px solid #28a745;
        }
        .btn-custom {
            background-color: #28a745;
            color: white;
        }
        .btn-custom:hover {
            background-color: #218838;
            color: white;
        }
        .icon-link {
            margin-right: 8px;
            color: #28a745;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <h2 class="text-center mb-5">📚 Daftar Tugas Kuliah</h2>

    @php
        $pertemuan = [
            [
                'judul' => '13 Maret 2025',
                'tugas' => [
                    ['judul' => 'First Commit', 'url' => 'pertama'],
                    ['judul' => 'Bootstrap 1', 'url' => 'bootstrap1'],
                ],
            ],
            [
                'judul' => '20 Maret 2025',
                'tugas' => [
                    ['judul' => 'Template 1', 'url' => 'template1']
                ],
            ],
            [
                'judul' => '16 April 2025',
                'tugas' => [
                    ['judul' => 'Tugas Linktree', 'url' => 'tugaslinktree'],
                    ['judul' => 'Latihan Layout', 'url' => 'LatihanLayout'],
                ],
            ],
            [
                'judul' => '17 April 2025',
                'tugas' => [
                    ['judul' => 'Pertemuan 7 - JS1', 'url' => 'js1'],
                    ['judul' => 'Pertemuan 7 - Validasi1', 'url' => 'validasi1']
                ],
            ],
            [
                'judul' => '8 Maret 2025',
                'tugas' => [
                    ['judul' => 'ETS', 'url' => 'index']
                ],
            ],
        ];
    @endphp

    <div class="row">
        @foreach ($pertemuan as $p)
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-success text-white">
                        📅 {{ $p['judul'] }}
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach ($p['tugas'] as $tugas)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span><span class="icon-link">🔗</span>{{ $tugas['judul'] }}</span>
                                <a href="{{ url($tugas['url']) }}" class="btn btn-sm btn-custom" target="_blank">Lihat</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
    </div>

</div>

</body>
</html>
