<?php
    $serevrnama = "localhost";//127.0.0.1
    $database = "db_latihan";
    $user_db = "root";
    $pass_db =  "";

    $connect_db = mysqli_connect($serevrnama, $user_db, $pass_db, $database);
    if(!$connect_db){
        echo "<h3> koneksi gagal!!! </h3>";
        exit;
    }else{
        echo "<h3> koneksi berhasil !!! </h3>";
    }
    //set database
    mysqli_select_db($connect_db,$database);
?>