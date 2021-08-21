<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <input onclick="history.go(-1);" type="button" value="Back" class="btn btn-danger">
    </div>    
    <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h6 class="card-title">Chi tiết đơn hàng</h6>
        <div class="panel-body">
            <!-- thong tin don hang -->
            <?php  
                $order = $this->modelGetOrders($id);
                $customer = $this->modelGetCustomers($order->customer_id);
             ?>
            <table class="table">
                <tr>
                    <th style="width: 100px;">Họ tên</th>
                    <td><?php echo $customer->name; ?></td>
                </tr>
                <tr>
                    <th style="width: 100px;">Tổng tiền</th>
                    <td><?php echo number_format($order->price); ?>đ</td>
                </tr>
                <tr>
                    <th style="width: 100px;">Ngày đặt</th>
                    <td><?php echo $order->date; ?></td>
                </tr>
            </table>
            <table class="table table-bordered table-hover">
                 <tr>
                    <td style="text-align: center;">Tên sản phẩm</td>
                    <td style="text-align: center;">Giá sản phẩm</td>
                    <td style="text-align: center;">Số lượng sản phẩm</td>
                    <td style="text-align: center;">Tổng tiền</td>
                </tr>
                <?php foreach($data as $rows): ?>
                    <?php 
                        //lay ban ghi product tuong ung voi product_id
                        $product = $this->modelGetProducts($rows->product_id);
                     ?>
                    <tr>
                        <td style="text-align: center;"><?php echo $product->name; ?></td>
                        <td style="text-align: center;"><?php echo number_format($product->price); ?>đ</td>
                        <td style="text-align: center;"><?php echo $rows->quantity; ?></td>
                        <td style="text-align: center;"><?php echo number_format($rows->quantity*$product->price); ?>đ</td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <button onclick="window.print();" class="btn btn-primary" style="margin-top: 20px; float: right;">In hóa đơn</button>            
        </div>
    </div>
    </div>
</div>
</div>