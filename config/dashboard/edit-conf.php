<?php require_once("../auth.php"); ?>

<?php

include "../connection.php";
include "variable-post.php";

    if (isset($_POST['btn-update'])){
    
        $var_update = mysqli_query($conn, "UPDATE tb_hotel SET 
            STA = '$var_STA', 
            Nama_Hotel = '$var_Nama_Hotel',
            Kecamatan = '$var_Kecamatan',
            Alamat = '$var_Alamat',
            Klasifikasi = '$var_Klasifikasi',
            Owner = '$var_Owner',
            Total_Room = '$var_Total_Room',
            Latitude = '$var_Latitude',
            Longitude = '$var_Longitude' WHERE ID = $var_id");
        
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=titik-lokasi-hotel.php">';
    exit;
    }
?>
    <!-- TAMBAHKAN INI JIKA INGIN UPDATE LEBIH BANYAK DATA 
            Kecamatan = '$var_kecamatan', 
            kode_prop = '$var_kd_prop', 
            kode_kab = '$var_kd_kab',  -->