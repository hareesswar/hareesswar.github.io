<?php
global $show;
$show=false;
if(isset($_POST["submit"]))
   {
	   if($_POST["password"]==$pass)
	    $show=true;
   }
?>
<html>
<head>
 <meta charset=utf-8 />
 <style>
body
 {
   font-family: calibri;
 }
 #password,#submit
  {
	border-radius: 5px;
  }
 </style>
<head>
<title>Authorize</title>
</head>
<body>
<center>
<form method="post" action="">
  <label for="password">Password:</label>
  <input id="password" name="password" type="password">
  <input type="submit" name="submit" value="submit" />
 </form>
</center>
</body>
</html>