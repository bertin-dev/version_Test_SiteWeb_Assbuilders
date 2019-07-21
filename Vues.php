<?php
include 'configuration serveur/config_server.php';
   

   $compte = $bdd->query('SELECT COUNT(*) AS nbrEntre FROM vues WHERE IP=\''.$_SERVER['REMOTE_ADDR']. '\'');
   $donneTAB = $compte->fetch();
   if($donneTAB['nbrEntre'] == 0)
   {
	   $req = $bdd->prepare('INSERT INTO vues (IP, timestamp) VALUES(?, ?)');
	   $req->execute(array($_SERVER['REMOTE_ADDR'], time()));
   }
   
?>   