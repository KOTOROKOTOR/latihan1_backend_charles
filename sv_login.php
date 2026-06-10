<?php
session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']) ; //md5 enkripsi

$sql= "SELECT * FROM users WHERE username='$username' AND password='$password'";
$query= mysqli_query($conn,$sql);
$num=mysqli_num_rows($query);

if($num>0){
    $_SESSION['username']=$username;
    echo "<script>alert('Form submitted successfully!');</script>";

    header("Location: admin/dashboard.php");
    exit;
}else{
    echo "<script>alert('The password you have entered is incorrect. Please try again.');</script>";
    header("Location: login.php");
    exit;
}
?>
