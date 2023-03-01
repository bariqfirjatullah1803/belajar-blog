<?php
$kategori = mysqli_fetch_assoc(getById('kategori', $_GET['id']));
?>

<div class="card">
  <div class="card-header">Edit Kategori</div>
  <div class="card-body">
    <form action="index.php?page=kategori&id=<?= $kategori['id'] ?>" method="POST">
      <div class="mb-3">
        <label for="" class="form-label">Nama Kategori</label>
        <input type="text" class="form-control" id="" name="nama" value="<?= $kategori['nama'] ?>">
      </div>
      <button type="submit" class="btn btn-primary" name="submit" value="edit">Submit</button>
    </form>
  </div>
</div>