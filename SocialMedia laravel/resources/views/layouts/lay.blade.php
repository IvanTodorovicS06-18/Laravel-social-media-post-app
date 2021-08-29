<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Laravel social media</title>

   <link rel="icon" href="{{ URL::asset('/images/op.png') }}" type="image/x-icon"/>
 


   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


 
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
          </li>
        
          <li class="nav-item">
              <a class="nav-link" href="{{route('post')}}">Posts</a>
          </li>
      </ul>

      <ul class="nav navbar-nav ms-auto">
       @if (Auth::user())
        <li class="nav-item">
            <a class="nav-link" href="#">{{Auth::user()->name}}</a>
      
        </li>
        <li class="nav-item">
            <form action="{{route("logout")}}" method="POST" >
                @csrf
                <button type="submit" class="btn btn-default " style="color: gray" >Logout</button>
            </form>
        </li>
      
      @else
        <li class="nav-item">
            <a class="nav-link" href="{{route("register")}}">Register</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route("login")}}">Login</a>
        </li>
      @endif
    </ul>
</div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>
@yield('content')
