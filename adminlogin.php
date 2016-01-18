<!--
CSCI 688       Group Project        Spring 2015

Group: 12

Professor: Dr. Kathi Davis

Purpose: The admin login page takes care of the secure login of the user. 
			Username:  admin
			password:  admin
-->
<?php 
	require_once('header.php');
?>
      <?php include "connection.php"?>
        <div class="row">
			<div class="col-sm-12">
				<form name="login">
					<div class="panel panel-default">
					<div class="panel-heading"><h2 class="panel-title">Admin Login</h2>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="form-group col-sm-6">
							<label for="name">User Name</label>
							<input type="text" class="form-control" name="userid" id="userid" placeholder="User Name" value="admin" data-validation="alphanumeric" data-validation-length="max20">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-sm-6">
							<label for="name">Password</label>
							<input type="password" class="form-control" name="pswrd" id="pswrd" placeholder="Password" value="admin" data-validation="alphanumeric" data-validation-length="max20">
							</div>
						</div>
					</div>
				</div>
				<button onclick="check(this.form)" class="btn btn-success">Login</button>';
				<button type="reset" class="btn btn-default">Reset</button>
        </form>
        <script language="javascript">
            function check(form) { /*function to check userid & password*/
                if(form.userid.value == "admin" && form.pswrd.value == "admin") {
                    window.open('admin.php')/*opens the target page while Id & password matches*/
                }
                else {
                    alert("Error Password or Username")/*displays error message*/
                }
            }
        </script>
   <?php 
	require_once('footer.php');
?>