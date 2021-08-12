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
			$failMessage = 'dang nhap that bai';
			if($this->modelLogin()) {
				header("location:index.php");
			} else {
				header("location:index.php?controller=login&message=$failMessage");
			}
		}

		public function logout()
		{
			// huy session
			unset($_SESSION["email"]);
			header("location:index.php");
		}
	}
	
	
?>

