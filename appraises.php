<!--
CSCI 688-0001              Group Project                  Spring 2015

Group: 12

Professor: Dr. Kathi Davis

Section: 1

Purpose: Appraises page allows the user to schedule an appointment 
         with the appraiser on a specific date and time. It allows the
         user to enter their application ID, appointment date and time
         and based on their application ID it retrieves the quilt number
         and schedules the appointment.
-->
<?php 
	require_once('header.php');
?>
    <?php include "connection.php"?> <!--connects to the database-->


<div class="panel panel-default">
<div class="panel-heading"><h2 class="panel-title">Schedule Appraisal</h2></div>
<div class="panel-body">  

<form method = "POST" action="appraisesAdded.php">
 <div class="row">
<div class="form-group col-sm-6">
    
    <label for="appid">Application-ID</label>
    <input type="text" class="form-control" id="appid" placeholder="Application-ID" data-validation="number" data-validation-length="max5" name="appid"> <!--text field for application id-->
</div>
</div>
    
    <div class="row">
<div class="form-group col-sm-6">
    
    
    <label for="apptdate">Appointment Date</label>
    <input type="date" class="form-control" id="apptdate" placeholder="Appointment Date" data-validation="date"  name="apptdate" min="2015-04-22"> <!--field for appointment date-->
</div>
    </div>
    
    <div class="row">
<div class="form-group col-sm-6">
    
    <label for= "appttime">Appointment Time</label>
    <select class="form-control" id="appttime" data-validation="required" name="appttime"> <!--drop down list for appointment time-->
                        <option disabled selected>-- Appointment Time --</option>
                        <option value="9:00 am">09.00 am</option>
                        <option value="10:00 am">10.00 am</option>
                        <option value="11:00 am">11.00 am</option>
                        <option value="12:00 pm">12.00 noon</option>
                        <option value="1:00 pm">01.00 pm</option>
                        <option value="2:00 pm">02.00 pm</option>
                        <option value="3:00 pm">03.00 pm</option>
                        <option value="4:00 pm">04.00 pm</option>   
                     </select><br>
</div>
    </div>

    


<?php
$query = "select Name from Appraiser"; //retrieves the appraiser name to display in the drop down list
$resultset = mysql_query($query,$conn);
echo "<div class='row'>";
echo "<div class='form-group col-sm-6'>";
echo  " <label for= 'appraiser'>Appraiser</label>";
echo "<select class='form-control' id='appraiser' data-validation='required' name = 'appraiser'>"; //drop down list for appraisers 
echo "<option value = ''>Appraiser</option>";
while ($rows = mysql_fetch_array($resultset))
{
echo "<option value='".$rows[0]."'>$rows[0]</option>";
}
echo"</select>";
echo "</div>";
echo "</div>";
?>

<br/>
 <div class="row">
<div class="form-group col-sm-6">
<input type="submit" value= "Submit" name="submit" class="btn btn-success">
</div>
 </div>
</form>
</div>
</div>
<?php include "footer.php"?> <!--links the footer page to the current page-->
