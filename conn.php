<?php
session_start();
$conn = new mysqli("localhost", "root", "", "dbshop",3307);

// Periksa Koneksi
if ($conn->connect_errno) {
  echo "Gagal menghubungkan ke MySQL: " . $conn->connect_error;
  exit();
}
