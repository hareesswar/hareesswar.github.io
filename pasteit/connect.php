<?php
    $host = 'localhost'; 
    $db_name = 'pastedatabase'; 
    $db_username = 'root'; 
    $db_password = '011235813'; 

    try
    {
        $db = new PDO('mysql:host='. $host .';dbname='.$db_name, $db_username, $db_password);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		#echo "connection success<br>";
    }
    catch (PDOException $e)
    {
        exit('Error Connecting To DataBase');
    }
?>