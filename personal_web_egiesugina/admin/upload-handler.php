<?php
$uploadDir = './images/upload/';
$uploadedFile = $_FILES['upload']['tmp_name'];
$uploadedFileName = $_FILES['upload']['name'];

$uniqueFilename = uniqid() . '_' . $uploadedFileName;

$targetFilePath = $uploadDir . $uniqueFilename;
$url = $_SERVER['REQUEST_URI'];
$scriptDir = dirname($_SERVER['SCRIPT_NAME']);
$imageUrl = $scriptDir . $uniqueFilename;
$hostname = parse_url($url, PHP_URL_HOST);

$segments = explode(".", $hostname);
$domain = implode(".", array_slice($segments, -2));
header('Content-Type: application/json');
if (move_uploaded_file($uploadedFile, $targetFilePath)) {
    $imageUrl = 'localhost' . $scriptDir . '/images/upload/' . $uniqueFilename;
    echo json_encode(

        array(
            'fileName' => '/images/upload/' . $uniqueFilename,
            'success' => true,
        )
    );
} else {
    echo json_encode(
        array(
            'success' => false,
            'error' => 'Failed to upload file.'
        )
    );
}
?>