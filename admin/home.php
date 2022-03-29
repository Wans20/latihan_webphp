<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HOME</title>
    <!-- css -->
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
  </head>

  <body>
  <!-- navbar -->
  <header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">HOME</a>
          </li>
    </nav>
    </header>
    <!-- MENUKIRI -->

    <div class="container-fluid row">
      <div class="col-6">
        <table>
        <ul class="list-group">
          <?php
          $toko_ase=array(
            array("ID"=>"01","Nm_Menu"=>"Dashboard","Link"=>"#"),
            array("ID"=>"02","Nm_Menu"=>"Blog","Link"=>"#"),
            array("ID"=>"03","Nm_Menu"=>"Berita","Link"=>"Mod_berita")
          );
          foreach($toko_ase as $tka){
          ?>  
            <a href="<?php echo $tka['Link'] ?>">
            <li class="list-group-item"><?php echo $tka['Nm_Menu'] ?></li>
          </a>
          <?php
          }
          ?>
        </ul>
        </table> 
      </div>
      
    <!-- MENUKANAN -->
      <div class="col-6">
        <div class="row">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit suscipit voluptate praesentium 
            itaque laborum beatae fuga quaerat modi, ex in unde ipsam cum. Sed non optio quos corrupti vel ratione.
        </div>
      </div>
    </div>
  </body>
</html>