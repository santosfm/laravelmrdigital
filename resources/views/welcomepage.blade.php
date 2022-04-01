<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
<title>Laravel App</title>
</head>
<body>
<!-- START OF MENU -->
<div class="topnav" id="myTopnav">
  <a href="#" class="active">Home</a>
  <a href="{{url('http://laravelappmrdigital.herokuapp.com/admin/users')}}">Registered Users</a>
  <a href="{{ url('http://laravelappmrdigital.herokuapp.com/admin/users/create') }}">Create New User</a>
  <a href="#" class="alignLastMenuItemRight">Welcome {{Auth::user()->fname;}}</a>
  <a href="javascript:void(0);" class="icon"> 
 
    <span class="responsiveIconWhite">&#9776;</span>
  </a>
</div><!-- END OF MENU -->

<div class="row">
    <!-- <div class="justify-content-center ml-5"> -->
    <div class="col-xs-1 text-center mt-5">
    <h1 class="mb-5">Welcome {{Auth::user()->fname;}},</h1>
    <a class="text-decoration-none" href="http://laravelappmrdigital.herokuapp.com/admin/users">View Users</a><br><br>
    <a class="text-decoration-none" href="http://laravelappmrdigital.herokuapp.com/admin/users/create">Add New User</a><br>
    <br><br>
    @if(Auth::check())
        <form method="post" action="{{route('logout')}}">
            @csrf
            <button type="submit" class="btn btn-warning">Logout</button>
        </form> 
    </div>
    @endif
</div>

<script type="text/javascript" src="{{ url('js/scripts.js') }}"></script>
</body>
</html>
