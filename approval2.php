<!--
CSCI 688       Group Project        Spring 2015

Group: 12

Professor: Dr. Kathi Davis

Purpose: The second approval page to display the application id and payment id
			after their generation.
-->
<?php 
	require_once('header.php');
?>
      <?php include "connection.php" ?> <!--Connection information-->
	  <div class="row">
		<div class="col-sm-12">
			
				<div class="panel panel-default">
					<div class="panel-heading"><h2 class="panel-title">Application Approval</h2>
					</div>
					<div class="panel-body"> 
						<form method = "POST" action="approval2.php">
						<?php
						if( isset( $_POST['submit'] ))
						{
						$appID=$_POST[approval];
						//hidden input to submit the form information
						$output="<input type='hidden' name='appid' value='".$appID."'>'";
						echo $output;
						$appID=$_POST[approval]; 
				
            
						//query to retrieve the person id for the selected application id
						$sql="select PersonID from Application where ApplicationID=$_POST[approval]";
						
						$resultset=mysql_query($sql, $conn);
				
						$pid=mysql_fetch_array($resultset);
						
						//query to retrieve the selected person
						$sql="select FirstName,LastName,Address,City,State,Phone,Zip,Email,MemberStatus from Person where PersonID=".$pid['PersonID'];
						
						$resultset=mysql_query($sql, $conn);
						
						//query to retrieve the selected quilt information
						$sql="select  Title,Description,DateCompleted,Category,Width,Length from Quilt where ApplicationID=$_POST[approval]";
						
						$secondset=mysql_query($sql, $conn);
		
						$row = mysql_fetch_array( $resultset );
						$rows= mysql_fetch_array( $secondset );
						
						//displaying the retrieved information in the form of tables
						echo '<table class="table">
						<tr>
							<th>Property</th>
							<th>Value</th>
						</tr>';
                
				
						echo '<tr><td>FirstName</td>';
						echo '<td>',$row['FirstName'],'</td></tr>';
						echo '<tr><td>LastName</td>';
						echo '<td>',$row['LastName'],'</td></tr>';
						echo '<tr><td>Address</td>';
						echo '<td>',$row['Address'],'</td></tr>';
						echo '<tr><td>City</td>';
						echo '<td>',$row['City'],'</td></tr>';
						echo '<tr><td>State</td>';
						echo '<td>',$row['State'],'</td></tr>';
						echo '<tr><td>Zip</td>';
						echo '<td>',$row['Zip'],'</td></tr>';
						echo '<tr><td>Phone</td>';
						echo '<td>',$row['Phone'],'</td></tr>';
						echo '<tr><td>Email</td>';
						echo '<td>',$row['Email'],'</td></tr>';
						echo '<tr><td>MemberStatus</td>';
						echo '<td>',$row['MemberStatus'],'</td></tr>';
						echo '<tr><td>Title</td>';
						echo '<td>',$rows['Title'],'</td></tr>';
						echo '<tr><td>Description</td>';
						echo '<td>',$rows['Description'],'</td></tr>';
						echo '<tr><td>DateCompleted</td>';
						echo '<td>',$rows['DateCompleted'],'</td></tr>';
						echo '<tr><td>Category</td>';
						echo '<td>',$rows['Category'],'</td></tr>';
						echo '<tr><td>Width</td>';
						echo '<td>',$rows['Width'],'</td></tr>';
						echo '<tr><td>Length</td>';
						echo '<td>',$rows['Length'],'</td></tr>';
						echo '</table>';
                
				echo '<button type="submit" name="approved" class="btn btn-success">Approve Application</button>';
				echo'<button type="submit" name="reject" class="btn btn-danger">Reject Application</button>';
				
}
         else if( isset( $_POST['approved'] ))
			{
				//code when the payment is made
			$appID=$_POST['appid'];
			$output="<input type='hidden' name='appid' value='".$appID."'>'";
			//query to update the application table
			$sql="update Application set ApplicationStatus='Approved' where ApplicationID='".$appID."'";
			
			$resultset=mysql_query($sql, $conn);
			if($resultset)
			{
				echo "application is approved. Press Go back to initial selection";//printing the application id
				
			}
			//query to update the quilt table
			$sql="update Quilt set AcceptanceIndicator='Approved' where ApplicationID='".$appID."'";
			$resultset=mysql_query($sql, $conn);
			}
			
			else if(isset( $_POST['reject'] ))
			{
				//code when the application is rejected
				$appID=$_POST['appid'];
				//updating the rejection
				$sql="update Application set ApplicationStatus='Rejected' where ApplicationID='".$appID."'";
				//echo $sql;
				$resultset=mysql_query($sql, $conn);
				if($resultset)
				{
					//displaying the rejection message
					echo "application is rejected. Press Go back for initial selection";
					
					
				}
				//updating the quilt table
				$sql="update Quilt set AcceptanceIndicator='Rejected' where ApplicationID='".$appID."'";
			$resultset=mysql_query($sql, $conn);
			
			}
            ?>
			</form>
			</div>
			</div>
			</div>
			</div>
			<div class="row">
		<div class="col-sm-12">
			<form action="approve.php">
					<button type="submit" class="btn btn-default">Go Back</button>
			</form>
			</div>
			</div>
			
 <?php 
	require_once('footer.php');
?>