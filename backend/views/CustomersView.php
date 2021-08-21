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
                                    <a href="index.php?controller=customers&action=create" class="btn btn-primary"><h6>Thêm mới khách hàng&nbsp <i class="link-icon" data-feather="user-plus"></i></h6></a>
                                </div>                             
                                <h6 class="card-title">Danh sách customer</h6>
                                <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>Tên</th>
                                                    <th>Điện thoại</th> 
                                                    <th>Chi tiết</th>
                                                    <th></th>
                                                    <th style="width: 150px;"></th>  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($data as $row): ?>
                                                <tr>
                                                    <th><?php echo $row->id; ?></th>
                                                    <td><?php echo $row->name; ?></td>
                                                    <td><?php echo $row->phone; ?></td>
                                                    <td><a href="index.php?controller=customers&action=detail&id=<?php echo $row->id; ?>">Chi tiết khách hàng</a></td>
                                                    <td style="text-align:center;">
                                            <a class="btn btn-success" href="index.php?controller=customers&action=update&id=<?php echo $row->id; ?>">EDIT</a>&nbsp;
                                            <a class="btn btn-danger" href="index.php?controller=customers&action=delete&id=<?php echo $row->id; ?>" onclick="return window.confirm('Bạn có chắc?');">DELETE</a>
                                        </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                        <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" href="#">Page</a></li>
                                            <?php for($i = 1;$i <= $numPage; $i++): ?>
                                                <li><a class="page-link" href="index.php?controller=customers&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                                <?php endfor; ?>
                                        </ul>
                                        </nav>
                                </div>
                    </div>
                </div>
                    </div>
                    </div>