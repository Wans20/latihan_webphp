<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN_per_ke_04</title>
</head>
<body>
    <?php 
        $word = "saya sedang belajar php";
        $word = explode(" ", $word);
        var_dump($word);
        //array(4)
        //{ [0]=> string(4)"saya" [1]=>string(6)"sedang"
        //  [2]=> string(7)"belajar" [3]=>string(3)"php"}
        echo "<hr>";
        echo $word[1];
        echo "<hr>";
        $im_words = implode("_",$word);
        echo $im_words;//saya sedang belajar php
        echo "<hr>";
        $kata = "Ayo belajar web,mudah kok !!!";
        echo ltrim($kata,"Ayo");//belajar web, mudah kok
        echo "<hr>";
        $kata1 = "PHP mudah sekali";
        echo rtrim($kata1,"sekali");//PHP mudah
        echo "<hr>";
        $kata2 = "Coding is fun";
        echo strlen($kata2);
        echo "<hr>";
        //<!-- latihan Format Date -->
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
        echo "<hr>";
    ?>
        <!-- LATIHAN -->
        <!-- //Contoh Fungsi Explode Dan Implode -->
    <?php
        //Contong Fungsi Explode
        $sentence = "Saya Pelajar LP3I Surabaya";
        $sentence = explode(" ",$sentence);
        echo $sentence[2];
        echo "<hr>";

        //Contoh Fungsi Implode
        $word = implode("_",$sentence);
        echo $word;
        echo "<hr>";

        //Contoh Fungsi ltrim
        $kata = "Ayo Kuliah Di LP3I";
        //Sebelum Di beri fungsi ltrim
        echo $kata;//output = Ayo Kuliah Di LP3I
        echo "<hr>";
        //Setelah di beri Fusngi ltrim
        echo ltrim($kata, "Ayo");//output = Kuliah Di LP3I
        echo "<hr>";

        //Contoh Fungsi rtrim
        $kata1 = "LP3I jaminan Kerja Loh";
        //Sebelum Di beri fungsi rtrim
        echo $kata1;//output = LP3I jaminan Kerja Loh
        echo "<hr>";
        //Setelah di beri Fusngi rtrim
        echo rtrim($kata1, "Loh");//output = LP3I jaminan Kerja
        echo "<hr>";

        //Contoh Fungsi trim
        $nama = " andi     ";
        $trim_nama = trim($nama);
        echo $trim_nama; // "andi"
        echo "<hr>";
        //Contoh Fungsi strchr()
        echo strchr("Hello world!","world");//Output : world!
        echo "<hr>";
        //Contoh Fungsi substr()
        echo substr("coklat", 5); 
        echo "<hr>";
        //Contoh Fungsi str_replace()
        echo str_replace("world","Tony","Hello world!");
        echo "<hr>";
        //Contoh Fungsi strtolower()
        echo strtolower("Hello WORLD.");
        echo "<hr>";
        //Contoh Fungsi strtoupper()
        echo strtoupper("Hello WORLD!");
        echo "<hr>";
        //Contoh Fungsi explode()
        $sentence = "Semangat Para Pejuang masa depan";
        $sentence = explode(" ",$sentence);
        echo $sentence[1];
        echo "<hr>";
        //Contoh fungsi pembulatan bilangan float
        //ceil()
        echo ceil(0.7); // Hasilnya = 1
        echo "<hr>";
        //floor()
        echo floor(3.9); // Hasilnya = 3     
        echo "<hr>";
        //round()
        echo round(3.6); // Hasilnya = 4        
        echo "<hr>";
        //fungsi intval()
        $angka="1";
        echo intval("angka");
    ?>
</body>
</html>