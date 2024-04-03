<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="stylelogin.css">
    <script>
        setTimeout(function() {
            var usernameField = document.getElementById('uname');
            var passwordField = document.getElementById('password');
            var loginButton = document.getElementById('loginButton');

            usernameField.removeAttribute('disabled');
            passwordField.removeAttribute('disabled');
            loginButton.removeAttribute('disabled');
        }, 60000); 

        function disableFields() {
            var usernameField = document.getElementById('uname');
            var passwordField = document.getElementById('password');
            var loginButton = document.getElementById('loginButton');

            usernameField.setAttribute('disabled', 'disabled');
            passwordField.setAttribute('disabled', 'disabled');
            loginButton.setAttribute('disabled', 'disabled');
        }
    </script>
</head>
<body>
    <form action="login.php" method="post">
        <a href="SpaceHomepage.html" class="ca2">〱Back</a>
        <h2><span>LOGIN</span>
            <button class="button1" type="reset">X</button>
        </h2>
        <label>User Name</label>
        <input type="text" id="uname" name="uname" placeholder="Enter Your User Name"<?php if (isset($_GET['disabled'])) echo ' disabled'; ?>><br>

        <label>Password</label>
        <input type="password" id="password" name="password" placeholder="Enter Your Password"<?php if (isset($_GET['disabled'])) echo ' disabled'; ?>><br>

        <button id="loginButton" class="btn1" type="submit"<?php if (isset($_GET['disabled'])) echo ' disabled'; ?>>Login</button>
        <a href="signup.php" class="ca">Don't have an Account?</a>
        <a href="signup.php" class="ca1">Sign up</a>
        
        <?php if (isset($_GET['error'])) { ?>
            <center><p class="error"><?php echo $_GET['error']; ?></p></center>
        <?php } ?>
     </form>
</body>
</html>

