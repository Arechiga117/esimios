<?php
    require_once("Modelo.php");
    session_start();
    $modelo = new Modelo();
    $docentes=[];
    $materias=[];
    $alumnos=[];
    // var_dump($alumnos);
    // echo (isset($_GET["opcion"]))?$_GET["opcion"]:'';
    switch ($_GET["opcion"]) {
        case 'materias':
                $materias = $modelo->getMaterias();
            break;
            case 'docentes':
                $docentes = $modelo->getDocentes();
            break;
        case 'alumnos':
                $alumnos = $modelo->getAlumnos();
            break;
        default:

            break;
    }


