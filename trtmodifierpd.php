<?php
session_start();
include("config.php");
$id = $_SESSION['id'];
$nm = $_POST['name'];
$cat = $_POST['cat'];
$prix = $_POST['prix'];
$qte = $_POST['qte'];
$des = $_POST['des'];
//  $image = $_FILES['fileToUpload']['full_path'];
//  print_r($image);

if (!empty($_FILES["fileToUpload"]["full_path"])) {


  $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/brief4-master/uploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  // Check if image file is a actual image or fake image

  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if ($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }


  // Check if file already exists
  // if (file_exists($target_file)) {
  //   echo "Sorry, file already exists.";
  //   $uploadOk = 0;
  // }

  // Check file size
  // if ($_FILES["fileToUpload"]["size"] > 500000) {
  //   echo "Sorry, your file is too large.";
  //   $uploadOk = 0;
  // }

  // Allow certain file formats
  if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
  ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
      $image = "uploads/" . $_FILES["fileToUpload"]["name"];
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
  // hadii khdamaaaa
  $sql = "UPDATE `produit` SET `nom` = :nom , `qte` = $qte, `prix` = $prix,`image` = '$image', `description` = '$des', `id_cat` = '$cat' WHERE `produit`.`id` = $id";
  // $sql = "INSERT INTO `produit` (`id`, `nom`, `qte`, `prix`, `id_cat`) VALUES (NULL, '$name', '$qte', '$prix', '$cat');";
  $resultat = $connect->prepare($sql);
  $resultat->execute(['nom' => $_POST['name']]) or die("Erreur lors de l'execution de la requete: " . mysql_error());
  $_SESSION['modifierpd'] = "<div class='alert alert-warning' role='alert'>
  A bien ete modifier</div>";
  header("Location: ./admin.php");
}
// ******************************
else {
  $sql = "UPDATE `produit` SET `nom` = :nom , `qte` = $qte, `prix` = $prix, `description` = '$des', `id_cat` = '$cat' WHERE `produit`.`id` = $id";
  // $sql = "INSERT INTO `produit` (`id`, `nom`, `qte`, `prix`, `id_cat`) VALUES (NULL, '$name', '$qte', '$prix', '$cat');";
  $resultat = $connect->prepare($sql);
  $resultat->execute(['nom' => $_POST['name']]) or die("Erreur lors de l'execution de la requete: " . mysql_error());
  $_SESSION['modifierpd'] = "<div class='alert alert-warning' role='alert'>
  A bien ete modifier</div>";
  header("Location: ./admin.php");
}
