<?php
$username =$_POST['username'];
$password=$_POST['password'];
$conn = new mysqli('localhost','root',"",'login1');
if($conn->connect_error){
    die('connection Failed:' .$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into login(username,password) values(?,?)");
    $stmt->bind_param("ss",$username,$password);
    $stmt->execute();
    echo "Login Successfully...........";
    $stmt->close();
    $conn->close();
}
?>