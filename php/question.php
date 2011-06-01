<?php
    $conexion = mysql_connect('chico.inf-cr.uclm.es','mhrv','mhrvpass');
    mysql_select_db('mhrv', $conexion);

    srand (time());
    $numero_aleatorio = rand(1,51);

    $consulta = "SELECT * FROM JMTT_SRGC_preguntas WHERE id = $numero_aleatorio";

    $resultado = mysql_query($consulta);
    echo "estado=cargado";

    $fila = mysql_fetch_array($resultado);

    echo "&pregunta" . '=' . $fila['question'];
    echo "&respuesta1" . '=' . $fila['a1'];
    echo "&respuesta2" . '=' . $fila['a2'];
    echo "&respuesta3" . '=' . $fila['a3'];
    echo "&respuesta4" . '=' . $fila['a4'];
    echo "&correcta" . '=' . $fila['correct'];
?>
