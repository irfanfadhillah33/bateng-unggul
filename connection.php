<?php

// definisikan koneksi ke database
$server = "localhost";
$username = "root";
$password = "";
$database = "db_berita_bateng";

// Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");
?>