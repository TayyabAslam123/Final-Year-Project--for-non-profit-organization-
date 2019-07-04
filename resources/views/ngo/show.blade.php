@extends('layout.master')

@section('content')

<div class="jumbotron">

<h1 style="color:black;">NGO NAME :</h1>
    <h2>{{$post->name}}</h2>
    <h1 style="color:black;">NGO DETAILS :</h1>
<h2>{{$post->details}}</h2>
<h1 style="color:black;">NGO STARTED AT:</h1>
<h2>{{$post->created_at}}</h2>
<hr>     
<hr>     
<a href="http://localhost/AdminPanel/public/ngo/{{$post->id}}/edit">
    <button class="btn btn-primary btn-lg btn-block">
    EDIT
    </button>
    </a>                

    <br>
    <br>

    {!!Form::open(['action'=>['NgoController@destroy',$post->id],'method'=>'post'])!!}

    {{Form::hidden('_method','DELETE')}}
    
    <button class="btn btn-danger btn-lg btn-block">
           DELETE
            </button>
    {!!Form::close()!!}
</div>
<br>
  <!-- Load Facebook SDK for JavaScript -->
  <head>
        <title>Your Website Title</title>
          <!-- You can use Open Graph tags to customize link previews.
          Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
        <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="Your Website Title" />
        <meta property="og:description"   content="Your description" />
        <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />
      </head>

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

@endsection