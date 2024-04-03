<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web-Dev Team</title>
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
                  <a href="home.php">Back</a>
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
              <li><a href="privacy2.php">PRIVACY</a></li>
              <li><a href="Followpage2.php">FOLLOW&nbsp;&nbsp;US</a></li>
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
      <img src="webdevteam.jpg" style="height:50%; width:50%;" alt="">
      <h2 style="font-family: sans-serif; color:black;padding-top:10px">Web-Dev Team</h2>
      <p style="color: black; font-family: Arial, sans-serif;">This site is produced for Science Mission Directorate by the Spa___ce team of Pillai's College of Engineering. <br>
        <h4 style="padding-top: 10px; padding-bottom: 10px;">Responsible Spa___ce Official: Team Spa___ce </h4>
        Home, Contactus, Privacy Page Manager: Nikhil Tandel <br>
        Merchandise Page Manager:Prem Bonde <br>
        Project Manager:Sakshi More <br>
        About us Manager:Lavanya Chilivery <br>
     </p>
    </div>
  </div>

  <footer class="footeri">
    <p class="rights">&copy; 2024 Sp___ace Website. All rights reserved.</p>
  </footer>
</div>
</body>
</html>