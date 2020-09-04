<head>
    <link rel="stylesheet" href="css/header.css">
</head>
<header class="fixed">
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Newaz</a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form> 
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><i class="fas fa-shopping-cart"></i> Carts</a></li>
                    
                        @if (Route::has('login'))
                            @if (Auth::check())
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <li><a href="{{ url('/login') }}"><i class="fas fa-user"></i> Login</a></li>
                                <li><a href="{{ url('/register') }}"><i class="fas fa-user-plus"></i> Register</a></li>
                            @endif
                        @endif
                </ul>
            </div>
        </div>
        
    </nav> 
</header>
