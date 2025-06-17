
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <link rel="stylesheet" href="css/leaflet.css">
        <link rel="stylesheet" href="css/L.Control.Layers.Tree.css">
        <link rel="stylesheet" href="css/qgis2web.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/leaflet-measure.css">

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

        <style>
            *{
                text-decoration: none !important;
            }
            .leaflet-top, .leaflet-bottom {
                position: absolute;
                z-index: auto;
                pointer-events: none;
            }
        </style>
        <title>Titik Lokasi Hotel</title>
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
                        <li><a href="../sebaran-data/">Data Sebaran</a></li>
                        <li class="active2"><a href="../titik-hotel/" class="active">Data Titik Lokasi</a></li>
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
            <a class="cta-btn" href="../sebaran-data/">Lihat Sebaran</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

        <div class="section-header mb-0 mt-5 p-0">
        <h2 class="fs-2">Peta Titik Lokasi Hotel</h2> 
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
    
        <script src="js/qgis2web_expressions.js"></script>
        <script src="js/leaflet.js"></script>
        <script src="js/L.Control.Layers.Tree.min.js"></script>
        <script src="js/multi-style-layer.js"></script>
        <script src="js/leaflet.rotatedMarker.js"></script>
        <script src="js/leaflet.pattern.js"></script>
        <script src="js/leaflet-hash.js"></script>
        <script src="js/Autolinker.min.js"></script>
        <script src="js/rbush.min.js"></script>
        <script src="js/labelgun.min.js"></script>
        <script src="js/labels.js"></script>
        <script src="js/leaflet-measure.js"></script>
        <script src="data/KECBANDUNG_1.js"></script>
        <script src="data/hotelbintang3_2.php"></script>
        <script src="data/hotelbintang4_3.php"></script>
        <script src="data/hotelbintang5_4.php"></script>
        <script>
            L.ImageOverlay.include({
            getBounds: function () {
                return this._bounds
            },
            })
        </script>
        <script>
        var map = L.map('map', {
            zoomControl:false, maxZoom:28, minZoom:1
        }).fitBounds([[-6.974821021161292,107.53956752467457],[-6.85210137848186,107.74134543779678]]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
        // remove popup's row if "visible-with-data"
        function removeEmptyRowsFromPopupContent(content, feature) {
         var tempDiv = document.createElement('div');
         tempDiv.innerHTML = content;
         var rows = tempDiv.querySelectorAll('tr');
         for (var i = 0; i < rows.length; i++) {
             var td = rows[i].querySelector('td.visible-with-data');
             var key = td ? td.id : '';
             if (td && td.classList.contains('visible-with-data') && feature.properties[key] == null) {
                 rows[i].parentNode.removeChild(rows[i]);
             }
         }
         return tempDiv.innerHTML;
        }
        // add class to format popup if it contains media
		function addClassToPopupIfMedia(content, popup) {
			var tempDiv = document.createElement('div');
			tempDiv.innerHTML = content;
			if (tempDiv.querySelector('td img')) {
				popup._contentNode.classList.add('media');
					// Delay to force the redraw
					setTimeout(function() {
						popup.update();
					}, 10);
			} else {
				popup._contentNode.classList.remove('media');
			}
		}
        var zoomControl = L.control.zoom({
            position: 'topleft'
        }).addTo(map);
        var measureControl = new L.Control.Measure({
            position: 'topleft',
            primaryLengthUnit: 'meters',
            secondaryLengthUnit: 'kilometers',
            primaryAreaUnit: 'sqmeters',
            secondaryAreaUnit: 'hectares'
        });
        measureControl.addTo(map);
        document.getElementsByClassName('leaflet-control-measure-toggle')[0].innerHTML = '';
        document.getElementsByClassName('leaflet-control-measure-toggle')[0].className += ' fas fa-ruler';
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
        }
        map.createPane('pane_OpenStreetMap_0');
        map.getPane('pane_OpenStreetMap_0').style.zIndex = 400;
        var layer_OpenStreetMap_0 = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            pane: 'pane_OpenStreetMap_0',
            opacity: 1.0,
            attribution: '',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 19
        });
        layer_OpenStreetMap_0;
        map.addLayer(layer_OpenStreetMap_0);
        function pop_KECBANDUNG_1(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">ID_Kec</th>\
                        <td class="visible-with-data" id="ID_Kec">' + (feature.properties['ID_Kec'] !== null ? autolinker.link(feature.properties['ID_Kec'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kecamatan</th>\
                        <td class="visible-with-data" id="Kecamatan">' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kode_kab</th>\
                        <td class="visible-with-data" id="kode_kab">' + (feature.properties['kode_kab'] !== null ? autolinker.link(feature.properties['kode_kab'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
			layer.on('popupopen', function(e) {
				addClassToPopupIfMedia(content, e.popup);
			});
			layer.bindPopup(content, { maxHeight: 400 });
        }

        function style_KECBANDUNG_1_0() {
            return {
                pane: 'pane_KECBANDUNG_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(42,146,75,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_KECBANDUNG_1');
        map.getPane('pane_KECBANDUNG_1').style.zIndex = 401;
        map.getPane('pane_KECBANDUNG_1').style['mix-blend-mode'] = 'normal';
        var layer_KECBANDUNG_1 = new L.geoJson(json_KECBANDUNG_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KECBANDUNG_1',
            layerName: 'layer_KECBANDUNG_1',
            pane: 'pane_KECBANDUNG_1',
            onEachFeature: pop_KECBANDUNG_1,
            style: style_KECBANDUNG_1_0,
        });
        bounds_group.addLayer(layer_KECBANDUNG_1);
        map.addLayer(layer_KECBANDUNG_1);
        function pop_hotelbintang3_2(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Nama Hotel</th>\
                        <td class="visible-with-data" id="Nama Hotel">' + (feature.properties['Nama Hotel'] !== null ? autolinker.link(feature.properties['Nama Hotel'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Total Room</th>\
                        <td class="visible-with-data" id="Total Room">' + (feature.properties['Total Room'] !== null ? autolinker.link(feature.properties['Total Room'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kelas</th>\
                        <td class="visible-with-data" id="Kelas">' + (feature.properties['Kelas'] !== null ? autolinker.link(feature.properties['Kelas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">STA</th>\
                        <td class="visible-with-data" id="STA">' + (feature.properties['STA'] !== null ? autolinker.link(feature.properties['STA'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kecamatan</th>\
                        <td class="visible-with-data" id="Kecamatan">' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Alamat</th>\
                        <td class="visible-with-data" id="Alamat">' + (feature.properties['Alamat'] !== null ? autolinker.link(feature.properties['Alamat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Latitude</th>\
                        <td class="visible-with-data" id="Latitude">' + (feature.properties['Latitude'] !== null ? autolinker.link(feature.properties['Latitude'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Longitude</th>\
                        <td class="visible-with-data" id="Longitude">' + (feature.properties['Longitude'] !== null ? autolinker.link(feature.properties['Longitude'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
			layer.on('popupopen', function(e) {
				addClassToPopupIfMedia(content, e.popup);
			});
			layer.bindPopup(content, { maxHeight: 400 });
        }

        function style_hotelbintang3_2_0() {
            return {
                pane: 'pane_hotelbintang3_2',
                radius: 8.0,
                opacity: 1,
                color: 'rgba(255,255,255,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,187,92,1.0)',
                interactive: true,
            }
        }
        function style_hotelbintang3_2_1() {
            return {
                pane: 'pane_hotelbintang3_2',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: 'markers/hotelbintang3_2.svg',
            iconSize: [10.133346, 10.133346]
        }),
                interactive: true,
            }
        }
        map.createPane('pane_hotelbintang3_2');
        map.getPane('pane_hotelbintang3_2').style.zIndex = 402;
        map.getPane('pane_hotelbintang3_2').style['mix-blend-mode'] = 'normal';
        var layer_hotelbintang3_2 = new L.geoJson.multiStyle(json_hotelbintang3_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_hotelbintang3_2',
            layerName: 'layer_hotelbintang3_2',
            pane: 'pane_hotelbintang3_2',
            onEachFeature: pop_hotelbintang3_2,
            pointToLayers: [function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_hotelbintang3_2_0(feature));
            },function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_hotelbintang3_2_1(feature));
            },
        ]});
        bounds_group.addLayer(layer_hotelbintang3_2);
        map.addLayer(layer_hotelbintang3_2);
        function pop_hotelbintang4_3(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Nama Hotel</th>\
                        <td class="visible-with-data" id="Nama Hotel">' + (feature.properties['Nama Hotel'] !== null ? autolinker.link(feature.properties['Nama Hotel'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Total Room</th>\
                        <td class="visible-with-data" id="Total Room">' + (feature.properties['Total Room'] !== null ? autolinker.link(feature.properties['Total Room'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kelas</th>\
                        <td class="visible-with-data" id="Kelas">' + (feature.properties['Kelas'] !== null ? autolinker.link(feature.properties['Kelas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">STA</th>\
                        <td class="visible-with-data" id="STA">' + (feature.properties['STA'] !== null ? autolinker.link(feature.properties['STA'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kecamatan</th>\
                        <td class="visible-with-data" id="Kecamatan">' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Alamat</th>\
                        <td class="visible-with-data" id="Alamat">' + (feature.properties['Alamat'] !== null ? autolinker.link(feature.properties['Alamat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Latitude</th>\
                        <td class="visible-with-data" id="Latitude">' + (feature.properties['Latitude'] !== null ? autolinker.link(feature.properties['Latitude'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Longitude</th>\
                        <td class="visible-with-data" id="Longitude">' + (feature.properties['Longitude'] !== null ? autolinker.link(feature.properties['Longitude'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
			layer.on('popupopen', function(e) {
				addClassToPopupIfMedia(content, e.popup);
			});
			layer.bindPopup(content, { maxHeight: 400 });
        }

        function style_hotelbintang4_3_0() {
            return {
                pane: 'pane_hotelbintang4_3',
                radius: 8.8,
                opacity: 1,
                color: 'rgba(255,255,255,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(226,94,62,1.0)',
                interactive: true,
            }
        }
        function style_hotelbintang4_3_1() {
            return {
                pane: 'pane_hotelbintang4_3',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: 'markers/hotelbintang4_3.svg',
            iconSize: [11.02, 11.02]
        }),
                interactive: true,
            }
        }
        map.createPane('pane_hotelbintang4_3');
        map.getPane('pane_hotelbintang4_3').style.zIndex = 403;
        map.getPane('pane_hotelbintang4_3').style['mix-blend-mode'] = 'normal';
        var layer_hotelbintang4_3 = new L.geoJson.multiStyle(json_hotelbintang4_3, {
            attribution: '',
            interactive: true,
            dataVar: 'json_hotelbintang4_3',
            layerName: 'layer_hotelbintang4_3',
            pane: 'pane_hotelbintang4_3',
            onEachFeature: pop_hotelbintang4_3,
            pointToLayers: [function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_hotelbintang4_3_0(feature));
            },function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_hotelbintang4_3_1(feature));
            },
        ]});
        bounds_group.addLayer(layer_hotelbintang4_3);
        map.addLayer(layer_hotelbintang4_3);
        function pop_hotelbintang5_4(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Nama Hotel</th>\
                        <td class="visible-with-data" id="Nama Hotel">' + (feature.properties['Nama Hotel'] !== null ? autolinker.link(feature.properties['Nama Hotel'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Total Room</th>\
                        <td class="visible-with-data" id="Total Room">' + (feature.properties['Total Room'] !== null ? autolinker.link(feature.properties['Total Room'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kelas</th>\
                        <td class="visible-with-data" id="Kelas">' + (feature.properties['Kelas'] !== null ? autolinker.link(feature.properties['Kelas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">STA</th>\
                        <td class="visible-with-data" id="STA">' + (feature.properties['STA'] !== null ? autolinker.link(feature.properties['STA'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kematan</th>\
                        <td class="visible-with-data" id="Kematan">' + (feature.properties['Kematan'] !== null ? autolinker.link(feature.properties['Kematan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Alamat</th>\
                        <td class="visible-with-data" id="Alamat">' + (feature.properties['Alamat'] !== null ? autolinker.link(feature.properties['Alamat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Latitude</th>\
                        <td class="visible-with-data" id="Latitude">' + (feature.properties['Latitude'] !== null ? autolinker.link(feature.properties['Latitude'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Longitude</th>\
                        <td class="visible-with-data" id="Longitude">' + (feature.properties['Longitude'] !== null ? autolinker.link(feature.properties['Longitude'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
			layer.on('popupopen', function(e) {
				addClassToPopupIfMedia(content, e.popup);
			});
			layer.bindPopup(content, { maxHeight: 400 });
        }

        function style_hotelbintang5_4_0() {
            return {
                pane: 'pane_hotelbintang5_4',
                radius: 8.8,
                opacity: 1,
                color: 'rgba(255,255,255,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(154,3,30,1.0)',
                interactive: true,
            }
        }
        function style_hotelbintang5_4_1() {
            return {
                pane: 'pane_hotelbintang5_4',
        rotationAngle: 0.0,
        rotationOrigin: 'center center',
        icon: L.icon({
            iconUrl: 'markers/hotelbintang5_4.svg',
            iconSize: [10.867999999999999, 10.867999999999999]
        }),
                interactive: true,
            }
        }
        map.createPane('pane_hotelbintang5_4');
        map.getPane('pane_hotelbintang5_4').style.zIndex = 404;
        map.getPane('pane_hotelbintang5_4').style['mix-blend-mode'] = 'normal';
        var layer_hotelbintang5_4 = new L.geoJson.multiStyle(json_hotelbintang5_4, {
            attribution: '',
            interactive: true,
            dataVar: 'json_hotelbintang5_4',
            layerName: 'layer_hotelbintang5_4',
            pane: 'pane_hotelbintang5_4',
            onEachFeature: pop_hotelbintang5_4,
            pointToLayers: [function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_hotelbintang5_4_0(feature));
            },function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.marker(latlng, style_hotelbintang5_4_1(feature));
            },
        ]});
        bounds_group.addLayer(layer_hotelbintang5_4);
        map.addLayer(layer_hotelbintang5_4);
        var baseMaps = {};
        var overlaysTree = [
            {label: '<img src="legend/hotelbintang5_4.png" /> hotel-bintang-5', layer: layer_hotelbintang5_4},
            {label: '<img src="legend/hotelbintang4_3.png" /> hotel-bintang-4', layer: layer_hotelbintang4_3},
            {label: '<img src="legend/hotelbintang3_2.png" /> hotel-bintang-3', layer: layer_hotelbintang3_2},
            {label: '<img src="legend/KECBANDUNG_1.png" /> KEC-BANDUNG', layer: layer_KECBANDUNG_1},
            {label: "OpenStreetMap", layer: layer_OpenStreetMap_0},]
        var lay = L.control.layers.tree(null, overlaysTree,{
            //namedToggle: true,
            //selectorBack: false,
            //closedSymbol: '&#8862; &#x1f5c0;',
            //openedSymbol: '&#8863; &#x1f5c1;',
            //collapseAll: 'Collapse all',
            //expandAll: 'Expand all',
            collapsed: false, 
        });
        lay.addTo(map);
        setBounds();
        var i = 0;
        layer_KECBANDUNG_1.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['Kecamatan'] !== null?String('<div style="color: #ffffff; font-size: 10pt; font-weight: bold; font-family: \'Montserrat\', sans-serif;">' + layer.feature.properties['Kecamatan']) + '</div>':''), {permanent: true, offset: [-0, -16], className: 'css_KECBANDUNG_1'});
            labels.push(layer);
            totalMarkers += 1;
              layer.added = true;
              addLabel(layer, i);
              i++;
        });
        resetLabels([layer_KECBANDUNG_1,layer_hotelbintang5_4]);
        map.on("zoomend", function(){
            resetLabels([layer_KECBANDUNG_1,layer_hotelbintang5_4]);
        });
        map.on("layeradd", function(){
            resetLabels([layer_KECBANDUNG_1,layer_hotelbintang5_4]);
        });
        map.on("layerremove", function(){
            resetLabels([layer_KECBANDUNG_1,layer_hotelbintang5_4]);
        });
        </script>
    </body>
</html>
