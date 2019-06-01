<?php

$codigo=$_POST['codigo'];

include 'estudiante.php';
$existe = 'files/'.$codigo.'.json';

if(file_exists($existe))
{

    // Read JSON file
    $json = file_get_contents('files/'.$codigo.'.json');

    //Decode JSON
    $materias = json_decode($json,true);

    echo('Código: '.$codigo.'<br>');
    for($i=0 ; $i< 62; $i++){
        $c = Estudiante::createFromArray($materias[$i]);
        echo json_encode($c);
        echo "<br>";
    }

    /*header("location:bienvenido.html");   LINEA PARA ENVIAR AL CLIENTE*/
               
}
else
{
    echo ('Código '.$codigo.' no existe.'); 
}

?>

