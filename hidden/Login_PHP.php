<?php
session_start();

$con=mysqli_connect('localhost','root','','tritinerary_login');
$name=$_POST["Username"];
$password=$_POST["Password"];
$s="select * from userid where name='$name' && password='$password'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
    echo("Home Page!");
}
else{
    echo "<script type='text/javascript'>alert('Wrong Username/Password');window.location='Login.php';</script>";
}


?>