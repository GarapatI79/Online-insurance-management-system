<?php
$db=mysqli_connect('localhost','root','','lic'); 
if(isset($_GET['id'])){ 
// print_r($_GET['id']); 
$sql = "delete from customer where Customer_num = '".$_GET['id']."'";    
$result = mysqli_query($db,$sql);   
include "clientdata.php";
}

?>