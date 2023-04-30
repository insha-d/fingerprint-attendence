<?php
//evide session thudaggunnu😊👌
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>login</title>
<link rel="stylesheet" type="text/css" href="css/login.css">
<script src="js/jquery-2.2.3.min.js"></script>
<script>
  $(window).on("load resize ", function() {
    var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
    $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();


</script>
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
</head><center><body>

<!-- action="logincheck.php" -->
<main>
  <section>
    <form name="login" method="post" >

<div class="topnav" id="myTopnav">
  <a href="index.php">Login</a>
    <a href="reg.php">Registration</a>
    <a href="javascript:void(0);" class="icon" onclick="navFunction()">
    <i class="fa fa-bars"></i></a>
</div>
    <div class="container">
        <div class="card">
            <a class="singup">Login</a>
            
            <div class="inputBox">
                <input type="text" name="username" required="required">
                <span>Username</span>
            </div>

            <div class="inputBox">
                <input type="password" name="password" required="required">
                <span>Password</span>
            </div>

            <input type="submit" class="enter" value="LOGIN" name="LOGIN" onsubmit="val()" />
          <p id="msg"></p>
        </div>
    </div></form>
  </section>
  </main>
<script type="text/javascript">
  function val() {
    console.log("validating started");
    <?php
// MySQL database credentials
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'facultybase';

// Connect to MySQL server
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve username and password from form submission
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Query to check if username and password match a record in the database
$sql = "SELECT * FROM faculty WHERE usrnm='$username' AND pass='$password'";
$result = mysqli_query($conn, $sql);
// Check if there is a record with the provided username and password
if (mysqli_num_rows($result) == 1) {
    // Username and password are correct
  echo "password is correct";
// Step 1: Connect to the databases
$source_db = mysqli_connect('localhost', 'root', '', 'facultybase');

// Step 2: Retrieve data
$query = "SELECT usrnm, year, sub FROM faculty WHERE usrnm='$username' AND pass='$password'";
$result = mysqli_query($source_db, $query);

// Step 3: Insert data
while ($row = mysqli_fetch_assoc($result)) {
  $_SESSION['user'] = $row['usrnm'];
  $_SESSION['sem'] = $row['year'];
  $_SESSION['sub'] = $row['sub'];
}

// Step 4: Close connections
mysqli_close($source_db);

  echo $_SESSION['user'];
 header("Location: http://localhost/fingerprint/biometrics/index1.php");
exit();
           
     
} else {
    // Username and/or password are incorrect
    echo "document.write('Invalid username or password');";
}

// Close database connection
mysqli_close($conn);
?>
  }
</script>

</body></center>
</html>
