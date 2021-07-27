<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php" ?>
    <div class="col-md-12">
                <style type="text/css">
                    .pagination{padding:0px; margin:0px; float: right; margin-top: 5px;}
                </style>
        <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                        <div style="float: right; margin-bottom: 5px;">
                            <a href="index.php?controller=demo&action=showCart" class="btn btn-primary"><h6>Giỏ hàng&nbsp; <i class="link-icon" data-feather="plus-square"></i></h6></a>
                        </div>
                        <h6 class="card-title">Danh sách sản phẩm</h6>
                        <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width: 50px;text-align:center;">STT</th>
                                            <th style="width: 150px;text-align:center;">Tên sản phẩm</th>
                                            <th style="width: 150px;text-align:center;">Mã sản phẩm</th> 
                                            <th style="width: 100px;text-align:center;">Hàng còn lại</th>
                                            <th style="width: 100px;text-align:center;">Giá</th>
                                            <th style="width: 100px;text-align:center;">Số lượng muốn mua</th>
                                            <th style="width: 150px;text-align:center;"></th>  
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data as $key => $rows): ?>
                                        <tr>
                                        <td  style="text-align:center; width: 50px;">
                                                <?php echo $key+1; ?>
                                            </td>
                                            <td  style="text-align:center; width: 150px;">
                                                <?php echo $rows->name; ?>
                                            </td>
                                            <td style="text-align:center;">
                                                <?php echo $rows->ma_hang; ?>
                                            </td>
                                            <td style="text-align:center;">
                                                <?php echo $rows->ton_kho; ?>
                                            </td>
                                            <td style="text-align:center;">
                                                <?php echo number_format($rows->price); ?>đ
                                            </td>
                                            <td style="text-align:center;">
                                                <input class="form-control input-number" value="1" min="1" max="<?php echo $rows->ton_kho ?>" id="quantity<?php echo $rows->id; ?>" type="number" style="width: 120px;margin-left: 30px">  
                                            </td>
                                            
                                            <td style="text-align:center;">
                                    <a class="btn btn-success" style="color: white" onclick="addToCart<?php echo $rows->id ?>()" href="#" >Thêm vào giỏ hàng</a>&nbsp;
                                            </td>
                                        </tr>
                                        <script>
                                             function addToCart<?php echo $rows->id ?>(){
                                                    var quantity = document.getElementById('quantity<?php echo $rows->id; ?>').value;
                                                    location.href="index.php?controller=demo&action=addToCart&id=<?php echo $rows->id; ?>&quantity<?php echo $rows->id; ?>="+quantity;
                                            }
                                        </script>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item disabled"><a class="page-link" href="#">Page</a></li>
                                    <?php for($i = 1;$i <= $numPage; $i++): ?>
                                        <li><a class="page-link" href="index.php?controller=products&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                        <?php endfor; ?>
                                </ul>
                                </nav>
                        </div>
            </div>
        </div>
    </div>
    </div>