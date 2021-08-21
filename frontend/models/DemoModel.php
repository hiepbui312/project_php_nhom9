<?php 
	trait DemoModel{
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
			$query = $conn->query("select * from products order by id desc limit $from,$recordPerPage");
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
        public function addToCartModel($id,$quantity){
		    if(isset($_SESSION['demoCart'][$id])){
		        $_SESSION['demoCart'][$id]['quantity'] += $quantity;
		    } else {
				$conn = Connection::getInstance();
				$query = $conn->query("select * from products where id=$id");
		        $product = $query->fetch();	        
		        $_SESSION['demoCart'][$id] = array(
		            'id' => $id,
		            'name' => $product->name,
		            'ma_hang' => $product->ma_hang,
		            'quantity' => $quantity,
		            'price' => $product->price,
		        );
		    }
		}
		public function cartDelete($id){
			//xóa sp ra khỏi giỏ hàng
			unset($_SESSION['demoCart'][$id]);
		}
		public function getUser()
		{
			$name = $_SESSION['customer'];
			$conn = Connection::getInstance();
			$query = $conn->query("select * from customers where name ='$name'");
			return $query->fetch();	       
		}
		public function ngan_sach(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from ngan_sach");
            return $query->fetch();
		}
		public function cartCheckOut($id, $tt){
			$conn = Connection::getInstance();
			$conn->query("insert into orders set customer_id=$id, date = now(), price = $tt");
			$order_id = $conn->lastInsertId();  
			foreach($_SESSION["demoCart"] as $product){
				$query = $conn->query("select * from products where id =".$product['id']);
				$product123 = $query->fetch();
				$ton_kho = $product123->ton_kho - $product["quantity"];
				$conn->query("insert into order_detail set order_id=$order_id, product_id=".$product['id'].", quantity=".$product['quantity']);
				$conn->query("update products set ton_kho = $ton_kho where id =".$product['id']);
			}
			$ngan_sach = $this->ngan_sach();
			$ngan_sach_price = $ngan_sach->price + $tt;
			$conn->query("update ngan_sach set price = $ngan_sach_price  where id =$ngan_sach->id");
			unset($_SESSION["demoCart"]);
		}
	}
 ?>