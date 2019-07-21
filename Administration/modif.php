<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="../../images/favicon.jpg">
 <link rel="shortcut icon" href="../../images/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Gestion des inscrits</title>
<style type="text/css">
.centrerdanscase {
	text-align: center;
}
.titrecentrer {
	font-size: 30px;
	font-weight: bold;
	text-decoration: underline;
	text-align: center;
}
</style>
</head>

<?php
require "../Database Configuration/config.php";
?>


<body background="../../images/arriereplan.png">
<p class="titrecentrer">Gestion des Inscrits à WWW.THE-BUILDERS.ORG</p>
<table border="5" class="tableadmin">
  <?php
 
                // Connexion à la base de données
               // Valeurs à modifier selon vos paramètres configuration
              include '../configuration serveur/config_server.php';
			  
			   $requete = $bdd->query('SELECT * FROM comptes_utilisateurs ORDER BY Nom_Propre');
?>
<form action="modif.php" method="post">
         <tr> 
          <td class="centrerdanscase">ID</td>
          <td class="centrerdanscase">Nom</td>     
          <td class="centrerdanscase">Prénom</td>
           <td class="centrerdanscase">Nom Complet</td>
           <td class="centrerdanscase">Mail</td>
           <td class="centrerdanscase">Date d'Inscription</td>
           <td class="centrerdanscase">Compte Activé?</td>
           <td class="centrerdanscase">Dernière Connexion</td>
           <td class="centrerdanscase">Supprimer?</td>
           <td class="centrerdanscase">Modifier?</td>
         </tr>
        
         <?php
		 while($result = $requete->fetchObject())
       { 
        ?>
        
<?php 
$Date_Inscription=$result->Date_Inscription;
$convertisseur1='Le '.date('d/m/Y', $Date_Inscription).' &agrave; '.date('H:i:s', $Date_Inscription);
$Date_Connexion=$result->Date_Connexion;
$convertisseur2='Le '.date('d/m/Y', $Date_Connexion).' &agrave; '.date('H:i:s', $Date_Connexion);
?>
        <tr>
          <td class="centrerdanscase"> <?php echo($result->ID_Utilisateur);?>       </td>
          <td class="centrerdanscase"> <?php echo($result->Nom_Propre);?>       </td>
          <td class="centrerdanscase"> <?php echo($result->Prenom);?>       </td>
          <td class="centrerdanscase"> <?php echo($result->Nom_Utilisateur);?>      </td>
          <td class="centrerdanscase"> <?php echo($result->Adresse_Email);?> </td>
          <td class="centrerdanscase"> <?php echo($convertisseur1);?>     </td>
          <td class="centrerdanscase"> <?php echo($result->Compte_Active);?>       </td>
          <td class="centrerdanscase"> <?php echo($convertisseur2);?>      </td>
          <td class="centrerdanscase"> <a href="<?php echo"supp2.php?idPersonne=".$result->id.""?>"><img src="images/icon-supprimer.jpg" alt="Supp" width="30" height="30"  style="border:0;"></a></td>
          <td class="centrerdanscase"> <a href="<?php echo"modif2.php?idPersonne=".$result->ID_Utilisateur.""?>"><img src="images/icon-modifier.png" alt="Edit" width="30" height="30"  style="border:0;"></a></td>
         
        </tr>
    </form>
<?php
       }  
$requete->closeCursor();

?> 
</table>







       <p class="titrecentrer">Statistiques du site web</p>
	   <?php
        include '../connectes.php';
// -------
// ETAPE 3 : on compte le nombre d'ip stockées dans la table. C'est le nombre de visiteurs connectés
     $retour = $bdd->query('SELECT COUNT(*) AS nbreIP FROM connectes');
     $donnees = $retour->fetch();
// Ouf ! On n'a plus qu'à afficher le nombre de connectés !
	   if($donnees['nbreIP'] == 1)
	   echo '<p>Il y a actuellement ' . $donnees['nbreIP'] . ' visiteur en ligne sur le site www.the-builders.org !</p>';
       else
       echo '<p>Il y a actuellement ' . $donnees['nbreIP'] . ' visiteurs en ligne sur le site www.the-builders.org !</p>';		   
                      


					  
					  
		// -------
		include '../Vues.php';
     $send = $bdd->query('SELECT COUNT(*) AS IP FROM vues');
     $recu = $send->fetch();
// Ouf ! On n'a plus qu'à afficher le nombre de connectés !
	   if($recu['IP'] == 1)
	   echo '<p>'.$recu['IP'] . ' VUE</p>';
       else
       echo '<p>'.$recu['IP'] . ' VUES</p>';		   
        		
		?>	   
</body>
</html>