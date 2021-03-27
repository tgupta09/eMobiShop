<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>@yield('title') - ECommerce</title>
    <script>
      var base_url = {!! json_encode(url('/')) !!}
    </script>
</head>
<body>
    <!-- HEADER -->
    <header>
    {{-- <div class="container-fluid">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-lg-9">
                <h1 class="display-5 text-center">Quilio Header</h1>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <a href = "{{route('logoutcp')}}" class="btn btn-danger btn-block">LOGOUT</a>
            </div>
        </div>
    </div> --}}
    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
        <a class="navbar-brand" href="#"><img id="logo_img" src="{{ asset('/assets/images/logo-black.png') }}" alt="logo" style="height:40px;weight:50px;"></a>
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item">
              @php
                  if(Auth::guard('cp')->check()){
                    $user = Auth::guard('cp')->user()->email;
                    echo "Hi! ".$user;                  
                  }
              @endphp
          </li>
          <li class="nav-item"><a href = "{{route('logoutcp')}}" class="btn btn-danger btn-block" class="nav-link">LOGOUT</a></li>
        </ul>
    </nav> 
    </header>
    <!-- /HEADER -->
    <!-- MAIN CONTENT -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-2 col-md-2 col-lg-2">
          <nav class="navbar bg-dark">
            <ul class="navbar-nav justify-content-center">
              <li class="nav-item">
                <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal">Add Product</button>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Published Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Rejected Products</a>
              </li>
            </ul>
        </nav>
        </div>
        <div class="col-sm-10 col-md-10 col-lg-10">
          @yield('content')
        </div>
      </div>
    </div>


    <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Product</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div id="addproductmsg"></div>
          <form id="addproductformid" name="addproductform">
            @csrf
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Name</span>
              </div>
              <input type="text" class="form-control" placeholder="Enter Name" id="nameid" name="name">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Brand</span>
              </div>
              <input type="text" class="form-control" placeholder="Enter Brand" id="brandid" name="brand">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Category</span>
              </div>
              <input type="text" class="form-control" placeholder="Enter Category" id="categoryid" name="category">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Sku</span>
              </div>
              <input type="text" class="form-control" placeholder="Enter Sku" id="skuid" name="sku">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Price</span>
              </div>
              <input type="text" class="form-control" placeholder="Enter Price" id="priceid" name="price">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Description</span>
              </div>
              <textarea id="descriptionid" name="description" class="form-control" rows="5" placeholder="Enter Description"></textarea>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Image Upload</span>
              </div>
              <input type="file" class="form-control" id="imageid" name="image">
            </div>
          </form>
          <button class="btn btn-primary btn-block" id="savedraftid">Save Draft</button>
          <button class="btn btn-success btn-block" id="addproductid">Submit Product</button>
        </div>
        
      </div>
    </div>
  </div>
    <!-- /MAIN CONTENT -->
    <!-- FOOTER -->
    <footer class="fixed-bottom">
        <div class="container-fluid">
          <div class="row bg-secondary align-items-baseline">
            <div class="col-sm-6 col-md-6 col-lg-6 text-center" style="color: aliceblue; padding-bottom: 20px;">
              <i class="fa fa-facebook-official fa-2x" aria-hidden="true" style="padding-right: 30px;"></i>
              <i class="fa fa-instagram fa-2x" aria-hidden="true" style="padding-right: 30px;"></i>
              <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 text-center" style="color:aliceblue; padding-bottom: 20px;">
                <img id="logo_img" src="{{ asset('/assets/images/logo-black.png') }}" alt="logo" style="height:40px;weight:50px;">
              <p><i class="fa fa-heart" aria-hidden="true"></i> Crafted lovingly with CedCoss</p>
            </div>
          </div>
        </div>
    </footer>
    <!-- /FOOTER -->
  <!-- Custom -->
	<script src="{{ asset('/assets/js/customcp.js') }}"></script>
</body>
</html>