<!DOCTYPE html>
<html>
    <head>
<title>RecycleIt | Find Recyclers</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Inventor Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="{{ asset('packages/materialize/css/materialize.min.css') }}">
  <link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
  <!-- Compiled and minified JavaScript -->
  <script src="{{ asset('packages/materialize/js/materialize.min.js') }}"></script>
  <style type="text/css">
    html{
      height:100%;
    }
    body{
      min-height: 100%;
      overflow: hidden;
    }
    .container{
      min-height: 100%;
    }
    .col:hover{
      cursor: pointer;
      box-shadow: 1px 1px;
    }
    @media screen and (min-width:900px){
    div{
      font-family: 'Indie Flower', cursive;
      text-align: center;
      font-size: 1.5rem;
      font-weight: bold;
    }
    span{
      position: relative;
      left: 20%;
    }
  }
  @media screen and (max-width:900px){
    div{
      font-family: 'Indie Flower', cursive;
      text-align: center;
      font-size: 1.5rem;
      font-weight: bold;
    }
    span{
      position: relative;
      left: 10%;
    }
  }
  </style>
</head>
    <body>
        <div class="row valign-wrapper" style="margin-bottom:0px;">
        <div id="1" class="col m4 s4 z-depth-2 red valign-wrapper center-align" style="height:33vh; shadow:"><span>Automotive</span></div>
        <div id="2" class="col m4 s4 z-depth-2 yellow valign-wrapper center-align" style="height:33vh;"><span>Batteries</span></div>
        <div id="3" class="col m4 s4 z-depth-2 green valign-wrapper center-align" style="height:33vh;"><span>Electronics and Electricals</span></div>
        </div>

        <div class="row center-align" style="margin-bottom:0px;">
        <div id="4" class="col m4 s4 z-depth-5 indigo valign-wrapper" style="height:33vh;"><span>Glass</span></div>
        <div id="5" class="col m4 s4 z-depth-5 orange valign-wrapper" style="height:33vh;"><span>Metal</span></div>
        <div id="6" class="col m4 s4 z-depth-5 deep-orange valign-wrapper" style="height:33vh;"><span>Wood</span></div>
        </div>

        <div class="row" style="margin-bottom:0px; text-align:center;">
        <div id="7" class="col m4 s4 z-depth-3 lime accent-3 valign-wrapper center-align" style="height:33vh; text-align:center;"><span>Plastic</span></div>
        <div id="8" class="col m4 s4 z-depth-3 cyan accent-2 valign-wrapper center-align" style="height:33vh;"><span>Paper</span></div>
        <div id="9" class="col m4 s4 z-depth-3 light-green accent-2 valign-wrapper center-align" style="height:33vh;"><span>Fabric</span></div>
        </div>
        <script type="text/javascript">
          var items = document.getElementsByClassName('col');
         
          for(var i=0; i<items.length; i++){
            items[i].addEventListener('click',function(){
              window.location = '/location/'+(this.id)+"/"+(this.getElementsByTagName('span')[0].innerHTML);
            }) 
          }

        </script>
    </body>
</html>
