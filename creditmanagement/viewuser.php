<?php include 'dbcon.php'?>

<html>
<head>
<title>
Transfer Credit</title>
<style>


#my_table1{
		margin-left: 30px;
		font-size: 19px;
		width: 480px;
		border-collapse: collapse;
		text-align: center;
	}
	td{
		padding: 9px;
		font-size: 18px;
	}
	th{
		padding: 8px;
		font-size: 20px;
	}
h1
{
color:black;}
h2
{
color:black;}
select{

color:black;
}


.center {
    text-align: center;
    
    color: black;
    width: auto;
    height: 50px;
}


.container { 
  height: 200px;
  position: relative;
color:black;
  
}

.center1 {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.center2 {
  display: flex;
  justify-content: center;
  align-items: center;

  
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="css/viewuser1.css" >
</head>

<body>
	<?php 

	if(isset($_GET['Id'])) 
	{   
    //Session Start
	session_start();	
	$_SESSION['Id'] = $_GET['Id'];
	}
	?>
	
	<div class="container1">
	<p align='right'>
<br>
<br>
<br>
<br>
<br>
	<button class='button1' onclick="redirect()">Back</button>
	</p>
	<script>
	function redirect() {
		window.location.href = "users.php";
	}
</script>
	<?php
	if(isset($_GET['errors'])){
		$error=$_GET['errors'];
		echo "<div class='alert alert-danger'>
            $error</div>";
			
	}
	if(isset($_GET['success'])){
		$success= $_GET['success'];
		echo "<div class='alert alert-success'>
           $success</div>";
	}?>
	
	    <form method="POST" action="transfercredit.php">
		
		
		<div class="head">
			<h1 style="text-align:center;">Transfer Credit</h1>
			<h2 style="text-align:center;">From:</h2>
			<?php
				$txt = $_GET['Id'];
				$result = mysqli_query($con,"SELECT * FROM users where Id=" . $txt);
				echo "<table id=\"my_table1\" border='1'>
				<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Current Credits</th>
				</tr>";

				while($row = mysqli_fetch_array($result)) 
				{
				echo "<tr>";
				echo "<td>" . $row['Id'] . "</td>";
				echo "<td>" . $row['Name'] . "</td>";
				echo "<td>" . $row['Email'] . "</td>";
				echo "<td>" . $row['Credit'] . "</td>";
				echo "</tr>";
				}
				echo "</table>";
			?>


			<h2 style="text-align:center;">Select Name to transfer the Credits:</h2>
<div class="center">
			<select class="form-control" required name="touser" id="listu1">
			<option value="">Select Users</option>
                <?php
				   // var $space = " ";
					$txt = $_GET['Id'];
                    $query = "SELECT * FROM users where Id!='".$txt."'";
                    $result = mysqli_query($con,$query);

                    while($row = mysqli_fetch_array($result))
                    {?>
                    <option value="<?php echo $row['Id'];?>"><?php echo $row['Name']; echo " "; echo " - "; echo $row['Credit'];?></option>
					<?php
                    }
				?>
            </select>
		</div>
	<div class="center2">

			<h2 style="text-align:center;"><b>Amount</b></h2>
			<br>
			<input type="text" id="amt" name="credits" required="required">
			<input name="fromtc" type="hidden" value="<?php echo $txt;?>">
			<br>
			<button class='button2' name='transfer' onclick="myfunction()" >Transfer Credits</button>
			</form>	
</div>
			<br><br><br>

			<!--<script>
			function myfunction(){
				alert();
			}
			</script>-->

		</div>
	</div>
	</div>
	<br>
	    
</div>

</body>
</html>
