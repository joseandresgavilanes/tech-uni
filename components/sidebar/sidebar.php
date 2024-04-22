<?php
session_start();

// Check if user is not logged in
if (!isset($_SESSION['username'])) {
    // Redirect to index.php for login
    include 'index.php';
    exit(); // Important to stop script execution after including the login
}else{

    $current_user = $_SESSION["username"];
}
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech uni</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Global styles -->
    <link rel="stylesheet" href="../../global.css">
    <!-- Dashboard-specific styles -->
    <link rel="stylesheet" href="../../dashboard/dashboard.styles.css">
    <!-- History-specific styles -->
    <link rel="stylesheet" href="../../history/history.styles.css">
    <!-- Actuators-specific styles -->
    <link rel="stylesheet" href="../atuador/atuador.styles.css">
    <!-- Sensors-specific styles -->
    <link rel="stylesheet" href="../sensor/sensor.styles.css">
    <!-- Creators -specific styles -->
    <link rel="stylesheet" href="../creators/creators.styles.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <!-- Sidebar -->
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-body-tertiary">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <!-- User profile -->
                <a class="w-100 d-flex align-items-center pt-4 pb-3 mb-md-0 me-md-auto text-white text-decoration-none border-bottom border-1 border-primary">
                    <img src=<?php echo $current_user == 'username' ? "../../img/profile_jose.jpg" : "../../img/profile_dandadan.png" ?> alt="user image" width="32" height="32" class="rounded-circle">
                    <div class="ms-3 d-flex flex-column d-none d-md-block " >
                        <h5 class="fw-bold mb-0 mainTextColor"><?php echo $current_user;?>  </h5>
                        <span class="mainTextColor fontSmall">User</span>
                    </div>
                </a>
                <!-- Navigation menu -->
                <ul class="nav nav-pills flex-column mb-sm-auto mt-4 mb-0 align-items-center align-items-sm-start gap-3" id="menu">
                    <!-- Dashboard link -->
                    <li>
                        <a href="?page=dashboard" class="nav-link px-0 d-flex align-items-center">
                            <span class="material-symbols-outlined mainTextColor">
                                bar_chart
                            </span> <span class="ms-2 d-none d-sm-inline mainTextColor">Dashboard</span> 
                        </a>
                    </li>
                    
                    <li>
                        <a href="?page=temperature" class="nav-link px-0 align-middle d-flex align-items-center">
                            <span class="material-symbols-outlined mainTextColor">
                            thermometer
                            </span><span class="ms-2 d-none d-sm-inline mainTextColor">Temperature</span>
                        </a>
                    </li>
                    <li>
                        <a href="?page=humidity" class="nav-link px-0 align-middle d-flex align-items-center">
                            <span class="material-symbols-outlined mainTextColor">
                            humidity_percentage
                            </span><span class="ms-2 d-none d-sm-inline mainTextColor">Humidity</span>
                        </a>
                    </li>
                    <li>
                        <a href="?page=wind" class="nav-link px-0 align-middle d-flex align-items-center">
                            <span class="material-symbols-outlined mainTextColor">
                                air
                            </span><span class="ms-2 d-none d-sm-inline mainTextColor">Wind</span>
                        </a>
                    </li>

                    <li>
                        <a href="?page=led" class="nav-link px-0 align-middle d-flex align-items-center">
                            <span class="material-symbols-outlined mainTextColor">
                            lightbulb
                            </span><span class="ms-2 d-none d-sm-inline mainTextColor">Led</span>
                        </a>
                    </li>


                    <li>
                        <a href="?page=door" class="nav-link px-0 align-middle d-flex align-items-center">
                            <span class="material-symbols-outlined mainTextColor">
                            sensor_door
                            </span><span class="ms-2 d-none d-sm-inline mainTextColor">Main Door</span>
                        </a>
                    </li>

                    <li>
                        <a href="?page=air_conditioning" class="nav-link px-0 align-middle d-flex align-items-center">
                            <span class="material-symbols-outlined mainTextColor">
                                mode_fan
                            </span><span class="ms-2 d-none d-sm-inline mainTextColor">Air Conditioning</span>
                        </a>
                    </li>
                    <li>
                        <!-- Sign out -->
                        <a href="../../logout.php">
                            <span class="material-symbols-outlined mainTextColor d-md-none">
                                logout
                            </span>
                        </a>
                        <a class="btn btn-outline-secondary d-none d-md-block" href="../../logout.php" role="button">Sign Out</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Main content -->
        <div class="col p-5">
            <!-- Content -->
            <?php
            // Determine which page to display based on the 'page' parameter in the URL
            $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

            // Include the corresponding content based on the selected page
            switch ($page) {
                case 'dashboard':
                    include '../../dashboard/dashboard.php';
                    break;
                case 'temperature':
                    include '../../history/history.php';
                    break;
                case 'humidity':
                    include '../../history/history.php';
                    break;
                case 'wind':
                    include '../../history/history.php';
                    break;
                case 'led':
                    include '../../history/history.php';
                    break;
                case 'door':
                    include '../../history/history.php';
                    break;
                case 'air_conditioning':
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
