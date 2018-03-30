<?php

$conn=mysqli_connect("localhost","root","root","Edufarm");
if(!$conn){
  die("connection failed!");
}
if(isset($_GET['email']) && isset($_GET['query']) && isset($_GET['des'])) {
  $email = $_GET['email'];
  $query = $_GET['query'];
  $des = $_GET['des'];

}

$sql="INSERT INTO ticket(email,query,des) VALUES ('$email','$query','$des')";
mysqli_query($conn,$sql);
echo("Your Support Ticket has been generated");


 ?>
