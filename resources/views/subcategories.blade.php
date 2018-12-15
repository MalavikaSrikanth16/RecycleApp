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
      height:100vh;
    }
    body{
      min-height: 100vh;
      overflow: hidden;
      height:auto;
    }
    div{
      font-family: 'Indie Flower', cursive;
      text-align: center;
      font-size: 1.5rem;

    }
    
    .col:hover{
      cursor: pointer;
      box-shadow: 1px 1px;
    }

    .col{
      -webkit-animation:flipTiles 1s;
      animation: flipTiles 1s;
    }

    @-webkit-keyframes flipTiles{
      0%{
        -webkit-transform:rotateY(180deg);
        transform: rotateY(180deg);
      }
      100%{
        -webkit-transform:rotateY(360deg);
        transform:rotateY(360deg);
      }
    }
    @media screen and (max-width:900px){
      #main{
        font-size: 1.5rem;
        font-weight: bold;
        cursor: default;
      }
      span{
      position: relative;
      left: 10%;
      font-weight: normal;
      font-size: 1rem;
    }
    
    }
    @media screen and (min-width:901px){
      #main{
        font-size: 1.5rem;
        font-weight: bolder;
        cursor: default;
      }
      span{
      position: relative;
      left: 20%;
      font-weight: normal;
      font-size: 1rem;
      cursor: pointer;
    }
    
    }
  </style>
</head>
    <body>
        <div class="row valign-wrapper" style="margin-bottom:0px;">
        <div id="1" class="col m4 s4 z-depth-2 red valign-wrapper center-align" style="height:33vh; shadow:"></div>
        <div id="2" class="col m4 s4 z-depth-2 yellow valign-wrapper center-align" style="height:33vh;"></div>
        <div id="3" class="col m4 s4 z-depth-2 green valign-wrapper center-align" style="height:33vh;"></div>
        </div>

        <div class="row center-align" style="margin-bottom:0px;">
        <div id="4" class="col m4 s4 z-depth-5 indigo valign-wrapper" style="height:33vh;"></div>
        <div id="5" class="col m4 s4 z-depth-5 orange valign-wrapper" style="height:33vh;"></div>
        <div id="6" class="col m4 s4 z-depth-5 deep-orange valign-wrapper" style="height:33vh;"></div>
        </div>

        <div class="row" style="margin-bottom:0px; padding-bottom:0px; text-align:center;">
        <div id="7" class="col m4 s4 z-depth-3 lime accent-3 valign-wrapper center-align" style="height:34vh; text-align:center;"></div>
        <div id="8" class="col m4 s4 z-depth-3 cyan accent-2 valign-wrapper center-align" style="height:34vh;"></div>
        <div id="9" class="col m4 s4 z-depth-3 light-green accent-2 valign-wrapper center-align" style="height:34vh;"></div>
        </div>
        <script type="text/javascript">
        setTimeout(flip, 1200);
          function flip(){
            var subcategories = {!! $subcategories !!};
            var n = subcategories.length;
              var i=0,j=1;
                document.getElementById({!! $id !!} ).innerHTML = "<span id='main'>"+'{!! $item !!}'+"</span>";
                 document.getElementById({!! $id !!}).style.cursor = 'default';


              console.log(subcategories);
              for(;i<n;)
              {console.log(subcategories[i]['subcategory']);
              if(j=={!! $id !!})
              {
                j++;
              }
              else{
                document.getElementById(j).innerHTML = "<span>"+subcategories[i]['subcategory']+"</span>";
                i++;
                j++;
              }
            }
          }

          var items = document.getElementsByClassName('col');
         console.log(items);
          for(var i=0; i<items.length; i++){
            if(i+1=={!! $id !!});
            else{
            items[i].addEventListener('click',function(){
              window.location = '/location/display/{!! $item !!}/'+(this.getElementsByTagName('span')[0].innerHTML);
            }); 
          }
          }

        </script>
        <script type="text/javascript">
          var items = document.getElementsByTagName('span');
         
          for(var i=0; i<items.length; i++){
            items[i].addEventListener('click',function(){
              var item = {!! $item !!};
              window.location = '/location/display/'+item +'/'+(this.innerHTML);
            }) 
          }

        </script>
        <script src="{{  asset('packages/home/js/bootstrap.js') }}"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    
    </body>
</html>
