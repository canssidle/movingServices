
<main>
<section class="section-default">
<?php

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
require "header2.php";
?>
    </section>

</main>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon"  href="https://www.shareicon.net/data/256x256/2016/01/04/231545_home_256x256.png"/>
    <link rel="stylesheet" href="static/css/styles2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Frijole|Rakkas&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title>MOVING SERVICES</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  
    
    <title>Distance Between Two Cities</title>
</head>
<body>
<div id="map-holder">
<div class="container">
    <div id="map-canvas"></div>
</div>
</div>

<div id="main">
<div class="container">
    <div class="maintext">
        <h2>Enter the correct details to order you ride</h2>
        <h3>We would love to serve you</h3>
    </div>
    <div id="calculateform" class="form">
        <p>Use the following form to calculate the estimated travel distance and price for you.</p>
        <p class="instructions">You may search by Postcode,Street and/or City.
            <br/>For Example: Kitengela,Juja.
        </p>
        <form>
            <p class="label">From</p>
            <input id="from" class="" type="text" name="from">

            <p class="label">To</p>
            <input id="to" class="" type="text" name="to">

            <p class="label">Company of Choice</p>
            <select id="travelMode">
                <option value="driving" price="150">Let's Move Kenya</option>
                <option value="driving" price="200">Hama Services</option>
                <option value="driving" price="250">Today Movers</option>
                <!-- <option value="driving" price="1.05">Large Van</option>
                <option value="driving" price="1.15">Extra Large Van</option> -->
            </select>

            <div class="clearfix"></div>
            
            <input class="submitbtn" type="submit" value="Submit" />
           
        </form>
        <a  href="close.php"> <button>Order</button></a>
    </div>
</div>
</div><script>
      function myFunction() {
        document.getElementById("demo").innerHTML = "Hello Dear Visitor!</br> We are happy that you've chosen our website to learn programming languages. We're sure you'll become one of the best programmers in your country. Good luck to you!";
      }
    </script>

<!-- ------------------------------------------------------------------ --> 
<div class="header">
            <div class="row">
                <h1 class="view">Calculate driving distance between two cities</h1>
            </div>
    </div>

    <div class="container">
        <form>
            <!-- Location 1 -->
            <div class="row">
                <div class="location-label">
                    <label>Origin: </label>                                    
                </div>
                <div class="location-input">
                    <input type="text" id="location-1" name="origin" placeholder="Enter a start location..."> 
                </div>
            </div>
            <!-- Location 2 -->
            <div class="row">
                <div class="location-label">
                    <label>Destination: </label>
                </div>
                <div class="location-input">
                    <input type="text" id="location-2" name="destination" placeholder="Enter a last location...">
                </div>
            </div>

            <!-- Submit button -->
            <div class="row">
                <button class="button" type="button" onclick="clearRoute();">Clear</button>
                <button class="button" type="button" onclick="calcRoute();">Submit</button>
                        
            
            
            </div>
            <!-- Stats table -->                
            <div id="output" class="result-table"></div>
       </form>
                
            <div class="container-map" id="google-map"></div>   
    </div>
</div>

            <!-- Footer with dynamic year change -->
        <div class="footer">
                          
        </div>
        <body>
<!-- ---------------------------------------------------------------- -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRodJn2P1AtQkW6kmDDgkNOHhzt6S5C5Y&libraries=places"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/main2.js"></script> <script src="js/main.js"></script>
  
</html>
<!-- ------>
<style>
body{
	background: url("https://images.pexels.com/photos/439741/pexels-photo-439741.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500;");
  background-size: 100%;
		background-size: cover;
font-family: Rakkas;
font-size:15px;
}


</style>

<?php

require "footer.php";
?>
