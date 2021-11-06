@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body" id="mapid"></div>
</div>


@endsection


@section('styles')
    <link type="text/css" rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
<style>
    #mapid { min-height: 500px; }
</style>
@endsection

@push('scripts')
<!-- Make sure you put this AFTER Leaflet's CSS -->


        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>
<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script data-require="jquery@*" data-semver="2.2.0" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://npmcdn.com/leaflet-geometryutil"></script>



<script type="text/javascript">
    //inicio script mapa lo q esta en config viene de un arreglo
    var map = L.map('mapid').setView([{{ config('leaflet.map_center_latitude') }}, {{ config('leaflet.map_center_longitude') }}], {{ config('leaflet.zoom_level') }});
    //inicio capa con el modelo de mapa, usando openstreetmap y mapboxstreets
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a> Powered by Jzapata',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1
}).addTo(map);
//importante todo lo q quiera ser pintado en el mapa debe agregarse al nombre q tenga el mapa (map)

//arreglo con las coordenadas del àrea aproximada del downtown miami
var latlngs = [[25.756644, -80.190697],[25.761722, -80.199543],[25.766171, -80.199972],[25.766789, -80.200063],[25.766936, -80.200146],[25.768373, -80.199985],[25.771474, -80.198612],[25.772324, -80.198548],[25.777585, -80.203577],[25.778435, -80.206608],[25.778879, -80.195455],[25.780589, -80.195573],[25.781198, -80.195820],[25.786622, -80.196099],[25.788274, -80.196206],[25.794099, -80.194876],[25.791723, -80.194801],[25.791829, -80.185381],[25.787289, -80.185456],[25.777449, -80.185023],[25.779130, -80.183650],[25.778748, -80.183266],[25.775350, -80.185044],[25.774249, -80.184990],[25.769520, -80.182914],[25.769249, -80.182705],[25.769085, -80.182705],[25.763945, -80.184363],[25.756644, -80.190697]];
// inicio funcion L.polygon proveniente de la librería leaflet
var polygon = L.polygon(latlngs, {color: 'grey',title: "Coordinates"}).addTo(map);

// zoom the map to the polygon y su texto en a direcciòn centro y permanente true
map.fitBounds(polygon.getBounds());
 polygon.bindTooltip("Downtown Miami",
   {permanent: true, direction:"center"}
  ).openTooltip()

//coordenadas de arreglo de prueba
var lati = 25.76272990;
var lato = -80.19527350;
var latin = 25.76246575;
var laton = -80.19133949;


// manera de llamar el control de ruta con dirección pintandola con una línea roja

// var router = new L.Routing.OSRMv1();
// for (var i = 0; i < routeWaypoints.length; i++) {
//     router.route(routeWaypoints[i], function (err, routes) {
//         if (!err) {
//             L.routing.line(routes[0]).addTo(map);
//         }
//     });
// }

// for (var i = 0; i < routeWaypoints.length; i++) {

// var control = new L.Routing.control({

//   waypoints: [
//     L.latLng(25.76272990, -80.19527350),
//     L.latLng(25.76246575, -80.19133949)
//   ]
// }).addTo(map);

// var routeWaypoints = [
//   [new L.Routing.Waypoint([25.76272990, -80.19527350]), new L.Routing.Waypoint([25.76246575, -80.19133949])]
  
// ];


// manera de pintar marcador con ícono default en el mapa, 
//a partir de un arreglo outlets.index y su response.data

    // var markers = L.markerClusterGroup();

    // axios.get('{{ route('api.outlets.index') }}')
    // .then(function (response) {
    //     var marker = L.geoJSON(response.data, {
            
    //     });
        
    //     console.log(marker);
    //     markers.addLayer(marker);
    // })
    // .catch(function (error) {
    //     console.log(error);
    // });

    
    // map.addLayer(markers);



        // manera de llamar el control de ruta con dirección pintandola con una línea roja



//   var routeWaypoints = [
//   [new L.Routing.Waypoint([25.76272990, -80.19527350]), new L.Routing.Waypoint([25.76246575, -80.19133949])],
// ];

// var router = new L.Routing.OSRMv1();
// for (var i = 0; i < routeWaypoints.length; i++) {
//     router.route(routeWaypoints[i], function (err, routes) {
//         if (!err) {
//             L.routing.control(routes[0]).addTo(map);
//         }
//     });
// }




    // manera definitiva de llamar el control de ruta con dirección pintandola con una línea roja


    axios.get('{{ route('api.outlets.index') }}')
    .then(function (response) {
        console.log(response.data.features[1].properties.coordinate)
       

var control = L.Routing.control({
     waypoints: [
    L.latLng(response.data.features[0].properties.latitude, response.data.features[0].properties.longitude),L.latLng(response.data.features[1].properties.latitude, response.data.features[1].properties.longitude)
    ],
    router: new L.Routing.osrmv1({
    language: 'en',
    profile: 'car'
    }),
    geocoder: L.Control.Geocoder.nominatim({}),
    units: 'imperial',
    addWaypoints: false // previene q los usuarios puedan agregar nueva dirección,
                        // asumiendo q esta pantalla es la q pinta el pedido ya escogido
  
    }).addTo(map);



// función para calcular la distancia y entregarla en millas a partir de un arreglo y 
//trayéndose las dos primeras coordenadas en el index, la idea es q llamar a la matriz
 function refreshDistanceAndLength() {
  distance = L.GeometryUtil.distance(map, response.data.features[0].properties.coordinate, response.data.features[1].properties.coordinate);
  length = L.GeometryUtil.length([response.data.features[0].properties.coordinate, response.data.features[1].properties.coordinate]);
  document.getElementById('distance').innerHTML = distance;
  document.getElementById('length').innerHTML = length;
  console.log(distance)
}
 

});

       
        


// manera de llamar el control de ruta con dirección pintandola con una línea roja


// $.ajax({
//         dataType: "json",
//         url: "{{ route('api.outlets.index') }}",
//         success: function(data) {
//                 L.geoJson(data, {
//                     onEachFeature: onEachFeature
//                 }).addTo(map);

//         }
//      }).error(function() {});


//         function onEachFeature(feature, layer) {

// function onEachFeature(feature, layer) {
//    var popupContent = "<p>Hello world</p>";

//    layer.bindPopup(popupContent);
// }
            
// }
      



// manera de llamar el control de ruta con dirección pintandola con una línea roja



// var routeWaypoints = [
//   [new L.Routing.Waypoint([25.76272990, -80.19527350]), new L.Routing.Waypoint([25.76246575, -80.19133949])],
// ];

// var router = new L.Routing.OSRMv1();
// for (var i = 0; i < routeWaypoints.length; i++) {
//     router.route(routeWaypoints[i], function (err, routes) {
//         if (!err) {
//             L.routing.control(routes[0]).addTo(map);
//         }
//     });
// }



//inicio función que agrega nueva coordenada a partir de un click en el mapa

    @can('create', new App\Outlet)
    var theMarker;

    map.on('click', function(e) {
        let latitude = e.latlng.lat.toString().substring(0, 15);
        let longitude = e.latlng.lng.toString().substring(0, 15);

        if (theMarker != undefined) {
            map.removeLayer(theMarker);
        };

        var popupContent = "Your location : " + latitude + ", " + longitude + ".";
        popupContent += '<br><a href="{{ route('outlets.create') }}?latitude=' + latitude + '&longitude=' + longitude + '">Add new outlet here</a>';

        theMarker = L.marker([latitude, longitude]).addTo(map);
        theMarker.bindPopup(popupContent)
        .openPopup();
    });
    @endcan
</script>



    
@endpush


