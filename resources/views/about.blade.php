<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <title>Laravel Primi Passi</title>
</head>

<body class="bg-dark">
    <div class="container vh-100 justify-content-center d-flex align-items-center">

        <div class="row row-cols-2 justify-content-center d-flex align-items-center">
            <div class="text-center">
                <i class="fab fa-laravel fa-8x text-danger"></i>
            </div>
            <div class="col-12 text-center text-white mb-4 position-relative">
                <h1 class="text-center">
                    Hello World!
                </h1>
                <h1 class="laravel-absolute position-absolute translate-middle start-50 text-danger">
                    in Laravel!
                </h1>
            </div>
            <div class="col mb-3">
                <a href="/" class="text-decoration-none">
                    <div class="card border-0">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0 fw-bold">HOMEPAGE</h5>
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col mb-3">
                <a href="/contacts" class="text-decoration-none">
                    <div class="card border-0">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0 fw-bold">CONTACTS</h5>
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>