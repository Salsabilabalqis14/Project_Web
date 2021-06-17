<?php
    include ("koneksi.php");

    if(isset($_POST['buatakun'])){
        $username = mysqli_real_escape_string($koneksi,$_POST['username']);
        $nama = mysqli_real_escape_string($koneksi,$_POST['nama']);
        $email = mysqli_real_escape_string($koneksi,$_POST['email']);
        $password_1 = mysqli_real_escape_string($koneksi, md5($_POST['pass1']));
        $password_2 = mysqli_real_escape_string($koneksi, md5($_POST['pass2']));


        $cek = mysqli_query($koneksi,"SELECT * FROM user WHERE username= '$username'");

        if(mysqli_fetch_assoc($cek)){
            echo"<script> alert('Username sudah pernah dibuat'); window.history.back(); </script>";
            return false;
        }

        if ($password_1 != $password_2){
            echo "<script> alert('Password tidak sama dengan confirm password'); window.history.back(); </script>";
            return false;
        } else {

            $sql = mysqli_query($koneksi,"INSERT INTO user (username, email, nama, password) values ('$username', '$email', '$email', '$password_1')");

            if ($sql){
                echo"<script> alert('Akun Anda berhasil dibuat'); location = 'login.php'; </script>";
            } else {
                echo "<script> alert('Gagal membuat akun'); document.location.href = 'daftar.php'; </script>";
            }
        }
    }



?>