<?php
header('Content-Type: text/html; charset=utf-8');

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    
    // Process temperature data if available
    if(isset($_POST['temperature'])){
        $valor_sensor_temperature=$_POST['temperature'];
        // Write temperature data to file
        $resultado_temperature = file_put_contents("files/sensors/temperature/temperature.txt", $valor_sensor_temperature);
        // Log temperature data if write operation successful
        if($resultado_temperature !== false){
            file_put_contents("files/sensors/temperature/log_temperature.txt", $valor_sensor_temperature . PHP_EOL, FILE_APPEND);
        }
    }

    // Same process as temperature to humidity
    if(isset($_POST['humidity'])){
        $valor_sensor_humidity=$_POST['humidity'];
        $resultado_humidity = file_put_contents("files/sensors/humidity/humidity.txt", $valor_sensor_humidity);
        if($resultado_humidity !== false){
            file_put_contents("files/sensors/humidity/log_humidity.txt", $valor_sensor_humidity . PHP_EOL, FILE_APPEND);
        }
    }

    // Same process as temperature to wind
    if(isset($_POST['wind'])){
        $valor_sensor_wind=$_POST['wind'];
        $resultado_wind = file_put_contents("files/sensors/wind/wind.txt", $valor_sensor_wind);
        if($resultado_wind !== false){
            file_put_contents("files/sensors/wind/log_wind.txt", $valor_sensor_wind . PHP_EOL, FILE_APPEND);
        }
    }

} else if ($_SERVER['REQUEST_METHOD'] === "GET") {
    // Process GET requests (not implemented yet, as we are not working with sensors and atuadores until now)
} else {
    // 404 response in case something goes wrong
    http_response_code(404);
}
?>

