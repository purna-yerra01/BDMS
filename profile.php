<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body><center>
<div class="row">
<?php 
  include 'conn.php';
  session_start();
  $uid = $_SESSION['username'];
  $sql= "SELECT * FROM  users WHERE users.username = '$uid' ";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0)   {
  while($row = mysqli_fetch_assoc($result)) {
      ?>

      <div class="col-lg-4 col-sm-6 portfolio-item" ><br>
      <div class="card" style="width:300px">
          <img class="card-img-top" src="image\blood_drop_logo.jpg" alt="Card image" style="width:100%;height:300px">
          <div class="card-body">
            <b>Name : </b> <?php echo $row['username']; ?>
            <p class="card-text">
              <b>Blood Group : </b> <?php echo $row['blood']; ?><br>
              <b>Mobile No. : </b> <?php echo $row['phone']; ?><br>
              <b>Gender : </b><?php echo $row['gender']; ?><br>
              <b>Age : </b> <?php echo $row['age']; ?><br>
              <b>Email : </b> <?php echo $row['email']; ?><br>
              <b>Address : </b> <?php echo $row['address']; ?><br>
            </p>
            <div id="googleMap" style="width:100%;height:400px;"></div>
            <div id="google_map" style="width:800px;height:400px;"></div>

<script type="text/javascript" src="http://www.google.com/jsapi?key=<%=google_map_api_key%>"></script>
<script type="text/javascript">

  var LATITUDE_ELEMENT_ID = "course_latitude";
  var LONGITUDE_ELEMENT_ID = "course_longitude";
  var MAP_DIV_ELEMENT_ID = "google_map";

  var DEFAULT_ZOOM_WHEN_NO_COORDINATE_EXISTS = 1;
  var DEFAULT_CENTER_LATITUDE = 22;
  var DEFAULT_CENTER_LONGITUDE = 13;
  var DEFAULT_ZOOM_WHEN_COORDINATE_EXISTS = 15;

  // This is the zoom level required to position the marker
  var REQUIRED_ZOOM = 15;

  google.load("maps", "2.x");

  // The google map variable
  var map = null;

  // The marker variable, when it is null no marker has been added
  var marker = null;

  function initializeGoogleMap() {
    map = new google.maps.Map2(document.getElementById(MAP_DIV_ELEMENT_ID));
    map.addControl(new GLargeMapControl());
    map.addControl(new GMapTypeControl());

    map.setMapType(G_NORMAL_MAP);

    var latitude = +document.getElementById(LATITUDE_ELEMENT_ID).value;
    var longitude = +document.getElementById(LONGITUDE_ELEMENT_ID).value;

    if(latitude != 0 && longitude != 0) {
      //We have some sort of starting position, set map center and marker
      map.setCenter(new google.maps.LatLng(latitude, longitude), DEFAULT_ZOOM_WHEN_COORDINATE_EXISTS);
      var point = new GLatLng(latitude, longitude);
      marker = new GMarker(point, {draggable:false});
      map.addOverlay(marker);
    } else {
      // Just set the default center, do not add a marker
      map.setCenter(new google.maps.LatLng(DEFAULT_CENTER_LATITUDE, DEFAULT_CENTER_LONGITUDE), DEFAULT_ZOOM_WHEN_NO_COORDINATE_EXISTS);
    }

    GEvent.addListener(map, "click", googleMapClickHandler);
  }


  function googleMapClickHandler(overlay, latlng, overlaylatlng) {

    if(map.getZoom() < REQUIRED_ZOOM) {
      alert("You need to zoom in more to set the location accurately." );
      return;
    }
    if(marker == null) {
      marker = new GMarker(latlng, {draggable:false});
      map.addOverlay(marker);
    }
    else {
      marker.setLatLng(latlng);
    }

    document.getElementById(LATITUDE_ELEMENT_ID).value = latlng.lat();
    document.getElementById(LONGITUDE_ELEMENT_ID).value = latlng.lng();

  }

  google.setOnLoadCallback(initializeGoogleMap);



</script>
          </div>
          <div class="row">
  <div class="col-lg-4 mb-4">
 
  </div>
</div>
        </div>
  </div>
  <?php
    }
  }
  ?>
</body>
</html>
 