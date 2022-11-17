<?php
    include ('config.php');
    $cin = $_POST['cin'];
    $name = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    //  $sql = "INSERT INTO `client` (`cin`, `nom`, `prenom`, `username`, `password`, `email`, `etat`) VALUES ('$cin', '$name', '$lname', '?', '?', '?', '0')";
    // $sql = "INSERT INTO `client` (`cin`, `nom`, `prenom`, `username`, `password`, `email`, `etat`) VALUES ('$cin', '$name', '$lname', '$username', '$password', '$email','0')";
     

    
    // $resultat->bindParam( 'sss', $username, $password, $email);
    // $resultat->execute() or die("Erreur lors de l'execution de la requete: " . mysql_error());
    // $resultat->execute([ $cin, $name, $lname, $username, $password, $email,'0']) or die("Erreur lors de l'execution de la requete: " . mysql_error());
    $sql = "INSERT INTO `client` (`cin`, `nom`, `prenom`, `username`, `password`, `email`, `etat`) VALUES (:cin, :name, :lname, :username, :password, :email, :etat)";
    $resultat = $connect->prepare($sql);
    $resultat->execute(['cin'=> $cin,'name'=> $name,'lname'=> $lname,'username'=> $username,'password'=> $password,'email'=> $email,'etat'=> 0]) or die("Erreur lors de l'execution de la requete: " . mysql_error());
    header("Location: ./login.php");
?>