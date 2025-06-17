
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
        <link rel="stylesheet" type="text/css" href="resources/horsey.min.css">
        <link rel="stylesheet" type="text/css" href="resources/ol3-search-layer.min.css">
        <link rel="stylesheet" href="./resources/ol-layerswitcher.css">
        <link rel="stylesheet" href="./resources/qgis2web.css">

        <link href="../assets/img/logo.png" rel="icon">
        <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">

        <link href="../assets/css/main2.css" rel="stylesheet">
        <title>Peta Sebaran Hotel</title>

        <style>
        html, body {
            background-color: #ffffff;
        }
        .ol-control > * {
            background-color: #f8f8f8!important;
            color: #2a924b!important;
            border-radius: 0px;
        }
        .ol-attribution a, .gcd-gl-input::placeholder, .search-layer-input-search::placeholder {
            color: #2a924b!important;
        }
        .search-layer-input-search {
            background-color: #f8f8f8!important;
        }
        .ol-control > *:focus, .ol-control >*:hover {
            background-color: rgba(248, 248, 248, 0.7)!important;
        } 
        .ol-control {
            background-color: rgba(255,255,255,.4) !important;
            padding: 2px !important;
        } 
        .leaflet-top, .leaflet-bottom {
            position: absolute;
            z-index: auto;
            pointer-events: none;
        }
        </style>

        <title>Peta Sebaran Hotel</title>
    </head>
    <body>

        
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
                <li><a href="../statistik-informasi/"  class="">Statistik & Informasi</a></li>
                <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="../sejarah.html">Sejaran</a></li>
                        <li><a href="../visi-misi.html">Visi & Misi</a></li>
                        <li><a href="../struktur-organisasi.html">Struktur Organisasi</a></li>
                    </ul>
                </li>
                <li class="dropdown active"><a class="active" href="#"><span>Peta Hotel</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li class="active2"><a href="../sebaran-data/">Data Sebaran</a></li>
                        <li ><a href="../titik-hotel/" class="active">Data Titik Lokasi</a></li>
                    </ul>
                </li>
                <li class="text-start"><a href="../config/dashboard/login.php" class="d-xl-block d-none p-0 px-3 ms-0 ms-xl-5 rounded-5 text-black btn btn-light">Login</a></li>

            </ul>
        </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->


    <section id="call-to-action" class="call-to-action ms pt-5">
      <div class="container pt-5">
        <div class="row justify-content-center pt-5">
          <div class="col-lg-6 text-center">
            <h3>Ekonomi yang Dinamis</h3>
            <p>Kota Bandung dikenal sebagai pusat fashion dengan banyak factory outlet dan desainer lokal yang inovatif. Bandung juga menjadi hub teknologi dengan keberadaan banyak startup dan perusahaan teknologi. Kehadiran perguruan tinggi ternama seperti Institut Teknologi Bandung (ITB) mendorong inovasi dan penelitian yang berkontribusi pada perkembangan ekonomi. Selain itu, sektor pariwisata dengan destinasi alam dan kuliner yang terkenal juga berperan penting dalam perekonomian kota ini.</p>
            <a class="cta-btn" href="../ttik-hotel">Lihat Sebaran</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

        <div class="section-header mb-0 mt-5 p-0">
        <h2 class="fs-2">Peta Sebaran Hotel</h2> 
        </div>
            <style>
                .leaflet-top.leaflet-right {
                    z-index: auto;
                }
            </style>
        <div id="map" class="rounded-2 main-container container m-auto mt-0 mb-5" style="border:1px solid #F1F1F1; height: 80vh;">
        
        <div id="popup" class="ol-popup">
            <a href="#" id="popup-closer" class="ol-popup-closer"></a>
            <div id="popup-content" class="th-th"></div>
        </div>
        </div>


    <!-- ======= Footer ======= -->
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


    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

        <script src="resources/qgis2web_expressions.js"></script>
        <script src="resources/polyfills.js"></script>
        <script src="./resources/functions.js"></script>
        <script src="./resources/ol.js"></script>
        <script src="http://cdn.polyfill.io/v2/polyfill.min.js?features=Element.prototype.classList,URL"></script>
        <script src="resources/horsey.min.js"></script>
        <script src="resources/ol3-search-layer.js"></script>
        <script src="./resources/ol-layerswitcher.js"></script>
        <script src="layers/kotabandung_1.php"></script>
        <script src="styles/kotabandung_1_style.js"></script>
        <script src="./layers/layers.js" type="text/javascript"></script> 
        <script src="./resources/Autolinker.min.js"></script>
        <script src="./resources/qgis2web.js"></script>
    </body>
</html>
