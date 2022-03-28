<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
<title>Create a New User</title>
</head>
<body>
<!-- START OF MENU -->
<div class="topnav" id="myTopnav">
  <a href="{{url('http://laravel.development/admin/main')}}">Home</a>
  <a href="{{url('http://laravel.development/admin/users')}}">Registered Users</a>
  <a href="" class="active">Create New User</a>
  <a href="#" class="alignLastMenuItemRight">Welcome {{Auth::user()->fname;}}</a>
  <a href="javascript:void(0);" class="icon"> 
    <span class="responsiveIconWhite">&#9776;</span>
  </a>
</div><!-- END OF MENU -->

<div class="container">
  <div class="form-row">
    <h1 class="mt-5">Create User</h1>

    @if (Session::has('danger'))
      <div class="alert alert-danger">{{ Session::get('danger') }}</div>
    @endif

    @if (Session::has('success'))
      <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif

      <form class="mt-2" method="post" action="{{route('createuser')}}">
      @csrf
      <div class="form-group">
          <label for="fname">First name</label>
          <input type="text" class="form-control" name="fname" placeholder="first name" value="{{old('fname')}}" required><br>
      </div>

      <div class="form-group">
        <label for="lname">Surname</label>
        <input type="text" class="form-control" name="lname" placeholder="surname" value="{{old('lname')}}">
      </div>
  </div>  
  <br>
  
  <div class="row">
      <div class="col">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="email" value="{{old('email')}}" required>
      </div>
      <br>

      <div class="col">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" placeholder="password">
      </div>
    </div>
    <br>

    <div class="col">
      <label for="notes">Notes</label>
      <textarea name="notes" class="form-control" placeholder="notes" value="{{old('notes')}}" required></textarea><br>
    </div>
    
    <div class="mt-2">
      <button type="submit" class="btn btn-primary">Create User</button>
    </div>
</form>
</div>
</div>

<script type="text/javascript" src="{{ url('js/scripts.js') }}"></script>
</body>
</html>