<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="sty2.css" /> 
    <title>Quiz</title>
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
                <li><a href="merchandise.html" target="_blank">MERCHANDISE</a></li>
                <li class="dropdown"><a href="#">EXPERIMENT</a>
                    <div class="dropdown-content">
                    <a href="Experiment.php">Experiments</a>
                    <a href="home.html">Back</a>
                    </div>
                </li>
                <li><a href="contactus2.php">CONTACT</a></li>
                <li><a href="privacy2.php">PRIVACY</a></li>
                <li><a href="Followpage2.php">FOLLOW&nbsp;&nbsp;US</a></li>
            </ul>
        </div>

        <div class="search">
            <input id="searchInput" class="srch" type="search" name="" size="16" autocomplete="off">
            <button class="btns" onclick="search()" style="font-size: 9px;">Search</button>
        </div>
        <script src="search.js"></script>
    </div> 
    <h1 class="headin">
        <center>Quiz</center>
</h1>
    <div class="mydiv" >
        
        <center><h1 class="headi" style="color: black; font-family: Cambria;">Astronomy Explorer</h1>
            <h2 class="p11"><center>Enjoy :) </center></h2>
       
        <button class="bt" onclick="navigateTo('space')">Space</button>
        <button class="bt" onclick="navigateTo('solar_system')">Solar System</button>
        <button class="bt" onclick="navigateTo('milky_way')">Milky Way</button>
        <button class="bt" onclick="navigateTo('stars')">Stars</button>
        <button class="bt" onclick="navigateTo('black_holes')">Black Holes</button>
    
        <script>
            function navigateTo(category) {
                const spaceURL = 'Space.html';
                const solarSystemURL = 'Q.html';
                const milkyWayURL = 'Milky way.html';
                const starsURL = 'stars.html';
                const blackHolesURL = 'blackhole.html';
    
                switch (category) {
                    case 'space':
                        window.location.href = spaceURL;
                        break;
                    case 'solar_system':
                        window.location.href = solarSystemURL;
                        break;
                    case 'milky_way':
                        window.location.href = milkyWayURL;
                        break;
                    case 'stars':
                        window.location.href = starsURL;
                        break;
                    case 'black_holes':
                        window.location.href = blackHolesURL;
                        break;
                    default:
                        break;
                }
            }
        </script>
    </div>
    <footer class="footeri">
        <p class="rights">&copy; 2024 Sp___ace Website. All rights reserved.</p>
    </footer>
</body>
</html>