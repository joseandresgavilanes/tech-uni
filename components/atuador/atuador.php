<?php 
// Retrieve actuator data from respective files
$valor_actuator_led = file_get_contents("../../api/files/sensors_actuators/led/valor.txt");
$valor_actuator_door = file_get_contents("../../api/files/sensors_actuators/door/valor.txt");
$valor_actuator_air_conditioning = file_get_contents("../../api/files/sensors_actuators/air_conditioning/valor.txt");
?>

<div class="row g-4 mb-4">
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card switchCard bg-body-tertiary border-0 d-flex align-items-center justify-content-between flex-row flex-md-column">
            <!-- Temperature information container -->
            <div>
                <!-- Temperature title -->
                <h6 class="fw-bold fs-6 mb-0">LED</h6>
                <!-- Temperature value container -->
                <div class="d-flex align-items-center justify-content-between justify-content-md-center">
                    <div class="d-flex flex-column">
                        <!-- Temperature value with bold font -->
                        <h5 class="card-title fs-1 fw-bold mb-0"><?php echo $valor_actuator_led === '1' ? "On" : "Off" ?> </h5>
                    </div>
                </div>
            </div>
            <!-- Switch toggle -->
            <label class="switch">
                <!-- Checkbox input -->
                <input disabled class="cb" type="checkbox" <?php echo $valor_actuator_led === '1' ? "checked" : "" ?> />
                <!-- Toggle switch -->
                <span class="toggle">
                    <!-- Left and right labels for toggle -->
                    <span class="left" <?php echo $valor_actuator_led === '0' ? "checked" : "" ?> >off</span>
                    <span class="right" <?php echo $valor_actuator_led === '1' ? "checked" : "" ?>>on</span>
                </span>
            </label>
        </div>
    </div>
    <!-- Second switch card column -->
    <div class="col-12 col-md-6 col-lg-4">
        <!-- Switch card with background color, no border, and flex layout -->
        <div class="card switchCard bg-body-tertiary border-0 d-flex align-items-center justify-content-between flex-row flex-md-column">
            <!-- Temperature information container -->
            <div>
                <!-- Temperature title -->
                <h6 class="fw-bold fs-6 mb-0">Door</h6>
                <!-- Temperature value container -->
                <div class="d-flex align-items-center justify-content-between justify-content-md-center">
                    <div class="d-flex flex-column">
                        <!-- Temperature value with bold font -->
                        <h5 class="card-title fs-1 fw-bold mb-0"><?php echo $valor_actuator_door === '1' ? "On" : "Off" ?> </h5>
                    </div>
                </div>
            </div>
            <!-- Switch toggle -->
            <label class="switch">
                <!-- Checkbox input -->
                <input disabled class="cb" type="checkbox" <?php echo $valor_actuator_door === '1' ? "checked" : "" ?> />
                <!-- Toggle switch -->
                <span class="toggle">
                    <!-- Left and right labels for toggle -->
                    <span class="left" <?php echo $valor_actuator_door === '0' ? "checked" : "" ?> >off</span>
                    <span class="right" <?php echo $valor_actuator_door === '1' ? "checked" : "" ?>>on</span>
                </span>
            </label>
        </div>
    </div>
    <!-- Third switch card column -->
    <div class="col-12 col-md-6 col-lg-4">
        <!-- Switch card with background color, no border, and flex layout -->
        <div class="card switchCard bg-body-tertiary border-0 d-flex align-items-center justify-content-between flex-row flex-md-column">
            <!-- Temperature information container -->
            <div class="text-center">
                <!-- Temperature title -->
                <h6 class="fw-bold fs-6 mb-0">Air Conditioning</h6>
                <!-- Temperature value container -->
                <div class="d-flex align-items-center justify-content-between justify-content-md-center">
                    <div class="d-flex flex-column text-center">
                        <!-- Temperature value with bold font -->
                        <h5 class="card-title fs-1 fw-bold mb-0"><?php echo $valor_actuator_air_conditioning === '1' ? "On" : "Off" ?> </h5>
                    </div>
                </div>
            </div>
            <!-- Switch toggle -->
            <label class="switch">
                <!-- Checkbox input -->
                <input disabled class="cb" type="checkbox" <?php echo $valor_actuator_air_conditioning === '1' ? "checked" : "" ?> />
                <!-- Toggle switch -->
                <span class="toggle">
                    <!-- Left and right labels for toggle -->
                    <span class="left" <?php echo $valor_actuator_air_conditioning === '0' ? "checked" : "" ?> >off</span>
                    <span class="right" <?php echo $valor_actuator_air_conditioning === '1' ? "checked" : "" ?>>on</span>
                </span>
            </label>
        </div>
    </div>
</div>