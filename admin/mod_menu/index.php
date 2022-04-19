<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">TAMBAH DATA</button>
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
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td>
          <a href="#" class="btn btn-xs btn-primary">
              <i class="bi bi-pencil-square"></i>EDIT</a>
          <a href="#" class="btn btn-xs btn-primary">
              <i class="bi bi-trash"></i>DELETE</a>
      </td>
    </tr>
  </tbody>
</table>
<!-- FORM -->
<div class="mb-3 row">
    <label for="NmMenu" class="col-sm-2 col-form-label">Nama Menu</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="NmMEnu">
    </div>
</div>
<div class="mb-3 row">
    <label for="link" class="col-sm-2 col-form-label">Link</label>
    <div class="col-sm-7">
        <input type="link" class="form-control" id="Link">
        
        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">Aktif</label>
    </div>
    <button type="submit" class="btn btn-primary">
        <i class="bi bi-download"></i> Simpan</button>
    <button type="button" class="btn btn-secondary">
        <i class="bi bi-x"></i> Batal</button>
    </div>
</div>
<!-- LINK -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"></td> 