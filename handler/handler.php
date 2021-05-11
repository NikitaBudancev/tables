<?php
require_once 'connection.php';

$_POST = json_decode(file_get_contents('php://input'), true);

$mysqli = new mysqli($host, $user, $password, $database);
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    exit();
}

require_once 'dataHandler.php';
require_once 'monthHandler.php';

$mysqli->close();

?>