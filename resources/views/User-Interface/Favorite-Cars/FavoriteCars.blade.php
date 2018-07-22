<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
var geocoder = new google.maps.Geocoder();
var newmarker;

function geocodePosition(pos) {
  geocoder.geocode({
    latLng: pos
  }, function(responses) {
    if (responses && responses.length > 0) {
      updateMarkerAddress(responses[0].formatted_address);
    } else {
      updateMarkerAddress('Cannot determine address at this location.');
    }
  });
}

function updateMarkerStatus(str) {
  document.getElementById('markerStatus').innerHTML = str;
}

function updateMarkerPosition(latLng) {
  document.getElementById('info').innerHTML = [
    latLng.lat(),
    latLng.lng()
  ].join(', ');
}
function updateMarkerLat(latLng) {
  document.getElementById('latnew').innerHTML = [
     latLng.lat()
  ];
}
function updateMarkerLng(latLng) {
  document.getElementById('lngnew').innerHTML = [
    latLng.lng()
  ];
}

function updateMarkerAddress(str) {
  document.getElementById('address').innerHTML = str;
}

function initialize() {
  var latLng = new google.maps.LatLng(-7.8,110.3666667);
  var map = new google.maps.Map(document.getElementById('mapCanvas'), {
    zoom: 13,
    center: latLng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });


  google.maps.event.addListener(map, "rightclick", function(event) {
        placeMarker(event.latLng);
    });


    function placeMarker(location) {
        var newmarker = new google.maps.Marker({
            position: location,
            map: map,
            draggable: true
        });


        var form = 
            '<div id="bodyContent">'+
            '<b>New Map</b>' +
            '<form method="post">'+
            '<table>'+
            '<tr><td>Name place :<input type="text" name="name"/></td></tr>'+
            '<tr><td>Latitude :<input type="text" name="latitude" value="latnew"/></td></tr>'+
            '<tr><td>Longitude: <input type="text" name="longitude" value="lngnew"/></td></tr>'+
            '<tr><td><input type="submit" value="save"></td></tr>'+
            '</table>'+
            '</form>'+
            '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: form,
            maxWidth :500
        });

        google.maps.event.addListener(newmarker, 'click', function() {
            infowindow.open(map,newmarker);
            //marker1.openInfoWindowHtml('Some text', {noCloseOnClick: 'false'});
        });

        // Update current position info.
        updateMarkerPosition(latLng);
        updateMarkerLat(latLng);
        updateMarkerLng(latLng);
        geocodePosition(latLng);

        // Add dragging event listeners.
        google.maps.event.addListener(newmarker, 'dragstart', function() {
            updateMarkerAddress('Dragging...');
        });

        google.maps.event.addListener(newmarker, 'drag', function() {
            updateMarkerStatus('Dragging...');
            updateMarkerPosition(newmarker.getPosition());
            updateMarkerLat(newmarker.getPosition());
            updateMarkerLng(newmarker.getPosition());
        });

        google.maps.event.addListener(newmarker, 'dragend', function() {
            updateMarkerStatus('Drag ended');
            geocodePosition(newmarker.getPosition());
            updateMarkerLat(newmarker.getPosition());
            updateMarkerLng(newmarker.getPosition());
        });
    }


}

// Onload handler to fire off the app.
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>
<body>
  <style>
  #mapCanvas {
    width: 500px;
    height: 400px;
    float: left;
  }
  #infoPanel {
    float: left;
    margin-left: 10px;
  }
  #infoPanel div {
    margin-bottom: 5px;
  }
  </style>

  <div id="mapCanvas"></div>
  <div id="infoPanel">
    <b>Marker status:</b>

    <div id="markerStatus"><i>Click and drag the marker.</i></div>
    <b>Current position:</b>
    <div id="info"></div>
    <div id="latnew"></div><div id="lngnew"></div>
    <b>Closest matching address:</b>
    <div id="address"></div>
  </div>
</body>
</html>