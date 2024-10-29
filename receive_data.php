
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['temperature'] = $_POST['temperature'];
    $_SESSION['humidity'] = $_POST['humidity'];
    echo "Data received successfully!";
} else {
    echo "No data received.";
}
?>
