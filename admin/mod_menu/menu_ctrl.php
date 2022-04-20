<?php
if (isset($_GET['act']) && ($_GET['act']=="update" || $_GET['act']=="save")){
require_once("../../config/koneksi_db.php");
require_once("../../config/config.php");
}
else{
require_once("../config/koneksi_db.php");
require_once("../config/config.php");
}

if (isset($_GET['act']) && ($_GET['act']=="add")){
    //jika ada send variable act=add,tampil form input/tambah
    $judul = "Form Input Data";
}
else if (isset($_GET['act']) && ($_GET['act']=="edit")){
}
else if (isset($_GET['act']) && ($_GET['act']=="save")){
    $namamenu = $_POST['nm_menu'];
    $link = $_POST['link'];
    if(isset($_POST['aktif'])){
        $aktif = 1;
    }
    else{
        $aktif = 0;
    }
    //queri untuk simoan
    $qinsert = mysqli_query($connect_db,
    "INSERT into mst_menu(nm_menu,link,is_active) VALUES ('$nm_menu','$link',$aktif)")
    or die (mysqli_error($connect_db));
    if ($qinsert){
    //ketik proses simpan berhasil
        header("location: http://localhost/latihan_webphp/admin/home.php?modul=mod_menu");
    }
    echo "namamenu".$namamenu;
}

else if (isset($_GET['act']) && ($_GET['act']=="update")){
}
?>