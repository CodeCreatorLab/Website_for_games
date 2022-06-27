<?php
$servername="localhost";
$user='root';
$pass='';
$db='Projectdata';
$conn=mysqli_connect($servername,$user,$pass,$db);
if(!$conn){
    die("Could not connect");
}
else{
    echo "Connected Successfully!!\n";
}
?>