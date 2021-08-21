<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN</title>
    <!-- core:css -->
    <link rel="stylesheet" href="../assets/backend/vendors/core/core.css">
    <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../assets/backend/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- end plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/backend/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="../assets/backend/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- endinject -->
  <!-- Layout styles -->  
    <link rel="stylesheet" href="../assets/backend/css/demo_1/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../assets/backend/images/favicon.png" />
  <script type="text/javascript" src="../assets/backend/ckeditor/ckeditor.js"></script>
</head>
<body>
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar">
      <div class="sidebar-header">
        <a href="index.php?controller=home" class="sidebar-brand">
          Nhom 9
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
        <li class="nav-item nav-category">Mua hàng</li>
          <li class="nav-item">
            <a href="index.php?controller=demo" class="nav-link no-active" >
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Mua hàng</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
        <!-- partial -->
    
        <div class="page-wrapper">      
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar">
                <a href="#" class="sidebar-toggler">
                    <i data-feather="menu"></i>
                </a>
                <div class="navbar-content">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown nav-profile">
                            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="https://via.placeholder.com/30x30" alt="profile">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="profileDropdown">
                                <div class="dropdown-header d-flex flex-column align-items-center">
                                    <div class="figure mb-3">
                                        <img src="https://via.placeholder.com/80x80" alt="">
                                    </div>
                                    <div class="info text-center">
                                        <p class="name font-weight-bold mb-0"><?php echo $_SESSION['customer'] ?></p>
                                    </div>
                                   
                                </div>
                                <div class="dropdown-body">
                                    <ul class="profile-nav p-0 pt-3">
                                        <li class="nav-item">
                                            <a href="index.php?controller=login&action=logout" class="nav-link">
                                                <i data-feather="log-out"></i>
                                                <span>Log Out</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- partial -->
            <div class="page-content">
                <?php echo $this->view; ?>
            </div>
            <!-- partial:partials/_footer.html -->
            <!-- partial -->
        
        </div>
    </div>

    <!-- core:js -->
    <script src="../assets/backend/vendors/core/core.js"></script>
    <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="../assets/backend/vendors/chartjs/Chart.min.js"></script>
  <script src="../assets/backend/vendors/jquery.flot/jquery.flot.js"></script>
  <script src="../assets/backend/vendors/jquery.flot/jquery.flot.resize.js"></script>
  <script src="../assets/backend/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="../assets/backend/vendors/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/backend/vendors/progressbar.js/progressbar.min.js"></script>
    <!-- end plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/backend/vendors/feather-icons/feather.min.js"></script>
    <script src="../assets/backend/js/template.js"></script>
    <!-- endinject -->
  <!-- custom js for this page -->
  <script src="../assets/backend/js/dashboard.js"></script>
  <script src="../assets/backend/js/datepicker.js"></script>
    <!-- end custom js for this page -->
</body>
</html>    