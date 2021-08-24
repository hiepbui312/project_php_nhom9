
<?php 
trait ThongKeModel{
    //ham liet ke danh sach cac ban ghi, co phan trang
    public function modelGetThongKe()
    {
        $conn = Connection::getInstance();
        $query = $conn->query("select date, count(id) as order_quantity, count(distinct customer_id) as customer_quantity, sum(price) as total_money
         from orders group by date order by date");
        return $query->fetchAll();
    }
    public function modelGetThongKeByDay($day)
    {
        $conn = Connection::getInstance();
        $query = $conn->query("select date, count(id) as order_quantity, count(distinct customer_id) as customer_quantity, sum(price) as total_money
        from orders WHERE date = '$day' group by date order by date");
        return $query->fetch();
    }
    public function modelGetTongDoanhThu($category_id)
    {
        $conn = Connection::getInstance();
        $query = $conn->query("select count(quantity) as total_quantity from order_detail inner join products on products.id = order_detail.product_id where category_id = $category_id");
        return $query->fetch();
    }
    public function getCategory() 
    {
        $conn = Connection::getInstance();
        $query = $conn->query("select id, name from categories");
        return $query->fetchAll();
    }
    public function modelSearchThongKe()
    {
        $date1 = isset($_POST['date1']) ? $_POST['date1'] : null;
        $date2 =  isset($_POST['date2']) ? $_POST['date2'] : null;
        $conn = Connection::getInstance();
        $query = $conn->query("select date, count(id) as order_quantity, count(customer_id) as customer_quantity, sum(price) as total_money
         from orders where date BETWEEN '$date1' AND '$date2' group by date");
        return $query->fetchAll();
    }

}
?>