<?php
    $conexion = mysql_connect('chico.inf-cr.uclm.es','mhrv','mhrvpass') or die("Error al conectar con la BD");
    mysql_select_db('mhrv') or die ("Error al seleccionar la BD");
    
    $consulta = "SELECT * FROM JMTT_SRGC_usuario ORDER BY best DESC LIMIT 0, 10;";

    $resultado = mysql_query($consulta);

    $contador = 0;
    while ($fila = mysql_fetch_array($resultado)) {
        $jugador = $fila["user"];
        $puntuacion = $fila["best"];

        echo "jugador$contador=$jugador";
        echo "&puntuacion$contador=$puntuacion";
        $contador++;
    }
    
    mysql_close($conexion) or die ("Error al cerrar la conexión");
?>
