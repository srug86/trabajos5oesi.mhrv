<?php
    $conexion = mysql_connect('chico.inf-cr.uclm.es','mhrv','mhrvpass') or die("Error al conectar con la BD");
    mysql_select_db('mhrv') or die ("Error al seleccionar la BD");

    $consultaUsuario = "SELECT * FROM JMTT_SRGC_usuario WHERE user = '".$_REQUEST['txtUser']."';";

    $resultado = mysql_query($consultaUsuario) or die ("Error al realizar la consulta");

    $fila = mysql_fetch_array($resultado);

    $nueva_puntuacion = $fila['score'] + 10;

    $consulta = "UPDATE JMTT_SRGC_usuario SET score = $nueva_puntuacion WHERE user = '".$_REQUEST['txtUser']."';";
    mysql_query($consulta) or die ("Error al realizar la consulta");

    echo "&nueva_puntuacion" . '=' . $nueva_puntuacion;

    mysql_close($conexion) or die ("Error al cerrar la conexión");
?>
