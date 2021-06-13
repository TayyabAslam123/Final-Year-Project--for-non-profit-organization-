@extends('layout.um')

@section('content')

<div class="container fluid" >

        <div class="row">
        <div class="col-sm-6">
                <img src="{{ url('storage/cover_images/'.$post->cover_image) }}" width="100%" height="100%" >
        
        
        </div>


        <div class="col-sm-6">
                <h4>Title:</h4>
                <h6>{{$post->title}}</h6>
                <h4>Details:</h4>
                <h6>{{$post->details}}</h6>
                <h4>Supporters:</h4>
                <h6>{{$post->supporters}}</h6>
        
            </div>

        </div>

</div>

<!-- Load Facebook SDK for JavaScript -->
<head>
                <title>Your Website Title</title>
                  <!-- You can use Open Graph tags to customize link previews.
                  Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
                <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
                <meta property="og:type"          content="website" />
                <meta property="og:title"         content="Your Website Title" />
                <meta property="og:description"   content="Your description" />
                <meta property="og:image"         content="#" />
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