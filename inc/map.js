function initialize() {
  var MyLatLng = new google.maps.LatLng(43.2235251,-88.1446000);
  var mapCanvas = document.getElementById('map-canvas');
  var mapOptions = {
    center: MyLatLng,
    zoom: 15,
    disableDefaultUI: true,
    scrollwheel: false,
    zoomControl: true,
    zoomControlOptions: {
      style: google.maps.ZoomControlStyle.SMALL,
      position: google.maps.ControlPosition.RIGHT_BOTTOM
    },
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }

  var map = new google.maps.Map(mapCanvas, mapOptions)
  map.set('styles', [
    {
      "featureType": "all",
      "elementType": "labels.text.fill",
      "stylers": [{"color": "#ffffff"} ]},
    {
      "featureType": "all",
      "elementType": "labels.text.stroke",
      "stylers": [{"visibility": "on"}, {"color": "#424b5b"}, {"weight": 2 }, {"gamma": "1"}]
    },
    {
      "featureType": "all",
      "elementType": "labels.icon",
      "stylers": [{"visibility": "off"}]
    },
    {
      "featureType": "administrative",
      "elementType": "geometry",
      "stylers": [{"weight": 0.6 }, {"color": "#545b6b"}, {"gamma": "0"}]
    },
    {
      "featureType": "landscape",
      "elementType": "geometry",
      "stylers": [{"color": "#545b6b"}, {"gamma": "1"}, {"weight": "10"}]
    },
    {
      "featureType": "poi",
      "elementType": "geometry",
      "stylers": [{"color": "#666c7b"}]
    },
    {
      "featureType": "poi.park",
      "elementType": "geometry",
      "stylers": [{"color": "#545b6b"}]
    },
    {
      "featureType": "road",
      "elementType": "geometry",
      "stylers": [{"color": "#424a5b"}, {"lightness": "0"}]
    },
    {
      "featureType": "transit",
      "elementType": "geometry",
      "stylers": [{"color": "#666c7b"}]
    },
    {
      "featureType": "water",
      "elementType": "geometry",
      "stylers": [{"color": "#2e3546"}]
    }
  ]);

  var marker = new google.maps.Marker({
    position: MyLatLng,
    map: map,
    icon: "images/map-pin.png"
  });

  var infowindow = new google.maps.InfoWindow({
    content: "<div id=\"content\"><div id=\"bodyContent\"><strong>Armour Coatings</strong><br>N113 W18950 Carnegie Drive<br>Germantown, WI 53022<br><a href=\"https://www.google.com/maps/place/Armour+Coatings/@43.2239251,-88.1491927,16z/data=!4m5!3m4!1s0x8804ff3944029ccb:0xe3cc179baf67c0e6!8m2!3d43.2239251!4d-88.1448153\" target=\"new\">View on Google Maps</a></div></div>"
  });

  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);