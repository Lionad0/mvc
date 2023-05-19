<?php

if(!session_id()) session_start();


require_once '../app/init.php';



$app = new App();

// $data_json = [
//     "nama" => "jesen",
//     "npm" => 14081022002,
//     "status_mahasiswa" => true
// ];

// echo json_encode($data_json);


// $contents = file_get_contents("data.json");

// $contents = utf8_encode($contents);

// $results = json_decode($contents);

// var_dump($results);