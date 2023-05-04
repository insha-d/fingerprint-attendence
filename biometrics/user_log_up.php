<table cellpadding="0" cellspacing="0" border="0">
  <tbody>
    <?php

      session_start();
      //Connect to database
      require'connectDB.php';
    //   foreach ($_POST as $key => $value) {
    //     echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>";
    // }
      if (isset($_POST['log_date'])) {
        if ($_POST['date_sel'] != 0) {
            $_SESSION['seldate'] = $_POST['date_sel'];
        }
        else{
            $_SESSION['seldate'] = date("Y-m-d");
        }
      }
      
      if ($_POST['select_date'] == 1) {
          $_SESSION['seldate'] = date("Y-m-d");
      }
      else if ($_POST['select_date'] == 0) {
          $seldate = $_SESSION['seldate'];
      }
      

 $sql="UPDATE users_logs SET sub=? WHERE checkindate='$seldate' AND sub='undefined'";
                   $result = mysqli_stmt_init($conn);
                   if (!mysqli_stmt_prepare($result, $sql)) {
                       echo "SQL_Error_insert_logout1";
                       exit();
                   }
                   else{
                       mysqli_stmt_bind_param($result, "s", $_SESSION['sub']);
                       mysqli_stmt_execute($result);
                   }

     $sql = "SELECT * FROM users_logs WHERE checkindate='$seldate' ORDER BY id";
      $result = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($result, $sql)) {
          echo '<p class="error">SQL Error</p>';
      }
      else{
        mysqli_stmt_execute($result);
          $resultl = mysqli_stmt_get_result($result);
        if (mysqli_num_rows($resultl) > 0){
            while ($row = mysqli_fetch_assoc($resultl)){
      ?>
                  <TR>
                  <TD><?php echo $row['id'];?></TD>
                  <TD><?php echo $row['username'];?></TD>
                  <TD><?php echo $row['sub'];?></TD>
                  <TD><?php echo $row['serialnumber'];?></TD>
                  <TD><?php echo $row['fingerprint_id'];?></TD>
                  <TD><?php echo $row['checkindate'];?></TD>
                  <TD><?php echo $row['timein'];?></TD>
                  <TD><?php echo $row['timeout'];?></TD>
                  </TR>
    <?php
            }   
        }
      }
    ?>
  </tbody>
</table>