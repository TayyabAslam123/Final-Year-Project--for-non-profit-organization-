@extends('layout.um')

@section('content')




<div class="jumbotron">
    <div class="container-fluid">
      



        <div class="row">
          <div class="col-md-6" >
              <img src="{{ url('storage/cover_images/'.$post->cover_image) }}" height="500PX" width="650px">
             
          </div>
          <div class="col-md-6">
                <h2><b>{{$post->title}}</b></h2>
                <h3><b>VENUE:</b>{{$post->venue}}</h3>
                <h2><b>CITY:</b>{{$post->city}}</h2>
       
               <h3><b>DATE:</b>{{$post->date}}</h3>
          
          <h1><ul>SHARE WITH OTHERS</ul></h1>
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