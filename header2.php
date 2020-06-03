<!-- <?php
session_start();
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon"  href="https://www.shareicon.net/data/256x256/2016/01/04/231545_home_256x256.png"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Frijole|Rakkas&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="nav-header-main">
   
<ul>
    <li><a href="contacts.php">CONTACT</a></li>
    <li><a href="about.php">ABOUT</a></li>
    <li><a href="index.php">HOME</a></li>
</ul>

<div class="header-login">

<form action="logout.php" method="post">
<a href="logout.php"> <button class="button" type="submit" ><span>logout </span></button></a>
</form>
</div>
</nav>
</body>
</header>

<style>
.button {
  border-radius: 4px;
  background-color: grey;
  border: none;
  color: #FFFFFF;
  text-align: center;
  /* font-size: 28px; */
  padding: 2px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
body{
    font-family: Rakkas;
}
.header-login{
    width: 100%;
    padding-top:1px;
 
  margin: 8px 0;
  box-sizing: border-box

}
.nav-header-main{
    background-color: rgb(41,44,47);
    font-family: Rakkas;
}
.avatar {
    vertical-align: middle;
    width: 50px;
    height: 50px;
    border-radius: 50%;
  }
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  background-color : white;
}

</style>
































<!-- 
?php
if(isset($_SESSION['userId'])){
    echo' <form action="includes/logout.inc.php" method="post">
    
    <button type="submit" name="logout-submit">logout</button>
</form>';

}
else{
    echo '   
    ';
}

?>
   
<div>
   
</div>
        

    </header>
     -->
