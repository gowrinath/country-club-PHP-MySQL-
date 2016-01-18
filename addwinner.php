<!--
CSCI 688       Group Project        Spring 2015

Group: 12

Professor: Dr. Kathi Davis

Purpose: Add winner page to add new winner information to the database of Dekalb County Quilter's Guild
		The page contains the UI for the different textboxes and buttons required to enter the information
-->
<?php 
	require_once('header.php');
?>
      <?php include "connection.php"?>
	  <div class="row">
		<div class="col-sm-12">
		  <form method = "POST" action="winnersuccess.php">
		  <div class="panel panel-default">
			<div class="panel-heading"><h2 class="panel-title">Add a Winner</h2>
			</div>
				<div class="panel-body">
					<div class="row">
						<div class="form-group col-sm-6">
							<label for="name">Name</label>
							<input type="text" class="form-control" name="name" id="name" placeholder="Name" data-validation="required" data-validation-length="max20">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-6">
							<label for="prize">Prize Won</label>
							<input type="text" class="form-control" name="prize" id="prize" placeholder="Prize Won" data-validation="required" data-validation-length="max20">
						</div>
					</div>
				</div>
			</div>
			
	  <button type="submit" name="submit" class="btn btn-success">Submit</button>
							
	  </form>
	  </div>
	  </div>
	 <?php 
	require_once('footer.php');
?>