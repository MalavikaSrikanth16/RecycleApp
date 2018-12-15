
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
    <meta name="viewport" content="width=device-width, initial-scale=1
    "/>
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
       		font-weight: bold;
       		text-align: center;
       		color:black;
       }
       @media screen and (max-width: 600px){
        img{
          max-width:90%;
          height: auto;
        }
        .heading{
          font-size:2rem;
        }

      }
      @media screen and (min-width: 601px){
        img{
          max-width:50%;
          height: auto;
        }
        .heading{
          font-size:4rem;
        }
      }
       </style>  
</head>
    <body>
        <div class="row" style="margin-top:5%;">
            <div class="col m10 s10 heading offset-m1 offset-s1">
            	THE {{ $item }} {{ $object }} IS <span class="col m10 s10 heading offset-m1 offset-s1" id="yesorno"></span>
            </div>
        </div>
        <div class="row">
        <div id="binimg" class="col m4 s8 offset-m4 offset-s2 center-align" style="overflow:hidden;">
        </div>
        </div>
        <div class ="row">
            <div class="col m10 s10 heading offset-m1 offset-s1">      
        Toss it in the <span id="redorgreen"></span> bin
            </div>
        </div>
        

<script>
var yesorno = document.getElementById("yesorno");
var redorgreen = document.getElementById("redorgreen");
var binimg = document.getElementById('binimg')
if({!! $biodegradable !!} == 1){
  yesorno.innerHTML = "BIODEGRADABLE";
    redorgreen.innerHTML = "GREEN";
    binimg.innerHTML = "<img src={{ asset('home_images/greenbin.jpeg') }}>";
}

else{
  yesorno.innerHTML = "NON-BIODEGRADABLE";
  redorgreen.innerHTML = "RED";
    binimg.innerHTML = "<img src={{ asset('home_images/redbin1.jpg') }}>";

}
</script>
 
    
        <script src="{{  asset('packages/home/js/bootstrap.js') }}"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">

    </body>
</html>
