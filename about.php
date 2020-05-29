<?php

require "header.php";
?>
 <head>
      
      <link rel="stylesheet" href="static/css/base.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Frijole|Rakkas&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title>MOVING SERVICES</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  </head>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>Learn more about us.</p>
  <p>Our customers come first</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="static/css/img/avatar2.jpeg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Canssidle Wairimu</h2>
        <p class="title">CEO & Founder</p>
        <p>I started this company in 2020 to ease the reocation process.</p>
        <p>canssidle@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="static/css/img/avatar3.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Jayden Kagiri</h2>
        <p class="title">Director</p>
        <p>I manage the companies that are signed under Moving Services .</p>
        <p>jayden@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="static/css/img/avatar2.jpeg" alt="John" style="width:100%">
      <div class="container">
        <h2>Kyler Wanja</h2>
        <p class="title">Assistant</p>
        <p>I make sure everthing works smoothly in the company and make sure everthing works im favour of our customers.</p>
        <p>kyler@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
<style>
 img {
  max-width: 80px;
  max-height: 80px;
}

body {
  font-family: Rakkas;
  font-size:20px;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}


.about-section{
  background-image:url("https://images.pexels.com/photos/439741/pexels-photo-439741.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500;");
  background-size: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
<?php
require "footer.php";

?>