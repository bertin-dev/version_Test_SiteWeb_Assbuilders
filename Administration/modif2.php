<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
  <link rel="shortcut icon" href="../../images/favicon.jpg">
 <link rel="shortcut icon" href="../../images/favicon.ico">
    <title>Modification de l'Inscrit</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  </head>
  
  <?php
require "../Database Configuration/config.php";
?>


  <?php
  // Connexion à la base de données
               // Valeurs à modifier selon vos paramètres configuration
               include '../configuration serveur/config_server.php';

  //récupération de la variable d'URL,
  //qui va nous permettre de savoir quel enregistrement modifier
  $ID_Utilisateur  = $_GET["idPersonne"] ;
 
  //requête SQL:
  $requete = $bdd->query('SELECT * FROM comptes_utilisateurs WHERE ID_Utilisateur=\''.$ID_Utilisateur.'\'');
 
  //affichage des données:
  if($result = $requete->fetchObject());
  {
  ?>

<form name="insertion" action="modif3.php" method="POST">
  <input type="hidden" name="ID_Utilisateur" value="<?php echo($ID_Utilisateur) ;?>">
  <table border="0" align="center" cellspacing="2" cellpadding="2">
    <tr align="center">
    <tr align="center">
      <td>ID</td>
      <td><input type="text" name="ID_Utilisateur" value="<?php echo($result->ID_Utilisateur) ;?>"></td>
      </tr>
      <tr align="center">
      <td>Nom</td>
      <td><input type="text" name="Nom_Propre" value="<?php echo($result->Nom_Propre) ;?>"></td>
      </tr>
      <tr align="center">
      <td>Prénom</td>
      <td><input type="text" name="Prenom" value="<?php echo($result->Prenom) ;?>"></td>
    </tr>
    <tr align="center">
      <td>Nom_Complet</td>
      <td><input type="text" name="Nom_Utilisateur" value="<?php echo($result->Nom_Utilisateur) ;?>"></td>
    </tr>
    <tr align="center">
      <td>Email</td>
      <td><input type="text" name="Adresse_Email" value="<?php echo($result->Adresse_Email) ;?>"></td>
    </tr>
    <tr align="center">
      <td>Date d'Inscription</td>
      <td><input type="text" name="Date_Inscription" value="<?php echo($result->Date_Inscription) ;?>"></td>
    </tr>
    <tr align="center">
      <td>Compte_Activé?</td>
      <td><input type="text" name="Compte_Active" value="<?php echo($result->Compte_Active) ;?>"></td>
    </tr>
    <tr align="center">
      <td>Dernière Connexion</td>
      <td><input type="text" name="Date_Connexion" value="<?php echo($result->Date_Connexion) ;?>"></td>
    </tr>
    <tr align="center">
      <td colspan="2"><INPUT border=0 src="images/icon-modifier.png " type=image Value=submit align="middle" > </td>
    </tr>
  </table>
</form>

  <?php
  }//fin if 
  ?>

</body>
</html>