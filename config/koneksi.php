<?php

$database_hostname = "sql209.epizy.com";
$database_username = "epiz_27927198";
$database_password = "S9TJRzTHJUzo";
$database_name = "epiz_27927198_pt_sampoerna";

try {
    //sintaks berhasil?  
    $database_connection = new PDO(
        "mysql:host=$database_hostname;dbname=$database_name",
        $database_username,
        $database_password
    );
    $cek = "Koneksi Berhasil";
    //  echo $cek;
} catch (PDOException $x) {
    die($x->getMessage());
}
