<?php
    session_start();
    include('koneksi.php');

    $username = $_POST['username'];
    $password = md5($_POST['pass']);
    $query    = mysqli_query($koneksi, "SELECT * FROM user where username = '$username' and password = '$password'");
    
    $xxx      = mysqli_num_rows($query);

    if ($xxx == true){
        $_SESSION['username'] = $username;
        header("location:../user.php");
    } else {
        echo "<script> alert('Username atau Password salah'); window.history.back(); </script>";
    }


?>