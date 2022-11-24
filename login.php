<?php
$con= new mysqli('localhost','root','','miniproject');
$email=$_POST['email'];
$password=$_POST['password'];
 
$stmt = $con->prepare("select * from signup where email = ?");
$stmt->bind_param("s", $email);

$stmt->execute();

$stmt_result = $stmt->get_result();

if($stmt_result->num_rows > 0) { 
  $data = $stmt_result->fetch_assoc(); 
  if($data['password'] ===$password ){
    echo "<h1><i>Login Successfully</i></h1>";

} else {

echo "<h1><i>Invalid Email or password</i></h1>";

}

}
?>