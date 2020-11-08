<?php include 'dbcon.php'?>
<?php

$user = "select * from users ";

$result=mysqli_query($con,$user);
$row_count=mysqli_num_rows($result);

?>


<!DOCTYPE html>
<html>
<head>
   <title>
		ViewUser
    </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" rel="stylesheet" href="css/users1.css" >
	<style>
	body{
		
	}
.fixed-footer{
        width: 100%;
        position: fixed;        
        background: #333;
        padding: 10px 0;
        color: #fff;
		margin-left: -8px;
		height: 20px;
    }
.fixed-footer{
        bottom: 0;
    }
    .container{
        width: 80%;
        margin: 0 auto; /* Center the DIV horizontally */
		text-align: center;
    }

	</style>
    </head>
	
	<body>
	<ul>

	

	<li><a class="active" href="transferhistory.php"><b>Transfer History</b></a></li>
	<li><a href="Homepage.php"><b>Home</b></a></li>
	</ul>
<hr>

	
	<br>
        <h1><centre>User Details</centre></h1>
	<?php
		echo "<table id=\"my_table3\" border='1'>
		<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Email Id</th>
		<th>Credit</th>
		<th>Action</th>
		</tr>";
		
		while($row = mysqli_fetch_assoc($result))
		{
		echo "<tr>";
		echo "<td>" . $row['Id'] . "</td>";
		echo "<td>" . $row['Name'] . "</td>";
		echo "<td>" . $row['Email'] . "</td>";
		echo "<td>" . $row['Credit'] . "</td>";
		//echo "<td><input class='button1' type='submit' value='View'/></td>";
		echo "<td><a class='text-white' href='viewuser.php?Id= ".$row['Id']." '><button class='button1'>Transfer Credit</button></a></td>";
		echo "</tr>";
		}
		echo "</table>";
	?>
		<br><br>
		
	</div>

    </div>

	</div>

	<br><br>
	</body>
<div class="fixed-footer">
        <div class="container">Copyright &copy; 2020 Credit Management by Tejashwini Patil   
		
		</div>
</html>

