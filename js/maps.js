function initialize() {
var myLatlng = new google.maps.LatLng(10.307682,123.898727);
var mapOptions = {
	zoom: 16,
	center: myLatlng
}
var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

var marker = new google.maps.Marker({
	position: myLatlng,
	map: map,
	title: 'Visit us here'
});
}
google.maps.event.addDomListener(window, 'load', initialize);