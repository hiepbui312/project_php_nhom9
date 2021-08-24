<?php 
	include "Models/ThongKeModel.php";
	class ThongKeController extends Controller{
		use ThongKeModel;
		public function __construct(){
			$this->authentication();
		}
		public function index(){
			$getThongKes = $this->modelGetThongKe();
			$this->loadView("ThongKeView.php", ['getThongKes' => $getThongKes]);
		}
		public function getThongKe()
        {
            $getThongKes = $this->modelSearchThongKe();
			$this->loadView("ThongKeView.php", ['getThongKes' => $getThongKes]);
		}
	}
 ?>