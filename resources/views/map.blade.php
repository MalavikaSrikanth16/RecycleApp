<!DOCTYPE html>
<html>
<style type="text/css">
html, body {
  height: 100%;
  margin: 0;
  padding: 0;
  overflow: hidden;
}
#map {
  height: 100%;
}
</style>
<body>
<div id="map"></div>
<!-- Replace the value of the key parameter with your own API key. -->
<script defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRoF20UcsDJVruk5fU0KTzsQzHVW5GXkI&callback=MapView">
</script>
<script>
function MapView() {
  var latlon={lat: 21.262437, lng:72.345234};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 10,
    center: latlon
  });
  var curr = new google.maps.Marker({
    map: map,
    draggable: false,
    animation: google.maps.Animation.DROP,
    position: latlon,
    icon: "{!! asset('home_images/mapmarker.png') !!}"
  });
var values = {!! $values !!};
var i;
var marker=[];
  for(i=0; i<values.length; i++){
    console.log(values[i]);
    latlon = {
      lat: parseFloat(values[i]['lat']),
      lng: parseFloat(values[i]['long'])
    };
  marker[i] = new google.maps.Marker({
      map: map,
      draggable: false,
      animation: google.maps.Animation.DROP,
      position: latlon,
      title:''+i
  });
  marker[i].addListener('click', function(){
      window.location='/details/'+values[parseInt(this.title)]['refid'];
    });
  marker[i].addListener('touchstart', function(){
      window.location='/details/'+values[parseInt(this.title)]['refid'];
    });
}
  console.log(marker);

}
</script>
</body>
</html>