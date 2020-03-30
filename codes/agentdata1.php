<?php
session_start();
$Agent_code="";
$Agent_name="";
$DOB="";
$Address="";
$Branch="";
$Pincode="";
$Contact_Num="";
$errors=array();
$db=mysqli_connect('localhost','root','','lic');
if(isset($_POST['agentreg']))
{
	$Agent_code=mysqli_real_escape_string($db,$_POST['Agent_code']);
	$Agent_name=mysqli_real_escape_string($db,$_POST['Agent_name']);
	$DOB=mysqli_real_escape_string($db,$_POST['DOB']);
	$Address=mysqli_real_escape_string($db,$_POST['Address']);
	$Branch=mysqli_real_escape_string($db,$_POST['Branch']);
	$Pincode=mysqli_real_escape_string($db,$_POST['Pincode']);
	$Contact_Num=mysqli_real_escape_string($db,$_POST['Contact_Num']);
	// //form_validation
	// if (empty($Agent_code)) { array_push($errors, "Agent code is required"); }
	// if (empty($Agent_name)) { array_push($errors, "Agent name is required"); }
	// if (empty($DOB)) { array_push($errors, "DOB is required"); }
	// if (empty($Address)) { array_push($errors, "Address is required"); }
	// if (empty($Branch)) { array_push($errors, "Branch is required"); }
	// if (empty($Pincode)) { array_push($errors, "Pincode is required"); }
	// if (empty($Contact_Num)) { array_push($errors, "your contact number is required"); }
	//only one entry of one agent 
	// $user_check_query="SELECT * FROM agent WHERE Agent_code='$Agent_code' LIMIT 1";
	// $result=mysqli_query($db,$user_check_query);
	// $user=mysqli_fetch_array($result);
	// if($user)
	// {
	// 	if($user['Agent_code']===$Agent_code)
	// 	{
	// 		array_push($errors,"Agent already registered");
	// 	}
	// }
	// if(count(errors)==0)
	// {
		$query=" INSERT INTO agent(Agent_code,Agent_name,DOB,Address,Branch,Pincode,Contact_Num) VALUES('$Agent_code','$Agent_name','$DOB','$Address','$Branch','$Pincode','$Contact_Num')";
		mysqli_query($db,$query);
		

	// }
}
$sql="select * from agent";
$result= mysqli_query($db,$sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Agent Data View</title>
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
	<div class="header" style="background-color:;color:white">
	<a href="index.php"><h2><img src="logo.png" style="width:150px"> Life Insurance Corporation</h2></a>
	</div>
	<h3 style="padding-left: 550px">Agent Portal</h3>
	<div class="container"style="padding-left: 100px">
	<table width = "100%" border = "3" cellspacing = "1" cellpadding = "1">    

		<tr>
			<th>Agent Code</th>
			<th>Agent Name</th>
			<th>DOB</th>
			<th>Address</th>
			<th>Pincode</th>
			<th>Branch</th>
			<th>Contact Number</th>
			<th colspan="2">Action</th>
		</tr>
		<?php while($row = mysqli_fetch_array($result)){?>
			<tr>
				<td><?php echo $row['Agent_code']; ?></td>
				<td><?php echo $row['Agent_name']; ?></td>
				<td><?php echo $row['DOB']; ?></td>
				<td><?php echo $row['Address']; ?></td>
				<td><?php echo $row['Pincode']; ?></td>
				<td><?php echo $row['Branch']; ?></td>
				<td><?php echo $row['Contact_Num']; ?></td>
				<td><?php echo $row['Agent_code']; ?></td>
				<td> <a href="adelete.php?id =     
					<?php echo $row['Agent_code']; ?>" onclick="return confirm('Are You Sure')">Delete    
				</a> 
				</td>
			</tr>
			<?php } ?>	
	</table>
</body>
</html>

