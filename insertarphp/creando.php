<?php
    require_once("../Modelo.php");
    session_start();
    $modelo = new Modelo();
    $docente=[];
    $materia=[];
    $alumno=[];
    // var_dump($alumno);
    // echo (isset($_GET["opcion"]))?$_GET["opcion"]:'';
    // $xyt = isset($_GET["xyt"])?$_GET["xyt"]:0;
    switch ($_GET["class"]) {
        case 'materia':
                $materia = $modelo->newMateria();
            break;
            case 'docente':
                $materias = $modelo->getMaterias();
            break;
        case 'docente_c':
                $docente = $modelo->newDocente();
            break;
        case 'alumno':
            $grados = $modelo->getGrados();
            break;
        case 'alumno_c':
            $alumno = $modelo->newAlumno();
            break;
        default:

            break;
    }