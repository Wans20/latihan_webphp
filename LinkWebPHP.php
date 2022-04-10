<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>link web PHP</title>
        <!-- css -->
        <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
        <!-- script -->
        <!-- <script src="JavaScript/login.js"></script> -->
        <!-- <script src="Materi/bootstrap-5.1.3-dist/css/bootstrap.min.css"></script>
        <script src="Materi/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script> -->
</head> 
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="product.html">PRODUCT</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" target="_blank" aria-current="page" href="Pendaftaran.html">DAFTAR MEMBER</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">CHECKOUT</a>
            </li>
            <li class="nav-item">
              <a type="button" href="#" class="nav-link active" data-bs-toggle="modal" data-bs-target="#loginmodal">LOGIN</a>
            </li>
          </ul>
          </div>
        </div>
      </nav>
  
      <!-- MODAL -->
      <div class="modal" id="loginmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">FORM LOGIN</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
  
            <div class="modal-body">
  
            <form action="#" class="bg-light">
              <div class="alert alert-info" id="alert" style="display: none;"></div>
              <div class="alert alert-success" id="alertok" style="display: none;"></div>
              <div class="mb-3">
                <label for="user" class="form-label">Username</label>
                <input type="text" class="form-control" id="user" />
              </div>
              <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input type="password" class="form-control" id="pass"/>
              </div>
            </form>
          </div>
  
            <div class="modal-footer text-center">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-primary" onclick="LoginCek()">Login</button>
            </div>
          </div>
        </div>
      </div> <br>
  
    <!-- header -->
    <!-- MENUKIRI -->
   <div class="container-fluid row">
    <div class="col-3">
      <div class="bg-white">
        <h1 class="text-center">Daftar isi</h1><hr>
        <i class="bi bi-check-lg"></i><a href="#1"> Pengertian Web Server</a><br>
        <i class="bi bi-check-lg"></i><a href="#2"> Sejarah Teknologi Web Server</a><br>
        <i class="bi bi-check-lg"></i><a href="#3"> Fungsi Teknologi Web Server</a><br>
        <i class="bi bi-check-lg"></i><a href="#4"> Cara Kerja Web Server</a><br>
        <i class="bi bi-check-lg"></i><a href="#5"> Jenis Teknologi Web Server</a><br>
        <i class="bi bi-check-lg"></i><a href="#6"> http dan https</a><br>
        <i class="bi bi-check-lg"></i><a href="#7"> Tutorial Mengaktifkan IIS</a><br>
      </div>
    </div>
    
  <!-- MENUKANAN -->
    <div class="col-9">
      <div class="row">
        <div class="row-cols-auto">
          <div class="card-group">

              <div class="card">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="IMG/teknologi/technology-4.jpg" class="w-100" width="800px" height="500px" alt="img">
                      </div>
                      <div class="carousel-item">
                        <img src="IMG/teknologi/Technology1.jpg" class="w-100" width="800px" height="500px" alt="img">
                      </div>
                      <div class="carousel-item">
                        <img src="IMG/teknologi/technology2.jpg" class="w-100" width="800px" height="500px" alt="img">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
              </div>
          
          </div>
        </div>
      </div>
    </div>
  </div > 
