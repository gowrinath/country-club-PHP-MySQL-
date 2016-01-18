<!--
CSCI 688       Group Project        Spring 2015

Group: 12

Professor: Dr. Kathi Davis

Purpose: The appraiser success to enter the details into the appraiser table.
-->
<?php 
	require_once('header.php');
?>
      <?php include "connection.php"?>
	  <?php
	  if(isset($_POST['submit']))
		{
			//Assigning data to all variables
			$name= $_POST["name"];
			$address= $_POST["address"];
			$qualification= $_POST["qualification"];
			$organization= $_POST["organization"];
			$date= $_POST["date"];
			$speciality= $_POST["speciality"];
			//query to enter the data into the table
			$sql_query="insert into Appraiser(Name,Address,Qualification,CertifyingOrganization,BeginningDate,QuiltAppraisingSpeciality) values('".$name."','".$address."','".$qualification."','".$organization."','".$date."','".$speciality."')";
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
									<h3> The appraiser information is successfully added</h3>
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