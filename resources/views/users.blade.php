<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
<title>List of registered users</title>
</head>
<body>

<!-- START OF MENU -->
<div class="topnav" id="myTopnav">
  <a href="{{ url('http://laravel.development/admin/main')}}">Home</a>
  <a href="#" class="active">Registered Users</a>
  <a href="{{ url('http://laravel.development/admin/users/create') }}">Create New User</a>
  <a href="#" class="alignLastMenuItemRight">Welcome {{Auth::user()->fname;}}</a>
  <a href="javascript:void(0);" class="icon"> 
    <span class="responsiveIconWhite">&#9776;</span>
  </a>
</div><!-- END OF MENU -->

<div class="container">
<h1 class="mt-5">List of registered Users</h1><br>

  <table class="table">
        <thead>
        <tr>
        <th>First name</th>
        <th>Surname</th>
        <th>Email</th>
        <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
        <td>{{$user->fname}}</td>
        <td>{{$user->lname}}</td>
        <td>{{$user->email}}</td>
        <td><a href="{{route('viewuser', $user->id)}}"><div id="removeUnderlineLink">View User</div></td>
        </tr>
        @endforeach
      </tbody>
    </table>
<br><br>
{{$users->links()}}

<br>

@if(Auth::check())
  <form method="post" action="{{route('logout')}}">
  @csrf
  <button type="submit" class="btn btn-warning">Logout</button>
  </form>
@endif

</div>

<script type="text/javascript" src="{{ url('js/scripts.js') }}"></script>
</body>
</html>