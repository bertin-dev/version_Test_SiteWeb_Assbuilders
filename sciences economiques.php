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
    <meta name="description" lang="fr" content="Page de Science Politique The Builders Institute & Business School. Un centre de formation professionnel internationnal">
    <meta name="author" content="Bertin Mounok">
	<meta name="keyword"  lang="fr" content="The Builders Institute, Business School, High School Diploma, Associate Degree, VAA, Doctorat, Master, Sciences Politiques, Sciences Economiques, Droit, Table des US Hours Credit, Coordonnées, Centre de formation professionnel, thebuildersinstitute, TheBuildersInstitute, the_builders_in, centre de formation professionnel à vision internationnal">
    <title>Sciences Economiques & Communication | The-Builders.org</title>
	
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
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
	
	
	
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
				<p class="lead"> <h3><center><u>Sciences Economiques, Finances, Gestion, Comptabilité et Audit</u></center></h3></p>
				</div>
<p>Programme accessible aux professionnels spécialisés en Economie générale ou Economie spécialisée, la Finance, la Gestion, la Comptabilité et Audit, la Logistique ou encore le Transport.

Le cursus est organisé sur la base de trois exercices imposés:

<ul>
<li>Un test de connaissance générale</li>
<li>Un stage en ligne ou présentiel </li>
<li>Une mini-synthèse de 80 pages</li>
</ul>
Programmes accessibles aux titulaires du Bachelor ou ayant 3 années professionnelles dans ces domaines.
</p>
<h6>6 spécialisations en Economie sont proposées en mode<center> ele@rning integral.</center></h6>
	
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