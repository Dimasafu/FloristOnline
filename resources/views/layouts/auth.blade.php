<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Florist Online' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f4f8fb;
        }
        .auth-wrapper {
            min-height: 100vh;
        }
        .auth-image {
            background: url('/images/florist-bg.jpg') center/cover no-repeat;
        }
    </style>
</head>
<body>
<div class="container-fluid auth-wrapper d-flex">
    <div class="col-md-6 d-flex justify-content-center align-items-center">
        @yield('content')
    </div>
    <div class="col-md-6 auth-image d-none d-md-block">
        <!-- Background ilustrasi bunga -->
    </div>
</div>
</body>
</html>
