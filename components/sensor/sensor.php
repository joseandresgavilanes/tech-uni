<?php 
$valor_sensor_temperatura=file_get_contents("../../api/files/sensors/temperature/temperature.txt");
$valor_sensor_humidity=file_get_contents("../../api/files/sensors/humidity/humidity.txt");
$valor_sensor_wind=file_get_contents("../../api/files/sensors/wind/wind.txt");

?>
<div class="row g-4">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card dashboardCard bg-body-tertiary border-0 d-flex align-items-center justify-content-center flex-row">
                                <div>
                                    <h6 class="fw-bold fs-6 mb-0">Temperature</h6>
                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                        <div class="d-flex flex-column">
                                            <h5 class="card-title fs-1 fw-bold mb-0"><?php echo $valor_sensor_temperatura; ?>°</h5>
                                            <p class="mb-0 fs-7 mainTextColor">11.38% Since last month</p>
                                        </div>
                                    </div>
                                </div>
                                <span class="bigIcon <?php echo $valor_sensor_temperatura > 20 ? 'text-warning' : 'text-primary'; ?> material-symbols-outlined">
    <?php echo $valor_sensor_temperatura > 20 ? 'light_mode' : 'ac_unit'; ?>    
</span>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card dashboardCard bg-body-tertiary border-0 d-flex align-items-center justify-content-center flex-row">
                                <div>
                                    <h6 class="fw-bold fs-6 mb-0">Humidity</h6>
                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                        <div class="d-flex flex-column">
                                            <h5 class="card-title fs-1 fw-bold mb-0"><?php echo $valor_sensor_humidity; ?>%</h5>
                                            <p class="mb-0 fs-7 mainTextColor">11.38% Since last month</p>
                                        </div>
                                    </div>
                                </div>
                                <span class="bigIcon <?php echo $valor_sensor_humidity > 40 ? 'text-primary' : 'text-info'; ?> material-symbols-outlined">
                                    <?php echo $valor_sensor_humidity > 40 ? "rainy" : "humidity_mid" ?>    

                                </span>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="card dashboardCard bg-body-tertiary border-0 d-flex align-items-center justify-content-center flex-row">
                                <div>
                                    <h6 class="fw-bold fs-6 mb-0">Wind</h6>
                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                        <div class="d-flex flex-column">
                                            <h5 class="card-title fs-1 fw-bold mb-0"><?php echo $valor_sensor_wind; ?> km/h</h5>
                                            <p class="mb-0 fs-7 mainTextColor">11.38% Since last month</p>
                                        </div>
                                    </div>
                                </div>
                                <span class="bigIcon <?php echo $valor_sensor_wind > 30 ? 'text-primary' : 'text-white'; ?> material-symbols-outlined">
                                    <?php echo $valor_sensor_wind > 30 ? "air" : "airwave" ?>    
                                </span>
                            </div>
                        </div>
                    </div>