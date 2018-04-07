<?php
	try{
        $host = "localhost";
		$bdd = new PDO("mysql:host=$host;dbname=sportWeb;charset=utf8", 'root', '');

        $login = $_POST['login'];
        $password = $_POST['password'];

    	$sql = "SELECT * FROM users
                WHERE login = ?
                AND password = ?;";

    	$sth = $bdd->prepare($sql);
    	$sth->execute(array($login, $password));
    	$result = $sth->fetch();


        if($result){
            // Stockage dans la session si c'était un vrai site
            // Puis redirection vers l'accueil / le mur
            echo "<h1>Bienvenue ".$result['prenom']." !</h1>";
        }else{
            echo "Echec : Login ou mot de passe incorrecte !";
        }

    }catch( PDOException $Exception ) {
        $error = $Exception->getMessage();
    }


?>
<br/>
<a href="index.html">Cliquez ici pour retouner au formulaire</a>
