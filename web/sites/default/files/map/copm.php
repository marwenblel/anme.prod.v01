

 <style type="text/css">
   image:hover{
 transform: scale(2.5);
   }
 </style>
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/maps.js"></script>
<script src="https://www.amcharts.com/lib/4/geodata/worldLow.js"></script>
<div id="chartdiva"></div>

<script type="text/javascript">
	/**
 * ---------------------------------------
 * This demo was created using amCharts 4.
 *
 * For more information visit:
 * https://www.amcharts.com/
 *
 * Documentation is available at:
 * https://www.amcharts.com/docs/v4/
 * ---------------------------------------
 */

// Create map instance
var chart = am4core.create("chartdiva", am4maps.MapChart);

// Set map definition
chart.geodata = am4geodata_worldLow;

// Set projection
chart.projection = new am4maps.projections.Miller();

// Create map polygon series
var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());
polygonSeries.useGeodata = true;
polygonSeries.exclude = ["AQ"];
polygonTemplate.fill = am4core.color("#74B266");


var polygonTemplate = polygonSeries.mapPolygons.template;
polygonTemplate.tooltipText = "{name}";
polygonTemplate.fill = chart.colors.getIndex(0);
polygonTemplate.nonScalingStroke = true;



// Create hover state and set alternative fill color
var hsa = polygonTemplate.states.create("hover");
hsa.properties.fill = am4core.color("#367B25");
// Create image series
var imageSeries = chart.series.push(new am4maps.MapImageSeries());












// Create image
var imageSeriesTemplate = imageSeries.mapImages.template;
var marker = imageSeriesTemplate.createChild(am4core.Image);
  marker.width = 128;
marker.height = 128;   
marker.nonScaling = true;
marker.tooltipText = "{title}";
marker.horizontalCenter = "middle";
marker.verticalCenter = "middle";
marker.propertyFields.href = "flag";
marker.hover
// Set property fields
imageSeriesTemplate.propertyFields.latitude = "latitude";
imageSeriesTemplate.propertyFields.longitude = "longitude";

// Add data for the three cities
imageSeries.data = [{
  "latitude": 50.856614,
  "longitude": 4.352222,
  "title": "Bruxelles ",
  "flag": "copmul/ue.png"
}, {
  "latitude": 40.712775,
  "longitude": -84.005973,
  "title": "New York",
  "flag": "copmul/undp.png"
}, {
  "latitude": 38.282729,
  "longitude": -70.120738,
  "title": "Vancouver",
  "flag": "copmul/wb.png"
}, {
  "latitude": -1.282729,
  "longitude": 36.120738,
  "title": "pnue",
  "flag": "copmul/pnue.png"
}, {
  "latitude": 7.282729,
  "longitude": -74.120738,
  "title": "gef",
  "flag": "copmul/gef.png"
}, {
  "latitude": 48.282729,
  "longitude": 2.120738,
  "title": "France-FFEM",
  "flag": "copmul/ffem.png"
}, {
  "latitude": 51.282729,
  "longitude": 22.120738,
  "title": "Poland",
  "flag": "copmul/eb.png"
}, {
  "latitude": 5.282729,
  "longitude": -4.120738,
  "title": "cote d'ivoire",
  "flag": "copmul/bafr.png"
}, {
  "latitude": 9.282729,
  "longitude": 38.120738,
  "title": "Ethiopian",
  "flag": "copmul/afrec.png"
}, {
  "latitude": 38.282729,
  "longitude": -70.120738,
  "title": "US",
  "flag": "copmul/wb.png"
}];
</script>