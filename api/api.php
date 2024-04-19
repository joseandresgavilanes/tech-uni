<?php
header('Content-Type: text/html; charset=utf-8');

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    
    // Process temperature data if available
    if(isset($_POST['nome']) && $_POST['valor'] && $_POST['hora']){
        $name_sensor = $_POST['nome'];
        $valor_sensor = $_POST['valor'];
        $hour_sensor = $_POST['hora'];

        // Write temperature data to file
        $resultado = file_put_contents("files/sensors_actuators/$name_sensor/valor.txt", $valor_sensor);
        $resultado_hour = file_put_contents("files/sensors_actuators/$name_sensor/hora.txt", $hour_sensor);
        // Log temperature data if write operation successful
        if($resultado !== false && $resultado_hour !== false ){
            file_put_contents("files/sensors_actuators/$name_sensor/log.txt", $valor_sensor . PHP_EOL, FILE_APPEND);
        }
        http_response_code(200);
    }


} else if ($_SERVER['REQUEST_METHOD'] === "GET") {

    if (isset($_GET['nome'])){
        $sensor_name = $_GET['nome'];
        echo file_get_contents("files/sensors_actuators/$sensor_name/valor.txt");
        http_response_code(200);
    }else{
        http_response_code(400);
    }
} else {
    // 404 response in case something goes wrong
    http_response_code(404);
}
?>

