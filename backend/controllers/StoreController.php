<?php 
	//include file model
	include "models/StoreModel.php";
	class StoreController extends Controller{
		//su dung file model o day
		use StoreModel;
		//ham tao
		public function __construct(){
			//kiem tra dang nhap
			$this->authentication();
		}
		//hien thi danh sach cac ban ghi co phan trang
		public function ton_kho(){
			//dinh nghia so ban ghi tren mot trang
			$recordPerPage = 25;
			//tinh tong so trang
			$numPage = ceil($this->totalRecord()/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelRead_ton_kho($recordPerPage);
			//load view, truyen du lieu ra view
			$this->loadView("ton_kho.php",["data"=>$data,"numPage"=>$numPage]);
		}
        public function ngan_sach(){
			//dinh nghia so ban ghi tren mot trang
			$recordPerPage = 25;
			//tinh tong so trang
			$numPage = ceil($this->totalRecord()/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelRead_ngan_sach();
			//load view, truyen du lieu ra view
			$this->loadView("ngan_sach.php",["data"=>$data,"numPage"=>$numPage]);
		}
        public function update(){
            $data = $this->modelRead_ngan_sach();
			$action = "index.php?controller=store&action=updatePost";
			$this->loadView("ngan_sach_form.php",["data"=>$data,"action"=>$action]);
		}
		//update ban ghi - trang thai POST
		public function updatePost(){
            $data = $this->modelRead_ngan_sach();
            $this->modelUpdate($data->id);	
			header("location:index.php?controller=store&action=ngan_sach");
		}
	}
 ?>