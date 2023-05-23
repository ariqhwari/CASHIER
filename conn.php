<?php
$mysqli = new mysqli("localhost", "root", "", "dbshop");

// Periksa Koneksi
if ($mysqli->connect_errno) {
  echo "Gagal menghubungkan ke MySQL: " . $mysqli->connect_error;
  exit();
}