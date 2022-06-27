<?php
include_once 'database.php';
if(isset($_POST['save'])){
    $ur=$_POST['user'];
    $em=$_POST['email'];
    $ph=$_POST['phone'];
    $co=$_POST['comments'];
}
$sql="insert into Forminside(User, Email, Phone, Message) values('$ur','$em','$ph','$co')";
if(mysqli_query($conn,$sql)){
    echo "New record created";
}
else{
    echo "Error";
}
mysqli_close($conn);
?>