<?php
include "connect.php";
$name = $_POST["name"];
$family = $_POST["family"];
$photoshop = $_POST["photoshop"];
$network = $_POST["network"];
$programing = $_POST["programing"];
$image = $_POST["image"];


//date
include ('jdf.php');
$day_number = jdate('j');
$month_number = jdate('n');
$year_number = jdate('y');
$year_number='13'.$year_number;
$date = date("$year_number-$month_number-$day_number");


$id = rand(1000,10000);
$id ="img"."-".$name.$id;
$path = "images/$id.png";
$serverURL = "https://app-1543790078.000webhostapp.com/$path";
file_put_contents($path, base64_decode($image));

$query  = "INSERT INTO tbluser(name,family,photoshop,network,programing,image) VALUES ('$name','$family','$photoshop', '$network', '$programing', '$image')";
 
 $result = $connect->prepare($query);
 $result->bindparam(":name",$name);
 $result->bindparam(":family",$family);
 $result->bindparam(":photoshop",$photoshop);
 $result->bindparam(":network",$network);
 $result->bindparam(":programing",$programing);
 $result->bindparam(":image",$serverURL);
 $result->bindparam(":date",$date);

 $result->execute();

?>