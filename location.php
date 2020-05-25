<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="static/css/styles2.css">    
    <title>Distance Between Two Cities</title>
</head>
<body>
  

    <div class="header">
  <div class="row">
    <h1>Calculate driving distance between two cities</h1>
  </div>
</div>

<div class="container">  <div class="  <div class="header">
            <div class="row">
                <h1>Calculate driving distance between two cities</h1>
            </div>
           
    </div>
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

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRodJn2P1AtQkW6kmDDgkNOHhzt6S5C5Y&libraries=places"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
</html>