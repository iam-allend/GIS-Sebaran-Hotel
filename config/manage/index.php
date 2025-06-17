<?php require_once("../auth.php"); ?>

<?php

    include '../connection.php';

    $ambil_data = mysqli_query($conn, "SELECT * FROM tb_pemakaian ORDER BY ID"); // mengurutkan data
    $ambil_data2 = mysqli_query($conn, "SELECT * FROM tb_pemakaian ORDER BY ID"); // mengurutkan data

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
    $query = mysqli_query($conn, "DELETE FROM tbl_admin WHERE id='$var_id_admin'"); //mengambil id
        if ($query) {
        header('location: index.php');
        } else {
        header('location: index.php');
        }
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="./resources/ol.css">
        <link rel="stylesheet" href="resources/fontawesome-all.min.css">
        <link rel="stylesheet" href="./resources/ol-layerswitcher.css">
        <link rel="stylesheet" href="./resources/qgis2web.css">
<style>
.search-layer {
  top: 135px;
  left: .5em;
}
.ol-touch .search-layer {
  top: 180px;
}
</style>
      <style>
        .ol-control button {
            background-color: #f8f8f8 !important;
            color: #294e75 !important;
            border-radius: 0px !important;
        }
        .ol-zoom, .geolocate, .gcd-gl-control .ol-control {
            background-color: rgba(255,255,255,.4) !important;
            padding: 3px !important;
        }
        .ol-scale-line {
            background: none !important;
        }
        .ol-scale-line-inner {
            border: 2px solid #f8f8f8 !important;
            border-top: none !important;
            background: rgba(255, 255, 255, 0.5) !important;
            color: black !important;
        }
        .geolocate {
            top: 65px;
            left: .5em;
        }
        .ol-touch .geolocate {
            top: 80px;
        }

        th.round-1{
          border-radius: 7px 0px 0px 0;
        }
        th.round-2{
          border-radius: 0px 7px 0 0;
        }
        th.round-3{
          border-radius: 0px 0px 0px 7px;
        }
        th.round-4{
          border-radius: 0px 0px 7px 0px;
        }
        tr,td, h1, h2, h3, h4, input{
          background-color: transparent !important;
          color: #000 !important;
        }  
        thead.table-dark,th.th-th{
          background-color: #1b2f45 !important;
        }
        </style>
