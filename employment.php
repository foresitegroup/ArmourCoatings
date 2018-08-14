<?php
$PageTitle = "Employment";
include "header.php";
?>

<div id="page-title">
  <div class="site-width">
    Employment Opportunities
  </div>
</div>

<div id="employment">
  <div class="site-width">
    <div>
      We are currently accepting applications for the following job descriptions:<br>
      <br>

      All positions Factory labor - 1st and 2nd shift<br>
      <br>

      Including:<br>
      <br>

      Production Conveyor Line
      <ul>
        <li>Loaders</li>
        <li>Unloaders/Packers</li>
        <li>Powder Painters</li>
        <li>General Laborers</li>
        <li>Sandblast Department</li>
        <li>Forklift / Material Handling</li>
        <li>Maintenance</li>
      </ul>
    </div>

    <div>
      <div>
        <h2>Want To Apply?</h2>

        <a href="pdf/Employment_Application.pdf" class="download">Download Application Form</a>

        Submit application form or resume online to<br>
        <br>

        <a href="mailto:info@armourcoatings.com">info@armourcoatings.com</a><br>
        <br>

        or stop in to our offices in person between <span>8am</span> and <span>4pm</span>
      </div>
    </div>
  </div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTbHAsLFN-nVXXIDAZiynPZT1DfoDyNwE"></script>
<script>
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
        "elementType": "geometry",
        "stylers": [{"color": "#212121"}]
      },
      {
        "elementType": "labels.text.fill",
        "stylers": [{"color": "#757575"}]
      },
      {
        "elementType": "labels.text.stroke",
        "stylers": [{"color": "#212121"}]
      },
      {
        "featureType": "administrative",
        "elementType": "geometry",
        "stylers": [{"color": "#757575"}]
      },
      {
        "featureType": "administrative.country",
        "elementType": "labels.text.fill",
        "stylers": [{"color": "#9e9e9e"}]
      },
      {
        "featureType": "administrative.land_parcel",
        "stylers": [{"visibility": "off"}]
      },
      {
        "featureType": "administrative.locality",
        "elementType": "labels.text.fill",
        "stylers": [{"color": "#bdbdbd"}]
      },
      {
        "featureType": "poi",
        "elementType": "labels.text.fill",
        "stylers": [{"color": "#757575"}]
      },
      {
        "featureType": "poi",
        "elementType": "labels.icon",
        "stylers": [{"visibility": "off"}]
      },
      {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [{"color": "#181818"}]
      },
      {
        "featureType": "poi.park",
        "elementType": "labels.text.fill",
        "stylers": [{"color": "#616161"}]
      },
      {
        "featureType": "poi.park",
        "elementType": "labels.text.stroke",
        "stylers": [{"color": "#1b1b1b"}]
      },
      {
        "featureType": "road",
        "elementType": "geometry.fill",
        "stylers": [{"color": "#2c2c2c"}]
      },
      {
        "featureType": "road",
        "elementType": "labels.text.fill",
        "stylers": [{"color": "#8a8a8a"}]
      },
      {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [{"color": "#373737"}]
      },
      {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [{"color": "#3c3c3c"}]
      },
      {
        "featureType": "road.highway.controlled_access",
        "elementType": "geometry",
        "stylers": [{"color": "#4e4e4e"}]
      },
      {
        "featureType": "road.local",
        "elementType": "labels.text.fill",
        "stylers": [{"color": "#616161"}]
      },
      {
        "featureType": "transit",
        "elementType": "labels.text.fill",
        "stylers": [{"color": "#757575"}]
      },
      {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [{"color": "#000000"}]
      },
      {
        "featureType": "water",
        "elementType": "labels.text.fill",
        "stylers": [{"color": "#3d3d3d"}]
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
</script>

<div id="contact">
  <div class="site-width">
    <div>
      <span>Armour Coatings Inc.</span><br><br>
      N113 W18950 Carnegie Drive<br>
      Germantown, WI 53022<br><br>
      Phone: 262-502-1600
    </div>
  </div>

  <div id="map-canvas"></div>
</div>

<?php include "footer.php"; ?>