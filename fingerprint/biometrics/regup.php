<?php
  // require'connectDB.php';
   $conn = mysqli_connect("localhost", "root", "", "facultybase");
   if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        $name =  $_REQUEST['name'];
        $username = $_REQUEST['usrnm'];
        $pass = $_REQUEST['pass'];
        $email = $_REQUEST['mail'];
        $year=$_REQUEST['year'];
        $sub=$_REQUEST['sub'];

         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO faculty VALUES ('$name','$username','$year','$sub','$email','$pass')";


         if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
          header("Location: http://localhost/fingerprint/biometrics/index.php");
exit();
 
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);



?>