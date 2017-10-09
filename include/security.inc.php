<?php
if(!$logged) {
  header("Location: /404.php");
  die("Redirecting to 404.php"); 
}