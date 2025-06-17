<?php
    include "../../config/connection.php";
    function getData($conn,$kd_kec) {
        $tampung_data=0;
        
        $ambil_data="SELECT Jml_Hotel FROM tb_jumlah_hotel WHERE Kd_Kec='$kd_kec'";
        $hasil=mysqli_query($conn,$ambil_data);
        $data=mysqli_fetch_array($hasil);

        if ($data) {
        $tampung_data=$data['Jml_Hotel'];
        }
        return $tampung_data;
    }

?>

<?php echo getData($conn,'3273010');?>