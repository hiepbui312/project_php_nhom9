
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
        $query = $conn->query("select date, count(id) as order_quantity, count(user_id) as customer_quantity, sum(price) as total_money
         from orders where date BETWEEN '$date1' AND '$date2' group by date");
        return $query->fetchAll();
    }
    public function modelAddThongKe($thong_ke) 
    {
        $conn = Connection::getInstance();
        $conn->query("insert into thong_ke set date = now(), 
        order_quantity = '$thong_ke->order_quantity',
        customer_quantity = '$thong_ke->customer_quantity',
        total_money = '$thong_ke->total_money'");
    }
    public function modelGetThongKe()
    {
        $conn = Connection::getInstance();
        $query = $conn->query("select * from thong_ke");
        return $query->fetchAll();
    }
}
?>