<?php
    include 'conexion.php';
    if(isset($_POST['accion'])){
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];

        if($_POST['accion']=='crear'){
            $sql = "INSERT INTO tr_fabricante (nombre) VALUES(?)"; 
            $stmt = $pdo->prepare($sql); 
            $stmt->execute([$nombre]);
            echo('Fabricante Registrado con Exito...');
        }elseif($_POST['accion']=='actualizar') {
            echo('aqui vamos a lanzar el codigo para actualziar');
        }elseif($_POST['accion']=='eliminar') {
            echo('aqui vamos a lanzar el codigo para eliminar');
        }

    }
    
?>