
<?php

require_once("../connection.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $nama = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $tgl_lahir = filter_input(INPUT_POST, 'tgl_lahir', FILTER_SANITIZE_STRING);
    $alamat_adm = filter_input(INPUT_POST, 'alamat_adm', FILTER_SANITIZE_STRING);
    // enkripsi password
    $pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    // menyiapkan query
    $sql = "INSERT INTO tbl_admin (nama, username, email, pass, tgl_lahir, alamat_adm) 
            VALUES (:nama, :username, :email, :pass, :tgl_lahir, :alamat_adm)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":nama" => $nama,
        ":username" => $username,
        ":email" => $email,
        ":pass" => $pass,
        ":tgl_lahir" => $tgl_lahir,
        ":alamat_adm" => $alamat_adm

    );

    // eksekusi query untuk menyimpan ke database
$saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved){
        echo "
        <script> alert('Akun berhasil dibuat, tekan (Oke) untuk Login!!');
        window.setTimeout(function(){
        window.location.href = 'login.php';

        }, 1000);
        </script>";
    } 

}

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KOTA BANDUNG</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="../../assets/img/logo.png" rel="icon">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
                            </div>
                            <form class="user" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="name"
                                        placeholder="Nama" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="username" 
                                        placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email"
                                        placeholder="Alamat Email" required>
                                </div>
                                <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            name="pass" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        name="alamat_adm" placeholder="Alamat" required>
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control form-control-user"
                                        name="tgl_lahir" placeholder="Tanggal Lahir" required>
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-user btn-block" name="register" value="Buat Akun">
                                </div>
                                <hr>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="login.php">Sudah punya akun? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>