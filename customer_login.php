<?php 
include('components/connection.php');

session_start();

if (isset($_SESSION['email1'])) {
   $email = $_SESSION['email1'];
} else {
   $email = '';
};

if (isset($_POST['submit_user'])) {
    $email = $_POST['email1'];
    $pass = $_POST['password1'];
                    
    $sql_e = "SELECT * FROM tbl_users WHERE email='$email' AND password = '$pass'";
    $res_e = mysqli_query($conn, $sql_e);

    if(mysqli_num_rows($res_e) > 0){
        $_SESSION['email1'] = $email;
        echo "<script>
                window.location = 'index.php'
              </script>";

    }else{
        echo "<div id='invalidAuth'/>
        <script>
            window.location = 'login.php';
        </script>";
    //Sweet Alert()
    }
}


?>
