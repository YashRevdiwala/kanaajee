<?php 
include('components/connection.php');

$email = $_POST['email1'];
$name = $_POST['first_name1'];
$lname = $_POST['last_name1'];
$pass = $_POST['password1'];
$name = $name." ".$lname;
                
$sql_e = "SELECT * FROM tbl_users WHERE email='$email'";
$res_e = mysqli_query($conn, $sql_e);

if(mysqli_num_rows($res_e) > 0){
  	$email_error = "Sorry... email already taken"; 
    echo $email_error;	
}else{
           $query = "INSERT INTO tbl_users (name, email, password) 
      	    	  VALUES ('$name', '$email', '$pass')";

           $result = mysqli_query($conn, $query);
}


?>

<script>
    window.location = "index.php";
</script>