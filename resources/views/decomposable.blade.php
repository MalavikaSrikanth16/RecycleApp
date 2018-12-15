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
  <link rel="stylesheet" href="{{ asset('packages/materialize/css/materialize.min.css') }}">
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
            <div class="col m1"></div>
            <div class="col m10 heading">
              WHAT DO YOU WANT TO DISPOSE OF?
            </div>
        </div>
    <form method="POST" action="/biodegradable/rgsubmit">
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">

        	<div class="col m3 s2"></div>
    		<div class="col m6 s5">
        		<input id="wasteitem" name="wasteitem" type="text" class="form-control">
        	</div>
        	<div class="col m1 s1">
        		<button id="micbutton" name="micbutton" type="button" class="btn btn-small hide-on-med-and-up">
        			<img src="" alt="Mic"></img>
        		</button>
        	</div>
        </div>
        <div class="row">
              <button type="submit" class="btn col m6 s5 offset-m3 offset-s2 btn-primary btn-large heading">
            SO, WHICH BIN?
            </button>
        </div>   
    </form>
 
    <script>
      // Test browser support
      window.SpeechRecognition = window.SpeechRecognition       ||
                                 window.webkitSpeechRecognition ||
                                 null;

      if (window.SpeechRecognition === null) {
        document.getElementById('ws-unsupported').classList.remove('hidden');
        document.getElementById('button-play-ws').setAttribute('disabled', 'disabled');
        document.getElementById('button-stop-ws').setAttribute('disabled', 'disabled');
      } else {
        var recognizer = new window.SpeechRecognition();
        var item = document.getElementById('wasteitem');

        // Recogniser doesn't stop listening even if the user pauses
        recognizer.continuous = true;

        // Start recognising
        recognizer.onresult = function(event) {
          item.value = '';

          for (var i = event.resultIndex; i < event.results.length; i++) {
            if (event.results[i].isFinal) {
              item.value = event.results[i][0].transcript;
            } else {
              item.value += event.results[i][0].transcript;
            }
          }
        };

        document.getElementById('micbutton').addEventListener('touchstart', function(){
                  setTimeout(recognizer.stop(),10000);
            recognizer.start();  
        });

      }
    </script>

    <script src="{{  asset('packages/home/js/bootstrap.js') }}"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    </body>
</html>
