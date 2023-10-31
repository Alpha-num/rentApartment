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

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .line {
                border-left: 2px solid #D3D3D3;
                height: 95%;
                position: absolute;
                left: 50%;
                margin-left: -3px;
                top: 0;
            }
            .product-content .product-image {
                background-color: #fff;
                display: block;
                min-height: 238px;
            }
            .product-content{
                padding: 4px;
                -webkit-box-shadow: 0 1px 4px 0 rgba(0,0,0,0.37);
                box-shadow: 0 1px 4px 0 rgba(0,0,0,0.37);
            }
            .product-image{
                object-fit: cover;
                height: 100%;
            }
            .card .card-text{
                text-align: justify;
                font-size: 14px;
            }
            .input-group{
                max-width: 400px;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid px-0">
            <div class="container-fluid main-section text-white text-center">
                <div class="container py-4 text-white">
                    <nav class="navbar navbar-expand-lg bg-transparent">
                        <div class="container-fluid">
                        <a class="navbar-brand text-white fw-bold" href="#"><span>JJ Rentals</span></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                                <li>Home</li>
                                <li>Apartments</li>
                                <li>Blog</li>
                                <li>Contact</li>  
                            </ul>
                            <div>
                                <span><button class="btn btn-danger">Submit Apartment</button></span>
                            </div>
                        </div>
                        </div>
                    </nav>
                </div>
                <div>
                    <h1 class="mt-5 title">A Perfect Apartment <br> Make a Better Life</h1>
                </div>
                <div class="my-5">
                    <p class="mt-4">We provide an easy way for you to find the perfect apartment you desire</p>
                </div>
                <div class="container">
                    <button class="btn btn-danger">Learn More</button>
                </div>
            </div>
            <div class="container search-container">
                <div class="row text-center">
                    <div class="col py-3">
                        <p class="fw-bold">Enter Keyword</p>
                    </div>
                    <div class="col py-3 pe-5">
                        <p class="fw-bold">Location</p>
                    </div>
                    <div class="col-3 py-3 bg-danger">
                        <div class="text-white">Search</div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container text-center">
                <p class="text-danger fw-bold mb-0">JJ categories</p>
                <h2 class="mb-4 mt-0">Popular Apartments</h2>
            </div>
            <br>
            <!-- 
                Next Section
             -->
            <div class="container mx-auto row text-center">
                <div class="col-md-6">
                    <div class="card product-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                        <img src="/images/architecture-5339245_1920.jpg" class="img-fluid h-100 product-image" />
                                    <div class="line my-2"></div>
                                </div>
                                <div class="col-6 text-start px-4 py-4">
                                    <h5 class="card-title text-success">Self Contain</h5>
                                    <h4 class="product-price">N10,000</h4>
                                    <p class="card-text my-4">A slick self contain with water and constant electricity</p>
                                    <a href="#" class="btn btn-sm btn-danger">Contact Agent</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="card product-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                        <img src="images/living-room-1835923_1920.jpg" class="img-fluid h-100 product-image" />
                                    <div class="line my-2"></div>
                                </div>
                                <div class="col-6 text-start px-4 py-4">
                                    <h5 class="card-title text-success">Self Contain</h5>
                                    <h4 class="product-price">N10,000</h4>
                                    <p class="card-text my-4">A slick self contain with water and constant electricity</p>
                                    <a href="#" class="btn btn-sm btn-danger">Contact Agent</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 my-3">
                <div class="card product-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                        <img src="images/living-room-1835923_1920.jpg" class="img-fluid h-100 product-image" />
                                    <div class="line my-2"></div>
                                </div>
                                <div class="col-6 text-start px-4 py-4">
                                    <h5 class="card-title text-success">Self Contain</h5>
                                    <h4 class="product-price">N10,000</h4>
                                    <p class="card-text my-4">A slick self contain with water and constant electricity</p>
                                    <a href="#" class="btn btn-sm btn-danger">Contact Agent</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 my-3">
                <div class="card product-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                        <img src="images/living-room-1835923_1920.jpg" class="img-fluid h-100 product-image" />
                                    <div class="line my-2"></div>
                                </div>
                                <div class="col-6 text-start px-4 py-4">
                                    <h5 class="card-title text-success">Self Contain</h5>
                                    <h4 class="product-price">N10,000</h4>
                                    <p class="card-text my-4">A slick self contain with water and constant electricity</p>
                                    <a href="#" class="btn btn-sm btn-danger">Contact Agent</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container text-center my-3">
            <p class="mb-0">Opt in with your email address to <br> recieve updates on new apartments.</p>
                <div class="input-group mb-3 mt-2 mx-auto">    
                    <input type="text" class="form-control" placeholder="Enter your email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text text-white bg-success" id="basic-addon2">Submit</span>
                </div>
            </div>
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
