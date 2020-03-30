<!DOCTYPE html>
<html>
<head>
	<title>
		Insurance Management System
	</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
* {
  box-sizing: border-box;
}
body
{
	background-color: #F0E8A0;
}
#intro
{
	color: black;

}

button {
  background-color:black;
  color: white;
  font-weight: bold;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
</style>
</head>
<body>
<div class="container-fluid" style="padding: 0px">
<div class="container-fluid" style="padding:0px">
	
		<p style="padding-left:0px;font-size: 50px;color:#FFD700;font-weight: bold;"><img src="logo.png" style="height:100px">Life Insurance Corporation</p>
 		<div style="background-color: black;color:white;">
		<h3>About Us</h3>
		<p style="font-size:20px;font-style: san-serif;">LIC has been one of the pioneering organizations in India who introduced the leverage of Information Technology in servicing and in their business. Data pertaining to almost 10 crore policies is being held on computers in LIC. We have gone in for relevant and appropriate technology over the years.</p></div>
</div>
<div class="row">
	<div class="col-md-2"style="margin-bottom: 8px;background-color: gray">
		<p style="color:white;font-weight:bold;padding-left:15px;padding-top: 100px">Links to Registration</p>
	</div>
	<div class="col-md-4">
		<button onclick="location.href='agent.php'">Agent Registration</button>
		<button onclick="location.href='client.php'">Client Registration</button>
		<button onclick="location.href='policy.php'">Policy Registration</button>
		<button onclick="location.href='premium.php'">Premium Registration</button>
	</div>
	<div class="col-md-2" style="margin-bottom: 8px;background-color: gray">
		<p style="color:white;font-weight:bold;padding-left:40px;padding-top: 100px">Links to Data</p>
	</div>
	<div class="col-md-4">
		<button onclick="location.href='agentdata.php'">Agents Data</button>
		<button onclick="location.href='clientdata.php'">Clients Data</button>
		<button onclick="location.href='policydata.php'">Policies Data</button>
		<button onclick="location.href='modified.php'">Premium Data</button>
	</div>
</div>

<div class="footer" style="background-color:black;color:white;font-weight:bold;padding-left: 500px;padding-top:10px;padding-bottom:5px">
	<b> Contact Us - +91 9963210702</b>
	</div>
</div>
</body>
</html>