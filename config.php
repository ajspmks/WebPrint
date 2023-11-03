<?php

$host       = "localhost";
$user       = "id21034816_hore";
$pass       = "Hore9999$";
$db         = "id21034816_salamprinting";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}

?>