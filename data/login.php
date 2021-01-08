<!DOCTYPE html>
<html>
<head>
	<title>Hello Bootstrap</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1" >
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/apnastyle.css">
	

	<style type="text/css">
	
body{
background-image:url("b.jpg");
}
.m
{
	margin-top: 10px;
	
}
.b
{
	margin-bottom: 10px;
}

</style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
    	<div class="col-md-3">
    			
    	</div>
    	<div class="col-md-6">
    			<h2 align="center">form</h2>
    			<form action="view.php" method="get">
    				<input name="uname" class="form-control" type="text" placeholder="Enter Username">
    				<input  name="pwd" type="password" class="form-control m" placeholder="Enter password">
    				<input type="submit" value="login" class="btn btn-primary btn-block m b">
					<a href="signup.php" target="_blank" class="btn btn-primary btn-block m b">sign up</a>
    			</form>
    	</div>

		<div class="col-md-3">
    	
    	</div>


    </div>















</div>


</body>
</html>