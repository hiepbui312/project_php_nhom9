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
                            <a href="index.php?controller=categories&action=create" class="btn btn-primary"><h6>Thêm danh mục&nbsp; <i class="link-icon" data-feather="plus-square"></i></h6></a>
                        </div>
                        <h6 class="card-title">Danh mục các sản phẩm</h6>
                        <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width: 50px;text-align:center">STT</th>
                                            <th style="width: 150px;text-align:center">Tên danh mục</th>
                                            <th style="width: 100px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data as $key => $rows): ?>
                                        <tr>
                                            <td style="text-align:center; width: 50px;">
                                                    <?php echo $key+1; ?>
                                            </td>
                                            <td  style="text-align:center; width: 150px;">
                                                <?php echo $rows->name; ?>
                                            </td>
                                            <td style="text-align:center;">
                                    <a class="btn btn-success" href="index.php?controller=categories&action=update&id=<?php echo $rows->id; ?>">Chỉnh sửa</a>&nbsp;
                                    <a class="btn btn-danger" href="index.php?controller=categories&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Bạn có thực sự muốn xóa?');">Xóa</a>
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