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
    <meta name="description" lang="fr" content="Page d'inscription The Builders Institute & Business School. Un centre de formation professionnel internationnal">
    <meta name="author" content="Bertin Mounok">
  <meta name="keyword"  lang="fr" content="The Builders Institute, Business School, High School Diploma, Associate Degree, VAA, Doctorat, Master, Sciences Politiques, Sciences Economiques, Droit, Table des US Hours Credit, Coordonnées, Centre de formation professionnel, thebuildersinstitute, TheBuildersInstitute, the_builders_in, centre de formation professionnel à vision internationnal">
    <title>Statut: Envoi de l'Email | The-Builders.org</title>
	
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
.formulairetexte {
	text-align: center;
	border:1px solid transparent;
    border-radius: 0px;
    	background-color: #55c65e;
	border-color:#48b151;
	color:#fff;
}
</style>
	
</head>


<body>
<div id="wrapper">
	<!-- start header -->
	
	  	 <!--Contenu: THE BUILDERS INSTITUTE & BUSINESS SCHOOL  et le LOGO de la page WEB--> 
 <?php include 'head.html';?>
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="index.php" title="Accueil | The-Builders"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active" title="Inscrivez-vous Ici">Envoi de L'Email</li>
				</ul>
			</div>
		</div>
	</div>
	</section>

      <!--GETSION DES ERREURS REVOYEES PAR LE FORMULAIRE-->	
		<div class="formulairetexte">
		<span class="formu">
  <?php 

      if(isset($_SESSION['statut_email']) && $_SESSION['statut_email']!='')
	  {
		  echo $_SESSION['statut_email'];
	  }
		  	?>
	  </span>
     </div>	
	 
	 
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
