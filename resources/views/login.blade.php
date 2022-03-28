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

<form action="{{route('signin')}}" method="post" class="form-signin">
    @csrf

    @include('includes.validation')

    @if($errors->any())
    <ul>
    @foreach($errors->all() as $error)
    <li><div class="alert alert-danger">{{$error}}</div></li><br>
    @endforeach
    </ul>
    @endif
    <br>

    @if (Session::has('loginIncorrect'))
      <div class="alert alert-danger">{{ Session::get('loginIncorrect') }}</div>
    @endif  

      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only mt-3">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <!-- <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div> -->
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; santosfm.com 2022</p>
    </form>

</body>
</html>

