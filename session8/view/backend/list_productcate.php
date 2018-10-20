<div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">List user</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">ID</th>
                  <th>Name</th>
                </tr>
                <?php while ($row = $listProductcate->fetch_assoc()) {
                    $id = $row['id'];
                  ?>
                  <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['name']?></td>
                    <td>
                    <a href="admin.php?action=edit_productcate&id=<?php echo $id;?>"><button type="button" class="btn btn-block btn-info">EDIT</button></a> 
                    <a href="admin.php?action=delete_productcate&id=<?php echo $id;?>"><button type="button" class="btn btn-block btn-danger">DELETE</button></a>
                    </td>
                  </tr>
                <?php }?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        <!-- /.col -->
      </div>
  </div>     