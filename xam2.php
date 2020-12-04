<HTML>
<head>
<script type="text/javascript">
function navigate()
{
tm=20;
aq=0;
uaq=0;
cq=0;
iq=0;

if(document.frm.first[0].checked)
{
cq+=2;
}


if(document.frm.second[2].checked)
{
cq+=2;
}

if(document.frm.third[0].checked)
{
cq+=2;
}


if(document.frm.forth[0].checked)
{
cq+=2;
}


if(document.frm.five[3].checked)
{
cq+=2;
}


if(document.frm.six[0].checked)
{
cq+=2;
}


if(document.frm.seven[1].checked)
{
cq+=2;
}


if(document.frm.eight[0].checked)
{
cq+=2;
}


if(document.frm.nine[2].checked)
{
cq+=2;
}

if(document.frm.ten[3].checked)
{
cq+=2;
}


if(document.frm.first[0].checked||document.frm.first[1].checked||document.frm.first[2].checked||document.frm.first[3].checked)
{
aq++;
}
else
{
uaq++;
}



if(document.frm.second[0].checked||document.frm.second[1].checked||document.frm.second[2].checked||document.frm.second[3].checked)
{
aq++;
}
else
{
uaq++;
}


if(document.frm.third[0].checked||document.frm.third[1].checked||document.frm.third[2].checked||document.frm.third[3].checked)
{
aq++;
}
else
{
uaq++;
}

if(document.frm.forth[0].checked||document.frm.forth[1].checked||document.frm.forth[2].checked||document.frm.forth[3].checked)
{
aq++;
}
else
{
uaq++;
}

if(document.frm.five[0].checked||document.frm.five[1].checked||document.frm.five[2].checked||document.frm.five[3].checked)
{
aq++;
}
else
{
uaq++;
}

if(document.frm.six[0].checked||document.frm.six[1].checked||document.frm.six[2].checked||document.frm.six[3].checked)
{
aq++;
}
else
{
uaq++;
}

if(document.frm.seven[0].checked||document.frm.seven[1].checked||document.frm.seven[2].checked||document.frm.seven[3].checked)
{
aq++;
}
else
{
uaq++;
}


if(document.frm.eight[0].checked||document.frm.eight[1].checked||document.frm.eight[2].checked||document.frm.eight[3].checked)
{
aq++;
}
else
{
uaq++;
}


if(document.frm.nine[0].checked||document.frm.nine[1].checked||document.frm.nine[2].checked||document.frm.nine[3].checked)
{
aq++;
}
else
{
uaq++;
}

if(document.frm.ten[0].checked||document.frm.ten[1].checked||document.frm.ten[2].checked||document.frm.ten[3].checked)
{
aq++;
}
else
{
uaq++;
}
document.write("<H1><U><I><CENTER>RESULT</CENTER></I></U></H1><BR><BR><BR><BR><BR><BR>");
document.write("<H2>Total Marks Obtained="+cq);
document.write("<br>total question attempted="+aq);
document.write("<br>total question not attempted="+uaq);
document.write("<br>total marks="+tm+"</H2>" );
}
</script>
</head>
<body style=color:blue;>
<form name="frm">
<div class="header">
<u><h1 style=color:red;> <center> Online Exam Of Web Development <center></h1></u>
<div class="1">Question 1 : To make your website mobile friendly, you can make your website<br>
<input type="radio" name="first" >Responsive</input><br>
<input type="radio" name="first" > Reactive</input><br>
<input type="radio" name="first" > Fast Loading</input><br>
<input type="radio" name="first" >Light</input><br>
</div>
<hr>
<div class="2">Question 2 : What does CSS stand for ? <br>
<input type="radio" name="second" >Current Style Sheets</input><br>
<input type="radio" name="second" >Current Sheets Style</input><br>
<input type="radio" name="second" >Cascading Style Sheets</input><br>
<input type="radio" name="second" >Cascading Sheets Style</input><br>
</div>
<hr>
<div class ="3">Question 3 : What is a CMS in web design<br>
<input type="radio" name="third" >Content Management System</input><br>
<input type="radio" name="third" >Creative Management System</input><br>
<input type="radio" name="third" >Content Mixing System</input><br>
<input type="radio" name="third" >Creatives Managerial System</input><br>
</div>	
<hr> 
<div class ="4">Question 4 : Which of the following statements is false<br>
<input type="radio" name="forth" >You can make a website without using HTML</input><br>
<input type="radio" name="forth" >You can make a website without using PHP</input><br>
<input type="radio" name="forth" >You can make a website without using CSS</input><br>
<input type="radio" name="forth" >You can make a website without using Javascript</input><br>
</div>	
<hr>
<div class="5"> Question 5 : What is WordPress<br>
<input type="radio" name="five" >It is a software used to press text</input><br>
<input type="radio" name="five" >It is a text formatting software</input><br>
<input type="radio" name="five" >It is a CMS (Content Management System)</input><br>
<input type="radio" name="five" >It is mail service</input><br>
</div>	
<hr>
<div class="6">Question 6 : SQL stands for <br>
<input type="radio" name="six" >Structured Query Language</input><br>
<input type="radio" name="six" >Statistical Query Language</input><br>
<input type="radio" name="six" >Superior Questions Lot</input><br>
<input type="radio" name="six" >Standard Query Lot</input><br>
</div>	
<hr>
<div class="7">Question 7 : Which of the following is true about Javascript<br>
<input type="radio" name="seven" >It is a server side scripting language</input><br>
<input type="radio" name="seven" >It is client side scripting language</input><br>
<input type="radio" name="seven" >It is a Software</input><br>
<input type="radio" name="seven" >It is a database</input><br>
</div>
<hr>
<div class="8">Question 8 : Which of the following is true<br>
<input type="radio" name="eight" >You need a server to host your website files</input><br>
<input type="radio" name="eight" >You don’t need a server to host your website files</input><br>
<input type="radio" name="eight" >You can create a website without using HTML</input><br>
<input type="radio" name="eight" >You can’t create a website without a CMS</input><br>
</div>
<hr>
<div class="9">Question 9 : Which of the following softwares could be used to build a website<br>
<input type="radio" name="nine" >Power Point</input><br>
<input type="radio" name="nine" >Excel</input><br>
<input type="radio" name="nine" >Dream Weaver</input><br>
<input type="radio" name="nine" >ERP</input><br>
</div>
<hr>
<div class="10">Question 10 : Which of the following is not a CMS<br>
<input type="radio" name="ten" >WordPress</input><br>
<input type="radio" name="ten" >Drupal</input><br>
<input type="radio" name="ten" >Magneto</input><br>
<input type="radio" name="ten" >SAP</input><br>
</div>
<hr>
</div>
<div>
<input type="button" value="submit" onclick="navigate();"
</div>
</form>
<b><a href="k.php">main menu</a></b>
</body>
</html>