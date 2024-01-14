<?php

include('conn.php');

// Insert Data
$csvFilePath = "ipad model detail.csv";
$file = fopen($csvFilePath, "r");

while (($row = fgetcsv($file)) !== FALSE) {

    // echo '<pre>';
    // print_r($row);
    // echo '</pre>';

    if (in_array("name", $row)) {
        continue;
        // skip row of csv
    } else {
        $name = $row[0];
        $model = $row[1];
        $generation = $row[2];
        $model_number = $row[3];
        $yourpds = $row[4];

        $sql = "INSERT INTO `yourpds_data` (`name`, `model`, `generation`, `model_number`, `yourpds`) VALUES ('$name', '$model', '$generation', '$model_number', '$yourpds')";
        $insert = mysqli_query($conn, $sql);
    }
}
fclose($file);
?>