<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php" ?>
    <div class="col-md-12">
                <style type="text/css">
                    .pagination{padding:0px; margin:0px; float: right; margin-top: 5px;}
                </style>
        <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                        <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width: 150px;">ngân sách cửa hàng</th>
                                            <th style="width: 150px;"></th>  
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td  style="text-align:center; width: 50px;">
                                                <?php echo $data->price; ?>đ
                                            </td>
                                            <td style="text-align:center;">
                                                 <a class="btn btn-success" href="index.php?controller=store&action=update">Chỉnh sửa</a>&nbsp;
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
            </div>
        </div>
    </div>
    </div>