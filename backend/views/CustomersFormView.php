<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php" ?>
                    <div class="col-md-12">  
                    	<?php if(isset($_GET["notify"]) && $_GET["notify"] == "emailExists"): ?>
                    		<div class="alert alert-warning">Email đã tồn tại</div>
                    	<?php endif; ?>
                        
                            <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Thêm/Chỉnh sửa thông tin khách hàng</h6>
                                <form class="forms-sample" method="post" action="<?php echo $action; ?>">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Tên</label>
                                        <input type="text" value="<?php echo isset($record->name) ? $record->name:''; ?>" name="name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Điện thoại</label>
                                        <input type="text" value="<?php echo isset($record->phone) ? $record->phone:''; ?>" name="phone" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Password</label>
                                        <input type="text" value="<?php echo isset($record->password) ? $record->password:''; ?>" name="password" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Thói quen</label>
                                        <input type="text" value="<?php echo isset($record->thoi_quen) ? $record->thoi_quen:''; ?>" name="thoi_quen" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Sở thích</label>
                                        <input type="text" value="<?php echo isset($record->so_thich) ? $record->so_thich:''; ?>" name="so_thich" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Sinh nhật</label>
                                        <input type="date" value="<?php echo isset($record->sinh_nhat) ? $record->sinh_nhat:''; ?>" name="sinh_nhat" class="form-control" required>
                                    </div>
                                    <input type="submit" value="Process" class="btn btn-primary">
                                    <button class="btn btn-light">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>