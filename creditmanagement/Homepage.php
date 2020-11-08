<?php include 'dbcon.php'?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="css/home.css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body { 
  background: url('images/try3.gif') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  width: 100%
  height: auto;
}
h1 {
	font-size: 52px;
	margin-top: -7px;
	margin-left: 700px;
}
h2{
	margin-left: 845px;
	margin-top: 40px;
	font-size: 30px;
}
h4{
	font-size: 22px;
	margin-left: 730px;
	letter-spacing: 1px;
	color: #236B8E;
	text-shadow: 0px 1px;
}

</style>
</head>
<body>

<div class="header">
<br>
<h2 style="font-family:Lucida Calligraphy">Welcome To</h2>
<h1><strong>Credit Management</strong></h1>
<h4 style="font-family:MV Boli"><b>Choose a user and transfer the credits <br>&nbsp;&nbsp;&nbsp;&nbsp; from one user to another user.<b></h4>
<form action="users.php">
<button class='button1' >View Customer</button>
</form>

</div>
</body>
<div class="fixed-footer">


        <div class="container">Copyright &copy; 2020 Credit Management by Tejashwini Patil   

		</div>
    </div>

</html>
