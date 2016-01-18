<!--
CSCI 688       Group Project        Spring 2015

Group: 12

Professor: Dr. Kathi Davis

Purpose: Add show page to add new show information to the database of Dekalb County Quilter's Guild
		The page contains the UI for the different textboxes and buttons required to enter the information
-->
<?php 
	require_once('header.php');
?>
      <?php include "connection.php"?>    <!-- Including the connection information   -->
      <?php include "connection.php"?>    <!-- Including the connection information   -->
	  <div class="row">
		<div class="col-sm-12">
	  <form method = "POST" action="showsuccess.php">
	  <div class="panel panel-default">
			<div class="panel-heading"><h2 class="panel-title">Add a Show</h2>
			</div>
				<div class="panel-body">
					<div class="row">
						<div class="form-group col-sm-6">
							<label for="showdate">Show Date</label>
							<input type="date" class="form-control" name="showdate" id="showdate" placeholder="yyyy-mm-dd" data-validation="date">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-6">
							<label for="location">Location</label>
							<input type="text" class="form-control" name="location" id="location" placeholder="location" data-validation="required" data-validation-length="max20">
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
	  