<?php

  $DbHost = "localhost";
  $DbUser = "id8098273_usvolley";
  $Password = "*****";
  $DbName = "id8098273_dbvolley";

  $dsn = "mysql:host=$DbHost;dbname=$DbName";

  try
  {
  	$connect = new PDO($dsn , $DbUser , $Password);
  	$connect->exec("SET character_set_connection = 'utf8'");
  	$connect->exec("SET NAMES 'UTF8'");
  }
  catch(PDOException $error)
  {
  	echo "unable to connect".$error->getMessage();
  }

?>
