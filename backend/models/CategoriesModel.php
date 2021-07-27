<?php 
	trait CategoriesModel{
		//ham lay danh sach cac ban ghi co phan trang
		public function modelRead($recordPerPage){
			//lay bien p truyen tu url
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"]-1) : 0;			
			//lay tu ban ghi nao
			$from = $p * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from categories order by id desc limit $from,$recordPerPage");
			//lay toan bo ket qua tra ve
			$result = $query->fetchAll();			
			//---
			return $result;
		}
		//tinh tong so ban ghi
		public function totalRecord($recordPerPage){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from categories");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi
		public function modelGetRecord($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where id=$id");
			//tra ve mot ban ghi
			return $query->fetch();
		}
	
		public function modelUpdate($id){
			$name = $_POST["name"];
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("update categories set name='$name' where id=$id");
		}
		//create bang hi
		public function modelCreate(){
			$name = $_POST["name"];
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("insert into categories set name='$name'");
		}
		//xoa ban ghi
		public function modelDelete($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$conn->query("delete from categories where id=$id");
		}
	}
 ?>