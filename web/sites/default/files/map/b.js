 
 
var map = AmCharts.makeChart("b",{
type: "map",
theme: "dark",
projection: "mercator",
panEventsEnabled : true,
backgroundColor : "#535364",
backgroundAlpha : 1,
zoomControl: {
zoomControlEnabled : true
},
dataProvider : {
map : "worldHigh",
getAreasFromMap : true,
areas :
[
	{
		"id": "AL",
		"showAsSelected": true
	},
	{
		"id": "AM",
		"showAsSelected": true
	},
	{
		"id": "AZ",
		"showAsSelected": true
	},
	{
		"id": "BY",
		"showAsSelected": true
	},
	{
		"id": "BE",
		"showAsSelected": true
	},
	{
		"id": "BA",
		"showAsSelected": true
	},
	{
		"id": "BG",
		"showAsSelected": true
	},
	{
		"id": "HR",
		"showAsSelected": true
	},
	{
		"id": "CY",
		"showAsSelected": true
	},
	{
		"id": "CZ",
		"showAsSelected": true
	},
	{
		"id": "DK",
		"showAsSelected": true
	},
	{
		"id": "EE",
		"showAsSelected": true
	},
	{
		"id": "FI",
		"showAsSelected": true
	},
	{
		"id": "FR",
		"showAsSelected": true
	},
	{
		"id": "GE",
		"showAsSelected": true
	},
	{
		"id": "DE",
		"showAsSelected": true
	},
	{
		"id": "GR",
		"showAsSelected": true
	},
	{
		"id": "HU",
		"showAsSelected": true
	},
	{
		"id": "IS",
		"showAsSelected": true
	},
	{
		"id": "IE",
		"showAsSelected": true
	},
	{
		"id": "IT",
		"showAsSelected": true
	},
	{
		"id": "LV",
		"showAsSelected": true
	},
	{
		"id": "LI",
		"showAsSelected": true
	},
	{
		"id": "LT",
		"showAsSelected": true
	},
	{
		"id": "LU",
		"showAsSelected": true
	},
	{
		"id": "MK",
		"showAsSelected": true
	},
	{
		"id": "MT",
		"showAsSelected": true
	},
	{
		"id": "MD",
		"showAsSelected": true
	},
	{
		"id": "MC",
		"showAsSelected": true
	},
	{
		"id": "ME",
		"showAsSelected": true
	},
	{
		"id": "NL",
		"showAsSelected": true
	},
	{
		"id": "NO",
		"showAsSelected": true
	},
	{
		"id": "PL",
		"showAsSelected": true
	},
	{
		"id": "PT",
		"showAsSelected": true
	},
	{
		"id": "RO",
		"showAsSelected": true
	},
	{
		"id": "RU",
		"showAsSelected": true
	},
	{
		"id": "RS",
		"showAsSelected": true
	},
	{
		"id": "SK",
		"showAsSelected": true
	},
	{
		"id": "SI",
		"showAsSelected": true
	},
	{
		"id": "ES",
		"showAsSelected": true
	},
	{
		"id": "SE",
		"showAsSelected": true
	},
	{
		"id": "CH",
		"showAsSelected": true
	},
	{
		"id": "TR",
		"showAsSelected": true
	},
	{
		"id": "UA",
		"showAsSelected": true
	},
	{
		"id": "GB",
		"showAsSelected": true
	},
	{
		"id": "AG",
		"showAsSelected": true
	},
	{
		"id": "BS",
		"showAsSelected": true
	},
	{
		"id": "BB",
		"showAsSelected": true
	},
	{
		"id": "CA",
		"showAsSelected": true
	},
	{
		"id": "CR",
		"showAsSelected": true
	},
	{
		"id": "CU",
		"showAsSelected": true
	},
	{
		"id": "SV",
		"showAsSelected": true
	},
	{
		"id": "GD",
		"showAsSelected": true
	},
	{
		"id": "JM",
		"showAsSelected": true
	},
	{
		"id": "MX",
		"showAsSelected": true
	},
	{
		"id": "NI",
		"showAsSelected": true
	},
	{
		"id": "PA",
		"showAsSelected": true
	},
	{
		"id": "KN",
		"showAsSelected": true
	},
	{
		"id": "LC",
		"showAsSelected": true
	},
	{
		"id": "VC",
		"showAsSelected": true
	},
	{
		"id": "TT",
		"showAsSelected": true
	},
	{
		"id": "US",
		"showAsSelected": true
	},
	{
		"id": "AR",
		"showAsSelected": true
	},
	{
		"id": "CO",
		"showAsSelected": true
	},
	{
		"id": "EC",
		"showAsSelected": true
	},
	{
		"id": "GY",
		"showAsSelected": true
	},
	{
		"id": "PY",
		"showAsSelected": true
	},
	{
		"id": "PE",
		"showAsSelected": true
	},
	{
		"id": "UY",
		"showAsSelected": true
	},
	{
		"id": "DZ",
		"showAsSelected": true
	},
	{
		"id": "AO",
		"showAsSelected": true
	},
	{
		"id": "BJ",
		"showAsSelected": true
	},
	{
		"id": "BW",
		"showAsSelected": true
	},
	{
		"id": "BF",
		"showAsSelected": true
	},
	{
		"id": "CM",
		"showAsSelected": true
	},
	{
		"id": "CV",
		"showAsSelected": true
	},
	{
		"id": "TD",
		"showAsSelected": true
	},
	{
		"id": "KM",
		"showAsSelected": true
	},
	{
		"id": "CI",
		"showAsSelected": true
	},
	{
		"id": "CD",
		"showAsSelected": true
	},
	{
		"id": "DJ",
		"showAsSelected": true
	},
	{
		"id": "EG",
		"showAsSelected": true
	},
	{
		"id": "ER",
		"showAsSelected": true
	},
	{
		"id": "SZ",
		"showAsSelected": true
	},
	{
		"id": "ET",
		"showAsSelected": true
	},
	{
		"id": "GA",
		"showAsSelected": true
	},
	{
		"id": "GM",
		"showAsSelected": true
	},
	{
		"id": "GH",
		"showAsSelected": true
	},
	{
		"id": "GN",
		"showAsSelected": true
	},
	{
		"id": "KE",
		"showAsSelected": true
	},
	{
		"id": "LS",
		"showAsSelected": true
	},
	{
		"id": "ML",
		"showAsSelected": true
	},
	{
		"id": "MR",
		"showAsSelected": true
	},
	{
		"id": "MU",
		"showAsSelected": true
	},
	{
		"id": "MA",
		"showAsSelected": true
	},
	{
		"id": "MZ",
		"showAsSelected": true
	},
	{
		"id": "NA",
		"showAsSelected": true
	},
	{
		"id": "NE",
		"showAsSelected": true
	},
	{
		"id": "NG",
		"showAsSelected": true
	},
	{
		"id": "RW",
		"showAsSelected": true
	},
	{
		"id": "ST",
		"showAsSelected": true
	},
	{
		"id": "SN",
		"showAsSelected": true
	},
	{
		"id": "SC",
		"showAsSelected": true
	},
	{
		"id": "SL",
		"showAsSelected": true
	},
	{
		"id": "SO",
		"showAsSelected": true
	},
	{
		"id": "ZA",
		"showAsSelected": true
	},
	{
		"id": "SD",
		"showAsSelected": true
	},
	{
		"id": "TG",
		"showAsSelected": true
	},
	{
		"id": "TN",
		"showAsSelected": true
	},
	{
		"id": "UG",
		"showAsSelected": true
	},
	{
		"id": "ZM",
		"showAsSelected": true
	},
	{
		"id": "ZW",
		"showAsSelected": true
	},
	{
		"id": "AF",
		"showAsSelected": true
	},
	{
		"id": "BH",
		"showAsSelected": true
	},
	{
		"id": "BD",
		"showAsSelected": true
	},
	{
		"id": "BT",
		"showAsSelected": true
	},
	{
		"id": "BN",
		"showAsSelected": true
	},
	{
		"id": "CN",
		"showAsSelected": true
	},
	{
		"id": "IN",
		"showAsSelected": true
	},
	{
		"id": "ID",
		"showAsSelected": true
	},
	{
		"id": "IR",
		"showAsSelected": true
	},
	{
		"id": "IQ",
		"showAsSelected": true
	},
	{
		"id": "IL",
		"showAsSelected": true
	},
	{
		"id": "JP",
		"showAsSelected": true
	},
	{
		"id": "JO",
		"showAsSelected": true
	},
	{
		"id": "KZ",
		"showAsSelected": true
	},
	{
		"id": "KW",
		"showAsSelected": true
	},
	{
		"id": "LB",
		"showAsSelected": true
	},
	{
		"id": "MY",
		"showAsSelected": true
	},
	{
		"id": "MV",
		"showAsSelected": true
	},
	{
		"id": "MN",
		"showAsSelected": true
	},
	{
		"id": "NP",
		"showAsSelected": true
	},
	{
		"id": "KP",
		"showAsSelected": true
	},
	{
		"id": "OM",
		"showAsSelected": true
	},
	{
		"id": "PK",
		"showAsSelected": true
	},
	{
		"id": "PS",
		"showAsSelected": true
	},
	{
		"id": "PH",
		"showAsSelected": true
	},
	{
		"id": "QA",
		"showAsSelected": true
	},
	{
		"id": "SA",
		"showAsSelected": true
	},
	{
		"id": "SG",
		"showAsSelected": true
	},
	{
		"id": "KR",
		"showAsSelected": true
	},
	{
		"id": "LK",
		"showAsSelected": true
	},
	{
		"id": "TJ",
		"showAsSelected": true
	},
	{
		"id": "TH",
		"showAsSelected": true
	},
	{
		"id": "TM",
		"showAsSelected": true
	},
	{
		"id": "AE",
		"showAsSelected": true
	},
	{
		"id": "UZ",
		"showAsSelected": true
	},
	{
		"id": "YE",
		"showAsSelected": true
	},
	{
		"id": "AU",
		"showAsSelected": true
	},
	{
		"id": "FJ",
		"showAsSelected": true
	},
	{
		"id": "KI",
		"showAsSelected": true
	},
	{
		"id": "NR",
		"showAsSelected": true
	},
	{
		"id": "NZ",
		"showAsSelected": true
	},
	{
		"id": "PW",
		"showAsSelected": true
	},
	{
		"id": "WS",
		"showAsSelected": true
	},
	{
		"id": "SB",
		"showAsSelected": true
	},
	{
		"id": "TO",
		"showAsSelected": true
	},
	{
		"id": "VU",
		"showAsSelected": true
	}
]
},
areasSettings : {
autoZoom : true,
color : "#B4B4B7",
colorSolid : "#84ADE9",
selectedColor : "#84ADE9",
outlineColor : "#666666",
rollOverColor : "#9EC2F7",
rollOverOutlineColor : "#000000"
}
});
 