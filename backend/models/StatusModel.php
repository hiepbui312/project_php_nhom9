<?php 
	trait StatusModel{
		//ham liet ke danh sach cac ban ghi, co phan trang
		public function modelReadSell($recordPerPage){
			//lay so trang hien tai truyen tu url
			$page = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//thuc hien truy van
			$conn = Connection::getInstance();
			$query = $conn->query("select * from order_detail order by id desc limit $from, $recordPerPage");
			//tra ve tat ca cac ban truy van duoc
			return $query->fetchAll();
		}
		public function modelRead_tra_hang($recordPerPage){
			//lay tong to so ban ghi
			$total = $this->modelTotal();
			//lay so trang hien tai truyen tu url
			$page = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//thuc hien truy van
			$conn = Connection::getInstance();
			$query = $conn->query("select * from tra_hang order by id desc limit $from, $recordPerPage");
			//tra ve tat ca cac ban truy van duoc
			return $query->fetchAll();
		}
		//ham tinh tong so ban ghi
		public function modelTotal(){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select id from orders");
			//lay tong so ban ghi
			return $query->rowCount();
			//---
		}	
        public function getProduct($id){
            $conn = Connection::getInstance();
			$query = $conn->query("select * from products where id = $id");
            return $query->fetch();
        }
        public function getOrder($id){
            $conn = Connection::getInstance();
			$query = $conn->query("select * from orders where id = $id");
            return $query->fetch();
        }
        public function getCustomer($id){
            $conn = Connection::getInstance();
			$query = $conn->query("select * from customers where id = $id");
            return $query->fetch();
        }
		public function getOrderDetail($id){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from order_detail where id = $id");
            return $query->fetch();
		}
		public function deleteOrder($id){
			$conn = Connection::getInstance();
			$order_detail = $this->getOrderDetail($id);  
			$conn->query("delete from order_detail where id = $id");
			$checkOrder =  $conn->query("select * from order_detail where order_id = $order_detail->order_id");
			if(empty($checkOrder)){
				$conn->query("delete from orders where id = $order_detail->order_id");
			}
		}
		public function ngan_sach(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from ngan_sach");
            return $query->fetch();
		}
		public function tra_hang_model($id){
			$order_detail = $this->getOrderDetail($id);  
			$order = $this->getOrder($order_detail->order_id);  
            $product = $this->getProduct($order_detail->product_id); 
            $customer = $this->getCustomer($order->customer_id);
			$tt = $product->price*$order_detail->quantity;
			$conn = Connection::getInstance();
			$product_name = $product->name;
			$product_price = $product->price;
			$quantity =  $order_detail->quantity;
			$order_date =  $order->date;
			$customer_email = $customer->email;
			$ton_kho = $product->ton_kho + $quantity;
			$conn->query("insert into tra_hang set product_name ='$product_name', product_price = $product_price,
			quantity = $quantity, order_date = '$order_date', customer_email = '$customer_email', tt = $tt ");
			$conn->query("update products set ton_kho = $ton_kho where id =$product->id");
			$ngan_sach = $this->ngan_sach();
			$ngan_sach_price = $ngan_sach->price - $tt;
			$conn->query("update ngan_sach set price = $ngan_sach_price  where id =$ngan_sach->id");
		}
		
	}
 ?>