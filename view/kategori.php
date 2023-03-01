<div class="card">
  <div class="card-header">List Kategori <a href="index.php?page=kategori-tambah" class="btn btn-sm btn-primary">Tambah</a></div>
  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Kategori</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach (getAll('kategori') as $kategori) : ?>
          <tr>
            <th scope="row"><?= $no ?></th>
            <td><?= $kategori['nama'] ?></td>
            <td>
              <form action="index.php?page=kategori&id=<?= $kategori['id'] ?>" method="post">
                <a href="index.php?page=kategori-edit&id=<?= $kategori['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                <button type="submit" name="submit" value="hapus" class="btn btn-sm btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        <?php $no++;
        endforeach ?>
      </tbody>
    </table>
  </div>
</div>

<?php

if (isset($_POST['submit'])) {
  $id = isset($_GET['id']) ? $_GET['id'] : '';
  $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
  switch ($_POST['submit']) {
    case 'tambah':
      $query = "INSERT INTO kategori(nama) VALUES ('$nama')";
      $result = mysqli_query($conn, $query);
      if ($result) {
        echo '<script>alert("Data berhasil ditambahkan !")</script>';
        echo '<script>window.location.href="index.php?page=kategori"</script>';
      } else {
        echo '<script>alert("Data gagal ditambahkan !")</script>';
        echo '<script>window.location.href="index.php?page=kategori-tambah"</script>';
      }
      break;

    case 'edit':
      $query = "UPDATE kategori SET nama = '$nama' WHERE id  = $id";
      $result = mysqli_query($conn, $query);
      if ($result) {
        echo '<script>alert("Data berhasil diedit !")</script>';
        echo '<script>window.location.href="index.php?page=kategori"</script>';
      } else {
        echo '<script>alert("Data gagal diedit !")</script>';
        echo '<script>window.location.href="index.php?page=kategori-edit&id=' . $id . '"</script>';
      }
      break;


    case 'hapus':
      $query = "DELETE FROM kategori WHERE id = $id";
      $result = mysqli_query($conn, $query);
      if ($result) {
        echo '<script>alert("Data berhasil dihapus !")</script>';
        echo '<script>window.location.href="index.php?page=kategori"</script>';
      } else {
        echo '<script>alert("Data gagal dihapus !")</script>';
        echo '<script>window.location.href="index.php?page=kategori"</script>';
      }
      break;

    default:

      break;
  }
}
