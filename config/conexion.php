<?php
    // script para crear una conexión con la BD

    // Parametros requeridos para la conexión con la BD

    // Parametros BD local - Constantes
    define('USER', 'nmacias');// Crea la constante USER con valor 'root'
    define('PW', '12345');
    define('HOST', 'localhost');
    define('BD', 'centro_medico');

    // Parametros BD remota (infinityfree)
    /*define('USER', 'if0_41712668'); // Crea la constante USER con valor 'root'
    define('PW', '7rRJIxHMdKGo');
    define('HOST', 'sql306.infinityfree.com');
    define('BD', 'if0_41712668_centro_medico');*/

    // Conexión con la BD
    $conexion = mysqli_connect(HOST, USER, PW, BD);

    // Establecer conjunto de caracteres para el hosting
    mysqli_set_charset($conexion, 'utf8mb4');
    
    // Verificar la conexión con la BD

    if (!$conexion)
    {
        die("La conexión con la BD falló: " + mysqli_error
        ($conexion));
    }
    else
    {
        die("Conexión a la BD exitosa!");
    }



?>
