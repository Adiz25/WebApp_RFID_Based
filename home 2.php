<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<style>
		html {
			font-family: Arial;
			display: inline-block;
			margin: 0px auto;
			text-align: center;
		}

		ul.topnav {
			list-style-type: none;
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color: #4CAF50;
			width: 70%;
            font-family: Futura;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #3e8e41;}

		ul.topnav li a.active {background-color: #333;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}
		
		img {
			display: block;
			margin-left: auto;
			margin-right: auto;
		} 
        .header div{
            background-color: #f1f1f1;
            padding: 20px;
            margin-left: 20px;   
        }
		.footer {
  			background-color: #F1F1F1;
  			width: 100%;
  			padding: 15px;
  			margin-bottom: 30px;
			margin-top:200PX;
			}	
		</style>
		
		<title>MU Bus Device</title>
	</head>
	
	<body>
		
		<div style="margin:20; padding:20">
          <img  src="mu.png" width="300">
      </div>
	  
	<div style="margin:20; padding:20">
          
      </div>
		        <ul class="topnav">
			        <li><a class="active" href="home.php">Home</a></li>
			        <li><a href="bus data.php">Bus Data</a></li>
			        <li><a href="device registration.php">Issue GPS Device</a></li>
					<li><a href="GPS device datalog.php">GPS Device Data</a></li>
					<li><a href="read tag.php">Student Datalog</a></li>
					<li><a href="read tag.php">Driver Datalog</a></li>
					<li><a href="read tag.php">Live Bus Traking</a></li>
		        </ul>
        <br>
        
        <h2 style="font-family: Comfortaa;margin-left: 20px">Welcome to Dashboard</h2>
        <hr>

		<div style="border:1px solid black; margin:20px; padding:20px; float:center">
          <img src="RFID.jpg" width="500">
		  <u><h1>Features:</h1></u>
		  <h3>You can issue a new card for the student.</h3>
		  <h3>You can manage a student Database.</h3>
		  <h3>You can view and manage student logs</h3>
		  <h3>You can delete or update student' data.</h3>
		  <h3>You can know the live status of the student.</h3>
	  </div>

	</body>
</html>