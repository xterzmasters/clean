@extends('layouts.app')

@section('title', __('outlet.create'))

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">{{ __('outlet.create') }}</div>
            <form method="POST" action="{{ route('outlets.store') }}" accept-charset="UTF-8">
                {{ csrf_field() }}
                <div class="card-body">

                    <div class="form-group">
                                        <label for="uname">Search Address</label>
                                        <div id="search">
                                            <input style="width:50%" type="text" name="addr" value="" id="addr" size="58" />
                                            <button type="button" onclick="addr_search();">Search</button>
                                            <div id="results"></div>
                                            </div>
                                    </div>

                                     <div class="form-group" style="display:none;">
                       <label><b>Observations</b></label>
                        <textarea id="address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" rows="1">{{ old('address') }}</textarea>
                        {!! $errors->first('address', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                    </div>
                        <div class="form-group">
                       <label>Observations</label>
                        <textarea id="observations" class="form-control{{ $errors->has('observations') ? ' is-invalid' : '' }}" name="observations" rows="1">{{ old('observations') }}</textarea>
                        {!! $errors->first('observations', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                    </div>

                    <div class="form-group">
                    <input id="displayName" type="text" name="displayName" >
                    </div>
                                    
                    <div class="row" style="display: none;">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="latitude" class="control-label">{{ __('outlet.latitude') }}</label>
                                <input id="lat" type="text" class="form-control{{ $errors->has('latitude') ? ' is-invalid' : '' }}" name="latitude" value="{{ old('latitude', request('latitude')) }}" required>
                                {!! $errors->first('latitude', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="longitude" class="control-label">{{ __('outlet.longitude') }}</label>
                                <input id="lon" type="text" class="form-control{{ $errors->has('longitude') ? ' is-invalid' : '' }}" name="longitude" value="{{ old('longitude', request('longitude')) }}" required>
                                {!! $errors->first('longitude', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                            </div>
                        </div>
                    </div>
                    <div id="mapid"></div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="{{ __('outlet.create') }}" class="btn btn-success">
                    <a href="{{ route('outlets.index') }}" class="btn btn-link">{{ __('app.cancel') }}</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin=""/>

<style>
    #mapid { height: 300px; }
</style>
@endsection

@push('scripts')
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>
<script>
    var mapCenter = [{{ request('latitude', config('leaflet.map_center_latitude')) }}, {{ request('longitude', config('leaflet.map_center_longitude')) }}];
    var map = L.map('mapid').setView(mapCenter, {{ config('leaflet.zoom_level') }});

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a> Powered by Jzapata',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1
}).addTo(map);
var latlngs = [[25.756644, -80.190697],[25.761722, -80.199543],[25.766171, -80.199972],[25.766789, -80.200063],[25.766936, -80.200146],[25.768373, -80.199985],[25.771474, -80.198612],[25.772324, -80.198548],[25.777585, -80.203577],[25.778435, -80.206608],[25.778879, -80.195455],[25.780589, -80.195573],[25.781198, -80.195820],[25.786622, -80.196099],[25.788274, -80.196206],[25.794099, -80.194876],[25.791723, -80.194801],[25.791829, -80.185381],[25.787289, -80.185456],[25.777449, -80.185023],[25.779130, -80.183650],[25.778748, -80.183266],[25.775350, -80.185044],[25.774249, -80.184990],[25.769520, -80.182914],[25.769249, -80.182705],[25.769085, -80.182705],[25.763945, -80.184363],[25.756644, -80.190697]];

var polygon = L.polygon(latlngs, {color: 'grey',title: "Coordinates"}).addTo(map);

// zoom the map to the polygon
map.fitBounds(polygon.getBounds());
 polygon.bindTooltip("Downtown Miami",
   {permanent: true, direction:"center"}
  ).openTooltip()


    var marker = L.marker(mapCenter).addTo(map);
    var lat = marker.getLatLng().lat.toFixed(8);
 var lon = marker.getLatLng().lng.toFixed(8);
 
    function chooseAddr(lat, lng)
{
 marker.closePopup();
 map.setView([lat, lng],18);
 marker.setLatLng([lat, lng]);
 lat = lat.toFixed(8);
 lon = lng.toFixed(8);

 console.log(lat)
 document.getElementById('lat').value = lat;
 document.getElementById('lon').value = lon;
 

 marker.bindPopup("Pickup Address has been Selected").openPopup();
}

    function myFunction(arr)
{
 var out = "<b>Confirm Pickup Address:</b><br />";
 var i;

 if(arr.length > 0)
 {
  for(i = 0; i < arr.length; i++)
  {
   out += "<div class='address' title='Confirm Pickup Address' onclick='chooseAddr(" + arr[i].lat + ", " + arr[i].lon + ");return false;'>" + arr[i].display_name + "</div>";
  
  
  }
  document.getElementById('results').innerHTML = out;
  document.getElementById("results").style.cursor = "pointer";  
 }
 else
 {
  document.getElementById('results').innerHTML = "Sorry, no results...";
 }

}
    function addr_search(lat, lng)
{ 
 var inp = document.getElementById("addr");
 var lati = [lat].toString();
 var xmlhttp = new XMLHttpRequest();
 var url = "https://nominatim.openstreetmap.org/search?format=json&limit=3&q=" + lati + inp.value;
 xmlhttp.onreadystatechange = function()
 {
   if (this.readyState == 4 && this.status == 200)
   {
    var myArri = JSON.parse(this.responseText);
    myFunction(myArri);
         console.log(myArri)

   }
 };
 xmlhttp.open("GET", url, true);
 xmlhttp.send();

}
    function updateMarker(lat, lng) {
        var photoImg = '<img src="https://static.pexels.com/photos/189349/pexels-photo-189349.jpeg';
        marker
        .setLatLng([lat, lng])
        .bindPopup("Please confirm Pickup Adress" + photoImg)
        .openPopup();
        return false;
    };

    map.on('click', function(e) {
        let latitude = e.latlng.lat.toString().substring(0, 15);
        let longitude = e.latlng.lng.toString().substring(0, 15);
        $('#latitude').val(latitude);
        $('#longitude').val(longitude);
        updateMarker(latitude, longitude);
        var lati = [latitude, longitude].toString();
        console.log(lati)
        addr_search(lati);
        

        
    });

    var updateMarkerByInputs = function() {
        return updateMarker( $('#latitude').val() , $('#longitude').val());
    }
    $('#latitude').on('input', updateMarkerByInputs);
    $('#longitude').on('input', updateMarkerByInputs);
    $('#longitude').on('address', updateMarkerByInputs);
    
</script>
@endpush
