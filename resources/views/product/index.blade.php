@extends('admin.admin')

@section('content')
    <head>    
        <title>Products</title>    
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"> 
    </head> 
    <body> 
        <div class="container col-md-10"> 
            <a href="{{ URL::to('product/create') }}" class="btn btn-success pull-right"><i class="fas fa-plus"></i> Add Products</a>
{{--             
            <nav class="navbar navbar-inverse">    
                <div class="navbar-header">        
                    <a class="navbar-brand" href="#">Newaz</a>    
                </div>    
                <ul class="nav navbar-nav">        
                    <li><a href="{{ URL::to('product') }}">View All Products</a></li>        
                    <li><a href="{{ URL::to('product/create') }}">Create Product</a>    
                    </ul> 
            </nav>  --}}
            
                <h1>All Products</h1> 
 
            <!-- will be used to show any messages --> 
            @if (Session::has('message'))    
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif 
            
            <table class="table table-striped table-bordered">    
                <thead>        
                    <tr style="font-weight:bold; text-align:center;">            
                        <td>ID</td>            
                        <td>Name</td> 
                        <td>Image</td>           
                        <td>Price</td>
                        <td>Description</td>
                        <td>Brand</td>
                        <td>Stock</td>        
                    </tr>    
                </thead>        
                <tbody>    
                    @foreach($product as $key => $value)        
                        <tr>            
                            <td>{{ $value->id }}</td>            
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->price }}</td>
                            <td>{{ $value->description }}</td>
                            <td>{{ $value->brand_id }}</td>
                            <td>{{ $value->stock }}</td> 
                            <td>{{ $value->img }}</td> 
                                       
                            {{-- <td> 
                                <a class="btn btn-small btn-success" href="{{ URL::to('product/' . $value->id) }}">Show</a>  
                                <a class="btn btn-small btn-info" href="{{ URL::to('product/' . $value->id . '/edit') }}">Edit this Nerd</a> 
                            </td>  --}}
                        </tr>    
                    @endforeach    
                </tbody> 
            </table> 
        </div> 
    </body> 
@endsection
    