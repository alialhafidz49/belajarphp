<div class="row mt-3">
<div class="col">
<div class="container">

<form action="prosesinput.php" method="post">

  <div class="mb-3">
    <label class="form-label">Nama:</label>
    <input type="text" class="form-control" name="nama">
  </div>

  <div class="mb-3">
    <label class="form-label">Kelas:</label>
    <input type="text" class="form-control" name="kelas">
  </div>

  <div class="mb-3">
    <label class="form-label">Jurusan:</label>
    <input type="text" class="form-control" name="jurusan">
  </div>

  <div class="text-center">
    <button type="submit" class="btn btn-primary">Simpan</button>
  </div>

</form>

</div>
</div>
<div class="col">



<?php
include "boot.php";
include "koneksi.php";
?>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">nama</th>
      <th scope="col">kelas</th>
      <th scope="col">jurusan</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
<?php
$no = 1; // nomor urut tampilan
$tampil = $konek->query("SELECT * FROM siswa");

foreach ($tampil as $data) {
?>
  <tr>
    <th scope="row"><?= $no++; ?></th>
    <td><?= $data["nama"]; ?></td>
    <td><?= $data["kelas"]; ?></td>
    <td><?= $data["jurusan"]; ?></td>
    <td>
      <a href="delate.php?id=<?= $data['no']; ?>" 
         class="btn btn-danger"
         onclick="return confirm('apakah anda yakin?')">
         Delete
      </a>
    </td>
  </tr>
<?php
}
?>
</tbody>
</table>
</div>
</div>