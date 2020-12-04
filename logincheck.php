<?php
session_start();
$un=$_POST["username"];
$pwd=$_POST["password"];
$con=mysqli_connect("localhost","root","","mydb");
if(!$con)
die("server could not connected");
$s="select * from reg where EmailId='".$un."'";
$rs=mysqli_query($con,$s);
$data=mysqli_fetch_assoc($rs);
if($data["password"]==$pwd)
{
$_SESSION["UserName"]=$un;
header("location:j.php");
}
else
header("location:rahulrajj.php?error=1");
?>
