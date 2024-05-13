<?php
include "../koneksi.php";
$IdKelas = $_GET['IdKelas'];
$query = mysqli_query($koneksi, "DELETE FROM kelas WHERE Idkelas=$IdKelas");

if ($query) {
    echo "<script>alert('Data berhasil dihapus'); window.location.href='read.php'</script>";
} else {
    echo "<script>alert('Data Gagal dihapus'); window.location.href='read.php'</script>";
}
?>