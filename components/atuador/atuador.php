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
                        <h5 id="led-status" class="card-title fs-1 fw-bold mb-0"><?php echo $valor_actuator_led === '1' ? "On" : "Off" ?></h5>
                    </div>
                </div>
            </div>
            <span id="led-icon" class="bigIcon material-symbols-outlined">
                <?php echo $valor_actuator_led === '1' ? "highlight" : "flashlight_off" ?>
            </span>
            <!-- Switch toggle -->
            <button id="toggleLedBtn" class="btn btn-primary">Toggle LED</button>
        </div>
    </div>
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




<script>
document.getElementById('toggleLedBtn').addEventListener('click', function() {
    // Determine the current status of the LED and toggle it
    const currentStatus = <?php echo $valor_actuator_led === '1' ? '1' : '0'; ?>;
    const newStatus = currentStatus === 1 ? 0 : 1;

    // Get current date and time for 'hora' parameter
    const now = new Date();
    const formattedDateTime = now.getFullYear() + '/' +
        ('0' + (now.getMonth() + 1)).slice(-2) + '/' +
        ('0' + now.getDate()).slice(-2) + ' ' +
        ('0' + now.getHours()).slice(-2) + ':' +
        ('0' + now.getMinutes()).slice(-2) + ':' +
        ('0' + now.getSeconds()).slice(-2);

    // Make the POST request to toggle the LED
    fetch('http://127.0.0.1//tech-uni/api/api.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams({
            'nome': 'led',
            'valor': newStatus,
            'hora': formattedDateTime
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Update the UI to reflect the new status
            document.getElementById('led-status').innerText = newStatus === 1 ? 'On' : 'Off';
            document.getElementById('led-icon').innerText = newStatus === 1 ? 'highlight' : 'flashlight_off';
        } else {
            alert('Error toggling LED');
        }
    })
    .catch(error => console.error('Error:', error));
});
</script>
