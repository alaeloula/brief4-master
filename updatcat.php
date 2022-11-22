<?php 
    session_start();
    include("config.php");
        $nm = $_POST['newname'];
        $cat = $_POST['cat'];
        
    
        // hadii khdamaaaa
        $sql="UPDATE `categorie` SET `nom` = :nom  WHERE `categorie`.`id` = $cat";
        // $sql = "INSERT INTO `produit` (`id`, `nom`, `qte`, `prix`, `id_cat`) VALUES (NULL, '$name', '$qte', '$prix', '$cat');";
        $resultat = $connect->prepare($sql);
        $resultat->execute(['nom'=> $nm]) or die("Erreur lors de l'execution de la requete: ".mysql_error());
        $_SESSION['modifiercat'] = "<div class='alert alert-warning' role='alert'>
  A bien ete modifier</div>";
        header("Location: ./admin.php");
         // ******************************
            
    ?>