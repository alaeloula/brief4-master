<?php
include("config.php");
 $id=$_POST['cat'];
$sql= "DELETE FROM `categorie` WHERE `categorie`.`id` = :id";
$req=$connect->prepare($sql);
$req->execute(['id'=> $id]);
header("Location: admin.php");
?>