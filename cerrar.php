<?php
    session_start();
    session_destroy();

    // session_unset();
    // session_regenerate_id();
    // mysqli_free_result($resultado);
    // mysqli_close($conexion);
    header("location:index.html");