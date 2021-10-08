<?php
session_start();
header('location:Login.php');

$con=mysqli_connect('localhost','root','','tritinerary_login');
$name=$_POST["Username"];
$password=$_POST["Password"];
$s="select * from userid where name='$name'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
    echo("Username already taken!");
}
else{
    $reg="insert into userid(name,password) values ('$name','$password')";
    mysqli_query($con,$reg);
    echo("Registration Successfull");
}


?>