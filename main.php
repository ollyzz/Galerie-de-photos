<?php
# 3 possibilities 
/*
require_once "./autoload.php";
*/
/*
require_once "./classes/Client.php";
require_once "./classes/Fournisseur.php";
*/
function chargeClass( $className){
    $fileName = "./classes/".$className.".php" ;
    if (file_exists($fileName))
        require_once $fileName;
}

spl_autoload_register("chargeClass");

 

$client = new Client("Dupont Louis");
$client->addFournisseur( new Fournisseur("Établissement René", "Saint-Quentin") );

print $client->fiche();
