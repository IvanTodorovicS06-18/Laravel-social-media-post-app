@extends("layouts.lay")

    @section('content') 
    <body style="background-color:white">
        <br>
        <div class="container-fluid m-auto" style="background-color:  #E8E8E8; width:70%; padding:0%;">
         
            <h3 style="text-align: center">Profile</h3>
            <br>
          
            <div class="row" >
                <div class="col-3"></div>
                <div class="col-6" style="border-bottom: solid;">
    
                    <div class="row" style="margin-bottom: 5%; height:80%; ">
                       
                        <div class="col-6" >
                          <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="list-name-list" data-toggle="list" href="#list-name" role="tab" aria-controls="name">Name</a>
                            <a class="list-group-item list-group-item-action" id="list-email-list" data-toggle="list" href="#list-email" role="tab"  aria-controls="email">Email</a>
                            <a class="list-group-item list-group-item-action" id="list-post-list" data-toggle="list" href="#list-post" role="tab" aria-controls="post">Number of posts</a>
                            <a class="list-group-item list-group-item-action" id="list-likes-list" data-toggle="list" href="#list-likes" role="tab" aria-controls="likes">Number of likes</a>
                          </div>
                        </div>
                        <div class="col-6 d-flex align-items-center justify-content-center "  >
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-name" role="tabpanel" aria-labelledby="list-name-list"> <span style="font-size:60px;"> {{$user->name}} </span></div>
                            <div class="tab-pane fade" id="list-email" role="tabpanel" aria-labelledby="list-email-list"> <span style="font-size:30px;"> {{$user->email}} </span></div>
                            <div class="tab-pane fade" id="list-post" role="tabpanel" aria-labelledby="list-post-list"> <span style="font-size:60px;"> {{$posts->count()}} {{Str::plural('post',$posts->count())}} </span></div>
                            <div class="tab-pane fade" id="list-likes" role="tabpanel" aria-labelledby="list-likes-list"> <span style="font-size:60px;"> {{$user->recivedLikes->count()}}  {{Str::plural('like',$user->recivedLikes->count())}} </span></div>
                          </div>
                        </div>
                      </div>
                 
    
                </div>
            </div>
           
              <div class="container" >
                <h3 style="text-align: center">Posts</h3>
            @if($posts->count())
              
            @foreach($posts as $post)
            <div style=" display: flex;justify-content: center;align-items: center  ">
            <div class="card "  style="width: 60rem; margin-bottom: 5%; ">
                <div class="card-header">
                   <strong>Posted: {{$post->created_at->diffForHumans() }}</strong> 
                </div>
                <div class="card-body">
              
                  <p class="card-text">  <p>{{$post->body}}</p></p>
                
                </div>
                <div class="card-footer ">
                    <strong >{{$post->likes->count()}} {{Str::plural('like',$post->likes->count())}}</strong>
                </div>
              </div>
    
            </div>
            @endforeach
            <div style="display: flex;justify-content: center;align-items: center   ">
    
                {{$posts->links("pagination::bootstrap-4")}}
            </div>
              @else 
              <p>{{$user->name}} does not have any posts</p>
              @endif
        </div>
        </div>
    
    </body>
   
    
    @endsection