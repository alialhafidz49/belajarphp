<?php
include "koneksi.php";

$id = $_GET['id'];
$del = $konek->query("DELETE FROM siswa WHERE no='$id'");
?>

<script>
    document.location.href = 'index.php';
</script>
