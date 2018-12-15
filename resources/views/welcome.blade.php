<!DOCTYPE html>
<html>
    <head>
<title>RecycleIt| Home</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Inventor Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="{{ asset('packages/materialize/css/materialize.min.css') }}">

  <!-- Compiled and minified JavaScript -->
  <script src="{{ asset('packages/materialize/js/materialize.min.js') }}"></script>
  <style>
    body{
      background-color: black;
      background-image: url("{{ asset('home_images/bg.jpg') }}");
      background-repeat: no-repeat;
      background-size: cover;
      overflow-x: hidden; 
    }
    #pic1, #pic2{
      -webkit-animation: card_zoom 1s;
      animation: card_zoom 1s;
    }
    @-webkit-keyframes card_zoom{
      0%{
        opacity:0.2;
       /* -webkit-transform: scale(1);
        transform: scale(1);*/
      }
     /* 25%{
        /*position: relative;
        top: 0rem;*/
       /* -webkit-transform: scale(1.1);
        transform: scale(1.1);
      }
      40%{
        /*position: relative;
        top: -0.5rem;*/
        /*-webkit-transform: scale(1);
        transform: scale(1);
      }*/
      /*50%{
        opacity: 0.5;
        /*-webkit-transform: scale(1.1);
        transform: scale(1.1);*/
      /*}
     /* 80%{
        /*position: relative;
        top: -0.4rem;*/
        /*-webkit-transform: scale(1.1);
        transform: scale(1.1);
      }/*
      75%{
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
      }*/
      100%{
        opacity: 1;
       /* position: relative;
        top: 0rem;*/
        /*-webkit-transform: scale(1);
        transform: scale(1);*/
        /*-webkit-transform: scale(1);
        transform: scale(1);*/

      }
    }
    .clickable:hover{
        opacity:0.9;
        color:white;
    }
    .clickable{
      background-color:#d87967;
      color:white;
      text-transform: uppercase;
      text-align:center;
    }
  </style>
</head>
    <body>
        <div class="row" style="height:80%; margin-top:10%;">
        <div id="pic1" class="col m4 s10 offset-m1 offset-s1">
            <div class="card medium">
              <div class="card-image" style="text-align:center; vertical-align:middle;">
              <img src="{{ asset('home_images/decompose.jpg') }}" alt="Card image" style="object-fit:contain;">
              </div>
              <div class="card-content">
              <p>Confused whether your trash belongs in the red or green bin?
                Find out if your item is biodegradable or not, and help save the environment.</p>
            </div>
            <a class="clickable" href="biodegradable">
              <div  class="card-action">
              Which bin do I toss it in?
            </div>
            </a>
            </div>
          </div>

            <div id="pic2" class="col m4 s10 offset-m2 offset-s1">

            <div class="card medium">
              <div class="card-image" style="text-align:center; vertical-align:middle;">
              <img src="{{ asset('home_images/discard.jpg') }}" alt="Where to recycle" style="object-fit:contain;">
              </div>
              <div class="card-content">
              <p>Have something that you need to dispose of? Prefer to give it for recycling? 
                Find out locations near you that accept your discardable items.</p>
            </div>
            <a class="clickable" href="location">
            <div class="card-action">
            Where do I recycle?
            </div>
          </a>
            </div>
            </div>
    </div>
  </body>
</html>
