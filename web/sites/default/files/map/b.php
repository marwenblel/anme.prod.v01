<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/maps.js"></script>
<script src="https://cdn.amcharts.com/lib/4/geodata/worldLow.js"></script>

<div id="b"></div>

<script type="text/javascript">
	
var chart1 = am4core.create("b", am4maps.MapChart);



 



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
    "id": "AL",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "AM",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "AZ",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "BY",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "BE",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "BA",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "BG",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "HR",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "CY",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "CZ",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "DK",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "EE",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "FI",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "FR",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "GE",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "DE",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "GR",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "HU",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "IS",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "IE",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "IT",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "LV",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "LI",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "LT",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "LU",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "MK",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "MT",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "MD",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "MC",
    "showAsSelected": true,
          "fill":colorSet.next()
  }, 
  {
    "id": "ME",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "NL",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "NO",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "PL",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "PT",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "RO",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "RU",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "RS",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "SK",
    "showAsSelected": true,
          "fill":colorSet.next()
  },
  {
    "id": "SI",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "ES",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "SE",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "CH",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "TR",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "UA",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "GB",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "AG",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "BS",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "BB",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "CA",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "CR",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "CU",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "SV",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "GD",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "JM",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "MX",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "NI",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "PA",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "KN",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "LC",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "VC",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "TT",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "US",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "AR",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "CO",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "EC",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "GY",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "PY",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "PE",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "UY",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "DZ",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "AO",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "BJ",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "BW",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "BF",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "CM",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "CV",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "TD",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "KM",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "CI",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "CD",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "DJ",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "EG",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "ER",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "SZ",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "ET",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "GA",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "GM",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "GH",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "GN",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "KE",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "LS",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "ML",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "MR",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "MU",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "MA",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "MZ",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "NA",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "NE",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "NG",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "RW",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "ST",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "SN",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "SC",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "SL",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "SO",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "ZA",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "SD",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "TG",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "TN",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "UG",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "ZM",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "ZW",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "AF",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "BH",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "BD",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "BT",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "BN",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "CN",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "IN",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "ID",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "IR",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "IQ", 
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "IL",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "JP",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "JO",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "KZ",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "KW",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "LB",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "MY",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "MV",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "MN",
    "showAsSelected": true
  },
  {
    "id": "NP",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "KP",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "OM",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "PK",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "PS",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "PH",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "QA",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "SA",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "SG",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "KR",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "LK",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "TJ",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "TH",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "TM",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "AE",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "UZ",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "YE",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "AU",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "FJ",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "KI",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "NR",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "NZ",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "PW",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "WS",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "SB",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "TO",
    "showAsSelected": true,
      "fill":colorSet.next()
  },
  {
    "id": "VU",
    "showAsSelected": true,
      "fill":colorSet.next()
  }
  ];


 
// Add some data


// Bind "fill" property to "fill" key in data
polygonTemplate.propertyFields.fill = "fill";
</script>
	
 