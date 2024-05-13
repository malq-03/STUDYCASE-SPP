<?php 
 if(isset($_POST['Submit'])) {
    $IdKelas = $_POST['IdKelas']; 
    $NamaKelas = $_POST['NamaKelas'];
    $KompetensiKeahlian = $_POST['KompetensiKeahlian'];

    include("../koneksi.php");
    $result = mysqli_query($koneksi, "UPDATE kelas SET NamaKelas='$NamaKelas',KompetensiKeahlian='$KompetensiKeahlian' WHERE IdKelas='$IdKelas'");
    
    if ($result) {
        echo"<script>alert('Data Kelas Berhasil Diupdate'); window.location.href='read.php'</script>"; 
    }else{
        echo"<script>alert('Data Kelas Gagal Diupdate'); window.location.href='read.php'</script>"; 
    }
  }
?>