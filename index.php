<?php session_start();?>

<?php
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
    <meta name="description" lang="fr" content="Page de Traitement The Builders Institute & Business School. Un centre de formation professionnel internationnal">
    <meta name="author" content="Etudiant Bertin Mounok, Dr. Philippe Totto Ndong">
	<meta name="keyword"  lang="fr" content="The Builders Institute, Business School, High School Diploma, Associate Degree, VAA, Doctorat, Master, Sciences Politiques, Sciences Economiques, Droit, Table des US Hours Credit, Coordonnées, Centre de formation professionnel, thebuildersinstitute, TheBuildersInstitute, the_builders_in, THE_BUILDERS_IN, centre de formation professionnel à vision internationnal, Bertin_Mounok, Philippe_Totto">
    <title>Accueil | The-Builders.org</title>
	
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
	<!-- Icône du site (favicon) -->
	<link rel="icon" type="image/png" href="logo.png"/>
	<!-- Fil RSS du site -->
    <link rel="alternate" type="application/rss+xml" title="News de mon site" href="news.xml" />
	<!-- Page d'aide du site -->
    <link rel="help" title="Politique d'accessibilité" href="accessibilite.html" />
	
    <!-- Page d'accueil du site -->
    <link rel="start" title="Accueil | http://www.the-Builders.org" href="index.php" />
	
</head>
<body>

  

  
  <!--Contenu: Globale de la page WEB-->
  <section>
 <!--Contenu: THE BUILDERS INSTITUTE & BUSINESS SCHOOL  et le LOGO de la page WEB--> 
 <?php include 'head.html';?>
	
	
	
	
	
	
	<!--Contenu Partiel de la page WEB ie Section, article, sidebar, aside et footer-->
	<div id="page-content">    
		<section id="content">
	<div class="container">
		<div class="row">
		
		<!--Contenu: MENU VERTICAL version mobile, tablets et PC-->
        <?php include('menu_accordeon.html');?>
		
		
		
		
		
		
		
		    <!--Contenu: Informations sur le site provenant du lien cliqué sur le menu vertical accordeon-->
			<div class="col-xs-12 col-md-4 col-lg-6">
				
	        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">			
				<!--Contenu: Message de Bienvenue-->
				<div class="searchtitle" id="slogan">
				<p class="lead"> <h3><center><u>Inscriptions ouvertes A partir du 09 Janvier 2017</u></center></h3></p>
				</div>					
				<!---------------CARROUSSE N1 -------------------->
				  <?php include("slider.html");?>
	
	
	<!--Contenu: INFORMATIONS SUR LE LIEN CLIQUE-->
	<article class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s" id="presentation"><hr>	
	 <h4><center>Bienvenue sur le campus numérique de Reso-Builders & Business Academy </center> </h4>
	 <p>
	 le campus numérique de Reso-Builders & Business Academy qui est une association exclusivement centrée sur l’enseignement. Il est un réseau universitaire, avec plusieurs partenariats avec des universités internationales, spécialisé dans les enseignements par correspondance (e-learning system) à destination uniquement des adultes professionnels qui souhaitent étudier tout en conservant leur activité professionnelle et/ou préserver leur vie de famille.
	 </p>
	 
	 <h6>Nos atouts:</h6>
	 <p>
	 <ul class="cat slides">
	 <li><i class="fa fa-angle-right"></i>le choix du mode e-le@rning ou en valorisation des acquis* au choix des étudiants</li>
     <li><i class="fa fa-angle-right"></i>la garantie de la confidentialité de votre cursus de niveau et qualification graduate, postgraduate ou doctoral</li>
     <li><i class="fa fa-angle-right"></i>disponibilité permanente de notre équipe administrative et pédagogique francophone</li>
     <li><i class="fa fa-angle-right"></i>intégration à un réseau inter-universitaire international</li>
     <li><i class="fa fa-angle-right"></i>homologation internationale de nos qualifications et diplômes par le World Certification Institute (WCI) pour nos étudiants diplomés exerçant une activité professionnelle</li>
     <li><i class="fa fa-angle-right"></i>des homologations nationales et internationales depuis 2012</li>
     </ul>
	 <abbr title="Texte Important">(*)</abbr> la valorisation des acquis professionnelle est disponible sur examen de dossier et sur demande auprès du secrétariat.
	 </p>
	 
    
	
	
	
	
		<div class="parallax-window">
		<div class="col-md-6 col-md-offset-3">
			<div class="text-center">
				<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.2s">
					<h2>The Builders®</h2>
				</div>
				<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.6s">
					<p>Notre stratégie est, entre autre, de former des jeunes gratuitement qui accepterons par la suite de devenir des formateurs bénévoles. De fait, nos coach-formateurs seront des bénévoles, membres de l’association
					</p>
				</div>
			</div>
		</div>
		<div class="sub-parallax">
			<div class="text-center">
				<div class="col-md-12">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.9s">
						<form class="form-inline">
							<div class="form-group">
								<button type="purchase" name="purchase" class="btn btn-primary btn-lg" required="required">The Builders Association</button>
							</div>
							<div class="form-group">
								<button type="subscribe" name="subscribe" class="btn btn-primary btn-lg" required="required">The Builders Institute</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div><!--/#parallax-window-->

   </article>
                    <hr>
					<?php include 'configuration serveur/config_server.php';
					$result=$bdd->query('SELECT sujet_a_la_une FROM a_la_une');
					$donnee=$result->fetch();
					?>
					
                    <ul class="breadcrumb">
					<li><a href="index.php" title="Flux d'informations"><i class="fa fa-rss"></i></a><i class="icon-angle-right"></i></li>
					<li class="active" title="Inscrivez-vous Ici"><u>A LA UNE : </u><?php echo $donnee['sujet_a_la_une'];?></li>
				    </ul>
					<?php
					     $result->closeCursor();
					?>
	</div>
	</div><!-- END col-xs-12 col-md-4 col-lg-6-->		
	
	 <!--Contenu: Informations issues du coté droit de la page-->	
        <?php include "navDroite.html";?>
			
		</div>
	</div>
	</section>
	</div>
	
	
	
	  <!--Contenu: Pied de page du site Web -->		
	<?php include "footer.html";?>

