<?php
session_start();
$db=mysqli_connect('localhost','root','','lic');
if(isset($_POST['prem'])){
$p=$_POST['pol'];
$sql = "select * from policy_data where Policy_Num = '$p'";   
$result = mysqli_query($db,$sql);
$f=0;
}
if(isset($_GET['Policy_Num'])){ 
// print_r($_GET['id']); 
$sql = "select * from policy_data where Policy_Num = '".$_GET['Policy_Num']."'";    
$result = mysqli_query($db,$sql); 
}
?>
<html>    
    <head>    
        <title>Payment Form</title> 
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
table {
   
    margin:0px;  
}
tr,td {
    border-style: solid;
    border-width: 5px;
    border-color: #BCBCBC;
    word-wrap: break-word;
}
body
{
    background-color: #F0E8A0;
}
input[type=text]{
  width: 25%;
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
  width: 20%;
}
label
{
	
	margin:10px;
	font-size: 17px;
	font-family: cursive;
}
</style>   
    </head>    
    <body>
    <form name = "form1" action='modified.php' method = 'POST' >    
        <div class="header" style="background-color:;color:white">
    <a href="index.php"><h2><img src="logo.png" style="width:150px"> Life Insurance Corporation</h2></a>
    </div>
        <h3 style="padding-bottom:0px">Premium Reciept</h3>
           
		<div class = "container" style="padding-left: 0px">
 		   
			<?php while($row = mysqli_fetch_array($result)){?>
					<table width = "50%" style= border = "1" cellspacing = "1" cellpadding = "1"> 
 		   <th>Premium Data - Reciept Generation </th><th></th>   
                    <tr><td><label style="font-weight: bold;font-size: 20px;">Policy Number: </label></td><td><label><?php $f=1; echo $row['Policy_Num'];?></label></td></tr>
                    <br>
				    <tr><td><label style="font-weight: bold;font-size: 20px;">Customer Number: </label></td><td><label><?php echo $row['Customer_Num'];?></label></td></tr>
				    <br>
				    <tr><td><label style="font-weight: bold;font-size: 20px;">Agent Code: </label></td><td><label><?php echo $row['Agent_code'];?></label></td></tr><br>
					<tr><td><label style="font-weight: bold;font-size: 20px;">DOC: </label></td><td><label><?php echo $row['DOC'];?></label></td></tr><br>
					<tr><td><label style="font-weight: bold;font-size: 20px;">Product: </label></td><td><label><?php echo $row['Product'];?></label></td></tr></label><br>
					<tr><td><label style="font-weight: bold;font-size: 20px;">Sum Assured: </label></td><td><label><?php echo $row['Sum_Assured'];?></label></td></tr><br>
					<tr><td><label style="font-weight: bold;font-size: 20px;">Payment Period: </label></td><td><label><?php echo $row['Pay_Period'];?> years</label></td></tr><br>
					<tr><td><label style="font-weight: bold;font-size: 20px;">Insurance Period: </label></td><td><label><?php echo $row['Ins_Period'];?> years</label></td></tr><br>
  				    <input name='Pol' value="<?php echo $row['Policy_Num'];?>" hidden> 
         
				 </table>
                

			<?php
			}
			if ($f == 0){
				echo "Policy Not Found";
				echo "<a href='premium.php'>Back to search page</a>";
			}
			?>
				
            </div>    
      </form> 
    </body>    
</html>