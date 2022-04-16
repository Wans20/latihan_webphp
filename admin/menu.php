<?php
         /* $toko_ase=array(
            array("ID"=>"01","Nm_Menu"=>"Dashboard","Link"=>"#"),
            array("ID"=>"02","Nm_Menu"=>"Blog","Link"=>"#"),
            array("ID"=>"03","Nm_Menu"=>"Berita","Link"=>"mod_berita"),
            array("ID"=>"04","Nm_Menu"=>"Setting Menu","Link"=>"mod_menu")
          );
          foreach($toko_ase as $tka){
          ?>
            
            <a href="?modul=<?php echo $tka['Link'] ?>">
            <li class="list-group-item"><?php echo $tka['Nm_Menu'] ?></li>
          </a>
          <?php
          }
          */

          $qry_menu = mysqli_query($connect_db, "select*from mst_menu") or die ("view menu".mysqli_errno($connect_db))
          ?>
        <ul class="list-group">
          <?php 
          while($row = mysqli_fetch_array($qry_menu)){
          ?>
          <li class="list-group-item">
            <a href="?modul=<?= $row['link'];?>"><?=$row['nmmenu']; ?></a>
          </li>
          <?php 
          }
          ?>
        </ul>