<?php

function asignarMaterias($codigo)
{

    $data = file_get_contents('files/materiasPredeterminadas.json');
    $my_file = ('files/'.$codigo.'.json');
    $handle = fopen($my_file, 'w') or die('No se pudo abrir' . $my_file);

    fwrite($handle, $data);
    fclose($handle);
    return "El codigo no existe, se asignan materias por defecto.";
    
}

?>
