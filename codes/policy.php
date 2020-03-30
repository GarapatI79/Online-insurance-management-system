<?php
session_start();
$db=mysqli_connect('localhost','root','','lic');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Policy Registration</title>
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
	<form method="post" action="policydata.php">
	<div class="header" style="background-color:;color:white">
	<a href="index.php"><h2><img src="logo.png" style="width:150px"> Life Insurance Corporation</h2></a>
	</div>
	<h3 style="padding-left: 550px">Policy Registration</h3>
	<div class="container"style="padding-left: 350px">
		
		<table><tr><td>
		<label for="Policy_Num"><b>Policy Number</b></label></td><td>
		<input type="text" placeholder="Enter Policy number" name="Policy_Num" required pattern="[0-9]{9}"/></td></tr><tr><td>
		<label for="Customer_Num"><b>Customer Number</b></label></td><td>
		<select name="Customer_Num">
			<?php
				$sql="select * from customer";
				$res=mysqli_query($db,$sql);
				$i=0;
				while($row=mysqli_fetch_array($res))
				{
					$i++;
			?>
			<option value="<?php echo $row['Customer_Num']?>">
				<?php echo $row['Customer_Num'] ?></option>
			<?php } ?>

		</select>
		<br></td></tr><tr><td>
		<label for="Agent_code"><b>Agent Code</b></label></td><td>
		<select name="Agent_code">
			<?php
				$sql="select * from agent";
				$res=mysqli_query($db,$sql);
				$i=0;
				while($row=mysqli_fetch_array($res))
				{
					$i++;
			?>
			<option value="<?php echo $row['Agent_code']?>">
				<?php echo $row['Agent_code'] ?></option>
			<?php } ?>

		</select>


		<br></td></tr><tr><td>
		<label for="DOC"><b>Date Of commencement</b></label></td><td>
		<input type="date" placeholder="Enter DOC" name="DOC" required><br></td></tr><tr><td>
		<label for="Product"><b>Product</b></label></td><td>
		<input type="text" placeholder="Enter Plan name" name="Product" required><br></td></tr><tr><td>
		<label for="Sum_Assured"><b>Sum Assured</b></label></td><td>
		<input type="text" placeholder="Enter Sum assured" name="Sum_Assured" required><br></td></tr><tr><td>
		<label for="Pay_Period"><b>Pay Period</b></label></td><td>
		<input type="text" placeholder="Enter Pay Period" name="Pay_Period" required><br></td></tr><tr><td>
		<label for="Ins_Period"><b>Insurance Period</b></label></td><td>
		<input type="text" placeholder="Enter Insurance Period" name="Ins_Period" required><br></td></tr><tr><td>
		<label for="Mode"><b>Premium Mode</b></label></td><td>
		<input type = "radio" name = "Mode" value = "MLY" required />Monthly
		<input type = "radio" name = "Mode" value = "YLY" required />Yearly
		<input type = "radio" name = "Mode" value = "QLY" required />Quarterly
		<input type = "radio" name = "Mode" value = "SSS" required />Single premium 
				</div>
		</td></tr>
	</table>
		<button type="submit" onclick="location.href='clientdata.php'" name="policyreg">Submit Details</button>
	</div>
</form>
</body>
</html>
