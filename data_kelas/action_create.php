<?php 
if(isset($_POST['Submit'])) {
    $Idkelas = $_POST['idkelas']; 
    $Namakelas = $_POST['namakelas'];
    $KompetensiKeahlian = $_POST['kompetensikeahlian'];

    include("../koneksi.php");
    $result = mysqli_query($koneksi, "INSERT INTO kelas(IdKelas,NamaKelas,KompetensiKeahlian) VALUES('$Idkelas','$Namakelas','$KompetensiKeahlian')");
    
    if ($result) {
        echo"<script>alert('Data Kelas Berhasil DiTambahkan'); window.location.href='read.php'</script>"; 
    }else{
        echo"<script>alert('Data Kelas Gagal DiTambahkan'); window.location.href='read.php'</script>"; 
    }
}
?>