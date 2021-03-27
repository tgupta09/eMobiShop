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
    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
        <a class="navbar-brand" href="#"><img id="logo_img" src="{{ asset('/assets/images/logo-black.png') }}" alt="logo" style="height:40px;weight:50px;"></a>
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item">
              @php
                  if(Auth::guard('mcp')->check()){
                    $user = Auth::guard('mcp')->user()->email;
                    echo "Hi! ".$user;                  
                  }
              @endphp
          </li>
          <li class="nav-item"><a href = "{{route('logoutmcp')}}" class="btn btn-danger btn-block" class="nav-link">LOGOUT</a></li>
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
                <a class="nav-link" href="#">Published Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Rejected Products</a>
              </li>
              <li class="nav-item">
                <a href="{{route('coverttoexcel')}}" class = "btn btn-success">Convert To Excel</a>
              </li>
            </ul>
        </nav>
        </div>
        <div class="col-sm-10 col-md-10 col-lg-10">
          @yield('content')
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
	<script src="{{ asset('/assets/js/custommcp.js') }}"></script>
</body>
</html>