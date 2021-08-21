<?php 
	trait LoginModel{
		public function modelLogin(){
			$name=$_POST["name"];
			$password=$_POST["password"];
			// ma hoa password
			$password= md5($password);
			// kiem tra trong csdl
			$conn = Connection::getInstance();
			$query= $conn->query("select name,password from customers where name='$name'");
			//lay mot ban ghi
			$result = $query->fetch();
			if (isset($result->name)){
				if($result->password == $password){
					//dang nhap thanh cong
					$_SESSION["customer"]=$name;
					return true;
				}
			} else {
				return false;
			}
		}

		public function modelCreate(){
			$name = $_POST["name"];
			$conn = Connection::getInstance();
			$query= $conn->query("select name from customers where name='$name'");
			$result = $query->fetch();
			if (isset($result->name)){
				return false;
			} else {
				$phone = $_POST["phone"];
				$password = $_POST["password"];
				$thoi_quen = $_POST["thoi_quen"];
				$so_thich = $_POST["so_thich"];
				$sinh_nhat = $_POST["sinh_nhat"];
				$password = md5($password);
				$conn = Connection::getInstance();
				$conn->query("insert into customers set name='$name', phone='$phone', password='$password',
				thoi_quen='$thoi_quen', so_thich='$so_thich', sinh_nhat='$sinh_nhat'");
				return true;
			}
		
		}
	}		
 ?>