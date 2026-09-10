<?php
function chargeClass( $className ) {
    $fileName = "./classes/".$className.".php" ;
    if (file_exists( $fileName ))
        require_once $fileName;
}

function chargeNamespaceClass( $className ){
    $fileName = str_replace('\\','/', $className).".php";
    if (file_exists( $fileName ))
        require_once $fileName;
}


spl_autoload_register("chargeNamespaceClass");
spl_autoload_register( "chargeClass");
