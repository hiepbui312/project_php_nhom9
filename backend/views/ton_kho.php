<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php" ?>
    <div class="col-md-12">
                <style type="text/css">
                    .pagination{padding:0px; margin:0px; float: right; margin-top: 5px;}
                </style>
        <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                        <h6 class="card-title">Danh sách sản phẩm tồn kho</h6>
                        <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center;width: 50px;">STT</th>
                                            <th style="text-align:center;width: 150px;">Tên sản phẩm</th>
                                            <th style="text-align:center;width: 150px;">Mã sản phẩm</th> 
                                            <th style="text-align:center;width: 100px;">Tồn kho</th>
                                            <th style="text-align:center;width: 100px;"></th>
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
                                                <?php echo number_format($rows->ton_kho); ?>
                                            </td>
                                            <td style="text-align:center;">
                                                <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id ?>">Chi tiết sản phẩm</a>
                                            </td>
                                        </tr>
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