<?php 
    // Retrieve actuator data from respective files
    $valor_actuator_led = file_get_contents("../../api/files/sensors_actuators/led/valor.txt");
    $valor_actuator_door = file_get_contents("../../api/files/sensors_actuators/door/valor.txt");
    $valor_actuator_air_conditioning = file_get_contents("../../api/files/sensors_actuators/air_conditioning/valor.txt");
?>

<div class="row g-4 my-2">
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card switchCard bg-body-tertiary border-0 d-flex align-items-center justify-content-between flex-column">
            <!-- LED -->
            <div>
                <h6 class="text-center fw-bold fs-6 mb-0">LED</h6>
                <div class="d-flex align-items-center justify-content-between justify-content-md-center">
                    <div class="d-flex flex-column">
                        <h5 class="card-title fs-1 fw-bold mb-0"><?php echo $valor_actuator_led === '1' ? "On" : "Off" ?></h5>
                    </div>
                </div>
            </div>
            <span class="bigIcon material-symbols-outlined">
                <?php echo $valor_actuator_led === '1' ? "highlight" : "flashlight_off" ?>
            </span>
            <!-- Switch toggle -->
            <label class="switch">
                <input disabled class="cb" type="checkbox" <?php echo $valor_actuator_led === '1' ? "checked" : "" ?>>
                <span class="toggle">
                    <span class="left">off</span>
                    <span class="right">on</span>
                </span>
            </label>
        </div>
    </div>
    <!-- Door -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card switchCard bg-body-tertiary border-0 d-flex align-items-center justify-content-between flex-column">
            <div>
                <h6 class="text-center fw-bold fs-6 mb-0">Door</h6>
                <div class="d-flex align-items-center justify-content-between justify-content-md-center">
                    <div class="d-flex flex-column">
                        <h5 class="card-title text-center fs-1 fw-bold mb-0"><?php echo $valor_actuator_door === '1' ? "On" : "Off" ?></h5>
                    </div>
                </div>
            </div>
            <span class="bigIcon material-symbols-outlined">
                <?php echo $valor_actuator_door === '1' ? "door_open" : "door_front" ?>
            </span>
            <!-- Switch toggle -->
            <label class="switch">
                <input disabled class="cb" type="checkbox" <?php echo $valor_actuator_door === '1' ? "checked" : "" ?>>
                <span class="toggle">
                    <span class="left">off</span>
                    <span class="right">on</span>
                </span>
            </label>
        </div>
    </div>
    <!-- Air Conditioning -->
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card switchCard bg-body-tertiary border-0 d-flex align-items-center justify-content-between flex-column">
            <div>
                <h6 class="text-center fw-bold fs-6 mb-0">Air Conditioning</h6>
                <div class="d-flex align-items-center justify-content-between justify-content-md-center text-center">
                    <div class="d-flex flex-column">
                        <h5 class="card-title fs-1 text-center fw-bold mb-0"><?php echo $valor_actuator_air_conditioning === '1' ? "On" : "Off" ?></h5>
                    </div>
                </div>
            </div>
            <span class="bigIcon material-symbols-outlined">
                <?php echo $valor_actuator_air_conditioning === '1' ? "mode_fan" : "mode_fan_off" ?>
            </span>
            <!-- Switch toggle -->
            <label class="switch">
                <input disabled class="cb" type="checkbox" <?php echo $valor_actuator_air_conditioning === '1' ? "checked" : "" ?>>
                <span class="toggle">
                    <span class="left">off</span>
                    <span class="right">on</span>
                </span>
            </label>
        </div>
    </div>
</div>
