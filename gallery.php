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
    <meta name="description" lang="fr" content="Page de Traitement The Builders Institute & Business School. Un centre de formation professionnel internationnal">
    <meta name="author" content="Bertin Mounok">
	<meta name="keyword"  lang="fr" content="The Builders Institute, Business School, High School Diploma, Associate Degree, VAA, Doctorat, Master, Sciences Politiques, Sciences Economiques, Droit, Table des US Hours Credit, Coordonnées, Centre de formation professionnel, thebuildersinstitute, TheBuildersInstitute, the_builders_in, centre de formation professionnel à vision internationnal">
    <title>Gallerie Infrastructurel | The-Builders.org</title>
	
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
	
	

	<link rel="stylesheet" href="css/overwrite.css">
	<link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/cubeportfolio.min.css" rel="stylesheet" />
	
</head>
<body>

  
 <?php include 'head.html';?>





<div id="wrapper">
       <section id="content">

		<!-- gallerie d'images -->
		<div class="container marginbot50">
		<div class="row">
			<div class="col-lg-12">
				<h4 class="heading">AGENDAS RECENTS</h4>

				<div id="filters-container" class="cbp-l-filters-button">
					<div data-filter="*" class="cbp-filter-item-active cbp-filter-item">COMPLET<div class="cbp-filter-counter"></div></div>
					<div data-filter=".identity" class="cbp-filter-item">MODELE V.I.P<div class="cbp-filter-counter"></div></div>
					<div data-filter=".web-design" class="cbp-filter-item">MODELE STANDARD<div class="cbp-filter-counter"></div></div>
					<div data-filter=".graphic" class="cbp-filter-item">MODELE BI-MATIERES<div class="cbp-filter-counter"></div></div>
				</div>
				

				<div id="grid-container" class="cbp-l-grid-projects">
					<ul>
						<li class="cbp-item graphic">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/1.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
											<a href="img/works/1big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="MODELE BI-MATIERE 2017 <br>Premium avec Coin d'Or">AGRANDIR</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">MODELE BI-MATIERE 2017 </div>
							<div class="cbp-l-grid-projects-desc">AGENDA / PREMIUM</div>
						</li>
						<li class="cbp-item web-design logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/13.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
											<a href="img/works/13big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="MODELE DEUX TONS BLEU 2017<br>Flyers">AGRANDIR</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">MODELE DEUX TONS BLEU 2017 </div>
							<div class="cbp-l-grid-projects-desc">AGENDA / HARMONIE</div>
						</li>
						<li class="cbp-item graphic logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/3.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
										
											<a href="img/works/3big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="MODELE BI-MATIERE 2017<br>Blue Shine avec Coin d'Or">AGRANDIR</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">MODELE BI-MATIERE 2017 </div>
							<div class="cbp-l-grid-projects-desc">AGENDA / BLUE SHINE</div>
						</li>
						<li class="cbp-item graphic logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/4.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
										
											<a href="img/works/4big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="MODELE V.I.P 2017 <br>Diplomate avec Coin Or">AGRANDIR</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">MODELE V.I.P 2017</div>
							<div class="cbp-l-grid-projects-desc">AGENDA / DiPLOMATE</div>
						</li>
						<li class="cbp-item identity web-design">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/12.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
											
											<a href="img/works/12big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="MODELE DEUX TONS MARRON 2017<br>FLYER">AGRANDIR</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">MODELE DEUX TONS MARRON 2017</div>
							<div class="cbp-l-grid-projects-desc">AGENDA / Premium</div>
						</li>
						<li class="cbp-item identity web-design">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/14.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
											
											<a href="img/works/14big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="MODELE GRIS 2017<br> FLYER">AGRANDIR</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">MODELE GRIS 2017</div>
							<div class="cbp-l-grid-projects-desc">AGENDA / Harmonie</div>
						</li>
						
						<li class="cbp-item identity web-design">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/15.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
											
											<a href="img/works/15big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="MODELE ROUGE 2017<br> FLYER">AGRANDIR</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">MODELE ROUGE 2017</div>
							<div class="cbp-l-grid-projects-desc">AGENDA / Harmonie</div>
						</li>
						
						<li class="cbp-item graphic logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/7.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
										
											<a href="img/works/7big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="MODELE V.I.P 2017 <br>Consul">AGRANDIR</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">MODELE V.I.P 2017 </div>
							<div class="cbp-l-grid-projects-desc">AGENDA / CONSUL</div>
						</li>
						<li class="cbp-item graphic logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/9.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
										
											<a href="img/works/9big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="MODELE V.I.P 2017<br>Diplomate">AGRANDIR</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">MODELE V.I.P 2017</div>
							<div class="cbp-l-grid-projects-desc">AGENDA / DIPLOMATE</div>
						</li>
						
						<!--______________________________________________________________________________________________________________________________-->
						<li class="cbp-item graphic logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/10.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
										
											<a href="img/works/10big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="MODELE STANDARD 2017<br>CLASS">AGRANDIR</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">MODELE STANDARD 2017</div>
							<div class="cbp-l-grid-projects-desc">AGENDA / CLASS</div>
						</li>
						<li class="cbp-item graphic logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/8.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
										
											<a href="img/works/8big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="MODELE STANDARD 2017<br>Delice avec Coin d'Or">AGRANDIR</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">MODELE STANDARD 2017</div>
							<div class="cbp-l-grid-projects-desc">AGENDA / DELICE</div>
						</li>
						
						
						<li class="cbp-item graphic logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
									<img src="img/works/11.jpg" alt="" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
										
											<a href="img/works/11big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="MODELE STANDARD 2017<br>Delice">AGRANDIR</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title">MODELE STANDARD 2017</div>
							<div class="cbp-l-grid-projects-desc">AGENDA / DELICE</div>
						</li>
						<!--_______________________________________________________________-->
					</ul>
				</div>
				
				<div class="cbp-l-loadMore-button">
					<a href="ajax/loadMore.php" class="cbp-l-loadMore-button-link">Voir Encore</a>
				</div>

			</div>
		</div>
		</div>
		
		</section>
		
		</div>

	
	
	
		  <!--Contenu: Pied de page du site Web -->		
	<?php include "footer.html";?>

	
	<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
	
	
	
	<script src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/fliplightbox.min.js"></script>
		<script src="js/functions.js"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</body>
	</html>