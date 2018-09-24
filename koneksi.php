<?php

/*
* Sigit wasis subekti
*/

$host = "localhost"; 
$user = "root";
$pass = "123";
$name = "grafik";

$link = mysqli_connect($host, $user, $pass, $name);

if(!$link) {
    die ("koneksi dengan database gagal: ".mysql_connect_error().
    " - ".mysql_connect_error());
}
?>
