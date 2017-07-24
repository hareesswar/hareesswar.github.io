<html>
<head>
<style>
body 
 {
   font-family: 'Lato';
 }
 .box
 {	 border-radius: 5px;}
 #output
 {
   margin-left:150px;
 }
</style>
   
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
  <link rel="stylesheet" href="http://codemirror.net/lib/codemirror.css">
	<link rel="stylesheet" href="http://codemirror.net/lib/dracula.css">
  <script src="http://codemirror.net/lib/codemirror.js"></script>
  <script src="http://codemirror.net/addon/edit/matchbrackets.js"></script>
  <script src="http://codemirror.net/mode/javascript/javascript.js"></script>
	<script src="http://codemirror.net/mode/php/php.js"></script>


</head>
<body>
<?php
require 'header1.php';
require 'connect.php';
$GLOBALS["var1"] = $_GET['id'];
//echo $var1;
$result = $db->query('select * from checktable where code="'.$GLOBALS["var1"].'"');
foreach($result as $row)
{ 
  //print_r($result);
  $pass=$row['password'];
  $GLOBALS["name"]=$row['name'];
  $GLOBALS["author"]=$row['author'];
  $GLOBALS["paste"]=$row['paste'];
  $GLOBALS["expdate"]=$row["expdate"];
  $GLOBALS["views"]=$row["views"];
  #require 'check.php';
  #if($row['expiry'])
  #{
	#  require 'error.php';
	#  exit();
  #}
}
  function display()
  {
  $temp="codesnippet_readonly";
  $box="box";
  $op="output";
  echo "<center>";
  echo "Title:"; 
  echo "<input class='".$box."'value='".$GLOBALS["name"]."' readonly>";
  echo "Author:";
  echo "<input class='".$box."'value='".$GLOBALS["author"]."' readonly></span><br />";
  echo "</center>";
  echo "<div id='".$op."'>";
  echo "<textarea readonly id='".$temp."'>".$GLOBALS["paste"]."</textarea>";
  echo "</div>";
  }	
  if(empty($pass))
  {
    display();
  }
  else
  {
	  require 'authorize.php';
	if($show)
     display();		 
  }
 ?>
</body>

<script>
 var readOnlyCodeMirror = CodeMirror.fromTextArea(document.getElementById('codesnippet_readonly'), {
        theme: "default",
        lineNumbers: true,
        readOnly: true
    });  
</script>

</html>