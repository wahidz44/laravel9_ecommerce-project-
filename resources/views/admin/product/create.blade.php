<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('/') }}assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="{{ asset('/') }}assets/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

</head>
<body>
<section class="py-5">
    <div class="container">
        @if(Session::has('message'))
           <h3 class="text-center text-success"> {{Session::get('message')}}</h3>
        @endif
        <div class="row">
            <div class="col-md-4 mx-auto">
               <div class="card">
                   <div class="card-header">
                       <h4 class="text-center">Create new Product</h4>
                   </div>
                   <div class="card-body">
                       <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                           @csrf
                           <div class="row">
                               <label for="name" class="col-md-4">Name</label>
                               <div class="col-md-8">
                                   <input type="text" name="name" class="form-control">
                               </div>
                           </div>
                           <div class="row mt-3">
                               <label for="price" class="col-md-4">Price</label>
                               <div class="col-md-8">
                                   <input type="number" name="price" class="form-control">
                               </div>
                           </div>
                           <div class="row mt-3">
                               <label for="category" class="col-md-4">Category</label>
                               <div class="col-md-8">
                                   <input type="text" name="category" class="form-control">
                               </div>
                           </div>
                           <div class="row mt-3">
                               <label for="description" class="col-md-4">Description</label>
                               <div class="col-md-8">
                                   <textarea name="description" class="form-control"></textarea>
                               </div>
                           </div>
                           <div class="row mt-3">
                               <label for="image" class="col-md-4">Image</label>
                               <div class="col-md-8">
                                   <input type="file" name="image">
                               </div>
                           </div>
                           <div class="row mt-3">
                               <label for="" class="col-md-4"></label>
                               <div class="col-md-8">
                                   <input type="submit" value="Submit" class="btn btn-success">
                               </div>
                           </div>
                       </form>
                   </div>
               </div>
            </div>
        </div>
    </div>
</section>

<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
</body>
</html>



