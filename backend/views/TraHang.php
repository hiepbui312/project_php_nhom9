<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<div class="col-md-12">
    <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h6 class="card-title">Danh sách trả hàng</h6>
        <div class="panel-body">
            <!-- thong tin don hang -->
            <table class="table table-bordered table-hover">
                 <tr>
                    <td style="text-align: center;">Tên sản phẩm</td>
                    <td style="text-align: center;">Giá sản phẩm</td>
                    <td style="text-align: center;">Số lượng sản phẩm</td>
                    <td style="text-align: center;">Ngày trả</td>
                    <td style="text-align: center;">Người trả</td>
                    <td style="text-align: center;">Tổng tiền</td>
                </tr>
                <?php foreach($data as $rows): ?>
                    <tr>
                        <td style="text-align: center;"><?php echo $rows->product_name; ?></td>
                        <td style="text-align: center;"><?php echo $rows->product_price; ?></td>
                        <td style="text-align: center;"><?php echo $rows->quantity; ?></td>
                        <td style="text-align: center;"><?php echo $rows->order_date; ?></td>
                        <td style="text-align: center;"><?php echo $rows->customer_email; ?></td>
                        <td style="text-align: center;"><?php echo $rows->tt; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>            
        </div>
    </div>
    </div>
</div>
</div>