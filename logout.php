<?php
include '../conn.php';

session_destroy();
echo "<script>alert('Anda telah logout!')</script>";
echo "<script>location='../index.php'</script>";
?>