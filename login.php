<?php session_start();?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" lang="fr" content="Page de Connexion The Builders Institute & Business School. Un centre de formation professionnel internationnal">
    <meta name="author" content="Bertin Mounok">
  <meta name="keyword"  lang="fr" content="The Builders Institute, Business School, High School Diploma, Associate Degree, VAA, Doctorat, Master, Sciences Politiques, Sciences Economiques, Droit, Table des US Hours Credit, Coordonnées, Centre de formation professionnel, thebuildersinstitute, TheBuildersInstitute, the_builders_in, centre de formation professionnel à vision internationnal">
    <title>Login | The-Builders.org</title>
	
    <!-- Appel du Fichier CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<link href="css/menu_vertical.css" rel="stylesheet">
	<!-- Assistant au fichier CSS -->
    <link href="css/style.css" rel="stylesheet">
	
	<!-- Assistant du fichier CSS pour le Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- Assistant du fichier CSS pour les icones-->
	<link href="css/elegant-icons-style.css" rel="stylesheet" />
	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
	
	<!-- jQuery and Modernizr-->
	<script src="js/jquery-2.1.1.js"></script>
    <link rel="stylesheet" href="css/animate.css">
	<link rel="icon" type="image/png" href="logo.png"/>

	
	<style>
	.formu {
	font-size: 18px;
	font-weight: bold;
	text-align: center;

}
.formulaireSuccess {
	text-align: center;
    border-radius: 0px;
	color:#fff;
}
	</style>
</head>

<?php 


require "Database Configuration/config.php"; 
include("connectes.php");
include("Vues.php");
// Redirige l'utilisateur s'il est déjà identifié
if(isset($_COOKIE['ID_UTILISATEUR']))
{
$deconnexion='<a href="Deconnexion.php"> <button class="btn btn-info btn-lg btn-block" title="Vous êtes sur le Point de vous déconnecter" type="button">Deconnexion</button></a>';
$masquer_formulaire = true;	 
}


