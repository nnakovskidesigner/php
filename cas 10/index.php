<?php

require('db_config.php');


$sql = 'SELECT * FROM prisustvo';
$statement = $conn->query($sql);

$redovnost = $statement->fetchAll(PDO::FETCH_ASSOC);


$data = [
    "id" => 2,
    "FirstName" => "Dime",
    "LastName" => "Vakanski",
    "Attendance" => 1,
    "Date" => "2023-06-20"
];

$data = [
    "id" => 2,
    "FirstName" => "Dime",
    "LastName" => "Vakanski",
    "Attendance" => 1,
    "Date" => "2023-06-20"
];

foreach ($data as $key => $value) {
    echo '<pre style="background-color: #f5f5f5; padding: 10px; border: 1px solid #ccc; font-family: monospace;">';
    echo "$key: ";
    var_dump($value);
    echo '</pre>';

    echo " ";

    if ($key === "Attendance") {
        echo ($value == 1) ? "Prisuten" : "Ne e prisuten";
    }
}





?>