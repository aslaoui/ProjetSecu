<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=handicap;charset=utf8', 'root', ''); //Nom de base à changer et mdp à rajouter
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

?>