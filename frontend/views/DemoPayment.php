<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <input onclick="history.go(-1);" type="button" value="Back" class="btn btn-danger">
    </div>    
    <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h6 class="card-title">Detail order</h6>
        <div class="panel-body">
            <!-- thong tin don hang -->
            <table class="table">
                <tr>
                    <th style="width: 100px;">Họ tên</th>
                    <td><?php echo $_SESSION['customer']; ?></td>
                </tr>
                <?php $tt = 0; ?>
                <?php foreach($_SESSION["demoCart"] as $rows): ?>
                    <?php
                        $tt += $rows['quantity']*$rows['price'];
                    ?>
                <?php endforeach; ?>
                <tr>
                    <th style="width: 100px;">Tổng tiền</th>
                    <td><?php echo number_format($tt); ?>đ</td>
                </tr>
                <tr>
                    <th style="width: 100px;">Ngày đặt</th>
                    <td>
                        <?php $format = "%d-%B-%Y";
                        $timestamp = time();
                        echo $strTime = strftime($format, $timestamp ); ?>
                    </td>
                </tr>
            </table>
            <table class="table table-bordered table-hover">
                 <tr>
                    <td style="text-align: center;">Tên sản phẩm</td>
                    <td style="text-align: center;">Giá sản phẩm</td>
                    <td style="text-align: center;">Số lượng sản phẩm</td>
                    <td style="text-align: center;">Tổng tiền</td>
                </tr>
                <?php foreach($_SESSION["demoCart"] as $rows): ?>
                    <tr>
                        <td style="text-align: center;"><?php echo $rows['name']; ?></td>
                        <td style="text-align: center;"><?php echo number_format($rows['price']); ?>đ</td>
                        <td style="text-align: center;"><?php echo $rows['quantity']; ?></td>
                        <td style="text-align: center;"><?php echo $rows['quantity']*$rows['price']; ?>đ</td>
                        <td style="text-align: center;">
                            <Button class="btn btn-danger">
                                <a href="index.php?controller=demo&action=deleteOnCart&id=<?php echo $rows['id'] ?>" style="color: white;">Xóa sản phẩm</a>
                            </Button> 
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <div style="float: right; margin-top: 30px;">
                <a href="index.php?controller=demo&action=payment&tt=<?php echo $tt ?>" class="btn btn-primary"><h6>Thanh toán sản phẩm</h6></a>
            </div>            
        </div>
    </div>
    </div>
</div>
</div>