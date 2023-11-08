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
            $materia = $modelo->getMaterias($xyt);
        break;
        case 'docente':
            $materias = $modelo->getMaterias();
            $docente = $modelo->getDocentes($xyt);
        break;
        case 'alumno':
                $grados = $modelo->getGrados();
                $alumno = $modelo->getAlumnos($xyt);
            break;
        case 'alumno_e':
                $alumno = $modelo->editAlumno();
            break;
        case 'docente_e':
            $docente = $modelo->editDocente();
        break;
        case 'materia_e':
            $materia = $modelo->editMateria();
        break;
        default:

            break;
    }