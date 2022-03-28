@if(session()->has('success'))
 {{session()->get('success')}}
@endif

@if(session()->has('danger'))
 {{session()->get('danger')}}
@endif

@if($errors->any())
 <ul>
  @foreach($errors->all() as $error)
 <li><div class="alert alert-danger">{{$error}}</div></li>
  @endforeach
 </ul>
@endif