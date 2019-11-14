<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <title>R.O.S.E.S.</title>
 
</head>
<body>
	<div class ="container">
			<form id="form" method="post" action="#">
	<div class = "form-group">
		<label for="text">Contact First Name:</label>
		<input type="text" class="form-control" name="fname" placeholder="Enter Contact First Name...">
	</div>
	<div class = "form-group">
		<label for="text">Contact Last Name:</label>
		<input type="text" class="form-control" name="lname" placeholder="Enter Contact Last Name...">
	</div>
	<div class = "form-group">
		<label for="text">Primary Phone:</label>
		<input type="text" class="form-control" name="phone" placeholder="Enter Contact Phone...">
	</div>
	<div class = "form-group">
		<label for="text">Contact Email:</label>
		<input type="text" class="form-control" name="email" placeholder="Enter Contact Email...">
	</div>
	<div class = "form-group">
		<label for="sel1">Status:</label>
		<select name="constatus" id="sel1" class="form-control">
			<option value="" disabled selected>Please select one...</option>
			<option value="PreApp">Pre-Approval</option>
			<option value="inspection">Inspection</option>
			<option value="Appraisal">Appraisal</option>
			<option value="DueDill">Due Diligence</option>
			<option value="ContractSent">Contract Sent</option>
			<option value="ContractBind">Contract Binding</option>
			<option value="AwaitingClosing">Awaiting Closing</option>
			<option value="closed">Closed</option>
		</select>
	</div>
	
	<div class="form-group">
		<label>Intial Contact Date:</label>
		<input id="input" input type="date" name="iniDate" class="form-control">
	</div>
	<div class="form-group">
		<label>Projected Closing Date:</label>
		<input id="input" input type="date" name="iniDate" class="form-control">
	</div>
	</br>
	</div>
	
	<div class ="container">
			<form id="form" method="post" action="#">
	<div class = "form-group">
		<label for="sel1">Area:</label>
		<select name="constatus" id="sel1" class="form-control">
			<option value="" disabled selected>Please select one...</option>
			<option value="Barrow">Barrow</option>
			<option value="Bartow">Bartow</option>
			<option value="Butts">Butts</option>
			<option value="Carroll">Carroll</option>
			<option value="Clayton">Clayton</option>
			<option value="Cobb">Cobb</option>
			<option value="Coweta">Coweta</option>
			<option value="DeKalb">DeKalb</option>
			<option value="Douglas">Douglas</option>
			<option value="Fayette">Fayette</option>
			<option value="Forsyth">Forsyth</option>
			<option value="Fulton">Fulton</option>
			<option value="Gwinnett">Gwinnett</option>
			<option value="Hall">Hall</option>
			<option value="Haralson">Haralson</option>
			<option value="Heard">Heard</option>
			<option value="Henry">Henry</option>
			<option value="Jasper">Jasper</option>
			<option value="Lamar">Lamar</option>
			<option value="Meriwether">Meriwether</option>
			<option value="Morgan">Morgan</option>
			<option value="Newton">Newton</option>
			<option value="Paulding">Paulding</option>
			<option value="Pickens">Pickens</option>
			<option value="Pike">Pike</option>
			<option value="Rockdale">Rockdale</option>
			<option value="Spalding">Spalding</option>
			<option value="Walton">Walton</option>
		</select>
	</div>
	<div class = "form-group">
		<label for="sel1">Home Type:</label>
		<select name="constatus" id="sel1" class="form-control">
			<option value="" disabled selected>Please select one...</option>
			<option value="PreApp">Ranch</option>
			<option value="inspection">Split Level</option>
			<option value="Appraisal">Townhome</option>
			<option value="DueDill">Duplex</option>
			<option value="ContractSent">Condo</option>
			<option value="ContractBind">Apartment</option>
			<option value="AwaitingClosing">Section 8</option>
		</select>
	</div>
	<div class = "form-group">
		<label for="text">Number of Beds:</label>
		<input type="text" class="form-control" name="lname" placeholder="Number of Beds...">
	</div>
	<div class = "form-group">
		<label for="text">Number of Baths:</label>
		<input type="text" class="form-control" name="phone" placeholder="Number of Baths...">
	</div>

	<div class = "form-group">
		<label for="sel1">Status:</label>
		<select name="constatus" id="sel1" class="form-control">
			<option value="" disabled selected>Please select one...</option>
			<option value="PreApp">Pre-Approval</option>
			<option value="inspection">Inspection</option>
			<option value="Appraisal">Appraisal</option>
			<option value="DueDill">Due Diligence</option>
			<option value="ContractSent">Contract Sent</option>
			<option value="ContractBind">Contract Binding</option>
			<option value="AwaitingClosing">Awaiting Closing</option>
			<option value="closed">Closed</option>
		</select>
	</div>
	<label for="sel1">Extras:</label>
	<label class="checkbox-inline">
      <input type="checkbox" value="">Basement
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" value="">3 Car Garage
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" value="">Pool/Hot Tub
    </label>
	</br>
	</div>
	<button type="submit" class="btn btn-success">Submit</button> <button type="reset" class="btn btn-warning" value="Reset">Reset Form</button>
	</form>
</body>
</html>
			