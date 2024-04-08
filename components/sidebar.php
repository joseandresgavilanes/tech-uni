<div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-body-tertiary">
                <!-- Barra lateral -->
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="?page=dashboard" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline mainTextColor">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="?page=dashboard" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline mainTextColor">Dashboard</span> 
                            </a>
                        </li>
                        <li>
                            <a href="?page=history" class="nav-link px-0 align-middle ">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline mainTextColor">History</span></a>
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
                        include 'dashboard/dashboard.php';
                        break;
                    case 'history':
                        include 'history/history.php';
                        break;
                    default:
                        include 'dashboard/dashboard.php';
                }
                ?>
            </div>
        </div>
    </div>