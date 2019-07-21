<?php

// Redirige l'utilisateur s'il n'est pas identifié
if(empty($_COOKIE["ID_UTILISATEUR"]))
{
     header("Location: connexion.php");
}
else
{
     
     // Suppression des cookies
     setcookie("ID_UTILISATEUR", "", time() - 1, "/");
     setcookie("NOM_UTILISATEUR", "", time() - 1, "/");
     
     // Redirection de l'utilisateur
     header("Location: index.php");
     
}

?>