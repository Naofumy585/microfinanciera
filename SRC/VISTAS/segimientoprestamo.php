<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Bootstrap/css/Style_SPrestamo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguimiento de Préstamo</title>
</head>
<body>
    <div class="header">
        <img src="./Img/MICRO.PNG.png" alt="Imagen de encabezado">
        <h1>Módulo de Búsqueda de Clientes Activos</h1>
    </div>
    <br>

   
    <form action="buscar_cliente.php" method="post" id="clienteForm">
        <label for="cliente_id">ID del Cliente:</label>
        <input type="text" id="cliente_id" name="cliente_id"><br><br>
        <button type="submit">Buscar</button>
    </form>
    <script src="/SRC/Bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/SRC/Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>