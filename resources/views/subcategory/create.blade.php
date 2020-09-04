@extends('admin.admin')
@section('content')
    
   <head>    
      <title>SubCategory</title>    
      <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"> 
   </head> 
   <body> 
      <div class="container col-md-10"> 
         <a href="{{ URL::to('subcategory') }}" class="btn btn-success pull-right"><i class="fas fa-chevron-left"></i> Back</a>

{{--          
         <nav class="navbar navbar-inverse">    
            <div class="navbar-header">        
               <a class="navbar-brand" href="#">Newaz</a>    
            </div>    
            <ul class="nav navbar-nav">        
               <li><a href="{{ URL::to('subcategory') }}">View All SubCategories</a></li>        
               <li><a href="{{ URL::to('category/create') }}">Create Categories</a>    
               </ul> 
         </nav>  --}}

         <h1>Add Sub-Category</h1> 

         <form action="{{ url('/subcategory') }}" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
              <label for="SubCategoryName">Title</label>
              <input type="text" class="form-control" name="title" placeholder="Sub-Category Title">
            </div>

            <div class="form-group">
               <label for="ImageFile">Image input</label>
               <input type="file" class="form-control-file" name="img">
            </div>

            <button type="submit" class="btn btn-primary">Add Sub-Category</button>
         </form>
      </div> 
   </body> 
@endsection 