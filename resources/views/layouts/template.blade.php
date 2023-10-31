<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="/css/index.css" rel="stylesheet" />
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <div class="container-fluid text-center mb-5">
                        <div class="container py-1">
                            <nav class="navbar navbar-expand-lg bg-transparent">
                                <div class="container-fluid">
                                <a class="navbar-brand text-danger fw-bold" href="#"><span>JJ Rentals</span></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav fw-bold mx-auto mb-2 mb-lg-0">
                                        <li>Home</li>
                                        <li>Apartments</li>
                                        <li>Blog</li>
                                        <li>Contact</li>
                                        <li>About</li>  
                                    </ul>
                                </div>
                                </div>
                            </nav>
                        </div>
            </div>
        <!-- Contents goes here -->
        
        @yield('content')

        <div class="container-fluid footer text-white mt-5">
                <div class="row container mx-auto">
                    <div class="col-md-3 py-5">
                        <h5 class="footer-title">About</h5>
                        
                        <ul>
                            <li>Our Story</li>
                            <li>Awards</li>
                            <li>Our Team</li>
                            <li>Career</li>
                        </ul>
                    </div>
                    <div class="col-md-3 py-5">
                    <h5 class="footer-title">About</h5>
                        
                        <ul>
                            <li>Our Story</li>
                            <li>Awards</li>
                            <li>Our Team</li>
                            <li>Career</li>
                        </ul>
                    </div>
                    <div class="col-md-3 py-5">
                    <h5 class="footer-title">About</h5>
                        
                        <ul>
                            <li>Our Story</li>
                            <li>Awards</li>
                            <li>Our Team</li>
                            <li>Career</li>
                        </ul>
                    </div>
                    <div class="col-md-3 py-5">
                    <h5 class="footer-title">About</h5>
                        
                        <ul>
                            <li>Our Story</li>
                            <li>Awards</li>
                            <li>Our Team</li>
                            <li>Career</li>
                        </ul>
                    </div>
                    
                </div>

        </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
