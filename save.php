<?php

include('conn.php');

// Get all files in csv folder
$csvFolder = "csv";
$files = scandir($csvFolder);

foreach ($files as $file) {
    if ($file === '.' || $file === '..') {
        continue;
    }

    $csvFilePath = $csvFolder . '/' . $file;
    $file = fopen($csvFilePath, "r");

    while (($row = fgetcsv($file)) !== FALSE) {


        if (in_array("BANK", $row)) {
            continue;
            // skip row of csv
        } else {
            // echo '<pre>';
            // print_r($row);
            // echo '</pre>';
            $bank_name = $row[0];
            $ifsc = $row[1];
            $branch = $row[2];
            $b_address = $row[3];
            $city1 = $row[4];
            $city2 = $row[5];
            $b_sate = $row[6];
            $std_code = $row[7];
            $phone = $row[8];

            // Escape the values to prevent SQL injection
            $bank_name = mysqli_real_escape_string($conn, $bank_name);
            $ifsc = mysqli_real_escape_string($conn, $ifsc);
            $branch = mysqli_real_escape_string($conn, $branch);
            $b_address = mysqli_real_escape_string($conn, $b_address);
            $city1 = mysqli_real_escape_string($conn, $city1);
            $city2 = mysqli_real_escape_string($conn, $city2);
            $b_sate = mysqli_real_escape_string($conn, $b_sate);
            $std_code = mysqli_real_escape_string($conn, $std_code);
            $phone = mysqli_real_escape_string($conn, $phone);

            $sql = "INSERT INTO `bank_information` (`bank_name`, `ifsc`, `branch`, `b_address`, `city1`, `city2`, `b_state`, `std_code`, `phone`) VALUES('$bank_name', '$ifsc', '$branch', '$b_address', '$city1', '$city2', '$b_sate', '$std_code', '$phone')";
            mysqli_query($conn, $sql);
        }
    }
    fclose($file);
}
