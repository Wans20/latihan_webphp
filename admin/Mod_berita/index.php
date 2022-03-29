<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mod_php</title>
    <!-- css -->
    <link rel="stylesheet" href="../../bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  TAMBAH
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <label class="form-label">ID</label>
        <input type="text" class="form-control">
        <label class="form-label">Judul</label>
        <input type="text" class="form-control">
        <label class="form-label">Konten</label>
        <input type="text" class="form-control">
        <label class="form-label">Action</label>
        <input type="text" class="form-control">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Judul</th>
      <th scope="col">Konten</th>
      <th scope="col">Action</th>
    </tr>
</thead>
      <?php 
  $toko_ase=array(
    array("ID"=>"01","Judul"=>"Judul Satu","Konten"=>"Isi Berita 01...","Action"=>"Edit Hapus"),
    array("ID"=>"02","Judul"=>"Judul Dua","Konten"=>"Isi Berita 02...","Action"=>"Edit Hapus"),
    array("ID"=>"03","Judul"=>"Judul TIga","Konten"=>"Isi Berita 03...","Action"=>"Edit Hapus")    
);
 foreach($toko_ase as $tka){
     ?>
<tr>
    <td><?php echo $tka["ID"]; ?></td>
    <td><?php echo $tka["Judul"]; ?></td>
    <td><?php echo $tka["Konten"]; ?></td>
    <td><a href="#"><?php echo $tka["Action"]; ?></a></td>
 </tr>
    <?php } ?> 
</table>
<!-- script -->
<script src="../../bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>