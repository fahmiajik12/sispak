<?php
session_start();

include "koneksi.php"; 

$username = $_POST['username'];
$password     = $_POST['password'];
$pass = stripslashes($password);
$pass     = mysqli_real_escape_string($connect, $pass); 
$pass = md5($pass); 

  
$login = mysqli_query($connect, "SELECT * FROM tb_admin WHERE username = '$username' AND password='$pass'");
$row=mysqli_fetch_array($login);

  if ($row['username'] == $username AND $row['password'] == $pass){
   session_start(); 
    $_SESSION['admin'] = $row['username'];
    header('location:pakar-home.php');}

  else{ 
    echo "<script>alert('Maaf, Pastikan Username dan Password anda benar!'); window.location=('loginpakar.php');</script>";}
?>