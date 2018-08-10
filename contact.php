<?php
$PageTitle = "Contact";
include "header.php";
?>

<div id="page-title">
  <div class="site-width">
    Contact Armour Coatings

    <div id="page-title-text">
      Feel free to contact us anytime during the normal office hours of 7:00 a.m. to 4:30 p.m.
    </div>
  </div>
</div>

<div id="staff">
  <div class="site-width">
    <div>
      <img src="images/brad-dubnicka.jpg" alt="Brad Dubnicka">
      <h4>Brad Dubnicka</h4>
      <h5>General/Sales Manager</h5>
      <a href="mailto:bradd@armourcoatings.com"><span>bradd</span>@armourcoatings.com</a><br>
      (262)502-1600 <span>ext 206</span>
    </div>

    <div>
      <img src="images/mike-raab.jpg" alt="Mike Raab">
      <h4>Mike Raab</h4>
      <h5>Sales</h5>
      <a href="mailto:miker@armourcoatings.com"><span>miker</span>@armourcoatings.com</a><br>
      (262)502-1600 <span>ext 202</span>
    </div>

    <div>
      <img src="images/anna-yahnke.jpg" alt="Anna Yahnke">
      <h4>Anna Yahnke</h4>
      <h5>Accounts Receivable/Payable</h5>
      <a href="mailto:annaj@armourcoatings.com"><span>annaj</span>@armourcoatings.com</a><br>
      (262)502-1600 <span>ext 205</span>
    </div>

    <div>
      <img src="images/charles-meyer.jpg" alt="Charles Meyer">
      <h4>Charles Meyer</h4>
      <h5>Customer Service</h5>
      <a href="mailto:charlesm@armourcoatings.com"><span>charlesm</span>@armourcoatings.com</a><br>
      (262)502-1600 <span>ext 210</span>
    </div>

    <div>
      <img src="images/amanda-mutz.jpg" alt="Amanda Mutz">
      <h4>Amanda Mutz</h4>
      <h5>Finance + Accounts Manager</h5>
      <a href="mailto:amandam@armourcoatings.com"><span>amandam</span>@armourcoatings.com</a><br>
      (262)502-1600 <span>ext 204</span>
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
      Phone: 262-502-1600<br><br>
      Fax: 262-502-1616
    </div>
  </div>

  <div id="map-canvas"></div>
</div>

<?php include "footer.php"; ?>