<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <input onclick="history.go(-1);" type="button" value="Back" class="btn btn-danger">
    </div>    
    <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h6 class="card-title">Chi tiết sản phẩm</h6>
        <div class="panel-body">
            <!-- thong tin don hang -->
            <table class="table">
                <tr>
                    <th style="width: 100px;">Họ tên</th>
                    <td><?php echo $data->name; ?></td>
                </tr>
                <tr>
                    <th style="width: 100px;">Mã hàng</th>
                    <td><?php echo $data->ma_hang; ?></td>
                </tr>
                <tr>
                    <th style="width: 100px;">Bảo hành</th>
                    <td><?php echo $data->bao_hanh; ?>(tháng)</td>
                </tr>
                <tr>
                    <th style="width: 100px;">Số IMEI</th>
                    <td><?php echo $data->so_imei; ?></td>
                </tr>
                <tr>
                    <th style="width: 100px;">Số serial</th>
                    <td><?php echo $data->so_serial; ?></td>
                </tr>
                <tr>
                    <th style="width: 100px;">Số lượng hàng tồn kho</th>
                    <td><?php echo $data->ton_kho; ?></td>
                </tr>
                <tr>
                    <th style="width: 100px;">Xuất sứ</th>
                    <td><?php echo $data->xuat_su; ?></td>
                </tr>
                <tr>
                    <th style="width: 100px;">Giá</th>
                    <td><?php echo $data->price; ?></td>
                </tr>
                <tr>
                    <th style="width: 100px;">Loại sản phẩm</th>
                    <td><?php echo $data->category_name; ?></td>
                </tr>
            </table>
            <!-- /thong tin -->      
        </div>
    </div>
    </div>
</div>
</div>