<style type="text/css">
  .hid
{
  visibility: hidden;
  display: none;
}
</style>
<img src="copbil/fr.png" class="hid"  >
<img src="copbil/ger.png" class="hid"  >
<img src="copbil/it.png" class="hid"  >
<img src="copbil/esp.png" class="hid"  > 
<img src="copbil/au.png" class="hid"  >
<img src="copbil/por.png" class="hid"  >
<img src="copbil/hon.png" class="hid"  >
<img src="copbil/alg.png" class="hid"  >
<img src="copbil/mar.png" class="hid"  >
<img src="copbil/dji.png" class="hid"  >
<img src="copbil/mauri.png" class="hid"  >
<img src="copbil/seneg.png" class="hid"  >
<img src="copbil/image003.png" class="hid"  >
<img src="copbil/image004.jpg" class="hid"  > 
<img src="copbil/image005.gif" class="hid"  >
<img src="copbil/image006.png" class="hid"  >
<img src="copbil/jica.png" class="hid"  >
<img src="copbil/KOICA.png" class="hid"  >
<img src="copbil/SECO.png" class="hid"  >
<div id="chartdiv"></div>
<script type="text/javascript">
	
var chart = am4core.create("chartdiv", am4maps.MapChart);




chart.seriesContainer.draggable = false;
chart.seriesContainer.resizable = false;
chart.maxZoomLevel = 1;

// Set map definition
chart.geodata = am4geodata_worldLow;

// Set projection
chart.projection = new am4maps.projections.Miller();

// Create map polygon series
var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());

// Make map load polygon (like country names) data from GeoJSON
polygonSeries.useGeodata = true;

// Configure series
var polygonTemplate = polygonSeries.mapPolygons.template;
   polygonTemplate.tooltipText = "{name}";

polygonTemplate.fill = am4core.color("#d5e8ed");
// polygonTemplate.tooltipText.colorSet= am4core.color("#CEB1BE");
 
var imageSeries = chart.series.push(new am4maps.MapImageSeries());


var imageSeriesTemplate = imageSeries.mapImages.template;
var circle = imageSeries.mapImages.template.createChild(am4core.Circle);
circle.radius = 3;
circle.propertyFields.fill = "color";
circle.nonScaling = true;

var circle2 = imageSeries.mapImages.template.createChild(am4core.Circle);
circle2.radius = 3;
circle2.propertyFields.fill = "color";


circle2.events.on("inited", function(event){
  animateBullet(event.target);
})

imageSeries.mapImages.template.tooltipHTML = "<img src={flag} >";

imageSeriesTemplate.propertyFields.latitude = "latitude";
imageSeriesTemplate.propertyFields.longitude = "longitude";



function animateBullet(circle) {
    var animation = circle.animate([{ property: "scale", from: 1 / chart.zoomLevel, to: 5 / chart.zoomLevel }, { property: "opacity", from: 1, to: 0 }], 1000, am4core.ease.circleOut);
    animation.events.on("animationended", function(event){
      animateBullet(event.target.object);
    })
}

var colorSet = new am4core.ColorSet();

