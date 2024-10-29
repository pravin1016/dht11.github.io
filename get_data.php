
<?php
session_start();

$data = [
    'temperature' => isset($_SESSION['temperature']) ? $_SESSION['temperature'] : 'N/A',
    'humidity' => isset($_SESSION['humidity']) ? $_SESSION['humidity'] : 'N/A'
];
echo json_encode($data);
?>
