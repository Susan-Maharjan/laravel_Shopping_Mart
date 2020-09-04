@extends('layouts.master')
@section('title')
    Mobiles
@endsection
<head>
    <link rel="stylesheet" href="css/menubar.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/footer.css">
    <style>
        .mobiles, a:hover{
            display: block;
            color: black;
        }
    </style>
</head>
@section('menubar')
    <div class="menubar">
        <nav class="navbar navbar-expand ">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav navbar-nav">
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Electronic Accessories</a>
                            <ul class="dropdown-menu">
                                <li><a href="#"> Mobiles</a></li>
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
    <h1>Mobiles</h1> <hr>
    <div class="container" >
        <section class="mobiles">
            <div class="row">
                <div class="col-md-2 col-sm-6" style="min-height:400px;"><a href="">
                    <div class="thumbnail">
                        <img src="images/iphone11.jpg" alt="" height="200px" width="200px">
                        <div class="caption">
                            <hr>
                            <h3>Iphone 11</h3>
                            <p><b>$1000</b></p>
                            <a href="#" role="button" class="btn btn-warning"><i class='fa fa-shopping-cart'></i> Add to Cart </a>
                            {{-- <hr>
                            <div class="clearfix">
                                {{-- <a href="#"><i class="fa fa-edit"></i> View Details</a> --}}
                                {{-- <a href="#" class="btn btn-success pull-center" role="button"><i class='fa fa-shopping-cart'></i> Add to Cart </a> --}
                            </div> --}}
                        </div>
                    </div>
                    </a>
                </div>
    
                <div class="col-sm-4 col-md-2">
                    <a href="">
                    <div class="thumbnail">
                    <img src="images/iphone_xr.png" alt="" height="200px" width="200px">
                    <div class="caption">
                        <hr>
                        <h3>Iphone XR</h3>
                        <p><b>$1000</b></p>
                        <a href="#" role="button" class="btn btn-warning"><i class='fa fa-shopping-cart'></i> Add to Cart </a>
                        {{-- <hr><div class="clearfix">
                            <a href="#"><i class="fa fa-edit"></i> View Details</a>
                            <a href="#" class="btn btn-success pull-right" role="button"><i class='fa fa-shopping-cart'></i> Add to Cart</a>
                        </div> --}}
                    </div>
                    </div>
                </a>
                </div>
    
                <div class="col-md-2 col-sm-6" style="min-height:400px;">
                    <a href="">
                    <div class="thumbnail">
                        <img src="images/iphone-8-plus.png" alt="..." height="200px" width="200px">
                        <div class="caption">
                            <hr>
                            <h3>Iphone 8</h3>
                            <p><b>$800</b></p>
                            <a href="#" role="button" class="btn btn-warning"><i class='fa fa-shopping-cart'></i> Add to Cart </a>
                            {{-- <hr>
                            <div class="clearfix">
                                <a href="#"><i class="fa fa-edit"></i> View Details</a>
                                <a href="#" class="btn btn-success pull-right" role="button"><i class='fa fa-shopping-cart'></i> Add to Cart</a>
                            </div> --}}
                        </div>
                    </div>
                </a>
                </div>

                <div class="col-md-2 col-sm-6" style="min-height:400px;">
                    <a href="">
                    <div class="thumbnail">
                      <img src="images/lavaZ92.png" alt="..." height="200px" width="200px">
                      <div class="caption">
                        <hr>  
                        <h3>Lava Z92</h3>
                          <p><b>$280</b></p>
                          <a href="#" role="button" class="btn btn-warning"><i class='fa fa-shopping-cart'></i> Add to Cart </a>
                          {{-- <hr>
                          <div class="clearfix">
                            <a href="#"><i class="fa fa-edit"></i> View Details</a>
                              <a href="#" class="btn btn-success pull-right" role="button"><i class='fa fa-shopping-cart'></i> Add to Cart</a>
                          </div> --}}
                      </div>
                    </div></a>
                  </div>

                  <div class="col-md-2 col-sm-6" style="min-height:400px;">
                    <a href="">
                    <div class="thumbnail">
                      <img src="images/3.png" alt="" height="200px" width="200px">
                      <div class="caption">
                          <hr>
                          <h3>Samsung 9</h3>
                          <p><b>$700</b></p>
                          <a href="#" role="button" class="btn btn-warning"><i class='fa fa-shopping-cart'></i> Add to Cart </a>
                          {{-- <hr>
                          <div class="clearfix">
                            <a href="#"><i class="fa fa-edit"></i> View Details</a>
                              <a href="#" class="btn btn-success pull-right" role="button"><i class='fa fa-shopping-cart'></i> Add to Cart</a>
                          </div> --}}
                      </div>
                    </div>
                    </a>
                  </div>
    
                <div class="col-md-2 col-sm-6" style="min-height:400px;">
                    <a href="">
                    <div class="thumbnail">
                        <img src="images/nokia1.png" alt="" height="200px" width="200px">
                        <div class="caption">
                            <hr>
                            <h3>Nokia</h3>
                            <p><b>$500</b></p>
                            <a href="#" role="button" class="btn btn-warning"><i class='fa fa-shopping-cart'></i> Add to Cart </a>
                            {{-- <hr>
                            <div class="clearfix">
                                <a href="#"><i class="fa fa-edit"></i> View Details</a>
                                <a href="#" class="btn btn-success pull-right" role="button"><i class='fa fa-shopping-cart'></i> Add to Cart</a>
                            </div> --}}
                        </div>
                    </div>
                </a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 col-sm-6" style="min-height:400px;">
                    <a href="">
                    <div class="thumbnail">
                      <img src="images/3.png" alt="" height="200px" width="200px">
                      <div class="caption">
                          <hr>
                          <h3>Samsung 9</h3>
                          <p><b>$700</b></p>
                          <a href="#" role="button" class="btn btn-warning"><i class='fa fa-shopping-cart'></i> Add to Cart </a>
                          {{-- <hr>
                          <div class="clearfix">
                            <a href="#"><i class="fa fa-edit"></i> View Details</a>
                              <a href="#" class="btn btn-success pull-right" role="button"><i class='fa fa-shopping-cart'></i> Add to Cart</a>
                          </div> --}}
                      </div>
                    </div>
                    </a>
                  </div>
    
                  <div class="col-md-2 col-sm-6" style="min-height:400px;">
                    <a href="">
                    <div class="thumbnail">
                      <img src="images/1.png" alt="..." height="200px" width="200px">
                      <div class="caption">
                          <hr>
                          <h3>Alcatel</h3>
                          <p><b>$550</b></p>
                          <a href="#" role="button" class="btn btn-warning"><i class='fa fa-shopping-cart'></i> Add to Cart </a>
                          {{-- <hr>
                          <div class="clearfix">
                            <a href="#"><i class="fa fa-edit"></i> View Details</a>
                              <a href="#" class="btn btn-success pull-right" role="button"><i class='fa fa-shopping-cart'></i> Add to Cart</a>
                          </div> --}}
                      </div>
                    </div>
                </a>
                  </div>
    
                  <div class="col-md-2 col-sm-6" style="min-height:400px;">
                    <a href="">
                    <div class="thumbnail">
                      <img src="images/Huawei-Y7-Pro.png" alt="..." height="200px" width="200px">
                      <div class="caption">
                        <hr>  
                        <h3>Huawei-Y7-Pro</h3>
                          <p><b>$300</b></p>
                          <a href="#" role="button" class="btn btn-warning"><i class='fa fa-shopping-cart'></i> Add to Cart </a>
                          {{-- <hr>
                          <div class="clearfix">
                            <a href="#"><i class="fa fa-edit"></i> View Details</a>
                              <a href="#" class="btn btn-success pull-right" role="button"><i class='fa fa-shopping-cart'></i> Add to Cart</a>
                          </div> --}}
                      </div>
                    </div></a>
                  </div>

                  <div class="col-md-2 col-sm-6" style="min-height:400px;">
                    <a href="">
                    <div class="thumbnail">
                      <img src="images/3.png" alt="" height="200px" width="200px">
                      <div class="caption">
                          <hr>
                          <h3>Samsung 9</h3>
                          <p><b>$700</b></p>
                          <a href="#" role="button" class="btn btn-warning"><i class='fa fa-shopping-cart'></i> Add to Cart </a>
                          {{-- <hr>
                          <div class="clearfix">
                            <a href="#"><i class="fa fa-edit"></i> View Details</a>
                              <a href="#" class="btn btn-success pull-right" role="button"><i class='fa fa-shopping-cart'></i> Add to Cart</a>
                          </div> --}}
                      </div>
                    </div>
                    </a>
                  </div>

                  <div class="col-md-2 col-sm-6" style="min-height:400px;">
                    <a href="">
                    <div class="thumbnail">
                        <img src="images/nokia1.png" alt="" height="200px" width="200px">
                        <div class="caption">
                            <hr>
                            <h3>Nokia</h3>
                            <p><b>$500</b></p>
                            <a href="#" role="button" class="btn btn-warning"><i class='fa fa-shopping-cart'></i> Add to Cart </a>
                            {{-- <hr>
                            <div class="clearfix">
                                <a href="#"><i class="fa fa-edit"></i> View Details</a>
                                <a href="#" class="btn btn-success pull-right" role="button"><i class='fa fa-shopping-cart'></i> Add to Cart</a>
                            </div> --}}
                        </div>
                    </div>
                </a>
                </div>
    
                  <div class="col-md-2 col-sm-6" style="min-height:400px;">
                    <a href="">
                    <div class="thumbnail">
                      <img src="images/vivo.jpg" alt="..." height="200px" width="200px">
                      <div class="caption">
                        <hr>  
                        <h3>Vivo</h3>
                          <p><b>$300</b></p>
                          <a href="#" role="button" class="btn btn-warning"><i class='fa fa-shopping-cart'></i> Add to Cart </a>
                          {{-- <hr>
                          <div class="clearfix">
                            <a href="#"><i class="fa fa-edit"></i> View Details</a>
                              <a href="#" class="btn btn-success pull-right" role="button"><i class='fa fa-shopping-cart'></i> Add to Cart</a>
                          </div> --}}
                      </div>
                    </div></a>
                </div>
        </section>
    </div>   
@endsection
