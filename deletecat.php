<?php
session_start();
include("config.php");
 $id=$_POST['cat'];
$sql= "DELETE FROM `categorie` WHERE `categorie`.`id` = :id";
$req=$connect->prepare($sql);
$req->execute(['id'=> $id]);
$_SESSION['deletecat'] = "<div class='alert alert-danger' role='alert'>
  A bien ete modifier</div>";
header("Location: admin.php");
?>