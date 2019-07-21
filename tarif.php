<?php
 session_start();
 require 'Database Configuration/config.php';
 include("connectes.php");
 include("Vues.php");
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" lang="fr" content="Page Inscription & Tarif The Builders Institute & Business School. Un centre de formation professionnel internationnal">
    <meta name="author" content="Bertin Mounok">
	<meta name="keyword"  lang="fr" content="The Builders Institute, Business School, High School Diploma, Associate Degree, VAA, Doctorat, Master, Sciences Politiques, Sciences Economiques, Droit, Table des US Hours Credit, Coordonnées, Centre de formation professionnel, thebuildersinstitute, TheBuildersInstitute, the_builders_in, centre de formation professionnel à vision internationnal">
    <title>Inscriptions & Tarif | The-Builders.org</title>
	
    <!-- Appel du Fichier CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/menu_vertical.css" rel="stylesheet">
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


  
  
    <section id="container">
 <!--Contenu: THE BUILDERS INSTITUTE & BUSINESS SCHOOL  et le LOGO de la page WEB--> 
  <?php include 'head.html';?>


	<section id="page-content">
	<div class="container">
		<div class="row">
		
		<!--Contenu: MENU VERTICAL version mobile, tablets et PC-->
        <?php include('menu_accordeon.html');?>
		
		
		
		
		
		
		
		
<div class="col-xs-12 col-md-4 col-lg-6">
	<article class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s"><hr>
             <div class="searchtitle">
				<p class="lead"><h3><center><u>Inscriptions & Tarif</u></center></h3></p>
				</div>
	
<p>
<strong><u>Tarifs:</u></strong>
Une session représente un cout global de 2 200 US dollars.
<ul>
 <li>Un programme de Master comporte une seule session soit un cout de 2 200 US dollars.</li>
 <li>Un programme doctoral comporte 3 sessions consécutives soit un cout total de 6 600 US dollars (le paiement de chaque session est à effectuer chaque année sur appel de fonds du secrétariat)</li>
 
 Néanmoins, les admissions par VAE ont leurs coûts à part (généralement préférentiels
 
 <strong>Formalités pour une inscription:</strong>
 
  <li>Téléchargez le formulaire normalisé (format pdf) en cliquant ci-dessous</li>
   <li>Remplir, parapher et signer le dit formulaire et le renvoyer par courriel au secrétariat <strong><mark>Info@the-builders.org</mark></strong></li>
   <li>Joindre également les documents sur la liste des annexes</li>
   <ul>
   <li>Un CV</li>
   <li>Une lettre de motivation</li>
   <li>Scan pièce identité avec photo</li>
   <li>Scan dernier diplôme obtenu / attestation professionnelle avec référence employeur</li>
   </ul>
</ul>

Une fois le dossier validé, le<strong><u> paiement des droits de scolarité doit intervenir dans les 24   à 72  heures </u></strong>selon une des options proposées au nouvel étudiant et qui reçoit ensuite  sa Virtual Student Card (VsC) et ses outils pédagogiques.

<strong><u>Paiement des droits:</u></strong>
<ul>
Sont proposés les modes de paiement suivants:
<li>Paiement électronique via la plateforme bancaire PAYZA</li>
<li>Paiement par transfert bancaire WIRE ou SEPA</li>
<li>Paiement par transfert Western Union</li>
</ul>
</p>
<h6><center><mark>Inscriptions & scolarités ouvertes en flux continu !</mark></center></h6>
</article>
</div>
				
				
		
				
<!--Contenu: Informations issues du coté droit de la page-->	
        <?php include "navDroite.html";?>
			
		</div>
	
	</div>
	</section>
		
		
		   <!--Contenu: Pied de page du site Web -->		
	<?php include "footer.html";?>

	</section>	


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
	
	
	
	<!-- Google Map -->
	<script>
		$('.maps').click(function () {
		$('.maps iframe').css("pointer-events", "auto");
	});

	$( ".maps" ).mouseleave(function() {
	  $('.maps iframe').css("pointer-events", "none"); 
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