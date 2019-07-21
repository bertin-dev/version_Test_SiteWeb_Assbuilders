     <?php
       // Connexion à la base de données
               // Valeurs à modifier selon vos paramètres configuration
                try
              {
	             $bdd = new PDO('mysql:host='.$db_host.';dbname='.$database, $db_user, $db_pass);
              }
                catch(Exception $e)
               {
                die('Erreur : '.$e->getMessage());
               }
		?>	   