<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Termes & Conditions d'utilisation</h4>
			</div>
			<div class="modal-body">
				<p><br>
				 <center><h1>Conditions d’utilisation de <u>Reso-Builders</u></h1></center><hr>
				 Date de la dernière modification : 03 janvier 2017<br>
				 <h4>Bienvenue sur the builders !</h4>
				 Merci d’avoir choisi notre centre et services (les « Services »). Les Services sont fournis par le centre de formation the Builders Institute & Business School.<br>
				 L’utilisation de nos Services implique votre acceptation des présentes Conditions d’Utilisation. Nous vous invitons à les lire attentivement.<br>
				 Nos Services sont très variés : il se peut donc que des conditions additionnelles ou particulières à certains Services (p. ex. des conditions de limite d’âge) s’appliquent. Ces conditions additionnelles seront mises à votre disposition avec les Services concernés. Si vous choisissez d’utiliser ces Services, vous acceptez que ces conditions additionnelles fassent alors également partie de votre engagement contractuel avec nous
				</p>
				<p>
				<h4>Utilisation de nos Services</h4>

    Vous devez respecter les règles applicables aux Services que vous utilisez.
N’utilisez pas nos Services de façon impropre. Ne tentez pas, par exemple, de produire des interférences avec nos Services ou d’y accéder en utilisant une méthode autre que l’interface et les instructions que nous mettons à votre disposition. Vous ne devez utiliser nos Services que dans le respect des lois en vigueur, y compris les lois et réglementations applicables concernant le contrôle des exportations et ré-exportations. Nous pouvons suspendre ou cesser la fourniture de nos Services si vous ne respectez pas les conditions ou règlements applicables, ou si nous examinons une suspicion d’utilisation impropre.

