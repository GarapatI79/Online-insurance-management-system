<!DOCTYPE html>
<html>
<head>
  <title>Agent Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
* {
  box-sizing: border-box;
}
body
{
	background-color: #F0E8A0;
}
input[type=text]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: green;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  font-weight: bold;
  cursor: pointer;
  width: 50%;
}
</style>
<body>
	<form method="post" action="agentdata.php">
	<div class="header" style="background-color:;color:white">
	<a href="index.php"><h2><img src="logo.png" style="width:150px"> Life Insurance Corporation</h2></a>
	</div>
	<h3 style="padding-left: 550px">Agent Portal</h3>
	<div class="container"style="padding-left: 350px">
		
		<table><tr><td>
		<label for="Agent_code"><b>Agent Code</b></label></td><td>
		<input type="text" placeholder="Enter agent code" name="Agent_code" required></td></tr><tr><td>
		<label for="Agent_name"><b>Agent Name</b></label></td><td>
		<input type="text" placeholder="Enter agent name" name="Agent_name" required><br></td></tr><tr><td>
		<label for="DOB"><b>Date Of Birth</b></label></td><td>
		<input type="date" placeholder="Enter DOB" name="DOB" required><br></td></tr><tr><td>
		<label for="Address"><b>Address</b></label></td><td>
		<input type="text" placeholder="Enter Address" name="Address" required><br></td></tr><tr><td>
		<label for="Pincode"><b>Pincode</b></label></td><td>
		<input type="text" placeholder="Enter Pincode" name="Pincode" required><br></td></tr><tr><td>
		<label for="Branch"><b>Branch</b></label></td><td>
		<input type="text" placeholder="Enter Branch" name="Branch" required><br></td></tr><tr><td>
		<label for="Contact_Num"><b>Contact Number</b></label></td><td>
		<input type="text" placeholder="Enter contact number" name="Contact_Num" required><br></td></tr>
	</table>
		<button type="submit" onclick="location.href='clientdata.php'" name="agentreg">Submit Details</button>
	</div>
</form>
</body>
</html>
