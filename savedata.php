<?php

$name=$_POST['user1'];
$number=$_POST['user2'];
$email=$_POST['user3'];
$age=$_POST['user4'];
$gender=$_POST['user5'];
$blood_group=$_POST['user6'];
$address=$_POST['user7'];
$conn=mysqli_connect("localhost","root","","blood_donation") or die("Connection error");
$sql= "INSERT INTO donor_details(donor_name,donor_number,donor_mail,donor_age,donor_gender,donor_blood,donor_address) values('{$name}','{$number}','{$email}','{$age}','{$gender}','{$blood_group}','{$address}')";
$result=mysqli_query($conn,$sql) or die("query unsuccessful.");

header("Location: http://localhost/BDMS/home.php");

mysqli_close($conn);
 ?>
