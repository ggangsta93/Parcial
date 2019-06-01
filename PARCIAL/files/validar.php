<?php
$codigo=$_POST['codigo'];

if($codigo == "104615020493"){
    header("location:bienvenido.html");
}else{
    echo "Código no existe.";
}
?>

