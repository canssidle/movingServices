<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon"  href="https://www.shareicon.net/data/256x256/2016/01/04/231545_home_256x256.png"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="nav-header-main">
        <img src="static/img/mlogo.png" alt="Avatar" class="avatar">
            <!-- <a class="header-logo" href = "index.php">
                <img src="img/mlogo.png" alt="logo">
</a> -->
<ul>
    <li><a href="contacts.php">CONTACT</a></li>
    <li><a href="about.php">ABOUT</a></li>
    <li><a href="index.php">HOME</a></li>
</ul>

<div class="header-login">
<from action= "includes/login.inc.php" method ="post">
<input type = "text" name = "mailuid" placeholder= 'E-mail/Username'>
<input type = "password" name="pwd" placeholder="Password">
<button type="submit" name= "login-submit">login</button>
</form>
<a href = "signup.php" class="header-signup">Signup</a>
<form action="includes/logout.inc.php" method="post">
<button type="submit" name="logout-submit">logout</button>
</form>
</div>
</nav>
</header>

<style>
nav{
    background-color:white;
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
