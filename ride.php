<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Use the geocoder without a map</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
<script src="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js"></script>
<link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet" />
<style>
    body { margin: 0; padding: 0; }
    #map { position: absolute; top: 0; bottom: 0; width: 100%; }
</style>
</head>
<body>
<form action="map1.php" id="register_user">
    <label for="username">Username</label>
    <input type="text" id="Username" name="Username" placeholder="Your Username..">

    <label for="address">address</label>
    <input type="text" id="address" name="address" placeholder="Your address..">

    <input type="submit" value="Submit" >
</form>

<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.min.js"></script>
<link
    rel="stylesheet"
    href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css"
    type="text/css"
/>
<!-- Promise polyfill script required to use Mapbox GL Geocoder in IE 11 -->
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>
<style>
    #geocoder {
        z-index: 1;
        width: 100%;
        text-align: center;
        top: 20px;
    }
    .mapboxgl-ctrl-geocoder {
        min-width: 100%;
    }
</style>
<div id="geocoder"></div>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiZHJhc2h0aWthbmVyaXlhIiwiYSI6ImNrZnk2dTg4czA1NjkydW9idHRrejRpZDcifQ.nk_CjxIeoSMUmi-PqfFj6Q';
    var geocoder = new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        types: 'country,region,place,postcode,locality,neighborhood'
    });

    geocoder.addTo('#geocoder');

    
</script>

</body>
</html>