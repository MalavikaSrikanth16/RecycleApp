<!DOCTYPE html>
<html>
    <head>
<title>RecycleIt| Which bin?</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Inventor Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
  <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>

  <!-- Compiled and minified JavaScript -->
    <script src="{{ asset('packages/materialize/js/materialize.min.js') }}"></script>

       <style>
       body{
       	overflow-x: hidden;
       }
       .heading{
       		font-family: 'Indie Flower', cursive;
       		font-size:4rem;
       		font-weight: bold;
       		text-align: center;
       		color:black;
       }
       </style>  
</head>
    <body>
        <div class="row" style="margin-top:10%;">
            <div class="col m10 s12 offset-m1 heading">
            SORRY ITEM NOT FOUND. PLEASE ENTER AGAIN!
            </div>
        </div>
        <div class="row">
              <button onclick = "window.location='{{ url("/biodegradable") }}'" type="submit" class="btn col m6 s6 offset-m3 offset-s3 btn-primary btn-large heading">
            GO BACK
            </button>
        </div>
 
        <script src="{{  asset('packages/home/js/bootstrap.js') }}"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">

    </body>
</html>
