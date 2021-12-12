<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerita Rakyat </title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Plain CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/5ca43fb21e.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="header-section pt-3 pb-5">
        <!-- Navigation Bar -->
        <section>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link fw-normal text-white" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-normal text-white" href="#">Stories</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ url('/home') }}" class="btn btn-warning">Home</a>
                                @else

                                    <a href="{{ route('login') }}" class="btn btn-warning">Log in</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn btn-warning">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif

                        </form>
                    </div>
                </div>
            </nav>
        </section>

        <!-- Thumbnail -->
        <section class="container d-flex flex-column flex-sm-row align-items-center p-5">
            <div class="text-white p-3">
                <p class="fw-light fs-6 mb-1">Cerita Rakyat Indonseia</p>
                <h1 class="fw-bold mb-3">1001 Kisah Nusantara</h1>
                <p class="fw-light fs-6">Ragam dan budaya Merupakan Keragaman, serta Keunikan Indonesia dalam setiap
                    daerahnya Indonesia menyimpan sebuah Kisah Yang Mistis dan Indah, Mari sama sama mengentahui cerita rakyat Indonesia, agar kisahnya dapat turun-temurun dijaga .</p>
                {{-- <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal"">Purchase</button> --}}
            </div>
            <div class=" p-3 w-auto">
                    <img class="img-fluid" src="/images/header-bike.png" alt="">
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Honda CBR 300R </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Yep, I post up anything that I think could be a deal breaker. I don't want to waste their time,
                        just as I wouldn't want mine wasted.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">BUY</button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        @yield('content')







    </main>
    <footer class="footer-section text-white">
        <div class="row justify-content-between">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <p>Download Now License</p>
                <p>About Features Pricing Careers Help Privacy Policy</p>
                <p>© 2020 bike. All rights reserved</p>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <p>Get the App</p>
                <div class="d-flex flex-column">
                    <i class="fab fa-google-play mb-3"> Google Play</i>
                    <i class="fab fa-app-store"> App Store</i>
                </div>

            </div>
        </div>

    </footer>

    <!-- js-bundel -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
