<?php 
	trait customersModel{
		//hàm lấy danh sách các bản ghi có phân trang
		public function modelRead($recordPerPage){
			//lấy biến p truyền từ url
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"]-1) : 0;
			//lấy từ bản ghi nào
			$from = $p * $recordPerPage;
			//---
			//lấy biến kết nối csdl
			$conn = Connection::getInstance();
			//thực hiện truy vấn
			$query = $conn->query("select * from customers order by id asc limit $from,$recordPerPage");
			//lấy toàn bộ kết quả trả về
			$result = $query->fetchAll();
			//---
			return $result;
		}

		public function modelCreate(){
			//--
			$name = $_POST["name"];
			$phone = $_POST["phone"];
			$password = $_POST["password"];
			$thoi_quen = $_POST["thoi_quen"];
			$so_thich = $_POST["so_thich"];
			$sinh_nhat = $_POST["sinh_nhat"];
			$password = md5($password);
			$conn = Connection::getInstance();
			$conn->query("insert into customers set name='$name', phone='$phone', password='$password',
			thoi_quen='$thoi_quen', so_thich='$so_thich', sinh_nhat='$sinh_nhat'");
		}

		//tính tổng số bản ghi
		public function totalRecord($recordPerPage){
			//lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->query("select id from customers");
			//trả về tổng số bản ghi
			return $query->rowCount();
		}
		//lấy 1 bản ghi 
		public function modelGetRecord($id){
			//lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->query("select * from customers where id=$id");
			//trả về 1 bản ghi
			return $query->fetch();
		}
		//update bản ghi
		public function modelUpdate($id){
			//--
			$name = $_POST["name"];
			$password = $_POST["password"];
			$address = $_POST["address"];
			$phone = $_POST["phone"];
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query=$conn->query("update customers set name='$name', address='$address', phone='$phone' where id=$id");
			//neu password khong rong thi update password
			if($password != ""){
				//ma hoa password
				$password = md5($password);
				$conn->query("update customers set password='$password' where id=$id");
			}
		}
		public function modelDelete($id){
			$conn = Connection::getInstance();
			$query = $conn->query("delete from customers where id=$id");
		}
	}
 ?>