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
			<option value="Just Met">Just Met</option>
			<option value="Not Looking">Not Looking</option>
			<option value="Just Looking">Just Looking</option>
			<option value="Waiting 3 months">Waiting - 3 months</option>
			<option value="Waiting 6 months">Waiting - 6 months</option>
			<option value="Waiting 9 months">Waiting - 9 months</option>
			<option value="Waiting 12 months">Waiting - 12 months</option>
			<option value="Ready to start">Ready to Start Process</option>
		</select>
	</div>
	
	<div class="form-group">
		<label>Intial Contact Date:</label>
		<input id="input" input type="date" name="iniDate" class="form-control">
	</div>
	</br>
	</div>
	<button type="submit" class="btn btn-success">Submit</button> <button type="reset" class="btn btn-warning" value="Reset">Reset Form</button>
	</form>
</body>
</html>
			