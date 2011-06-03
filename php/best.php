<?php
    $conexion = mysql_connect('chico.inf-cr.uclm.es','mhrv','mhrvpass') or die("Error al conectar con la BD");
    mysql_select_db('mhrv') or die ("Error al seleccionar la BD");

    $consulta = "SELECT * FROM JMTT_SRGC_usuario WHERE user = '".$_REQUEST['txtUser']."';";

    $resultado = mysql_query($consulta) or die ("Error al realizar la consulta");

    $fila = mysql_fetch_array($resultado);

    if ($_REQUEST['txtScore'] > $fila['best']) {
        $consulta = "UPDATE JMTT_SRGC_usuario SET best = '".$_REQUEST['txtScore']."' WHERE user = '".$_REQUEST['txtUser']."';";
        mysql_query($consulta) or die ("Error al realizar la consulta");
    }

    mysql_close($conexion) or die ("Error al cerrar la conexión");
?>

