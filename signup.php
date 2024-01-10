<?php
 include_once 'connect.php';
  
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO customer_info(name,email,password) VALUES('$name','$email','$password');";
mysqli_query($conn,$sql);