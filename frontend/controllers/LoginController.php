<?php  
	// load model
	include "models/LoginModel.php";
	// su dung class model
	
	class LoginController extends Controller{
		use LoginModel;
		public function index()
		{
			$message = isset($_GET['message']) ? $_GET['message'] : '';
			$this->loadView("LoginView.php", ['message' => $message]);
		}
		
		public function login()
		{
			$failMessage = 'Đăng nhập thất bại';
			if($this->modelLogin()) {
				header("location:index.php");
			} else {
				header("location:index.php?controller=login&message=$failMessage");
			}
		}

		public function register()
		{
			$message = isset($_GET['message']) ? $_GET['message'] : '';
			$this->loadView("Register.php", ['message' => $message]);
		}

		public function registerPost()
		{
			
			if($this->modelCreate()) {
				$successMessage = 'Đăng ký thành công';
				header("location:index.php?controller=login&message=$successMessage");
			} else {
				$failMessage = 'Đăng ký thất bại. Tên tài khoản đã có người sử dụng';
				header("location:index.php?controller=login&action=register&message=$failMessage");
			}
		}

		public function logout()
		{
			// huy session
			unset($_SESSION["customer"]);
			header("location:index.php");
		}
	}
	
	
?>

