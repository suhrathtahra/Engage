<?php

$con = new mysqli('localhost', 'root', '', 'commerce and connect');

if(!$con){
    die(mysqli_error($con));
} 

?>