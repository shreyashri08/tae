<?php

$con= new mysqli('localhost','root','','miniproject');

if($con){
    echo "connection sucessfull...!  ";
}
else{
    die(mysqli_error($con));
}
?>






