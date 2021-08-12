<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php" ?>
                    <div class="col-md-12">
                                <style type="text/css">
                                    .pagination{padding:0px; margin:0px; float: right;}
                                </style>
                <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                                <div style=" float: right;">
                                    <a href="index.php?controller=thongKe&action=create" class="btn btn-primary"><h6>ADD</h6></a>
                                </div>
                                <h6 class="card-title">Danh sách chi tiêu</h6>
                                <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>Tên sản phẩm</th>
                                                    <th>Ngày nhập</th> 
                                                    <th>Số lượng</th> 
                                                    <th>Tổng tiền</th> 
                                                    <th style="width: 150px;"></th>  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($getThongKes as $row): ?>
                                                <tr>
                                                    <th><?php echo $row->id; ?></th>
                                                    <th><?php echo $row->name; ?></th>
                                                    <th><?php echo $row->date; ?></th>
                                                    <th><?php echo $row->quantity; ?></th>
                                                    <th><?php echo $row->total_money; ?></th>
                                                    <td style="text-align:center;">
                                            <a class="btn btn-success" href="index.php?controller=thongKe&action=update&id=<?php echo $row->id; ?>">EDIT</a>&nbsp;
                                            <a class="btn btn-danger" href="index.php?controller=thongKe&action=delete&id=<?php echo $row->id; ?>" onclick="return window.confirm('Ban co muon xoa?');">DELETE</a>
                                        </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                        <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" href="#">Page</a></li>
                                            <?php for($i = 1;$i <= $numPage; $i++): ?>
                                                <li><a class="page-link" href="index.php?controller=users&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                                <?php endfor; ?>
                                        </ul>
                                        </nav>
                                </div>
                    </div>
                </div>
                    </div>
                    </div>