else
{
     
     // Formulaire visible par défaut
     $masquer_formulaire = false;
     
	 //empeche les balises html de s'executer, transforme les apostrophes et guillemet(ENT_QUOTES) et limite le nombre de caractere à 50
	 /*$email=htmlentities(substr($_POST['email'],0,50), ENT_QUOTES);
	 $pass=htmlentities(substr($_POST['password'],0,50), ENT_QUOTES);
	 */
	 
	 
     // Une fois le formulaire envoyé
     if(isset($_POST['authentification']))
     {
          
          // Vérification de la validité des champs
		   
		   if(!preg_match('/^[A-Z\d\._-]+@[A-Z\d\.-]{2,}\.[A-Z]{2,4}$/i', $_POST['email']))
          {
               $message = "Votre adresse Email n'est pas valide <br/>\n";
          }
          elseif(!preg_match('/^[A-Za-z0-9]{4,}$/', $_POST['password']))
          {
               $message = "Votre mot de passe doit comporter au moins 4 caractères";
          }
          else
          {
               
               // Connexion à la base de données
               // Valeurs à modifier selon vos paramètres configuration ------------------------------------------------------------------------------------------------ 
			 include 'configuration serveur/config_server.php';
               
               // Sélection de l'utilisateur concerné------------------------------------------------------------------------------------------------------------------
               
			   /*
			   $result = mysql_query("
                    SELECT ID_Utilisateur, Nom_Utilisateur, Mot_de_Passe, Compte_Active
                    FROM comptes_utilisateurs
                    WHERE Nom_Utilisateur = '" . $_POST["TB_Nom_Utilisateur"] . "'
               ");*/	   
			   //$result = $bdd->query('SELECT ID_Utilisateur, Mot_de_Passe, Adresse_Email, Compte_Active FROM comptes_utilisateurs WHERE Adresse_Email=\''.$_POST['email']. '\'');
			   $result = $bdd->query('SELECT COUNT(*) AS nb_Emails FROM comptes_utilisateurs WHERE Adresse_Email=\''.$_POST['email']. '\'');
			   $decompt = $result->fetch();
			   /*
               $Date_Connexion=time();			  
              mysql_query("UPDATE comptes_utilisateurs SET Date_Connexion ='$Date_Connexion' WHERE Nom_Utilisateur= '" . $_POST["TB_Nom_Utilisateur"] . "'");*/
               
			    $miseAjour = $bdd->prepare('UPDATE comptes_utilisateurs SET Date_Connexion = :nvTimestamp WHERE Adresse_Email='.$_POST['email']);
	            $miseAjour->execute(array('nvTimestamp' => time()));
			   
               // Si une erreur survient
               if(!$result)
               {
                    $message = "Une erreur est survenue lors de la tentative de connexion";
               }
               else
               {
                    
                    // Si aucun utilisateur n'a été trouvé
                    if($decompt['nb_Emails'] == 0)
                    {
                         $message = "Votre Adresse Email: " . $_POST['email'] . " n'existe pas<br/>";
						 $message .= "SVP veuillez Vous inscrire.";
                    }
                    else
                    {
                         
                         // Récupération des données-------------------------------------------------------------------------------------------------------------
                         //$row = mysql_fetch_array($result);
						 $retour = $bdd->query('SELECT * FROM comptes_utilisateurs WHERE Adresse_Email=\''.$_POST['email']. '\'');
                         $row = $retour->fetch();
						 
                         // Si le compte n'a pas été activé
                         if($row['Compte_Active'] == 0)
                         {
                              $message = "Votre compte utilisateur n'a pas été activé <br/>";
							  $message .="pour l'activer, cliquez sur le lien qui vous a été envoyé dans votre boite Email";
                         }
                         else
                         {
                              
                              // Vérification du mot de passe
                              if(md5($_POST['password']) != $row['Mot_De_Passe'])
                              {
                                   $message = "Mot de passe est incorrect";
                              }
                              else
                              {
                                   
                                   // Définition du temps d'expiration des cookies (90jours)
                                   $expiration = empty($_POST['t_and_c']) ? 0 : time() + 90 * 24 * 60 * 60;
                                   
                                   // Création des cookies
                                   setcookie("ID_UTILISATEUR", $row["ID_Utilisateur"], $expiration, "/");
                                   setcookie("NOM_UTILISATEUR", $row["Nom_Utilisateur"], $expiration, "/");
								   
								   //L'utilisateur à 48h (172800 secondes) pour valider son inscription par mail: 
								 //(le rafraichissement de la base se fait lors de la connexion d'une personne).			 
								  $heure=time();
                                 /*mysql_query("DELETE FROM comptes_utilisateurs WHERE Date_Inscription < ($heure - 172800) AND Compte_Active='0'");*/
								  $suppression = $bdd->prepare('DELETE FROM comptes_utilisateurs WHERE Date_Inscription <"'.($heure - 172800).'" AND Compte_Active=0"');
                                   if(!$suppression){ $msg = 'Votre compte à été supprimé';}
                                   else
								   {
									   $_SESSION['nom'] = $row['Nom_Propre'];
									   $_SESSION['prenom'] = $row['Prenom'];
									   
									   $msg = 'Bonjour M. '.$_SESSION['prenom'].' '.$_SESSION['nom'].' Soyez le Bienvenue <br>';
								   }								   
                                   // Fermeture de la connexion à la base de données
                                   /*mysql_close();*/
                                   $retour->closeCursor();
								   $masquer_formulaire = true;
                                   // Redirection de l'utilisateur
                               
								  
                              }
                              
                         }
                         
                    }
                    
               }
               
               // Fermeture de la connexion à la base de données
               $result->closeCursor();
               
          }
          
     }
     
}
?>






  <body class="login-img3-body">

    <div class="container">
    <section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="index.php" title="Accueil | The-Builders"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active" title="Connectez-Vous Ici"><?php if(isset($_COOKIE['ID_UTILISATEUR'])) echo 'Deconnexion'; else echo 'Connexion';?></li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	
	
	    
	<?php 
	
	      if($masquer_formulaire==false)
		  {
			 ?>
			 
 <form class="login-form wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s" method="post" action="http://<?php echo $_SERVER["SERVER_NAME"] . $_SERVER["SCRIPT_NAME"]; ?>">        
        <div class="login-wrap">
		 <a href="index.php#page-top"><center><img src="logo.png" alt="Logo The Builders" width="80"></center></a>
            
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope fa-2x"></i></span>
			  <input type="email" name="email" required class="form-control input-lg" placeholder="exemple@the-Builders.org" tabindex="1" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" name="password" required class="form-control input-lg" placeholder="Mot de Passe" tabindex="2">
            </div>
          
               
	                 <a href="#">  <span class="pull-right" style="color:#286090;">Password Oublié?</span></a>
					<span class="button-checkbox">
						<input type="checkbox" value="remember-me"><span style="color:#286090;"> Souvenez-Vous</span>
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
				   </span>
			<hr class="colorgraph">
			
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="authentification" title="Connectez-Vous!!!">Connexion</button>
		    <a href="register.php"> <button class="btn btn-info btn-lg btn-block" title="Inscription Gratuite!!!" type="button">Inscription</button></a>
        </div>
      </form>
	  
	  <?php
		  }
		  
		  
		  	 if($masquer_formulaire!=false)
		  {	  
	  ?>
		  <div class="login-form login-wrap">
		  <a href="index.php#page-top"><center><img src="logo.png" alt="Logo The Builders" width="80"></center></a>
		  <center><?php echo 'Vous êtes Connectés';?></center>
		  <hr class="colorgraph">
		  <?php 
		  if(isset($deconnexion))
	      echo $deconnexion;
	      ?>
		  	
	 <p class="formulaireSuccess"><span class="formu">
    <?php
      if(isset($msg) && $msg!='')
	  {
		echo $msg;		
	  }
	?>
	  </span>
	  </p>
		  <hr class="colorgraph">
          </div>
		  <?php 
		  }
		  ?>
		  
		  
		  
 <!--GESTION D'ERREUR D'IDENTIFICATION FORMULAIRE DE CONNEXION-->  
   <center style="color: white;">
  <?php if(isset($message)) { ?>
  <?php echo $message; ?>
  <?php } if($masquer_formulaire != true) { ?>
  <?php } ?>
  </center>
	  
	
    </div>


<script src="js/wow.min.js"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>
  </body>
</html>
