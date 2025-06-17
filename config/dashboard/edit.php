<?php require_once("../auth.php"); ?>

<?php
include "../connection.php";

    $var_id = $_GET['ID'];
    $ambil_data = mysqli_query($conn, "SELECT * FROM tb_hotel WHERE ID = $var_id ");

    while($data = mysqli_fetch_assoc($ambil_data)){

        include "variable.php";
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Kecamatan "<?php echo $var_Nama_Hotel?>"</title>
</head>
<link rel="icon" href="../image/logo.png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="css/sb-admin-2.css">
<link rel="stylesheet" href="css/sb-admin-2.min.css">   
<script src="jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places&key="></script>
<script>
	var map;
	var myCenter=new google.maps.LatLng(-6.913244, 107.611608);
	var marker;
	var awal=0;

	var mapProp = {
	center:myCenter,
	zoom:15,
	mapTypeId:google.maps.MapTypeId.ROADMAP
	};

	function initialize()
	{

	map = new google.maps.Map(document.getElementById("petaku"),mapProp);
	
		google.maps.event.addListener(map,'click',function(event){

		if(awal==0){
		placeMarker(event.latLng);
		}else{
		changeMarker(event.latLng);
		}
		awal=1;
		
		setLatLng(event.latLng);
		});
	
	}

	function setLatLng(lokasi){
		
		

		$("#x").val(lokasi.lat());
		$("#y").val(lokasi.lng());
		
	}

	function placeMarker(location) {  
	marker = new google.maps.Marker({
		position: location,
		map: map,
	});
	}

	function changeMarker(location) {  
	marker.setPosition(location);
	}
</script>
<body onload="initialize()">

<div class="container-fluid">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="p-5">
                        <h5 class="text-white mb-4 w-100 bg-primary p-2 px-3">Edit data hotel (<?php echo $var_Nama_Hotel?>)</h5>
                        
                        <div class="row">
                            <div class="col col-12 col-md-12 col-lg-5 position-relative">
                                <p class="position-absolute bg-white m-auto px-3 py-2 text-gray-600" style="border-radius: 7px 7px 0px 0px; z-index:10; bottom:0; left:0;">Klik di lokasi untuk menuliskan secara otomatis</p>
                                <div class="rounded-3" id="petaku" style="width: 100%; min-height: 100%;"></div>
                            </div>
                            <div class="col col-12 col-md-12 col-lg-7">
                                <form class="user"action="edit-conf.php" method="post" enctype="multipart/form-data">
                                
                                    <div class="input-group mb-3">
                                        <input type="hidden" name="F_id" class="form-control rounded-0" value="<?php echo $var_id?>">
                                    </div>
                                    <div class="form-group d-flex">
                                        <span class="input-group-text rounded-0 w-25 bg-transparent border-0">STA</span>
                                        <input type="text" name="F_STA" class="form-control form-control-user"placeholder="STA"value="<?php echo $var_STA?>">
                                    </div>
                                    <div class="form-group d-flex">
                                        <span class="input-group-text rounded-0 w-25 bg-transparent border-0">Nama Hotel</span>
                                        <input type="text" name="F_Nama_Hotel" class="form-control form-control-user"placeholder="Nama_Hotel"value="<?php echo $var_Nama_Hotel?>">
                                    </div>
                                    <div class="form-group d-flex">
                                        <span class="input-group-text rounded-0 w-25 bg-transparent border-0">Kecamatan</span>
                                        <input type="text" name="F_Kecamatan" class="form-control form-control-user"placeholder="Kecamatan"value="<?php echo $var_Kecamatan?>">
                                    </div>
                                    <div class="form-group d-flex">
                                        <span class="input-group-text rounded-0 w-25 bg-transparent border-0">Alamat</span>
                                        <input type="text" name="F_Alamat" class="form-control form-control-user"placeholder="Alamat"value="<?php echo $var_Alamat?>">
                                    </div>
                                    <div class="form-group d-flex">
                                        <span class="input-group-text rounded-0 w-25 bg-transparent border-0">Klasifikasi</span>
                                        <input type="text" name="F_Klasifikasi" class="form-control form-control-user"placeholder="Klasifikasi (Bintang 3/4/5)"value="<?php echo $var_Klasifikasi?>">
                                    </div>
                                    <div class="form-group d-flex">
                                        <span class="input-group-text rounded-0 w-25 bg-transparent border-0">Owner</span>
                                        <input type="text" name="F_Owner" class="form-control form-control-user"placeholder="Nama Owner"value="<?php echo $var_Owner?>">
                                    </div>
                                    <div class="form-group d-flex">
                                        <span class="input-group-text rounded-0 w-25 bg-transparent border-0">Total Room</span>
                                        <input type="text" name="F_Total_Room" class="form-control form-control-user"placeholder="Total Room"value="<?php echo $var_Total_Room?>">
                                    </div>
                                    <div class="form-group d-flex">
                                        <span class="input-group-text rounded-0 w-25 bg-transparent border-0">Latitude</span>
                                        <input type="text" id="x" name="F_Latitude" class="form-control form-control-user"placeholder="Latitude"value="<?php echo $var_Latitude?>">
                                    </div>
                                    <div class="form-group d-flex">
                                        <span class="input-group-text rounded-0 w-25 bg-transparent border-0">Longitude</span>
                                        <input type="text" id="y" name="F_Longitude" class="form-control form-control-user"placeholder="Longitude"value="<?php echo $var_Longitude?>">
                                    </div>
    
                                    <style>
                                        .d-flex.justify-content-center.gap-3 a,.d-flex.justify-content-center.gap-3 button,.text-white.mb-4.w-100.bg-primary.p-2.px-3{
                                        border-radius:25px;
                                        }
                                    </style>
                                    <div class="d-flex justify-content-center gap-3">
                                        <?php echo" <button type='submit' name='btn-update' class='w-100 btn btn-primary'onClick=\"return confirm('Yakin ingin Edit data ini?');\">Edit</button> "?>
                                        <button type="reset" class="w-100 btn btn-outline-primary">Reset</button>
                                        <?php echo " <a href='titik-lokasi-hotel.php' class='w-100 btn btn-outline-primary' onClick=\"return confirm('Yakin ingin membuang perubahan?');\">Kembali</a> "?>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
"></script>
</body>
</html>