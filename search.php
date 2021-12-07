<?php 
    include 'db.php';
    $cari=$_GET['nama'];
    $hasil=mysqli_query($conn,"select  mahasiswa.NRP,mahasiswa.Nama,mahasiswa.Alamat,mahasiswa.Foto,mahasiswa.Jurusan FROM mahasiswa 
    JOIN jurusan where jurusan.Jurusan = mahasiswa.Jurusan AND mahasiswa.Nama like '%$cari%'") ;
    // $hasil=mysqli_query($conn,"select * from jurusan where
    // Nama like '%$cari%'") ;
    $jumlah=mysqli_num_rows($hasil);
    echo "<br>";
    echo "Ditemukan: $jumlah";
    echo "<br>";
    if($baris=mysqli_fetch_array($hasil))
    {
    echo "Nrp : ";
    echo $baris[0];
    echo "<br>";
    echo "Nama : ";
    echo $baris[1];
    echo "<br>";
    echo "Alamat :";
    echo $baris[2];
    echo "<br>";
    echo "Foto :";
    echo "<br>";
    echo "<img src='images/".$baris[3]."' width='250' height='200'>";
    echo "<br>";
    echo "Jurusan :";
    echo $baris[4];
   }
   
?>

