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
</style>   
    </head>    
    <body>    
        <div class="header" style="background-color:;color:white">
    <a href="index.php"><h2><img src="logo.png" style="width:150px"> Life Insurance Corporation</h2></a>
    </div>
        <h3 style="padding-left: 550px">Premium Registration</h3>
        <form name = "form1" action='viewpremium.php' method = 'POST' enctype = "multipart/form-data" >    
			<div class = "container" style="padding-left: 350px">
				<div class = "form_group">    
                    <label>Policy Number:</label>    
                    <input type = "text" name = "pol" value = "" required pattern="[0-9]{9}" />
					
                </div>
                <div class = "form_group">    
                    <button type = "submit" name="prem"> Submit</button>       
                    <button type = "reset">Reset</button>
                </div>
				 
            </div>    
        </form>    
    </body>    
</html>    