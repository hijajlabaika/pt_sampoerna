<?php
require_once "koneksi.php";
$id_karyawan = $_POST["id_karyawan"];
$nama = $_POST["nama"];
$jabatan = $_POST["jabatan"];
$alamat = $_POST["alamat"];


$q = $database_connection->prepare("UPDATE `data_karyawan` SET `nama` = ?, 
`jabatan` = ?, `alamat` = ? WHERE `data_karyawan`.`id` = ?");
$q->execute([$nama, $jabatan, $alamat, $id_karyawan]);
?>
<script>
    alert('Edit data berhasil');
    window.location.href = "../menuUtama.php";
</script>
<?php
// header("Location: ../menuUtama.php");
