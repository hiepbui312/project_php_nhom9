<?php 
	include "Models/ThongKeModel.php";
	class ThongKeController extends Controller{
		use ThongKeModel;
		public function __construct(){
			$this->authentication();
		}
		public function index(){
			$this->loadView("ThongKeView.php");
		}
		public function getThongKe()
        {
            $getThongKes = $this->modelGetQuantity();
			$this->loadView("ThongKeView.php", ['getThongKes' => $getThongKes]);
		}

		public function getChiTieu() 
		{
			//dinh nghia so ban ghi tren mot trang
			$recordPerPage = 25;
			//tinh tong so trang
			$numPage = ceil($this->totalRecord()/$recordPerPage);
			//lay du lieu tu model
			$getThongKes = $this->modelGetThongKe($recordPerPage);
			$this->loadView("baocaothongke.php", ['getThongKes' => $getThongKes, 'numPage' => $numPage]);
		}

		public function create()
		{
			$action = "index.php?controller=thongKe&action=createPost";
			$this->loadView("baocaothongkeform.php", ['action' => $action]); 
		}
		public function createPost()
		{
			$this->modelAddThongKe();
			header("location:index.php?controller=thongKe&action=getChiTieu");
		}
		public function update()
		{
			$id = $_GET['id'];
			$record = $this->getId($id);
			$action = "index.php?controller=thongKe&action=createPost";
			$this->loadView("baocaothongkeform.php", ['action' => $action, 'record' => $record]); 
		}
		public function updatePost()
		{
			$this->updateThongKe();
			header("location:index.php?controller=thongKe&action=getChiTieu");
		}
		public function delete()
		{
			$id = $_GET['id'];
			$this->deleteThongKe($id);
			header("location:index.php?controller=thongKe&action=getChiTieu");
		}
	}
 ?>