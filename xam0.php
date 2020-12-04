<html>
<head>
<style type="text/css">
BODY{
BACKGROUND-IMAGE:URL('image/11/WALLPAPER/32.jpg');
BACKGROUND-SIZE:COVER;
}
.a{
  background-color:RED;
  width:100%;
 height:15%;
 color:white;
 font-size:30px;
 font-family:Impact;
 text-indent:100px;
 
  }
.b{
   position:fixed;
  margin-left:10px;
  margin-top:6px;
  padding:5px 5px;
  background-color:#6FDF5F;
  color:white;
  border:2px solid #6FDF5F;
}
.c{
   height:220px;
   width:500px; 
   background-color:white;
   margin-left:400px;
   margin-top:80px;
   color:black;
   }
.d{
   padding:5px 60px;
   margin-top:5px;
   text-align:left;
   
   }
 a{
   text-decoration:none;
   color:#172A74;
   }
</style>

<script type="text/javascript">

function navigate()
{
if
(frm.username.value == "RAHUL@123" && frm.password.value == "ROHIT@123")
{
window.location="xam2.PHP";
}
else{
alert("password error")
document.getElementById('unerror').innerHTML="";
}
}

function check2()
{
lenpwd=document.frm.password.value.length;
if(lenpwd<8)
{
document.getElementById('pwderror').innerHTML="password should be atleast 8 characters";
document.frm.password.focus();
}
else
{
document.getElementById('pwderror').innerHTML="";
}
}
</script>

</head>
<body>
<form name="frm">
<section style="background-color:#DEDFD4;width:100%;height:70%;">
<div class="a">
EXAM IDEA
<input class="b" type="button" value="Create New Account">
</div>
<div  align="center" class="c">
<table >
<caption style="font-size:25px">sign up to EXAM</caption>
<tr ><td><input class="d" type="email" placeholder="username"  name="username"  onblur="check1();"></td></tr>
<tr><td colspan=2><p id="unerror" style="color:red;"</p></td></tr>
<br>
<tr><td><input class="d" type="password" placeholder="Password"  name="password" onblur="check2();"></td></tr>
<tr><td colspan=2><p id="pwderror" style="color:red;"></p></td></tr>
<br>
<tr><td><input  type="button" value="sign up" onclick="navigate();"style="background-color:#5A5EDD;color:white;padding:9px 126px;border:2px solid #5A5EDD;margin-top:5px;"></td></tr>
</table>
</div>

<div style="position:absolute; right:0px; top:0px; background-color:yellow; font-size:25px;">
<a href="logout.php">logout</a>
</div>


</section>
</form>
</body>
</html>