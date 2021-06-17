<?php
    session_start();
    $username = "";
    $nama     = "";
    $email    = "";
    

    include ("koneksi.php");

    $errors   = array();

    if(isset($_POST['buatakun'])){
        $username = mysqli_real_escape_string($koneksi,$_POST['username']);
        $nama = mysqli_real_escape_string($koneksi,$_POST['nama']);
        $email = mysqli_real_escape_string($koneksi,$_POST['email']);
        $jabatan = mysqli_real_escape_string($koneksi,$_POST['jabatan']);
        $sandi = mysqli_real_escape_string($koneksi,$_POST['sandi']);
        $password_1 = mysqli_real_escape_string($koneksi, md5($_POST['pass1']));
        $password_2 = mysqli_real_escape_string($koneksi, md5($_POST['pass2']));

        if($sandi != "serejo"){
            echo "<script> alert('Sandi Anda Salah'); window.history.back();</script>";
            return false;
        } 

        $cek = mysqli_query($koneksi,"SELECT * FROM admin WHERE username= '$username'");

        if(mysqli_fetch_assoc($cek)){
            echo"<script> alert('Username sudah pernah dibuat'); window.history.back(); </script>";
            return false;
        }

        if ($password_1 != $password_2){
            echo "<script> alert('Password tidak sama dengan confirm password'); window.history.back(); </script>";
            return false;
        } else {

            $sql = "INSERT INTO admin (username, email, nama, password) values ('$username', '$email', '$email', '$password_1')";

            $result = mysqli_query($koneksi,$sql);

            if ($result){
                $_SESSION['username'] = $username;
                echo"<script> alert('Akun Anda berhasil dibuat'); location = 'login_admin.php'; </script>";
            } else {
                echo "<script> alert('Gagal membuat akun'); document.location.href = 'daftar_admin.php'; </script>";
            }
        }
    }

?>