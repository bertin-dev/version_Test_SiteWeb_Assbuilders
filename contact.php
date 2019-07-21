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
    <meta name="description" lang="fr" content="Page Contact et Suggestion The Builders Institute & Business School. Un centre de formation professionnel internationnal">
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
	
	
	
<style type="text/css">
.formu {
	font-size: 18px;
	font-weight: bold;
	text-decoration: underline;
	text-align: center;

}
.formulairetexte {
	text-align: center;
}
</style>
</head>
<body>

  <!--Contenu: Globale de la page WEB-->
  <section>
 <!--Contenu: THE BUILDERS INSTITUTE & BUSINESS SCHOOL  et le LOGO de la page WEB--> 
 <?php include 'head.html';?>
	<div id="page-content">    
		<section id="content">
	<div class="container">
		<div class="row">
	
	
		
	        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.4s">					
				<!---------------CARROUSSE N1 -------------------->
				  <?php include("slider.html");?>
	
		</div>
	</div>
	</div>
	</section>
	</div>
	<!--Contenu: Pied de page du site Web -->		

	</section>
	
      <!-- ////////////Content Box 07 -->
		<section class="box-content box-7" id="Localisation">
			<div class="clearfix">
				<div class="box-item">
					<div class="embed-container maps wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
						
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.595559914932!2d9.746348217443854!3d4.044491300000019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10610d0c59acf439%3A0x88c7ca743e1a7993!2sLAIC+DE+PK+8!5e1!3m2!1sfr!2scm!4v1472345990228" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
						
						
					</div>
					<div class="container">
						<div class="row">
							<div class="col-md-4 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.6s">
								<h3>Completez le formulaire</h3>
								<p>intégré et bien d'autres encore. Les nouvelles fonctionnalités de   
                                    Firefox vous permettent, entre autres,  d'économiser votre bande   
                                    passante en visionnant un site sans charger les images. Firefox met   
                                    également à votre disposition la « navigation privée »</p>
								<h3>Nous Joindre:</h3>
								<p><i class="fa fa-phone fa-2x"></i> (237) 651 506 567<br></p>
								<p><i class="fa fa-envelope fa-2x"></i> info@the-builders.org</p>
							</div>
							<div class="col-md-8 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.9s">
								<h3>Formulaire de Contact</h3>
								<div id="contact-form">
									<form name="form1" method="post" action="traitement_contact.php">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
												<input kl_virtual_keyboard_secure_input="on" class="form-control input-lg" name="name" id="name" placeholder="Entrez votre nom" required="required" type="text">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<input class="form-control input-lg" name="email" id="email" placeholder="Entrez votre Email" required="required" type="email">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input kl_virtual_keyboard_secure_input="on" class="form-control input-lg" name="subject" id="subject" placeholder="Sujet" required="required" type="text">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required" placeholder="Message"></textarea>
												</div>						
												<center><button type="submit" class="btn btn-skin" name="envoyer" id="envoyer">
											 Envoyez</button></center>
											</div>
										</div>
									</form>
											<p class="formulairetexte"><span class="formu">
                                            <?php if(isset($_SESSION['message_Erreur']))
												{ 
                                                echo $_SESSION['message_Erreur']; 
												}
												else
												 $_SESSION['message_Erreur'] = '';
												?>
											</p>
											<p>&nbsp;</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include "footer.html";?>	



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
	
	
</body>
</html>