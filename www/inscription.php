<?php
	try{
        $host = "localhost";
		$bdd = new PDO("mysql:host=$host;dbname=sportWeb;charset=utf8", 'root', '');

        $login = $_POST['login'];
        $password = $_POST['password'];
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $birthday = $_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];
        $sexe = $_POST['sexe'];
    	$sql = "INSERT INTO users(login, password, prenom, nom, birthday, sexe)
                VALUES(?, ?, ?, ?, ?, ?);";

    	$sth = $bdd->prepare($sql);
    	$sth->execute(array($login, $password, $prenom, $nom, $birthday, $sexe));
    	$result = $sth->fetchAll();


        if($result){
            echo "Une erreur s'est produit, veuillez réessayer";
        }else{
            echo "Inscription réussie ! Retounrez au formulaire pour vous connecter";
        }

    }catch( PDOException $Exception ) {
        $error = $Exception->getMessage();
    }
?>
<br/>
<a href="index.html">Cliquez ici pour retouner au formulaire</a>















.
