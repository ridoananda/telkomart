<?php
session_start();
require 'fungsi.php';
$username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
$password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"select * from admin where username='$username' and password='$password'");

$rowcount = mysqli_num_rows($data);

if ($rowcount == 1) {
$_SESSION['username'] = $_POST['username'];
header("Location: dashboard.php");
}
else
{
header("Location:login.php?=belum_login");
}
?>`