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
    <title>Sciences Politiques | The-Builders.org</title>
	
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

  <section id="container" class="">

			 <!--Contenu: THE BUILDERS INSTITUTE & BUSINESS SCHOOL  et le LOGO de la page WEB--> 
             <?php include 'head.html';?>
	
	
	<div id="page-content">
		
		<!-- ////////////Content Box 02 -->
	     
		<section id="content">
	<div class="container">
		<div class="row">
		
		
	<!--Contenu: MENU VERTICAL version mobile, tablets et PC-->
        <?php include('menu_accordeon.html');?>
		
		
		
		
		
		
		
		
			<div class="col-xs-12 col-md-4 col-lg-6">
	     <article class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s"><hr>
	           <div class="searchtitle">
				<p class="lead"> <h3><center><u>Sciences Politiques & Communication<br/></u></center></h3></p>
				</div>
	 <p>
	  Ce programme spécial concerne les personnes ayant débuté ou achevé un cursus de Sciences Politiques,  de Communication ou de Droit.
	 </p>
        <h6>Eligibilité</h6>
	 <ul>
	  <li>Avoir un acquis en Sciences Politiques, de Communication ou de Droit</li>
      <li>Programme ouvert à tous</li>
    </ul>
	 
	 <h6>2 spécialisations de Sciences Politiques sont proposées<center> en mode e-l@arning intégral</h6>
	Liste des modules pédagogiques en fonction des spécialisations:</center>
	 <ul>
	 <li>Relations internationales, diplomatie, sécurité et développement</li>
	 <ul>
	 <li>Introduction au droit international</li>
	 <li>Théories économiques dans les Relations Internationales</li>
	 <li>Investissement international</li>
	 <li>Les blocs économiques régionaux</li>
	 <li>ONU et opérations de maintien de la Paix</li>
	 <li>MINUSTAH: état des lieux</li>
	 <li>Afrique et le XXe siècle</li>
	 <li>Droit historique et droit positif en Europe danubienne</li>
	 <li>Sociologie du contrôle social</li>
	 <li>Analyses statistiques appliquées aux sciences sociales</li>
	 <li>Les droits humains et le système des Nations Unies</li>
	 <li>Le droit social</li>
	 <li>Être humain et société</li>
	 <li>Théories du choix des investissements</li>
	 <li>Structuration et organisation du management de projet</li>
	 <li>Approche du guide PMBOK</li>
	 </ul>
     <li>Communication publique, lobbying & journalisme</li>
	 <li>Théories de la communication</li>
	 <li>Les techniques de communication</li>
	 <li>La communication sociale</li>
	 <li>Les enjeux de la communication publique</li>
	 <li>Journalisme et médias</li>
	 <li>les TICs et SRS</li>
	 Le cursus est organisé sur la base de trois exercices imposés:
	 <li>Un test de connaissance générale</li>
	 <li>Un stage en ligne ou présentiel</li>
	 <li>Un test de connaissance générale</li>
	 </ul>
	 <h6>Qualification obtenue: Master en Sciences Politiques<center>& Communication</center></h6>
	 
   </article>
				
				
		</div>		
				
			<!--Contenu: Informations issues du coté droit de la page-->	
        <?php include "navDroite.html";?>
			
		</div>
	</div>
	</section>
		
		
		
		

		
	</div>
		
 
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