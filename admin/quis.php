<?php 
$angka = 9;
$point =3;

$hasil = $angka ** $point;
echo "hasilnya = ".$hasil;
echo "<hr>";

$nilai = 85.5;
if($nilai >= 85){
    echo "nilai oke";
}
else if($nilai < 85){
    echo "belajar lagi";
}
echo "<hr>";

$nilai = 85.5;
switch($nilai){
    case $nilai >= 85:
        echo "nilai oke";
        break;
    default:
        $nilai < 85;
        echo "belajar lagi ";
        break;   
}
echo "<hr>";
For ($i=1;$i<=20;$i++)         
  if($i%2==0)                      
  {
    echo $i.","; 
  }
  echo "<hr>";
$x =0;
while($x <= 10){
    if($x > 1 && $x <= 7){
        echo $x.",";
    }
    $x++;
}  
?>