<table class="mt-4 table table-striped border-0 border-primary">
    <thead>
        <tr>
            <th class="bg-body-tertiary-secondary py-4 mainTextColor" scope="col">#</th>
            <th class="bg-body-tertiary-secondary py-4 mainTextColor" scope="col">Temperature</th>
            <th class="bg-body-tertiary-secondary py-4 mainTextColor" scope="col">Humidity</th>
            <th class="bg-body-tertiary-secondary py-4 mainTextColor" scope="col">Wind</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $temperature_logs = file_get_contents('../../api/files/sensors/temperature/log_temperature.txt');
    $humidity_logs = file_get_contents('../../api/files/sensors/humidity/log_humidity.txt');
    $wind_logs = file_get_contents('../../api/files/sensors/wind/log_wind.txt');

    $temperature_values = explode("\n", $temperature_logs);
    $humidity_values = explode("\n", $humidity_logs);
    $wind_values = explode("\n", $wind_logs);

    $max_length = max(count($temperature_values), count($humidity_values), count($wind_values));

    for ($index = 0; $index < $max_length; $index++) {
        ?>
        <tr>
            <th class="bg-body-tertiary-secondary py-4 mainTextColor" scope="row"><?php echo $index + 1; ?></th>
            <td class="bg-body-tertiary-secondary py-4 mainTextColor"><?php echo isset($temperature_values[$index]) ? $temperature_values[$index] ."°" : ''; ?></td>
            <td class="bg-body-tertiary-secondary py-4 mainTextColor"><?php echo isset($humidity_values[$index]) ? $humidity_values[$index] . '%' : ''; ?></td>
            <td class="bg-body-tertiary-secondary py-4 mainTextColor"><?php echo isset($wind_values[$index]) ? $wind_values[$index] . 'k/h' : ''; ?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
