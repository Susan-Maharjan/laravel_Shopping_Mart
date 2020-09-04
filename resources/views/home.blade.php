{{-- @extends('layouts.master') --}}
@extends('layouts.app')
@section('title')
    Newaz
@endsection
<head>
    <link rel="stylesheet" href="css/menubar.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
@section('menubar')
    <div class="menubar">
        <nav class="navbar navbar-expand ">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav navbar-nav">
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Electronic Accessories</a>
                            <ul class="dropdown-menu">
                            <li><a href="{{ url('category.mobile') }}"> Mobiles</a></li>
                                    {{-- <ul>
                                        <li><a href="#"> Apple</a></li>
                                        <li><a href="#"> Samsung</a></li>
                                        <li><a href="#"> Redmi MI</a></li>
                                        <li><a href="#"> Nokia</a></li>
                                        <li><a href="#"> Oppo</a></li>
                                        <li><a href="#"> Vivo</a></li>        
                                    </ul> --}}
                                <li><a href="#"> Laptops</a></li>
                                <li><a href="#"> Tablets</a></li>
                                <li><a href="#"> Cameras</a></li>
                            </ul>
                        </li>
                        <li><a href="#"> Electronic Gadget</a>
                            <ul class="dropdown-menu">
                                <li><a href="#"> Mobile Accessories</a></li>
                                <li><a href="#"> Laptop Accessories</a></li>
                                <li><a href="#"> Speakers</a></li>
                                <li><a href="#"> Airphones</a></li>
                            </ul>
                        </li>
                        <li><a href="#"> Men's Fashion</a>
                            <ul class="dropdown-menu">
                                <li><a href="#"> Clothing</a></li>
                                <li><a href="#"> Bags</a></li>
                                <li><a href="#"> Shoes</a></li>
                                <li><a href="#"> Accessories</a></li>
                            </ul>
                        </li>
                        <li><a href="#"> Female's Fashion</a>
                            <ul class="dropdown-menu">
                                <li><a href="#"> Clothes</a></li>
                                <li><a href="#"> Shoes</a></li>
                                <li><a href="#"> Bags</a></li>
                                <li><a href="#"> Accessories</a></li>
                            </ul>
                        </li>
                        <li><a href="#"> Babies & Toys</a>
                            <ul class="dropdown-menu">
                                <li><a href="#"> Toys & Games</a></li>
                                <li><a href="#"> Feeding</a></li>
                                <li><a href="#"> Clothing</a></li>
                                <li><a href="#"> Shoes</a></li>
                                <li><a href="#"> Diapers</a></li>
                                <li><a href="#"> Accessories</a></li>
                            </ul>
                        </li>
                        <li><a href="#"> Watch & Accessories</a>
                            <ul class="dropdown-menu">
                                <li><a href="#"> Men's Watch</a></li>
                                <li><a href="#"> Female's Watch</a></li>
                                <li><a href="#"> Kid's Watch</a></li>
                                <li><a href="#"> Spectacles</a></li>
                                <li><a href="#"> Jewellery</a></li>
                            </ul>
                        </li>
                        <li><a href="#"> Sports & Outdoor</a>
                            <ul class="dropdown-menu">
                                <li><a href="#"> Exercies & Fitness</a></li>
                                <li><a href="#"> Sports</a></li>
                                <li><a href="#"> Exercies Clothing</a></li>
                                <li><a href="#"> Water Bottles</a></li>
                                <li><a href="#"> Nutrients</a></li>
                                
                            </ul>
                        </li>
                        <li><a href="#"> Home & Lifestyle</a>
                            <ul class="dropdown-menu">
                                <li><a href="#"> Furniture</a></li>
                                <li><a href="#"> Kitchen & Dinning</a></li>
                                <li><a href="#"> Tools</a></li>
                                <li><a href="#"> Musical Instruments</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
@endsection

