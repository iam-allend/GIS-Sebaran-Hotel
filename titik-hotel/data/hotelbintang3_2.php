<?php
    header("Content-Type: application/javascript");
?>
<?php

    include "../../config/connection.php";
    $sql = "SELECT * FROM tb_hotel WHERE Klasifikasi = 'Bintang 3'";
    $hasil = mysqli_query($conn,$sql);
?>
var json_hotelbintang3_2 = {
    "type":"FeatureCollection",
    "name":"hotelbintang3_2",
    "crs":{
        "type":"name","properties":{
            "name":"urn:ogc:def:crs:OGC:1.3:CRS84"
        }
    },
    "features":[

<?php
        while($data=mysqli_fetch_array($hasil)) {
            $id=$data['ID'];
            $nama_hotel=$data['Nama_Hotel'];
            $total_room=$data['Total_Room'];
            $kelas=$data['Klasifikasi'];
            $sta=$data['STA'];
            $kecamatan=$data['Kecamatan'];
            $alamat=$data['Alamat'];
            $latitude=$data['Latitude'];
            $longitude=$data['Longitude'];
        
?>    
        {"type":"Feature","properties":{
            "id":"<?php echo $id; ?>",
            "Nama Hotel":"<?php echo $nama_hotel; ?>",
            "Total Room":"<?php echo $total_room; ?>",
            "Kelas":"<?php echo $kelas; ?>",
            "STA":"<?php echo $sta; ?>",
            "Kecamatan":"<?php echo $kecamatan; ?>",
            "Alamat":"<?php echo $alamat; ?>",
            "Latitude":"<?php echo $latitude; ?>",
            "Longitude":"<?php echo $longitude; ?>"},

            "geometry":{"type":"Point",
                "coordinates":[<?php echo $longitude; ?>,<?php echo $latitude; ?>]
            }
        },

        <?php
        }
        ?>
    ]
}

