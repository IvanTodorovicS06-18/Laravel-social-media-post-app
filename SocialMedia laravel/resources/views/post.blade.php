
  
  @extends("layouts.lay")

    @section('content') 
    <body style="background-color:white">
    <br>
    <div class="container-fluid m-auto" style="background-color:  #E8E8E8; width:60%; padding:0%;">
    
      @auth
          
     
        
          <div class="container">
            <br>
            
            <h3 style="text-align: center">Welcome</h3>
         
            <br>
            <form action="{{route('post')}}" method = "post" class="form-group">
              @csrf
              <textarea name="body" id="body" cols="30" rows="6" placeholder="Post somthing"  class="form-control"></textarea>  
              @error('body')
              <div >
                  {{ $message }}
              </div>
              @enderror 
              <br>
             
              <br>
              <div style="display: flex;justify-content: center;align-items: center">
              <button type="submit" class="btn btn-primary" style="width: 50%;">Post</button>
            </div>
            
          </form>
        </div>
          @endauth
        <br>
        <div class="container" >
          <h3 style="text-align: center">Postovi</h3>
          @if(!Auth::user())
          <p style="text-align: center">login to post</p>
        @endif
          @if($posts->count())
          
          @foreach($posts as $post)

          <div style=" display: flex;justify-content: center;align-items: center  ">
            
        
          <div class="card" style="width: 40rem; margin-bottom: 5%; "  >
            <div class="card-header">
              <h5> <a href="{{route('users.posts',$post->user)}}">{{$post->user->name}}</a></h5> <span>Posted: {{$post->created_at->diffForHumans() }}</span>
            </div>
            <div class="card-body">
            
              
            
              <p class="card-text">{{$post->body}}</p>
            </div>
              <div class="card-footer">
              @auth
              @if (!$post->LikedBy(Auth::user()))
              <form action="{{route('post.likes',$post)}}" method="POST" style="float: left; margin-left: 2%;">
                @csrf
                <button style="float: left" type="submit" class="btn btn-primary">like</button> 
              </form>
              
              @else
              
              <form action="{{route('post.likes',$post)}}" method="POST" style="float: left; margin-left: 2%;">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-primary" >unlike</button> 
              </form>
              
              @endif
              @can('delete',$post)
              <form action="{{route('post.destroy',$post)}}" method="POST" style="float: left; margin-left: 2%;" >
                @csrf
                @method('delete')
               
                <button type="submit" class="btn btn-secondary"  >Delete</button> 
              </form>
              @endcan
              @endauth
                <span style="float: left; margin-left: 2%; margin-top: 1%;">{{$post->likes->count()}} {{Str::plural('like',$post->likes->count())}}</span>
            </div>
          </div>
          
            <br>
         
          <br>
          <br>
          </div>
          @endforeach
        </div>
        <div style="display: flex;justify-content: center;align-items: center   ">

          {{$posts->links("pagination::bootstrap-4")}}
        </div>
          @else 
          <p>nema postova</p>
          @endif
        </div>
  
    </body>
    @endsection