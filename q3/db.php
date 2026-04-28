<?php
$servername="localhost";
$username="root";
$password="";
$db_name="php";
$conn= new mysqli($servername,$username,$password,$db_name);
 if (!$conn){
    echo "not connected";
 }


 

?>