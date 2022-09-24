<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

       
        <title>@yield('title', 'Vini Store')</title>
        <link rel = "icon" href ="{{asset('img/store/vs.png')}}" type = "image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">
        <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
        <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/slick-theme.css')}}">
        <link rel="stylesheet" href="{{asset('css/slick-theme.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/slick.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/templatemo.css')}}">
        <link rel="stylesheet" href="{{asset('css/templatemo.min.css')}}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
                <div class="container text-light">
                    <div class="w-100 d-flex justify-content-between">
                        <div>
                            <i class="fa fa-envelope mx-2"></i>
                            <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:vperes505@gmail.com">vperes505@gmail.com</a>
                            <i class="fa fa-phone mx-2"></i>
                            <a class="navbar-sm-brand text-light text-decoration-none" href="https://wa.me/+5518981760116">+55 (18) 98176-0116 </a>
                        </div>
                        <div>
                            <a class="text-light" href="http://facebook.com/" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                            <a class="text-light" href="https://www.instagram.com/euperesvinix/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                            <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                            <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <nav class="navbar navbar-expand-lg navbar-light shadow">
                    <div class="container d-flex justify-content-between align-items-center">
            
                        <a href="{{Route('index')}}">
                            <img src="{{asset('img/store/logovini.png')}}" alt="logo" height="70px">
                        </a>
            
                        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
            
                        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                            <div class="flex-fill">
                                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{Route('index')}}">Home</a>
                                    </li> 
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{Route('products')}}">Shopping</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{Route('about')}}">Sobre Nós</a>
                                    </li>
                                   
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{Route('contact')}}">Contato</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="navbar align-self-center d-flex">
                                <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                                        <div class="input-group-text">
                                            <i class="fa fa-fw fa-search"></i>
                                        </div>
                                    </div>
                                </div>
                                <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                                    <i class="fa fa-fw fa-search text-dark mr-2"></i>
                                </a>
                                <a class="nav-icon position-relative text-decoration-none" href="{{route('cart')}}">
                                    <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                                    <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                                </a>
                                <a class="nav-icon position-relative text-decoration-none" href="{{Route('dashboard')}}">
                                    <i class="fa fa-fw fa-user text-dark mr-3"></i>
                                    <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
                                </a>
                            </div>
                        </div>
            
                    </div>
                </nav>
            </header>

            <!-- Page Content -->
            <div class="content">
                @yield('content')
            </div>

            <footer class="bg-dark" id="tempaltemo_footer">
                <div class="container">
                    <div class="row">
        
                        <div class="col-md-4 pt-5">
                            <h2 class="h2 text-secondary border-bottom pb-3 border-light logo">Vini Store</h2>
                            <ul class="list-unstyled text-light footer-link-list">
                                <li>
                                    <i class="fas fa-map-marker-alt fa-fw"></i>
                                    <a href="https://goo.gl/maps/pQpGh7s2vyoJKdZT6">Praça do Centenário, Presidente Prudente, BR</a>
                                </li>
                                <li>
                                    <i class="fa fa-phone fa-fw"></i>
                                    <a class="text-decoration-none" href="https://wa.me/+5518981760116">+55 (18) 98176-0116 </a>
                                </li>
                                <li>
                                    <i class="fa fa-envelope fa-fw"></i>
                                    <a class="text-decoration-none" href="mailto:vperes505@gmail.com">vperes505@gmail.com</a>
                                </li>
                            </ul>
                        </div>
        
                        <div class="col-md-4 pt-5">
                            <h2 class="h2 text-light border-bottom pb-3 border-light">Departamentos</h2>
                            <ul class="list-unstyled text-light footer-link-list">
                                <li><a class="text-decoration-none" href="#">Luxury</a></li>
                                <li><a class="text-decoration-none" href="#">Sport Wear</a></li>
                                <li><a class="text-decoration-none" href="#">Men's Shoes</a></li>
                                <li><a class="text-decoration-none" href="#">Women's Shoes</a></li>
                                <li><a class="text-decoration-none" href="#">Popular Dress</a></li>
                                <li><a class="text-decoration-none" href="#">Gym Accessories</a></li>
                                <li><a class="text-decoration-none" href="#">Sport Shoes</a></li>
                            </ul>
                        </div>
        
                        <div class="col-md-4 pt-5">
                            <h2 class="h2 text-light border-bottom pb-3 border-light"> Informações </h2>
                            <ul class="list-unstyled text-light footer-link-list">
                                <li><a class="text-decoration-none" href="{{Route('index')}}"> Home </a></li>
                                <li><a class="text-decoration-none" href="{{Route('about')}}"> Nossa Loja </a></li>
                                <li><a class="text-decoration-none" href="{{Route('contact')}}">Fale Conosco</a></li>
                            </ul>
                        </div>
        
                    </div>
        
                    <div class="row text-light mb-4">
                        <hr>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-8">
                                    <ul class="list-inline  footer-icons">
                                        <li class="list-inline-item border border-light rounded-circle text-center">
                                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                                        </li>
                                        <li class="list-inline-item border border-light rounded-circle text-center">
                                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/euperesvinix/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                                        </li>
                                        <li class="list-inline-item border border-light rounded-circle text-center">
                                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                                        </li>
                                        <li class="list-inline-item border border-light rounded-circle text-center">
                                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                                        </li>
                                    </ul>
                                    
                                </div>
                                <div class="col-md-4">
                                    <img src="{{asset('img/store/siteseguro.png')}}"alt="secure site" width="90%" height="90%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="w-100 bg-black py-3">
                    <div class="container">
                        <div class="row pt-2">
                            <div class="col-12">
                                <p class="text-left text-light">
                                     2022 
                                    | Designed by @<a rel="sponsored" href="https://www.instagram.com/euperesvinix/" target="_blank">Vinícius Peres</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
            <script src="{{asset('js/custom.js')}}"></script>
            <script src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
            <script src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
            <script src="{{asset('js/slick.min.js')}}"></script>
            <script src="{{asset('js/templatemo.js')}}"></script>
            <script src="{{asset('js/templatemo.min.js')}}"></script>
            
        </div>
    </body>
</html>
