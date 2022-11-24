<?php
$con= new mysqli('localhost','root','','miniproject');
include 'connect.php';
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile_number'];
 
$sql = "INSERT INTO signup (name, email, password, mobile_number) 
VALUES ('$_POST[name]','$_POST[email]', '$_POST[password]','$_POST[mobile_number]')";
 
if($con->query($sql) == true) {
    echo "<h1><i>Account Created successfully</h1></i>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

$con->close();
?>


