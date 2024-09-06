<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP BASICO</title>
</head>

<body>
    <h1>Gestión de Fabricantes</h1>
    <form action="procesar.php" method="post">
        <label for="codigo">Código:</label>
        <input type="number" id="codigo" name="codigo">
        <label for="nombre" >Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <br><br>
        <button type="submit" name="accion" value="crear">Crear</button>
        <button type="submit" name="accion" value="actualizar">Actualizar</button>
        <button type="submit" name="accion" value="eliminar">Eliminar</button>
    </form>
    <h2>Lista de Fabricantes</h2>
    <?php include 'listar.php'; ?>
</body>

</html>