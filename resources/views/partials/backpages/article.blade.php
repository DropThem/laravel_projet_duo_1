<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Resi Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/venobox/venobox.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/remixicon/remixicon.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/boxicons/css/boxicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/icofont/icofont.min.css')}}">
  <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">

  <!-- Template Main CSS File -->

  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="/home">Kakashi Template</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      @include('partials.backnav.backoffnav')
    </div>
    
    <div class="container">
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">text</th>
        <th scope="col">text2</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($article as $item)
        <tr>
          <th scope="row">{{$item->id}}</th>
          <td>{{$item->title}}</td>
          <td>{{$item->text}}</td>
          <td>{{$item->title2}}</td>
          <td> 
              <form action="delete/{{$item->id}}" method="POST">
                @csrf 
                <button type="submit" class="btn btn-primary">Detete</button>
              </form>
          </td>
          <td>
            <a href="backshow/{{$item->id}}" class="btn btn-primary">Show</a>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <form action="add-store" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">    
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Text</label>
        <input type="text" name="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">    
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Title2</label>
        <input type="text" name="title2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">    
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('vendor/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('vendor/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    
    <!-- Template Main JS File -->
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    
    </body>
    
    </html>
