<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Bootstrap/css/Style_Prestamos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Otorgar Prestamos</title>
</head>
<body>
    <div class="header">
        <img src="./Img/MICRO.PNG.png" alt="Imagen de encabezado"> <!-- Reemplaza "tu-imagen.jpg" con la URL de tu imagen -->
        <h1>Otorgar Prestamos</h1>
    </div>
<br>
    <div style="text-align: center;">
        <form id="loan-form">
            <label for="client-name">Nombre del Cliente:</label>
            <input type="text" id="client-name" name="client-name" required>

            <label for="loan-amount">Monto del Préstamo:</label>
            <input type="number" id="loan-amount" name="loan-amount" min="1" max="5000" required>

            <label for="payment-frequency">Tipo de abono:</label>
            <select id="payment-frequency" name="payment-frequency" required>
                <option value="daily">Diario</option>
                <option value="weekly">Semanal</option>
                <option value="biweekly">Quincenal</option>
                <option value="monthly">Mensual</option>
            </select>

            <input type="submit" value="Otorgar Préstamo">
        </form>
    </div>
    <script
        src="/SRC/Bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/SRC/Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
