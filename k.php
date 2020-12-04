<?php 
echo"<h1><b>RAHUL</b> </h1>";
include("include.php");
?>


<html>
<head>
<title>
Registeration form
</title>
<style type="text/css">
body{
background:url('image/102520.jpg') no-repeat
center center fixed;
background-size:cover;
margin:0px;
padding:0px;
}
</style>


<script type="text/javascript">

}
</script>
</head>
<body> 

<form action="xam0.php" method="post">
<h1 style="text-decoration:underline;text-transform:capitalize; text-align:center;COLOR:RED;"> registeration &nbsp;form</h1><br><br><br><br>
<img src="image/977.jpg" height="500" width="420" style=" position:absolute;left:0px;top:190px;">
<DIV style="background-color:orange; width:30%; position:absolute;right:10px;top:120px;text-align:right; padding:15px;" >
STUDENT NAME:<INPUT type="text"  name="studentname"><br><br>
FEES:<input type="text" name="fees"><br><br>
PASSWORD<input type="password" name="password"><br><BR>
CONFIRM PASSWORD<input type="password"><br><br>
E-MAIL ID:<input type="email" name="emailid"><BR><BR>
QUALIFICATION<input type="checkbox" name="p2">10<sup>th</sup><input type="checkbox" name="p2">12 <sup>th</sup><input type="checkbox" name="p2">other<br><br>
GENDER<input type="radio"name="p1">MALE<input type="radio" name="p1">FEMALE<input type="radio" name="p1">OTHER<br><br> 
upload your image<input type="file"><br><br>
STREAM:<select type ="dropdown">
<option>science(maths)</option>
<option>science(biology)</option>
<option>commerce</option>
<option>arts</option>
</select><br><br>
<hr>
<input type="submit" ><br><br><br>

</DIV>
</form>
</body>
</html>