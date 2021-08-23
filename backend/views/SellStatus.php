<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<div class="col-md-12">
    <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h6 class="card-title">Danh sách bán hàng</h6>
        <div class="panel-body">
            <!-- thong tin don hang -->
            <table class="table table-bordered table-hover">
                 <tr>
                    <td style="text-align: center;">Tên sản phẩm</td>
                    <td style="text-align: center;">Giá sản phẩm</td>
                    <td style="text-align: center;">Số lượng sản phẩm</td>
                    <td style="text-align: center;">Ngày bán</td>
                    <td style="text-align: center;">Người mua</td>
                    <td style="text-align: center;">Tổng tiền</td>
                    <td style="width: 150px;"></td>  
                </tr>
                <?php foreach($data as $rows): ?>
                    <?php 
                        $order = $this->getOrder($rows->order_id);  
                        $product = $this->getProduct($rows->product_id); 
                        $customer = $this->getCustomer($order->customer_id);    
                    ?>
                    <tr>
                        <td style="text-align: center;"><?php echo $product->name; ?></td>
                        <td style="text-align: center;"><?php echo $product->price; ?></td>
                        <td style="text-align: center;"><?php echo $rows->quantity; ?></td>
                        <td style="text-align: center;"><?php echo $order->date; ?></td>
                        <td style="text-align: center;"><?php echo $customer->name; ?></td>
                        <td style="text-align: center;"><?php echo $product->price*$rows->quantity; ?></td>
                        <td style="text-align:center;">
                            <a class="btn btn-primary" href="index.php?controller=status&action=tra_hang&id=<?php echo $rows->id; ?>">Trả hàng</a>&nbsp;
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>            
        </div>
    </div>
    </div>
</div>
</div>