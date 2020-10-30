<!DOCTYPE html>
<html>
<head>
<head>
<meta charset="utf-8">
<title>Use the geocoder without a map</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
<script src="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js"></script>
<!-- <link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet"> -->
<style>
    body { margin: 0; padding: 0; }
    #map { position: absolute; top: 0; bottom: 0; width: 100%; }
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
</head>
<body>


        <form action="map1.php" method="POST">
            
         <input type="text" class="mapboxgl-ctrl-geocoder--input" name="nm" placeholder="Seh" aria-label="Seh" style="display: none;"><input type="submit" name="submit" value="submit"></form><div class="suggestions-wrapper">
            <ul class="suggestions" ></ul>
        </div>

<div id="geocoder">
        <div class="mapboxgl-ctrl-geocoder--pin-right">
            <button aria-label="Clear" class="mapboxgl-ctrl-geocoder--button" style="display: none;">
                <svg class="mapboxgl-ctrl-geocoder--icon mapboxgl-ctrl-geocoder--icon-close" viewBox="0 0 18 18" xml:space="preserve" width="18" height="18">
                    <path d="M3.8 2.5c-.6 0-1.3.7-1.3 1.3 0 .3.2.7.5.8L7.2 9 3 13.2c-.3.3-.5.7-.5 1 0 .6.7 1.3 1.3 1.3.3 0 .7-.2 1-.5L9 10.8l4.2 4.2c.2.3.7.3 1 .3.6 0 1.3-.7 1.3-1.3 0-.3-.2-.7-.3-1l-4.4-4L15 4.6c.3-.2.5-.5.5-.8 0-.7-.7-1.3-1.3-1.3-.3 0-.7.2-1 .3L9 7.1 4.8 2.8c-.3-.1-.7-.3-1-.3z"></path>
                </svg>
            </button>
            <svg class="mapboxgl-ctrl-geocoder--icon mapboxgl-ctrl-geocoder--icon-loading" viewBox="0 0 18 18" xml:space="preserve" width="18" height="18" style="display: none;">
                <path fill="#333" d="M4.4 4.4l.8.8c2.1-2.1 5.5-2.1 7.6 0l.8-.8c-2.5-2.5-6.7-2.5-9.2 0z">
                </path>
                <path opacity=".1" d="M12.8 12.9c-2.1 2.1-5.5 2.1-7.6 0-2.1-2.1-2.1-5.5 0-7.7l-.8-.8c-2.5 2.5-2.5 6.7 0 9.2s6.6 2.5 9.2 0 2.5-6.6 0-9.2l-.8.8c2.2 2.1 2.2 5.6 0 7.7z"></path>
            </svg>
        </div>
    </div>
</div>
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.min.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css" type="text/css">
<!-- Promise polyfill script required to use Mapbox GL Geocoder in IE 11 -->
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>
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