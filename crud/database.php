<?php
   $serverName="localhost";
   $userName="root";
   $password="biw2024";
   $dbname="crud";

   $conn = new mysqli( $serverName,$userName,$password,$dbname);
   if($conn->connect_error){
    die('Connection failed:'.$conn->connect_error);
   }



?>