<?php
    require_once("../Modelo.php");
    session_start();
    $modelo = new Modelo();
    $docente=[];
    $materia=[];
    $alumno=[];
    // var_dump($alumno);
    // echo (isset($_GET["opcion"]))?$_GET["opcion"]:'';
    $xyt = isset($_GET["xyt"])?$_GET["xyt"]:0;
    switch ($_GET["class"]) {
        case 'materia':
            $materia = $modelo->deleteMateria();
        break;
        case 'docente':
            $ddocente = $modelo->deleteDocente();
        break;
        case 'alumno':
            $alumno = $modelo->deleteAlumno();
        break;
        default:

        break;
    }