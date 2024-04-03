<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Mission</title>
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
        <h5 class="hoverr">Hover To Logout</h5>
            <h2 class="logo">SP___ACE!</h2>
            <center><h6 style="color: white; font-size: 9.5px; padding-top:4px;">Hello, <?php echo $_SESSION['name']; ?></h6></center>
            <div class="dropdown-content2">
                <a href="logout.php" style="text-decoration: none;">Logout</a>
            </div>
            </div>
            <div class="menu">
                <ul>
                    <li class="dropdown"><a href="#">ABOUT&nbsp;&nbsp;US</a>
                        <div class="dropdown-content">
                        <a href="mission2.php">Mission</a>
                        <a href="management.php">Managements</a> 
                        <a href="webteam.php">Web-Dev team</a>
                        <a href="feedfrm.php">Feedback</a>
                        </div>
                    </li>
                    <li><a href="home.html" target="_blank">MERCHANDISE</a></li>
                    <li class="dropdown"><a href="#">EXPERIMENT</a>
                        <div class="dropdown-content">
                        <a href="Experiment.php">Experiments</a>
                        <a href="quiz.php">Quiz</a>
                        </div>
                    </li>
                    <li><a href="contactus2.php">CONTACT</a></li>
                    <li><a href="home.php">BACK</a></li>
                    <li><a href="Followpage2.php">FOLLOW&nbsp;&nbsp;US</a></li>
                </ul>
            </div>

            <div class="search">
                <input id="searchInput" class="srch" type="search" name="" size="16" autocomplete="off">
                <button class="btn" onclick="search()">Search</button>
            </div>
            <script src="search.js"></script>
        </div> 

    <div class="mission-container2">
    <div class="transparent-box2" id="lo2">
    <section class="privacy-policy">
        <h3>Introduction</h3>
        <p>Welcome to Space Exploration's Privacy Policy.</p></br>
        
        <h3>Information We Collect</h3>
        <p>We collect personal information such as name, email address, and phone number when you voluntarily submit it through our contact form or sign up for our newsletter.</p></br>
        
        <h3>How We Use Your Information</h3>
        <p>We use the information you provide to respond to your inquiries, send newsletters, and improve our website and services.</p></br>
        
        <h3>Sharing Your Information</h3>
        <p>We do not sell, trade, or otherwise transfer your personal information to outside parties without your consent. We may share your information with trusted third parties who assist us in operating our website or servicing you.</p></br>
        
        <h3>Security</h3>
        <p>We implement security measures to maintain the safety of your personal information.</p></br>
        
        <h3>Changes to This Privacy Policy</h3>
        <p>We may update our Privacy Policy from time to time. Any changes will be posted on this page.</p></br>
        
        <h3>Contact Us</h3>
        <p>If you have any questions about this Privacy Policy, please contact us.</p></br>
    </section>
    </div>
    </div>
    <footer class="footeri">
    <p class="rights">&copy; 2024 Sp___ace Website. All rights reserved.</p>
  </footer>
  </div>
</body>
</html>
