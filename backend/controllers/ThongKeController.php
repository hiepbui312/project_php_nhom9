<?php 
	include "Models/ThongKeModel.php";
	class ThongKeController extends Controller{
		use ThongKeModel;
		public function index(){
			$this->loadView("ThongKeView.php");
		}
		public function getThongKe()
        {
            $getThongKes = $this->modelGetQuantity();
            // $this->modelAddThongKe($thong_ke);
            // $getThongKes = $this->modelGetThongKe();
			$this->loadView("ThongKeView.php", ['getThongKes' => $getThongKes]);
		}
	}
 ?>