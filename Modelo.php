<?php
    class Modelo {
        // Propiedades (variables de clase)
        public $propiedad1;
        public $propiedad2;

        // Método de la clase
        public function _sesion() {
            // Código del método
            $user=$_POST['user'];
            $password=$_POST['password'];
            try {
                $conexion=mysqli_connect("localhost",$user,$password,"prepa_esimia") or die("error de conexion");
            } catch (\Throwable $th) {
                // return "no entro";
                header("location:iniciar.php?error=Datos incorrectos");
            }
            session_start();
            $_SESSION['user'] = $user;
            $_SESSION['password'] = $password;
            header("location:home.php");
            // return "entro";
        }
        private function _conexion() {
            try {
                $conexion=mysqli_connect("localhost",$_SESSION['user'],$_SESSION['password'],"prepa_esimia") or die("error de conexion");
            } catch (\Throwable $th) {
                // return "no entro";
                header("location:iniciar.php?error=Sesion caducada.");
            }
            return $conexion;
        }
        public function getMaterias($id = 0)  {
            $conexion = $this->_conexion();
            $sql = "SELECT *
                    FROM materias";
            $resultado=mysqli_query($conexion, $sql);
            $materias = [];
            while ($fila = mysqli_fetch_array($resultado)) {
                $materias[]=$fila;
                // $resultado = $materias;
            }
            return $materias;
        }
        public function getDocentes($id = 0)  {
            $conexion = $this->_conexion();
            $sql = "SELECT profesores.ID, profesores.Nombre, profesores.A_paterno, profesores.A_materno, materias.asignatura
                    FROM profesores, materias
                    WHERE profesores.Materia_id = materias.ID
                    ORDER BY profesores.ID";
            $resultado=mysqli_query($conexion, $sql);
            $docentes = [];
            while ($fila = mysqli_fetch_array($resultado)) {
                $docentes[]=$fila;
                // $resultado = $docentes;
            }
            return $docentes;
        }
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
                echo $sql = "UPDATE alumnos
                        SET Nombre = '".$_POST['nombre']."', A_materno = '".$_POST['A_materno']."', A_paterno = '".$_POST['A_paterno']."', Plan_id = '".$_POST['Plan_id']."'
                        WHERE ID =".$_POST['id'];
            }
            $resultado=mysqli_query($conexion, $sql);
            echo "Registros editados: " . mysqli_affected_rows($conexion);
            header("location:../home.php?opcion=alumnos");
            // $alumnos = [];
            // while ($fila = mysqli_fetch_array($resultado)) {
            //     $alumnos[]=$fila;
            //     // $resultado = $alumnos;
            // }
            // return $alumnos;
        }
    }

    //////////////////////// # edit alumno # /////////////////////////////////
