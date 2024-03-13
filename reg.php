<?php

include "config.php";
$conn = mysqli_connect('localhost', 'root', '', 'blood_donation');

if (isset($_POST['submit'])) {

    $username = $_POST['username'];

    $password = $_POST['password'];

    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $blood = $_POST['blood'];

    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    
    $sql = "INSERT INTO `users`(username,pswd,phone,blood,gender,age,address,email) VALUES ('$username','$password','$phone','$blood','$gender','$age','$address','$email')";

    $password = password_hash($password, PASSWORD_DEFAULT);
    $result = $conn->query($sql);

    if ($result == TRUE) {

        echo "New record created successfully.";
        echo "<a href='index.php'>click here</a>";
    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
