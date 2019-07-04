@extends('layout.umm')

@section('content')




<div class="jumbotron">
    <div class="container-fluid">
      



        <div class="row">
          <div class="col-md-6" >
              <img src="{{ url('storage/cover_images/'.$post->cover_image) }}" height="400PX" width="450px">
             
          </div>
          <div class="col-md-6">
                <h2>{{$post->title}}</h2>
                <h2>CITY:{{$post->city}}</h2>
          <h3>VENUE:{{$post->venue}}</h3>

          <h1>SHARE WITH OTHERS:</h1>
          
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
data-layout="button_count" style="height:150px;width:300px">
</div>

</div>

          </div>
        </div>
      </div>
      
<hr>
<hr>

        <hr>     
        @if(!Auth::guest())
<a href="http://localhost/AdminPanel/public/campaign/{{$post->id}}/edit">
    <button class="btn btn-primary btn-lg btn-block">
    EDIT
    </button>
    </a>                

    <br>
    <br>

    {!!Form::open(['action'=>['CampaignController@destroy',$post->id],'method'=>'post'])!!}

    {{Form::hidden('_method','DELETE')}}
    
    <button class="btn btn-danger btn-lg btn-block">
           DELETE
            </button>
    {!!Form::close()!!}

    @endif
</div>
<br>



<iframe src="https://www.facebook.com/plugins/share_button.php?href=<?php echo 'http://www.goodwill.com' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>&layout=button_count&size=large&width=69&height=20&appId" width="69" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>



<script >
        window.___gcfg = {
          lang: 'zh-CN',
          parsetags: 'onload'
        };
      </script>
      <script src="https://apis.google.com/js/platform.js" async defer></script>










@endsection