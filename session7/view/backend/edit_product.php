<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit product</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="admin.php?action=edit_product&id=<?php echo $id?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputName">Name</label>
                  <input type="text" class="form-control" placeholder="Enter name" name="name" value="<?php echo $nameEdit;?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername">Price</label>
                  <input type="text" class="form-control" placeholder="Enter username" name="price" value="<?php echo $priceEdit;?>">
                </div>
				<div class="form-group">
                  <label for="exampleInputFile">Image</label>
                  <input type="file" id="exampleInputFile" name="image" value="<?php echo $imageName;?>">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="edit_product">EDIT PRODUCT</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>