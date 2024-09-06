<?php
    include 'conexion.php';

    $sql = 'SELECT * FROM tr_fabricante';
    $stmt = $pdo->query($sql);
    echo("<table border='1'>");
    echo("<tr><th>Código</th><th>Nombre</th></tr>");
    foreach($stmt as $fabricante){
        echo("<tr>");
        echo("<td>".$fabricante['codigo']."</td>");
        echo("<td>".$fabricante['nombre']."</td>");
        echo("</tr>");
    }
    echo("</table>");
?>