<br />

    <!-- konten -->
    <div class="container-fluid row i">
         <div class="col-10">
            <p>
                <h1 id="1"><b> Pengertian Web Server</b></h1>
                Apa itu web server ? Web Server adalah sebuah teknologi yang menerima permintaan dari pengguna yang ingin masuk ke sebuah halaman website melalui browser, dari permintaan tersebut.
                Nantinya server akan memberikan tanggapan atas permintaan yang dilakukan tadi, berupa halaman website. Dengan server adalah sebuah pintu ketika Anda ingin mengakses sebuah website. <br>
                <br> Dari penjelasan tersebut, sudah terlihat betapa sangat pentingnya peran server saat kita mengakses internet setiap harinya.
                Jika Anda berfikiran Web Server hanya satu dan diakses oleh semua pengguna internet, Anda salah besar karena ada beberapa Web Server yang masing-masingnya memiliki keunggulan yang berbeda. <br>
                
                <br><h1 id="2"><b>Sejarah Teknologi Web Server</b></h1>
                Web Server dibuat oleh Tim Berners-Lee pada tahun 1989, dia bekerja pada perusahaan CERN (European Organization for Nuclear Research).
                Tujuan awal diciptakannya Web Server yaitu untuk mempermudah pertukaran informasi antara para peneliti pada saat itu.
                Satu tahun berlalu, Tim Berners-Lee menghasilkan dua buah program komputer, yang pertama yaitu sebuah sistem yang diberi nama WWW atau WorldWideWeb, dan yang kedua yaitu Web Server pertama yang diberi nama CERN. <br>
                
                <br><h1 id="3"><b>Fungsi Teknologi Web Server</b></h1>
                Seperti yang sudah dijelaskan diatas tadi, yaitu untuk masuk ke website setelah mendapat permintaan dari browser pengakses internet, ada beberapa fungi lain dari teknologi ini, yaitu :
                Dapat mengecek apakah request dari pengguna aman atau tidak
                Dapat membersihkan cache yang sudak tidak lagi terpakai
                Serta menyiapkan semua module yang dibutuhkan untuk mengakses sebuah website atas permintaan pengguna internet <br>
                
                <br><h1 id="4"><b>Cara Kerja Web Server</b></h1>
                Perlu Anda ketahui bahwa cara kerja dari web server adalah dengan menerima permintaan yang memang berasal dari klien yang nantinya akan di kirimkan kembali dalam bentuk file atau berkas kepada klien tersebut.
                Selain itu, software yang terdapat di web server berada di komputer server, dimana lokasi tersebut merupakan tempat penyimpanan data-data website.<br>
                <br> Disisi lain, komputer server pastinya membutuhkan akses internet agar selalu bisa terhubung dan bisa di akses oleh klien.
                Selanjutnya, ketika klien ingin melakukan permintaan data kepada web server, maka permintaan data tersebut nantinya akan dikemas pada TCP yang kemudian akan di kirimkan ke alamat yang dibutuhkan seperti HTTP <br>
                <br>atau juga HTTPS yang berguna untuk ditampilkan kembali pada browser.
                Tentunya akan berbeda jika data yang diminta tersebut tidak bisa di temukan pada web server dan secara otomatis web server akan menolak dengan adanya permintaan tersebut dengan menampilkan pesan Page Not Found atau 404.<br>
                <br><h1 id="5"><b>Jenis Teknologi Web Server</b></h1>
                Seperti yang sudah dijelaskan diatas, teknologi Web Server ada banyak dan memiliki kelebihannya masing-masing, berikut adalah beberapa diataranya<br>
                <br><h5><i class="bi bi-arrow-right-circle-fill"></i>Apache Tomcat</h5>
                Apache Tomcat adalah Web Server berbasis opensource yang mendukung untuk penggunaan JPS atau disebut dengan Java Server Pages. Secara default, server ini belum dilengkapi dengan package admin,
                <br> sehingga belum ada akses untuk admin. Tetapi fungsi admin digantikan dengan tomcat manager yang digunakan untuk mendeploy aplikasi melalui file .war dari java web. <br> 
                <br> Kelebihan dari Web Server ini diataranya yaitu :
                <br><i class="bi bi-pin-fill"></i> Bisa dimodifikasi karena open source
                <br><i class="bi bi-pin-fill"></i> Dibandingkan dengan yang lain, server ini termasuk yang mudah di konfigurasi
                <br><i class="bi bi-pin-fill"></i> Memiliki komunitas yang cukup besar <br>
                
                <br><h5><i class="bi bi-arrow-right-circle-fill"></i> Web server Nginx</h5>
                Jenis teknologi web server berikutnya adalah Nginx yang merupakan pesaing terberat dari apache. Perlu Anda ketahui bahwa web server Nginx ini dikenal karena mampu melayani berbagai macam permintaan, misalnya seperti data tinggi dengan tinggkat kepadatan lalu lintas yang sangat sibuk.
                Oleh karena itu, server Nginx lebih di unggulkan dari sisi kecepatan dan juga sangat mudah dalam urusan performa pada sistem kerjanya. <br> 
                <br> Berikut ini adalah kelebihan dari server Nginx :
                <br><i class="bi bi-pin-fill"></i> Dalam menggunakan Resource lebih efisien karena web server Nginx adalah perangkat lunak yang sangat ringan dan tidak banyak memakan memory.
                <br><i class="bi bi-pin-fill"></i> Easy to use, sangat mudah di gunakan.<br>
                
                <br><h5><i class="bi bi-arrow-right-circle-fill"></i> IIS (Internet Information Services)</h5>
                IIS merupakan HTTP Web yang digunakan di dalam sebuah sistem operasi Windows, mulai dari jenis Windows NT 4.0, lalu Windows 2000 Server, Windows 2003 Server. Layanan ini berguna sebagai sebuah pendukung protocol TCP/IP.
                <br> IIS ini juga menjadi salah satu fondasi dari sebuah platform Internet dan juga Intranet Microsft, kelebihan dari server ini yaitu lebih kompatibel dengan Windows, secara IIS merupakan keluaran Microsoft, selain itu IIS juga 
                memiliki fitur Filtering yang berguna untuk menyaring web-web yang tidak diinginkan<br>
                
                <br><h5><i class="bi bi-arrow-right-circle-fill"></i> Lighttpd</h5>
                Web server ini dibangun dengan menggunakan Bahasa pemrograman C, dapat dijalankan pada sistem operasi Linux dan Unix serta Windows. Lighttpd bersifat open source dan didistribusikan dengan lisensi BSD.
                <br> Kelebihan dari server ini yaitu memiliki kemampuan untuk mengatur cpu-load secara efektif dan beberapa fitur advance seperti FastCGI, SCGI, Auth, dan URL-Rewriting.<br>           
                
                <br id="6"><hr><h1 class="text-center"><b> Ketahui Perbedaan HTTP dan HTTPS Secara Mendalam</b></h1><br>
                <br> Ketika sebuah situs web memiliki HTTP:// atau HTTPS:// di depan tautan internalnya, ini menunjukkan bahwa komunikasi antara browser dan server situs web mengikuti protokol tertentu. Protokol memiliki satu perbedaan kecil yang perlu diperhatikan: “S,” yang berarti secure atau aman dan berarti data dienkripsi dalam protokol HTTPS.            
                Dalam artikel ini, kami membahas HTTP dan HTTPS, karakteristiknya masing-masing, perbedaan protokol ini, dan manfaat menggunakan HTTPS. <br>
                
                <br><h3>Apa sih HTTP itu ???</h3>
                HTTP adalah singkatan dari Hypertext Transfer Protocol. Sebagai bagian dari protokol HTTP, data bergerak melalui jaringan, seperti internet. Faktanya, sebagian besar informasi 
                yang melintasi internet dilakukan melalui protokol HTTP. Banyak situs web yang menggunakan HTTP memiliki HTTP:// di awal Unique Resource Locators atau URL mereka. <br>
                <br> Dua jenis pesan HTTP adalah permintaan dan tanggapan, yang dikirim melalui internet. Browser internet menghasilkan permintaan saat pengguna internet berinteraksi dengan properti web. Misalnya, 
                browser akan menghasilkan serangkaian permintaan “HTTP GET” ketika pengguna internet mengklik hyperlink. <br>
                <br> Permintaan pada akhirnya melayani tujuan mendapatkan informasi yang cukup untuk membuat halaman tertentu. 
                Respons HTTP adalah jawaban atas permintaan HTTP. Server asal atau server caching proxy menghasilkan respons. <br>
                
                <br><h5>Permintaan HTTP</h5>
                Permintaan HTTP terdiri dari serangkaian baris teks, seperti:
                <br><i class="bi bi-cursor-fill"></i> Baris pertama mungkin memiliki kata “GET” diikuti oleh slug halaman dan versi HTTP yang digunakan
                <br><i class="bi bi-cursor-fill"></i> Baris kedua mungkin memiliki informasi tentang browser (“User-Agent”)
                <br><i class="bi bi-cursor-fill"></i> Baris ketiga mungkin memiliki informasi tentang server host
                <br><i class="bi bi-cursor-fill"></i> Baris keempat mungkin memiliki informasi tentang bahasa yang digunakan halaman (“Accept-Language“) <br>
                
                <br><h5>Respon HTTP</h5>
                ResponsHTTP juga berisi baris teks dan mungkin berisi informasi berikut:
                <br><i class="bi bi-cursor-fill"></i> Versi HTTP yang digunakan, ditambah angka dan “OK”
                <br><i class="bi bi-cursor-fill"></i> Tanggal tanggapan dibuat, ditambah waktu dalam Greenwich Mean Time (GMT)
                <br><i class="bi bi-cursor-fill"></i> Nama server asal atau host
                <br><i class="bi bi-cursor-fill"></i> Tanggal halaman terakhir diubah
                <br><i class="bi bi-cursor-fill"></i> Kekuatan komunikasi (“Accept-Ranges”), diukur dalam byte
                <br><i class="bi bi-cursor-fill"></i> Isi-Panjang (angka)
                <br><i class="bi bi-cursor-fill"></i> Tipe-Konten
                <br><i class="bi bi-cursor-fill"></i> Pesan yang dikirim oleh pengguna <br>
                <br> Saat pengguna mengirimkan formulir di situs web HTTP, browser akan menerjemahkan formulir tersebut ke permintaan HTTP POST alih-alih permintaan HTTP GET. Permintaan HTTP seperti HTTP POST. <br>
                
                <br><h3>Apa itu HTTPS?</h3>
                Karena S dalam HTTP berarti “secure”, HTTPS adalah singkatan dari Hypertext Transfer Protocol Secure. Situs web yang menggunakan HTTPS memiliki https:// di awal URL mereka, dan browser dapat menandai URL ini dengan meletakkan gembok hijau di depan.<br>
                <br> Situs web eCommerce atau website Accurate.id ini menggunakan HTTPS. Setiap situs web yang memerlukan kredensial pengguna dan informasi sensitif perlu menggunakan enkripsi. Sekarang, HTTPS telah mengambil alih HTTP sebagai mode transfer informasi di seluruh web.<br>
                <br> HTTPS menggunakan protokol HTTP, tetapi juga menggunakan protokol Transport Layer Security (TLS) untuk mengenkripsi permintaan dan tanggapan HTTPS. Situs web yang menggunakan HTTPS memerlukan sertifikat SSL untuk otentikasi.<br>
                <br> TLS menggunakan enkripsi kunci publik untuk memberikan keamanan komunikasi antara perangkat klien (browser) dan server. Ada dua kunci, kunci publik dan kunci pribadi, yang menyetujui kunci sesi untuk mengenkripsi komunikasi.<br>
                <br> Perangkat klien dapat mengakses kunci publik melalui sertifikat SSL server. Enkripsi dengan kunci sesi terjadi pada lapisan enam (lapisan presentasi) dalam model Open Systems Interconnection (OSI).<br>
                <br> Private keys mengkonfirmasi identitas server. Saat browser terhubung ke server asal saat menavigasi ke situs web dan kunci pribadi server tersebut cocok dengan kunci publik di sertifikat SSL situs web, itu berarti server tersebut adalah host sah situs web tersebut.<br>
                
                <br><h1 class="text-center">Perbedaan antara HTTP dan HTTPS</h1>
                <br><i class="bi bi-cursor-fill"></i> HTTPS berbeda dari HTTP dalam hal berikut:<br>
                <br><i class="bi bi-cursor-fill"></i> HTTP mengirim pesan dalam teks biasa: Itu berarti siapa pun yang memiliki pengetahuan tentang perintah dan sintaks protokol HTTP dapat membaca dan memahaminya. Ini sangat berbahaya ketika pengguna mungkin mengirimkan formulir, karena pengguna mungkin memberikan data sensitif,
                 seperti kata sandi, nomor kartu kredit, atau nomor jaminan sosial. Pelaku jahat ingin menemukan informasi itu, ditambah informasi apa pun yang dikirim server ke browser.<br>
                <br><i class="bi bi-cursor-fill"></i> HTTPS mempromosikan keamanan karena menampilkan sekumpulan karakter yang tampak acak, bukan teks biasa: Karakter dalam permintaan dan respons HTTPS berisi campuran huruf kecil, huruf besar, dan simbol tanpa spasi atau pengembalian.<br>
                <br><i class="bi bi-cursor-fill"></i> HTTPS bergantung pada otentikasi: Browser harus memverifikasi bahwa seseorang, mesin, atau situs web adalah siapa atau apa yang mereka klaim. HTTP hanya didasarkan pada prinsip kepercayaan.<br>
                Halaman web di situs yang menggunakan HTTP memuat lebih cepat daripada halaman web di domain HTTPS: Ini karena HTTPS membutuhkan lebih banyak daya komputasi untuk mengenkripsi pesan. <br>
                
                <br><h1 class="text-center">Keuntungan Menggunakan HTTPS</h1>
                Website yang menggunakan HTTPS memiliki keuntungan sebagai berikut:<br>
                <br><h3><i class="bi bi-mortarboard-fill"></i> Otentikasi mencegah serangan peretasan tertentu</h3>
                Di antara serangan ini adalah serangan man-in-the-middle dan spoofing domain. Serangan man-in-the-middle terjadi ketika seorang peretas menempatkan dirinya di antara dua perangkat (kemungkinan browser dan server web) dan memotong atau memodifikasi komunikasi antara perangkat tersebut.
                Spoofing domain adalah ketika peretas membuat halaman yang terlihat seperti situs web yang sah. Dalam kedua kasus tersebut, peretas ingin mencuri informasi sensitif. <br>
                <br><h3><i class="bi bi-mortarboard-fill"></i> Enkripsi memungkinkan komunikasi yang aman</h3>
                Ketika pihak yang tidak bertanggungjawab melihat karakter acak yang dihasilkan oleh protokol HTTPS, mereka tidak dapat menguraikan informasi yang ditransfer antara browser dan server. Ini melindungi pengguna yang memasukkan informasi sensitif dan melakukan transaksi, 
                seperti melakukan pembelian melalui situs web ecommerce atau aplikasi web. <br>
                <br><h3><i class="bi bi-mortarboard-fill"></i> Pengguna dan konsumen mempercayai situs web yang memiliki HTTPS:// di URL mereka</h3>
                Banyak pengguna akan memeriksa bilah URL di browser mereka untuk melihat apakah ada gembok hijau. Ini menunjukkan bahwa informasi sensitif mereka akan aman setelah mereka memasukkan informasi tersebut ke dalam formulir di situs web. <br>
                <br><h3><i class="bi bi-mortarboard-fill"></i> Banyak situs yang menjalankan HTTPS memiliki pengalihan</h3>
                Banyak situs yang awalnya menjalankan HTTP perlu memperbarui tautan internal dan tautan eksternal yang dapat mereka kontrol. Setelah situs web diperbarui, HTTPS memiliki sistem pengalihan yang dapat membawa pengguna ke halaman tertentu yang mengetik HTTP:// jika URL lainnya sama. <br>
                <br><h3><i class="bi bi-mortarboard-fill"></i> HTTPS adalah faktor peringkat untuk Google</h3>
                Hanya halaman dengan reputasi baik dan HTTPS:// di URL mereka yang dapat menempati peringkat di halaman pertama pencarian Google. Ini dapat diterjemahkan menjadi lebih banyak lalu lintas dan lebih banyak bisnis. <br>
            
                <br><hr><h1 class="text-center" id="7">Cara Mengaktifkan IIS (Internet Information System) pada Windows 10</h1><br>
                 IIS (Internet Inormation Service) adalah Web server yang dikeluarkan oleh Microsoft yang gunakan untuk sistem operasi server windows yang mendukung TCP/IP. IIS Dapat digunakan sebagai platform di mana aplikasi web berjalan, dengan menggunakan (ASP), ASP.NET, (ISAPI), (CGI), Microsoft .NET Framework, (VBScript), JScript, dll. 
                Mungkin bagi rekan-rekan web developer php akan sangat familiar dengan web server seperti Apache, Tomcat,dll. <br>
                <br>Berikut Tutorial setting IIS di windwos : <br>
                <br>1. Buka Control Panel > Program <br>
                <img src="IMG/Tutorial IIC/1.jpg" alt="img"><br>
                <br>2. setelah itu pilih Pogram> Turn Windows Feature on of off.<br>
                <img src="IMG/Tutorial IIC/8.jpg" alt="img"><br>
                <br>3. maka akan muncul seperti berikut.<br>
                <img src="IMG/Tutorial IIC/2.jpg" alt="img"><br>
                <br>4. Cek pada Internet Information Service yang menandakan kita akan mengaktifkan IIS pada Windows 10. Selanjutnya klik OK dan proses kan berjalan.<br>
                <img src="IMG/Tutorial IIC/3.jpg" alt="img"><br>
                <br>5. ketika proses pengaktifan sudah selesai dan berhasil, selanjutnya kita periksa pada directory C:\ bahwa kan muncul folder dengan nama inetpub, 
                folder ini merupakan directory utama dari IIS yang telah kita aktifkan. Dalam folder ini berisi beberapa folder default bawaan dari IIS dimana folder wwwroot adalah folder yang akan kita gunakan untuk meletakkan website kita nantinya.<br>
                <img src="IMG/Tutorial IIC/4.jpg" alt="img"><br>
                <br>6. Sekarang coba periksa pada All Program apakah IIS Manager apakah sudah dapat digunakan.<br>
                <img src="IMG/Tutorial IIC/6.jpg" alt="img"><br>
                <br>7. Berikut adalah jendela IIS Manager ketika dibuka.<br>
                <img src="IMG/Tutorial IIC/7.jpg" alt="img"><br>
                <br>Akhirnya IIS siap digunakan sebagai webserver berbasis ASP.NET maupun ASP.NET MVC.<br>
            </p><br>
        </div>
        <div class="col-4"></div>
    </div><br>
    <!-- footer -->
    <div class="container-fluid text-white">
        <div class="row" style="background-color: rgb(0, 0, 0)">
          <div class="col-md-6">
            <br />
            <h5 style="text-align: center">STORE</h5>
            <hr/>
            <p><i class="bi bi-house-fill"></i> Rejosari Street Gg.01 Rt.05 Rw.03, No.04,Benowo, Pakal, Surabaya, Jawa Timur, Indonesia</p>
            <p><i class="bi bi-alarm-fill"></i> 07.00 WIB / 17.00 WIB</p>
            <p><i class="bi bi-telephone-fill"></i><a href="+6282139873061" class="text-white" target="blank">082139873061</a></p>
            <p><i class="bi bi-envelope-fill"></i><a href="mailto:wans200102@gmail.com" class="text-white" target="blank">wans200102@gmail.com</a></p>
          </div>
  
          <div class="col-md-6">
            <br/>
            <h5 style="text-align: center">SOSMED</h5>
            <hr/>
            <div class="row text-center">
              <div class="col-3 text-success">
                <p><i class="bi bi-whatsapp"></i><a href="http://wa.me/+6282139873061"class="text-white"target="_blank"><br />082139873061</a></p>
              </div>
              <div class="col-3 text-danger">
                <p><i class="bi bi-instagram"></i><a href="https://www.instagram.com/a_wan_s/" class="text-white" target="_blank"><br />a_wan_s</a></p>
              </div>
              <div class="col-3 text-info">
                <p><i class="bi bi-twitter"></i><a href=" https://twitter.com/mampir_hidup?t=VCl8rPUMKM8IGYdgaVdXwg&s=08" class="text-white" target="_blank"><br />@mampir_idup</a></p>
              </div>
              <div class="col-3 text-primary">
                <p> <i class="bi bi-facebook"></i><a href="https://www.facebook.com/profile.php?id=100010256894133" class="text-white" target="_blank"><br />Agung Setiawan</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- script -->
    <script src="Materi/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>