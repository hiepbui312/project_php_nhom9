<?php 
	include "Models/StatusModel.php";
	class StatusController extends Controller{
		use StatusModel;
		public function __construct(){
			$this->authentication();
		}
		public function sell(){
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 25;
			//tinh so trang
			$numPage = ceil($this->modelTotal()/$recordPerPage);
			//goi ham de lay du lieu
			$data = $this->modelReadSell($recordPerPage);
			//load view
			$this->loadView("SellStatus.php",["data"=>$data,"numPage"=>$numPage]);
		}
		//chi tiet don hang
		public function tra_hang(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham tu model de thuc hien
			$this->tra_hang_model($id);
			$this->deleteOrder($id);
			//load view
			header("location:index.php?controller=status&action=sell");
		}
		public function tra_hang_view(){
			$recordPerPage = 25;
			//tinh so trang
			$numPage = ceil($this->modelTotal()/$recordPerPage);
			//goi ham de lay du lieu
			$data = $this->modelRead_tra_hang($recordPerPage);
			//load view
			$this->loadView("TraHang.php",["data"=>$data,"numPage"=>$numPage]);
		}
	}
 ?>