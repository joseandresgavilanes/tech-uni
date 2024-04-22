<?php
header('Content-Type: text/html; charset=utf-8');

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    
    // Process temperature data if available
    if(isset($_POST['nome'])){
        $name_sensor = $_POST['nome'];

        if (isset($_POST['valor'])) {
            
            $valor_sensor = $_POST['valor'];
            file_put_contents("files/sensors_actuators/$name_sensor/valor.txt", $valor_sensor);
            http_response_code(201);
        }else {
            http_response_code(500); // Error de servidor al escribir en el archivo
        }


        if (isset($_POST['hora'])) {
            
            $hour_sensor = $_POST['hora'];
            $result_hour = file_put_contents("files/sensors_actuators/$name_sensor/hora.txt", $hour_sensor);
            http_response_code(201);
        }else {
            http_response_code(500); // Error de servidor al escribir en el archivo
        }

        
        if (isset($_POST['valor']) && isset($_POST['hora'])) {
            
            $valor_sensor = $_POST['valor'];
            $hour_sensor = $_POST['hora'];
            
            // Write temperature data to file
            $result = file_put_contents("files/sensors_actuators/$name_sensor/valor.txt", $valor_sensor);
            $result_hour = file_put_contents("files/sensors_actuators/$name_sensor/hora.txt", $hour_sensor);
            // Log temperature data if write operation successful
            if($result !== false && $result_hour !== false ){
                file_put_contents("files/sensors_actuators/$name_sensor/log.txt", PHP_EOL . $valor_sensor .";". $hour_sensor, FILE_APPEND);
            }
            http_response_code(201);
        }else {
            http_response_code(500);
        }
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
    http_response_code(501);
    echo 'Method not allowed';
}
?>

