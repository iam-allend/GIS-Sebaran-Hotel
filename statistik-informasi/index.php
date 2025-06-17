
<?php

    include '../config/connection.php';

    $ambil_data = mysqli_query($conn, "SELECT * FROM tb_hotel ORDER BY ID DESC"); // mengurutkan data
    $ambil_data2 = mysqli_query($conn, "SELECT * FROM tb_jumlah_hotel ORDER BY ID DESC"); // mengurutkan data
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daftar Hotel</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="../assets/img/logo.png" rel="icon">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/main2.css">

        <style>
        #dataTable thead tr th, #dataTable tbody tr td, #dataTable tfoot tr th{
            min-width: fit-content;
            white-space: nowrap;
            overflow-x: hidden;   
            max-width: 135px;
            text-overflow: ellipsis;
        }
        #dataTable thead tr th, #dataTable tfoot tr th{
        }
        #dataTable tbody tr td{
            font-weight: 500;
            padding: 0 auto;
        }
        .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #4F6F52;
            border-color: #4F6F52;
        }
        .page-item.active .page-link:hover {
            z-index: 3;
            color: #fff;
            background-color: #4F6F52;
            border-color: #4F6F52;
        }
        .active>.page-link, .page-link.active {
            z-index: 3;
            color: var(--bs-pagination-active-color);
            background-color: var(--bs-pagination-active-bg);
            border-color: var(--bs-pagination-active-border-color);
            text-decoration: none;
        }
        a.page-link{
            color: #4F6F52;
        }
        select.custom-select.custom-select-sm.form-control.form-control-sm {
            width: 100px;
        }
        .text-primary {
            --bs-text-opacity: 1;
            color: #4F6F52!important;
        }
        .btn-primary {
            --bs-btn-color: #fff;
            --bs-btn-bg: #4F6F52;
            --bs-btn-border-color: #4F6F52;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #1A4D2E;
            --bs-btn-hover-border-color: #0a58ca;
            --bs-btn-focus-shadow-rgb: 49, 132, 253;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #0a58ca;
            --bs-btn-active-border-color: #0a53be;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #fff;
            --bs-btn-disabled-bg: #4F6F52;
            --bs-btn-disabled-border-color: #4F6F52;
        }
    </style>
</head>

