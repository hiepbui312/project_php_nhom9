<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php" ?>
    <form method="post" action="index.php?controller=products&action=search" class="active-cyan-4 input-search"  style="margin-left: 30px; margin-bottom: 10px; display:flex">
        <input class="form-control" type="text" name="maSp" placeholder="Tìm kiếm mã sản phẩm" aria-label="Search" 
        style="width: 200px; margin-right: 10px"/>
        <input class="form-control" type="text" name="nhomSp" placeholder="Tìm kiếm nhóm sản phẩm" aria-label="Search"
        style="width: 200px; margin-right: 10px" />
        <input type="submit" value="tra cứu sản phẩm" class="btn btn-primary" />
    </form>
    <div class="col-md-12">
                <style type="text/css">
                    .pagination{padding:0px; margin:0px; float: right; margin-top: 5px;}
                </style>
        <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
        
            <div class="card-body">
                <div style="float: right; margin-bottom: 5px;">
                    <a href="index.php?controller=products&action=create" class="btn btn-primary"><h6>Thêm sản phẩm&nbsp; <i class="link-icon" data-feather="plus-square"></i></h6></a>
                </div>
                <h6 class="card-title">Danh sách sản phẩm</h6>
                <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="text-align:center;width: 50px;">STT</th>
                                    <th style="text-align:center;width: 150px;">Tên sản phẩm</th>
                                    <th style="text-align:center;width: 150px;">Mã sản phẩm</th> 
                                    <th style="text-align:center;width: 100px;">Tồn kho</th>
                                    <th style="text-align:center;width: 100px;"></th>
                                    <th style="text-align:center;width: 150px;"></th>  
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
                                    <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id ?>">Chi tiết sản phẩm</a>
                                    </td>
                                    <td style="text-align:center;">
                            <a class="btn btn-success" href="index.php?controller=products&action=update&id=<?php echo $rows->id; ?>">Chỉnh sửa</a>&nbsp;
                            <a class="btn btn-danger" href="index.php?controller=products&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Bạn có chắc?');">Xóa</a>
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