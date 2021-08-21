<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?> 
<div class="col-md-12">
                <style type="text/css">
                    .pagination{padding:0px; margin:0px; float: right; margin-top: 5px;}
                </style>
        <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Danh sách đơn hàng</h6>
                <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 150px;">Tên khách hàng</th>
                                    <th style="width: 150px;">Ngày mua hàng</th> 
                                    <th style="width: 100px;">Tổng tiền</th>
                                    <th style="width: 100px;">Chi tiết đơn hàng</th>
                                </tr>
                            </thead>
                <?php foreach($listRecord as $rows): ?>
                <tbody>
                    <tr>
                     <td><?php echo $rows->users; ?></td> 
                     <td>
                        <?php 
                        $date = Date_create($rows->date);
                        echo Date_format($date, "d/m/Y");
                        ?>                            
                        </td>
                     <td><?php echo number_format($rows->price); ?></td>
                     <td><a href="index.php?controller=orders&action=detail&id=<?php echo $rows->id; ?>">Chi tiết đơn hàng</a></td>
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