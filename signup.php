<?php

require "header.php";
?>

<main>
   <h1>Signup</h1>
   <?php
   if(isset($_GET['error'])){
      if($_GET['error']=="emptyfields"){
         echo '<p class="signuperror">Fill in all fields</p>';
      }
      elseif($_GET['error']=="invaliduid"){
         echo '<p class="signuperror">Invalid username or email</p>';
      }
      elseif ($_GET['error']=="invaliduid"){
         echo '<p class="signuperror">Invalid username</p>';
      }
      elseif ($_GET['error']=="invalidmail"){
         echo '<p class="signuperror">Invalid E-mail</p>';
      }
      elseif ($_GET['error']=="passwordcheck"){
         echo '<p class="signuperror">Your password does not match</p>';
      }
      elseif ($_GET['error']=="usertaken"){
         echo '<p class="signuperror">Username is already taken</p>';
      }
   }
   // else if($_GET['signup']=="success"){
   //    echo '<p class="signupsuccess">Signup successful!</p>';

   // }

   ?>
<div class="form">
   <form action = "includes/signup.inc.php" method="post">
   <ul>
  <li> <input class="input" type="text" name="uid" placeholder="username"></li>
  <li> <input class="input" type="text" name="mail" placeholder="E-mail"></li>
   <li><input class="input" type="password" name="pwd" placeholder="password"></li>
   <li><input class="input" type="password" name="pwd-repeat" placeholder="repeat password"><li>
   <li class="button"><button type="submit" name="signup-submit">Signup</button><li>
   </ul>
</form>
</div>


</main>

<?php
require "footer.php";

?>
<style>
.form{
   padding-left:300px;
   padding-right:300px;

}

.card
{
  box-sizing:border-box;
}
body {
 
background-color: #fafafa;
text-align: center;
background-image:url('https://images.pexels.com/photos/1797393/pexels-photo-1797393.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');
height: 500px; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; 
}
.input {

  width:30%;
  resize: vertical;
  padding:15px;
  border-radius:205px;
  border:300;
  box-shadow:4px 4px 10px rgba(0,0,0,0.06);
  height:50px;
  
}
button{
 
 display:inline-block;
 padding:0.3em 1.2em;
 margin:0 0.3em 0.3em 0;
 border-radius:2em;
 box-sizing: border-box;
 text-decoration:none;
 font-family:'Roboto',sans-serif;
 font-weight:300;
 color:#FFFFFF;
 background-color:#4eb5f1;
 text-align:center;
 transition: all 0.2s;
}
/* a.button3:hover{
 background-color:#4095c6;
} */
@media all and (max-width:30em){
 button{
  display:block;
  margin:0.2em auto;
 }
}
}
</style>