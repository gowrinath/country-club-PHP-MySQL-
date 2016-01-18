<!--
CSCI 688-0001              Group Project                  Spring 2015

Group: 12

Professor: Dr. Kathi Davis

Section: 1

Purpose: This page displays a successful message of the vendor 
         sign up is successful
         
-->
    <?php include "connection.php"?> <!-- connects to the database
<?php include "header.php"?> <!-- includes the header-->

<div class="panel panel-default">
<div class="panel-heading"><h2 class="panel-title">Sign up Successful</h2></div>
<div class="panel-body">  
<form method = "POST" action="vendor.php">
  <?php 
           
  if(isset($_POST['submit']))
  {
                 $vcname=$_POST["vcompanyname"];
             $vname=$_POST["vendorname"];
             $vadd=$_POST["vaddress"];
             $vcity=$_POST["vcity"];
             $vstate=$_POST["vstate"];
             $vzip=$_POST["vzip"];
             $vemail=$_POST["vemail"];
             $numbooths=$_POST["nobooths"];
             $merchandise=$_POST["merchandise"];
             
       
             $query = "insert into Vendor ( CompanyName,ContactPerson, StreetAddress, City, State, Zip, Email,NumBooths, Merchandise) VALUES ('".$vcname."','".$vname."','".$vadd."','".$vcity."','".$vstate."','".$vzip."','".$vemail."','".$numbooths."','".$merchandise."');"; // insert the data into vendor table
       
             $resultset = mysql_query($query, $conn);
       
       
       $query1="select max(RegistrationNumber) as regmaximum from Vendor;"; //retrieves the latest registration number from vendor

$resultset1=mysql_query($query1, $conn);

$regmax=mysql_fetch_array($resultset1);

$query2="select max(ShowID) as showmaximum from `Show`;"; //retrieves the latest show from the show table

$resultset2=mysql_query($query2, $conn);

$showmax=mysql_fetch_array($resultset2);


       $query3 = "insert into Vends ( RegistrationNumber, ShowID) VALUES ('".$regmax['regmaximum']."','".$showmax['showmaximum']."');"; //inserts in to the vends table

$resultset3=mysql_query($query3, $conn);
       

          }    
       ?>
    
    
    
    
    <h3>Sign up Successful!!</h3>
    
    <div class="row">
<div class="form-group col-sm-6">
<input type="submit" value= "Back" name="back" class="btn btn-success">
</div>
 </div>
 </form>
</div>
</div>
<?php include "footer.php"?>


    