<?php
require_once "koneksi.php";

$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];

$q = $database_connection->prepare("INSERT INTO `user` (`id`, `username`, 
`email`, `password`) VALUES (NULL, ?, ?, SHA1(?));");
$q->execute([$username, $email, $password]);
?>
<script>
    alert('Registrasi berhasil');
    window.location.href = "../login.php";
</script>
<?php

// header("Location: ../login.php");
?>