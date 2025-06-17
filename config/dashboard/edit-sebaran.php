<?php require_once("../auth.php"); ?>

<?php
include "../connection.php";

    $var_id = $_GET['ID'];
    $ambil_data = mysqli_query($conn, "SELECT * FROM tb_jumlah_hotel WHERE ID = $var_id ");

    while($data = mysqli_fetch_assoc($ambil_data)){

        include "variable-sebaran.php";
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Kecamatan "<?php echo $var_Nm_Kec?>"</title>
</head>
<link rel="icon" href="../image/logo.png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="css/sb-admin-2.css">
<link rel="stylesheet" href="css/sb-admin-2.min.css">   
<body>

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="p-5">
                        <h5 class="text-white mb-4 w-100 bg-primary p-2 px-3">Edit sebaran hotel Kecamatan <?php echo $var_Nm_Kec?></h5>
                        <form class="user"action="edit-sebaran-conf.php" method="post" enctype="multipart/form-data">
                        
                            <div class="input-group mb-3">
                                <input type="hidden" name="F_id" class="form-control rounded-0" value="<?php echo $var_id?>">
                            </div>
                            <div class="form-group d-flex">
                                <span class="input-group-text rounded-0 w-25 bg-transparent border-0">Kode Kecamatan</span>
                                <input type="text" name="" class="form-control form-control-user" disabled value="<?php echo $var_Kd_Kec?>">
                            </div>
                            <div class="form-group d-flex">
                                <span class="input-group-text rounded-0 w-25 bg-transparent border-0">Nama Hotel</span> 
                                <input type="text" name="" class="form-control form-control-user" disabled value="<?php echo $var_Nm_Kec?>">
                            </div>
                            <div class="form-group d-flex">
                                <span class="input-group-text rounded-0 w-25 bg-transparent border-0">Kecamatan</span>
                                <input type="text" name="F_Jml_Hotel" class="form-control form-control-user" value="<?php echo $var_Jml_Hotel?>">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
"></script>
</body>
</html>