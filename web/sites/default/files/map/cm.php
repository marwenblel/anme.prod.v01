<style type="text/css">
  .hid
{
  visibility: hidden;
  display: none;
}
</style>
<img src="copmul/ue.png" class="hid"  >
<img src="copmul/undp.png" class="hid"  >
<img src="copmul/wb.png" class="hid"  >
<img src="copmul/pnue.png" class="hid"  > 
<img src="copmul/gef.png" class="hid"  >
<img src="copmul/ffem.png" class="hid"  >
<img src="copmul/eb.png" class="hid"  >
<img src="copmul/bafr.png" class="hid"  >
<img src="copmul/afrec.png" class="hid"  >
<img src="copmul/wb.png" class="hid"  >
<img src="copmul/copmul.png" class="hid"  >
<div id="chartdivf"></div>
<script type="text/javascript">
	
var chart = am4core.create("chartdivf", am4maps.MapChart);




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
circle.radius = 0.5;
circle.propertyFields.fill = "color";
circle.nonScaling = true;

var circle2 = imageSeries.mapImages.template.createChild(am4core.Circle);
circle2.radius = 0.5;
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
imageSeries.data = [{
  "latitude": 50.856614,
  "longitude": 4.352222,
  "title": "Bruxelles ",
  "flag": "copmul/ue.png",
  "color":colorSet.next()
}, {
  "latitude": 40.712775,
  "longitude": -84.005973,
  "title": "New York",
  "flag": "copmul/undp.png",
  "color":colorSet.next()
}, {
  "latitude": 38.282729,
  "longitude": -70.120738,
  "title": "Vancouver",
  "flag": "copmul/wb.png",
  "color":colorSet.next()
}, {
  "latitude": -1.282729,
  "longitude": 36.120738,
  "title": "pnue",
  "flag": "copmul/pnue.png",
  "color":colorSet.next()
}, {
  "latitude": 7.282729,
  "longitude": -74.120738,
  "title": "gef",
  "flag": "copmul/gef.png",
  "color":colorSet.next()
}, {
  "latitude": 48.282729,
  "longitude": 2.120738,
  "title": "France-FFEM",
  "flag": "copmul/ffem.png",
  "color":colorSet.next()
}, {
  "latitude": 51.282729,
  "longitude": 22.120738,
  "title": "Poland",
  "flag": "copmul/eb.png",
  "color":colorSet.next()
}, {
  "latitude": 5.282729,
  "longitude": -4.120738,
  "title": "cote d'ivoire",
  "flag": "copmul/bafr.png",
  "color":colorSet.next()
}, {
  "latitude": 9.282729,
  "longitude": 38.120738,
  "title": "Ethiopian",
  "flag": "copmul/afrec.png",
  "color":colorSet.next()
}, {
  "latitude": 38.282729,
  "longitude": -70.120738,
  "title": "US",
  "flag": "copmul/wb.png",
  "color":colorSet.next()
}
, {
  "latitude": 35.68222 ,
  "longitude": 33.82386 ,
  "title": "escwa",
  "flag": "copmul/copmul.png",
  "color":colorSet.next()
}];
// imageSeries.data = [
// {
//   "latitude": 48.856614,
//   "longitude": 2.352222,
//   "flag": "copbil/ue.png",
//   "title": "Paris",
//   "color":colorSet.next()

// }, {
//   "latitude": 50,
//   "longitude": 10,
//     "flag": "copbil/ger.png",

//   "title": "gr",
//   "color":colorSet.next()
// }, {
//   "latitude": 41,
//   "longitude": 12,
//     "flag": "copbil/it.png",
//   "title": "it",
//   "color":colorSet.next()
// }, {
//   "latitude": 40,
//   "longitude": -4,
//   "flag": "copbil/esp.png",
//   "title": "esp",
//   "color":colorSet.next()
// }, {
//   "latitude": 47,
//   "longitude": 14,
//     "flag": "copbil/au.png",
//   "title": "aut",
//   "color":colorSet.next()
// }, {
//   "latitude": 40,
//   "longitude": -8,
//     "flag": "copbil/por.png",
//   "title": "Por",
//   "color":colorSet.next()
// }, {
//   "latitude": 47,
//   "longitude":19,
//     "flag": "copbil/hon.png",
//   "title": "Hon",
//   "color":colorSet.next()
// }, {
//   "latitude": 33,
//   "longitude": 3,
//     "flag": "copbil/alg.png",
//   "title": "alg",
//   "color":colorSet.next()
// }, {
//   "latitude": 33,
//   "longitude": -6,
//     "flag": "copbil/mar.png",
//   "title": "amr",
//   "color":colorSet.next()
// }, {
//   "latitude": 11,
//   "longitude": 42,
//     "flag": "copbil/dji.png",
//   "title": "Vancouver",
//   "color":colorSet.next()
// }, {
//   "latitude": 20,
//   "longitude": -10,
//     "flag": "copbil/mauri.png",
//   "title": "Vancouver",
//   "color":colorSet.next()
// }, {
//   "latitude":14,
//   "longitude": -14,
//     "flag": "copbil/seneg.png",
//   "title": "Vancouver",
//   "color":colorSet.next()
// }, {
//   "latitude":61,
//   "longitude": 8,
//     "flag": "copbil/image004.jpg",
//   "title": "Vancouver",
//   "color":colorSet.next()
// }, {
//   "latitude":40,
//   "longitude": -102,
//     "flag": "copbil/image003.png",
//   "title": "Vancouver",
//   "color":colorSet.next()
// }, {
//   "latitude":57,
//   "longitude": -101,
//     "flag": "copbil/image005.gif",
//   "title": "Vancouver",
//   "color":colorSet.next()
// }, {
//   "latitude":22,
//   "longitude": 78,
//     "flag": "copbil/image006.png",
//   "title": "Vancouver",
//   "color":colorSet.next()
// }, {
//   "latitude":35,
//   "longitude": 138,
//     "flag": "copbil/jica.png",
//   "title": "jica",
//   "color":colorSet.next()
// }, {
//   "latitude":35,
//   "longitude": 128,
//     "flag": "copbil/KOICA.png",
//   "title": "KOICA",
//   "color":colorSet.next()
// }, {
//   "latitude":46,
//   "longitude": 8,
//     "flag": "copbil/SECO.png",
//   "title": "Vancouver",
//   "color":colorSet.next()
// }];
















 
 
</script>