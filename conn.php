<?php
session_start();
$conn = new mysqli("localhost", "ariq", "", "dbshop");

// Periksa Koneksi
if ($conn->connect_errno) {
  echo "Gagal menghubungkan ke MySQL: " . $conn->connect_error;
  exit();
}
