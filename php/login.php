<?php
    $conexion = mysql_connect('chico.inf-cr.uclm.es','mhrv','mhrvpass') or die("Error al conectar con la BD");
    mysql_select_db('mhrv') or die ("Error al seleccionar la BD");

    $consultaSQL = "SELECT * FROM JMTT_SRGC_usuario WHERE user = '".$_REQUEST['txtUser']."' AND password = '".$_REQUEST['txtPassword']."';";

    $resultado = mysql_num_rows($consultaSQL) or die ("Error al realizar la consulta");

    if ($resultado != 0) {
        echo "estado=correcto";
    }
    else {
        echo "estado=incorrecto";
    }

    mysql_close($conexionSQL) or die ("Error al cerrar la conexión");
?>

