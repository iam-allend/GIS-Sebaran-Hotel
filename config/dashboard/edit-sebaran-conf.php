<?php require_once("../auth.php"); ?>

<?php

include "../connection.php";
include "variable-sebaran-post.php";

    if (isset($_POST['btn-update'])){
    
        $var_update = mysqli_query($conn, "UPDATE tb_jumlah_hotel SET 
            Jml_Hotel = '$var_Jml_Hotel' WHERE ID = $var_id");
        
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=peta-sebaran.php">';
    exit;
    }
?>
    <!-- TAMBAHKAN INI JIKA INGIN UPDATE LEBIH BANYAK DATA 
            Kecamatan = '$var_kecamatan', 
            kode_prop = '$var_kd_prop', 
            kode_kab = '$var_kd_kab',  -->