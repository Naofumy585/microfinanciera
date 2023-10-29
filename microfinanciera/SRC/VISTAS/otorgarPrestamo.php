<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>MICROFINANCIERA</title>

    <style>
        body {
            background-color: #9BB6D7;
        }

        h2 {
            font-family: 'Times New Roman', Times, serif;
        }

        h3 {
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        /* Estilo para resaltar las opciones de navegación al pasar el cursor */
        .nav {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        /* Estilos para los botones del menú */
        .menu-button {
            background-color: #29A0D4;
            color: #000;
            border-color: #8F8E8D;
        }

        .nav-link {
            display: block;
            background-color: transparent;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Agregamos el estilo para bordes circulares */
        .menu-image {
            border-radius: 30%;
        }

        @media screen and (max-width: 600px) {
            .nav-item {
                float: none;
                width: 100%;
            }
        }

        /* Añade un estilo para que el contenido principal se desplace cuando se abre el navbar lateral */
        .offcanvas {
            width: 300px;
            z-index: 1050;
            background-color: transparent; /* Fondo marrón para el menú desplegable */
        }

        /* Estilo para el botón del menú izquierdo */
        .navbar-toggler {
            position: absolute;
            left: 15px;
            top: 15px;
            background-color: transparent;
            border: none;
            z-index: 1051;
        }

        /* Añade un estilo para el fondo azul al menú desplegable al abrirlo */
        .offcanvas.show {
            background-color: #7D91F7; /* Fondo azul cuando se abre el menú desplegable */
        }
    </style>
</head>
<body>
    <div class="row">
        <!-- Navbar izquierdo -->
        <nav class="navbar bg-body-tertiary" style="background: none; border: none;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header text-center">
                        <img src="./Img/MICRO.PNG.png" width="60px" alt="">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">MICROFINANCIERA Y SERVICIOS FINANCIEROS</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./menu.php">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Clientes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Prestamos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Cobranzas</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Reportes
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Por día</a></li>
                                    <li><a class="dropdown-item" href="#">Por semana</a></li>
                                    <li><a class="dropdown-item" href="#">Por Quincena</a></li>
                                    <li><a class="dropdown-item" href="#">Mensual</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Configuración
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Editar datos</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">CERRAR SESIÓN</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Contenido principal -->
        <main class="col">
            <nav class="navbar" style="background-color: #CBC5C0">
                <div class="container-fluid">
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

            <h2>OTORGAR PRÉSTAMO</h2>

            <!-- Crear la tabla -->
            <table border="1" style="border-collapse: collapse; width: 100%;">
                <tr style="background-color: #2E78F9; color: #FFF;">
                    <th colspan="4">INGRESA INFORMACIÓN DEL CLIENTE</th>
                </tr>
                <tr>
                    <td>INGRESA ID</td>
                    <td>NOMBRES</td>
                    <td>APELLIDO PATERNO</td>
                    <td>APELLIDO MATERNO</td>
                </tr>
                <tr>
                    <td><input type="text" name="id"></td>
                    <td><input type="text" name="nombres"></td>
                    <td><input type="text" name="apellido_paterno"></td>
                    <td><input type="text" name="apellido_materno"></td>
                </tr>
                <tr>
                  <td colspan="2">MONTO DE PRÉSTAMO</td>
                    <td colspan="2">TIPO DE ABONO</td>
                   </tr>
                  <tr>
                  <td colspan="2"><input type="text" name="monto_prestamo"></td>
                 <td colspan="2">
           <select name="tipo_abono">
            <option value="Diario">Diario</option>
            <option value="Semanal">Semanal</option>
            <option value="Quincenal">Quincenal</option>
            <option value="Mensual">Mensual</option>
        </select>
    </td>
</tr>
            </table><br>

            <!-- Agregar botones -->
            <button style="background-color: #2E78F9; color: #FFF;">OTORGAR PRÉSTAMO</button>
            <button style="background-color: #FF0000; color: #FFF;">CANCELAR</button>
        </main>
    </div>

    <!-- Bootstrap 5.3 JS -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
        crossorigin="anonymous"></script>
</body>
</html>
