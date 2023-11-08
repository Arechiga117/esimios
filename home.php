<?php require_once("tablas.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Preparatoria ESIMIA</title>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>(+52) 55 2255 4425</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>maxnepe@hotmail.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-book-reader mr-3"></i>ESIMIA</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Inicio</a>
                    <a href="about.html" class="nav-item nav-link">Nosotros</a>
                    <a href="course.html" class="nav-item nav-link">Preparatoria</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Cursos</a>
                        <div class="dropdown-menu m-0">
                            <a href="detail.html" class="dropdown-item">Detalles</a>
                            <a href="feature.html" class="dropdown-item">Our Features</a>
                            <a href="team.html" class="dropdown-item">Instructors</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contacto</a>
                </div>
                <a href="cerrar.php" class="btn btn-primary py-2 px-4 d-none d-lg-block">Cerrar Sesion</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center">
        </div>
    </div>
    <!-- Header End -->
    <div class="menudiv">
        <a href="home.php?opcion=materias" class="btn btn-primary py-2 px-4" <?php echo ($_GET["opcion"]=="materias")?'style="background-color:#1447D9;"':''?> >Materias</a>
        <a href="home.php?opcion=docentes" class="btn btn-primary py-2 px-4" <?php echo ($_GET["opcion"]=="docentes")?'style="background-color:#1447D9;"':''?> >Docentes</a>
        <a href="home.php?opcion=alumnos" class="btn btn-primary py-2 px-4" <?php echo ($_GET["opcion"]=="alumnos")?'style="background-color:#1447D9;"':''?> >Alumnos</a>
        <a href="insertarphp/crearMateria.php?class=materia" class="btn btn-success py-2 px-4" <?php echo (count($materias)==0)?'style="display: none;"':''?> >Añadir Materia</a>
        <a href="insertarphp/crearDocente.php?class=docente" class="btn btn-success py-2 px-4" <?php echo (count($docentes)==0)?'style="display: none;"':''?> >Añadir Docente</a>
        <a href="insertarphp/crearAlumno.php?class=alumno" class="btn btn-success py-2 px-4" <?php echo (count($alumnos)==0)?'style="display: none;"':''?> >Añadir Alumno</a>
    </div>
    <?php echo isset(($_GET["error"]))?'<p class="bad">No se pudo eliminar porque tiene dependencias</p>':''; ?>
    <div class="tabladiv">
        <table class="tabla" border="1" <?php echo count($materias)==0?'style="display: none;"':''?> >
            <tr class="thead">
                <th>Numero</th>
                <th>Asignatura</th>
                <th colspan="2">Opciones</th>
            </tr>
            <?php
                // var_dump($materias);
                foreach ($materias as $a => $materia) {
                    echo "<tr>";
                    echo "<td>";
                    echo $materia['ID'];
                    echo "</td>";
                    echo "<td>";
                    echo $materia['asignatura'];
                    echo "</td>";
                    echo "<td>";
                    echo "<a href='editarphp/editarMateria.php?xyt=" . $materia["ID"] . "&class=materia' class=''>Editar</a>";
                    echo "</td>";
                    echo "<td>";
            ?>
                <form id='elid-<?php echo $materia["ID"] ?>' method='post' action="eliminarphp/eliminando.php?class=materia" onsubmit="return false">
                    <input class="hiden" type='' name='id' value= "<?php echo $materia["ID"] ?>" />
                    <input class="eliminarbtn" type="submit" onclick="eliminar('elid-<?php echo $materia["ID"] ?>', '<?php echo $materia["asignatura"] ?>' )" value="Eliminar">
                </form>
            <?php
                    echo "</td>";
                    echo "</tr>";
                }
            ?>
            </tbody>
        </table>
        <table class="tabla" border="1" <?php echo count($docentes)==0?'style="display: none;"':''?> >
            <tr class="thead">
                <th>Numero</th>
                <th>Nombre</th>
                <th>Apellido paterno</th>
                <th>Apellido materno</th>
                <th>Materia</th>
                <th colspan="2">Opciones</th>
            </tr>
            <?php
                // var_dump($docentes);
                foreach ($docentes as $a => $docente) {
                    echo "<tr>";
                    echo "<td>";
                    echo $docente['ID'];
                    echo "</td>";
                    echo "<td>";
                    echo $docente['Nombre'];
                    echo "</td>";
                    echo "<td>";
                    echo $docente['A_paterno'];
                    echo "</td>";
                    echo "<td>";
                    echo $docente['A_materno'];
                    echo "</td>";
                    echo "<td>";
                    echo $docente['asignatura'];
                    echo "</td>";
                    echo "<td>";
                    echo "<a href='editarphp/editarDocente.php?xyt=" . $docente["ID"] . "&class=docente' class=''>Editar</a>";
                    echo "</td>";
                    echo "<td>";
            ?>
                <form id='elid-<?php echo $docente["ID"] ?>' method='post' action="eliminarphp/eliminando.php?class=docente" onsubmit="return false">
                    <input class="hiden" type='' name='id' value= "<?php echo $docente["ID"] ?>" />
                    <input class="eliminarbtn" type="submit" onclick="eliminar('elid-<?php echo $docente["ID"] ?>', '<?php echo $docente["Nombre"] ?>' )" value="Eliminar">
                </form>
            <?php
                    echo "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
        <table class="tabla" border="1" <?php echo count($alumnos)==0?'style="display: none;"':''?> >
            <tr class="thead">
                <th>Numero</th>
                <th>Nombre</th>
                <th>Apellido paterno</th>
                <th>Apellido materno</th>
                <th>Grado</th>
                <th colspan="2">Opciones</th>
            </tr>
            <?php
                // var_dump($alumnos);
                foreach ($alumnos as $a => $alumno) {
                    echo "<tr>";
                    echo "<td>";
                    echo $alumno['ID'];
                    echo "</td>";
                    echo "<td>";
                    echo $alumno['Nombre'];
                    echo "</td>";
                    echo "<td>";
                    echo $alumno['A_paterno'];
                    echo "</td>";
                    echo "<td>";
                    echo $alumno['A_materno'];
                    echo "</td>";
                    echo "<td>";
                    echo $alumno['Grado'];
                    echo "</td>";
                    echo "<td>";
                    echo "<a href='editarphp/editarAlumno.php?xyt=" . $alumno["ID"] . "&class=alumno' class=''>Editar</a>";
                    echo "</td>";
                    echo "<td>";
            ?>
                <form id='elid-<?php echo $alumno["ID"] ?>' method='post' action="eliminarphp/eliminando.php?class=alumno" onsubmit="return false">
                    <input class="hiden" type='' name='id' value= "<?php echo $alumno["ID"] ?>" />
                    <input class="eliminarbtn" type="submit" onclick="eliminar('elid-<?php echo $alumno["ID"] ?>', '<?php echo $alumno["Nombre"] ?>' )" value="Eliminar">
                </form>
            <?php
                    echo "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>

    <!-- Footer Start -->
        <div class="container-fluid position-relative overlay-top bg-dark text-white-50 py-5" style="margin-top: 90px;">
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="mt-n2 text-uppercase text-white"><i class="fa fa-book-reader mr-3"></i>ESIMIA</h1>
                    </a>
                    <p class="m-0">Gracias por visitar nuestra página web. Si estás interesado en unirte a la familia ESIMIA o deseas obtener más información sobre nuestras ofertas académicas y programas, no dudes en ponerte en contacto con nosotros. Estamos aquí para ayudarte a forjar un camino hacia el éxito.</p>
                </div>
                <div class="col-md-6 mb-5">
                    <h3 class="text-white mb-4">Noticias</h3>
                    <div class="w-100">
                        <div class="input-group">
                            <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Correo electronico">
                            <div class="input-group-append">
                                <button class="btn btn-primary px-4">Registrarse</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">¡Visitanos!</h3>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>Calle paseo nuevo s/n, Tlahuac, Ciudad de México</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>(+52) 55 2255 4425</p>
                    <p><i class="fa fa-envelope mr-2"></i>maxnepe@hotmail.com</p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-twitter"></i></a>
                        <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-facebook-f"></i></a>
                        <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-linkedin-in"></i></a>
                        <a class="text-white" href="#"><i class="fab fa-2x fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Carreras</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Técnico en Informática</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Técnico en Diseño Gráfico</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Técnico en Electricidad</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Técnico en Soldadura</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Técnico en Mecánica Automotriz</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Técnico en Enfermería</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h3 class="text-white mb-4">Enlaces</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Política de privacidad</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Términos y Condiciones</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i> Preguntas Frecuentes (FAQs)</a>
                        <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Ayuda y soporte</a>
                        <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Contacto</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white-50 border-top py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0">Copyright &copy; <a class="text-white" href="#">ESIMIA</a>. All Rights Reserved.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <p class="m-0">Designed by <a class="text-white" href="">ALAREGO TEAM</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

<script>
    function eliminar(id,name){
        document.getElementById(id).addEventListener('submit', function (event) {
        // Prevenir el envío del formulario por defecto
        event.preventDefault();
        if (confirm('Deseas Eliminar realmente asi bien seguro porque no se podra recuperar. Elimniando: ' + name)) {
            console.log(id,name);
            this.submit();
        }
        });
    }
</script>


<style>
    .menudiv{
        margin-top: 20px;
        padding: 10px;
        /* margin-left: 7%; */
        /* margin-right: 7%; */
        display: flex;
        justify-content: center;
        /* border: 2px solid red; */
        /* background-color: black; */
        /* background: linear-gradient(45deg, #49a09d, #5f2c82); */
        /* background-image: radial-gradient(circle at 37.72% -19.64%, #93b2ff 0, #2f77da 50%, #0043ad 100%); */
    }
    .tabladiv{
        margin-top: 20px;
        padding: 10px;
        /* margin-left: 7%; */
        /* margin-right: 7%; */
        display: flex;
        justify-content: center;
        /* border: 2px solid red; */
        /* background-color: black; */
        /* background: linear-gradient(45deg, #49a09d, #5f2c82); */
        background-image: radial-gradient(circle at 37.72% -19.64%, #93b2ff 0, #2f77da 50%, #0043ad 100%);
    }
    .hiden{
        display: none;
    }
    .eliminarbtn{
        border: none;
        background-color: transparent;
        color: red;
    }
    table {
        width: 80%;
        border-collapse: collapse;
        overflow: hidden;
    	box-shadow: 0 0 20px rgba(0,0,0,0.1);
    }
    th, td {
        padding: 15px;
        background-color: rgba(255,255,255,0.2);
        color: #fff;
    }
    th {
        text-align: left;
    }
    .thead {
        background-color: #112993;
    }
    a {
        color: white;
    }
    .bad{
        text-align: center;
        /* border: 2px solid red; */
        color: red;
    }
</style>