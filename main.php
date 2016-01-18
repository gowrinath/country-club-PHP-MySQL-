<?php 
	require_once('header.php');
?>
			<div class="row">
				<div class="col-sm-12">
					<form>
						<!---------------------------Demographics----------------------------->
						<div class="panel panel-default">
							<div class="panel-heading"><h2 class="panel-title">Demographics</h2></div>
						  <div class="panel-body">  
					    	<div class="row">
								  <div class="form-group col-sm-6">
								    <label for="firstNameInput">First Name</label>
								    <input type="text" class="form-control" id="firstNameInput" placeholder="First Name" data-validation="alphanumeric" data-validation-length="max20">
								  </div>
								 	<div class="form-group col-sm-6">
								    <label for="lastNameInput">Last Name</label>
								    <input type="text" class="form-control" id="lastNameInput" placeholder="Last Name" data-validation="alphanumeric" data-validation-length="max20">
								  </div>
								</div>
					    	<div class="row">
								  <div class="form-group col-sm-6">
									  <div class="form-group">
									    <label for="phoneInput">Phone</label>
									    <input type="text" class="form-control" id="phoneInput" placeholder="Phone" data-validation="number" data-validation-length="max20">
									  </div>
									</div>
									<div class="form-group col-sm-6">
									  <div class="form-group">
									    <label for="emailInput">Email</label>
									    <input type="text" class="form-control" id="emailInput" placeholder="Email" data-validation="email" data-validation-length="max20">
									  </div>
									</div>
								</div>
							</div>
					  </div>
					  <!---------------------------Address----------------------------->
						<div class="panel panel-default">
							<div class="panel-heading"><h2 class="panel-title">Address</h2></div>
						  <div class="panel-body">
						    	<div class="row">
										<div class="form-group col-sm-12">
										  <div class="form-group">
										    <label for="streetInput">Street</label>
										    <input type="text" class="form-control" id="streetInput" placeholder="Street" data-validation="length" data-validation-length="max20">
										  </div>
										</div>
									</div>
									<div class="row">
										<div class="form-group col-sm-5">
										 	<div class="form-group">
										    <label for="cityInput">City</label>
										    <input type="text" class="form-control" id="cityInput" placeholder="City" data-validation="alphanumeric" data-validation-length="max20">
										  </div>
										</div>
								  <div class="form-group col-sm-3">
								  	<label for="stateInput">State</label>
								  	<select class="form-control col-sm-2" id="stateInput" data-validation="required">
								  		<option disabled selected> -- Select State -- </option>
								  		<option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District Of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option>
								  	</select>
									</div>
								  <div class="form-group col-sm-4">
									  <div class="form-group">
									    <label for="zipInput">Zip</label>
									    <input type="text" class="form-control" id="zipInput" placeholder="Zip" data-validation="number" data-validation-length="max20">
									  </div>
									</div>
								</div>
							</div>
					  </div>
					  <!------------------------------Quilt-------------------------------->
					  <div class="panel panel-default">
							<div class="panel-heading"><h2 class="panel-title">Address</h2></div>
						  <div class="panel-body">
						    	<div class="row">
										<div class="form-group col-sm-6">
										  <div class="form-group">
										    <label for="quiltNameInput">Quilt Name</label>
										    <input type="text" class="form-control" id="quiltNameInput" placeholder="Quilt Name" data-validation="alphanumeric" data-validation-length="max20">
										  </div>
										</div>
										<div class="form-group col-sm-6">
										  <div class="form-group">
										    <label for="descriptionInput">Description</label>
										    <input type="text" class="form-control" id="descriptionInput" placeholder="Description" data-validation="alphanumeric" data-validation-length="max30">
										  </div>
										</div>
									</div>
									<div class="row">
										<div class="form-group col-sm-6">
										 	<div class="form-group">
										    <label for="ownerInput">Owner</label>
										    <input type="text" class="form-control" id="ownerInput" placeholder="Owner" data-validation="alphanumeric" data-validation-length="max20">
										  </div>
										</div>
										<div class="form-group col-sm-6">
										  <div class="form-group">
										    <label for="dateCompletedInput">Date Completed</label>
										    <input type="text" class="form-control" id="dateCompletedInput" placeholder="Date Completed" data-validation="date" data-validation-format="yyyy-mm-dd">
										  </div>
										</div>
									</div>
									<div class="row">
									  <div class="form-group col-sm-6">
									    <label for="designerInput">Designer</label>
									    <input type="text" class="form-control" id="designerInput" placeholder="Designer" data-validation="alphanumeric" data-validation-length="max20">
										</div>
										<div class="form-group col-sm-6">
											<label>Dimensions</label>
											<div class="row">
								  			<div class="form-group col-sm-6">
								  				<input type="text" class="form-control" id="widthInput" placeholder="Width" data-validation="number" data-validation-length="max10">
								  			</div>
								  			<div class="form-group col-sm-6">
								  				<input type="text" class="form-control" id="heightInput" placeholder="Height" data-validation="number" data-validation-length="max10" >
								  			</div>
											</div>
										</div>
									</div>
									<div class="row">
									  <div class="form-group col-sm-6">
									    <label for="makerInput">Maker</label>
									    <input type="text" class="form-control" id="makerInput" placeholder="Maker" data-validation="alphanumeric" data-validation-length="max20">
										</div>
										<div class="form-group col-sm-6">
											<label for="specialInput">Quilt Category</label>
								  		<select multiple class="form-control col-sm-2" id="specialInput" data-validation="required">
								  			<option value="Trapunto">Embroidery</option>
											  <option value="Trapunto">Trapunto</option>
											  <option value="Computerized Longarm Quilting Machine">Computerized Longarm Quilting Machine</option>
											  <option value="Other">Other</option>
											</select>
										</div>
									</div>
									<div class="row">
									  <div class="form-group col-sm-6">
									    <label for="quilterInput">Quilter</label>
									    <input type="text" class="form-control" id="quilterInput" placeholder="Quilter" data-validation="alphanumeric" data-validation-length="max20">
										</div>
										<div class="form-group col-sm-6">
											<label for="typeOfQuiltInput">Type of Quilt</label>
								  		<select class="form-control" id="typeOfQuiltInput" data-validation="required">
												<option disabled selected> -- Select -- </option><optgroup label="Bedsize quilt"><option value="1">Hand quilted: Pieced, Appliqued, Mixed/other technique</option><option value="2">Pieced, Home machine quilted</option><option value="3">Appliqued, Home machine quilted</option><option value="4">Mixed/Other technique, Home machine quilted</option><option value="5">Pieced, Long arm machine quilted</option><option value="6">Appliqued, Long arm machine quilted</option><option value="7">Mixed other technique, Long arm machine quilted</option></optgroup><optgroup label="Wall  Hanging size quilt"><option value="8">Hand quilted: Pieced, Appliqued, Mixed/Other Technique</option><option value="9">Pieced, Home machine quilted</option><option value="10">Appliqued, Home machine quilted</option><option value="11">Mixed/Other Technique, Home machine quilted</option><option value="12">Pieced, Long arm machine quilted</option><option value="13">Appliqued, Long arm machine quilted</option><option value="14">Mixed other Technique, Long arm machine quilted</option></optgroup><optgroup label="Other"><option value="15">First Quilt (any size)</option><option value="16">Miniature</option><option value="17">Baby Quilt</option><option value="18">Accessories (purses, etc.)</option><option value="19">Home Fashion (table runners, etc.)</option><option value="20">Art/Innovative</option></optgroup>
											</select> 
										</div>
									</div>
									<div class="row">
									  <div class="form-group col-sm-12">
									  	<label for="quilterInput">Quilt Story</label>
											<textarea class="form-control" rows="4" name="qstory" data-validation="required"></textarea>
										</div>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-success">Submit</button>
					</form>
				</div>
			</div>
<?php 
	require_once('footer.php');
?>