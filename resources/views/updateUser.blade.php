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
<div class="row">
  <div class="col-xs-1 text-center mt-5">
    <h2>{{$user->fname}} {{$user->lname}}</h2>
    
    <form method="post" action="{{route('updateuser')}}">
    @csrf
     First name: <input type="text" name="fname" placeholder="first name" value="{{$user->fname}}" required><br>
     Surname: <input type="text" name="lname" placeholder="surname" value="{{$user->lname}}"><br>
      Email: <input type="email" name="email" placeholder="email" value="{{$user->email}}" required><br>
      Password: <input type="password" name="password" placeholder="password" required><br>
      Message: <textarea name="notes" placeholder="notes" required>{{$user->notes}}</textarea><br>
      <button type="submit">Save Changes</button>
    </form>
  <br>
  @if(Auth::check())
    <form method="post" action="{{route('logout')}}">
    @csrf
    <button type="submit">Logout</button>
    </form>
    @endif
  </div>
</div>
</body>
</html>


