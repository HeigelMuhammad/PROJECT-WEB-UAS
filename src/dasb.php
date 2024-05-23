<?php
session_start();
// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    echo "<script>alert('Anda harus login terlebih dahulu');window.location.href='login.php'</script>";
    exit;
}

// If logged in, display a welcome message
echo "Selamat datang, " . $_SESSION['id'];
?>
