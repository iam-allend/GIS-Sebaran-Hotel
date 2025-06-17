<?php require_once("../auth.php"); ?>

<?php
include "../connection.php";

    $var_id = $_GET['ID'];
    $ambil_data = mysqli_query($conn, "SELECT * FROM tb_pemakaian WHERE ID = $var_id ");

    while($data = mysqli_fetch_assoc($ambil_data)){

        include "variable.php";
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Kecamatan "<?php echo $var_kecamatan?>"</title>
</head>
<link rel="icon" href="../image/logo.png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="css/sb-admin-2.css">
<link rel="stylesheet" href="css/sb-admin-2.min.css">   
<body>

    
    
<div class="container-xl mt-5">
    <h4 class="bg-primary p-3 rounded-0 text-white  fs-4">Edit Data Pemakaian PDAM Kecamatan "<?php echo $var_kecamatan?>" - ID : <?php echo $var_id?></h4>
    <form action="edit-conf.php" method="post" enctype="multipart/form-data">

    <div class="input-group mb-3">
    <input type="hidden" name="F_id" class="form-control rounded-0" value="<?php echo $var_id?>">
    </div>
    
    <div class="input-group mb-3">
        <span class="input-group-text rounded-0 w-25">Kecamatan</span>
        <input type="text" disabled name="F_kecamatan" class="form-control rounded-0" value="<?php echo $var_kecamatan?>">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text rounded-0 w-25">Kode Provinsi</span>
        <input type="text" disabled name="F_kd_prop" class="form-control rounded-0" value="<?php echo $var_kd_prop?>">
    </div>
        <div class="input-group mb-3">
        <span class="input-group-text rounded-0 w-25">Kode Kabupaten</span>
        <input type="text" disabled name="F_kd_kab" class="form-control rounded-0" value="<?php echo $var_kd_kab?>">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text rounded-0 w-25">Kode Kabupaten</span>
        <input type="text" disabled name="F_kd_kab" class="form-control rounded-0" value="<?php echo number_format( $var_PDAM_2020)?>">
    </div>
    <?php echo" <button type='submit' name='btn-update' class='btn btn-primary rounded-0'onClick=\"return confirm('Yakin ingin Edit data ini?');\">Edit</button> "?>
    <button type="reset" class="btn btn-primary rounded-0">Reset</button>
    <?php echo " <a href='tables.php' class='btn btn-success rounded-0' onClick=\"return confirm('Yakin ingin membuang perubahan?');\">Kembali</a> "?>

</form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
"></script>
</body>
</html>
