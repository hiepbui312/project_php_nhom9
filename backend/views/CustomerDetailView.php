<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <input onclick="history.go(-1);" type="button" value="Back" class="btn btn-danger">
    </div>    
    <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h6 class="card-title">Chi tiết khách hàng</h6>
        <div class="panel-body">
            <!-- thong tin don hang -->
            <table class="table">
                <tr>
                    <th style="width: 100px;">Họ tên</th>
                    <td><?php echo $customer->name; ?></td>
                </tr>
                <tr>
                    <th style="width: 100px;">Điện thoại</th>
                    <td><?php echo $customer->phone; ?></td>
                </tr>
                <tr>
                    <th style="width: 100px;">Thói quen</th>
                    <td><?php echo $customer->thoi_quen; ?></td>
                </tr>
                <tr>
                    <th style="width: 100px;">Sở thích</th>
                    <td><?php echo $customer->so_thich; ?></td>
                </tr>
                <tr>
                    <th style="width: 100px;">Sinh nhật</th>
                    <td><?php echo $customer->sinh_nhat; ?></td>
                </tr>
            </table>
            <!-- /thong tin -->      
        </div>
    </div>
    </div>
</div>
</div>