<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Admin</a>
        </div>
  
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{--  {{Auth::user()->name}} --}} <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="{{url('/')}}">Front End</a></li>
                <li><a href="{{url('/logout')}}">Logout</a></li>
                </ul>
            </li>
            </ul>
        </div>
    </div>
</nav>

