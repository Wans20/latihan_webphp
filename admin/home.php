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
        </ul>
      </div>
    </nav>
  </header>
    
  <!-- MENUKIRI -->
    <div class="container-fluid row">
      <div class="row">
        <div class="col-md-3">
        <table>
          <ul class="list-group">
            <?php 
            include_once("menu.php");
            ?>
          </ul>
          </table> 
        </div>
        <div class="col-md-9">
          <?php 
            if(isset($_GET['modul'])){
                include "".$_GET['modul']."/index.php";
            }
          ?>
       </div>
    </div>
  </body>
</html>