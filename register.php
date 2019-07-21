<?php session_start();?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" lang="fr" content="Page d'inscription The Builders Institute & Business School. Un centre de formation professionnel internationnal">
    <meta name="author" content="Bertin Mounok">
  <meta name="keyword"  lang="fr" content="The Builders Institute, Business School, High School Diploma, Associate Degree, VAA, Doctorat, Master, Sciences Politiques, Sciences Economiques, Droit, Table des US Hours Credit, Coordonnées, Centre de formation professionnel, thebuildersinstitute, TheBuildersInstitute, the_builders_in, centre de formation professionnel à vision internationnal">
    <title>Inscription | The-Builders.org</title>
	
    <!-- Appel du Fichier CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/register.css" rel="stylesheet">
	<!-- Assistant au fichier CSS -->
    <link href="css/style.css" rel="stylesheet">
	
	<!-- Assistant du fichier CSS pour le Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
	
	<!-- jQuery and Modernizr-->
	<link rel="stylesheet" href="css/animate.css">

	<link rel="icon" type="image/png" href="logo.png"/>
	
	
	<style type="text/css">
.formu {
	font-size: 18px;
	font-weight: bold;
	text-align: center;

}
.formulaireError {
	text-align: center;
    border-radius: 0px;
    background-color: #f3515c;
	border-color:#d4323d;
	color:#fff;
}

.formulaireSuccess {
	text-align: center;
    border-radius: 0px;
    background-color: #55c65e;
	border-color:#48b151;
	color:#fff;
}
</style>
	
</head>


<?php 

require 'Database Configuration/config.php';
 include("connectes.php");
 include("Vues.php");
