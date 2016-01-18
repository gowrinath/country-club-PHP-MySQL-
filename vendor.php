<!--
CSCI 688-0001              Group Project                  Spring 2015

Group: 12

Professor: Dr. Kathi Davis

Section: 1

Purpose: Vendor page allows the vendor to signup for the show. It takes 
         input as Company Name, contact person, Address, city , state,
         zip, email, number of booths, merchandise.
         
-->

<?php 
	require_once('header.php');
?>
         <?php include "connection.php"?> <!--connects to the database-->  
         
         
            <div class="panel panel-default">
	    <div class="panel-heading"><h2 class="panel-title">Signup as Vendor</h2></div> 
	    <div class="panel-body">
        <form method = "POST" action="vendorSuccessful.php">
           
 
    
 <div class="row">
   
    <div class="form-group col-sm-6">   
       <label for="vcompanyname">Company Name</label> 
       <input type="text" class="form-control" name="vcompanyname" id="vcompanyname" placeholder="Company Name" data-validation="required" data-validation-length="max50">   <!--text field for company name -->
    </div>
 </div>
    <div class="row">
    <div class="form-group col-sm-6"> 
        <label for="vendorname">Contact Person</label> 
        <input type="text" class="form-control" id="vendorname" name="vendorname" placeholder="Contact Person" data-validation="required" data-validation-length="max50"><!--text field for contact person-->
    </div>
    </div>
    <div class="row">
    <div class="form-group col-sm-6">  
        <label for="vaddress">Street Address</label> 
        <input type="text" class="form-control"  name="vaddress" id="vaddress" placeholder="Street Address" data-validation="required" data-validation-length="max50"><!--text field for street address-->
    </div>
    </div>
    <div class="row">
    <div class="form-group col-sm-6"> 
        <label for="vcity">City</label> 
        <input type="text" class="form-control" id="vcity" name="vcity" placeholder="City" data-validation="required" data-validation-length="max50"><!--text field for city-->
    </div>
    </div>
    <div class="row">
    <div class="form-group col-sm-6"> 
        <label for="vstate">State</label> 
        <select class="form-control col-sm-2" id="vstate" name="vstate" data-validation="required"> <!--drop down list for city-->
	<option disabled selected> -- Select State -- </option>
        <option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
        </select>
    </div>
    </div>
    <div class="row">
    <div class="form-group col-sm-6">
        <label for="vzip">Zip</label> 
        <input type="text" class="form-control" id="vzip" name="vzip" placeholder="Zip" data-validation="number" data-validation-length="max5"><!--text field for zip-->
    </div>
    </div>
    <div class="row">
    <div class="form-group col-sm-6">
        <label for="vemail">Email</label> 
        <input type="text" class="form-control" id="vemail" name="vemail" placeholder="Email" data-validation="email" data-validation-length="max50"><!--text field for email-->
    </div>
    </div>
    <div class="row">
    <div class="form-group col-sm-6">
        <label for="nobooths">Number of Booths</label> 
        <input type="text" class="form-control" id="nobooths" name="nobooths" placeholder="Number of Booths" data-validation="number" data-validation-length="max2"> <!--text field for number of booths-->
    </div>    
    </div>
    <div class="row">
    <div class="form-group col-sm-6">
        <label for="merchandise">Merchandise</label> 
        <input type="text" class="form-control" id="merchandise" placeholder="Merchandise" data-validation="alphanumeric" data-validation-length="max50" name="merchandise"><!--text field for number of booths-->
    </div>
     
    </div>
            
 <input type="submit" value= "Submit" name="submit" class="btn btn-success"><br/>

        </form>
                

             
            
            </div>
            </div>
        <?php include "footer.php"?> <!--includes footer to the current page-->
   
