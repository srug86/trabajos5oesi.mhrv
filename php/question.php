<?php
    $conexion = mysql_connect('chico.inf-cr.uclm.es','mhrv','mhrvpass') or die("Error al conectar con la BD");
    mysql_select_db('mhrv', $conexion) or die ("Error al seleccionar la BD");

    srand (time());
    $numero_aleatorio = rand(1,51);

    $consulta = "SELECT * FROM JMTT_SRGC_preguntas WHERE id = $numero_aleatorio";

    $resultado = mysql_query($consulta) or die ("Error al realizar la consulta");

    $fila = mysql_fetch_array($resultado);

    echo "&pregunta" . '=' . $fila['question'];
    echo "&respuesta1" . '=' . $fila['a1'];
    echo "&respuesta2" . '=' . $fila['a2'];
    echo "&respuesta3" . '=' . $fila['a3'];
    echo "&respuesta4" . '=' . $fila['a4'];
    echo "&correcta" . '=' . $fila['correct'];

    mysql_close($conexion) or die ("Error al cerrar la conexión");
?>
