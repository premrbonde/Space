<!DOCTYPE html>
<html>
<head>
	<title>SIGN IN</title>
	<link rel="stylesheet" type="text/css" href="stylecreate.css">
</head>
<body>
     <form action="signup-check.php" method="post">
          <a href="home.html" class="ca2">〱Back</a>
     	<h2><span>SIGN IN</span>
               <button class="button1" type="reset">X</button>
          </h2>
          
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Enter Your Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Enter Your Name"><br>
          <?php }?>

          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Enter Your User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Enter Your User Name"><br>
          <?php }?>

          <?php if (isset($_GET['uaddr'])) { ?>
               <input type="text" 
                      name="uaddr" 
                      placeholder="Enter Your Address"
                      value="<?php echo $_GET['uaddr']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uaddr" 
                      placeholder="Enter Your Address"><br>
          <?php }?>

          <?php if (isset($_GET['umobno'])) { ?>
               <input type="text" 
                      name="umobno" 
                      placeholder="Enter Your Mobile Number"
                      value="<?php echo $_GET['umobno']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="umobno" 
                      placeholder="Enter Your Mobile Number"><br>
          <?php }?>

     	<input type="password" 
                 name="password" 
                 placeholder="Enter Strong Password"><br>

          <input type="password" 
                 name="re_password" 
                 placeholder="Confirm Your Password"><br>
                 
          <button class="btn1" type="submit">Sign Up</button>
          <a href="index.php" class="ca">Already have an Account?</a>
          <a href="index.php" class="ca1">Log in</a>
          <center>
          <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
          
          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
          </center>
     </form>
</body>
</html>