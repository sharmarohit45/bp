<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bechoproperty</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <!-- CSS -->
    <link href="/Images/Property/logo-2.png" rel="icon">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
</head>

<body class="font-sans antialiased">
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
            <div class="container-fluid">
                <!-- Logo on the left -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('/Images/Property/logo.png') }}" alt="Logo" style="height: 70px;" />
                </a>

                <!-- Toggle button for mobile view -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar links -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                    <ul class="navbar-nav mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/buy') }}">Buy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/properties/search') }}">Rent</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="{{ url('/all-properties') }}">Property</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="{{ url('/leads') }}">Lead</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="{{ url('/our-packages') }}">Packages</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ url('/agents') }}">Agents</a>
                        </li> --}}
                    </ul>
                    <div class="text-end ms-3">
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a href="{{ url('/redirect') }}">

                                        <button type="button" class="btn btn-outline-light me-2"> Dashboard</button>
                                    </a>
                                @else
                                    <a style="text-decoration: none" href="{{ route('login') }}">
                                        <button type="button" class="btn btn-outline-light me-2">Login</button>
                                    </a>

                                   @if (Route::has('register'))
                                        <a href="{{ route('register') }}">
                                            <button type="button" class="btn btn-outline-light me-2">Register</button>
                                        </a>
                                    @endif 
                                @endauth
                            </nav>
                        @endif
                        <!-- Uncomment the following line to enable the Sign-up button -->
                        {{-- <a href="{{ url('/signup') }}">
                        <button type="button" class="btn btn-warning">Sign-up</button>
                    </a> --}}
                    </div>
                </div>
            </div>
        </nav>
    </header>
