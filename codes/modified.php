<?php    
 session_start();
 $db=mysqli_connect('localhost','root','','lic');  
  
$pn=$_POST['Pol'];
$pay=$_POST['pay'];
if($pay=='Yes'){
	$d=date("Y-m-d");
	$r=time()%(100000000000);
	$query="insert into paid_premium(Receipt_Num,Receipt_Date,Policy_Num) values('$r','$d','$pn')";
	mysqli_query($db,$query) or die($query."Can't dbect to Query...");
	$sql1="select * from premium";
	$result1 = mysqli_query($db,$sql1);
	while($row1=mysqli_fetch_array($result1)){
		if($row1['Policy_Num']=$pn){
			if ($row1['Mode']=='MLY'){
				$ld = date('Y-m-d', strtotime($d. ' + 1 months'));
			}
			else if ($row1['Mode']=='QLY'){
				$ld = date('Y-m-d', strtotime($d. ' + 3 months'));
			}
			else if ($row1['Mode']=='YLY'){
				$ld = date('Y-m-d', strtotime($d. ' +  1 years'));
			}
		}
	}
	$query2="update premium set last_date= '$ld' where Policy_Num='$pn'";
	mysqli_query($db,$query2) or die($query2."Can't dbect to Query...");
	$query3="update unpaid_premium set Fine=0,Lateness=0 where Policy_Num='$pn' ";
	mysqli_query($db,$query3) or die($query3."Can't dbect to Query...");
}
else if($pay=='No'){
	$t = time();
	$now=$t;
	$sql="select * from premium";
	$result = mysqli_query($db,$sql);
	$i=0;
	while($row=mysqli_fetch_array($result)){
		$i++;
		if($row['Policy_Num'] == $pn){
			$ld=$row['Last_date'];
		}
	}
	$your_date = strtotime($ld);
	if($now>$your_date){
	$datediff = $now-$your_date;}
	$late= round($datediff / (60 * 60 * 24));
	$f=$late*50;
	$query1="insert into unpaid_premium(Policy_Num,Fine,Lateness) values('$pn','$f','$late')";
	mysqli_query($db,$query1);
}

$sql = "select * from paid_premium";    
$result = mysqli_query($db,$sql);    
$sql1 = "select * from unpaid_premium";
$result1 = mysqli_query($db,$sql1);  
?>    
<html>
<style type="text/css">
* {
  box-sizing: border-box;
}
table {
   
    margin:0px;  
}
tr,td {
    border-style: solid;
    border-width: 2px;
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
    <body>
	<center>    
	<h1> Premium details</h1>
	<h2> Paid Premiums </h2>
        <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Receipt Number</td>    
                <td>Receipt Date</td>    
                <td>Policy_Num</td>    
				<td>Premium</td>    
				<td>Mode</td>    
				<td>Last Date</td>    
            </tr>  
	<?php    
    
		while($row = mysqli_fetch_array($result)){    
    
    
	?>  
			<tr>  
				<td>  
					<?php echo $row['Receipt_Num'];?>  
				</td>  
				<td>  
					<?php echo $row['Receipt_Date'];?>  
				</td>  
				<td>  
					<?php echo $row['Policy_Num'];?>  
				</td>  
				<td>  
					<?php
					$sql2 = "select * from premium";
					$result2 = mysqli_query($db,$sql2);    
					while($row2 = mysqli_fetch_array($result2)){
						if($row2['Policy_Num']==$row['Policy_Num'])
							echo $row2['Premium'];
					}	
					?>  
				</td>  
				<td>  
					<?php
					$sql2 = "select * from premium";
					$result2 = mysqli_query($db,$sql2);    
					while($row2 = mysqli_fetch_array($result2)){
						if($row2['Policy_Num']==$row['Policy_Num'])
							echo $row2['Mode'];
					}	
					?>  
				</td>  
				<td>  
					<?php
					$sql2 = "select * from premium";
					$result2 = mysqli_query($db,$sql2);    
					while($row2 = mysqli_fetch_array($result2)){
						if($row2['Policy_Num']==$row['Policy_Num'])
							echo $row2['Last_date'];
					}	
					?>  
				</td>  
			</tr> 
		<?php }?>
        </table>
		<h2> Unpaid Premiums </h2>
        <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Policy_Num</td>    
				<td>Premium</td>    
				<td>Mode</td>    
				<td>Last Date</td>    
				<td>Fine</td>
				<td>Lateness</td>
            </tr>  
	<?php    
    
		while($row1 = mysqli_fetch_array($result1)){    
    
    
	?>  
			<tr>  
				<td>  
					<?php echo $row1['Policy_Num'];?>  
				</td>  
				<td>  
					<?php
					$sql2 = "select * from premium";
					$result2 = mysqli_query($db,$sql2);    
					while($row2 = mysqli_fetch_array($result2)){
						if($row1['Policy_Num']==$row2['Policy_Num'])
							echo $row2['Premium'];
					}	
					?>  
				</td>  
				<td>  
					<?php
					$sql2 = "select * from premium";
					$result2 = mysqli_query($db,$sql2);    
					while($row2 = mysqli_fetch_array($result2)){
						if($row1['Policy_Num']==$row2['Policy_Num'])
							echo $row2['Mode'];
					}	
					?>  
				</td>  
				<td>  
					<?php
					$sql2 = "select * from premium";
					$result2 = mysqli_query($db,$sql2);    
					while($row2 = mysqli_fetch_array($result2)){
						if($row2['Policy_Num']==$row1['Policy_Num'])
							echo $row2['Last_date'];
					}	
					?>  
				</td>  
				<td>  
					<?php echo $row1['Fine'];?>  
				</td>  
				<td>  
					<?php echo $row1['Lateness'];?>  
				</td>  
				
			</tr> 
		<?php }?>
        </table>
    </body>    
</html>