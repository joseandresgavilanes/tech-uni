<table class="mt-4 table table-striped border-0 border-primary">
    <!-- Table header -->
    <thead>
        <tr>
            <!-- Column headers -->
            <th class="bg-body-tertiary-secondary py-4 mainTextColor" scope="col">#</th>
            <th class="bg-body-tertiary-secondary py-4 mainTextColor" scope="col">Temperature</th>
            <th class="bg-body-tertiary-secondary py-4 mainTextColor" scope="col">Humidity</th>
            <th class="bg-body-tertiary-secondary py-4 mainTextColor" scope="col">Wind</th>
        </tr>
    </thead>
    <!-- Table body -->
    <tbody>
    <?php
    // Read temperature, humidity, and wind logs
    $temperature_logs = file_get_contents('../../api/files/sensors/temperature/log_temperature.txt');
    $humidity_logs = file_get_contents('../../api/files/sensors/humidity/log_humidity.txt');
    $wind_logs = file_get_contents('../../api/files/sensors/wind/log_wind.txt');

    // Split log data into arrays
    $temperature_values = explode("\n", $temperature_logs);
    $humidity_values = explode("\n", $humidity_logs);
    $wind_values = explode("\n", $wind_logs);

    // Determine maximum length of the arrays
    $max_length = max(count($temperature_values), count($humidity_values), count($wind_values));

    // Loop through each row of the table
    for ($index = 0; $index < $max_length; $index++) {
        ?>
        <tr>
            <!-- Row number -->
            <th class="bg-body-tertiary-secondary py-4 mainTextColor" scope="row"><?php echo $index + 1; ?></th>
            <!-- Temperature value -->
            <td class="bg-body-tertiary-secondary py-4 mainTextColor"><?php echo isset($temperature_values[$index]) ? $temperature_values[$index] ."°" : ''; ?></td>
            <!-- Humidity value -->
            <td class="bg-body-tertiary-secondary py-4 mainTextColor"><?php echo isset($humidity_values[$index]) ? $humidity_values[$index] . '%' : ''; ?></td>
            <!-- Wind value -->
            <td class="bg-body-tertiary-secondary py-4 mainTextColor"><?php echo isset($wind_values[$index]) ? $wind_values[$index] . 'k/h' : ''; ?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>