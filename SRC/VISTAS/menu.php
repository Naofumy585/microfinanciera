<!DOCTYPE html>
<html lang="es-MX">

<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Bootstrap/css/Style_menu.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MICROFINANCIERA</title>
</head>
<body>
    <div class="row">
    <nav class="navbar " >
    <div class="container-fluid" style="background-color: #CBC5C0">
        <a class="navbar-brand"></a>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
            <!-- Agregamos un botón con una imagen -->
            <button class="btn" type="submit" style="background-color: #2E78F9; border: none;">
                <!-- Puedes reemplazar 'ruta_de_la_imagen' con la URL de tu imagen -->
                <img src="https://cdn1.iconfinder.com/data/icons/basic-ui-elements-color/700/09_search-1024.png" alt="Buscar" style="width: 40px; height: 40px;">
            </button>
        </form>
    </div>
</nav>


        <!-- Colocamos las rutas de las imágenes y botones del menú -->
        <?php
            $ruta_otorgar = "../VISTAS/img/otorp.png";
            // Ruta de la imagen del logo otorgar préstamo
            $ruta_seguimiento = "../VISTAS/img/segpres.png";
            // Ruta de la imagen del logo otorgar préstamo
            $ruta_clienteN = "../VISTAS/img/NevCliente.png";
            // Ruta de la imagen del logo otorgar préstamo
            $ruta_Estadocuenta = "../VISTAS/img/estadoC.png";
        ?>
        <div class="container">
            <div class="row mt-4">
                <!-- Columnas para mostrar las imágenes y botones -->
                <div class="col-md-3 d-flex flex-column align-items-center">
                    <img src="<?php echo $ruta_otorgar; ?>" alt="otorgar préstamo" class="w-100 menu-image"
                        style="height: 200px;">
                    <!-- Botón para otorgar préstamo -->
                    <a href="./otorgarPrestamo.php">
                        <button type="button" class="btn btn-primary mt-2 menu-button">Otorgar Préstamo</button>
                    </a>
                </div>
                <div class="col-md-3 d-flex flex-column align-items-center">
                    <img src="<?php echo $ruta_clienteN; ?>" alt="Cliente nuevo" class="w-100 menu-image"
                        style="height: 200px;">
                    <!-- Botón para agregar nuevo cliente -->
                    <a href="./registroCliente.php">
                        <button type="button" class="btn btn-primary mt-2 menu-button">Nuevo Cliente</button>
                    </a>
                </div>
                <div class="col-md-3 d-flex flex-column align-items-center">
                    <img src="<?php echo $ruta_seguimiento; ?>" alt="Seguimiento de préstamo" class="w-100 menu-image"
                        style="height: 200px;">
                    <!-- Botón para seguimiento de préstamo -->
                    <a href="./segimientoprestamo.php">
                        <button type="button" class="btn btn-primary mt-2 menu-button">Seguimiento de Préstamo</button>
                    </a>
                </div>
                <div class="col-md-3 d-flex flex-column align-items-center">
                    <img src="<?php echo $ruta_Estadocuenta; ?>" alt="Estado de cuenta" class="w-100 menu-image"
                        style="height: 200px;">
                    <!-- Botón para ver el estado de cuenta -->
                    <a href="./estadocuenta.php">
                        <button type="button" class="btn btn-primary mt-2 menu-button">Estado de Cuenta</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <footer>
       
    </footer>
    <script src="/SRC/Bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/SRC/Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>