function nettoieProtect(){

foreach($_POST as $k => $v){
  $v=strip_tags(trim($v));
  $_POST[$k]=$v;
  }
  foreach($_GET as $k => $v){
  $v=mysql_real_escape_string(strip_tags(trim($v)));
  $_GET[$k]=$v;
  }
  foreach($_REQUEST as $k => $v){
  $v=strip_tags(trim($v));
  $_REQUEST[$k]=$v;
  }

}
// Redirige l'utilisateur s'il est déjà identifié
if(isset($_COOKIE["ID_UTILISATEUR"]))
{
     header("Location: index.php");
	 exit;
}
else
{
     
     // Formulaire visible par défaut
     $masquer_formulaire = false;
     $message='';
	 $success='';
	 $i=0;
     // Une fois le formulaire envoyé
     if(isset($_POST['Inscription']))
     {
          
          // Vérification de la validité des champs
          if(!preg_match('/^[A-Za-z0-9_ ]{4,20}$/', $_POST['nom'])) 
          { 
	           $i++;
               $message .= "Nom de Famille Invalide<br />\n";
          }
		  if(!preg_match('/^[A-Za-z0-9_ ]{4,20}$/', $_POST['prenom']))
          {
			   $i++;
               $message .= "Prenom Invalide<br />\n";
          }
		  if(!preg_match('/^[A-Za-z0-9_. ]{4,20}$/', $_POST['user']))
          {
			   $i++;
               $message .= "Nom d'utilisateur Invalide<br />\n";
          }
		  
		  elseif(!preg_match('/^[A-Z\d\._-]+@[A-Z\d\.-]{2,}\.[A-Z]{2,4}$/i', $_POST['email']))
          {
			   $i++; 
               $message .= "Votre Adresse E-mail n'est pas valide <br/>";
          }
		  
          elseif(!preg_match('/^[A-Za-z0-9]{4,}$/', $_POST['password']))
          {
			   $i++;
               $message .= "Mot de passe Invalide et doit comporter au moins 4 caractères <br/>";
          }
          elseif($_POST['password'] != $_POST['password_confirmation'])
          {
			   $i++;
               $message .= "Votre mot de passe n'a pas été correctement confirmé<br/>";
          }
          
          else
          {
               
               // Connexion à la base de données
               // Valeurs à modifier selon vos paramètres configuration
                include 'configuration serveur/config_server.php';
			   
			   nettoieProtect();
               extract($_POST);
			   
			 
               
               
               // Vérification de l'unicité du nom d'utilisateur et de l'adresse e-mail
               /*$result = mysql_query("
                    SELECT Nom_Utilisateur
                         , Adresse_Email
                    FROM comptes_utilisateurs
                    WHERE Nom_Utilisateur = '" . $_POST["TB_Nom_Utilisateur"] . "'
                    OR Adresse_Email = '" . $_POST["TB_Adresse_Email"] . "'
               ");
               
			   
			   $result = $bdd->query('SELECT Nom_Utilisateur, Adresse_Email, numero_telephone FROM comptes_utilisateurs WHERE Nom_Utilisateur=\''.$_POST['nom']. '\' OR Adresse_Email =\''.$_POST['email'].'\' OR numero_telephone=\''.$_POST['numero'].'\'');
			   
			   */
			   
			   $result = $bdd->query('SELECT COUNT(*) FROM comptes_utilisateurs WHERE Nom_Utilisateur=\''.$_POST['user']. '\' OR Adresse_Email =\''.$_POST['email'].'\'');
			   
               // Si une erreur survient
               if(!$result)
               {
				    $i++;
                    $message .= "Erreur d'accès à la base de données lors de la vérification d'unicité<br/>";
               }
               else
               {
             
                    // Si un enregistrement est trouvé
                    if($result->fetchColumn() > 0)
                    {
                         $result = $bdd->query('SELECT * FROM comptes_utilisateurs WHERE Nom_Utilisateur=\''.$_POST['user']. '\' OR Adresse_Email =\''.$_POST['email'].'\'');
						 
                         //while($row = mysql_fetch_array($result))
							 while($row = $result->fetch())
                         {
                              
                              if($_POST['user'] == $row['Nom_Utilisateur'])
                              {
								 
                                   $message .= "Nom d'Utilisateur " . $_POST['user'];
                                   $message .= " déjà utilisé<br/>";
                              }
                              elseif($_POST['email'] == $row["Adresse_Email"])
                              {
								 
                                   $message .= "Adresse E-mail (" . $_POST['email'].')';
                                   $message .= " déjà utilisée<br/>";
                              }
							
                              $result->closeCursor();
                         }
                         
                    }
                    else
                    {
                         
                         // Génération de la clef d'activation
                         $caracteres = array("a", "b", "c", "d", "e", "f", 0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
                         $caracteres_aleatoires = array_rand($caracteres, 8);
                         $clef_activation = "";
                         
                         foreach($caracteres_aleatoires as $i)
                         {
                              $clef_activation .= $caracteres[$i];
                         }
                         

                         // Création du compte utilisateur
                         /*$result = mysql_query("
                              INSERT INTO comptes_utilisateurs(
                                   Nom_Propre
								   , Prenom
								   , Nom_Utilisateur
                                   , Mot_de_Passe
                                   , Adresse_Email
                                   , Date_Inscription
                                   , Clef_Activation
								   , ip
                              )
                              VALUES(
                                     '" . $_POST["TB_Nom_Propre"] . "'
								   , '" . $_POST["TB_Prenom"] . "'
								   , '" . $_POST["TB_Nom_Utilisateur"] . "'
                                   , '" . md5($_POST["TB_Mot_de_Passe"]) . "'
                                   , '" . $_POST["TB_Adresse_Email"] . "'
                                   , '" . time() . "'
                                   , '" . $clef_activation . "'
								   , '" . $ip=$_SERVER['REMOTE_ADDR']. "'
                              )
                         ");
						 */
						 
						  $result = $bdd->prepare('INSERT INTO comptes_utilisateurs (Nom_Propre, Prenom, Nom_Utilisateur, sexe, pays, Mot_de_Passe, Adresse_Email, Date_Inscription, Clef_Activation, ip) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
	                      $result->execute(array($_POST['nom'], $_POST['prenom'], $_POST['user'], $_POST['sexe'], $_POST['pays'], md5($_POST['password']), $_POST['email'], time(), $clef_activation, $ip=$_SERVER['REMOTE_ADDR']));
	             
                         // Si une erreur survient
                         if(!$result)
                         {
							  $i++;
                              $message = "Erreur d'accès à la base de données lors de la création du compte utilisateur<br/>";
                         }
                         else
                         {
                              
                              // Envoi du mail d'activation
                              $sujet = "Activation de votre compte utilisateur";
                              
                         $msg = " Ce mail vous a été envoyer car il a été enregistré lors de l'inscription sur le \n";
                         $msg .= "site web the-Builders Pour valider votre inscription, merci de cliquer sur le lien suivant :\n";
                         //$message .= "http://" . $_SERVER["SERVER_NAME"];
                          $msg .= 'http://'.$_SERVER['HTTP_HOST'];
                         //$end=end(explode('/',$_SERVER['PHP_SELF']));
						 
						 /*$a=explode('/',$_SERVER['PHP_SELF']);
						 $end=end($a);*/
						 
					     $end=current(array_reverse(explode('/', $_SERVER['PHP_SELF'])));
                         
						 $rep=str_replace($end,'',$_SERVER['PHP_SELF']);
                         $msg .= $msg.$rep.'<a href=activer-compte-utilisateur.php?id='.$bdd->lastInsertId(); //"mysql_insert_id();
                         $msg .= '&clef='. $_SESSION['clef_activation'].'>Lien</a>';
                              
							  
							  
							  /* Pour envoyer le courrier HTML, vous pouvez mettre l'en-tête du Contenu-type */
                          $headers  = 'MIME-Version: 1.0' . "\r\n";
                          $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                             /* additional headers */
                          $headers .= "To: ".$_POST['prenom'].' '.$_POST['nom']." <".$_POST['email'].">\r\n";
                          $headers .= "From: Site <info@the-Builders.org>\r\n";



                              // Si une erreur survient
                              if(!@mail($_POST['email'], $sujet, $msg, $headers))
                              {
                                   $success = "Une erreur est survenue lors de l'envoi du mail d'activation<br />\n";
                                   $success .= "Veuillez contacter l'administrateur afin d'activer votre compte<br/>";
								   $success .= ''.$msg;
                              }
                              else
                              {
                                   
                                   // Message de confirmation
                                   $success = "Votre compte utilisateur a partiellement été créée<br />\n";
                                   $success .= "Un email vient de vous être envoyé afin de l'activer";
                                   
                                   // On masque le formulaire
                                   $masquer_formulaire = true;
								   
								   								   
								 //L'utilisateur à 48h (172800 secondes) pour valider son inscription par mail: 
								 //(le rafraichissement de la base se fait lors de l'inscription d'une personne).
								   /*$heure=time();
                                 mysql_query("DELETE FROM comptes_utilisateurs WHERE Date_Inscription < ($heure - 172800) AND Compte_Active='0'");*/
 
                                $suppression = $bdd->prepare('DELETE FROM comptes_utilisateurs WHERE Date_Inscription <"'.(time() - 172800).'" AND Compte_Active=0"');
                                   
                              }
                              
                         }
                         
                    }
                    
               }
               
          }
          
          // Fermeture de la connexion à la base de données
          //$result->closeCursor();
          
     }
     
}


?>



<body>
<div id="wrapper">
	<!-- start header -->
	<?php
	  	include 'head.html';
	?>	  
	<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="index.php" title="Accueil | The-Builders"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active" title="Inscrivez-vous Ici">Inscription</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
<div class="container">

<div class="row wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
	
    		  <!--GETSION DES ERREURS REVOYEES PAR LE FORMULAIRE-->	
		<p class="formulaireError"><span class="formu">
  <?php if(isset($message)&& $message!='') 
  {
	   
		   if($i==1)
		   { 
      	    echo 'il y a '. $i .' erreur<br/>';
			echo $message;
		   }
           else if($i>1)
		   { 
     	   echo 'il y a '. $i .' erreurs<br/>';
           echo $message;		   
		   }
           else echo $message;		   
     } 
  ?>
  </span>
</p>
     
	 <p class="formulaireSuccess"><span class="formu">
    <?php
      if(isset($success) && $success!='')
	  {
		echo $success;		
	  }
	?>
	  </span>
	  </p>
	
	
	<?php
       //si cette condition est vérifié alors afficher le formulaire complet 	
	 if($masquer_formulaire == false)
     {
	 ?>
	<!-- _____________________________________________________Gestion entière du formulaire d'inscription_________________________________________________________________-->
		<form method="Post" action="http://<?php echo $_SERVER["SERVER_NAME"] . $_SERVER["SCRIPT_NAME"]; ?>" class="register-form"><!--role="form"-->
			<h2>Inscrivez-vous <small>C'est Gratuit</small></h2>
			<hr class="colorgraph">
			
			
			<!-- ____________________________________________________Gestion des Noms et Prenoms___________________________________________________________-->
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="nom" required id="nom" class="form-control input-lg" placeholder="Nom" tabindex="1" value="<?php if(isset($_POST['nom'])){echo $_POST['nom'];}?>">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="prenom" required id="prenom" class="form-control input-lg" placeholder="Prenom" tabindex="2" value="<?php if(isset($_POST['prenom'])){echo $_POST['prenom'];}?>">
					</div>
				</div>
			</div>
			
			<!-- __________________________________________________Gestion des Noms complet_____________________________________________________________-->
			<div class="form-group">
				<input type="text" name="user" required id="nom_complet" class="form-control input-lg" placeholder="Nom complet" tabindex="3" value="<?php if(isset($_POST['user'])){echo $_POST['user'];}?>">
			</div>
			
			<!-- ___________________________________________________Gestion du Sexe____________________________________________________________-->
		   
			
			
				<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					 <div class="form-group">		
                         <input type="radio" required name="sexe" value="M" id="sexeM" tabindex="4"><font size="2"><label> Homme </label></font>
                         <input type="radio" required name="sexe" value="Mme" id="sexeF" tabindex="5"><font size="2"><label> Femme</label></font>
			        </div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
					    <input type="text" id="t1" name="pays" list="l1" required pattern="[Cc]ameroun|[Ff]rance|[Aa]ngleterre|[Bb]elgique|[Ee]tats-Unies|[Au]tres">
                        <datalist id="l1">
                        <option>Cameroun</option>
                        <option>France</option>
                        <option>Angleterre</option>
                        <option>Belgique</option>
                        <option>Etats-Unies</option>
                        <option>Autres</option>
                     </datalist>
					 <font size="1"><label for="t1">Ex: Gabon</label></font>
					</div>
				</div>
				
			</div>
			
			<!-- ____________________________________________________Gestion des Emails___________________________________________________________-->
			<div class="form-group">
				<input type="email" name="email" class="form-control input-lg" placeholder="exemple@the-Builders.org" tabindex="6">
			</div>
			<!-- ______________________________________________Gestion des Password_________________________________________________________________-->
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" required id="password" class="form-control input-lg" placeholder="mot de passe" tabindex="7">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" required name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirmez le mot de passe" tabindex="8"><br/>
					</div>
				</div>
				<!-- ______________________________________INSERTION D'UNE IMAGE____________________________________________________-->
			</div>
			
			
			 <!-- _____________________________________Bouton d'accord sur les conditions d'utilisations des cookies______________________________________________________________-->
			<div class="row">

				<div class="col-xs-8 col-sm-9 col-md-9">
					 Cliquez sur <strong class="label label-primary">Incription</strong>, signifi que Vous Acceptez les Conditions d' utilisation des cookies.
				</div>
			</div>
			
			<hr class="colorgraph">
			
			<!-- _______________________________________________________Boutton d'envoi de la requete_______________________________________________________-->
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" name="Inscription" value="Inscription" class="btn btn-theme btn-block btn-lg" tabindex="8"></div>
				<div class="col-xs-12 col-md-6">Avez-Vous un Compte? <a href="login.php">Connectez-vous</a></div>
			</div>
			
		</form><!-- ____________________________________________________fin du formulaire d'inscription___________________________________________________________-->
		
		<?php
	 }
	 ?>
	</div>
</div>

</div>
	</section>

   <!--Contenu: Pied de page du site Web -->		
	<?php include "footer.html";?>
	
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/stellar.js"></script>
<script src="js/classie.js"></script>
<script src="js/uisearch.js"></script>
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>


	<script src="js/wow.min.js"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>
</body>
</html>