<?php 
	trait UsersModel{
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
			$query = $conn->query("select * from users order by id asc limit $from,$recordPerPage");
			//lấy toàn bộ kết quả trả về
			$result = $query->fetchAll();
			//---
			return $result;
		}
		//tính tổng số bản ghi
		public function totalRecord($recordPerPage){
			//lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->query("select id from users");
			//trả về tổng số bản ghi
			return $query->rowCount();
		}
		//lấy 1 bản ghi 
		public function modelGetRecord($id){
			//lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->query("select * from users where id=$id");
			//trả về 1 bản ghi
			return $query->fetch();
		}
		public function modelCreate(){
			$conn = Connection::getInstance();
			$email = $_POST["email"];
			$password = $_POST["password"];
			$password = md5($password);
			$query = $conn->query("select * from users");
			$emails = $query->fetchAll();
			foreach($emails as $row) {
				if($row->email == $email) {
					return false;
				}
			}
			$conn->query("insert into users set email='$email', password='$password'");
			return true;
		}
		//update bản ghi
		public function modelUpdate($id){
			//--
			$email = $_POST["email"];
			$password = $_POST["password"];
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query=$conn->query("update users set email='$email' where id=$id");
			//neu password khong rong thi update password
			if($password != ""){
				//ma hoa password
				$password = md5($password);
				$conn->query("update users set password='$password' where id=$id");
			}
		}
		public function modelDelete($id){
			$conn = Connection::getInstance();
			$query = $conn->query("delete from users where id=$id");
		}
	}
 ?>