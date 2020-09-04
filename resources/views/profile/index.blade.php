<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<div id="container">
	    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Blog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            	<form class="form-inline">
			    	<button class="btn btn-sm btn-outline-secondary" type="button">Home</button>


			    <div class="p-3 bg-light">
			    	<button class="btn btn-sm btn-outline-secondary" type="button">About Us</button>
				</div>
				</form>
				
				<form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>

            </div>
        </nav>

        <div id="main">

        	<div class="jumbotron jumbotron-fluid">
			  	<div class="container">
                    <img src="images/product1.jpg" alt="" class="rounded-circle">
                    {{-- @foreach ($user as $key => $value) --}}
                        {{-- <h1 class="display-4">UserName: {{ $value->username }}</h1>
                        <p class="lead">First Name: {{ $value->firstname }}</p>
                        <p class="lead">Last Name: {{ $value->lastname }}</p>
                        <p class="lead">Address: {{ $value->address }}</p>
                        <p class="lead">Email: {{ $value->email }}</p>
                        <p class="lead">Contact: {{ $value->contact }}</p> 
                    @endforeach --}}
                    
                    <h1 class="display-4">UserName: </h1>
			    	<p class="lead">First Name: </p>
			    	<p class="lead">Last Name: </p>
			    	<p class="lead">Address: </p>
			    	<p class="lead">Email: </p>
			    	<p class="lead">Contact: </p>
			  	</div>

        </div>
    </div>
</body>
</html>
{{-- 
@foreach($user as $key => $value)        
<tr>            
    <td>{{ $value->id }}</td>            
    <td>{{ $value->name }}</td>            
    <td> 
        <a class="btn btn-small btn-success" href="{{ URL::to('batch/' . $value->id) }}">Show</a>  
        <a class="btn btn-small btn-info" href="{{ URL::to('batch/' . $value->id . '/edit') }}">Edit this Nerd</a> 
    </td> 
</tr>    
@endforeach --}}
