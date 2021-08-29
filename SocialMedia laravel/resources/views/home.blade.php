@extends("layouts.lay")

    @section('content') 
    <div class="container">
   

    <div class="row" style="text-align: center">
        <h1> Welcome to Posty</h1>
    </div>
    <br> 
   

    <div class="row" >
        <div class="col-md-6">
            <img src="images/laravelimag1.png" style="height: 80%" width="200%">
        </div>
    

    </div>

    <div class="row" >
        <div style="display: flex;justify-left: center;align-items: center" >
            <p >
                
                  Posty is my social media test project.It has fetures to post, like, unlike, coments. It has an implemented like counter and rules to make it work well, 
                  users have to login to post, users cant like or dislike one post multiple times, users can delete there own posts but cannot delete the posts of others.
                  Every post has an like and dislike counter. By cliking on the a users name u can view there profile which contains information them such as all there posts, 
                  number of posts, number of likes, there email and there username.
 
                
            </p>

        </div>


    </div>

   
</div>
@endsection