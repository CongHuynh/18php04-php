<?php 
	include 'connectdb.php';
	$sql = "SELECT * FROM users ORDER BY id ASC ";
	$result = mysqli_query($connect, $sql);
	?>
	<?php 
		if($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$id = $row['id'];
				echo $row['id'].' - '.$row['email'].' - '.$row['password'];
				echo " <a href='edit_user.php?id=$id'>EDIT</a>";
				echo " | <a href='delete_user.php?id=$id'>DELETE</a>";
				echo "<br>";
			}
		} else {
			echo "No users";
		}
		
	?>


       <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">List user</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered" >
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th style="width: 40px">Update</th>
                </tr>
                <tr>
                  <td><?php echo $row['id']?></td>
                  <td>Update software</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                    </div>
                  </td>
                  <td>
                  <button type="button" class="btn btn-block btn-info">EDIT</button> 
                  <button type="button" class="btn btn-block btn-danger">DELETE</button>
                  </td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Clean database</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                    </div>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-info">EDIT</button> 
                  <button type="button" class="btn btn-block btn-danger">DELETE</button>
                  </td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>Fix and squish bugs</td>
                  <td>
                    <div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                    </div>
                  </td>
                  <td>
                    <button type="button" class="btn btn-block btn-info">EDIT</button> 
                  <button type="button" class="btn btn-block btn-danger">DELETE</button>
                  </td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
          <!-- /.box -->
        <!-- /.col -->
      </div>
  </div>     