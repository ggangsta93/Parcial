<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Materias</title>
        <link rel="stylesheet" href="css/style_Materias.css"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div id="agrupar" class="contenedor">
            <header id="cabecera">
                <div id="dLogo">
                    <img id="logo" src="./img/nn.png" alt="varLogo"/>
                </div>
                <div id="dTitle">
                    <h1>Ing de Sistemas</h1>
                </div>              
            </header>
            <nav id="menu">
            <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-html="true" title="Hola! Dale click a tus materias que ya tienes aprobadas. ">
                   Descripción  
            </button>
            </nav>
            <section id="seccion">
            
            <?php
            include 'estudiante.php';

            $codigo = $_REQUEST["codigo"];
            // Read JSON file
            $json = file_get_contents('files/' . $codigo . '.json');
            //Decode JSON
            $materias = json_decode($json, true);
            echo ('Código: ' . $codigo . '<br>');

            $c = Materia::createFromArray($materias[0]);
            
            $auxiliar= -1;
            for ($i = 0; $i < count($materias); $i++) {
                
                $c = Materia::createFromArray($materias[$i]);
                $auxc = null;
                if($i < count($materias)-1){
                    $auxc = Materia::createFromArray($materias[$i+1]);
                }
                        
                $semestre = $c->getSemestre();

                if($auxiliar == $semestre){                 
                    echo('<button type="button" class="btn btn-primary btn-lg btn-block">'.$c->getMateria().' Creditos: '.$c->getCreditos().'</button>');
                    if($auxc != null){
                        if($auxc->getSemestre() != $semestre){
                            echo('</div>');
                            echo('</article>'); 
                        }
                    }
                }else{
                    echo('<article>');
                    echo ('<div class="container">');
                    echo('<h1>Semestre'.$semestre.'</h1>');
                    $auxiliar = $semestre;   
                    echo('<button type="button" class="btn btn-secondary btn-lg btn-block">'.$c->getMateria().' Creditos: '.$c->getCreditos().'</button>');
 
                }     
                echo "<br>";
            }
            ?>


            
            
    




            
            </section>
            <ul id="columna">
                <li><a href="index.html">Salir</a></li>
            </ul>
            <footer id="pie">
                Derechos Reservados &copy; 2019-2020
            </footer>
        </div>

        


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>