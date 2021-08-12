<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php" ?>
                    <div class="col-md-12">  
                    	<?php if(isset($_GET["notify"]) && $_GET["notify"] == "emailExists"): ?>
                    		<div class="alert alert-warning">Email đã tồn tại</div>
                    	<?php endif; ?>
                        
                            <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">ADD/EDIT</h6>
                                <form class="forms-sample" method="post" action="<?php echo $action; ?>">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Tên</label>
                                        <input type="text" value="<?php echo isset($record->name) ? $record->name:''; ?>" name="name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Số lượng</label>
                                        <input type="text" value="<?php echo isset($record->quantity) ? $record->quantity:''; ?>" name="quantity" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Tổng tiền</label>
                                        <input type="text" value="<?php echo isset($record->total_money) ? $record->total_money:''; ?>" name="total_money" class="form-control" required>
                                    </div>
                                    <input type="submit" value="Process" class="btn btn-primary">
                                    <button class="btn btn-light">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>