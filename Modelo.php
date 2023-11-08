<?php
    class Modelo {

////////////////////////////////////////////////////////////////////////////////////////////

        public function _sesion() {
            $user=$_POST['user'];
            $password=$_POST['password'];
            try {
                $conexion=mysqli_connect("localhost",$user,$password,"prepa_esimia") or die("error de conexion");
            } catch (\Throwable $th) {
                // return "no entro";
                header("location:./iniciar.php?error=Datos incorrectos");
            }
            session_start();
            $_SESSION['user'] = $user;
            $_SESSION['password'] = $password;
            header("location:./home.php?opcion=materias");
            // return "entro";
        }

////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////
        private function _conexion() {
            try {
                $conexion=mysqli_connect("localhost",$_SESSION['user'],$_SESSION['password'],"prepa_esimia") or die("error de conexion");
            } catch (\Throwable $th) {
                // return "no entro";
                header("location:./iniciar.php?error=Sesion caducada.");
            }
            return $conexion;
        }

////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////

        public function getMaterias($id = 0)  {
            $conexion = $this->_conexion();
            // echo $id;
            if ($id==0) {
                $sql = "SELECT *
                    FROM materias";
            }
            else{
                $sql = "SELECT *
                    FROM materias
                    WHERE materias.id = $id";
            }
            $resultado=mysqli_query($conexion, $sql);
            $materias = [];
            while ($fila = mysqli_fetch_array($resultado)) {
                $materias[]=$fila;
                // $resultado = $materias;
            }
            return $materias;
        }

////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////

        public function getDocentes($id = 0)  {
            $conexion = $this->_conexion();
            // echo $id;
            if ($id==0) {
                $sql = "SELECT profesores.ID, profesores.Nombre, profesores.A_paterno, profesores.A_materno, profesores.Materia_id, materias.asignatura
                    FROM profesores, materias
                    WHERE profesores.Materia_id = materias.ID
                    ORDER BY profesores.ID";
            }
            else{
                $sql = "SELECT profesores.ID, profesores.Nombre, profesores.A_paterno, profesores.A_materno, profesores.Materia_id, materias.asignatura
                    FROM profesores, materias
                    WHERE profesores.Materia_id = materias.ID
                    AND profesores.id = $id
                    ORDER BY profesores.ID";
            }
            $resultado=mysqli_query($conexion, $sql);
            $docentes = [];
            while ($fila = mysqli_fetch_array($resultado)) {
                $docentes[]=$fila;
                // $resultado = $docentes;
            }
            return $docentes;
        }

////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////////////////

        public function getAlumnos($id = 0)  {
            $conexion = $this->_conexion();
            // echo $id;
            if ($id==0) {
                $sql = "SELECT alumnos.ID, alumnos.Nombre, alumnos.A_paterno, alumnos.A_materno, grados.Grado
                        FROM alumnos, grados
                        WHERE alumnos.Plan_id = grados.ID
                        ORDER BY alumnos.ID";
            }
            else{
                $sql = "SELECT alumnos.ID, alumnos.Nombre, alumnos.A_paterno, alumnos.A_materno, alumnos.Plan_id, grados.Grado
                    FROM alumnos, grados
                    WHERE alumnos.Plan_id = grados.ID
                    AND alumnos.ID = $id
                    ORDER BY alumnos.ID";
            }
            $resultado=mysqli_query($conexion, $sql);
            $alumnos = [];
            while ($fila = mysqli_fetch_array($resultado)) {
                $alumnos[]=$fila;
                // $resultado = $alumnos;
            }
            return $alumnos;
        }
////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////// # get grados # /////////////////////////////////

        public function getGrados()  {
            $conexion = $this->_conexion();
            $sql = "SELECT *
                    FROM grados";
            $resultado=mysqli_query($conexion, $sql);
            $grados = [];
            while ($fila = mysqli_fetch_array($resultado)) {
                $grados[]=$fila;
                // $resultado = $grados;
            }
            return $grados;
        }

//////////////////////// # get grados # /////////////////////////////////


//////////////////////// # edit alumno # /////////////////////////////////

    public function editAlumno()  {
        $conexion = $this->_conexion();
        // echo $id;
        if ($_POST) {
            $sql = "UPDATE alumnos
                    SET Nombre = '".$_POST['nombre']."', A_materno = '".$_POST['A_materno']."', A_paterno = '".$_POST['A_paterno']."', Plan_id = '".$_POST['Plan_id']."'
                    WHERE ID =".$_POST['id'];
        }
        $resultado=mysqli_query($conexion, $sql);
        echo "Registros editados: " . mysqli_affected_rows($conexion);
        header("location:../home.php?opcion=alumnos");
    }

//////////////////////// # edit alumno # /////////////////////////////////

//////////////////////// # edit docente # /////////////////////////////////

    public function editDocente(){
        $conexion = $this->_conexion();
        // echo $id;
        if ($_POST) {
            $sql = "UPDATE profesores
                    SET Nombre = '".$_POST['nombre']."', A_materno = '".$_POST['A_materno']."', A_paterno = '".$_POST['A_paterno']."', Materia_id = '".$_POST['Materia_id']."'
                    WHERE ID =".$_POST['id'];
        }
        $resultado=mysqli_query($conexion, $sql);
        echo "Registros editados: " . mysqli_affected_rows($conexion);
        header("location:../home.php?opcion=docentes");
    }

//////////////////////// # edit docente # /////////////////////////////////

//////////////////////// # edit materias # /////////////////////////////////

    public function editMateria(){
        $conexion = $this->_conexion();
        // echo $id;
        if ($_POST) {
            $sql = "UPDATE materias
                    SET Asignatura = '".$_POST['asignatura']."'
                    WHERE ID =".$_POST['id'];
        }
        $resultado=mysqli_query($conexion, $sql);
        echo "Registros editados: " . mysqli_affected_rows($conexion);
        header("location:../home.php?opcion=materias");
    }

//////////////////////// # edit materias # /////////////////////////////////

//////////////////////// # new materia # /////////////////////////////////

public function newMateria(){
    $conexion = $this->_conexion();
    // echo $_POST['asignatura'];
    if ($_POST) {
        $sql = "INSERT INTO materias (ID, asignatura)
                VALUES (NULL, '". $_POST['asignatura'] . "')";
    }
    $resultado=mysqli_query($conexion, $sql);
    echo "Registros editados: " . mysqli_affected_rows($conexion);
    header("location:../home.php?opcion=materias");
}

//////////////////////// # new materia # /////////////////////////////////

//////////////////////// # new profesor # /////////////////////////////////

public function newDocente(){
    $conexion = $this->_conexion();
    // echo $id;
    if ($_POST) {
        $sql = "INSERT INTO profesores (ID, Nombre, A_materno, A_paterno, Materia_id)
                VALUES (NULL, '". $_POST['nombre'] . "','" . $_POST['A_materno'] . "','" . $_POST['A_paterno'] . "'," . $_POST['Materia_id'] .  ")";
    }
    $resultado=mysqli_query($conexion, $sql);
    echo "Registros editados: " . mysqli_affected_rows($conexion);
    header("location:../home.php?opcion=docentes");
}

//////////////////////// # new profesor # /////////////////////////////////

//////////////////////// # new Alumno # /////////////////////////////////

public function newAlumno(){
    $conexion = $this->_conexion();
    // echo $id;
    if ($_POST) {
        $sql = "INSERT INTO alumnos (ID, Nombre, A_materno, A_paterno, Plan_id)
        VALUES (NULL, '". $_POST['nombre'] . "','" . $_POST['A_materno'] . "','" . $_POST['A_paterno'] . "'," . $_POST['Plan_id'] .  ")";
    }
    $resultado=mysqli_query($conexion, $sql);
    echo "Registros editados: " . mysqli_affected_rows($conexion);
    header("location:../home.php?opcion=alumnos");
}

//////////////////////// # new Alumno # /////////////////////////////////

//////////////////////// # delete Materia # /////////////////////////////////

public function deleteMateria(){
    $conexion = $this->_conexion();
    // echo $id;
    if ($_POST) {
        $sql = "DELETE FROM materias WHERE ID=" . $_POST['id'];
    }

    try {
        $resultado=mysqli_query($conexion, $sql);
    } catch (\Throwable $th) {
        // return "no entro";
        header("location:../home.php?opcion=materias&error=dependencia");
    }

    // echo "Registros editados: " . mysqli_affected_rows($conexion);
    // header("location:../home.php?opcion=materias");
}

//////////////////////// # delete Materia # /////////////////////////////////

//////////////////////// # delete Docente # /////////////////////////////////

public function deleteDocente(){
    $conexion = $this->_conexion();
    // echo $id;
    if ($_POST) {
        $sql = "DELETE FROM profesores WHERE ID=" . $_POST['id'];
    }
    $resultado=mysqli_query($conexion, $sql);
    echo "Registros editados: " . mysqli_affected_rows($conexion);
    header("location:../home.php?opcion=docentes");
}

//////////////////////// # delete Docente # /////////////////////////////////

//////////////////////// # delete Alumno # /////////////////////////////////

public function deleteAlumno(){
    $conexion = $this->_conexion();
    // echo $id;
    if ($_POST) {
        $sql = "DELETE FROM alumnos WHERE ID=" . $_POST['id'];
    }
    $resultado=mysqli_query($conexion, $sql);
    echo "Registros editados: " . mysqli_affected_rows($conexion);
    header("location:../home.php?opcion=alumnos");
}

//////////////////////// # delete Alumno # /////////////////////////////////



}