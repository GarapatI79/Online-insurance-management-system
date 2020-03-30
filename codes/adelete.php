<?php
$db=mysqli_connect('localhost','root','','lic'); 
if(isset($_GET['id'])){ 
// print_r($_GET['id']); 
$sql = "delete from agent where Agent_code = '".$_GET['id']."'";    
$result = mysqli_query($db,$sql);   
include "agentdata.php";
}

?>