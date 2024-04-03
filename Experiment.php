<?php 
session_start()
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="sty.css" /> 
    <title>Spa____ce</title>
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
                <li><a href="home.html" target="_blank">MERCHANDISE</a></li>
                <li class="dropdown"><a href="#">EXPERIMENT</a>
                    <div class="dropdown-content">
                    <a href="home.php">Back</a>
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
            <button class="btnss" onclick="search()" style="font-size: 9px;"> Search</button>
        </div>
        <script src="search.js"></script>
    </div> 

    <h1 class="headin2">
            <center>Experiments</center>
    </h1>
    <div class="mydiv" >
  
            <center><h1 class="headi2" style="color: black; font-family: Cambria;">Celestial Activities Experiment</h1>
            <h2 class="p11"><center>Enjoy :) </center></h2>
 
            <div id="celestialObjectSelection">
                <label><input type="radio" name="celestialObject" value="Mercury"> Mercury</label>
                <label><input type="radio" name="celestialObject" value="Venus"> Venus</label>
                <label><input type="radio" name="celestialObject" value="Earth" checked> Earth</label>
                <label><input type="radio" name="celestialObject" value="Mars"> Mars</label>
                <label><input type="radio" name="celestialObject" value="Jupiter"> Jupiter</label>
                <label><input type="radio" name="celestialObject" value="Saturn"> Saturn</label>
                <label><input type="radio" name="celestialObject" value="Uranus"> Uranus</label>
                <label><input type="radio" name="celestialObject" value="Neptune"> Neptune</label>
                <label><input type="radio" name="celestialObject" value="Star"> Star</label>
                <label><input type="radio" name="celestialObject" value="BlackHole"> Black&nbsp;Hole</label>
            </div>
        
            <button class="bt" onclick="calculateGravity()">Calculate Gravity</button>
            <button class="bt" onclick="calculateSpeed()">Calculate Speed</button>
            <button class="bt" onclick="calculateDistance()">Calculate Distance</button>
            <button class="bt" onclick="calculateWeight()">Calculate Weight</button>
            <button class="bt" onclick="calculateTime()">Calculate Time</button>
        
            <div id="resultBox">
                <p id="result"></p>
            </div>
        
            <script>
                function calculateGravity() {
                    const selectedCelestialObject = getSelectedCelestialObject();
                    const gravity = getGravityForCelestialObject(selectedCelestialObject);
                    displayResult(`Gravity on ${selectedCelestialObject}: ${gravity} m/s²`);
                }
        
                function calculateSpeed() {
                    const selectedCelestialObject = getSelectedCelestialObject();
                    const speed = getSpeedForCelestialObject(selectedCelestialObject);
                    displayResult(`Orbit speed around the Sun on ${selectedCelestialObject}: ${speed} m/s`);
                }
        
                function calculateDistance() {
                    const selectedCelestialObject = getSelectedCelestialObject();
                    const distance = getDistanceForCelestialObject(selectedCelestialObject);
                    displayResult(`Distance from ${selectedCelestialObject} to the Sun: ${distance} meters`);
                }
        
                function calculateWeight() {
                    const selectedCelestialObject = getSelectedCelestialObject();
                    const weight = calculateWeightOnCelestialObject(70, selectedCelestialObject); // Assuming weight on Earth is 70 kg
                    displayResult(`Your weight on ${selectedCelestialObject}: ${weight.toFixed(2)} kg`);
                }
        
                function calculateTime() {
                    const selectedCelestialObject = getSelectedCelestialObject();
                    const rotationPeriod = getRotationPeriodForCelestialObject(selectedCelestialObject);
                    displayResult(`One day on ${selectedCelestialObject} is approximately ${rotationPeriod} seconds`);
                }
        
                function getSelectedCelestialObject() {
                    return document.querySelector('input[name="celestialObject"]:checked').value;
                }
        
                function getGravityForCelestialObject(celestialObject) {
                    // You can customize gravity values for each celestial object
                    const gravityValues = {
                        "Mercury": 3.7,
                        "Venus": 8.87,
                        "Earth": 9.8,
                        "Mars": 3.72076,
                        "Jupiter": 24.79,
                        "Saturn": 10.44,
                        "Uranus": 8.69,
                        "Neptune": 11.15,
                        "Star": 274,
                        "BlackHole": 9.81e12 // A hypothetical value for illustration
                    };
                    return gravityValues[celestialObject] || 0; // Default to 0 if the celestial object is not found
                }
        
                function getSpeedForCelestialObject(celestialObject) {
                    // You can customize speed values for each celestial object
                    const speedValues = {
                        "Mercury": 47400,
                        "Venus": 35020,
                        "Earth": 29784,
                        "Mars": 24007,
                        "Jupiter": 13069,
                        "Saturn": 9660,
                        "Uranus": 6810,
                        "Neptune": 5470,
                        "Star": 0, // Speed for a star is set to 0 for illustration
                        "BlackHole": 0 // Speed for a black hole is set to 0 for illustration
                    };
                    return speedValues[celestialObject] || 0; // Default to 0 if the celestial object is not found
                }
        
                function getDistanceForCelestialObject(celestialObject) {
                    // You can customize distance values for each celestial object
                    const distanceValues = {
                        "Mercury": 57.9e9,
                        "Venus": 108.2e9,
                        "Earth": 149.6e9,
                        "Mars": 227.9e9,
                        "Jupiter": 778.5e9,
                        "Saturn": 1.429e12,
                        "Uranus": 2.871e12,
                        "Neptune": 4.495e12,
                        "Star": 0, // Distance for a star is set to 0 for illustration
                        "BlackHole": 0 // Distance for a black hole is set to 0 for illustration
                    };
                    return distanceValues[celestialObject] || 0; // Default to 0 if the celestial object is not found
                }
        
                function getRotationPeriodForCelestialObject(celestialObject) {
                    // You can customize rotation period values for each celestial object
                    const rotationPeriodValues
                    = {
                        "Mercury": 1407360,
                        "Venus": 20995200,
                        "Earth": 86400,
                        "Mars": 88642,
                        "Jupiter": 35760,
                        "Saturn": 32760,
                        "Uranus": 61200,
                        "Neptune": 57600,
                        "Star": 86400, // Assume a day for a star (for illustration)
                        "BlackHole": 0 // Rotation period for a black hole is set to 0 for illustration
                    };
                    return rotationPeriodValues[celestialObject] || 0; // Default to 0 if the celestial object is not found
                }
        
                function calculateWeightOnCelestialObject(weightOnEarth, celestialObject) {
                    const gravityOnCelestialObject = getGravityForCelestialObject(celestialObject);
                    return weightOnEarth * gravityOnCelestialObject / 9.8;
                }
        
                function displayResult(result) {
                    document.getElementById("result").innerText = result;
                }
            </script>
            </div>
            <div class="wgcal">
                <div class="wgcalm">
                <h2 style="color: black">Weight and Gravity Calculator</h2>
                
                            <label for="weight">Enter Your Weight (in kilograms or pounds):</label>
                            <input type="number" id="weight" placeholder="Enter your weight" required>
                            <br><br>
                
                            <label for="celestialBody">Select a Celestial Body:</label>
                            <select id="celestialBody">
                                <option value="Mercury">Mercury</option>
                                <option value="Venus">Venus</option>
                                <option value="Earth">Earth</option>
                                <option value="Mars">Mars</option>
                                <option value="Jupiter">Jupiter</option>
                                <option value="Saturn">Saturn</option>
                                <option value="Uranus">Uranus</option>
                                <option value="Neptune">Neptune</option>
                                <option value="Star">Star</option>
                                <option value="BlackHole">Black Hole</option>
                            </select>
                            <br><br>
                
                        <button onclick="calculateWeight()">Calculate</button>
                        <button onclick="clearResult1()">Clear</button></div>
                        <div id="resultBox1">
                            <p id="result1"></p>
                        </div>
                        
                
                        <script>
                              function calculateWeight() {
                                     var weight = parseFloat(document.getElementById("weight").value);
                                     var celestialBody = document.getElementById("celestialBody").value;
                                     var gravity;
                
                  switch (celestialBody) {
                    case "Mercury":
                      gravity = 3.7;
                      break;
                    case "Venus":
                      gravity = 8.87;
                      break;
                    case "Earth":
                      gravity = 9.81;
                      break;
                    case "Mars":
                      gravity = 3.71;
                      break;
                    case "Jupiter":
                      gravity = 24.79;
                      break;
                    case "Saturn":
                      gravity = 10.44;
                      break;
                    case "Uranus":
                      gravity = 8.69;
                      break;
                    case "Neptune":
                      gravity = 11.15;
                      break;
                    case "Star":
                      gravity = 274; // Example gravity of a star, can be replaced with actual value
                      break;
                    case "BlackHole":
                      gravity = 1e12; // Example gravity of a black hole, can be replaced with actual value
                      break;
                    default:
                      gravity = 0;
                  }
                
                            var calculatedWeight = (weight * gravity / 9.81).toFixed(2);
                
                            document.getElementById("result1").innerHTML = "<strong>Your weight on " + celestialBody + " is approximately " + calculatedWeight + " kilograms.</strong>";
                }
                function clearResult1() {
                    document.getElementById("weight").value = "";
                    document.getElementById("result1").innerHTML = "";
                }
                            
                </script>
                </div>
                
                <div class="tempcal">
                <div class="temcalm">
                <h2>Temperature Converter</h2>
                
                <label for="temperature">Enter Temperature in Celsius:</label>
                <input type="number" id="temperature" placeholder="Enter temperature" required>
                <br><br>
                
                <label for="celestialBody1">Select a Celestial Body:</label>
                <select id="celestialBody1">
                  <option value="Mercury">Mercury</option>
                  <option value="Venus">Venus</option>
                  <option value="Earth">Earth</option>
                  <option value="Mars">Mars</option>
                  <option value="Jupiter">Jupiter</option>
                  <option value="Saturn">Saturn</option>
                  <option value="Uranus">Uranus</option>
                  <option value="Neptune">Neptune</option>
                  <option value="Star">Star</option>
                  <option value="BlackHole">Black Hole</option>
                </select>
                <br><br>
                
                <button onclick="calculateTemperature()">Calculate</button>
                <button onclick="clearResult2()">Clear</button>
                
                </div>
                <div id="resultBox2">
                    <p id="result2"></p>
                </div>
                
                <script>
                function calculateTemperature() {
                  var temperatureCelsius = parseFloat(document.getElementById("temperature").value);
                  var celestialBody1 = document.getElementById("celestialBody1").value;
                  var temperature;
                
                  switch (celestialBody1) {
                    case "Mercury":
                      temperature = (temperatureCelsius * 1.85) + 46;
                      break;
                    case "Venus":
                      temperature = (temperatureCelsius * 1.06) + 465;
                      break;
                    case "Earth":
                      temperature = temperatureCelsius;
                      break;
                    case "Mars":
                      temperature = (temperatureCelsius * 0.53) + 20;
                      break;
                    case "Jupiter":
                      temperature = (temperatureCelsius * 1.32) - 88;
                      break;
                    case "Saturn":
                      temperature = (temperatureCelsius * 0.88) - 139;
                      break;
                    case "Uranus":
                      temperature = (temperatureCelsius * 0.68) - 195;
                      break;
                    case "Neptune":
                      temperature = (temperatureCelsius * 0.70) - 200;
                      break;
                    case "Star":
                      temperature = (temperatureCelsius * 1000); // Example temperature for a star, can be replaced with actual value
                      break;
                    case "BlackHole":
                      temperature = "Cannot calculate temperature inside a black hole";
                      break;
                    default:
                      temperature = "Invalid selection";
                  }
                
                  document.getElementById("result2").innerHTML = "<strong>Temperature on " + celestialBody1 + ": " + temperature.toFixed(3) + " Celsius</strong>";
                }
                function clearResult2() {
                    document.getElementById("temperature").value = "";
                    document.getElementById("result2").innerHTML = "";
                }
                </script>
                
                </div> 
            <footer class="footeri">
                <p class="rights">&copy; 2024 Sp___ace Website. All rights reserved.</p>
            </footer>
</body>

</html>