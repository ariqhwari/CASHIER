<?php
$mysqli = new mysqli("localhost", "root", "", "dbshop","3307");

// Periksa Koneksi
if ($mysqli->connect_errno) {
  echo "Gagal menghubungkan ke MySQL: " . $mysqli->connect_error;
  exit();
}