<!DOCTYPE html>
<html>
<head>
  <title>Client Registration</title>
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
#Male,#Female
{
	font-weight: bold;
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
	<form method="post" action="clientdata.php">
	<div class="header" style="background-color:;color:white">
	<a href="index.php"><h2><img src="logo.png" style="width:150px"> Life Insurance Corporation</h2></a>
	</div>
	<h3 style="padding-left: 550px">Client Portal</h3>
	<div class="container"style="padding-left: 350px">
		
		<table><tr><td>
		<label for="Customer_Num"><b>Customer Number</b></label></td><td>
		<input type="text" placeholder="Enter customer number" name="Customer_Num" required></td></tr><tr><td>
		<label for="First_Name"><b>First Name</b></label></td><td>
		<input type="text" placeholder="Enter first name" name="First_Name" required><br></td></tr><tr><td>
		<label for="Middle_Name"><b>Middle Name</b></label></td><td>
		<input type="text" placeholder="Enter Middle name" name="Middle_Name" required><br></td></tr><tr><td>
		<label for="Last_Name"><b>Last name</b></label></td><td>
		<input type="text" placeholder="Enter last name" name="Last_Name" required><br></td></tr><tr><td>
		<label for="Gender"><b>Gender</b></label></td><td>
		<input type="radio" name="Gender" value="Female" id="Female"><label for="Female" style="font-weight: bold;">Female</label><input type="radio" name="Gender" style="margin-left:8px" value="Male" id="Male"><label for="Male" style="font-weight: bold;">Male</label><br></td></tr><tr><td>
		<label for="DOB"><b>Date of Birth</b></label></td><td>
		<input type="date" placeholder="Enter DOB" name="DOB" required><br></td></tr><tr><td>
		<label for="Address"><b>Address</b></label></td><td>
		<input type="text" placeholder="Enter Address" name="Address" required><br></td></tr><tr><td>
		<label for="Pincode"><b>Pincode</b></label></td><td>
		<input type="text" placeholder="Enter Pincode" name="Pincode" required><br></td></tr><tr><td>
			<label for="Contact_Number"><b>Contact number</b></label></td><td>
		<input type="text" placeholder="Enter Contact number" name="Contact_Number" required><br></td></tr><tr><td>
			<label for="Mother_Name"><b>Mother Name</b></label></td><td>
		<input type="text" placeholder="Enter Mother name" name="Mother_Name" required><br></td></tr><tr><td>
			<label for="Mother_Status"><b>Mother Status</b></label></td><td>
		<input type="radio" name="Mother_Status" value="Alive" id="mAlive"><label for="mAlive" style="font-weight: bold;">Alive</label><input type="radio" name="Mother_Status" style="margin-left:8px" value="Dead" id="mDead"><label for="mDead"style="font-weight: bold;">Dead</label><br></td></tr><tr><td>
			<label for="=Father_Name"><b>Father Name</b></label></td><td>
		<input type="text" placeholder="Enter Father name" name="Father_Name" required><br></td></tr><tr><td>
			<label for="Father_Status"><b>Father Status</b></label></td><td>
		<input type="radio" name="Father_Status" value="Alive" id="fAlive"><label for="fAlive" style="font-weight: bold;">Alive</label><input type="radio" style="margin-left:8px" name="Father_Status" value="Dead" id="fDead"><label for="fDead" style="font-weight: bold;">Dead</label><br></td></tr><tr><td>
			<label for="Marital_Status"><b>Marital Status</b></label></td><td>
		<input type="radio" name="Marital_Status" value="Single" id="Single"><label for="Single" style="font-weight: bold;" style="font-weight: bold;">Single</label><input type="radio" name="Marital_Status" style="margin-left:8px" value="Married" id="Married"><label for="Married" style="font-weight: bold;">Married</label><br></td></tr><tr><td>

			<label for="Spouse"><b>Spouse</b></label></td><td>
		<input type="text" placeholder="Enter Spouse" name="Spouse" required><br></td></tr><tr><td>
	</table>
		<button type="submit" onclick="location.href='clientdata.php'" name="clientreg">Submit Details</button>
	</div>
</form>
</body>
</html>
