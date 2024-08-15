<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/maps.js"></script>
<script src="https://cdn.amcharts.com/lib/4/geodata/worldLow.js"></script>

<div id="a"></div>

<script type="text/javascript">
	
var chart1 = am4core.create("a", am4maps.MapChart);



 



chart1.seriesContainer.draggable = false;
chart1.seriesContainer.resizable = false;
chart1.maxZoomLevel = 1;

// Set map definition
chart1.geodata = am4geodata_worldLow;

// Set projection
chart1.projection = new am4maps.projections.Miller();

// Create map polygon series
var polygonSeries = chart1.series.push(new am4maps.MapPolygonSeries());

// Make map load polygon (like country names) data from GeoJSON
polygonSeries.useGeodata = true;

// Configure series
var polygonTemplate = polygonSeries.mapPolygons.template;
polygonTemplate.tooltipText = "{name}";

polygonTemplate.fill = am4core.color("#d5e8ed");





var colorSet = new am4core.ColorSet();

// Create hover state and set alternative fill color
var hs = polygonTemplate.states.create("hover");
hs.properties.fill = am4core.color("#b2dde8");

// Remove Antarctica
polygonSeries.exclude = ["AQ"];

  polygonSeries.data = [
  
      {
        "id": "IT",//OK
        "showAsSelected": true,
        "fill":colorSet.next()
      }, 
      {
        "id": "DZ",//OK
        "showAsSelected": true,
        "fill":colorSet.next()
      },
      {
        "id": "MA",//OK
        "showAsSelected": true,
        "fill":colorSet.next()
      },
      {
        "id": "TN",//OK
        "showAsSelected": true,
        "fill":colorSet.next()
      },

      {
        "id": "LY",//OK
        "showAsSelected": true,
        "fill":colorSet.next()
      },

      {
        "id": "EG",//OK
        "showAsSelected": true,
        "fill":colorSet.next()
      }
  ];

 /*
  polygonSeries.data = [
   {
    "id": "FR",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "GR",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "IT",//OK
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "MT",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "PT",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "DZ",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "MA",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "TN",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "JO",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "LB",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "PS",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "ES",
    "showAsSelected": true,
     "fill":colorSet.next()
  },
  {
    "id": "SY",
    "showAsSelected": true,
      "fill":colorSet.next()
  }
  ];*/


 
// Add some data


// Bind "fill" property to "fill" key in data
polygonTemplate.propertyFields.fill = "fill";
</script>
	
 