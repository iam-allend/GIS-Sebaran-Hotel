<?php require_once("../auth.php"); ?>

<?php

    include '../connection.php';

    $ambil_data = mysqli_query($conn, "SELECT * FROM tb_pemakaian ORDER BY ID"); // mengurutkan data
    $ambil_data_admin = mysqli_query($conn, "SELECT * FROM tbl_admin ORDER BY id"); // mengurutkan data

    // hapus data pemakaian
    if (isset($_GET['ID'])) {

    $var_ID = $_GET['ID'];
    $query = mysqli_query($conn, "DELETE FROM tb_pemakaian WHERE ID='$var_ID'"); //mengambil id
        if ($query) {
        header('location: index.php');
        } else {
        header('location: index.php');
        }
    }

    // hapus data admin
    if (isset($_GET['id'])) {

    $var_id_admin = $_GET['id'];
    $query  = mysqli_query($conn, "DELETE FROM tbl_admin WHERE id='$var_id_admin'"); //mengambil id
        if ($query) {
        header('location: index.php');
        } else {
        header('location: index.php');
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

    <title>Dashboard Admin</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="icon" href="../image/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<style>
    .detail-acara{
    width: 100% !important; 
    resize: none; 
    border: 0px;
    background-color: transparent;
    }
    .detail-acara::-webkit-scrollbar { 
        width: 5px;
    } 
    .detail-acara::-webkit-scrollbar-track {
        background: rgba(204, 204, 203, 0.285);
    }
    .detail-acara::-webkit-scrollbar-thumb {
        background: rgb(202, 202, 202);
    }
    .detail-acara::-webkit-scrollbar-thumb:hover {
        background: gray;
    }
    th.sorting.sorting_asc{
        padding-right: 0px !important;
    }
</style>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html" style="background-color: rgb(255, 255, 255);">
                <div class="sidebar-brand-icon" >
                    <img width="40" src="../image/logo.png" alt="">
                </div>
                <div class="sidebar-brand-text text-success mx-3 text-left" style="line-height: 15px;">RT05/RW03 Patemon</div>
            </a>

            <!-- Divider -->
            <!-- <hr class="sidebar-divider my-0"> -->

            <!-- Nav Item - Home -->
            <li class="nav-item">
                <?php echo "
                <a class='nav-link' href='../index.php' onClick=\"return confirm('Yakin ingin keluar dari halaman ini?');\">
                    <i class='bi bi-house-door-fill'></i>
                    <span>Home</span></a>
                    "?>
            </li>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <!-- <hr class="sidebar-divider"> -->

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Interface
            </div> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Utilities Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li> -->

            <!-- Divider -->
            <!-- <hr class="sidebar-divider"> -->

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Addons
            </div> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Charts -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li> -->

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="tables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tabel Event</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tables-user.php">
                    <i class="bi bi-person-lines-fill"></i>
                    <span>Tabel User</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tables-komen.php">
                    <i class="bi bi-chat-left-text-fill"></i>
                    <span>Tabel Komen</span></a>
            </li>
            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto"> 

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-success" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo  $_SESSION["admin"]["nama"] ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <?php echo " 
                                    <a class='dropdown-item' href='../config/admin/dashboard.php' onClick=\"return confirm('Yakin ingin keluar dari halaman ini?');\">
                                        <i class='fas fa-user fa-sm fa-fw mr-2 text-gray-400'></i>
                                        Profile
                                    </a>
                                "?> 
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <p class="fs-3 mb-0 text-gray-800">Halaman Tabel Event </p>
                    <p class="mb-4"> Hallo <?php echo  $_SESSION["admin"]["nama"] ?>, Selamat Datang!!</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header pt-3 pb-0 d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Event</h6>
                            <a class="btn btn-success text-white fw-bold rounded-0" data-bs-toggle="offcanvas" href="#tambahDataMatkulForm">
                            Tambah Data
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="max-width: 55px !important;">ID</th>
                                            <th style="width: 50px;">Image</th>
                                            <th style="max-width: 180px !important">Judul</th>
                                            <th style="min-width: 400px !important;">Detail</th>
                                            <th style="max-width: 150px !important">Mulai</th>
                                            <th style="max-width: 150px !important">Selesai</th>
                                            <th>Manage</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        
                                        <tr>
                                            <th style="max-width: 55px !important;">ID</th>
                                            <th style="width: 50px;">Image</th>
                                            <th style="max-width: 180px !important">Judul</th>
                                            <th style="min-width: 400px !important;">Detail</th>
                                            <th style="max-width: 150px !important">Mulai</th>
                                            <th style="max-width: 150px !important">Selesai</th>
                                            <th>Manage</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php while($data = mysqli_fetch_array($ambil_data_event)) { ?> 
                                        <tr>
                                            <td><input class="border-0 text-gray-600 bg-transparent w-100" disabled value="<?php echo $data['id_galery'] ?> " style="max-width: 55px !important;"></td>

                                            <td class="py-1">
                                                <a target="_blank" class="" href="<?php echo $data['alamat_gambar1'] ?>">
                                                    <img class="rounded-2 m-auto d-hidden" style="width: 70px; height: 45px; border-radius:3px;" src="<?php echo $data['alamat_gambar1'] ?>" alt="">
                                                </a>
                                            </td>

                                            <td><input class="border-0 text-gray-600 bg-transparent w-100" disabled value="<?php echo $data['judul_acara'] ?>"></td>

                                            <td class="pb-1">
                                                <textarea disabled class="detail-acara my-0 text-gray-600" rows="1"><?php echo $data['detail_acara'] ?></textarea>
                                            </td>

                                            <td style="max-width: 150px !important"><input class="border-0 text-gray-600 bg-transparent" disabled value="<?php echo $data['tgl_mulai'] ?>"> </td>
                                            <td style="max-width: 150px !important"><input class="border-0 text-gray-600 bg-transparent" disabled value="<?php echo $data['tgl_selesai'] ?>"></td>

                                            <td class="d-flex justify-content-center align-items-center align-content-center h-100 py-sm-2 py-md-2 py-lg-2 py-xl-2">
                                                <div class="d-flex flex-wrap-none" style="white-space:none;">
                                                    <?php echo "<a href='edit-event.php? id_galery=$data[id_galery]' class='btn btn-success mx-1 py-0 my-0 btn-icon-split'>
                                                        <span class='icon text-white-100'>
                                                            <i class='bi bi-pencil-square'></i>
                                                        </span>
                                                    </a>" ?>
                                                    <?php echo "<a href='tables.php? id_galery=$data[id_galery]' class='btn btn-danger mx-1 py-0 my-0 btn-icon-split' onClick=\"return confirm('Yakin ingin hapus data?');\">
                                                        <span class='icon text-white-100'>
                                                            <i class='fas fa-trash'></i>
                                                        </span>
                                                    </a>" ?>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin ingin Logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Tekan "Logout" Jika ingin mengakhiri sesi ini!!</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal  </button>
                    <a class="btn btn-success" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

<!-- OFFCANVAS TAMBAH DATA -->
    <div class="offcanvas offcanvas-end w-100 container" data-bs-scroll="true" data-bs-backdrop="static" tabindex="-1" id="tambahDataMatkulForm" aria-labelledby="idFormTambahData">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <?php
            if (isset($_POST['simpanData'])){
                
                include '../config/variable.php'; //harus dipanggil disini agar dapat variable-nya
                
                $ambil_data = mysqli_query($conn, "INSERT INTO tbl_event(alamat_gambar1, alamat_gambar2, judul_acara, detail_acara, tgl_mulai, tgl_selesai) VALUES ('$var_almt1','$var_almt2','$var_judul_acara','$var_detail_acara','$var_tgl_mulai','$var_tgl_selesai')"); 
            
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../conf/tables.php">';
            exit;
            }
        ?>

        <!-- OFFCANVAS TAMBAH DATA -->
        <div class="offcanvas-body container">
            <h4 class="offcanvas-title mb-4" id="idFormTambahData">Tambah Event</h5>
            <form action="" enctype="multipart/form-data" method="POST">

                <div class="input-group mb-3">
                    <span class="input-group-text w-25">URL Gambar1</span>
                    <input type="text" name="F_almt1" id="F_almt1" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text w-25">URL Gambar2</span>
                    <input type="text" name="F_almt2" id="F_almt2" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text w-25">Nama Acara</span>
                    <input type="text" name="F_judul_acara" id="F_judul_acara" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text w-25">Detail Acara</span>
                    <textarea type="text" name="F_detail_acara" id="F_detail_acara" class="form-control"></textarea>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text w-25">Tgl Mulai</span>
                    <input type="datetime-local" name="F_tgl_mulai" id="F_tgl_mulai" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text w-25">Tgl Selesai</span>
                    <input type="datetime-local" name="F_tgl_selesai" id="F_tgl_selesai" class="form-control">
                </div>
                <button type="submit" name="simpanData" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-primary">Reset</button>

            </form>
        </div>

    </div>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>