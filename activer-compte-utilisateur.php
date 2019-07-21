<?php
session_start();
require "Database Configuration/config.php";
include("connectes.php");
include("Vues.php");
// Redirige l'utilisateur s'il est d?j? identifi?
if(isset($_COOKIE["ID_UTILISATEUR"]))
{
     header("Location: index.php");
}
else
{
     
     // V?rifie que de bonnes valeurs sont pass?es en param?tres
     if(!preg_match('/^[0-9]+$/', $_GET["id"]) || !preg_match('/^[a-f0-9]{8}$/', strtolower($_GET["clef"])))
     {
          header("Location: index.php");
     }
     else
     {
          
          // Connexion ? la base de donn?es
          // Valeurs ? modifier selon vos param?tres configuration
            include 'configuration serveur/config_server.php';
          
          // S?lection de l'utilisateur concern?
          /*$result = mysql_query("
               SELECT ID_Utilisateur
                    , Compte_Active
                    , Clef_Activation
               FROM Comptes_Utilisateurs
               WHERE ID_Utilisateur = '" . $_GET["id"] . "'
               AND Clef_Activation = '" . strtolower($_GET["clef"]) . "'
          ");*/
          
		  
			   $result = $bdd->query('SELECT COUNT(*) FROM comptes_utilisateurs WHERE ID_Utilisateur=\''.$_GET['id']. '\' AND Clef_Activation =\''.strtolower($_GET["clef"]).'\'');
			
          // Si une erreur survient
          if(!$result)
          {
               $message = "Une erreur est survenue lors de l'activation de votre compte utilisateur";
          }
          else
          {
               
               // Si aucun enregistrement n'est trouv?
               if($result->fetchColumn() == 0)
               {
                    header("Location: index.php");
               }
               else
               {
                    
                    // R?cup?ration du tableau de donn?es retourn?
                    //$row = mysql_fetch_array($result);
					
			           $retour = $bdd->query('SELECT * FROM comptes_utilisateurs WHERE ID_Utilisateur=\''.$_GET['id']. '\' AND Clef_Activation =\''.strtolower($_GET["clef"]).'\'');
				       $row = $retour->fetch();
                    
                    // V?rification que le compte ne soit pas d?j? activ?
                    if($row["Compte_Active"] != 0)
                    {
                         $message = "Votre compte utilisateur a d?j? ?t? activ?";
                    }
                    else
                    {
                         
                         /* Activation du compte utilisateur
                         $result = mysql_query("
                              UPDATE Comptes_Utilisateurs
                              SET Compte_Active = '1'
                              WHERE ID_Utilisateur = '" . $_GET["id"] . "'
                              AND Clef_Activation = '" . strtolower($_GET["clef"]) . "'
                         ");
						 */
						 
						 $modif = $bdd->prepare('UPDATE comptes_utilisateurs SET Compte_Active = :id WHERE ID_Utilisateur='.$_GET["id"].'AND Clef_Activation='.strtolower($_GET["clef"]));
	                     $modif->execute(array('id' => 1));
                         
                         // Si une erreur survient
                         if(!$modif)
                         {
                              $message = "Une erreur est survenue lors de l'activation de votre compte utilisateur";
                         }
                         else
                         {
                              $message = "Votre compte utilisateur a correctement ?t? activ?";
                         }
                         
                    }
                          // Fermeture de la connexion ? la base de donn?es
                          $retour->closeCursor();
          
               }
               
          }
          
    
     }
     
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" lang="fr" content="Page d'activation de compte d'utilisateur The Builders Institute & Business School. Un centre de formation professionnel internationnal">
    <meta name="author" content="Bertin Mounok">
  <meta name="keyword"  lang="fr" content="The Builders Institute, Business School, High School Diploma, Associate Degree, VAA, Doctorat, Master, Sciences Politiques, Sciences Economiques, Droit, Table des US Hours Credit, Coordonn?es, Centre de formation professionnel, thebuildersinstitute, TheBuildersInstitute, the_builders_in, centre de formation professionnel ? vision internationnal">
    <title>Compte Activ&eacute; | The-Builders.org</title>
	
    <!-- Appel du Fichier CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/menu_vertical" rel="stylesheet">
	<!-- Assistant au fichier CSS -->
    <link href="css/style.css" rel="stylesheet">
	
	<!-- Assistant du fichier CSS pour le Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
 <link rel="stylesheet" href="css/animate.css">
	<link rel="icon" type="image/png" href="logo.png"/>
	
	
<style type="text/css">
#activer {
	background-color: #CCC;
	text-align: center;
	height: 75px;
	width: 300px;
	margin-right: auto;
	margin-left: auto;
	border-top-style: double;
	border-right-style: double;
	border-bottom-style: double;
	border-left-style: double;
	font-size: 18px;
	font-weight: bold;
	text-decoration: underline;
}
</style>
</head>


<body>
<!--Contenu: THE BUILDERS INSTITUTE & BUSINESS SCHOOL  et le LOGO de la page WEB--> 
 <?php include 'head.html';?>

 <!--Contenu Partiel de la page WEB ie Section, article, sidebar, aside et footer-->
  <div id="page-content">    
    <section id="content">
  <div class="container">
    <div class="row">
    
    <!--Contenu: MENU VERTICAL version mobile, tablets et PC-->
        <?php include('menu_accordeon.html');?>

                <!--Contenu: Informations sur le site provenant du lien cliqu? sur le menu vertical accordeon-->
      <div class="col-xs-12 col-md-4 col-lg-6">
        
        <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.4s">
        <article>

                <div id="activer" class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.4s"><?php echo $message; ?></div>
        </article>
        </div>
        </div>

        <?php include "navDroite.html";?>

        </div>
  </div>
  </section>
  </div>
  
  
    <!--Contenu: Pied de page du site Web -->   
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
  
    } ) 
    .init();
  </script>

</body>
</html>