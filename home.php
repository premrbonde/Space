<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Sp___ace Website</title>
    <link rel="stylesheet" href="style.css" >
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
                        <a href="Management.html">Managements</a> 
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

        <section class="upcontainer">
            <div class="spacecontains">
                <a href="#" class="icon-earth" id="earth-image" style="background-color: transparent;" onclick="displayEarthInfo()">
                    <img src="nav_earth.png" alt="Earth Icon" style="width: 130px; height: 125px;">
                    <span  class="earthtext">Earth</span>
                </a>                  
                <a href="#" class="icon-sun"  style="background-color: transparent;" onclick="displaySunInfo()">
                    <img src="nav_sun.png" alt="Sun Icon" style="width: 135px; height: 125px;">
                    <span  class="suntext">Sun</span>
                </a>
                <a href="#" class="icon-solarsystem" style="background-color: transparent;" onclick="displaySolarsysInfo()">
                    <img src="nav_solarsystem.png" alt="Solar System Icon" style="width: 130px; height: 125px;">
                    <span  class="solartext">Solar System</span>
                </a>
                <a href="#" class="icon-universe" style="background-color: transparent;" onclick="displayUniverseInfo()">
                    <img src="nav_space.png" alt="Universe Icon" style="width: 135px; height: 125px;">
                    <span  class="unitext">Universe</span>
                </a>
                <a href="#" class="icon-science"  style="background-color: transparent;" onclick="displayScinTechInfo()">
                    <img src="nav_science.png" alt="Science Technology Icon" style="width: 137px; height: 125px;">
                    <span  class="sattext">Science And Tech</span>
                </a>
            </div>
        </section>

        <center><div class="container" id="infoContainer">
            <h2 class="gamestext">GAMES</h2>
                <a href="cosgame1.html" class="cosgame" target="_blank">
                    <img src="game1.jpg" alt="Game 1" style="width: 180px; height: 180px; border-radius: 5px; border: 2px solid rgba(255, 255, 255, 0.705);">
                    <span class="games">Clash Of Space</span>
                </a>
                <a href="stellargame2.html" class="sgame" target="_blank">
                    <img src="game2.jpg" alt="Game 2" style="width: 180px; height: 180px; border-radius: 5px; border: 2px solid rgba(255, 255, 255, 0.705);">
                    <span class="games">Stellar Game</span>
                </a>
                <iframe width="510" height="290" src="https://www.youtube.com/embed/LspOh-os6s8?si=a8O5ilkuUcVg5Aee" frameborder="0" allowfullscreen></iframe>
                
                <div class="bluecontain" id="bContainer">
                    <div class="artChallengeMonth">
                        <h2>This Month's Art Challenge Selections</h2>
                    </div>
                    <div class="artworks">
                        <img src="artworks\artwork1.jpg" alt="Artwork 1">
                        <img src="artworks\artwork2.jpg" alt="Artwork 2">
                        <img src="artworks\artwork3.jpg" alt="Artwork 3">
                        <img src="artworks\artworks3.jpg" alt="Artwork 4">
                        <img src="artworks\artwork4.jpg" alt="Artwork 5">
                        <img src="artworks\artwork5.jpg" alt="Artwork 6">
                        <img src="artworks\artwork6.jpg" alt="Artwork 7">
                        <img src="artworks\artwork7.jpg" alt="Artwork 8">
                        <img src="artworks\artwork8.jpg" alt="Artwork 9">
                        <img src="artworks\artwork9.jpg" alt="Artwork 10">
                        <img src="artworks\artwork10.jpg" alt="Artwork 11">
                    </div>
                </div>
            </div>
        </center>

            <script src="info.js"></script>

            <footer class="footer">
            <div class="skinnyfooter">
                <span class="contactweb"><a id="mail-link" href="mailto:spacemicroproject.gmail.com">Click To Contact SP___ACE</a></span>
               
                <span class="last-updated">
                    Last Updated: January 25th, 2024</span>
                <span class="rights">
                    &copy; 2024 Sp___ace Website. All rights reserved.</span>
                <script>
                    var prefix = "mail";
                    prefix = prefix + "to:";
                    prefix = prefix + "info";
                    prefix = prefix + "@";
                    $("#mail-link").attr('href', prefix + $('#mail-link').attr('href'));
                </script>
            </div>
            </footer>
    </div>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>