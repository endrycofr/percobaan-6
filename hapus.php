<?php
    include 'db.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 
    $namamahasiswa = $_GET["nama"];
    $penghapusan = mysqli_query($conn, "DELETE FROM mahasiswa WHERE Nama='$namamahasiswa '");   
    $penghapusan = mysqli_query($conn, "DELETE FROM jurusan WHERE Nama='$namamahasiswa '");   

     echo "Data berhasil dihapus ! ! !";
    ?>
</body>
</html>