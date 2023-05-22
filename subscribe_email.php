<?php 
include('components/connection.php');

$email = $_POST['email'];
                
$sql= " INSERT INTO subscribe (email) values ('$email')";
$result=mysqli_query($conn,$sql);
header("location:index.php");
exit;

?>