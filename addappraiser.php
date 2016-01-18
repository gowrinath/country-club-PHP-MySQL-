<!--
CSCI 688       Group Project        Spring 2015

Group: 12

Professor: Dr. Kathi Davis

Purpose: Add appraiser page to add new appraiser information to the database of Dekalb County Quilter's Guild
		The page contains the UI for the different textboxes and buttons required to enter the information
-->
<?php 
	require_once('header.php');
?>
      <?php include "connection.php"?>   <!-- Including the connection information   -->
	  <div class="row">
		<div class="col-sm-12">
			<form method = "POST" action="appraisersuccess.php">
			<div class="panel panel-default">
			<div class="panel-heading"><h2 class="panel-title">Add an appraiser</h2>
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
							<label for="address">Address</label>
							<input type="text" class="form-control" name="address" id="address" placeholder="Address" data-validation="required" data-validation-length="max20">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-6">
							<label for="qualification">Qualification</label>
							<input type="text" class="form-control" name="qualification" id="qualification" placeholder="Qualification" data-validation="required" data-validation-length="max20">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-6">
							<label for="date">Organization</label>
							<input type="text" class="form-control" name="organization" id="organization" placeholder="organization" data-validation="required">
						</div>
					</div>
					<div class="row">
					<div class="form-group col-sm-6">
										  <div class="form-group">
										    <label for="date">Date Completed</label>
										    <input type="date" class="form-control" name="date" id="date" placeholder="yyyy-mm-dd" data-validation="date">
										  </div>
										</div>
										</div>
					<div class="row">
						<div class="form-group col-sm-6">
							<label for="speciality">Speciality</label>
							<input type="text" class="form-control" name="speciality" id="speciality" placeholder="speciality" data-validation="required" data-validation-length="max20">
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