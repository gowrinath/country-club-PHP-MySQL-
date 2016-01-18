<!--
CSCI 688       Group Project        Spring 2015

Group: 12

Professor: Dr. Kathi Davis

Purpose: The approve page displays all the pending applications that needs approval
		It has a dropdown from which you can select the application and look up the information
-->
<?php 
	require_once('header.php');
?>
<?php include "connection.php"?>
	<div class="row">
		<div class="col-sm-12">
			
				<div class="panel panel-default">
					<div class="panel-heading"><h2 class="panel-title">Application Approval</h2>
					</div>
					<div class="panel-body">  
					   
             
								<?php
								//select applications that needs approval
								$sql="select ApplicationID,PersonID from Application where ApplicationStatus IS NULL";
								$appList=mysql_query($sql,$conn);
				
								$numRows= mysql_num_rows($appList);
								//when no applications needs approval
								if($numRows==0)
								{
									echo '<div class="row">';
										echo '<div class="form-group col-sm-12">';
											echo '<h3>No applications needs approval. Go back to look for other options<h3>';
										echo '</div>';
									echo '</div>';
									echo '<div class="row">';
										echo '<div class="form-group col-sm-6">';
											echo '<form action="admin.php">';
											echo '<button type="submit" name="submit" class="btn btn-default">Go Back</button>';
											echo '</form>';
										echo '</div>';
									echo '</div>';
								}
								//applications that needs approval
								else
								{
									echo '<form method = "POST" action="approval2.php">';
									echo '<div class="row">';
										echo '<div class="form-group col-sm-6">';
											
												echo '<label>Forms that needs approval</label>';
												echo '<select class="form-control col-sm-2" name="approval" id="approval" data-validation="required">';
												echo '<option disabled selected> -- Select Application -- </option>';
												//drop down of all applications that required approval
												for( $i = 0; $i < $numRows; $i++ )
												{
													$row = mysql_fetch_array( $appList );
													echo '<option value =', $row[0], '>', $row[0], '</option>';
												}
												echo '</select>';
											echo '</div>';
									echo '</div>';
									echo '<button type="submit" name="submit" class="btn btn-default">Look Up Application</button>';
									echo '</form>';
								}
								?>
							
					</div>
				</div>
			
		</div>
	</div>
        
<?php 
	require_once('footer.php');
?>
