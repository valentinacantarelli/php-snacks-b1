<?php
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
// che name sia più lungo di 3 caratteri,che mail contenga un punto e una chiocciola e che age sia un numero.
//  Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];
$verifica = false;


if(strpos($mail,"@") && strpos($mail, ".") && strlen($name)>3 && is_numeric($age)){
    $verifica = true;
    echo "Accesso riuscito";
}else{
    echo "Accesso negato";
}

?>