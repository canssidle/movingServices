<?php

// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: details.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: details.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="shortcut icon"  href="https://www.shareicon.net/data/256x256/2016/01/04/231545_home_256x256.png"/>
    <link rel="stylesheet" href="static/css/base.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Frijole|Rakkas&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title>MOVING SERVICES</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>    
</body>
</html>
<style>


.card
{
    float:center;
  box-sizing:border-box;
  background-color:white;
  padding-left:50px;
  padding-top:30px;
  padding-bottom:30px;
  width:50%;
}
/* body {
 
background-color: #fafafa;
text-align: center;
background-image:url('https://images.pexels.com/photos/1797393/pexels-photo-1797393.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');
height: 500px; /* You must set a specified height */
  /* background-position: center; 
  background-repeat: no-repeat; 
  background-size: cover; 
  padding-top:50px; */
   /* padding-right:300px; */
} */

<label{
    text-align:
}
.wrapper{
    float:center;
  box-sizing:border-box;
  background-color:white;
  padding-left:50px;
  padding-top:30px;
  padding-bottom:30px;
  width:50%;
} 

body{
    padding-left :500px;
    color:black;
    width:  100%;
    height:  100vh;
    /* font-size: 60px; */
    font-family: Frijole;
    background-image: url("https://images.pexels.com/photos/439741/pexels-photo-439741.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500;");
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: 100%;
}
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}



/* Full-width input fields */
input[type=text], input[type=password] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  text-align:center;
}
button{
 
 display:inline-block;
 padding:1.3em 1.2em;
 margin:2 2.3em 2.3em 2;
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