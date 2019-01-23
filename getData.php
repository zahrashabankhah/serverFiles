<?php
include "connect.php";

$query = "SELECT * FROM tbluser"d;
$result = $connect->prepare($query);
$result->execute();

$statictic=array();
while($row = $result->fetch(PDO::FETCH_ASSOC))
{
	$record=array();
	$record["id"]=$row["id"];
	$record["name"]=$row["name"];
	$record["family"]=$row["family"];
	$record["photoshop"]=$row["photoshop"];
	$record["network"]=$row["network"];
  $record["programing"]=$row["programing"];
  $record["image"]=$row["image"];
  $record["date"]=$row["date"];
	$statictic[]=$record;
}

echo JSON_encode($statictic);
?>
