<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <title>R.O.S.E.S.</title>
 
</head>
<body>
<?php include 'nav.html'?>
<h2>Contacts</h2>
<div class ="row">
	<div class="col-sm-6">

<!--<div class ="row">-->
	<div class="col-sm-6">
		<div class="card bg-secondary text-white">
			<a href ="#newContact" data-toggle="modal"><div class="card-body">
				<h5 align="center" class="text-white">New Contacts</h5>
			</div>
	</div></a>
	</div>
	&nbsp
	<div class="col-sm-6">
		<div class="card bg-secondary text-white">
			<a href ="#tblContact" data-toggle="modal"><div class="card-body">
				<h5 align="center" class="text-white">Current Contacts</h5>
			</div>
	</div></a>
	</div>
<!--</div>-->
&nbsp
<!--
<div class ="row">
	<div class="col-sm-6">
		<div class="card bg-secondary text-white">
			<a href ="#newSystem" data-toggle="modal"><div class="card-body">
				<h5 align="center" class="text-white">New BES Cyber Systems</h5>
			</div>
	</div></a>
	</div>
	<div class="col-sm-6">
		<div class="card bg-secondary text-white">
			<a href ="#tblSystem" data-toggle="modal"><div class="card-body">
				<h5 align="center" class="text-white">BES Cyber Systems</h5>
			</div>
	</div></a>
	</div>
</div>
&nbsp
<div class ="row">
	<div class="col-sm-6">
		<div class="card bg-secondary text-white">
			<a href ="#newCyberAsset" data-toggle="modal"><div class="card-body">
				<h5 align="center" class="text-white">New BES Cyber Assets, PCAs, EACMS, PACS</h5>
			</div>
	</div></a>
	</div>
	<div class="col-sm-6">
		<div class="card bg-secondary text-white">
			<a href ="#tblCyberAsset" data-toggle="modal"><div class="card-body">
				<h5 align="center" class="text-white">BES Cyber Assets, PCAs, EACMS, PACS</h5>
			</div>
	</div></a>
	</div>
</div>-->
</div>
<div class="col-sm-6">
				<?php include "uptasks.php" ?>
	</div>
</div>
<!--Existing Contact-->
<div id="tblContact" class="modal fade">
<div class="modal-dialog modal-lg">
<div class="modal-content">

	<div class="modal-header">
	<h3>Contact In Play</h3>
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	</div>
	<div class="modal-body">
		<?php include 'tblContact.php'?>
	</div>
	<div class ="modal-footer">
	
	</div>
</div>
</div>
</div>
<!--Existing System-->
	<div id="tblSystem" class="modal fade">
<div class="modal-dialog modal-lg">
<div class="modal-content">

	<div class="modal-header">
	<h3>System List</h3>
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	</div>
	<div class="modal-body">
		<?php include 'tblSystem.php'?>
	</div>
	<div class ="modal-footer">
	
	</div>
</div>
</div>
</div>
<!--Existing Cyber Asset-->
	<div id="tblCyberAsset" class="modal fade">
<div class="modal-dialog modal-lg">
<div class="modal-content">

	<div class="modal-header">
	<h3>Cyber Asset List</h3>
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	</div>
	<div class="modal-body">
		<?php include 'tblCybAsset.php'?>
	</div>
	<div class ="modal-footer">
	
	</div>
</div>
</div>
</div>
<!--New Contact-->
<div id="newAsset" class="modal fade">
<div class="modal-dialog modal-lg">
<div class="modal-content">

	<div class="modal-header">
	<h3>New Contact Form</h3>
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	</div>
	<div class="modal-body">
		<?php include 'NewAsset.php'?>
	</div>
	<div class ="modal-footer">
	
	</div>
</div>
</div>
</div>
<!--New System-->
<div id="newSystem" class="modal fade">
<div class="modal-dialog modal-lg">
<div class="modal-content">

	<div class="modal-header">
	<h3>New System Form</h3>
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	</div>
	<div class="modal-body">
		<?php include 'NewSystem.php'?>
	</div>
	<div class ="modal-footer">
	
	</div>
</div>
</div>
</div>
<!--New Cyber Asset-->
<div id="newCyberAsset" class="modal fade">
<div class="modal-dialog modal-lg">
<div class="modal-content">

	<div class="modal-header">
	<h3>New Cyber Asset Form</h3>
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	</div>
	<div class="modal-body">
		<?php include 'NewCyberAsset.php'?>
	</div>
	<div class ="modal-footer">
	
	</div>
</div>
</div>
</div>

</body>
</html>