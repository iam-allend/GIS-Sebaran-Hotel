
<?php

require_once("connection.php");

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
    if($saved) header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KABUPATEN KARANGASEM</title>
    
</head>

<body>

    <div class="container-fluid container-secContent p-0">
        <div class="overlay-login-body"></div>
        <div class="second-container container">
            <div class="container-form">
                <form action="" method="POST" class="">
                    <p class="fs-3">DAFTAR</p>

                    <form action="" method="POST">

                    <div class="form-group mb-2">
                        <input class="form-control rounded-0" type="text" name="name" placeholder="Nama Lengkap" required />
                    </div>

                    <div class="form-group mb-2">
                        <input class="form-control rounded-0" type="text" name="username" placeholder="Username" required/>
                    </div>

                    <div class="form-group mb-2">
                        <input class="form-control rounded-0" type="email" name="email" placeholder="Alamat Email" required/>
                    </div>

                    <div class="form-group mb-2">
                        <input class="form-control rounded-0" type="password" name="pass" placeholder="Password" required/>
                    </div>
                    <div class="form-group mb-2">
                        <input class="form-control rounded-0" name="alamat_adm" placeholder="Alamat" value="" />
                    </div>
                    <div class="form-group mb-2">
                        <label class="ps-2 pb-2" for="tgl_lahir">Tanggal Lahir</label>
                        <input class="form-control rounded-0" type="date" name="tgl_lahir" required/>
                    </div>

                    <input type="submit" class="btn-masuk-login" name="register" value="Daftar" />

                    <p class="to-register mt-2" style="font-size: 0.8rem; font-style: italic;">Sudah punya akun? Masuk<a href="index.php"> disini</a></p>
                </form>
            </div>
        </div>
    </div>

</body>
