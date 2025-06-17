<?php


    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "db_gis";

    try {    
        //create PDO connection 
        $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    } catch(PDOException $e) {
        //show error
        die("Terjadi masalah: " . $e->getMessage());
    }

    $conn = mysqli_connect($db_host, $db_user, $db_pass, "db_pdam2020");
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    // mengecek koneksi
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

?>
<?php
    //=============================== KONEKSI KETIKA HOSTING WEBHOST =============================== 

    // $db_host = "localhost";
    // $db_user = "id22270885_root";
    // $db_pass = "@Aditnaufal0203";
    // $db_name = "id22270885_db_pdam2020";

    // try {    
    //    //create PDO connection 
    //     $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    //}  catch(PDOException $e) {
    //    //show error
    //     die("Terjadi masalah: " . $e->getMessage());
    ////}

    // $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    //  // mengecek koneksi
    // if (!$conn) {
    //     die("Koneksi gagal: " . mysqli_connect_error());
    // }

    //=============================== KONEKSI KETIKA HOSTING WEBHOST =============================== 
?>

