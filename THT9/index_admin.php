<?php
    //mulai session
    session_start();
    //cek status sudah login
    if($_SESSION['status']!="login")
    {
        header("location:../index.php?pesan=belum_login");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Perpustakaan | SMK Negeri 1 Cimahi</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>

    <body>
        <div>
            <?php
                include "header.php";
                include "menu.php";
                include "sidebar.php";
                include "konten.php";
                include "footer.php";
            ?>
        </div>
    </body>
</html>