imageSeries.data = [
{
  "latitude": 48.856614,
  "longitude": 2.352222,
  "flag": "copbil/fr.png",
  "title": "Paris",
  "color":colorSet.next()

}, {
  "latitude": 50,
  "longitude": 10,
    "flag": "copbil/ger.png",

  "title": "gr",
  "color":colorSet.next()
}, {
  "latitude": 41,
  "longitude": 12,
    "flag": "copbil/it.png",
  "title": "it",
  "color":colorSet.next()
}, {
  "latitude": 40,
  "longitude": -4,
  "flag": "copbil/esp.png",
  "title": "esp",
  "color":colorSet.next()
}, {
  "latitude": 47,
  "longitude": 14,
    "flag": "copbil/au.png",
  "title": "aut",
  "color":colorSet.next()
}, {
  "latitude": 40,
  "longitude": -8,
    "flag": "copbil/por.png",
  "title": "Por",
  "color":colorSet.next()
}, {
  "latitude": 47,
  "longitude":19,
    "flag": "copbil/hon.png",
  "title": "Hon",
  "color":colorSet.next()
}, {
  "latitude": 33,
  "longitude": 3,
    "flag": "copbil/alg.png",
  "title": "alg",
  "color":colorSet.next()
}, {
  "latitude": 33,
  "longitude": -6,
    "flag": "copbil/mar.png",
  "title": "amr",
  "color":colorSet.next()
}, {
  "latitude": 11,
  "longitude": 42,
    "flag": "copbil/dji.png",
  "title": "Vancouver",
  "color":colorSet.next()
}, {
  "latitude": 20,
  "longitude": -10,
    "flag": "copbil/mauri.png",
  "title": "Vancouver",
  "color":colorSet.next()
}, {
  "latitude":14,
  "longitude": -14,
    "flag": "copbil/seneg.png",
  "title": "Vancouver",
  "color":colorSet.next()
}, {
  "latitude":61,
  "longitude": 8,
    "flag": "copbil/image004.jpg",
  "title": "Vancouver",
  "color":colorSet.next()
}, {
  "latitude":40,
  "longitude": -102,
    "flag": "copbil/image003.png",
  "title": "Vancouver",
  "color":colorSet.next()
}, {
  "latitude":57,
  "longitude": -101,
    "flag": "copbil/image005.gif",
  "title": "Vancouver",
  "color":colorSet.next()
}, {
  "latitude":22,
  "longitude": 78,
    "flag": "copbil/image006.png",
  "title": "Vancouver",
  "color":colorSet.next()
}, {
  "latitude":35,
  "longitude": 138,
    "flag": "copbil/jica.png",
  "title": "jica",
  "color":colorSet.next()
}, {
  "latitude":35,
  "longitude": 128,
    "flag": "copbil/KOICA.png",
  "title": "KOICA",
  "color":colorSet.next()
}, {
  "latitude":46,
  "longitude": 8,
    "flag": "copbil/SECO.png",
  "title": "Vancouver",
  "color":colorSet.next()
}];




















//var colorSet = new am4core.ColorSet();

// Create hover state and set alternative fill color
var hs = polygonTemplate.states.create("hover");
hs.properties.fill = am4core.color("#b2dde8");

// Remove Antarctica
polygonSeries.exclude = ["AQ"];

// Add some data
polygonSeries.data = [/*{
  "id": "US",
  "name": "United States",
  "value": 100,
  "fill": am4core.color("#F05C5C")
}, {
  "id": "FR",
  "name": "France",
  "value": 50,
  "fill": am4core.color("#5C5CFF")
},*/

{
    
   "id": "CH",
  "value": 50,
  "fill":colorSet.next(),


 
}, 
{
    
   "id": "DE",
  "value": 50,
  "fill":colorSet.next(),


 
}, {
  "id": "IT",
  "selected": true,
 
  "value": 50,
  "color":colorSet.next()
}, {
  "id": "ES",
  "selected": true,
    
  "value": 50,
    "fill":colorSet.next()
}, {
  "id": "AT",
  "selected": true,
    
  "value": 50,
    "fill":colorSet.next()
}, {
  "id": "FR",
  "selected": true,
    
  "value": 50,
    "fill":colorSet.next()
}, {
  "id": "PT",
  "selected": true,
    
  "value": 50,
    "fill":colorSet.next()
},{
  "id": "HU",
  "selected": true,
    
  "value": 50,
    "fill":colorSet.next()
}, {
  "id": "DZ",
  "selected": true,
    
  "value": 50,
    "fill":colorSet.next()
}, {
  "id": "MA",
  "selected": true,
    
  "value": 50,
    "fill":colorSet.next()
}, {
  "id": "DJ",
  "selected": true,
    
  "value": 50,
    "fill":colorSet.next()
}, {
  "id": "MR",
  "selected": true,
    
  "value": 50,
    "fill":colorSet.next()
}, {
  "id": "CA",
  "selected": true,
    
  "value": 50,
    "fill":colorSet.next()
}, {
  "id": "US",
  "selected": true,
    
  "value": 50,
    "fill":colorSet.next()
}, {
  "id": "JP",
  "selected": true,
    
  "value": 50,
    "fill":colorSet.next()
}, {
  "id": "IN",
  "selected": true,
    
  "value": 50,
    "fill":colorSet.next()
}, {
  "id": "CN",
  "selected": true,
    
  "value": 50,
    "fill":colorSet.next()
}, {
  "id": "KR",
  "selected": true,
    
  "value": 50,
    "fill":colorSet.next()
}, {
  "id": "NO",
  "selected": true,
    
  "value": 50,
    "fill":colorSet.next()
}];

// Bind "fill" property to "fill" key in data
polygonTemplate.propertyFields.fill = "fill";
</script>