<body id="page-top">

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid ps-xl-5 ps-lg-4 ps-md-4 ps-sm-2 d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <img src="../assets/img/logo.png" alt="">
            <h3 class="d-flex align-items-center">Kota Bandung</h3>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        <nav id="navbar" class="navbar">
            <ul>
            <li><a href="../">Home</a></li>
            <li><a href="../statistik-informasi/" class="active">Statistik & Informasi</a></li>
            <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                    <li><a href="../sejarah.html">Sejaran</a></li>
                    <li><a href="../visi-misi.html">Visi & Misi</a></li>
                    <li><a href="../struktur-organisasi.html">Struktur Organisasi</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Peta Hotel</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                    <li><a href="../sebaran-data/">Data Sebaran</a></li>
                    <li class=""><a href="../titik-hotel/" class="active">Data Titik Lokasi</a></li>
                </ul>
            </li>
            <li class="text-start"><a href="../config/dashboard/login.php" class="d-xl-block d-none p-0 px-3 ms-0 ms-xl-5 rounded-5 text-black btn btn-light">Login</a></li>

            </ul>
        </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <section id="call-to-action" class="call-to-action ms pt-5">
      <div class="container pt-5" data-aos="fade-up">
        <div class="row justify-content-center pt-5">
          <div class="col-lg-6 text-center">
            <h3>Ekonomi yang Dinamis</h3>
            <p>Kota Bandung dikenal sebagai pusat fashion dengan banyak factory outlet dan desainer lokal yang inovatif. Bandung juga menjadi hub teknologi dengan keberadaan banyak startup dan perusahaan teknologi. Kehadiran perguruan tinggi ternama seperti Institut Teknologi Bandung (ITB) mendorong inovasi dan penelitian yang berkontribusi pada perkembangan ekonomi. Selain itu, sektor pariwisata dengan destinasi alam dan kuliner yang terkenal juga berperan penting dalam perekonomian kota ini.</p>
            <a class="cta-btn" href="../sebaran-data/">Lihat Sebaran</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->


                <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid p-5">

                    <!-- Page Heading -->
                    <div class="text-center mb-5 w-75 m-auto">
                        <h1 class="h3 mb-2 text-gray-800">Sebaran Data Hotel Tahun 2021</h1>
                        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                            For more information about DataTables, please visit the <a target="_blank"
                                href="https://datatables.net">official DataTables documentation</a>.</p>
                    </div>

                    <div class="row">

                        <div class="col col-12 col-lg-8">
                            <div class="card mb-4">
                                <div class="card-header py-3 d-flex justify-content-between">
                                    <h5 class="m-0 font-weight-bold text-primary">Daftar Hotel</h5>
                                </div>
                                <div class="card-body">
                                    <style>
                                        div.table-responsive{
                                            font-size: 14px !important;
                                        }
                                    </style></tr>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th hidden class="text-gray-700 text-center sorting sorting_desc" aria-sort="descending" style="max-width: 35px;">ID</th>
                                                    <th class="text-gray-700">STA</th>
                                                    <th class="text-gray-700" style="min-width: 180px !important;">Nama Hotel</th>
                                                    <th class="text-gray-700">Kecamatan</th>
                                                    <th class="text-gray-700">Alamat</th>
                                                    <th class="text-gray-700">Klasifikasi</th>
                                                    <th class="text-gray-700">Owner</th>
                                                    <th class="text-gray-700">Ttl Room</th>
                                                    <th hidden class="text-gray-700">Latitude</th>
                                                    <th hidden class="text-gray-700">Longitude</th>
                                                </tr>
                                            </thead>
                                            <style>
                                                .text-gray-600.border-bottom-1{
                                                    border-color: #4f6f52ba;
                                                }
                                            </style>
                                            <tbody>
                                            <?php while($data = mysqli_fetch_array($ambil_data)) { ?> 
                                                <tr>
                                                    <td hidden class=" text-gray-600 border-bottom-1 border-top-0 border-left-0 border-right-0 border-1 text-center" class="" style=" max-width: 35px;"><?php echo $data['ID']?></td>
                                                    <td class=" text-gray-600 border-bottom-1 border-top-0 border-left-0 border-right-0 border-1"><?php  echo $data['STA']?></td>
                                                    <td class=" text-gray-600 border-bottom-1 border-top-0 border-left-0 border-right-0 border-1 fw-normal" style=" min-width: 180px !important;"><?php echo $data['Nama_Hotel']?></td>
                                                    <td class=" text-gray-600 border-bottom-1 border-top-0 border-left-0 border-right-0 border-1 fw-normal"><?php echo $data['Kecamatan']?></td>
                                                    <td class=" text-gray-600 border-bottom-1 border-top-0 border-left-0 border-right-0 border-1 fw-normal"><?php echo $data['Alamat']?></td>
                                                    <td class=" text-gray-600 border-bottom-1 border-top-0 border-left-0 border-right-0 border-1 fw-normal"><?php echo $data['Klasifikasi']?></td>
                                                    <td class=" text-gray-600 border-bottom-1 border-top-0 border-left-0 border-right-0 border-1 fw-normal"><?php echo $data['Owner']?></td>
                                                    <td class=" text-gray-600 border-bottom-1 border-top-0 border-left-0 border-right-0 border-1 fw-normal" class="text-center"><?php echo $data['Total_Room']?></td>
                                                    <td hidden class=" text-gray-600 border-bottom-1 border-top-0 border-left-0 border-right-0 border-1 fw-normal"><?php echo $data['Latitude']?></td>
                                                    <td hidden class=" text-gray-600 border-bottom-1 border-top-0 border-left-0 border-right-0 border-1 fw-normal"><?php echo $data['Longitude']?></td>
                                                </tr>
                                            <?php } ?> 

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th hidden class="text-gray-700 text-center sorting sorting_desc"aria-label="ID:   " style="max-width: 35px;">ID</th>
                                                    <th class="text-gray-700">STA</th>
                                                    <th class="text-gray-700" style="min-width: 180px !important;">Nama Hotel</th>
                                                    <th class="text-gray-700">Kecamatan</th>
                                                    <th class="text-gray-700">Alamat</th>
                                                    <th class="text-gray-700">Klasifikasi</th>
                                                    <th class="text-gray-700">Owner</th>
                                                    <th class="text-gray-700">Ttl Room</th>
                                                    <th hidden class="text-gray-700">Latitude</th>
                                                    <th hidden class="text-gray-700">Longitude</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col col-12 col-lg-4">
                            <div class="card mb-4" >
                                <div class="card-header py-3 d-flex justify-content-between">
                                    <h5 class="m-0 font-weight-bold text-primary">Sebaran Hotel PerKecamatan</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive" style="max-height:62vh;">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            
                                            <thead>
                                                <tr>
                                                    <th hidden class="text-gray-700" class="text-center" style="max-width: 35px;">ID</th>
                                                    <th class="text-gray-700">Kode Kecamatan</th>
                                                    <th class="text-gray-700">Nama Kecamatan</th>
                                                    <th class="text-gray-700">Jumlah Hotel</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                            <?php while($data = mysqli_fetch_array($ambil_data2)) { ?> 
                                                <tr>
                                                    <td hidden class="text-gray-600 text-center" class="" style="max-width: 35px;"><?php echo $data['ID']?></td>
                                                    <td class="text-gray-600 fw-normal" style="min-width: 180px !important;"><?php echo $data['Kd_Kec']?></td>
                                                    <td class="text-gray-600 fw-normal"><?php echo $data['Nm_Kec']?></td>
                                                    <td class="text-gray-600 fw-normal"><?php echo $data['Jml_Hotel']?></td>
                                                </tr>
                                            <?php } ?> 

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th hidden class="text-gray-700" class="text-center" style="max-width: 35px;">ID</th>
                                                    <th class="text-gray-700">Kode Kecamatan</th>
                                                    <th class="text-gray-700">Nama Kecamatan</th>
                                                    <th class="text-gray-700">Jumlah Hotel</th>
                                                </tr>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- DataTales Example -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

              <footer id="footer" class="footer">

    <div class="footer-content">
    <div class="container">
        <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
            <span>Kota Bandung</span>
            </a>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links d-flex  mt-3">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
            <li><i class="bi bi-dash"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-dash"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-dash"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-dash"></i> <a href="#">Terms of service</a></li>
            <li><i class="bi bi-dash"></i> <a href="#">Privacy policy</a></li>
            </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
            <li><i class="bi bi-dash"></i> <a href="#">Web Design</a></li>
            <li><i class="bi bi-dash"></i> <a href="#">Web Development</a></li>
            <li><i class="bi bi-dash"></i> <a href="#">Product Management</a></li>
            <li><i class="bi bi-dash"></i> <a href="#">Marketing</a></li>
            <li><i class="bi bi-dash"></i> <a href="#">Graphic Design</a></li>
            </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
            A108 Adam Street <br>
            New York, NY 535022<br>
            United States <br><br>
            <strong>Phone:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> info@example.com<br>
            </p>

        </div>

        </div>
    </div>
    </div>

    <div class="footer-legal">
    <div class="container">
        <div class="copyright">
        &copy; Copyright <strong><span>NOVA | Anur Mustakim</span></strong> | A22.2023.03012 | Universitas Dian Nuswantoro
        </div>
        <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nova-bootstrap-business-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
    </div>
</footer><!-- End Footer --><!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
    <script src="../assets/js/main.js"></script>   

</body>

</html>