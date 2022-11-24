<?php
$con= new mysqli('localhost','root','','miniproject');

$name=$_POST['name'];
$email=$_POST['email'];
$Age_group=$_POST['feedback'];


 
$sql = "INSERT INTO feed(name, email,feedback) 
VALUES ('$_POST[name]','$_POST[email]','$_POST[feedback]')";
 
if($con->query($sql) == true) {
    echo "<h1><i>Thank You!!</i></h1>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

$con->close();
?>



