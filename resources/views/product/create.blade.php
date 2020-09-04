@extends('admin.admin')

@section('content')
   <head>    
      <title>Add to Product</title>    
      <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"> 
      
   </head> 
   <body> 
      <div class="container col-md-10">
         <a href="{{ URL::to('product') }}" class="btn btn-success pull-right"><i class="fas fa-chevron-left"></i> Back</a> 
         
         {{-- <nav class="navbar navbar-inverse">    
            <div class="navbar-header">        
               <a class="navbar-brand" href="#">Newaz</a>    
            </div>    
            <ul class="nav navbar-nav">        
               <li><a href="{{ URL::to('product') }}">View All Batch</a></li>        
               {{-- <li><a href="{{ URL::to('product/create') }}">Create Batch</a>     -}}
               </ul> 
         </nav>  --}}

         <h1>Create a Product</h1> 

         <form action="{{ url('/product') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="brands" value="{{ $brands->id }}">

            <div class="form-group">
               <label for="ProductName">Product Name</label>
               <input type="text" class="form-control" name="name" placeholder="Product Name">
            </div>

            <div class="form-group">
               <label for="Description">Description</label>
               <textarea class="form-control" name="description" placeholder="Description of the Product" rows="3"></textarea>
            </div>

            <div class="form-inline form-group">
               <div class="form-group">
                  <label for="Brand">Brand</label>
                  {{-- <input type="text" class="form-control" name="brand_id" placeholder="Brand of Product"> --}}
                  <select class="form-control">
                     <option>Apple</option>
                     <option>Nokia</option>
                     <option>Samsung</option>
                  </select>
                  {{-- <select>
                     @foreach($brands as $key => $value)
                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                     @endforeach
               </select> --}}
               </div>

               <div class="form-group">
                  <label for="Price">Price</label>
                  <input type="text" class="form-control" name="price" placeholder="Price of Product">
               </div>
               
               <div class="form-group">
                  <label for="Stock">Stock</label>
                  <input type="text" class="form-control" name="stock" placeholder="Stock">
               </div>
            </div>
            
            <div class="form-group">
               <label for="ImageFile">Image input</label>
               <input type="file" class="form-control-file" name="img">
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
         </form>
      </div> 
   </body>                    
@endsection

