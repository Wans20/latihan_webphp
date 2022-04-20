<?php include_once 'menu_ctrl.php'; ?>
<?php if (!isset($_GET['act'])){ ?>

<!-- Button trigger modal -->
<a href="?modul=mod_menu&act=add"class="btn btn-primary btn-xs mb 1">Tambah Data</a>

<!-- TABLE -->
<table class="table" style="outline: auto;">
  <thead>
    <tr>
      <th scope="col">ID Menu</th>
      <th scope="col">Nama Menu</th>
      <th scope="col">Link</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $qry_listmenu = mysqli_query($connect_db,"select* from mst_menu order by id_menu DESC")
    or die("NOT FOUND".mysqli_error($connect_db));
    while($row = mysqli_fetch_array($qry_listmenu)){
    ?>

    <tr>
      <td><?php echo $row['id_menu']; ?></td>
      <td><?= $row['nm_menu']; ?></td>
      <td><?= $row['link']; ?></td>
      <td>
          <a href="?modul=mod_menu7act=edit=<?=$row['id_menu']?>" class="btn btn-xs btn-primary">
              <i class="bi bi-pencil-square"></i>EDIT</a>

          <a href="#" class="btn btn-xs btn-primary">
              <i class="bi bi-trash"></i>DELETE</a>
      </td>
    </tr>

    <?php } ?>
  </tbody>
</table>

<?php } 
else if (isset($_GET['act']) && ($_GET['act']=="add")){
?>

<!-- FORM -->
  <h3><?php echo $judul; ?></h3>
    <form action="mod_menu/menu_ctrl.php?modul=mod_menu&act=save" method="POST">

  <div class="mb-3 row">
      <label for="NmMenu" class="col-sm-2 col-form-label">Nama Menu</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="NmMEnu" name="nm_menu">
    </div>
  </div>

<div class="mb-3 row">
    <label for="link" class="col-sm-2 col-form-label">Link</label>
    <div class="col-sm-7">
        <input type="text" class="form-control" id="Link" name="link">
        
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="aktif" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">Aktif</label>
        </div>

        <button type="submit" class="btn btn-primary" name="btn-simpan">
          <i class="bi bi-download"></i> Simpan</button>
        <button type="reset" class="btn btn-secondary" name="btn-reset">
          <i class="bi bi-x"></i> Batal</button>
    </div>
</div>
</form>
<?php } ?>



<!-- LINK -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">