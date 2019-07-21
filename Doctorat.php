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
    <meta name="description" lang="fr" content="Page Doctorat The Builders Institute & Business School. Un centre de formation professionnel internationnal">
    <meta name="author" content="Bertin Mounok">
	<meta name="keyword"  lang="fr" content="The Builders Institute, Business School, High School Diploma, Associate Degree, VAA, Doctorat, Master, Sciences Politiques, Sciences Economiques, Droit, Table des US Hours Credit, Coordonnées, Centre de formation professionnel, thebuildersinstitute, TheBuildersInstitute, the_builders_in, centre de formation professionnel à vision internationnal">
    <title>Doctorat | The-Builders.org</title>
	
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
				<p class="lead"><h3><center><u>Doctorat</u></center></h3></p>
				</div>

<p>Le Doctorat of Business Administration DBA est le premier grade professionnel délivré par un établissement universitaire à destination des adultes et actifs du Management aux USA.<br/>
Reso-Builders Academy développe avec ses différents partenaires des programmes doctoraux à vocation professionnelle en Management International à travers ses multiples aspects: Economie mondiale,  Macro et Micro Economie, Géopolitique, Droit, Santé publique etc...

<h6>Le cursus se déroule en 3 sessions successives (3 ans):</h6>

<ul>
<li>Session 1 & 2: contrôle continu 1-2, stage professionnel obligatoire et approche méthodologique du mémoire doctoral de 150 pages phase 1-2</li>
<li>Session 3: finalisation du mémoire de thèse</li>
</ul>
</p>

<p>

<h6>Les spécialisations et options du DBA proposées sont:</h6>
<ul>

<li>Management de Projets</li>
<li>Management des Projets de construction (approche Génie Civil)</li>
<li>Développement Durable & Environnemental</li>
<li>Coopération Internationale & Développement International</li>
<li>Vie et Culture des Entreprises</li>
<li>Gestion des Ressources Humaines</li>
<li>Finances, Audit & Gestion</li>
<li>Management des Organisations</li>
<li>Transport & Logistique</li>
<li>Leadership Organisationnel</li>
<li>Management de la Santé Publique Internationale</li>
<li>Droit des Affaires & Globalisation</li>
<li>Management de la Santé publique</li>
<li>Diplomacy & International Security*</li>
<li>Automotive Management*</li>
<li>International Business Law & Global Economy *</li>

<mark>(*) cursus en anglais uniquement</mark>


<h6 title="Nos doctorats sont éligibles à la certification de plus haut niveau délivrée par le World Certification Institute">Nos doctorats sont éligibles à la certification de plus haut niveau délivrée par le World Certification Institute<center>(WCI)</center></h6>

</ul>
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