<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MAP</title>
	<LINK REL=stylesheet HREF="stylesheet.css">
	 
	<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyCY0zGvCjSaEYTJiJao4YJxPBAoQ4a1BwU" type="text/javascript"></script>
	 <script type="text/javascript">
	 //<![CDATA[
	 var map = null;
	 var geocoder = null;
	 function load() {
	 if (GBrowserIsCompatible()) {
	 map = new GMap2(document.getElementById("map"));
 map.addControl(new GSmallMapControl());
 
	geocoder = new GClientGeocoder();
	 
	// Here enter your url of ashx file
	GDownloadUrl("xml.php", function(data) {
	var xml = GXml.parse(data);
	var markers = xml.documentElement.getElementsByTagName("Musician");
	for (var i = 0; i < markers.length; i++) {
	 var name = markers[i].getAttribute("name");
	 var address = markers[i].getAttribute("address");
	 showAddress(address,name);
	}
	});
	 
	}
	}
	 
	function showAddress(address, name) {
	if (geocoder) {
	geocoder.getLatLng(
	name+","+address,
	function(point) {
	//if (!point) {
	 //alert(address + " not found");
	//} else {
	map.setCenter(point, 4);
	map.setUIToDefault();
	var marker = createMarker(point, name, address);
	map.addOverlay(marker); 
	//}
	});
	 
	}
	 
	}
	 
	function createMarker(point, name, address) {
	var marker = new GMarker(point);
	var html = "<b>" + name + "</b> <br/>" + address;
	GEvent.addListener(marker, 'click', function() {
	marker.openInfoWindowHtml(html);
	});
	 
	return marker;
	}
	 
	//]]>
	 
	</script>
	 
	</head>
	 
	<body onload="load()" onunload="GUnload()">
	<div id="pagetoolbar"></div>
	<div>
    <div id="page">
	<img src="../bandbase.png"/>
    	<div id="information">
	
	<div id="map" style="width: 1072px; height: 500px"></div>
		</div>
    </div>
	</div>
	</body>
	</html>