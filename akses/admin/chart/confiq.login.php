<?
session_start();
require 'fungsi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$data = mysqli_query($conn,"select * from admin_user where username='$username' and password='$password'");
$rowcount = mysql_num_rows($login);
if ($rowcount == 1) {
$_SESSION[‘username’] = $_POST[‘username’];
echo"<script>alert('berhasil'); document.location.href='dashboard.php';";
}
else
{
    
echo"<script>alert('gagal'); document.location.href='login.php';";
}
?>