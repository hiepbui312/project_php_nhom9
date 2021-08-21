<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>NobleUI Responsive Bootstrap 4 Dashboard Template</title>
	<!-- core:css -->
	<link rel="stylesheet" href="../assets/backend/vendors/core/core.css">
	<!-- endinject -->
  <!-- plugin css for this page -->
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="../assets/backend/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="../assets/backend/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->
  <!-- Layout styles -->  
	<link rel="stylesheet" href="../assets/backend/css/demo_1/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../assets/backend/images/favicon.png" />
</head>
<body>
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">

				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
                <div class="col-md-4 pr-md-0">
                  <div class="auth-left-wrapper">
                  	<img style="width: 100%; height: 460px;" src="../assets/backend/images/asd.png">
                  </div>
                </div>
                <div class="col-md-8 pl-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="#" class="noble-ui-logo d-block mb-2">Nhom 9</a>
                    <h5 class="text-muted font-weight-normal mb-4">Đăng nhập</h5>
                    <form class="forms-sample" method="post" action="index.php?controller=login&action=login">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tên tài khoản</label>
                        <input type="text" name="name" required class="form-control" id="exampleInputEmail1" placeholder="Tên tài khoản">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Mật khẩu</label>
                        <input type="password" name="password" required class="form-control" id="exampleInputPassword1" autocomplete="current-password" placeholder="Mật khẩu">
                      </div>
					  <div style="color: red">
					 	 <?php  echo isset($message) ? $message : '' ?>
					  </div>
					 
                      <div class="form-check form-check-flat form-check-primary">
                      </div>
                      <div class="mt-3">
                      	<input type="submit" value="Đăng nhập" class="btn btn-primary">
                      </div>
                    </form>
					<a href="index.php?controller=login&action=register" class="d-block mt-3 text-muted">Bạn chưa là thành viên? <span style="color: blue;">Đăng ký</span></a>
                  </div>
                </div>
              </div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- core:js -->
	<script src="../assets/backend/vendors/core/core.js"></script>
	<!-- endinject -->
  <!-- plugin js for this page -->
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="../assets/backend/vendors/feather-icons/feather.min.js"></script>
	<script src="../assets/backend/js/template.js"></script>
	<!-- endinject -->
  <!-- custom js for this page -->
	<!-- end custom js for this page -->
</body>
</html>