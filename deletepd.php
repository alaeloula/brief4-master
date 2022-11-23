<?php
session_start();
include("config.php");
 $id=$_GET['id'];
$sql= "DELETE FROM `produit` WHERE `produit`.`id` = :id";
$req=$connect->prepare($sql);
$req->execute(['id'=> $_GET['id']]);
$_SESSION['deletepd'] = "<div class='alert alert-danger' role='alert'>
  A bien ete supprimer</div>";
header("Location: admin.php")
?>
