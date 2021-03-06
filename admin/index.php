<?php
require_once("../config/koneksi_db.php");
require_once("../config/config.php");
//require_once(".//")
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">

  </head>
  <!-- onload "alert" "HAllOOO" -->
  <body id="loginPage">
    <div class="container d-flex justify-content-center mt-5 pt-5">
      <form method="POST" action="cek_login.php" class="bg-light p-5">
        <div class="alert alert-danger" role="alert" id="alert" style="display: none"></div>
        <div class="alert alert-success" role="alert" id="alert" style="display: none"></div>
        <div id="judul" class="mt-3"></div>
        <hr />
        <div class="mb-4">
          <label for="username" class="form-label">Username</label>
          <input type="text" name="username" class="form-control" id="username" />
        </div>
        <div class="mb-4">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="password" />
        </div>
        <button type="submid" name="btnlogin" class="btn btn-primary" >Login</button>
        <a href="../index.php"> <button type="button" class="btn btn-primary">Home</button></a>
    </form>
    </div>
    <!-- script -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="javascript/main.js"></script>
  </body>
</html>
