<style type="text/css">
  .hid
{
  visibility: hidden;
  display: none;
}
</style>
<img src="ome/tn.jpg" class="hid"  >
<img src="ome/fr1.png" class="hid"  >
<img src="ome/ma_1.png" class="hid"  >
<img src="ome/al.png" class="hid"  >
<img src="ome/kr.jpg" class="hid"  >
<img src="ome/lb.svg" class="hid"  >
<img src="ome/eg.jpg" class="hid"  >
 
 







<div id="d"></div>
<script type="text/javascript">
  
var chart = am4core.create("d", am4maps.MapChart);




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
var circle = imageSeriesTemplate.createChild(am4core.Circle);
circle.radius = 4;
circle.fill = am4core.color("#FFF");
circle.stroke = am4core.color("#000");
circle.strokeWidth = 2;
circle.nonScaling = true;
circle.tooltipText = "{title}";
imageSeries.mapImages.template.tooltipHTML = "<img src={flag} >";

imageSeriesTemplate.propertyFields.latitude = "latitude";
imageSeriesTemplate.propertyFields.longitude = "longitude";



var colorSet = new am4core.ColorSet();
 

imageSeries.data = [  {
  "latitude": 36,
  "longitude": 10,
    "flag": "ome/tn.jpg",
  "title": "TN"
}, {
  "latitude": 48,
  "longitude": 2,
    "flag": "ome/fr1.png",
  "title": "FR"
}, {
  "latitude": 33,
  "longitude": -7,
  "flag": "ome/ma_1.png",
  "title": "MA"
}, {
  "latitude": 32,
  "longitude": 3,
    "flag": "ome/al.png",
  "title": "DZ"
}, {
  "latitude": 31,
  "longitude": 36,
    "flag": "ome/kr.jpg",
  "title": "JO"
}, {
  "latitude": 34,
  "longitude":36,
    "flag": "ome/lb.svg",
  "title": "LB"
} , {
  "latitude": 30,
  "longitude":31,
    "flag": "ome/eg.jpg",
  "title": "EG"
} ];






















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
    
   "id": "EG",
  "value": 50,
  "fill":colorSet.next(),

 
},
{
    
   "id": "TN",
  "value": 50,
  "fill":colorSet.next(),

 
}, {
  "id": "FR",
  "selected": true,
 
  "value": 50,
  "fill": am4core.color("#5C5CFF")
}, {
  "id": "DZ",
  "selected": true,
    
  "value": 50,
    "fill":colorSet.next()
}, {
  "id": "LB",
  "selected": true,
    
  "value": 50,
    "fill":colorSet.next()
}, {
  "id": "JO",
  "selected": true,
    
  "value": 50,
    "fill":colorSet.next()
}, {
  "id": "MA",
  "selected": true,
    
  "value": 50,
    "fill":colorSet.next()

}];

// Bind "fill" property to "fill" key in data
polygonTemplate.propertyFields.fill = "fill";
</script>