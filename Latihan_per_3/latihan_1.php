<?php
//COBA 1
$nilai=array(60,70,80,75,90);
//fungsi_rsort
rsort($nilai);
//fungsi_sort
sort($nilai);
var_dump($nilai);
//echo $nilai[2];
echo "<br>";


//COBA 2
$dtnilai=array("dina"=>80,"sinta"=>90,"nia"=>85);

var_dump($dtnilai);
//echo $dtnilai["sinta"];
echo "<br>";


//COBA 3(contoh perulangan for)
for($i = 2; $i<=13; $i++){
    echo $i.",";
}
echo "<br>";


//COBA 4(contoh perulangan While)
$a=0;
while($a <=13){
    if($a >=2){
    echo $a.",";
    }
    $a++;
}
echo "<br>";

//COBA 5(perulangan do while)
$x=0;
do{
    if($x >=2){
    echo $x.",";
    }
    $x++;
}while ($x <=13);
echo "<br>";

//COBA 6(perulangan)
for($c =1; $c <=30; $c++){
    if ($c%2 == 0){
        echo "<b>".$c.", "."</b>";
        }else{
            echo"<u>".$c." ,"."</u>";
        }
}
echo "<br>";

//COBA 7(foreach)
//cara menghitung jumlah Array (count(x)/sezeof(x))
$mhs = array("Adit","Agung","Ardi","Galang","Putra","Sulthan");
foreach($mhs as $m){
    echo $m.".";
}
echo $mhs[1]."<br>";


//Latihan 
$toko_ase=array(
    array("kode"=>"B01","nama"=>"Buku","harga"=>"50.000"),
    array("kode"=>"B02","nama"=>"Pulpen","harga"=>"10.000"),
    array("kode"=>"B03","nama"=>"Penghapus","harga"=>"5.000")    
);
foreach($toko_ase as $tka){
    echo $tka["kode"].",".$tka["nama"].",".$tka["harga"]."<br>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Konten</th>
            <th>Action</th>
        </tr>
        
    </table>
</body>
</html>