<!--
CSCI 688       Group Project        Spring 2015

Group: 12

Professor: Dr. Kathi Davis

Purpose: The show success page to display the success message when a show is successfully 
		updated to the database.
-->
<?php 
	require_once('header.php');
?>
      <?php include "connection.php"?>
	  <?php
	  if(isset($_POST['submit']))
		{
			//variables
			$showdate= $_POST["showdate"];
			$location= $_POST["location"];
			//inserting into the show
			$sql_query="insert into `Show`(Date,Location) values('".$showdate."','".$location."')";
			//echo $sql_query;
			$resultset=mysql_query($sql_query, $conn);
			
		}
		?>
		<div class="row">
			<div class="col-sm-12">
				<form action="admin.php">
					<div class="panel panel-default">
						<div class="panel-heading"><h2 class="panel-title">Successfully Added</h2></div>
							<div class="panel-body">  
								<div class="row">
									<h3> The show information is successfully added</h3>
									<button type="submit" class="btn btn-success">Go Back</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	<?php 
	require_once('footer.php');
?>