<!DOCTYPE html>
<html>
<head>
  <title>login</title>
<link rel="stylesheet" type="text/css" href="css/login.css">
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


<main>
  <section>
    <form name="reg" method="post" action="regup.php">

<div class="topnav" id="myTopnav">
  <a href="index.php">Login</a>
    <a href="reg.php">Registration</a>
    <a href="javascript:void(0);" class="icon" onclick="navFunction()">
    <i class="fa fa-bars"></i></a>
</div>
    <div class="container">
        <div class="card">
            <a class="singup">REGISTER</a>

             <div class="inputBox">
                <input type="text" name="name" required="required">
                <span>Full_Name</span>
            </div> 

            <div class="inputBox">
                <input type="text" name="usrnm" required="required">
                <span>Username</span>
            </div> 

            <div class="inputBox">
                <input type="number" name="year" required="required" max="3" min="1" >
                <span>Managing Sem</span>
            </div>

            <div class="inputBox">
                <input type="text" name="sub" required="required" >
                <span>Managing Subject</span>
            </div>

            <div class="inputBox1">
                <input type="text" name="mail" required="required">
                <span class="user">Email</span>
            </div> 

            <div class="inputBox">
                <input type="password" name="pass" required="required">
                <span>Password</span>
            </div>

             <div class="inputBox">
                <input type="password" name="pass" required="required">
                <span>Conferm_Password</span>
            </div>

            <input type="submit" class="enter" name="sign up" value="Register" onsubmit="validate()" />

        </div>
    </div></form>
  </section>
  </main>

</body></center>
</html>


