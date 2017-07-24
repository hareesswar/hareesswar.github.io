<?php
require 'connect.php';
//print_r($GLOBALS);
$cookie_name="user";
if(!isset($_COOKIE[$cookie_name]))
	{
		setcookie($cookie_name); 
		$db->query('update checktable set views=views-1 where code="'.$GLOBALS["var1"].'" and views>0');
	}
 
$tem=$GLOBALS["expdate"];
$db->query("update checktable set expiry=1 where datetime < DATE_SUB(NOW(), INTERVAL ".$tem." DAY)");
$db->query("update checktable set expiry=1 where views=0");
?>
