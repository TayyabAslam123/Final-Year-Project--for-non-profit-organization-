@extends('Ngo_org.main')

@section('content')




<div class="jumbotron">
    <div class="container-fluid">
      



        <div class="row">
          <div class="col-md-6" >
              <img src="{{ url('storage/cover_images/'.$post->cover_image) }}" height="400PX" width="450px">
             
          </div>
          <div class="col-md-6">
                <h2>{{$post->title}}</h2>
                <h3>VENUE:{{$post->address}}</h3>
                <h2>CITY:{{$post->city}}</h2>
       
               <h3>DATE:{{$post->date}}</h3>
          
          <h1>SHARE WITH OTHERS</h1>
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your share button code -->
<div class="fb-share-button "  
data-href="<?php echo 'http://www.goodwill.com' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" 
data-layout="button_count" style="height:250px;width:400px">
</div>

</div>

          </div>
        </div>
      </div>
      
<hr>
<hr>

        <hr>     


</div>
<br>











@endsection