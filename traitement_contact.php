<?php
session_start();
 require "Database Configuration/config.php";
include("connectes.php");
include("Vues.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" lang="fr" content="Page de Traitement The Builders Institute & Business School. Un centre de formation professionnel internationnal">
    <meta name="author" content="Bertin Mounok">
	<meta name="keyword"  lang="fr" content="The Builders Institute, Business School, High School Diploma, Associate Degree, VAA, Doctorat, Master, Sciences Politiques, Sciences Economiques, Droit, Table des US Hours Credit, Coordonnées, Centre de formation professionnel, thebuildersinstitute, TheBuildersInstitute, the_builders_in, centre de formation professionnel à vision internationnal">
    <title>Contact | The-Builders.org</title>
	
    <!-- Appel du Fichier CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

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
	
</head>
<body>
  <section>
 <!--Contenu: THE BUILDERS INSTITUTE & BUSINESS SCHOOL  et le LOGO de la page WEB--> 
 <?php include 'head.html';?>		

	</section>

<?php
 

 $erreur = '';
 
 if(isset($_POST['envoyer']))
 {
 
    if(!isset($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message']))  
	{
		$erreur = 'un ou plusieurs champs n\'existent pas';
	}
	
	else
	{
		if(empty($_POST['name']) or empty($_POST['email']) or empty($_POST['subject']) or empty($_POST['message']))
		{
			$erreur = 'Un ou pluisieurs champs sont encore vides\n';
			$erreur .= 'SVP veuillez les remplir!!!';
		}
		else
		{
			$nom = htmlentities(substr($_POST['name'], 0, 50), ENT_QUOTES);
			$email = htmlentities(substr($_POST['email'], 0, 50), ENT_QUOTES);
			$sujet = addslashes(htmlentities(substr($_POST['subject'], 0, 200)));
			$message = addslashes(htmlentities(substr($_POST['message'], 0, 1000)));
			$message = nl2br($message);
			
			if(!preg_match('/^[A-Z\d\._-]+@[A-Z\d\.-]{2,}\.[A-Z]{2,4}$/i', $email))
				{
					$erreur = 'votre adresse Email n\'est pas conforme'; 
				}
			if(!preg_match('/^[A-Za-z0-9_ ]{4,20}$/', $nom)) 
				{
					$erreur = 'Votre nom doit comporter entre 4 et 20 caracteres';
				}	
            if(false!=strpos($nom,chr(92)) || false!=strpos($nom,":") || false!=strpos($nom,",") || false!=strpos($nom,";")) 
	       $erreur ='Vous avez utilisé des caractères défendus dans votre nom.<br/>';

		    if(!preg_match('/^[A-Za-z0-9_. -]{4,200}$/', $sujet))
			{
				$erreur = 'Vous avez dépassé le nombre maximun de caracteres requis (200)';
			}
          			
		}
	}

 
 if($erreur=='')
 {
    include 'configuration serveur/config_server.php';
	 
	 $requete = $bdd->prepare('INSERT INTO visiteurs(nom, email, sujet, Message, ip, Date_Envoi_Message) VALUES(?, ?, ?, ?, ?, ?)');
	 $requete->execute(array($nom, $email, $sujet, $message, $ip=$_SERVER['REMOTE_ADDR'], time()));
	 
	 if(!$requete)
	 {
		 $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>votre message n'a pas pu être envoyé!</span>";
	}
	 else
	 {	 
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Votre message a été envoyé avec succès !</span>";
	 }
	 
	 echo '<div id="page-content">
		<section class="box-content box-1" id="nav-services">
			<div class="container">
				<div class="row">
					<div class="message">
						<div class="wrap">
							<!--Warning-->
							<center>'.$text.' </center>
							<div class="back"><a href="index.php" type="button" class="btn btn-skin"><<< RETOUR A LA PAGE D\'ACCUEIL</a></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
	</div>';
 }
 
   else 
   {
	$_SESSION['message_Erreur'] = $erreur;
	header("Location: contact.php");
   }
 
 }
?>

	
		<!-- ////////////Content Box 01 
    	<div id="page-content">
		<section class="box-content box-1" id="nav-services">
			<div class="container">
				<div class="row">
					<div class="message">
						<div class="wrap">
							<center><?php// echo $text;?></center>
							<div class="back"><a href="index.php" type="button" class="btn btn-skin"><<< RETOUR A LA PAGE D'ACCUEIL</a></div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>-->
	
	
		<?php include "footer.html";?>	
	<!-- Footer -->




	<!-- jQuery -->
	<script src="js/jquery-2.1.1.js"></script>
     <script src="js/jquery.js"></script><!-- jQuery _______________________________________________ajout-->

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

	<!-- Custom Theme JavaScript -->
	<script src="js/agency.js"></script>

	<!-- Animated Top -->
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/cbpAnimatedHeader.js"></script>

	
		<script>
		$(function() {
			$('#nav-wrapper').height($("#nav").height());
			
			$('#nav').affix({
				offset: { top: $('#nav').offset().top }
			});
		});
	</script>
	
	
	
	
		<!--Annimation du texte qui est dans le slide-->
	
	<script src="js/wow.min.js"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>
	
	
</body>
</html>