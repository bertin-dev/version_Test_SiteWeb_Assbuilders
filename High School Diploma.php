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
    <meta name="description" lang="fr" content="Page High School Diploma The Builders Institute & Business School. Un centre de formation professionnel internationnal">
    <meta name="author" content="Bertin Mounok">
	<meta name="keyword"  lang="fr" content="The Builders Institute, Business School, High School Diploma, Associate Degree, VAA, Doctorat, Master, Sciences Politiques, Sciences Economiques, Droit, Table des US Hours Credit, Coordonnées, Centre de formation professionnel, thebuildersinstitute, TheBuildersInstitute, the_builders_in, centre de formation professionnel à vision internationnal">
    <title>High School Diploma | The-Builders.org</title>
	
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
		
		<!--Contenu: INFORMATIONS SUR LE LIEN CLIQUE-->
<div class="col-xs-12 col-md-4 col-lg-6">
	<article class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s"><hr>
	           <div class="searchtitle">
				<p class="lead"> <h3><center><u>High School Diploma</u></center></h3></p>
				</div>
				

<p>Le High School Diploma est un titre académique américain équivalent du baccalaureat et permettant une entrée en université ou en établissement supérieur.<br/>
Un étudiant diplômé High School Diploma d’une de nos institutions partenaires pourra suivre les enseignements de MBA ou DBA après un Bachelors (BBA, BA; BSc...) dans un établissement tiers partenaires.<br/>

Le High School Diploma se prépare à distance, en ligne,  sur la base de 7 grandes spécialités:<br/>
<ol>
<li><i class="fa fa-angle-right"></i>Anglais</li>
<li><i class="fa fa-angle-right"></i>Humanités et Histoire contemporaine</li>
<li><i class="fa fa-angle-right"></i>Droit & Philosophie</li>
<li><i class="fa fa-angle-right"></i>Mathématiques</li>
<li><i class="fa fa-angle-right"></i>Français langue étrangère</li>
<li><i class="fa fa-angle-right"></i>Arts & dessin</li>
<li><i class="fa fa-angle-right"></i>Société</li>
</ol>
</p>

<p>
Les examens se déroulent en français sur les 6 grandes spécialités non linguistiques en fonction  de sessions personnalisées, sécurisées à travers un entretien particulier avec le responsable du programme.
</p>

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