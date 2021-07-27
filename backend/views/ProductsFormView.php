<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<div class="col-md-12">  	
    <div class="card" style="padding: 20px;">
        <div class="panel panel-primary">
        <div class="panel-heading" style="margin-bottom: 10px;"><b>THÊM/SỬA SẢN PHẨM</b> </div>
        <div class="panel-body">
            <!-- muon upload duoc file thi phai co thuoc tinh enctype="multipart/form-data" -->
          
         </div>


         <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>">
                <!-- rows -->
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-2">Tên sản phẩm</div>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo isset($record->name) ? $record->name:''; ?>" name="name" class="form-control" required>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-2">Mã sản phẩm</div>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo isset($record->ma_hang) ? $record->ma_hang:''; ?>" name="ma_hang" class="form-control" required>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-2">Giá sản phẩm</div>
                    <div class="col-md-10">
                        <input type="number" value="<?php echo isset($record->price) ? $record->price:''; ?>" name="price" class="form-control" required>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-2">Số IMEI</div>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo isset($record->so_imei) ? $record->so_imei:''; ?>" name="so_imei" class="form-control">
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-2">Số serial</div>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo isset($record->so_serial) ? $record->so_serial:''; ?>" name="so_serial" class="form-control">
                    </div>
                </div>
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-2">Xuất xứ</div>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo isset($record->xuat_su) ? $record->xuat_su:''; ?>" name="xuat_su" class="form-control" required>
                    </div>
                </div>
                <!-- end rows -->
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-2">Bảo hành (tháng)</div>
                    <div class="col-md-10">
                        <input type="number" value="<?php echo isset($record->bao_hanh) ? $record->bao_hanh:''; ?>" name="bao_hanh" class="form-control" required>
                    </div>
                </div>
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-2">Tồn kho</div>
                    <div class="col-md-10">
                        <input type="number" value="<?php echo isset($record->ton_kho) ? $record->ton_kho:''; ?>" name="ton_kho" class="form-control" required>
                    </div>
                </div>
                <!-- end rows --> 
                <!-- rows -->
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-2">Nhóm sản phẩm</div>
                    <div class="col-md-10">
                        <select name="category_id" class="form-control" style="width:200px;">   
                        <?php 
                            $categories = $this->modelListCategory();
                        ?>                     
                        <?php foreach($categories as $rows): ?>
                            <option <?php if(isset($record->category_id)&&$record->category_id==$rows->id): ?> selected <?php endif; ?> value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="row" style="margin-top:20px;">
                    <div class="col-md-2">
                       
                    </div>
                    <div class="col-md-10">
                        <button class="btn btn-primary">
                             <a href="index.php?controller=products&action=index" style="color: white">Cancel</a>
                        </button>
                        <input type="submit" value="Process" class="btn btn-primary">
                    </div>
                </div>
                <!-- end rows -->
            </form>

        </div>
    </div>
</div>