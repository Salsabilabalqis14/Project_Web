<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <link rel="icon" href="logo.png" type="image/icon" >
    <title>SEREJO</title>
  </head>

  <?php

        if (isset($_GET['no_kk'])){
            include ('koneksi.php');
            $no_kk = $_GET['no_kk'];
            $cek = mysqli_query($koneksi, "SELECT no_kk from bantuan where no_kk = '$no_kk'");

            if (mysqli_num_rows($cek) == 0){
                echo "<script>window.location= 'bantuan.php'</script>";
            } else {
                $del = mysqli_query($koneksi, "DELETE from bantuan where no_kk = '$no_kk'");

                if ($del){
                    echo "<script>
                    alert('Data berhasil dihapus');
                    document.location.href = 'bantuan.php';
                    </script>";
                } else {
                    echo "<script>
                    alert('Gagal menghapus data');
                    document.location.href = 'bantuan.php';
                    </script>";
                }
            }

        } else {
            echo "<script>window.location = 'bantuan.php' </script>";
        }


    ?>

  <body>

  </body>

</html>