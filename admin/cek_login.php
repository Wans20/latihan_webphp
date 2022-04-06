<?php 
//contoh memakai method post
$txt_user = $_POST['username'];
$txt_pass = md5($_POST['password']);
//contoh memakai method get
//$txt_user = $_GET['username'];
//$txt_pass = md5($_GET['password']);

$userdb = "wans";
$passdb = md5("123");

echo "Username : ".$txt_user;
echo "<br>";
echo "Password : ".$txt_pass;

if($txt_user==$userdb && $txt_pass==$passdb){
    header("location:http://localhost/latihan_webphp/admin/home.php");
}else{
    header("location: http://localhost/latihan_webphp/admin/index.php");
}
?>