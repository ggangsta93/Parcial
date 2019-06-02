<?php

$codigo = $_POST['codigo'];

include 'estudiante.php';
include_once 'asignar.php';
$existe = 'files/' . $codigo . '.json';
if(strlen($codigo)!= null){
    if (file_exists($existe)) {
        header("location:materias.php?codigo=$codigo");
    } else {
        asignarMaterias($codigo);
        header("location:materias.php?codigo=$codigo");
    }
}else{
    echo "<script>
                alert('Espacio vacios.');
                window.location= 'index.html'
    </script>";
}


?>