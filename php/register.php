<?php
    $conexion = mysql_connect('chico.inf-cr.uclm.es','mhrv','mhrvpass') or die("Error al conectar con la BD");
    mysql_select_db('mhrv') or die ("Error al seleccionar la BD");

    $consultaUsuario = "SELECT * FROM JMTT_SRGC_usuario WHERE user = '".$_REQUEST['txtUser']."';";

    $resultado = mysql_query($consultaUsuario) or die ("Error al realizar la consulta");

    $nfilas = mysql_num_rows($resultado);

    if ($nfilas == 0) {
        echo "estado=correcto";
        $consultaSQL = "INSERT INTO JMTT_SRGC_usuario(user, password) VALUES ('".$_REQUEST['txtUser']."','".$_REQUEST['txtPassword']."');";

        mysql_query($consultaSQL) or die ("Error al realizar la consulta");
    }
    else echo "estado=incorrecto";

    mysql_close($conexion) or die ("Error al cerrar la conexión");
?>

