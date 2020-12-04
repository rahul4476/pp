<html>
<head>
<style type="text/css">
table{
border-collapse:collapse;
}
td{
text-align:center;
padding:5px;
}
th{
padding:5px;
background-color:#dcdcdc;
}
</style>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","userregistration");
if(!$con)
die("server Could Not connect");
$sql="select* from usertable";
$rs=mysqli_query($con,$sql);
echo"<table border=1 align='center' width='60%'>";
echo"<tr><th>Name</th><th>Password</th></tr>";
while($value=mysqli_fetch_assoc($rs))
{

$pid=$value["name"];
$price=$value["password"];
echo"<tr><td>$pid</td><td>$price</td></tr>";
}
echo"</table>";
?>
