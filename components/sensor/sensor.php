<?php 
// Retrieve sensor data from respective files
$valor_sensor_temperatura = file_get_contents("../../api/files/sensors_actuators/temperature/valor.txt");
$date_sensor_temperatura = file_get_contents("../../api/files/sensors_actuators/temperature/hora.txt");
$valor_sensor_humidity = file_get_contents("../../api/files/sensors_actuators/humidity/valor.txt");
$date_sensor_humidity = file_get_contents("../../api/files/sensors_actuators/humidity/hora.txt");
$valor_sensor_wind = file_get_contents("../../api/files/sensors_actuators/wind/valor.txt");
$date_sensor_wind = file_get_contents("../../api/files/sensors_actuators/wind/hora.txt");
?>

<div class="row g-4" id="bottomSection">
    <!-- Display Temperature -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card dashboardCard bg-body-tertiary border-0 d-flex align-items-center justify-content-center flex-row">
            <div>
                <h6 class="fw-bold fs-6 mb-0">Temperature</h6>
                <div class="w-100 d-flex align-items-center justify-content-between">
                    <div class="d-flex flex-column">
                        <!-- Display temperature value -->
                        <h5 class="card-title fs-1 fw-bold mb-0"><?php echo $valor_sensor_temperatura; ?>°</h5>
                        <!-- Additional information -->
                        <p class="mb-0 sensorLastUpdate mainTextColor"><?php echo $date_sensor_temperatura?></p>
                    </div>
                </div>
            </div>
            <!-- Display temperature icon based on threshold -->
            <span class="bigIcon <?php echo $valor_sensor_temperatura > 20 ? 'text-warning' : 'text-primary'; ?> material-symbols-outlined">
                <?php echo $valor_sensor_temperatura > 20 ? 'light_mode' : 'ac_unit'; ?>    
            </span>
        </div>
    </div>

    <!-- Display Humidity -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card dashboardCard bg-body-tertiary border-0 d-flex align-items-center justify-content-center flex-row">
            <div>
                <h6 class="fw-bold fs-6 mb-0">Humidity</h6>
                <div class="w-100 d-flex align-items-center justify-content-between">
                    <div class="d-flex flex-column">
                        <!-- Display humidity value -->
                        <h5 class="card-title fs-1 fw-bold mb-0"><?php echo $valor_sensor_humidity; ?>%</h5>
                        <!-- Additional information -->
                        <p class="mb-0 sensorLastUpdate mainTextColor"><?php echo $date_sensor_humidity?></p>
                    </div>
                </div>
            </div>
            <!-- Display humidity icon based on threshold -->
            <span class="bigIcon <?php echo $valor_sensor_humidity > 40 ? 'text-primary' : 'text-info'; ?> material-symbols-outlined">
                <?php echo $valor_sensor_humidity > 40 ? "rainy" : "humidity_mid" ?>    
            </span>
        </div>
    </div>

    <!-- Display Wind -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card dashboardCard bg-body-tertiary border-0 d-flex align-items-center justify-content-center flex-row">
            <div>
                <h6 class="fw-bold fs-6 mb-0">Wind</h6>
                <div class="w-100 d-flex align-items-center justify-content-between">
                    <div class="d-flex flex-column">
                        <!-- Display wind value -->
                        <h5 class="card-title fs-1 fw-bold mb-0"><?php echo $valor_sensor_wind; ?> km/h</h5>
                        <!-- Additional information -->
                        <p class="mb-0 sensorLastUpdate mainTextColor"><?php echo $date_sensor_wind?></p>
                    </div>
                </div>
            </div>
            <!-- Display wind icon based on threshold -->
            <span class="bigIcon <?php echo $valor_sensor_wind > 30 ? 'text-primary' : 'text-white'; ?> material-symbols-outlined">
                <?php echo $valor_sensor_wind > 30 ? "air" : "airwave" ?>    
            </span>
        </div>
    </div>
</div>
