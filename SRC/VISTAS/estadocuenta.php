<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Bootstrap/css/Style_EstadoCuenta.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Estado de Cuenta</title>
</head>
<body>
    <div class="header">
        <img src="./Img/MICRO.PNG.png" alt="Imagen de encabezado">
        <h1>Generar Estado de Cuenta</h1>
    </div>

  <br>
    <form id="clienteForm" action="generar_estado_cuenta.php" method="post">
        <label for="cliente_id">ID del Cliente:</label>
        <input type="text" id="cliente_id" name="cliente_id" required><br><br>
        <label for="nombre_cliente">Nombre del Cliente:</label>
        <input type="text" id="nombre_cliente" name="nombre_cliente" required><br><br>
        <button type="submit">Generar Reporte</button>
    </form>
    <script src="/SRC/Bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/SRC/Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

