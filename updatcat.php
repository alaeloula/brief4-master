<?php 
    session_start();
    include("config.php");
        $nm = $_POST['newname'];
        $cat = $_POST['cat'];
        
    
        // hadii khdamaaaa
        $sql="UPDATE `categorie` SET `nom` = :nom  WHERE `categorie`.`id` = $cat";
        // $sql = "INSERT INTO `produit` (`id`, `nom`, `qte`, `prix`, `id_cat`) VALUES (NULL, '$name', '$qte', '$prix', '$cat');";
        $resultat = $connect->prepare($sql);
        $resultat->execute(['nom'=> $_POST['newname']]) or die("Erreur lors de l'execution de la requete: ".mysql_error());
        echo 'bien modifier';
         // ******************************
            
    ?>