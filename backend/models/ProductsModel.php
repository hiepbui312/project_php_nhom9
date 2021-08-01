<?php 
	trait ProductsModel{
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
			$query = $conn->query("select * from products order by category_id desc limit $from,$recordPerPage");
			//lay toan bo ket qua tra ve
			$result = $query->fetchAll();			
			//---
			return $result;
		}
		//tinh tong so ban ghi
		public function totalRecord($recordPerPage){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from products");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi
		public function modelGetRecord($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select products.*, categories.name as category_name from products inner join categories on products.category_id = categories.id where products.id=$id");
			//tra ve mot ban ghi
			return $query->fetch();
		}		
		//update ban ghi
		public function modelUpdate($id){
			$name = $_POST["name"];
			$ma_hang = $_POST["ma_hang"];
			$price = $_POST["price"];
			$so_imei = $_POST["so_imei"];
			$so_serial = $_POST["so_serial"];
			$xuat_su = $_POST["xuat_su"];
			$bao_hanh = $_POST["bao_hanh"];
			$ton_kho = $_POST["ton_kho"];
			$category_id = $_POST["category_id"];
			//lay bien ket noi
			$conn = Connection::getInstance();
			//update du lieu tuong ung voi id truyen vao
			$conn->query("update products set  name='$name', ma_hang='$ma_hang', price='$price',
			so_imei='$so_imei', so_serial='$so_serial', xuat_su='$xuat_su',
			bao_hanh='$bao_hanh' ,ton_kho='$ton_kho', category_id='$category_id' where id=$id");
			//kiem tra xem user co chon anh de upload khong, neu co thi xoa anh cu, upload anh moi
		}
		//create bang ghi
		public function modelCreate(){
			$name = $_POST["name"];
			$ma_hang = $_POST["ma_hang"];
			$price = $_POST["price"];
			$so_imei = $_POST["so_imei"];
			$so_serial = $_POST["so_serial"];
			$xuat_su = $_POST["xuat_su"];
			$bao_hanh = $_POST["bao_hanh"];
			$ton_kho = $_POST["ton_kho"];
			$category_id = $_POST["category_id"];
			//lay bien ket noi
			$conn = Connection::getInstance();
			
			$conn->query("insert into products set name='$name', ma_hang='$ma_hang', price='$price',
			so_imei='$so_imei', so_serial='$so_serial', xuat_su='$xuat_su',
			bao_hanh='$bao_hanh' ,ton_kho='$ton_kho', category_id='$category_id'");

		}
		//xoa ban ghi
		public function modelDelete($id){
			$conn = Connection::getInstance();
			$conn->query("delete from products where id=$id");
		}	
		//lay danh sach danh muc san pham
		public function modelListCategory(){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories order by id desc");
			$result = $query->fetchAll();
			return $result;
		}
		public function modelSearchRecord($recordPerPage){
			//lay bien p truyen tu url
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"]-1) : 0;			
			//lay tu ban ghi nao
			$from = $p * $recordPerPage;
			//---
			$maSp = isset($_POST["maSp"]) ? $_POST["maSp"] : '';
			$nhomSp = isset($_POST["nhomSp"]) ? $_POST["nhomSp"] : '';
			$conn = Connection::getInstance();
			$query = $conn->query("select products.* from products inner join categories on products.category_id = categories.id  where products.ma_hang like '%$maSp%' and categories.name like '%$nhomSp%' order by category_id desc limit $from,$recordPerPage");
			$result = $query->fetchAll();
			return $result;
		}
	}
 ?>