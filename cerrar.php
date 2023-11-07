<?php
    header("location:index.html");
    mysqli_free_result($resultado);
    mysqli_close($conexion);
    session_unset();
    session_destroy();