<template>
<div style="height: 500px; width: 100%">
    <div style="height: 200px; overflow: auto;">
      <p>First marker is placed at {{ withPopup.lat }}, {{ withPopup.lng }}</p>
      <p>Center is at {{ currentCenter }} and the zoom is: {{ currentZoom }}</p>
      <button @click="showLongText">
        Toggle long popup
      </button>
      <button @click="showMap = !showMap">
        Toggle map
      </button>
    </div>
    <l-map
      v-if="showMap"
      :zoom="zoom"
      :polygon="polygon"
      :center="center"
      :options="mapOptions"
      style="height: 80%"
      @update:center="centerUpdate"
      @update:zoom="zoomUpdate"
    >
    <l-polygon
        :lat-lngs="polygon.latlngs"
        :color="polygon.color"
      />
      <l-tile-layer
        :url="url"
        :attribution="attribution"
      />
       <l-marker :lat-lng="[25.76272990, -80.19527350]">
            <l-icon
            :icon-size="dynamicSize"
            :icon-anchor="dynamicAnchor"
            icon-url="https://www.xterz.com/files/ranger.png" >
            </l-icon>
        </l-marker>
        <l-routing-machine :waypoints="waypoints"/>
    </l-map>
  </div>
</template>

<script>
import { latLng } from "leaflet";
import LRoutingMachine from './LRoutingMachine'
import {    LMap,
            LTileLayer, 
            LMarker, 
            LPopup, 
            LTooltip, 
            LPolygon,
            LIcon, 
        } from "vue2-leaflet";

export default {
  name: "Example",
  components: {
    LMap,
    LTileLayer,
    LMarker,
    LPopup,
    LTooltip,
    LPolygon,
    LIcon,
    LRoutingMachine
  },
  data() {
    return {
      zoom: 13,
      center: latLng(25.77405270, -80.19185630),
      url: 'https://api.mapbox.com/styles/v1/mapbox/streets-v11/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw',
      attribution:
        'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a> Powered by Jzapata',
      withPopup: latLng(25.76272990, -80.19527350),
      withTooltip: latLng(25.76246575, -80.19133949),
      currentZoom: 14,
      currentCenter: latLng(25.756644, -80.190697),
      showParagraph: false,
      mapOptions: {
        zoomSnap: 0.5
      },
      showMap: true,
      icon: L.icon({
        iconUrl: 'https://www.xterz.com/files/ranger.png',
        iconSize: [32, 37],
        iconAnchor: [16, 37]
      }),
      staticAnchor: [16, 37],
      customText: 'Foobar',
      iconSize: 44,
      polygon: {
        latlngs: [[25.756644, -80.190697],[25.761722, -80.199543],[25.766171, -80.199972],
        [25.766789, -80.200063],[25.766936, -80.200146],[25.768373, -80.199985],
        [25.771474, -80.198612],[25.772324, -80.198548],[25.777585, -80.203577],
        [25.778435, -80.206608],[25.778879, -80.195455],[25.780589, -80.195573],
        [25.781198, -80.195820],[25.786622, -80.196099],[25.788274, -80.196206],
        [25.794099, -80.194876],[25.791723, -80.194801],[25.791829, -80.185381],
        [25.787289, -80.185456],[25.777449, -80.185023],[25.779130, -80.183650],
        [25.778748, -80.183266],[25.775350, -80.185044],[25.774249, -80.184990],
        [25.769520, -80.182914],[25.769249, -80.182705],[25.769085, -80.182705],
        [25.763945, -80.184363],[25.756644, -80.190697]],
        color: "grey",
        direction:"center",
        
      },
      waypoints: [
        { lat: 25.76272990, lng: -80.19527350 },
        { lat: 25.76246575, lng: -80.19133949 }
      ]
    };
  },
  methods: {
    zoomUpdate(zoom) {
      this.currentZoom = zoom;
    },
    centerUpdate(center) {
      this.currentCenter = center;
    },
    showLongText() {
      this.showParagraph = !this.showParagraph;
    },
    innerClick() {
      alert("Click!");
    }
  },
  computed: {
    dynamicSize () {
        console.log(this.waypoints)
      return [this.iconSize, this.iconSize * 1.15];
      
    },
    dynamicAnchor () {
      return [this.iconSize / 2, this.iconSize * 1.15];
    }
  }

};
</script>

