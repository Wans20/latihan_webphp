<?php 
require_once("../config/koneksi_db.php");
require_once("../config/config.php");
//cek apakah data dikirm sesuai variabel berikut
if(isset($_POST['btnlogin'])){
    $txt_user = $_POST['username'];
    $txt_pass = md5($_POST['password']);
    $result = mysqli_query($connect_db,"SELECT * FROM mst_userlogin WHERE usernama = '".$txt_user."' AND password = '".$txt_pass."' AND is_active = 1");
    if(mysqli_num_rows($result)>0){
        echo "hasil= ".mysqli_num_rows($result);
        header("location: ".URL."home.php");
        }else{
            header("locaton: ".URL."");
        }
    }
?>