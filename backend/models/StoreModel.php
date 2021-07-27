<?php 
	trait StoreModel{
		//ham lay danh sach cac ban ghi co phan trang
		public function modelRead_ton_kho($recordPerPage){
			//lay bien p truyen tu url
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"]-1) : 0;			
			//lay tu ban ghi nao
			$from = $p * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where ton_kho > 0 order by id desc limit $from,$recordPerPage");
			//lay toan bo ket qua tra ve
			$result = $query->fetchAll();			
			//---
			return $result;
		}
        public function modelRead_ngan_sach(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from ngan_sach");
			$result = $query->fetch();			
			return $result;
		}
		//tinh tong so ban ghi
		public function totalRecord(){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from products");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
        public function modelUpdate($id){
            $conn = Connection::getInstance();
            $ngan_sach = isset($_POST["ngan_sach"]) ? $_POST["ngan_sach"] : 0;
			$conn->query("update ngan_sach set price = $ngan_sach where id = $id");
        }
	
	}
 ?>