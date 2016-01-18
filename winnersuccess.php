<!--
CSCI 688       Group Project        Spring 2015

Group: 12

Professor: Dr. Kathi Davis

Purpose: The winner success page displays the success message when a winner is successfully added
		to the database of DCQG.
-->
<?php 
	require_once('header.php');
?>
      <?php include "connection.php"?>
	  <?php
	  if(isset($_POST['submit']))
		{	
			//variables
			$name= $_POST["name"];
			$prize= $_POST["prize"];
			//query to insert into winner
			$sql_query="insert into Winner(Name,Prizewon) values('".$name."','".$prize."')";
			//echo $sql_query;
			$resultset=mysql_query($sql_query, $conn);
			$sql_query="select max(PersonID) as maximum from Winner";
			$resultset=mysql_query($sql_query, $conn);
			$pmax=mysql_fetch_array($resultset);
			$sql_query="select max(ShowID) as smaximum from `Show`;";
			$resultset=mysql_query($sql_query, $conn);
			$smax=mysql_fetch_array($resultset);
			$sql_query="insert into ShowHasWinner(ShowID,PersonID) values('".$smax[smaximum]."','".$pmax[maximum]."')";
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
									<h3> The Winner information is successfully added</h3>
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