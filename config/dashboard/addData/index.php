<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Data Hotel</title>
</head>

<link rel="icon" href="../../../assets/img/logo.png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../../style.css">
<link rel="stylesheet" href="../css/sb-admin-2.css">
<link rel="stylesheet" href="../css/sb-admin-2.min.css">  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
"></script>
<script src="jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places&key="></script>
<script>
	var map;
	var myCenter=new google.maps.LatLng(-6.968711, 110.430228);
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
    <!-- Outer Row -->
		<?php
			include "../../connection.php";
            if (isset($_POST['simpanData'])){
                
				$var_STA = $_POST['F_STA'];
				$var_Nama_Hotel = $_POST['F_Nama_Hotel'];
				$var_Kecamatan = $_POST['F_Kecamatan'];
				$var_Alamat = $_POST['F_Alamat'];
				$var_Klasifikasi = $_POST['F_Klasifikasi'];
				$var_Owner = $_POST['F_Owner'];
				$var_Total_Room = $_POST['F_Total_Room'];
				$var_Latitude = $_POST['x'];
				$var_Longitude = $_POST['y'];
                
                $ambil_data = mysqli_query($conn, "INSERT INTO tb_hotel
					(STA, Nama_Hotel, Kecamatan, Alamat, Klasifikasi, Owner, Total_Room, Latitude, Longitude) VALUES 
					('$var_STA','$var_Nama_Hotel','$var_Kecamatan','$var_Alamat','$var_Klasifikasi','$var_Owner','$var_Total_Room','$var_Latitude','$var_Longitude')"); 
            
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../titik-lokasi-hotel.php">';
            exit;
            }
        ?>

		<div class="container-fluid h-100">
            <div class="shadow-lg m-5 p-5">
				<h5 class="text-white mb-4 w-100 bg-primary p-2 px-3">Tambah Data Hotel</h5>
				
				<div class="row">

					<div class="col col-12 col-md-12 col-lg-5 position-relative">
						<p class="position-absolute bg-white m-auto px-3 py-2 text-gray-600" style="border-radius: 7px 7px 0px 0px; z-index:10; bottom:0; left:0;">Klik di lokasi untuk menuliskan secara otomatis</p>
						<div class="rounded-3" id="petaku" style="width: 100%; min-height: 100%;"></div>
					</div>

					<div class="col col-12 col-md-12 col-lg-7">
						<form class="user" method="post" enctype="multipart/form-data">
							<div class="form-group d-flex">
								<span class="input-group-text rounded-0 w-25 bg-transparent border-0">Nomor STA</span>
								<input required type="text" name="F_STA" class="form-control form-control-user">
							</div>
							<div class="form-group d-flex">
								<span class="input-group-text rounded-0 w-25 bg-transparent border-0">Nama Hotel</span>
								<input required type="text" name="F_Nama_Hotel" class="form-control form-control-user">
							</div>
							<div class="form-group d-flex">
								<span class="input-group-text rounded-0 w-25 bg-transparent border-0">Kecamatan</span>
								<input required type="text" name="F_Kecamatan" class="form-control form-control-user">
							</div>
							<div class="form-group d-flex">
								<span class="input-group-text rounded-0 w-25 bg-transparent border-0">Alamat</span>
								<input required type="text" name="F_Alamat" class="form-control form-control-user">
							</div>
							<div class="form-group d-flex">
							<span class="input-group-text rounded-0 w-25 bg-transparent border-0">Klasifikasi</span>
							<select class="form-select py-2 text-gray-600" name="F_Klasifikasi" style="border-radius: 35px;">
								<option selected name="F_Klasifikasi">Pilih Klasifikasi</option>
								<option name="F_Klasifikasi">Bintang 3</option>
								<option name="F_Klasifikasi">Bintang 4</option>
								<option name="F_Klasifikasi">Bintang 5</option>
							</select>
								<!-- <span class="input-group-text rounded-0 w-25 bg-transparent border-0">Klasifikasi</span>
								<input required type="text" name="F_Klasifikasi" class="form-control form-control-user"placeholder="Klasifikasi (Bintang 3/4/5)"> -->
							</div>
							<div class="form-group d-flex">
								<span class="input-group-text rounded-0 w-25 bg-transparent border-0">Owner</span>
								<input required type="text" name="F_Owner" class="form-control form-control-user">
							</div>
							<div class="form-group d-flex">
								<span class="input-group-text rounded-0 w-25 bg-transparent border-0">Total Room</span>
								<input type="number" required type="text" name="F_Total_Room" class="form-control form-control-user">
							</div>
							<div class="form-group d-flex">
								<span class="input-group-text rounded-0 w-25 bg-transparent border-0">Latitude</span>
								<input required type="text" name="x" id="x" class="form-control form-control-user">
							</div>
							<div class="form-group d-flex">
								<span class="input-group-text rounded-0 w-25 bg-transparent border-0">Longitude</span>
								<input required type="text" name="y" id="y" class="form-control form-control-user"	>
							</div>

							<style>
								.d-flex.justify-content-center.gap-3 a,.d-flex.justify-content-center.gap-3 button,.text-white.mb-4.w-100.bg-primary.p-2.px-3{
								border-radius:25px;
								}
							</style>
							<div class="d-flex justify-content-center gap-3">
								<?php echo" <button type='submit' name='simpanData' class='w-100 btn btn-primary'onClick=\"return confirm('Yakin ingin menambahkan data ini?');\">Tambah Data</button> "?>
								<button type="reset" class="w-100 btn btn-outline-primary">Reset</button>
								<?php echo " <a href='../titik-lokasi-hotel.php' class='w-100 btn btn-outline-primary' onClick=\"return confirm('Data belum disimpan, ingin kembali?');\">Kembali</a> "?>
							</div>
						</form>
					</div>
				</div>
            </div>
		</div>

</body>
</html>