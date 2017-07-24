<?php
 require 'header.php';
 $errmsg="";
 if (isset($_POST["submit"]))
 {
	 $success=true;
	 if(empty($_POST["paste"]))
    {
	 $errmsg="Oops! You have forgot to fill this field";
	 $success=false;
    }
	if($success)
	{
	 require "process.php";
	 exit();
	}
 }	 
 
?>
<html>
<head>
 <meta charset=utf-8 />
 <title>paste</title>
 <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
 <style>
 
 div 
 {
   font-family: 'Lato';
 }
  #name,#author,#password,#expdate,#submit,#views
  {
	border-radius: 5px;
  }
  #views{
	  width:40px;
  }
 </style>
</head>
<body>
 <div id='main'>
 <center>
 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <label for="name">Title:</label>
  <input id="name" name="name" value="Untitled">
  <label for="author">Author:</label>
  <input id="author" name="author" value="Anonymous">
  <label for="password">Password:</label>
  <input id="password" name="password" type="password"><br />
  <label for="paste"></label><br />
  <textarea id="paste" name="paste" autofocus rows="27" cols="96" required ></textarea><br />
  <?php echo $errmsg;?>
  <select id="expdate" name="expdate">
   <option value=1>1 DAY</option>
   <option value=7>1 WEEK</option>
   <option value=30 selected="selected">1 MONTH</option>
  </select>
  <label for="views">Views:</label>
  <input id="views" name="views" value=10>
  <input type="submit" name="submit" id="submit" value="Paste" />
 </form>
 </div>
</body>

</html>