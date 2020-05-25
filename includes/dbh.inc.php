<?php

$servername="localhost";
$dBUsername="root";
$dBPassword="";
$dBName="movers";

$conn = mysqli_connect("localhost", $dBUsername, $dBPassword, $dBName);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
