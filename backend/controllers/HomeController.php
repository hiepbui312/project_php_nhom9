<?php 
	//load file model
	include "models/ThongKeModel.php";
	class HomeController extends Controller{
	use ThongKeModel;
		public function __construct(){
			$this->authentication();
		}
		public function index(){
			$getThongKes = $this->modelGetThongKe();
			$this->loadView("HomeView.php", ['getThongKes' => $getThongKes]);
		}
	}
 ?>