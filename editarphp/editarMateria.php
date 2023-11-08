<?php include_once("editando.php");?>
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
    <link href="../css/style.css" rel="stylesheet">
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
            <a href="../index.html" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-book-reader mr-3"></i>ESIMIA</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="../index.html" class="nav-item nav-link active">Inicio</a>
                    <a href="../about.html" class="nav-item nav-link">Nosotros</a>
                    <a href="../course.html" class="nav-item nav-link">Preparatoria</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Cursos</a>
                        <div class="dropdown-menu m-0">
                            <a href="../detail.html" class="dropdown-item">Detalles</a>
                            <a href="../feature.html" class="dropdown-item">Our Features</a>
                            <a href="../team.html" class="dropdown-item">Instructors</a>
                            <a href="../testimonial.html" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="../contact.html" class="nav-item nav-link">Contacto</a>
                </div>
                <a href="../cerrar.php" class="btn btn-primary py-2 px-4 d-none d-lg-block">Cerrar Sesion</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->



    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="aforma bg-dark">
            <div id="login">
                <h1>Editar Materia</h1>
                <p><?php ?></p><br>
                <form action="editando.php?class=materia_e" method="post">
                    <div style="display: none;">
                        <input name="id" autocomplete="off" value="<?php echo ($materia[0]["ID"]); ?>"/>
                    </div>
                    <div class="field-wrap">
                        <label>
                            Nombre<span class="req">*</span>
                        </label>
                        <input name="asignatura" autocomplete="off" value="<?php echo ($materia[0]["asignatura"]); ?>"/>
                    </div>
                    <!-- <p class="forgot"><a href="#">Recuperar contraseña</a></p> -->
                    <button type="submit" class="button button-block"/>Guardar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Header End -->

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

<style>
    *,
    *:before,
    *:after {
        box-sizing: border-box;
    }

    a {
        text-decoration: none;
        color: #1ab188;
        transition: 0.5s ease;
        &:hover {
            color: #179b77;
        }
    }

    .tab-group {
        list-style: none;
        padding: 0;
        margin: 0 0 40px 0;
        &:after {
            content: "";
            display: table;
            clear: both;
        }
        li a {
            display: block;
            text-decoration: none;
            padding: 15px;
            background: rgba(#a0b3b0);
            color: #a0b3b0;
            font-size: 20px;
            float: left;
            width: 50%;
            text-align: center;
            cursor: pointer;
            transition: 0.5s ease;
            &:hover {
                background: #179b77;
                color: #ffffff;
            }
        }
        .active a {
            background: #1ab188;
            color: #ffffff;
        }
    }

    .tab-content > div:last-child {
        display: none;
    }

    .aforma{
        border: 2px;
        /* background-color: rgba(#13232f, 0.9); */
        /* background-color: rgba(36, 49, 60, 1); */
        width: max-content;
        max-width: 600px;
        margin: 40px auto;
        padding: 40px;
        margin: auto;
        box-shadow: 0 4px 10px 4px rgba(36, 49, 60, 0.3);
    }

    h1 {
        text-align: center;
        color: #ffffff;
        font-weight: 300;
        margin: 0 0 40px;
    }

    .field-wrap {
        position: relative;
        margin-bottom: 40px;
    }

    input,
    textarea {
        font-size: 22px;
        display: block;
        width: 100%;
        height: 100%;
        padding: 5px 10px;
        background: none;
        background-image: none;
        border: 1px solid #a0b3b0;
        color: #ffffff;
        border-radius: 0;
        transition: border-color 0.25s ease, box-shadow 0.25s ease;
        &:focus {
            outline: 0;
            border-color: #179b77;
        }
    }

    .top-row {
        &:after {
            content: "";
            display: table;
            clear: both;
        }
        > div {
            float: left;
            width: 48%;
            margin-right: 4%;
            &:last-child {
            margin: 0;
            }
        }
    }

    textarea {
        border: 2px solid #a0b3b0;
        resize: vertical;
    }

    label {
        position: absolute;
        transform: translateY(-36px);
        left: 0px;
        color: rgba(255, 255, 255, 0.5);
        transition: all 0.25s ease;
        /* -webkit-backface-visibility: hidden; */
        pointer-events: none;
        font-size: 22px;
        .req {
            margin: 2px;
            color: #1ab188;
        }
    }

    .button {
        border: 0;
        outline: none;
        border-radius: 0;
        padding: 15px 0;
        font-size: 1.5rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        background: #1ab188;
        color: #ffffff;
        transition: all.5s ease;
        /* -webkit-appearance: none; */
        &:hover,
        &:focus {
            background: #179b77;
        }
    }

    .button-block {
        display: block;
        width: 100%;
    }

    .forgot {
        margin-top: -20px;
        text-align: right;
    }

    .contenedor{
        position: fixed;
        display: block;
        /* border: 2px solid green; */
        top: 65.5%;
        left: 41%;
    }
</style>