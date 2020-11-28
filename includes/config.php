<?php
  $site_owner = "CreativeNana";
  
  // Database connection
  $conn = mysqli_connect('localhost', 'root', '', 'aviano-db');

  // Check connection and redirect to error page if connection fails
  if(!$conn){
    header("Location: error.php");
    exit;
  }

  if (!function_exists('http_response_code')) {
    function http_response_code($code = NULL) {

        if ($code !== NULL) {
          header("Location: error.php");
          exit;
        }
      }
    }
?>