<?php
require_once "koneksi.php";

$nama = $_POST["nama"];
$jabatan = $_POST["jabatan"];
$alamat = $_POST["alamat"];
$image = $_FILES["photo"]["name"];
$tmp_dir = $_FILES["photo"]["tmp_name"];
$imageSize = $_FILES["photo"]["size"];

$upload_dir = "uploads/";
$imgExt = strtolower(pathinfo($image, PATHINFO_EXTENSION));
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf');
$photo = rand(1000, 1000000) . "." . $imgExt;
move_uploaded_file($tmp_dir, $upload_dir . $photo);


$q = $database_connection->prepare("INSERT INTO `data_karyawan` (`id`, `nama`, 
`jabatan`, `alamat`, `photo`) VALUES (NULL, ?, ?, ?, ?);");
$q->execute([$nama, $jabatan, $alamat, $photo]);
?>
<script>
    alert('Tambah data berhasil');
    window.location.href = "../menuUtama.php";
</script>
<?php
// header("Location: ../menuUtama.php");