@section('content')
    <div class="banner">
        <img src="images/banner.png" class="img-fluid">
    </div>
    <h1>Products</h1><hr>
    <div id="product-box">
    <div class="container" >
        <section class="products">
            <div class="">
            <div class="row">
                <div class="col-md-3 col-sm-6" style="min-height:400px;">
                <div class="thumbnail">
                    <img src="images/bottle.jpg" alt="" height="200px" width="200px">
                    <div class="caption">
                        <h3>Bottle</h3>
                        <p><b>$20</b></p><hr>
                        <div class="clearfix">
                            <a href="#"><i class="fa fa-edit"></i> View Details</a>
                            <a href="#" class="btn btn-success pull-right" role="button"><i class='fa fa-shopping-cart'></i> Add to Cart</a>
                        </div>
                    </div>
                </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                    <img src="images/product5.jpg" alt="" height="200px" width="200px">
                    <div class="caption">
                        <h3>Dress</h3>
                        <p><b>$20</b></p><hr>
                        <div class="clearfix">
                            <a href="#"><i class="fa fa-edit"></i> View Details</a>
                            <a href="#" class="btn btn-success pull-right" role="button"><i class='fa fa-shopping-cart'></i> Add to Cart</a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6" style="min-height:400px;">
                    <div class="thumbnail">
                        <img src="images/product2.jpg" alt="..." height="200px" width="200px">
                        <div class="caption">
                            <h3>Shoe</h3>
                            <p><b>$20</b></p><hr>
                            <div class="clearfix">
                                <a href="#"><i class="fa fa-edit"></i> View Details</a>
                                <a href="#" class="btn btn-success pull-right" role="button"><i class='fa fa-shopping-cart'></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6" style="min-height:400px;">
                    <div class="thumbnail">
                        <img src="images/product3.jpg" alt="" height="200px" width="200px">
                        <div class="caption">
                            <h3>Shoe</h3>
                            <p><b>$20</b></p><hr>
                            <div class="clearfix">
                                <a href="#"><i class="fa fa-edit"></i> View Details</a>
                                <a href="#" class="btn btn-success pull-right" role="button"><i class='fa fa-shopping-cart'></i> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6" style="min-height:400px;">
                    <div class="thumbnail">
                    <img src="images/bottle.jpg" alt="" height="200px" width="200px">
                    <div class="caption">
                        <h3>Bottle</h3>
                        <p><b>$20</b></p><hr>
                        <div class="clearfix">
                            <a href="#"><i class="fa fa-edit"></i> View Details</a>
                            <a href="#" class="btn btn-success pull-right" role="button"><i class='fa fa-shopping-cart'></i> Add to Cart</a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6" style="min-height:400px;">
                    <div class="thumbnail">
                    <img src="images/bottle.jpg" alt="..." height="200px" width="200px">
                    <div class="caption">
                        <h3>Bottle</h3>
                        <p><b>$20</b></p><hr>
                        <div class="clearfix">
                            <a href="#"><i class="fa fa-edit"></i> View Details</a>
                            <a href="#" class="btn btn-success pull-right" role="button"><i class='fa fa-shopping-cart'></i> Add to Cart</a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6" style="min-height:400px;">
                    <div class="thumbnail">
                    <img src="images/bottle.jpg" alt="..." height="200px" width="200px">
                    <div class="caption">
                        <h3>Bottle</h3>
                        <p><b>$20</b></p><hr>
                        <div class="clearfix">
                            <a href="#"><i class="fa fa-edit"></i> View Details</a>
                            <a href="#" class="btn btn-success pull-right" role="button"><i class='fa fa-shopping-cart'></i> Add to Cart</a>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6" style="min-height:400px;">
                    <div class="thumbnail">
                    <img src="images/bottle.jpg" alt="..." height="200px" width="200px">
                    <div class="caption">
                        <h3>Bottle</h3>
                        <p><b>$20</b></p><hr>
                        <div class="clearfix">
                            <a href="#"><i class="fa fa-edit"></i> View Details</a>
                            <a href="#" class="btn btn-success pull-right" role="button"><i class='fa fa-shopping-cart'></i> Add to Cart</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>

@endsection