
  
  @extends("layouts.lay")

  @section('content') 
  <body style="background-color: white">
      

  <br>
  <div class="container-fluid m-auto" style=" width:60%; padding:0%;">
      <br>
      <h3 style="text-align: center">Register</h3>
      <br>
      <br>
      <form action="{{route('register')}}" method = "post">
        @csrf
        <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id ="name" placeholder="your name" class="form-control" value="{{old('name')}}">
        @error('name')
        <div>
            {{ $message }}
        </div>
        @enderror
        </div>
        <br>
        <br>
        <div class="form-group">
        <label for = "email">Email</label>    
        <input type="email" name = "email" id = "email" placeholder ="your email" class="form-control" value="{{old('email')}}">
        @error('email')
        <div>
            {{ $message }}
        </div>
        @enderror 
        </div>
        <br>
         <br>
         <div class="form-group">
        <label for = "password">Password:</label>
        <input type = "password" name="password" id="password" class="form-control" placeholder="your password" >
        @error('password')
        <div>
            {{ $message }}
        </div>
        @enderror
         </div>
        <br>
        <br>
        <div style="display: flex;justify-content: center;align-items: center ">
        <button type="submit" class="btn btn-primary" style="width:50%; margin-top:1%">Register</button>
        </div>
    </form>
  </div>
</body>
  @endsection