<?php
    $hostBD = "chico.inf-cr.uclm.es";
    $usuarioBD = "mhrv";
    $passwordBD = "mhrvpass";
    $nombreBD = "mhrv";

    // conexion con la Base de Datos
    if (!mysql_connect($hostBD, $usuarioBD, $passwordBD)) {
        echo "&resultado=noconexion";
    } else {
        mysql_select_db($nombreBD);
    }
    
    // consulta para conseguir las 10 mejores puntuaciones
    $consulta = "SELECT * FROM JMTT_SRGC_preguntas";
    $resultConsulta = mysql_query ($consulta);

    // inicializar contador
    $contador = 0;
    // leer datos de la BD y salida de resultados
    while ($fila = mysql_fetch_array($resultConsulta)) {
        $pregunta = $fila ["question"];
        $respuesta1 = $fila ["a1"];
        $respuesta2 = $fila ["a2"];
        $respuesta3 = $fila ["a3"];
        $respuesta4 = $fila ["a4"];
        $correcta = $fila ["correct"];

        echo "&pregunta$contador=$pregunta";
        echo "&respuesta1$contador=$respuesta1";
        echo "&respuesta2$contador=$respuesta2";
        echo "&respuesta3$contador=$respuesta3";
        echo "&respuesta4$contador=$respuesta4";
        echo "&correcta$contador=$correcta";
        $contador++;
    }

    // Envio de informacion extra a flash
    echo "&resultado=ok";
    echo "&filas=$contador&";
?>
