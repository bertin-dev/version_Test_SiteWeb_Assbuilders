<?php

$serveur="http://".$_SERVER["HTTP_HOST"];	// Racine du serveur
$validity=7;					// Code validity, in days.
$db_host='127.0.0.1';			// DB parameters
$db_user='root';
$db_pass='';
//$database='bd_infomac';
$database='builders';

//************ End of parameters

$valid2=3600*24*$validity;
$er='';

?>