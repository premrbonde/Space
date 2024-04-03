<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Management</title>
  <link rel="stylesheet" href="stylemenu2.css">
  <link rel = "stylesheet" href = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css"/>
  	<script src = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>

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
                  <a href="home.php">Back</a> 
                  <a href="webteam.php">Web-Dev team</a>
                  <a href="feedfrm.php">Feedback</a>
                  </div>
              </li>
              <li><a href="merchandise.html" target="_blank">MERCHANDISE</a></li>
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
        
          <img src="management1.webp" style="height: 30%; width:50%;" alt="Management">
          
          <p>
          <h2 style="padding-top: 5px;">Managed By:</h2>
            Mr.Prem R Bonde <br>
            Mr.Nikhil V Tandel <br>
            Ms.Sakshi A More <br>
            Ms.Lavanya M Chilivery <br>
         </p>
          <h2>Address And Location of Centre:</h2>
          <p style="margin-top: -12px;padding-bottom: 4px; color: black;">
            Dr. K. M. Vasudevan Pillai Campus, Plot No. 10, Sector 16, New Panvel East, <br>Panvel, Navi Mumbai, Maharashtra 410206 <br>
         </p>
         <center>
         <div id = "map" style = "width: 500px; height: 400px"></div>
          <script>
             var mapOptions = {
                center: [18.9902, 73.1277],
                zoom: 10
             }
             var map = new L.map('map', mapOptions);
             var layer = new L.TileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png');
             map.addLayer(layer);
             var marker = L.marker([18.9902, 73.1277]);
             marker.addTo(map);
          </script></center>
    </div>
  </div>

<footer class="footeri">
    <p class="rights">&copy; 2024 Sp___ace Website. All rights reserved.</p>
    </footer>
</div>
</body>
</html>