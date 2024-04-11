<?php
session_start();
if (!isset($_SESSION['username'])) {
    include 'index.php';
    exit(); // Importante para detener la ejecución del script después de incluir el login
}
?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech uni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../global.css">
    <link rel="stylesheet" href="../../dashboard/dashboard.styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <?php include '../navbar/navbar.php';?>
<div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-body-tertiary">
                <!-- Barra lateral -->
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a class="w-100 d-flex align-items-center pt-4 pb-3 mb-md-0 me-md-auto text-white text-decoration-none border-bottom border-1 border-primary">
                        <img src="https://github.com/mdo.png" alt="user image" width="32" height="32" class="rounded-circle">
                        <div class="ms-3 d-flex flex-column " >
                            <h5 class="fw-bold mb-0 mainTextColor">Jhon Doe</h5>
                            <span class="mainTextColor fontSmall">User</span>

                        </div>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mt-4 mb-0 align-items-center align-items-sm-start gap-3" id="menu">
                        <li >
                            <a href="?page=dashboard" class="nav-link px-0 d-flex align-items-center">
                            <span class="material-symbols-outlined mainTextColor">
bar_chart
</span> <span class="ms-2 d-none d-sm-inline mainTextColor">Dashboard</span> 
                            </a>
                        </li>
                        <li>
                            <a href="?page=history" class="nav-link px-0 align-middle d-flex align-items-center">
                            <span class="material-symbols-outlined mainTextColor">
schedule
</span><span class="ms-2 d-none d-sm-inline mainTextColor">History</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col p-5">
                <!-- Contenido -->
                <?php
                // Determina qué página mostrar según el parámetro 'page' en la URL
                $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

                // Incluye el contenido correspondiente según la página seleccionada
                switch ($page) {
                    case 'dashboard':
                        include '../../dashboard/dashboard.php';
                        break;
                    case 'history':
                        include '../../history/history.php';
                        break;
                    default:
                    include '../../dashboard/dashboard.php';
                }
                ?>
            </div>
        </div>
    </div>

    </body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>