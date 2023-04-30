<?php 
 session_start();
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/header.css">
</head>
<header>
<div class="header">
	<div class="logo">
		<a href="index.php">Biometric Attendance</a>
	</div>
</div>
<?php
if(!$_SESSION['user']){
	header("Location: http://localhost/fingerprint/biometrics/index.php");
	exit();
}
?>

<div class="topnav" id="myTopnav">
		<div class="list-lf">
		<a href="index1.php">Users</a>
		<a href="UsersLog.php">Users Log</a>
		<a href="ManageUsers.php">Manage Users</a>
	</div>
	<div class="list-rt">
		<a href="logout.php">Log Out <?php echo $_SESSION['user'];  ?></a>
	</div>
    <a href="javascript:void(0);" class="icon" onclick="navFunction()">
	  <i class="fa fa-bars"></i></a>
</div>
</header>
<script>
	
	function navFunction() {
	  var x = document.getElementById("myTopnav");
	  if (x.className === "topnav") {
	    x.className += " responsive";
	  } else {
	    x.className = "topnav";
	  }
	}
</script>


	

	
