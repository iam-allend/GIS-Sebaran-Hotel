<?php 
require_once("connection.php");
if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM tbl_admin WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $admin = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($admin){
        // verifikasi password
        if(password_verify($pass, $admin["pass"])){
            // buat Session
            session_start();
            $_SESSION["admin"] = $admin;
            // login sukses, alihkan ke halaman dashboard
            header("Location: dashboard/tables.php");

        }if(!password_verify($pass, $admin["pass"])){
            echo '<script>alert("username atau password salah atau tidak ditemukan");</script>';
        }
    }if(!$admin){
        echo '<script>alert("username atau password salah atau tidak ditemukan");</script>';
    }
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
                    <p class="fs-3">LOGIN ADMIN</p>
                    
                    <div class="form-group mb-2">
                        <input class="form-control rounded-0" type="text" name="username" placeholder="Username atau email" />
                    </div>
                    <div class="form-group mb-2">
                        <input class="form-control rounded-0" type="password" name="pass" placeholder="Password" />
                    </div>
                    <input type="submit" class="btn-masuk-login" name="login" value="Masuk" />
    
                    <p class="to-register mt-2" style="font-size: 0.8rem; font-style: italic;">Belum punya akun? <a href="register.php">Daftar disini</a></p>
                    <p class="to-register mt-2" style="font-size: 0.8rem; font-style: italic;">Login User?<a href="../user/"> Klik disini</a></p>

                </form>
            </div>
        </div>
    </div>

</body>
</html>
