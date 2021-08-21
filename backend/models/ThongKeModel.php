
<?php 
trait ThongKeModel{
    //ham liet ke danh sach cac ban ghi, co phan trang
    public function modelGetQuantity()
    {
        $date1 = isset($_POST['date1']) ? $_POST['date1'] : null;
        $date2 =  isset($_POST['date2']) ? $_POST['date2'] : null;
        $conn = Connection::getInstance();
        // $query = $conn->query("select count(id) as order_quantity, count(user_id) as customer_quantity, sum(price) as total_money
        //  from orders where date BETWEEN date_sub(now(), INTERVAL 1 day) AND now()");
        $query = $conn->query("select date, count(id) as order_quantity, count(customer_id) as customer_quantity, sum(price) as total_money
         from orders where date BETWEEN '$date1' AND '$date2' group by date");
        return $query->fetchAll();
    }
    public function modelAddThongKe() 
    {   
        $total_money = isset($_POST["total_money"]) ? $_POST["total_money"] : 0;
        $name = isset($_POST["name"]) ? $_POST["name"] : '';
        $quantity = isset($_POST["quantity"]) ? $_POST["quantity"] : 0;
        $conn = Connection::getInstance();
        $conn->query("insert into thong_ke set date = now(), 
        quantity = '$quantity',
        name = '$name',
        total_money = '$total_money'");
    }
    public function modelGetThongKe($recordPerPage)
    {
        $conn = Connection::getInstance();
        $p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"]-1) : 0;			
        //lay tu ban ghi nao
        $from = $p * $recordPerPage;
        $query = $conn->query("select * from thong_ke order by id desc limit $from,$recordPerPage");
        return $query->fetchAll();
    }
    public function totalRecord(){
        //lay bien ket noi
        $conn = Connection::getInstance();
        $query = $conn->query("select id from thong_ke");
        //tra ve tong so ban ghi
        return $query->rowCount();
    }
    public function getId($id)
    {
        $conn = Connection::getInstance();
        $query = $conn->query("select * from thong_ke where id = $id");
        return $query->fetch();
    }
    public function updateThongKe()
    {
        $total_money = isset($_POST["total_money"]) ? $_POST["total_money"] : 0;
        $name = isset($_POST["name"]) ? $_POST["name"] : '';
        $quantity = isset($_POST["quantity"]) ? $_POST["quantity"] : 0;
        $conn = Connection::getInstance();
        $conn->query("update thong_ke set date = now(), 
        quantity = '$quantity',
        name = '$name',
        total_money = '$total_money'");
    }
    public function deleteThongKe($id)
    {
        $conn = Connection::getInstance();
        $conn->query("delete from thong_ke where id = $id");
    }
}
?>