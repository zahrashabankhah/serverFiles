<?php

include "connect.php";
if($_SERVER['REQUEST_METHOD']=='POST'){

    // $ID=21;
    $ID=$_POST["id"];
     $sql = "DELETE * FROM tbluser WHERE id='$ID'";
    $connect->exec($sql);
}
$connect = null;
?>
