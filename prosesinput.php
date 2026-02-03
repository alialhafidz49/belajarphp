<?php
include "koneksi.php";

$nama= $_POST['nama'];
$kelas= $_POST['kelas'];
$jurusan= $_POST['jurusan'];

$simpan = $konek->query(
    "INSERT INTO siswa (nama, kelas, jurusan) 
     VALUES ('$nama', '$kelas', '$jurusan')"
);
?>

<script>
    document.location.href = 'index.php';
</script>
