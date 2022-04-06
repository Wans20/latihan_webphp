<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN-4</title>
</head>
<body>
<?php 
    //$word = "saya sedang belajar web";
    //$word = explode("", $word);
    //var_dump($word);
    //array(4)
    //{[0]=> string(4)"saya"[1]=> string(6)"sedang"
    // [2]=> string(7)"belajar" [3]=>string(3)"php"}
    //echo $word  
?>
<!-- latihan Format Date -->
<?php
echo date("l/d/F/Y");
echo "<hr>";
echo "Hari Ini".date(" d/m/y")." Atau ".date( "Y/m/d");
echo "<hr>";
date_default_timezone_set('Asia/Jakarta');//untuk menampilkan waktu sesuai zona
//DateTimeZone::listIdentifiers();//untuk menampilkan list zona waktu
echo "Waktu Sekarang = ".date(" d/m/Y H:i:s");//h=()
echo "<hr>";
$tgllahir = date_create("20-01-2002");
$tglhariini = date("d-m-Y");
$umur = date_diff($tgllahir,date_create($tglhariini));//fungsi date_diff
echo "Umur = ".$umur->format('%y tahun %m bulan %d hari');
echo "<hr>";
echo "Umur = ".$umur->format('%y tahun %a hari');
//contoh Function
echo "<hr>";
function datapribadi(){
    $nama = "Agung Setiawan";
    $asal = "Surabaya,Jawa Timur";
    echo "Hallo, Nama Saya : ".$nama."<br>"." Dan Saya Berasal Dari : ".$asal;
}
//cara menampilkan function
datapribadi();
//contoh Function(return)
echo "<hr>";
function ceksaldo($saldo,$akun){
    if($saldo >= 3000000){
        $ket = "Thr : ". $saldo*10/100 ;
    }    
    else if($saldo >= 1000000){
        $ket = "Thr : ". $saldo*20/100;
    }
    else{
        $ket = "Tidak Mendapat THR";
    }
    return $akun."<br>Kamu Mendapatkan ".$ket."<br>"."Dari Saldo ".$saldo;
}
echo "Halloo...".ceksaldo(2000000,"Agung Setiawan");
?>
</body>
</html>