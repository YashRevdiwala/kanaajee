<?php
// Include the database connection file
include('components/connection.php');
session_start();
if (isset($_SESSION['email1'])) {
   $email = $_SESSION['email1'];
} else {
   $email = '';
};

// Get the form data
$email = $_POST['email1'];
$firstName = $_POST['first_name1'];
$lastName = $_POST['last_name1'];
$password = $_POST['password1'];
$firstName = $firstName." ".$lastName;

// Prepare and execute the SQL query
$stmt = $conn->prepare("INSERT INTO tbl_users (name, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstName, $email, $password);
$stmt->execute();

// Check if the query was successful
if ($result) {
    // Data inserted successfully
    echo "Data saved in the database.";
} else {
    // Error occurred while saving data
    echo "Error: " . $stmt->error;
}

// Close the statement and database connection
$stmt->close();
$conn->close();
?>

<script>
    window.location = "index.php";
</script>