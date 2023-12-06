<!DOCTYPE html>
<?php session_start();
//koneksi ke database
  $koneksi= new mysqli("localhost","root","","medical_db");
  ?>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/theme/assets/"
  data-template="horizontal-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Analytics | Vuexy - Bootstrap Admin Template</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/theme/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="assets/theme/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="assets/theme/assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="assets/theme/assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/theme/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/theme/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/theme/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/theme/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/theme/assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="assets/theme/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="assets/theme/assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="assets/theme/assets/vendor/libs/swiper/swiper.css" />
    <link rel="stylesheet" href="assets/theme/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="assets/theme/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="assets/theme/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="assets/theme/assets/vendor/css/pages/cards-advance.css" />
    <!-- Helpers -->
    <script src="assets/theme/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="assets/theme/assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/theme/assets/js/config.js"></script>
    <link rel="stylesheet" href="assets/figma_ui/styles.css">
    <link rel="stylesheet" href="assets/theme/assets/vendor/css/pages/ui-carousel.css" />
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
      <div class="layout-container">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">
        <a class="navbar-brand mr-auto" href="#">
            <img src="assets/figma_ui/images/logo.png" alt="Logo" class="logotrial-removebg-preview-1-icon">
        </a>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <div class="medical">MEDICAL +</div>
        </div>
        <div class="login-register ml-auto">
            <a class="nav-link" href="#">Login</a> / 
            <a class="nav-link" href="#">Register</a>
        </div>
    </div>
</nav>

        <!-- / Navbar -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Content wrapper -->
          <div class="content-wrapper">
          <aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0" data-bg-class="bg-menu-theme" style="touch-action: none; user-select: none;">
              <div class="container-xxl d-flex h-100">
                
              <a href="#" class="menu-horizontal-prev disabled"></a><div class="menu-horizontal-wrapper"><ul class="menu-inner" style="margin-left: 0px;">
                  <!-- Dashboards -->
                  <li class="menu-item active">
                        <a href="index.html" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-chart-pie-2"></i>
                          <div data-i18n="HOME">HOME</div>
                        </a>
                  </li>
                  <li class="menu-item">
                        <a href="index.html" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-chart-pie-2"></i>
                          <div data-i18n="ABOUT US">ABOUT US</div>
                        </a>
                  </li>

                  <li class="menu-item">
                        <a href="index.html" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-chart-pie-2"></i>
                          <div data-i18n="PRODUCT">PRODUCT</div>
                        </a>
                  </li>

                  <li class="menu-item">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons ti ti-smart-home"></i>
                      <div data-i18n="CATEGORY">CATEGORY</div>
                    </a>
                    <ul class="menu-sub">
                      <li class="menu-item active">
                        <a href="index.html" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-chart-pie-2"></i>
                          <div data-i18n="Analytics">Analytics</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="dashboards-crm.html" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-3d-cube-sphere"></i>
                          <div data-i18n="CRM">CRM</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="dashboards-ecommerce.html" class="menu-link">
                          <i class="menu-icon tf-icons ti ti-atom-2"></i>
                          <div data-i18n="eCommerce">eCommerce</div>
                        </a>
                      </li>
                    </ul>
                  </li>

            
                </ul></div><a href="#" class="menu-horizontal-next"></a></div>
            </aside>

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
              <div class="col-12">
                  <div id="swiper-gallery">
                    <div class="swiper gallery-top">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image: url(assets/theme/assets/img/backgrounds/2.jpg)">
                          Slide 1
                        </div>
                        <div class="swiper-slide" style="background-image: url(assets/theme/assets/img/backgrounds/1.jpg)">
                          Slide 2
                        </div>
                        <div class="swiper-slide" style="background-image: url(assets/theme/assets/img/backgrounds/3.jpg)">
                          Slide 3
                        </div>
                        <div class="swiper-slide" style="background-image: url(assets/theme/assets/img/backgrounds/4.jpg)">
                          Slide 4
                        </div>
                        <div class="swiper-slide" style="background-image: url(assets/theme/assets/img/backgrounds/6.jpg)">
                          Slide 5
                        </div>
                      </div>
                      <!-- Add Arrows -->
                      <div class="swiper-button-next swiper-button-black"></div>
                      <div class="swiper-button-prev swiper-button-black"></div>
                    </div>
                    
                  </div>
                </div>

                <div class="row">
                <?php $ambil=$koneksi->query("SELECT * FROM category"); ?>
                <?php while($pecah = $ambil->fetch_assoc()){
                  ?>
                    <div class="col-md-4 text-center">
    <img src="assets/gambar_category/<?php echo $pecah['gambar']; ?>" class="img-fluid mb-3" style="display: inline-block; vertical-align: middle;">
    <h4 style="display: inline-block; color: white; padding: 10px; border-radius: 5px; margin-bottom: 0;"><?php echo $pecah['name']; ?></h4>
</div>


                    <?php } ?>

                </div>
              


              </div>
            </div>
            <!--/ Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                  <div>
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with ❤️ by <a href="https://pixinvent.com" target="_blank" class="fw-semibold">Pixinvent</a>
                  </div>
                  <div>
                    <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank"
                      >License</a
                    >
                    <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4"
                      >More Themes</a
                    >

                    <a
                      href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/"
                      target="_blank"
                      class="footer-link me-4"
                      >Documentation</a
                    >

                    <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block"
                      >Support</a
                    >
                  </div>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!--/ Content wrapper -->
        </div>

        <!--/ Layout container -->
      </div>
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

    <!--/ Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/theme/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/theme/assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/theme/assets/vendor/js/bootstrap.js"></script>
    <script src="assets/theme/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/theme/assets/vendor/libs/node-waves/node-waves.js"></script>

    <script src="assets/theme/assets/vendor/libs/hammer/hammer.js"></script>
    <script src="assets/theme/assets/vendor/libs/i18n/i18n.js"></script>
    <script src="assets/theme/assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="assets/theme/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="assets/theme/assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="assets/theme/assets/vendor/libs/swiper/swiper.js"></script>
    <script src="assets/theme/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>

    <!-- Main JS -->
    <script src="assets/theme/assets/js/main.js"></script>

    <!-- Page JS -->

    <script src="assets/theme/assets/js/ui-carousel.js"></script>
  </body>
</html>
