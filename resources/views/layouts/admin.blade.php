
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  
  <link href="../admin/assets/style.css" rel="stylesheet" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />

</head>

<body class="g-sidenav-show  bg-gray-200">
<div class="row">
  <div class="col-md-2">
@include('layouts.inc.sidebar')
</div>
  <div class="col-md-10" style="margin-left:-50px;">
  @include('layouts.inc.navebar') 
  <div class="container " >
    @if(Session::get('status'))
    <div class="alert alert-success alert-dismissible fade show">
      <button type="button" class="close bg-success border-none" data-dismiss="alert">&times;</button>
      {{Session::get('status')}}
    </div>
    @endif
   @yield('content')
  
  </div>
    @include('layouts.inc.footer')
    </div>
    </div>
  
 
</body>

</html>