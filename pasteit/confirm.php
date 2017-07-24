<html>
<head>
<title>confirmation</title>
<style>
 body
 {font-family:calibri;}
</style>
</head>
<body>
<div>
<center>
<?php
 require 'connect.php';
 function printQRCode($url, $size = 100) {
    return '<img src="http://chart.apis.google.com/chart?chs=' . $size . 'x' . $size . '&cht=qr&chl=' . urlencode($url) . '" />';
}
 echo "<h1>Your done!</h1>";
 $access=false;
 $result = $db->query('select * from checktable order by id desc limit 1');
 foreach($result as $row)
 {
  $url="/project/paste/".$row["code"];
  echo "<h3>URL for your paste:<a href=".$url.">".$url."</a><br /></h3>";
  echo printQRCode($url); 
 }
 
?>
</center>
</div>
</body>
</html>
