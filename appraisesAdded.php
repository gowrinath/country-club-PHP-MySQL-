<!--
CSCI 688-0001              Group Project                  Spring 2015

Group: 12

Professor: Dr. Kathi Davis

Section: 1

Purpose: This page displays a successful message if the appointment 
         is scheduled. If the appointment is scheduled already it 
         also displays a message stating that the appointment is
         scheduled previously. If the user enters an invalid application Id 
         it states that the application ID is invalid.
         It updates the table Appraises.
-->

    <?php include "connection.php"?><!--connects to the database-->
<?php include "header.php"?><!--includes header to the current page-->

<div class="panel panel-default">
<div class="panel-heading"><h2 class="panel-title">Schedule Appraisal</h2></div>
<div class="panel-body">  
<form method = "POST" action="appraises.php">
 

<?php 
if(isset($_POST['submit']))
{
$appid=$_POST[appid];
$appraisername=$_POST[appraiser];
$apptdate=$_POST[apptdate];
$appttime=$_POST[appttime];

$query1 = "select QuiltNumber from Quilt where ApplicationID = '".$appid."';"; //retrieves quilt number from quilt based on application id
$query2 = "select AppraiserID from Appraiser where Name = '".$appraisername."';";//retrieves appriaser id based in the appraiser name



$resultset1 = mysql_query($query1,$conn);
$resultset2 = mysql_query($query2,$conn);

$num_rows = mysql_num_rows($resultset1);
if($num_rows!=0)
{

while($rows1 = mysql_fetch_array($resultset1))
{
$qnumber= $rows1[0];
}

while($rows2 = mysql_fetch_array($resultset2))
{
$appraiserid= $rows2[0];

}

$query4 = "select AppointmentDate, AppointmentTime from Appraises where Quiltnumber='".$qnumber."';"; //check whether the appointment is scheduled already

$resultset4=mysql_query($query4,$conn);
$num =  mysql_num_rows($resultset4);

if($num!=0){ //check whether the appointment is scheduled already
while($rows4 = mysql_fetch_array($resultset4))
{
$adate= $rows4[0];
$atime=$rows4[1];

}

    echo"<h4>Your appointment has already been scheduled  on ".$adate." at ".$atime."</h4>";
}
 else {
    

$query3 = "insert into Appraises (QuiltNumber, AppraiserID, AppointmentDate, AppointmentTime) Values ('".$qnumber."','".$appraiserid."','".$apptdate."','".$appttime."');"; //if the appointment is not scheduled it inserts into table and schdules an appoointment

$resultset3 = mysql_query($query3,$conn);
echo"<h4>Your appointment has been scheduled with ".$appraisername." on ".$apptdate." at ".$appttime."</h4>";
 }
}
else{
    echo"<h4>Invalid Application ID. Please try again</h4> ";
    
}
}

?>
    
    <div class="row">
<div class="form-group col-sm-6">
<input type="submit" value= "Back" name="back" class="btn btn-success">
</div>
 </div>
 </form>
</div>
</div>
<?php include "footer.php"?> <!--includes footer to the current page-->


    