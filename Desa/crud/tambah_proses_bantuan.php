<?php

    if(isset($_POST['tambah'])){
        include_once 'koneksi.php';

        $nama = $_POST['nama'];
        $no_kk = $_POST['no_kk'];
        $alamat = $_POST['alamat'];
        $no_telepon = $_POST['no_telepon'];
        $tunai = $_POST['tunai'];
        $status = $_POST['status'];

        $input = mysqli_query($koneksi, "INSERT INTO bantuan values ('$nama', '$no_kk', '$alamat', '$no_telepon', '$tunai','$status')");

        if($input){
            echo "<script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'bantuan.php';
            </script>";
        } else {
            echo "<script>
            alert('Gagal menambahkan data');
            document.location.href = 'tambah_bantuan.php';
            </script>";
        }
    } else {
        echo "<script>window.history.back()</script>";
    }

?>