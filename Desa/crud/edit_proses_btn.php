<?php

if (isset($_POST['simpan'])){
    include ('koneksi.php');
    $no_kk   = $_POST['no_kk'];
    $nama     = $_POST['nama'];
    $alamat   = $_POST['alamat'];
    $no_telepon  = $_POST['no_telepon'];
    $tunai   = $_POST['tunai'];
    $status     = $_POST['status'];

    $update  = mysqli_query($koneksi, "UPDATE bantuan set
    
    nama   = '$nama',
    alamat  = '$alamat',
    no_telepon = '$no_telepon',
    tunai = '$tunai',
    status = '$status'

    where no_kk = '$no_kk'");

    if ($update){
        echo "<script>
        alert('Data berhasil diedit');
        document.location.href = 'bantuan.php';
        </script>";
    } else {
        echo "<script>
        alert('Gagal mengedit data');
        document.location.href = 'edit_bantuan.php ?no_kk = ".$no_kk."';
        </script>";
    }


    } else {
        echo '<script>window.history.back()</script>';
    }


?>