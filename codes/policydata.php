<?php
session_start();
$Policy_Num="";
$Customer_Num="";
$Agent_code="";
$DOC="";
$Product="";
$Sum_Assured="";
$Pay_Period="";
$Ins_Period="";
$Mode="";
$errors=array();
$db=mysqli_connect('localhost','root','','lic');
if(isset($_POST['policyreg']))
{
	$Policy_Num=mysqli_real_escape_string($db,$_POST['Policy_Num']);
	$Customer_Num=mysqli_real_escape_string($db,$_POST['Customer_Num']);
	$Agent_code=mysqli_real_escape_string($db,$_POST['Agent_code']);
	$DOC=mysqli_real_escape_string($db,$_POST['DOC']);
	$Product=mysqli_real_escape_string($db,$_POST['Product']);
	$Sum_Assured=mysqli_real_escape_string($db,$_POST['Sum_Assured']);
	$Pay_Period=mysqli_real_escape_string($db,$_POST['Pay_Period']);
	$Ins_Period=mysqli_real_escape_string($db,$_POST['Ins_Period']);
	$Mode=mysqli_real_escape_string($db,$_POST['Mode']);
	// //form_validation
	// if (empty($Policy_Num)) { array_push($errors, "Policy number is required"); }
	// if (empty($Customer_Num)) { array_push($errors, "Customer name is required"); }
	// if (empty($Agent_code)) { array_push($errors, "Agent code is required"); }
	// if (empty($DOC)) { array_push($errors, "DOC is required"); }
	// if (empty($Product)) { array_push($errors, "Product is required"); }
	// if (empty($Sum_Assured)) { array_push($errors, "sum assured is required"); }
	// if (empty($Pay_Period)) { array_push($errors, "pay period is required"); }
	// if (empty($Ins_Period)) { array_push($errors, "Insurance period is required"); }
	// //only one entry of one agent 
	// $user_check_query="SELECT * FROM policy_data WHERE Policy_Num='$Policy_Num' LIMIT 1";
	// $result=mysqli_query($db,$user_check_query);
	// $user=mysqli_fetch_array($result);
	// if($user)
	// {
	// 	if($user['Policy_Num']===$Policy_Num)
	// 	{
	// 		array_push($errors,"Policy number already in use");
	// 	}
	// }
	// if(count(errors)==0)
	// {
		$query=" INSERT INTO policy_data(Policy_Num,Customer_Num,Agent_code,DOC,Product,Sum_Assured,Pay_Period,Ins_Period) VALUES('$Policy_Num','$Customer_Num','$Agent_code','$DOC','$Product','$Sum_Assured','$Pay_Period','$Ins_Period')";
		mysqli_query($db,$query);
		if($Mode=='MLY'){
			$pre = $Sum_Assured/($Ins_Period*12);
			$ld = date('Y-m-d', strtotime($DOC. ' + 1 months'));
		}
		else if ($Mode=='QLY'){
			$pre = $Sum_Assured/($Ins_Period*4);
			$ld = date('Y-m-d', strtotime($DOC. ' + 3 months'));
			
		}
		else if ($Mode=='YLY'){
			$pre = $Sum_Assured/($Ins_Period);
			$ld = date('Y-m-d', strtotime($DOC. ' +  1 years'));
		}
		else if ($Mode=='SSS'){
			$pre = $Sum_Assured;
			$ld = $DOC;
		}
	
	// else if(count(errors)>0)
	// {
		
 //  		include('errors.php');  
	// }
	$query1="insert into premium(Policy_Num,Premium,Mode,Last_date) values($Policy_Num,$pre,'$Mode','$ld')";
	mysqli_query($db,$query1);
	$query2="insert into unpaid_premium(Policy_Num,Fine,Lateness) values($Policy_Num,0,0)";
	mysqli_query($db,$query2);

}
   
$sql = "select * from policy_data";    
$result = mysqli_query($db,$sql);    
?>    
<html>    
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
	<h3 style="padding-left: 550px">Policy Portal</h3>
	<div class="container"style="padding-left: 100px">
    
	   <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Policy Number</td>    
                <td>Customer Number</td>    
                <td>Agent code</td>    
                <td>DOC</td>    
                <td>Product</td>    
                <td>Sum Assured</td>    
                <td>Payment Period</td>    
                <td>Installmet period</td>    
				<td>Premium Data</td>
                <td colspan = "2">Action</td>    
            </tr>  
	<?php    
    
		while($row = mysqli_fetch_object($result)){    
    
	   			$mystring="premiumdata.php?Policy_Num=".$row->Policy_Num;
   				$mystring1="pdelete.php?Policy_Num=".$row->Policy_Num;

	?>  
			<tr>  
				<td>  
					<?php echo $row->Policy_Num;?>  
				</td>  
				<td>  
					<?php echo $row->Customer_Num;?>  
				</td>  
				<td>  
					<?php echo $row->Agent_code;?>  
				</td>  
				<td>  
					<?php echo $row->DOC;?>  
				</td>  
				<td>  
					<?php echo $row->Product;?>  
				</td>  
				<td>  
					<?php echo $row->Sum_Assured;?>  
				</td>  
				<td>  
					<?php echo $row->Pay_Period;?>  
				</td>  
				<td>  
					<?php echo $row->Ins_Period;?>  
				</td>
				<td>  
					<a href="<?php echo $mystring ?>">Premium Data </a>
				</td>				
				<td> <a href="<?php echo $mystring1 ?>" >Delete</a></td>  
			</tr>  
		<?php } ?>  			
        </table>   		
    </body>    
</html>