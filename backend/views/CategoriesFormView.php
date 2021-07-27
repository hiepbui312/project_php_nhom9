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
                    <div class="col-md-2">Tên danh mục</div>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo isset($record->name) ? $record->name:''; ?>" name="name" class="form-control" required>
                    </div>
                </div>

                <div class="row" style="margin-top:20px;">
                    <div class="col-md-2">
                       
                    </div>
                    <div class="col-md-10">
                        <button class="btn btn-primary">
                             <a href="index.php?controller=categories&action=index" style="color: white">Cancel</a>
                        </button>
                        <input type="submit" value="Process" class="btn btn-primary">
                    </div>
                </div>
                <!-- end rows -->
            </form>

        </div>
    </div>
</div>