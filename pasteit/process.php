<?php
    require 'connect.php';
    require 'class.php';
    $main = new Main($db);
	$res=$main->insert();
	if($res)
	{
	    require 'confirm.php';
	}
	else
	{
		echo "unsuccessful insert<br>";
	}
?>