<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['send']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

require 'PHPMailer\Exception.php';
require 'PHPMailer\PHPMailer.php';
require 'PHPMailer\SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'nikhiltandel2802@gmail.com';                     //SMTP username
    $mail->Password   = 'kqyktahbknewusou';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('nikhiltandel2802@gmail.com', 'Contact Form');
    $mail->addAddress($email, 'Sender');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body = "Sender Name: $name <br> Sender Email: $email <br> Message: $message" ;

    $mail->send();
        header("Location: contactus.php?msg=Message sent successfully.");
        exit();
    } catch (Exception $e) {
        header("Location: contactus.php?msg=Failed to send message. Please try again later.");
        exit();
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="stylemenu.css">
  <style>
    @media (min-width: 900px) {
    .spacecontains{
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 97.5px;
    }
    
    .followsec{
        margin-top: 5px;
        margin-left: 10px;
    }    
    
    canvas {
      border: 2px solid #fff;
      border-radius: 50%; 
      height: 40px;
      width: 40px;      
    }
    .canvalogo{
        padding-left: 13px;
        float: left;
        padding-top: 28px;
    }
}
    </style>
    <script src="contactvalid.js"></script>
</head>
<body>
  <div class="main">
    <div class="navbar">
        <div class="icon">
            <div class="canvalogo">
            <canvas id="spaceCanvas" width="150" height="150"></canvas>

        <script>
            const canvas = document.getElementById('spaceCanvas');
            const ctx = canvas.getContext('2d');
      
            ctx.fillStyle = '#000';
            ctx.fillRect(0, 0, canvas.width, canvas.height);
      
            for (let i = 0; i < 200; i++) {
                const x = Math.random() * canvas.width;
                const y = Math.random() * canvas.height;
                const radius = Math.random() * 2;
                ctx.beginPath();
                ctx.fillStyle = '#fff';
                ctx.arc(x, y, radius, 0, Math.PI * 2);
                ctx.fill();
            }
      
            ctx.beginPath();
            ctx.fillStyle = '#4a4a4a';
            ctx.arc(canvas.width / 2, canvas.height / 2, 50, 0, Math.PI * 2);
            ctx.fill();
            ctx.closePath();
      
          ctx.beginPath();
          ctx.strokeStyle = '#fff';
          ctx.lineWidth = 3;
          ctx.ellipse(canvas.width / 2, canvas.height / 2, 70, 20, Math.PI / 4, 0, Math.PI * 2);
          ctx.stroke();
          ctx.closePath();
      
          ctx.beginPath();
          ctx.fillStyle = '#ffcc00';
          ctx.moveTo(canvas.width / 2 - 20, canvas.height / 2 + 30);
          ctx.lineTo(canvas.width / 2, canvas.height / 2 - 40);
          ctx.lineTo(canvas.width / 2 + 20, canvas.height / 2 + 30);
          ctx.fill();
          ctx.closePath();
        </script>
        </div>
        <h5 class="hoverr">Hover To Login Or Register</h5>
        <h2 class="logo">SP___ACE!</h2>
        <div class="dropdown-content2">
            <a href="index.php" style="text-decoration: none;">Login</a>
            <a href="signup.php" style="text-decoration: none;">Register</a>
        </div>
        </div>
        
        <div class="menu">
                <ul>
                    <li class="dropdown"><a href="#">ABOUT&nbsp;&nbsp;US</a>
                        <div class="dropdown-content">
                        <a href="Mission.php">Mission</a>
                        <a href="Management.html">Managements</a> 
                        <a href="webdev.html">Web-Dev team</a>
                        <a href="feedform.php">Feedback</a>
                        </div>
                    </li>
                    <li><a href="merchandise.html" target="_blank">MERCHANDISE</a></li>
                    <li class="dropdown"><a href="#">EXPERIMENT</a>
                        <div class="dropdown-content">
                        <a href="1st.html">Experiments</a>
                        <a href="Spa___ce.html">Quiz</a>
                        </div>
                    </li>
                    <li><a href="home.html">BACK</a></li>
                    <li><a href="privacy.html">PRIVACY</a></li>
                    <li><a href="Followpage.html">FOLLOW&nbsp;&nbsp;US</a></li>
                </ul>
            </div>

            <div class="search">
                <input id="searchInput" class="srch" type="search" name="" size="16" autocomplete="off">
                <button class="btn" onclick="search()">Search</button>
            </div>
            <script src="search.js"></script>
        </div> 

  <div class="mission-container">
    <div class="transparent-box" id="lo">
      <img src="cu.png" style="height:50px; width:50px; margin-top:-5px;" alt="">
      <h2>Get in Touch</h2>
        <section class="contact-info">
        <h1 style="text-align: center;margin-top: -10px; font-size: 25px">Contact Information</h1>
        <h3 id="hed1" style="margin-top: -4px;">Email: contact@spaceexploration.com</h3>
        <h3 id="hed3">Phone: +1 (123) 456-7890</h3>
        <h3 id="hed3">Address: 123 Space Avenue, Galaxy City, Universe</h3></br>
        </section>

      <section class="contact-form">
        <form action="" method="post">
            <div class="form-group">
                <label>Name:&nbsp;&nbsp;&nbsp;</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="form-group">
                <label>Email:&nbsp;&nbsp;&nbsp;</label>
                <input type="text" id="email" name="email">
            </div>
            <div class="form-group">
                <label>Subject:</label>
                <input type="text" id="subject" name="subject">
            </div>
            <div class="form-group">
                <label>Message:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <textarea id="message" name="message" rows="3"></textarea>
            </div>
            <button type="submit" class="btn1" name="send" onclick="return validateEmptyFields() && validateEmail() && validateMessageLength() && validateNameLength() && validateSubjectLength()">Send Message</button>
            <?php if (isset($_GET['msg'])) { ?>
     		<p id="mess" class="mesage"><?php echo $_GET['msg']; ?></p>
     	    <?php } ?>
        </form>
    </section>
    </div>
  </div>

  <footer class="footeri">
    <p class="rights">&copy; 2024 Sp___ace Website. All rights reserved.</p>
  </footer>
</div>
</body>
</html>