    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <title>{{ $title ?? 'DEL-LEATS' }} — Institut Teknologi Del</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet">
        <style>
            .navbar-del { background-color: #166534; }
            .btn-del { background-color:  #FEF9C3; teks teks #854D0E; }
            .btn-del:hover { background-color:  #FEE2E2; color:  #991B1B; }
        </style>
    </head>
    <body class="bg-light">
        <nav class="navbar navbar-expand-lg navbar-dark navbar-del shadow-sm mb-4">
            <div class="container">
                <a class="navbar-brand fw-bold" href="{{ route('category.index') }}">DEL-LEATS
    category</a>
            </div>
        </nav>
        <div class="container pb-5">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                </div>
            @endif
            {{ $slot }}
        </div>
    </body>
    </html>

