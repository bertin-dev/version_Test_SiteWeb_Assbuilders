<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="../../images/favicon.jpg">
 <link rel="shortcut icon" href="../../images/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Modifications effectu&eacute;es</title>
<style type="text/css">
.grossirtext {
	font-size: 24px;
	font-weight: bold;
	text-decoration: underline;
	text-align: center;
}
</style>
</head>

<?php
require "../Database Configuration/config.php";
?>


<span class="grossirtext">
  <span class="grossirtext">
<?php
  // Connexion à la base de données
               // Valeurs à modifier selon vos paramètres configuration
            include '../configuration serveur/config_server.php';

     $ID_Utilisateur = $_POST['ID_Utilisateur'];
	 $Nom_Propre = $_POST['Nom_Propre'];
	 $Prenom = $_POST['Prenom'];
    $Nom_Utilisateur = $_POST['Nom_Utilisateur'];
    $Adresse_Email = $_POST['Adresse_Email'];
    $Date_Inscription = $_POST['Date_Inscription'];
    $Compte_Active = $_POST['Compte_Active'];
    $Date_Connexion = $_POST['Date_Connexion'];
    
 
			    $requete = $bdd->prepare('UPDATE comptes_utilisateurs SET ID_Utilisateur= :ID, Nom_Propre= :nom, Prenom= :prenom, Nom_Utilisateur= :nom_complet, Adresse_Email= :email, Date_Inscription= :inscription, Compte_Active= :etat, Date_Connexion= :dateConnexion WHERE ID_Utilisateur='.$ID_Utilisateur);
	            $requete->execute(array('ID' => $ID_Utilisateur, 
				                        'nom' => $Nom_Propre,
                                        'prenom' => $Prenom,
    									'nom_complet' => $Nom_Utilisateur,
										'email' => $Adresse_Email,
										'inscription' => $Date_Inscription,
										'etat' => $Compte_Active,
										'dateConnexion' => $Date_Connexion));

  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  {
    echo("Données Modifiées") ;
  }
  else
  {
    echo("La modification à échouée") ;
  }
?>
</p>
  </span></span>
<p><span class="grossirtext"><span class="grossirtext"><a href="modif.php"><img src="images/icon-ok.png" alt="ok" width="70" height="70" hspace="45" /></a></span></span><br><br>

</p>
</body>
</html>