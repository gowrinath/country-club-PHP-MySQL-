<!--
CSCI 688       Group Project        Spring 2015

Group: 12

Professor: Dr. Kathi Davis

Purpose: The payment pages is the crucial in the information update to the tables in the database
		It displays the payment options when the application is of judged category
		It displays the display application options if it of display category
-->
<?php 
	require_once('header.php');
?>
      <?php include "connection.php" ?> 
	  
	  <?php
	  
		if(isset($_POST['submit']))
		{
			
		
//assigining all the variables
$firstname= $_POST["firstNameInput"];
$lastname=$_POST["lastNameInput"];
$status= $_POST["status"];
$address=$_POST["streetInput"];
$city= $_POST["cityInput"];
$state= $_POST["stateInput"];
$zip= $_POST["zipInput"];
$phone= $_POST["phoneInput"];
$email= $_POST["emailInput"];
$appcat= $_POST["appcat"];
$quiltcat= $_POST["typeOfQuiltInput"];
$qname= $_POST["quiltNameInput"];
$completed= $_POST["dateCompletedInput"];
$designer= $_POST["designerInput"];
$width= $_POST["widthInput"];
$length= $_POST["heightInput"];
$maker= $_POST["makerInput"];
$description=$_POST["descriptionInput"];
$quilter= $_POST["quilterInput"];
$qstory= $_POST["qstory"];
$qappraisal= $_POST["qappraisal"];
$date=date("Y-m-d");
$owner=$_POST["ownerInput"];

//queries to update several tables after the application is submitted
$sql_query="select max(ShowID) as smaximum from `Show`;";

$resultset=mysql_query($sql_query, $conn);

$smax=mysql_fetch_array($resultset);
//inserting into the person table
$sql_query = "insert into Person(FirstName,LastName,Address,City,State,Zip,Phone,Email,MemberStatus) values ('".$firstname."','".$lastname."','".$address."','".$city."','".$state."','".$zip."','".$phone."','".$email."','".$status."');";
$resultset=mysql_query($sql_query, $conn);
//selecting max value from person
$sql_query="select max(PersonID) as pmaximum from Person;";
$resultset=mysql_query($sql_query, $conn);
$pmax=mysql_fetch_array($resultset);
//inserting into the  application  table
$sql_query="insert into Application(PersonID,ShowID,ApplicationType,SubmittedDate) values ('".$pmax['pmaximum']."','".$smax['smaximum']."','".$appcat."','".$date."');";
$resultset =mysql_query($sql_query, $conn);
//echo $sql_query;
//selecting max value from application
$sql_query="select max(ApplicationID) as amaximum from Application;";
$resultset=mysql_query($sql_query, $conn);
$amax=mysql_fetch_array($resultset);
//inserting into quilter
$sql_query="insert into Quilter(Name) values('".$quilter."');";
$resultset=mysql_query($sql_query, $conn);
//inserting into maker
$sql_query="insert into Maker(Name) values('".$maker."');";
$resultset=mysql_query($sql_query, $conn);
//inserting into owner
$sql_query="insert into Owner(Name) values('".$owner."');";
$resultset=mysql_query($sql_query, $conn);
//selecting max quilter id
$sql_query="select max(QuilterID) as qmaxi from Quilter;";
$resultset=mysql_query($sql_query, $conn);
$qmax=mysql_fetch_array($resultset);
//selecting maxx owner id
$sql_query="select max(OwnerID) as omaxi from Owner;";
$resultset=mysql_query($sql_query, $conn);
$omax=mysql_fetch_array($resultset);
//selecting max maker id
$sql_query="select max(MakerID) as mmaxi from Maker;";
$resultset=mysql_query($sql_query, $conn);
$mmax=mysql_fetch_array($resultset);
//inserting into quilt table
$sql_query="insert into Quilt(ApplicationID,Title,DateCompleted,Description,Design,QuiltType,Category,Width,Length,Story,NeedAppraisal,QuilterID,OwnerID,MakerID) values('".$amax['amaximum']."','".$qname."','".$completed."','".$description."','".$designer."','".$quiltcat."','".$appcat."','".$width."','".$length."','".$qstory."','".$qappraisal."','".$qmax['qmaxi']."','".$omax['omaxi']."','".$mmax['mmaxi']."');";

$resultset =mysql_query($sql_query, $conn);


$sql_query="select max(QuiltNumber) as maximum from Quilt;";

$resultset=mysql_query($sql_query, $conn);
$info=mysql_fetch_array($resultset);

//inserting into the technique table
foreach($_POST['check_list'] as $technique)
{
$sql_query="insert into Techniques(QuiltNumber,Technique) values('".$info['maximum']."','".$technique."');";

$resultset=mysql_query($sql_query, $conn);

} 
$sql_query="insert into EnteredInto(QuiltNumber,ShowID) values('".$info['maximum']."','".$smax['smaximum']."')";
$resultset=mysql_query($sql_query, $conn);
$sql_query="insert into PresentedBy(QuiltNumber,PersonID) values('".$info['maximum']."','".$pmax['pmaximum']."')";
$resultset=mysql_query($sql_query, $conn);
if($appcat=="judge")
{
	//code for the application category judged
	//Code for User Interface
	echo '<div class="row">';
		echo '<div class="col-sm-12">';
			echo '<form method = "POST" action="payment.php">';
				echo '<div class="panel panel-default">';
					echo '<div class="panel-heading"><h2 class="panel-title">Payment</h2>';
					echo '</div>';
					echo '<div class="panel-body">';
						echo '<div class="row">';
							echo '<div class="form-group col-sm-6">';
								echo '<label for="cardNumber">card Number</label>';
								echo  '<input type="text" class="form-control" name="cardNumber" id="cardNumber" placeholder="Card Number" data-validation="number" data-validation-length="max16">';
							echo '</div>';
						echo '</div>';
						echo '<div class="row">';
							echo '<div class="form-group col-sm-6">';
								echo '<label for="nameOnCard">Name On Card</label>';
								echo  '<input type="text" class="form-control" name="nameOnCard" id="nameOnCard" placeholder="Name On Card" data-validation="alphanumeric" data-validation-length="max16">';
							echo '</div>';
						echo '</div>';
						echo '<div class="row">';
							echo '<div class="form-group col-sm-6">';
								echo '<label for="expiry">Expiry</label>';
								echo  '<input type="text" class="form-control" name="expiry" id="expiry" placeholder="MM/YYYY" data-validation="required" data-validation-length="max16">';
							echo '</div>';
						echo '</div>';
						echo '<div class="row">';
							echo '<div class="form-group col-sm-6">';
								echo '<label for="cvv">CVV</label>';
								echo  '<input type="text" class="form-control" name="cvv" id="cvv" placeholder="cvv" data-validation="number" data-validation-length="max16">';
							echo '</div>';
						echo '</div>';
						echo '<center><button type="submit" name="approve" class="btn btn-default">Approve</button></center>';
					echo '</div>';
				echo '</div>';
			echo '</form>';
		echo '</div>';
	echo '</div>';
}

else{
	
	echo '<div class="row">';
		echo '<div class="col-sm-12">';
			echo '<form action="application.php">';
				echo '<div class="panel panel-default">';
					echo '<div class="panel-heading"><h2 class="panel-title">Display Quilt</h2>';
					echo '</div>';
					echo '<div class="panel-body">';
						echo '<div class="row">';
							echo '<div class="form-group col-sm-12">';
								$sql_query="select max(ApplicationID) as maximum from Application";
								$resultset=mysql_query($sql_query, $conn);
								$smax=mysql_fetch_array($resultset);
								if($smax)
								{
									echo '<center><h3>Your Application ID is <span class="label label-default">',$smax[maximum],'</span></h3>';
								}
							echo '</div>';
						echo '</div>';
						echo '<div class="row">';
							echo '<div class="form-group col-sm-12">';
								echo '<h3>Your application is for display only. It is free. Hurray!!</h3>';
							echo '</div>';
						echo'</div>';
						echo '<center><button type="submit" name="submit" class="btn btn-default">Start A New Application</button></center>';
						//echo '<center><input type="submit" value="Go To Start"></center>';
						echo '</form>';
}
//$sql_query="insert into Quilt(Title,Description,Design,Quilter,QuiltStatus,Category,AcceptanceIndicator,PrizeWon,Width,Length,
}


		else if( isset( $_POST['approve']))
		{
		//code when the payment is done
		echo '<div class="row">';
		echo '<div class="col-sm-12">';
			echo '<form action="application.php">';
				echo '<div class="panel panel-default">';
					echo '<div class="panel-heading"><h2 class="panel-title">Display Quilt</h2>';
					echo '</div>';
					echo '<div class="panel-body">';
						echo '<div class="row">';
							echo '<div class="form-group col-sm-12">';
		
		
							$sql_query="select max(ApplicationID) as maximum from Application";
							$resultset=mysql_query($sql_query, $conn);
							$amax=mysql_fetch_array($resultset);
							if($amax)
							{
								echo '<center><h3>Your Application ID is <span class="label label-default">',$amax[maximum],'</span></h3>';
								//echo 'your Application id is',$amax[maximum];
							}
							echo '</div>';
						echo '</div>';
						$sql_query="insert into Payment(ApplicationID,Amount,CardNumber) values('".$amax[maximum]."',5,'".$_POST[cardNumber]."')";
						//echo $sql_query;
						$resultset=mysql_query($sql_query, $conn);
						$sql_query="select max(PaymentID) as maximum from Payment";
						$resultset=mysql_query($sql_query, $conn);
						$smax=mysql_fetch_array($resultset);
						echo '<div class="row">';
							echo '<div class="form-group col-sm-12">';
								if($smax)
								{
									echo '<center><h3>Your Payment ID is <span class="label label-default">',$smax[maximum],'</span></h3>';
									//echo 'your Payment id is',$smax[maximum];
								}
							echo '</div>';
						echo '</div>';
						$sql_query="select max(QuiltNumber) as qmaximum from Quilt;";
						$resultset=mysql_query($sql_query, $conn);
						$info=mysql_fetch_array($resultset);
						$sql_query="select max(ShowID) as smaximum from `Show`;";
						$resultset=mysql_query($sql_query, $conn);	
						$pmax=mysql_fetch_array($resultset);
						$sql_query="insert into FundedBy(PaymentID,ShowID) values('".$smax['maximum']."','".$pmax['smaximum']."')";
						//echo $sql_query;
						$resultset=mysql_query($sql_query, $conn);
						$sql_query="insert into HavePayment(QuiltNumber,PaymentID) values('".$info['qmaximum']."','".$smax['maximum']."')";
						//echo $sql_query;
						$resultset=mysql_query($sql_query, $conn);
						echo '<div class="row">';
							echo '<div class="form-group col-sm-12">';
								echo '<center><h3>Your are done with payment. Go back to start a new application</h3>';
							echo '</div>';
						echo '</div>';		
						//echo 'Your are done with payment. Go back to start a new application';
						echo '<button type="submit" class="btn btn-default">Go To Start</button>';
						//echo '<input type="submit" value="Go To Start"></form>';
					echo '</div>';
				echo '</div>';
			echo '</form>';
		echo '</div>';
		echo '</div>';
		}
	  ?>
	<?php 
	require_once('footer.php');
?>