<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Rizix Toys')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f7f8fc;
            color: #20233a;
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 25px;
        }

        .brand-dot {
            color: #ff6b6b;
        }

        .hero {
            background: linear-gradient(125deg, #252b61, #565bd8);
            color: white;
            border-radius: 25px;
            padding: 42px;
        }

        .toy-card {
            border: none;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(30, 35, 80, .08);
            height: 100%;
            transition: .2s;
        }

        .toy-card:hover {
            transform: translateY(-5px);
        }

        .toy-img {
            width: 100%;
            height: 210px;
            object-fit: cover;
            background: #eef0fa;
        }

        .price {
            color: #5257cf;
            font-size: 20px;
            font-weight: 800;
        }

        .category-pill {
            background: #f0f0ff;
            color: #5156c8;
            padding: 6px 12px;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 600;
        }

        .btn-main {
            background: #5257cf;
            color: white;
            border-radius: 10px;
            font-weight: 600;
        }

        .btn-main:hover {
            background: #3e43b6;
            color: white;
        }

        footer {
            color: #777b91;
        }

        @media (max-width: 576px) {
            .hero {
                padding: 25px;
            }

            .toy-img {
                height: 185px;
            }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-white border-bottom sticky-top">
    <div class="container py-2">
        <a class="navbar-brand" href="{{ route('toys.index') }}">
            Rizix<span class="brand-dot">Toys.</span>
        </a>

        <span class="text-secondary small">
            Teman bermain, teman tumbuh
        </span>
    </div>
</nav>

<main class="container py-4 py-lg-5">
    @yield('content')
</main>

<footer class="container text-center small pb-4">
    <div class="border-top pt-3">
        © {{ date('Y') }} Rizix Toys |
        Muhamad Rizix - 251011701130
    </div>
</footer>

</body>
</html>