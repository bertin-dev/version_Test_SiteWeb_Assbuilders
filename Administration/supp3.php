<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="../../images/favicon.jpg">
 <link rel="shortcut icon" href="../../images/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Coureur supprim&eacute;</title>
<style type="text/css">
.supcentrer {
	font-size: 30px;
	text-decoration: underline;
	text-align: center;
}
</style>
</head>

<?php
require "../Database Configuration/config.php";
?>


<div class="supcentrer">
<?php 
if (isset($_GET['id'])) 
{ 
$recupereID=htmlentities($_GET['id']); 
}
 
  // Connexion à la base de données
               // Valeurs à modifier selon vos paramètres configuration
      include '../configuration serveur/config_server.php';


if(!$bdd)
	{ 
      echo "Connexion impossible &agrave;base $sql_bdd serveur $sql_server<br>V&eacute;rifiez config.php"; 
	  exit;
    }   
else
  {
   $suppression = $bdd->prepare('DELETE FROM comptes_utilisateurs WHERE ID_Utilisateur ="'.$recupereID.'"');
  }
if($suppression)
      { ?><div class="moterreur"><?php echo $TsupOK ; ?><br><br></div><?php }
      else { ?><div class="moterreur"><?php echo $TsupNOOK ; ?>
  <h2><br>
    <br>
  </h2>
</div>
<h2>
  <?php }  
?>
  </h2>
<h2 class="supcentrer">Inscrit Effacé</h2>
<h2> <a href="modif.php"><img src="images/retour.png" alt="RETOUR" style="border:0;" TITLE="Retour"></a></h2>
</td>
</div>

</body>
</html>