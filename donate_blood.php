<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<?php
$active ='donate';
 include('head.php');
 include 'conn.php';
  session_start();
  $uid = $_SESSION['username'];
  $sql= "SELECT * FROM  users WHERE users.username = '$uid' ";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0)   {
  while($row = mysqli_fetch_assoc($result)) {
 ?>

<div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;">
  <div class="container">
  <div id="content-wrap" style="padding-bottom:50px;">
<div class="row">
    <div class="col-lg-6">
        <h1 class="mt-4 mb-3">Donate Blood </h1>
      </div>
</div>
<form  action="savedata.php" method="post">
<div class="col-lg-4 col-sm-6 portfolio-item" ><br>
      <div class="card" style="width:300px">
          <div class="card-body">
            <b>Name : </b> <?php echo $row['username']; ?>
            <input type="hidden" id="user1" name="user1" value="<?php echo $row['username']; ?>">

            <p class="card-text">
              <b>Blood Group : </b> <?php echo $row['blood']; ?><br>
              <input type="hidden" id="user6" name="user6" value="<?php echo $row['blood']; ?>">

              <b>Mobile No. : </b> <?php echo $row['phone']; ?><br>
              <input type="hidden" id="user2" name="user2" value="<?php echo $row['phone']; ?>">

              <b>Gender : </b><?php echo $row['gender']; ?><br>
              <input type="hidden" id="user5" name="user5" value="<?php echo $row['gender']; ?>">


              <b>Age : </b> <?php echo $row['age']; ?><br>
              <input type="hidden" id="user4" name="user4" value="<?php echo $row['age']; ?>">

              <b>Email : </b> <?php echo $row['email']; ?><br>
              <input type="hidden" id="user3" name="user3" value="<?php echo $row['email']; ?>">

              <b>Address : </b> <?php echo $row['address']; ?><br>
              <input type="hidden" id="user7" name="user7" value="<?php echo $row['address']; ?>">
            </p>
    
          </div>
<div class="row">
  <div class="col-lg-4 mb-4">
  <div><input type="submit" name="submit" class="btn btn-primary" value="Submit" style="cursor:pointer"></div>
  </div>
</div>
<?php
    }
  }
  else
    {

        echo '<div class="alert alert-danger">No Donor Found For your search Blood group </div>';

    }
  ?>
</div>
</div>
<?php include('footer.php') ?>
</div>
</body>
</html>
