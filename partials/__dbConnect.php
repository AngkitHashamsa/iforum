<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "idiscuss";
$con = mysqli_connect($hostname,$username,$password,$database);
if(!$con){
 die('sorry not connect'. mysqli_connect_error());
}