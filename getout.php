<?php

include 'partials/_dbconnect.php';
session_start();

if(!isset($_SESSION["email"])){
   header("location: {$hostname}/amskota/login.php");
}

?>