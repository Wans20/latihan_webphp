<?php
          $toko_ase=array(
            array("ID"=>"01","Nm_Menu"=>"Dashboard","Link"=>"#"),
            array("ID"=>"02","Nm_Menu"=>"Blog","Link"=>"#"),
            array("ID"=>"03","Nm_Menu"=>"Berita","Link"=>"mod_berita")
          );
          foreach($toko_ase as $tka){
          ?>  
            <a href="?modul=<?php echo $tka['Link'] ?>">
            <li class="list-group-item"><?php echo $tka['Nm_Menu'] ?></li>
          </a>
          <?php
          }
          ?>