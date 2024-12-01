<?php

$con = mysqli_connect("localhost","root","","portfolio");
if($con->connect_error){
    die("Connection Failed ".$con->connect_error);
}
$name=$_POST["name"];
$email=$_POST["email"];
$message=$_POST["message"];
$sql="insert into portfolio_contact(`name`,`email`,`message`)values('$name','$email','$message');";
mysqli_query($con,$sql);
header('http://localhost/My-portfolio/')

?>
