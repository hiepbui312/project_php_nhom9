<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<form method="post" action="index.php?controller=ThongKe&action=getThongKe" style="margin-left: 30px; margin-bottom: 10px">
    <input type="date" name="date1" value="<?php echo date('Y-m-d') ?>"/>
    <input type="date" name="date2" value="<?php echo date('Y-m-d') ?>"/>
    <input type="submit" value="tra cứu thông kê" class="btn btn-primary" />
</form>
<div class="col-md-12">
    <div class="col-md-12 grid-margin stretch-card">
        
        <div class="card">
            <div class="card-body">
            <h6 class="card-title">Báo cáo thống kê</h6>
            <div class="panel-body">
                <!-- thong tin don hang -->
                <table class="table table-bordered table-hover">
                    <tr>
                        <td style="text-align: center;">Ngày</td>
                        <td style="text-align: center;">Số lượng đơn hàng</td>
                        <td style="text-align: center;">Tổng số khách</td>
                        <td style="text-align: center;">Tổng tiền thu được</td>
                    </tr>
                    <?php if(isset($getThongKes)): ?>
                        <?php foreach($getThongKes as $getThongKe): ?>
                            <tr>
                                <td style="text-align: center;"><?php echo $getThongKe->date ?></td>
                                <td style="text-align: center;"><?php echo $getThongKe->order_quantity ?></td>
                                <td style="text-align: center;"><?php echo $getThongKe->customer_quantity ?></td>
                                <td style="text-align: center;"><?php echo $getThongKe->total_money ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </table>            
            </div>
        </div>
        </div>
    </div>
</div>
<!-- <script>
    setTimeout(function(){ 
        location.reload();
    }, 3000);
</script> -->