<?php
$db=mysqli_connect('localhost','root','','lic'); 
if(isset($_GET['Policy_Num'])){ 
// print_r($_GET['id']); 
$sql = "delete from policy_data where Policy_Num = '".$_GET['Policy_Num']."'";    
$result = mysqli_query($db,$sql);   
include "policydata.php";
}

?>