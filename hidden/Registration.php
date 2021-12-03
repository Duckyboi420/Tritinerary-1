<?php
session_start();

$con=mysqli_connect('localhost','root','','tritinerary_login');
$name=$_POST["Username"];
$password=$_POST["Password"];
$s="select * from userid where name='$name'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
    echo "<script type='text/javascript'>alert('Username already exists!');window.location='Signup.php'</script>";
}
else{
    $reg="insert into userid(name,password) values ('$name','$password')";
    mysqli_query($con,$reg);
    echo("Registration Successfull");
    header('location:Login.php');
}


?>