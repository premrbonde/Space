<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Mission</title>
  <link rel="stylesheet" href="stylemenu2.css">
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
        <h5 class="hoverr">Hover To Login Or Register</h5>
        <h2 class="logo">SP___ACE!</h2>
        <div class="dropdown-content2">
            <a href="http://localhost/WpMicroproject/index.php" style="text-decoration: none;">Login</a>
            <a href="http://localhost/WpMicroproject/signup.php" style="text-decoration: none;">Register</a>
        </div>
        </div>
        <div class="menu">
          <ul>
              <li class="dropdown"><a href="#">ABOUT&nbsp;&nbsp;US</a>
                  <div class="dropdown-content">
                  <a href="SpaceHomepage.html">Back</a>
                  <a href="Management.html">Management</a> 
                  <a href="webdev.html">Web-Dev team</a>
                  <a href="http://localhost/WpMicroproject/feedform.php">Feedback</a>
                  </div>
              </li>
              <li><a href="home.html" target="_blank">MERCHANDISE</a></li>
              <li class="dropdown"><a href="#">EXPERIMENT</a>
                  <div class="dropdown-content">
                  <a href="1st.html">Experiments</a>
                  <a href="Spa___ce.html">Quiz</a>
                  </div>
              </li>
              <li><a href="contactus.php">CONTACT</a></li>
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

    <center><div class="mission-container3">
      <div class="transparent-box3" id="lo3">
        <img src="mission.jpg" style="height:50%; width: 50%; " alt=" Mission">
        <h2 style="font-family: sans-serif; color:black;padding-top:10px">Mission</h2>
        <center><h3 style="color: black; font-size: 20px;">Hello, Not Logged In</h3></center>
      <p style="color:black;">
        At Exploring the Universe, our mission is to ignite the spirit of curiosity and scientific exploration among students, fostering a community that actively engages in experiments and research dedicated to the vast realm of space. We aim to be the premier online platform, empowering students to unravel the mysteries of the space and contribute meaningfully to the field of space sciences.<br><br><br>
           <centre><b>Our Core Values:</b></centre><br><br>

1. Inspiration through Knowledge: We strive to provide a comprehensive and accessible repository of space-related information, inspiring students to delve into the wonders of the universe.<br><br>

2. Hands-On Exploration: We encourage active participation in experiments and research projects, fostering a dynamic learning environment where theoretical knowledge is complemented by practical experience.<br><br>

3. Community Collaboration: Through collaborative initiatives, students can connect with like-minded peers, mentors, and professionals, creating a supportive network for sharing ideas and expertise.<br><br>

4. Innovation and Creativity: We celebrate innovation and creativity as essential elements of scientific progress, encouraging students to think outside the box and push the boundaries of space exploration.<br><br><br>

<centre><b>Key Features:</b></centre><br><br>

1. Educational Resources: Access a rich repository of educational content, including articles, videos, and interactive simulations, curated to deepen understanding and fuel curiosity.<br><br>

2. Experiment Hub: Engage in hands-on experiments and projects designed to enhance practical skills and provide valuable insights into various aspects of space sciences.<br><br>

3. Research Opportunities: Explore research initiatives, collaborate with experts, and contribute to ongoing projects that push the frontiers of our understanding of space.<br><br>

4. Quiz and Competitions: Participate in space-related events, competitions, and challenges that not only test your knowledge but also provide platforms for showcasing your innovative solutions.<br><br>

5. Expert Guidance: Benefit from guidance and mentorship from seasoned professionals in the field, ensuring a supportive environment for learning and growth.<br><br>

<b>Join us in our mission to unlock the mysteries of the space. Together, we aspire to inspire the next generation of space scientists and explorers. Exploring the space - where curiosity meets the universe.</b><br><br>

      </p>

      </div>
    </div></center>
  <footer class="footeri">
    <p class="rights">&copy; 2024 Sp___ace Website. All rights reserved.</p>
    </footer>
</div>
</body>
</html>