<style>
.tooltip {
  position: relative;
  background: rgba(0, 0, 0, 0.5);
  border-radius: 4px;
  color: white;
  padding: 4px 8px;
  opacity: 0.7;
  white-space: nowrap;
}
.tooltip-measure {
  opacity: 1;
  font-weight: bold;
}
.tooltip-static {
  background-color: #ffcc33;
  color: black;
  border: 1px solid white;
}
.tooltip-measure:before,
.tooltip-static:before {
  border-top: 6px solid rgba(0, 0, 0, 0.5);
  border-right: 6px solid transparent;
  border-left: 6px solid transparent;
  content: "";
  position: absolute;
  bottom: -6px;
  margin-left: -7px;
  left: 50%;
}
.tooltip-static:before {
  border-top-color: #ffcc33;
}
.measure-control {
  top: 100px;
  left: .5em;
  display: flex;
}
.ol-touch .measure-control {
  top: 130px;
}
.measure-control label {
  padding: 1px;
  padding-right: 4px;
}
</style>
        <style>
        html, body, #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
        </style>
        <title>DATA PENGGUNAAN AIR PDAM</title>


        <link href="../../assets/img/logo.png" rel="icon">
        <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

        <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="../../assets/vendor/remixicon/remixicon.css" rel="stylesheet">

        <link href="../../assets/css/main.css" rel="stylesheet">
    </head>
    <body class="page-index">

        <header id="header" class="header d-flex align-items-center fixed-top">
          <div class="container-fluid ps-xl-5 ps-md-5 ps-sm-2 container-fluid d-flex align-items-center justify-content-between">
  
            <a href="../index.html" class="logo d-flex align-items-center">
              <img src="../../assets/img/logo.png" alt="">
              <h3 class="d-flex align-items-center text-white">KABUPATEN KARANGASEM</h3>
            </a>
  
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
  
            <nav id="navbar" class="navbar">
              <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="services.html">Informasi</a></li>
                <li><a href="index.html" class="active">PDAM</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="team.html">Team</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                  <ul>
                    <li><a href="#">Terkini</a></li>
                    <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                      <ul>
                        <li><a href="#">Deep Dropdown 1</a></li>
                        <li><a href="#">Deep Dropdown 2</a></li>
                        <li><a href="#">Deep Dropdown 3</a></li>
                        <li><a href="#">Deep Dropdown 4</a></li>
                        <li><a href="#">Deep Dropdown 5</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Dropdown 2</a></li>
                    <li><a href="#">Dropdown 3</a></li>
                    <li><a href="#">Dropdown 4</a></li>
                  </ul>
                </li>
                <li><a href="contact.html"><span class="p-1 px-4 rounded-5 text-black bg-white d-flex align-items-center nowrap"> Login<i class="bi bi-box-arrow-in-right fs-3"></i></span></a></li>
              </ul>
            </nav><!-- .navbar -->
  
          </div>
        </header><!-- End Header -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action" 
        style="
        background-position: center !important;
        background-attachment: fixed !important;
        background-size: cover !important;
        background-repeat:no-repeat !important;
        background:
          linear-gradient(rgba(27, 47, 69, 0.8), rgba(27, 47, 69, 0.8)), 
          url('../../assets/img/BG-1.png');">
          <div class="container" data-aos="fade-up" >
            <div class="row justify-content-center">
              <div class="col-lg-6 text-center">
                <h3 class="text-white mt-5">Ketersediaan Air Bersih Untuk Masyarakat</h3>
                <p>Pemerintah Kabupaten Karangasem berkomitmen untuk memastikan akses air bersih yang berkualitas dan mudah dijangkau bagi seluruh masyarakat. Berbagai upaya dilakukan, seperti pembangunan jaringan pipa, peningkatan kualitas air, dan penyediaan air bersih di daerah terpencil</p>
                <a class="cta-btn" href="#">Lihat Ketersediaan</a>
              </div>
            </div>

          </div>
        </section><!-- End Call To Action Section -->

        <div class="container-fluid py-5" style="background-color:#f7f9fc;">
          <div class="container p-0">

            <div class="row p-0">
              <div class="col col-12 col-md-12 col-lg-8">
                <div class="container py-3 px-4 pb-2 border-0 border-end" style="border: 1px solid black;">
                  

                  <h3 class="sidebar-title my-3 fw-normal">Data Pemakaian Air PDAM Kecamatan</h3>
                  <table class="table table-hover text-black p-5 caption-top border-top-color">
                  
                  <thead class="table-dark">
                    <tr>
                      <th colspan="1" class="th-th">ID - Kecamatan</th>
                      <th colspan="1" class="th-th text-center">Kode Provinsi</th>
                      <th colspan="1" class="th-th text-center">Kode Kabupaten</th>
                      <th colspan="1" class="th-th text-center">Jumlah Pemakaian</th>
                      <th colspan="1" class="th-th text-center">Manage</th>
                    </tr>
                  </thead>

                  <tbody>
                  <?php while($data = mysqli_fetch_array($ambil_data)) { ?> 
                    <tr>
                      
                      <td><input class="border-0" disabled value="<?php echo $data['ID_Kec']?> - <?php  echo $data['Kecamatan']?>"></td>
                      <td><input class="border-0 w-100 text-center" disabled value="<?php echo $data['kode_prop']?>"></td>
                      <td><input class="border-0 w-100 text-center" disabled value="<?php echo $data['kode_kab']?>"></td>
                      <td class="text-nowrap text-center"><input style="max-width: 70px !important;" class="border-0 text-end" disabled value="<?php echo number_format( $data['PDAM_2020'])?>"> <span>m<sup>3</sup></span> </td>

                      <td class="d-flex justify-content-center w-100 align-items-center align-content-center">
                        <div class="d-flex flex-wrap-none w-100 text-center justify-content-center" style="white-space:none;">
                            <?php echo "<a href='edit.php? ID=$data[ID]' class='rounded-1 btn btn-info mx-1 py-0 my-0 btn-icon-split'>
                                <span class='icon text-white'>
                                    <i class='bi bi-pencil-square'></i>
                                </span>
                            </a>" ?>
                            <?php echo "<a href='index.php? ID=$data[ID]' class='rounded-1 btn btn-light border-warning mx-1 py-0 my-0 btn-icon-split' onClick=\"return confirm('Yakin ingin hapus data?');\">
                                <span class='icon text-warning'>
                                    <i class='fas fa-trash'></i>
                                </span>
                            </a>" ?>
                        </div>
                      </td>
                    </tr>
                  <?php } ?> 
                    </tbody>

                  <thead class="table-dark">
                    <tr class="border-0">
                      <th colspan="1" class="th-th">ID - Kecamatan</th>
                      <th colspan="1" class="th-th text-center">Kode Provinsi</th>
                      <th colspan="1" class="th-th text-center">Kode Kabupaten</th>
                      <th colspan="1" class="th-th text-center">Jumlah Pemakaian</th>
                      <th colspan="1" class="th-th text-center">Manage</th>
                    </tr>
                    </thead>
                  </table>

                </div>
              </div>

              <div class="col col-12 col-md-12 col-lg-4 ps-0">
                <section id="blog" class="blog pt-3 ps-0">
                  <div class="container" data-aos="fade-up">

                    <div class="sidebar ps-lg-0">
                      <div class="sidebar-item recent-posts">
                        <h3 class="sidebar-title my-3 fw-normal">List Admin</h3>
                          <table class="table table-hover text-black p-5 ps-0 caption-top border-top-color">
                          
                          <thead class="table-dark">
                            <tr>
                              <th colspan="1" class="th-th text-start">ID - Nama</th>
                              <th colspan="1" class="th-th text-start">Email</th>
                              <th colspan="1" class="th-th text-start">Tgl Lahir</th>
                              <th colspan="1" class="th-th text-center">Manage</th>
                            </tr>
                          </thead>

                          <tbody>
                          <?php while($data = mysqli_fetch_array($ambil_data_admin)) { ?> 
                            <tr>
                              <td><input class="border-0 w-100" value="<?php  echo $data['id']?> - <?php  echo $data['nama']?>"></td>
                              <td><input class="border-0 w-100 text-start" value="<?php echo $data['email']?>"></td>
                              <td><input class="border-0 w-100 text-start" value="<?php echo $data['tgl_lahir']?>"></td>

                              <td class="d-flex justify-content-center w-100 align-items-center">
                                <div class="d-flex flex-wrap-none w-100 text-center justify-content-center" style="white-space:none;">
                                    <?php echo "<a href='edit.php? id=$data[id]' class='rounded-1 btn btn-info mx-1 py-0 my-0 btn-icon-split'>
                                        <span class='icon text-white'>
                                            <i class='bi bi-pencil-square'></i>
                                        </span>
                                    </a>" ?>
                                    <?php echo "<a href='index.php? id=$data[id]' class='rounded-1 btn btn-light border-warning mx-1 py-0 my-0 btn-icon-split' onClick=\"return confirm('Yakin ingin hapus data?');\">
                                        <span class='icon text-warning'>
                                            <i class='fas fa-trash'></i>
                                        </span>
                                    </a>" ?>
                                </div>
                              </td>
                            </tr>
                          <?php } ?> 
                          </tbody>
                        </table>

                      </div><!-- End sidebar recent posts-->
                    </div>
                  </div>
                </section>
              </div>

            </div>
          </div>
        </div>

        <div class="section-header mb-0 mt-5 p-0">
          <h2 class="fs-2">Peta Sebaran Pemakaian</h2> 
        </div>

        <div id="map" class="rounded-4 main-container container m-auto mt-0 mb-5" style="border:1px solid #F1F1F1;">
          
          <div id="popup" class="ol-popup">
              <a href="#" id="popup-closer" class="ol-popup-closer"></a>
              <div id="popup-content" class="th-th"></div>
          </div>
        </div>
        
        <footer id="footer" class="footer">

          <div class="footer-content">
            <div class="container">
              <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                  <a href="index.html" class="logo d-flex align-items-center">
                    <span>Nova</span>
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
                &copy; Copyright <strong><span>Nova</span></strong>. All Rights Reserved
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


        <script src="resources/qgis2web_expressions.js"></script>
        <script src="resources/polyfills.js"></script>
        <script src="./resources/functions.js"></script>
        <script src="./resources/ol.js"></script>
        <script src="./resources/ol-layerswitcher.js"></script>
        <script src="layers/KabupatenKarangasem_0.php"></script>
        <script src="styles/KabupatenKarangasem_0_style.js"></script>
        <script src="./layers/layers.js" type="text/javascript"></script> 
        <script src="./resources/Autolinker.min.js"></script>
        <script src="./resources/qgis2web.js"></script>


        <div id="preloader"></div>
        <!-- Vendor JS Files -->
        <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../../assets/vendor/aos/aos.js"></script>
        <script src="../../assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="../../assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="../../assets/js/main.js"></script>
    </body>
</html>
