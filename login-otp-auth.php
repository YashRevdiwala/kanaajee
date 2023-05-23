<?php
include('components/connection.php');
session_start();
if (isset($_SESSION['email1'])) {
   $email = $_SESSION['email1'];
} else {
   $email = '';
};

$phoneNumber = $_POST['phoneNumber'];

// Check if the phone number exists in the database
$sql = "SELECT * FROM tbl_users WHERE mobile = '$phoneNumber'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Phone number exists
    echo "exists";
} else {
    // Phone number does not exist
    echo "not_exists";
}
?>