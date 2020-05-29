<?php

require "header.php";
?>

<main>
<section class="section-default">
<?php

if(isset($_SESSION['userId'])){
    echo'<p class="login-status">You are logged in!</p>';

}
else{
    echo '<p class="login-status>You are logged out!</p>';
}


?>
    </section>

</main>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      
      <link rel="stylesheet" href="static/css/base.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Frijole|Rakkas&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title>MOVING SERVICES</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  </head>


<body>

<div class="v">
   
    <div class="register"></div>
    <h1 class="ml16">MOVING SERVICES</h1>
 
  </div>
  <div class="font">
  <div class="row">
  <div class="column">
    <div class="card">
      <h3 class="service">  Let's Move Kenya</h3>
      
    </div>
  </div>

  <div class="column">
    <div class="cardr">
    <h3>Services</h3>
      <p>We offer only local services ie within Kenya </p>
      <p>We offer packing services</p>
      <p>We have a crew of seven people to help out</p>
      <p> We do all types of relocations ie offices, businesses,housing</p>
      <e>All are inclusive</e>
    </div>
  </div>
  
  <div class="column">
    <div class="cardr">
    <h3>Our rate</h3>
     
      <p class="rate"> Our rate is 150 per km</p>
    </div>
  </div>
  </div>
   
   <!-- ------------------------------------------------------------------ -->
   <div class="row">
  <div class="column">
    <div class="cardb">
      <h3 class="service">Hama Services</h3>
      
    </div>
  </div>

  <div class="column">
    <div class="cardr">
    <h3>Services</h3>
      <p>We offer both local and international services</p>
      <p>We offer packing services</p>
      <p>We only offer housing relocations </p>
      <p>We have a crew of ten people to help out</p>
      <p> All are inclusive</p>
    </div>
  </div>
  
  <div class="column">
    <div class="cardr">
    <h3>Our rate</h3>
      <p> Our rate is 200 per km</p>
    </div>
  </div>
  </div>
   <!-- ----------------------------------------------------------------------------- -->
   <div class="row">
  <div class="column">
    <div class="cardc">
      <h3  class="service">Today Movers</h3>
    
    </div>
  </div>

  <div class="column">
    <div class="cardr">
    <h3>SERVICES</h3>
      <p>We offer both local and international services</p>
      <p>We offer packing services</p>
      <p>We also do unpacking on arrival</p>
      <p>We have a crew of fifteen people to help out two of them being security guys from G4S</p>
      <p> We offer all types of relocations </p>
      <p>All are inclusive</p>
    </div>
  </div>
  
  <div class="column">
    <div class="cardr">
    
      <h3 class="service">Our Rate</h3>
      <p> Our rate is 250 per km</p>
    
    </div>
  </div>
  </div>
  </div>
   
</body>
</html>
<style>

    /* Container holding the image and the text */
    .font{
      font-family: Rakkas;
      font-size:18px;
    }
    .service{
      padding-top:100px;
    }
    .ml16 {
  
    padding: 40px 0;
    font-weight: 200;
    font-size: 1em;
    text-transform: uppercase;
    letter-spacing: 0.5em;
    overflow: hidden;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
.cardr{
  background-color:rgb(41,44,47);
  color:white;
  height:300px;
  text-align:center;
}

  .v {
    position: relative;
    text-align: center;
    color:white;

   
    
    width:  100%;
    height:  100vh;
    font-size: 60px;
    font-family: Frijole;
    background-image: url("https://images.pexels.com/photos/439741/pexels-photo-439741.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500;");
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: 100%;
    
    /* background-color: black; */
  }
  * {
  box-sizing: border-box;

}
.titles{
  text-align:center;
  padding-top:300
}

body {
  font-family: Arial, Helvetica, sans-serif;
  /* background-color:grey; */
}

/* Float four columns side by side */
.column {
  float: left;
  width: 33%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 0px;
  text-align: center;
  background-image:url("https://images.pexels.com/photos/2199293/pexels-photo-2199293.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500");
  color: black;
  height:300px;
}
.cardc {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 0px;
  text-align: center;
  background-image:url("https://images.pexels.com/photos/1003868/pexels-photo-1003868.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500");
");
  color: black;
  height:300px;
}
.cardb {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 0px;
  text-align: center;
  background-image:url("https://images.pexels.com/photos/2519392/pexels-photo-2519392.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500");
  color: black;
  height:300px;
  
}

  </style>

<script>
  var textWrapper = document.querySelector('.ml16');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
        
        anime.timeline({loop: true})
          .add({
            targets: '.ml16 .letter',
            translateY: [-100,0],
            easing: "easeOutExpo",
            duration: 1400,
            delay: (el, i) => 30 * i
          }).add({
            targets: '.ml16',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
          });
        </script>

<?php
require "footer.php";

?>