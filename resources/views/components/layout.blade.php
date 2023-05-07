<html lang="hu">
<head>
    <title>Laravel HomeWork1</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" crossorigin=""/>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-dark">
        <div class="container-fluid text-white-50">
            <a class="navbar-brand" href="/">JosephDev</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/laptops">Laptops</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Posts
                        </a>
                        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/posts">List of a posts</a></li>
                            <li><a class="dropdown-item" href="/categories">List of a category</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/gallery">Gallery Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{ $slot }}
    <footer class="bg-dark py-3 mt-5 footer">
        <div class="container text-light text-center">
            <p class="display-5 mb-3">JosepDev</p>
            <small class="text-white-50">&copy; Copyright by JosepDev. All Rights reserved</small>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" crossorigin=""></script>
<script src="/js/event.js"></script>
</body>
</html>
