<?php 
		$id = $_GET['id'];
		include 'connectdb.php'; 
		//include 'view/edit_user.php';
		$sql = "SELECT * FROM users WHERE id = $id";
		$result = mysqli_query($connect, $sql);
		while ($row = $result->fetch_assoc()) {
			$email = $row['email'];
			$password = $row['password'];
		}



		if(isset($_POST['edit'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];
			$sql = "UPDATE users SET email = '$email', password 
			= '$password' WHERE id = $id";
			mysqli_query($connect, $sql);
			//header("Location: list_user.php");
			//header("Location: http://24h.com.vn");
		}

	?>
       <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit user</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form"  method="post" >
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button class="btn btn-primary" name="edit">EDIT USER</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>

