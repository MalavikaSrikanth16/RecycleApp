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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
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
            	WHICH MATERIAL IS THE {{ $input }} MADE OF? 
            </div>
        </div>
        @foreach($materials as $material)
                <div class="row">

            <button id="{{ $material['material'] }} . {{ $input }}" onclick="send(this.id)" class="btn col m6 s6 offset-m3 offset-s3 btn-primary btn-medium">
            {{ $material['material'] }}
            </button>  
                    </div>
         
        @endforeach


 <script>
 function send(item){

    var material = item.split(".")[0];
    var object = item.split(".")[1];
    window.location = '/biodegradable/checkmaterial/' + object + '/' + material;

 }
 </script>
        
        <script src="{{  asset('packages/home/js/bootstrap.js') }}"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">

    </body>
</html>