L’utilisation de nos Services ne vous confère aucun droit de propriété intellectuelle sur nos Services ni sur les contenus auxquels vous accédez. Vous ne devez utiliser aucun contenu obtenu par l’intermédiaire de nos Services sans l’autorisation du propriétaire dudit contenu, à moins d’y être autorisé par la loi. Ces Conditions d’Utilisation ne vous confèrent pas le droit d’utiliser une quelconque marque ou un quelconque logo présent dans nos Services. Vous n’êtes pas autorisé à supprimer, masquer ou modifier les notices juridiques affichées dans ou avec nos Services.


Dans le cadre de votre utilisation des Services et de l’exécution de notre engagement contractuel, nous sommes susceptibles de vous adresser des messages liés au fonctionnement ou à l’administration des Services ainsi que d’autres informations. Vous pouvez choisir de ne plus recevoir certains de ces messages.

Certains de nos Services sont disponibles sur les appareils mobiles. Ne les utilisez pas d’une manière susceptible de vous distraire et de vous empêcher de respecter le code de la route et les règles de sécurité en matière de conduite
				</p>
				<p>
				<h4>Votre compte The Builders</h4>

Vous pouvez avoir besoin d’un compte The Builders pour utiliser certains de nos Services. Votre compte The Builders peut être créé par vous-même ou vous être attribué par un administrateur (par exemple, votre employeur ou votre établissement d’enseignement). Si votre compte The Builders vous a été attribué par un administrateur, il se peut que des conditions d’utilisation différentes ou additionnelles s’appliquent et que votre administrateur puisse accéder à votre compte ou le désactiver.

Pour protéger votre compte The Builders, préservez la confidentialité de votre mot de passe. Vous êtes responsable de l’activité exercée dans votre compte The Builders ou par le biais de celui-ci. Veillez à ne pas réutiliser le même mot de passe que celui associé à votre compte The Builders, dans des applications tierces. Si vous découvrez que votre mot de passe ou votre compte The Builders a fait l’objet d’une utilisation non autorisée, signalez nous.
               </p>
				
				<p>
				<h4>Protection de la vie privée et des droits d’auteur</h4>

Les Règles de confidentialité de The Builders expliquent comment nous traitons vos données à caractère personnel et protégeons votre vie privée lors de votre utilisation de nos Services. En utilisant nos Services, vous acceptez que The Builders puisse utiliser ces données conformément à ces Règles de confidentialité de The Builders.

Nous répondons aux notifications d’atteinte présumée aux droits d’auteur et désactivons les comptes des utilisateurs ayant plusieurs fois porté atteinte à ces droits, conformément à la procédure établie par la loI dénommée « Digital Millennium Copyright Act ».

Nous fournissons aux titulaires de droits d’auteur les informations nécessaires pour les aider à gérer leur propriété intellectuelle en ligne. Si vous pensez qu’un utilisateur porte atteinte à vos droits d’auteur et que vous souhaitez nous en avertir, veuillez Nous contacter nous sommes disponibles dans notre Centre d’aide concernant la communication de notifications. Vous y trouverez également des informations sur les règles appliquées par The Builders concernant la réponse à de telles notifications
                 </p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Accepter</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</section>	<!--END SECTION-->




<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
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
	
	
	
	
	<!--Texte Clignotant-->
	<script>
	var clignotement = function(){ 
   if (document.getElementById('slogan').style.visibility=='visible'){ 
      document.getElementById('slogan').style.visibility='hidden'; 
   } 
   else{ 
   document.getElementById('slogan').style.visibility='visible'; 
   } 
}; 

// mise en place de l appel de la fonction toutes les 0.8 secondes 
// Pour arrêter le clignotement : clearInterval(periode); 
periode = setInterval(clignotement, 1600);
	
	</script>

	

	</body>
</html>