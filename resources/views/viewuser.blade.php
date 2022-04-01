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
  <a href="{{ url('http://laravelappmrdigital.herokuapp.com/admin/main')}}">Home</a>
  <a href="{{url('http://laravelappmrdigital.herokuapp.com/admin/users')}}">Registered Users</a>
  <a href="{{ url('http://laravelappmrdigital.herokuapp.com/admin/users/create') }}">Create New User</a>
  <a href="#" class="alignLastMenuItemRight">Welcome {{Auth::user()->fname;}}</a>
  <a href="javascript:void(0);" class="icon"> 
    <span class="responsiveIconWhite">&#9776;</span>
  </a>
</div><!-- END OF MENU -->

<div class="container mt-3">
    <h1>Update User</h1>

    @if (Session::has('danger'))
      <div class="alert alert-danger">{{ Session::get('danger') }}</div>
    @endif

    @if (Session::has('success'))
      <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif

    <h2 class="mt-5">{{$user->fname}} {{$user->lname}}</h2>
    
    <form class="form-inline" role="form" method="post" action="{{route('updateuser',$user->id)}}">
    @csrf
    <!-- <div class="form-row mt-5"> -->
      <div class="form-row col-md-6">
        <label for="fname">First name</label>
        <input type="text" class="form-control" name="fname" placeholder="first name" value="{{$user->fname}}">
      </div><br>
        
      <div class="form-row col-md-6"> 
        <label for="fname">Surname</label>
          <input type="text" class="form-control" name="lname" placeholder="surname" value="{{$user->lname}}">
      </div><BR>
    <!-- </div> -->

    <!-- <div class="form-row"> -->
      <div class="form-row col-md-6">
        <label for="fname">Email</label>  
        <input type="email" class="form-control" name="email" placeholder="email" value="{{$user->email}}"><br>
      </div>
            
      <div class="form-row col-md-6">
        <label for="password">Password</label>
          <input type="password" class="form-control" name="password" placeholder="password" value="{{$user->password}}"><br>
      </div>
    <!-- </div> -->

    <div class="form-row">
      <label for="fname">Notes</label>
      <textarea name="notes" class="form-control w-50" placeholder="notes" required>{{$user->notes}}</textarea><br>
    </div>
    
    <div class="form-row">
      <button type="submit" class="btn btn-primary">Save Changes</button>
    </div>  
  </form>

  <br><br>
    <form action="{{route('deleteuser', $user->id)}}" method="post">
    @csrf
    Enter user id number to confirm deletion: <input type="text" name="userid" placeholder="Number in address bar">

      <button type="submit" class="btn btn-danger">Delete User</button>
    </form>
    <br>
    <div class="mb-5">
    @if(Auth::check())
    <form method="post" action="{{route('logout')}}">
    @csrf
    <button type="submit" class="btn btn-warning">Logout</button>
    </form>
    @endif
</div>
    </div>
</div>

<script type="text/javascript" src="{{ url('js/scripts.js') }}"></script>
</body></html>
