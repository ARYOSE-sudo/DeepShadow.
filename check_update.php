<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

echo json_encode([
    "app_version"  => "2.0",
    "has_update"   => true,
    "download_url" => "http://localhost/cyber/st-setup-1.8.30.exe",
    "data_version" => "2",
    "data_url"     => "http://localhost/cyber/data.json"
]);
?>
