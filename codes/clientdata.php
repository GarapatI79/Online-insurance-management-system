<?php
session_start();
$Customer_Num="";
$First_Name="";
$Middle_Name="";
$Last_Name="";
$Gender="";
$DOB="";
$Address="";
$Pincode="";
$Contact_Number="";
$Mother_Name="";
$Mother_Status="";
$Father_Name="";
$Father_Status="";
$Marital_Status="";
$Spouse="";
$errors=array();
$db=mysqli_connect('localhost','root','','lic');
if(isset($_POST['clientreg']))
{
$Customer_Num=mysqli_real_escape_string($db,$_POST['Customer_Num']);
$First_Name=mysqli_real_escape_string($db,$_POST['First_Name']);;
$Middle_Name=mysqli_real_escape_string($db,$_POST['Middle_Name']);;
$Last_Name=mysqli_real_escape_string($db,$_POST['Last_Name']);;
$Gender=mysqli_real_escape_string($db,$_POST['Gender']);;
$DOB=mysqli_real_escape_string($db,$_POST['DOB']);;
$Address=mysqli_real_escape_string($db,$_POST['Address']);;
$Pincode=mysqli_real_escape_string($db,$_POST['Pincode']);;
$Contact_Number=mysqli_real_escape_string($db,$_POST['Contact_Number']);;
$Mother_Name=mysqli_real_escape_string($db,$_POST['Mother_Name']);;
$Mother_Status=mysqli_real_escape_string($db,$_POST['Mother_Status']);;
$Father_Name=mysqli_real_escape_string($db,$_POST['Father_Name']);;
$Father_Status=mysqli_real_escape_string($db,$_POST['Father_Status']);;
$Marital_status=mysqli_real_escape_string($db,$_POST['Marital_Status']);;
$Spouse=mysqli_real_escape_string($db,$_POST['Spouse']);
	// 	//form_validation
	// if (empty($Customer_Num)) { array_push($errors, "Customer name is required"); }
	// if (empty($First_Name)) { array_push($errors, "First name is required"); }
	// if (empty($Middle_Name)) { array_push($errors, "Middle name is required"); }
	// if (empty($Last_Name)) { array_push($errors, "last name is required"); }
	// if (empty($Gender)) { array_push($errors, "gender is required"); }
	// if (empty($Address)) { array_push($errors, "Address is required"); }
	// if (empty($Pincode)) { array_push($errors, "Pincode is required"); }
	// if (empty($Contact_Number)) { array_push($errors, "your contact number is required"); }
	// if (empty($Mother_Name)) { array_push($errors, "Mother name is required"); }
	// if (empty($Mother_Status)) { array_push($errors, "Mother status is required"); }
	// if (empty($Father_Name)) { array_push($errors, "Father name is required"); }
	// if (empty($Father_Status)) { array_push($errors, "Father Status is required"); }
	// if (empty($Marital_status)) { array_push($errors, "Marital status is required"); }
	// if (empty($Spouse)) { array_push($errors, "Spouse is required"); }


	// //only one entry of one agent 
	// $user_check_query="SELECT * FROM customer WHERE Customer_Num='$Customer_Num' LIMIT 1";
	// $result=mysqli_query($db,$user_check_query);
	// $user=mysqli_fetch_array($result);
	// if($user)
	// {
	// 	if($user['Customer_Num']===$Customer_Num)
	// 	{
	// 		array_push($errors,"Agent already registered");
	// 	}
	// }
	// if(count(errors)==0)
	// {
		$query=" INSERT INTO customer(Customer_Num, First_Name, Middle_Name, Last_Name, Gender, DOB, Address, Pincode,Contact_Number, Mother_Name, Mother_Status, Father_Name, Father_Status, Marital_status, Spouse) VALUES('$Customer_Num', '$First_Name', '$Middle_Name', '$Last_Name', '$Gender', '$DOB', '$Address', '$Pincode','$Contact_Number', '$Mother_Name', '$Mother_Status', '$Father_Name', '$Father_Status', '$Marital_status', '$Spouse')";
		mysqli_query($db,$query);
		

	// }
	// else if(count(errors)>0)
	// {
		
 //  		include('errors.php');  
	// }


}
$sql="select * from customer";
$result= mysqli_query($db,$sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Client Data View</title>
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
	<h3 style="padding-left: 550px">Client Portal</h3>
	<div class="container"style="padding-left: 100px">
	<table width = "100%" border = "3" cellspacing = "1" cellpadding = "1">    

		<tr>
			<th>Customer Number</th>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Last Name</th>
			<th>Gender</th>
			<th>DOB</th>
			<th>Address</th>
			<th>Pincode</th>
			<th>Mother Name</th>
			<th>Mother Status</th>
			<th>Father Name</th>
			<th>Father Status</th>
			<th>Marital Status</th>
			<th>Spouse</th>
			<th colspan="2">Action</th>
		</tr>
		<?php while($row = mysqli_fetch_array($result)){ 
			$mystring="cdelete.php?id=".$row['Customer_Num'];
			?>
			<tr>
			<td><?php echo $row['Customer_Num']; ?></td>
			<td><?php echo $row['First_Name']; ?></td>
			<td><?php echo $row['Middle_Name']; ?></td>
			<td><?php echo $row['Last_Name']; ?></td>
			<td><?php echo $row['Gender']; ?></td>
			<td><?php echo $row['DOB']; ?></td>
			<td><?php echo $row['Address']; ?></td>
			<td><?php echo $row['Pincode']; ?></td>
			<td><?php echo $row['Mother_Name']; ?></td>
			<td><?php echo $row['Mother_Status']; ?></td>
			<td><?php echo $row['Father_Name']; ?></td>
			<td><?php echo $row['Father_Status']; ?></td>
			<td><?php echo $row['Marital_status']; ?></td>
			<td><?php echo $row['Spouse']; ?></td>
			<td> <a href="<?php echo $mystring ?>" onclick="return confirm('Are You Sure')">Delete    
			</a></td>
			</tr>
			<?php } ?>	
	</table>

</body>
</html>

